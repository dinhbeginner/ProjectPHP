<?php
define('__ROOT_', dirname(dirname(__FILE__)));
include (__ROOT_ . '/database.php');

class Category
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function insertCategory($name_danhmuc)
    {
        try {
            $query = "INSERT INTO tbl_danhmuc (name_danhmuc) VALUES (:name_danhmuc)";
            $values = array(':name_danhmuc' => $name_danhmuc);
            $result = $this->db->insert($query, $values);
            return $result;
        } catch (PDOException $e) {
            // Handle the exception (log it, show an error message, etc.)
            return false;
        }
    }

// In your Category class
public function showCategory()
{
    $query = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc ASC";
    $result = $this->db->select($query);

    return $result; // Assuming select() method returns a valid PDOStatement
}


    public function getCategory($category_id)
    {
        $query = "SELECT * FROM tbl_danhmuc WHERE id_danhmuc ='$category_id'";
        $result = $this->db->select($query);
        return $result;
    }

    public function updateCategory($category_name, $category_id)
    {
        try {
            $query = "UPDATE tbl_danhmuc SET name_danhmuc=:category_name WHERE id_danhmuc=:category_id";
            $values = array(':category_name' => $category_name, ':category_id' => $category_id);
            $result = $this->db->update($query, $values);
            return $result;
        } catch (PDOException $e) {
            // Handle the exception (log it, show an error message, etc.)
            return false;
        }
    }

    public function deleteCategory($category_id)
    {
        try {
            $query = "DELETE FROM tbl_danhmuc WHERE id_danhmuc=:category_id";
            $values = array(':category_id' => $category_id);
            $result = $this->db->delete($query, $values);
            return $result;
        } catch (PDOException $e) {
            // Handle the exception (log it, show an error message, etc.)
            return false;
        }
    }
}
?>