<?php
define('__ROOT_', dirname(dirname(__FILE__)));
include(__ROOT_ . '/database.php');
class hoadon
{


    private $db;

    public function __construct()
    {
        // Initialize the Database class
        $this->db = new Database;
    }

    function order()
    {
        $db = new connect();
        $query =  "SELECT 
        orders.id AS order_id, 
        order_details.id AS order_detail_id, 
        orders.id_customer, 
        orders.fullname, 
        orders.address, 
        orders.phone, 
        orders.email, 
        orders.total, 
        orders.order_date,
        order_details.id, 
        order_details.product_id, 
        order_details.product_name, 
        order_details.product_size, 
        order_details.quantity, 
        order_details.status, 
        order_details.product_price, 
        tbl_product.*,
        tbl_khachhang.*
    FROM orders 
    JOIN order_details ON orders.id = order_details.order_id 
    JOIN tbl_product ON order_details.product_id = tbl_product.product_id
    JOIN tbl_khachhang ON orders.id_customer = tbl_khachhang.id_customer";
        return $db->getList($query);
    }
    function comfirm()
    {
        $db = new connect();
        $query =  "SELECT 
        orders.id AS order_id, 
        order_details.id AS order_detail_id, 
        orders.id_customer, 
        orders.fullname, 
        orders.address, 
        orders.phone, 
        orders.email, 
        orders.total, 
        orders.order_date,
        order_details.id, 
        order_details.product_id, 
        order_details.product_name, 
        order_details.product_size, 
        order_details.quantity, 
        order_details.status, 
        order_details.product_price, 
        tbl_product.*,
        tbl_khachhang.*
    FROM orders 
    JOIN order_details ON orders.id = order_details.order_id 
    JOIN tbl_product ON order_details.product_id = tbl_product.product_id
    JOIN tbl_khachhang ON orders.id_customer = tbl_khachhang.id_customer
    WHERE order_details.status != 0

    ";
        return $db->getList($query);
    }
    function notcomfirm()
    {
        $db = new connect();
        $query =  "SELECT 
        orders.id AS order_id, 
        order_details.id AS order_detail_id, 
        orders.id_customer, 
        orders.fullname, 
        orders.address, 
        orders.phone, 
        orders.email, 
        orders.total, 
        orders.order_date,
        order_details.id, 
        order_details.product_id, 
        order_details.product_name, 
        order_details.product_size, 
        order_details.quantity, 
        order_details.status, 
        order_details.product_price, 
        tbl_product.*,
        tbl_khachhang.*
    FROM orders 
    JOIN order_details ON orders.id = order_details.order_id 
    JOIN tbl_product ON order_details.product_id = tbl_product.product_id
    JOIN tbl_khachhang ON orders.id_customer = tbl_khachhang.id_customer
    WHERE order_details.status != 1

    ";
        return $db->getList($query);
    }
    public function xoa_hd($id_hoadon)
    {
        try {
            $query = "DELETE FROM order_details WHERE id=:id_hoadon";
            $values = array(':id_hoadon' => $id_hoadon);
            $result = $this->db->delete($query, $values);
            return $result;
        } catch (PDOException $e) {
            // Handle the exception (log it, show an error message, etc.)
            return false;
        }
    }
    public function confirm_hd($id_hoadon)
    {
        try {
            $query = "UPDATE order_details SET status = 1 WHERE id = :id_hoadon";
            $values = array(':id_hoadon' => $id_hoadon);
            $result = $this->db->update($query, $values);
            return $result;
        } catch (PDOException $e) {
            // Xử lý ngoại lệ (ghi log, hiển thị thông báo lỗi, v.v.)
            return false;
        }
    }
}
