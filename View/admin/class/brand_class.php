<?php
define('__ROOT_', dirname(dirname(__FILE__)));
include (__ROOT_ . '/database.php');
class Brand
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function insert_brand($category_id, $brand_name, $brand_image)
    {
        try {
            // Validate and handle image upload
            $uploadDir = "../../assets/images/demoes/products/"; // Replace with your actual upload directory
            $uploadedFile = $uploadDir . basename($brand_image['name']);
            $fileImag = basename($brand_image['name']);
            $id_danhmuc='2';
            if (move_uploaded_file($brand_image['tmp_name'], $uploadedFile)) {
                // Image uploaded successfully, proceed with database insertion
                // ... Your existing code for database insertion ...

                // Example database insertion, modify according to your database structure
                $query = "INSERT INTO tbl_menu (id_menu, id_danhmuc, ten_menu, imag_danhmuc_) VALUES (NULL, :id_danhmuc, :brand_name, :brand_image)";
                $values = array(':id_danhmuc' => $id_danhmuc, ':brand_name' => $brand_name, ':brand_image' => $brand_image['name']);
                
                $result = $this->db->insert($query, $values);

                if ($result !== false) {
                    // Success message or redirection
                    header('location:brandlist.php');
                } else {
                    echo "Error inserting brand.";
                }
            } else {
                echo "Image upload failed!";
            }

            return $result;
        } catch (PDOException $e) {
            // Handle the exception (log it, show an error message, etc.)
            return false;
        }
    }

    public function show_category()
    {
        $query = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc ASC";
        $result = $this->db->select($query);
        return $result;
    }

    public function show_brand()
    {
        $query = "SELECT tbl_menu.*, tbl_danhmuc.name_danhmuc as category_name
                  FROM tbl_menu
                  INNER JOIN tbl_danhmuc ON tbl_menu.id_danhmuc = tbl_danhmuc.id_danhmuc
                  ORDER BY tbl_menu.id_menu ASC";
        $result = $this->db->select($query);
        return $result;
    }

    public function get_brand($brand_id)
    {
        $query = "SELECT * FROM tbl_menu WHERE id_menu ='$brand_id'";
        $result = $this->db->select($query);
        return $result;
    }


    public function update_brand($category_id, $brand_name, $brand_id, $image_path)
    {
        try {
            $query = "UPDATE tbl_menu SET ten_menu=?, id_danhmuc=?, imag_danhmuc_=? WHERE id_menu=?";
            $values = array($brand_name, $category_id, $image_path, $brand_id);
            $result = $this->db->update($query, $values);

            if ($result !== false) {
                header('location:brandlist.php');
            } else {
                echo "Error updating brand.";
            }

            return $result;
        } catch (PDOException $e) {
            // Handle the exception (log it, show an error message, etc.)
            return false;
        }
    }



    public function delete_brand($id_menu)
    {
        try {
            $query = "DELETE FROM tbl_menu WHERE id_menu=:id_menu";
            $values = array(':id_menu' => $id_menu);
            $result = $this->db->delete($query, $values);
            return $result;
        } catch (PDOException $e) {
            // Handle the exception (log it, show an error message, etc.)
            return false;
        }
    }
    
}
