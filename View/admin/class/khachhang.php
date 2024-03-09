<?php
define('__ROOT_', dirname(dirname(__FILE__)));
include(__ROOT_ . '/database.php');
class khachhang
{
    private $db;

    public function __construct()
    {
        // Initialize the Database class
        $this->db = new Database;
    }
    function kh()
    {
        $query = "SELECT * FROM tbl_khachhang ORDER BY id_customer ASC";
        $result = $this->db->select($query);
        return $result;
    }
    public function delete_kh($id_customer)
    {
        try {
            $query = "DELETE FROM tbl_khachhang WHERE id_customer=:id_customer";
            $values = array(':id_customer' => $id_customer);
            $result = $this->db->delete($query, $values);
            return $result;
        } catch (PDOException $e) {
            // Handle the exception (log it, show an error message, etc.)
            return false;
        }
    }


}
