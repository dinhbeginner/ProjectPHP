
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
                    $uploadPath = "assets/upload/products/";
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
    

    // Function to update a product
    public function update_product($data, $product_id, $files)
    {
        $product_name = $data['product_name'];
        $cartegory_id = $data['cartegory_id'];
        $brand_id = $data['brand_id'];
        $product_price = $data['product_price'];
        $product_price_new = $data['product_price_new'];
        $product_desc = $data['product_desc'];

        // Check if a file was uploaded
        if (!empty($files['product_img']['name'])) {
            $product_img = $files['product_img']['name'];

            // Check if the uploaded file is an image
            $allowed_extensions = array('jpg', 'jpeg', 'png', 'gif');
            $file_extension = strtolower(pathinfo($product_img, PATHINFO_EXTENSION));

            if (in_array($file_extension, $allowed_extensions)) {
                // Move the uploaded file to the "uploads" directory
                move_uploaded_file($files['product_img']['tmp_name'], "uploads/" . $product_img);
            } else {
                // Invalid file type
                echo "<script>alert('Invalid file type. Only JPG, JPEG, PNG, and GIF files are allowed.');</script>";
                return false;
            }
        }

        // Delete existing images for the product

        // Check if the product_img_desc array is set
        if (isset($files['product_img_desc'])) {
            $deleteQuery = "DELETE FROM tbl_product_img_desc WHERE product_id='$product_id'";
            $this->db->delete($deleteQuery);

            foreach ($files['product_img_desc']['name'] as $key => $value) {
                $filename = $files['product_img_desc']['name'][$key];
                $tmp_name = $files['product_img_desc']['tmp_name'][$key];

                // Move each uploaded file to the "uploads" directory
                move_uploaded_file($tmp_name, "uploads/" . $filename);

                // Insert the image description into the database
                $query = "INSERT INTO tbl_product_img_desc (product_id, product_img_desc) VALUES ('$product_id', '$filename')";
                $result = $this->db->insert($query);
            }
        }

        // Update product information in the database
        $query = "UPDATE tbl_product SET
                    product_name = '$product_name',
                    cartegory_id = '$cartegory_id',
                    brand_id = '$brand_id',
                    product_price = '$product_price',
                    product_price_new = '$product_price_new',
                    product_desc = '$product_desc',
                    product_img = '$product_img'
                  WHERE product_id = '$product_id'";

        $result = $this->db->update($query);

        return $result;
        header('location:productlist.php');
    }

    // Function to get product details by ID
    public function get_product($product_id)
    {
        $query = "SELECT * FROM tbl_product where product_id ='$product_id'";
        $result = $this->db->select($query);
        return $result;
    }

    // Function to update brand
    public function update_brand($cartegory_id, $brand_name, $brand_id)
    {
        $query = "UPDATE tbl_brand SET brand_name='$brand_name',cartegory_id ='$cartegory_id' WHERE brand_id='$brand_id'";
        $result = $this->db->update($query);
        header('location:brandlist.php');
        return $result;
    }

    // Function to delete brand
    public function delete_brand($brand_id)
    {
        $query = "DELETE FROM tbl_brand  WHERE brand_id='$brand_id'";
        $result = $this->db->delete($query);
        header('location:brandlist.php');
        return $result;
    }
}
?>