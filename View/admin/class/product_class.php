
<?php
// Define the root directory
define('__ROOT_', dirname(dirname(__FILE__)));

// Include the database file
include(__ROOT_ . '/database.php');
?>

<?php
class product
{
    private $db;

    public function __construct()
    {
        // Initialize the Database class
        $this->db = new Database;
    }

    // Function to show categories
    public function show_cartegory()
    {
        $query = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc ASC";
        $result = $this->db->select($query);
        return $result;
    }

    // Function to show products
    public function show_pro()
    {
        $query = "SELECT * FROM tbl_infor_product
            INNER JOIN tbl_product ON tbl_infor_product.id_product = tbl_product.product_id
            ORDER BY tbl_product.product_id ASC";
        $result = $this->db->select($query);
        return $result;
    }

    // Function to show brands
    public function show_brand()
    {
        $query = "SELECT tbl_brand.*,tbl_cartegory.cartegory_name
        FROM tbl_brand INNER JOIN tbl_cartegory ON tbl_brand.cartegory_id = tbl_cartegory.cartegory_id
        ORDER BY tbl_brand.brand_id ASC";
        $result = $this->db->select($query);
        return $result;
    }

    // Function to show brands via AJAX
    public function show_brand_ajax($cartegory_id)
    {
        $query = "SELECT * FROM tbl_menu where id_danhmuc ='$cartegory_id'";
        $result = $this->db->select($query);
        return $result;
    }

    // Function to show menus
    public function show_menu()
    {
        $query = "SELECT * FROM tbl_menu";
        $result = $this->db->select($query);
        return $result;
    }

    // Function to show product details for a given product ID
    public function show_brand_product_detail($product_id)
    {
        $query = "SELECT * FROM tbl_product where product_id ='$product_id'";
        $result = $this->db->select($query);
        return $result;
    }

    // Function to show the name of a given category ID
    public function show_name($cartegory_id)
    {
        $query = "SELECT * FROM tbl_cartegory where cartegory_id ='$cartegory_id'";
        $result = $this->db->select($query);
        return $result;
    }

    // Function to show product details for a given product ID
    public function show_products_details($product_id)
    {
        $query = "SELECT * FROM tbl_product_img_desc where product_id ='$product_id'";
        $result = $this->db->select($query);
        return $result;
    }

