<?php
define('__ROOT_', dirname(dirname(__FILE__)));

include(__ROOT_ . '/database.php');

class dashboard
{
    // ... (existing code)
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }
    function menu()
    {
        $db = new connect();
        $query = "SELECT m.ten_menu, COUNT(p.product_id) AS total_products
        FROM tbl_menu m
        LEFT JOIN tbl_product p ON m.id_menu = p.id_menu
        LEFT JOIN tbl_infor_product ip ON p.product_id = ip.id_product
        GROUP BY m.id_menu;
        ";
        $result = $this->db->select($query);
        return $result;
    }

    function kh()
    {
        $db = new connect();
        $query = "SELECT COUNT(*) AS total_menu FROM tbl_khachhang";
        $result = $this->db->select($query);
        return $result;
    }
    function sp()
    {
        $db = new connect();
        $query = "SELECT SUM(quantity) AS total_product FROM tbl_infor_product";
        $result = $this->db->select($query);
        return $result;
    }
    function bsp()
    {
        $db = new connect();
        $query = "SELECT SUM(quantity) AS total FROM order_details WHERE status=1";
        $result = $this->db->select($query);
        return $result;
    }
    function notcomfirmsp()
    {
        $db = new connect();
        $query = "SELECT COUNT(*) AS total FROM order_details WHERE status=0";
        $result = $this->db->select($query);
        return $result;
    }

    public function tkspn($year)
    {
        $db = new Database();
        $query = "SELECT m.ten_menu, SUM(od.quantity) AS total_products
                  FROM tbl_menu m
                  LEFT JOIN tbl_product p ON m.id_menu = p.id_menu
                  LEFT JOIN order_details od ON p.product_id = od.product_id
                  WHERE YEAR(od.date) = :year
                  GROUP BY m.ten_menu;";
        $params = array(':year' => $year);
        $result = $db->select($query, $params);
        if ($result) {
            return $result;
        } else {
            // Lưu thông điệp cảnh báo vào biến JavaScript
            return 'no_data';
        }
    }

    public function tkspt($year, $month)
    {
        $db = new Database(); // Assuming Database class exists
        $query = "SELECT m.ten_menu, SUM(od.quantity) AS total_products
                  FROM tbl_menu m
                  LEFT JOIN tbl_product p ON m.id_menu = p.id_menu
                  LEFT JOIN order_details od ON p.product_id = od.product_id
                  WHERE YEAR(od.date) = :year
                  AND MONTH(od.date) = :month
                  GROUP BY m.ten_menu;";
        $params = array(':year' => $year, ':month' => $month);
        $result = $db->select($query, $params); // Assuming select method is defined in Database class
        return $result;
    }

    public function doanhthutheonam($year)
    {
        $db = new Database();
        $query = "SELECT  SUM(CAST(REPLACE(total, ',', '') AS DECIMAL(10,2))) AS totals
                  FROM orders
                 
                  WHERE YEAR(order_date) = :year";

        $params = array(':year' => $year);
        $result = $db->select($query, $params);
        if ($result) {
            return $result;
        } else {
            // Lưu thông điệp cảnh báo vào biến JavaScript
            return 'no_data';
        }
    }
    // ... (existing code)
}