    // Function to insert a new product
    public function insertProduct($data, $files)
    {
        try {
            // Validate and sanitize input data...

            // Check if a file was uploaded...
            if (!empty($files['product_img']['name']) && !empty($files['product_img2']['name'])) {
                // Move uploaded files...

                // Insert product information into the database
                $product_name = $_POST['product_name'];
                $id_menu = $_POST['id_menu'];
                $product_price = $_POST['product_price'];
                $product_price_new = $_POST['product_price_new'];
                $quantity = $_POST['quantity'];
                $describe = $_POST['product_desc'];
                $status = $_POST['status'];

                $product_img = $_FILES['product_img']['name'];
                $product_img2 = $_FILES['product_img2']['name'];

                $allowed_extensions = array('jpg', 'jpeg', 'png', 'gif');
                $file_extension_img = strtolower(pathinfo($product_img, PATHINFO_EXTENSION));
                $file_extension_img2 = strtolower(pathinfo($product_img2, PATHINFO_EXTENSION));

                if (in_array($file_extension_img, $allowed_extensions) && in_array($file_extension_img2, $allowed_extensions)) {
                    // Move the uploaded files to the "uploads" directory
                    $uploadPath = "../../assets/images/products/";
                    move_uploaded_file($_FILES['product_img']['tmp_name'], $uploadPath . $product_img);
                    move_uploaded_file($_FILES['product_img2']['tmp_name'], $uploadPath . $product_img2);

                    // Initialize Database class
                    $database = new Database();

                    // Insert into tbl_product
                    $queryProduct = "INSERT INTO tbl_product (
                        product_id,
                        product_name,
                        id_danhmuc,
                        id_menu,
                        product_price,
                        product_price_new,
                        product_img,
                        product_img2
                    ) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

                    $valuesProduct = [null, $product_name, 2, $id_menu, $product_price, $product_price_new, $product_img, $product_img2];

                    $resultProduct = $database->insert($queryProduct, $valuesProduct);

                    if ($resultProduct) {
                        $product_id = $database->lastInsertId();

                        // Insert into tbl_infor_product
                        $queryInforProduct = "INSERT INTO tbl_infor_product (
                            id,
                            id_product, 
                            quantity, 
                            status, 
                            `describe`
                        ) VALUES (null, ?, ?, ?, ?)";

                        $valuesInforProduct = [$product_id, $quantity, $status, $describe];

                        $resultInforProduct = $database->insert($queryInforProduct, $valuesInforProduct);

                        if ($resultInforProduct) {
                            return true; // Both insertions were successful
                        } else {
                            return 'tbl_infor_product'; // Error inserting into tbl_infor_product
                        }
                    } else {
                        return "tbl_product"; // Error inserting into tbl_product
                    }   
                } else {
                    // Invalid file type
                    return "Invalid file type. Only JPG, JPEG, PNG, and GIF files are allowed.";
                }
            } else {
                // File not uploaded
                return "Please upload both product_img and product_img2 files.";
            }
        } catch (Exception $e) {
            // Log or display the actual error message
            error_log("Error: " . $e->getMessage(), 0);
            return "Error: " . $e->getMessage();
        }
    }
    public function update_product($data, $product_id, $files)
    {
        try {
            // Extract product information from $data
            $product_name = $data['product_name'];
            $id_menu = $data['id_menu'][0];
            $product_price = $data['product_price'];
            $product_price_new = $data['product_price_new'];
            $quantity = $data['quantity'];
            $describe = $data['product_desc'];
            $status = $data['status'];

            // Check if a file was uploaded
            if (!empty($files['product_img']['name'])) {
                $product_img = $_FILES['product_img']['name'];
                $product_img2 = $_FILES['product_img2']['name'];

                $allowed_extensions = array('jpg', 'jpeg', 'png', 'gif');
                $file_extension_img = strtolower(pathinfo($product_img, PATHINFO_EXTENSION));
                $file_extension_img2 = strtolower(pathinfo($product_img2, PATHINFO_EXTENSION));

                if (in_array($file_extension_img, $allowed_extensions) && in_array($file_extension_img2, $allowed_extensions)) {
                    // Move the uploaded file to the "uploads" directory
                    $uploadPath = "../../assets/images/products/";
                    move_uploaded_file($_FILES['product_img']['tmp_name'], $uploadPath . $product_img);
                    move_uploaded_file($_FILES['product_img2']['tmp_name'], $uploadPath . $product_img2);
                } else {
                    // Invalid file type
                    echo "<script>alert('Invalid file type. Only JPG, JPEG, PNG, and GIF files are allowed.');</script>";
                    return false;
                }
            }

            // Initialize Database class
            $database = new Database();

            // Update product information in the database
            $query = "UPDATE tbl_product SET
                        product_name = ?,
                        id_menu = ?,
                        product_price = ?,
                        product_price_new = ?,
                        product_img = ?,
                        product_img2 = ?
                        WHERE product_id = ?";

            $values = [$product_name, $id_menu, $product_price, $product_price_new, $product_img, $product_img2, $product_id];

            $result = $database->update($query, $values);

            // Check if the update was successful
            if ($result) {
                // Update additional product information
                $queryInforProduct = "UPDATE tbl_infor_product SET
                                        quantity = ?,
                                        status = ?,
                                        `describe` = ?
                                        WHERE id_product = ?";

                $valuesInforProduct = [$quantity, $status, $describe, $product_id];

                $resultInforProduct = $database->update($queryInforProduct, $valuesInforProduct);

                // Handle product images description update
                // You need to implement the logic for updating product images descriptions here if needed.

                return true; // Return true if the update was successful
            } else {
                return false; // Return false if the update failed
            }
        } catch (Exception $e) {
            // Log or display the actual error message
            error_log("Error: " . $e->getMessage(), 0);
            return "Error: " . $e->getMessage();
        }
    }








    public function get_product($product_id)
    {
        $query = "SELECT* FROM tbl_product where product_id ='$product_id'";
        $result = $this->db->select($query);
        return $result;
    }
    public function get_infor($product_id)
    {
        $query = "SELECT* FROM tbl_infor_product where id_product ='$product_id'";
        $result = $this->db->select($query);
        return $result;
    }


    public function delete_product($id_product)
    {
        try {
            // Delete records from tbl_product
            $queryProduct = "DELETE FROM tbl_product WHERE product_id=:product_id";
            $valuesProduct = array(':product_id' => $id_product);
            $resultProduct = $this->db->delete($queryProduct, $valuesProduct);

            // Delete records from tbl_infor_product
            $queryInforProduct = "DELETE FROM tbl_infor_product WHERE id_product=:id_product";
            $valuesInforProduct = array(':id_product' => $id_product);
            $resultInforProduct = $this->db->delete($queryInforProduct, $valuesInforProduct);

            // Check if both deletion operations were successful
            if ($resultProduct && $resultInforProduct) {
                return true; // Both deletions were successful
            } else {
                return false; // At least one deletion failed
            }
        } catch (PDOException $e) {
            // Handle the exception (log it, show an error message, etc.)
            error_log("Error deleting product: " . $e->getMessage()); // Log the error
            return false; // Return false to indicate deletion failed
        }
    }
}
?>