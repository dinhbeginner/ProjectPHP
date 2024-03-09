
<?php
class dashboard
{
    function order($id_khachhang)
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
        order_details.product_id, 
        order_details.product_name, 
        order_details.product_size, 
        order_details.quantity, 
        order_details.product_price, 
        tbl_product.*
    FROM orders 
    JOIN order_details ON orders.id = order_details.order_id 
    JOIN tbl_product ON order_details.product_id = tbl_product.product_id
    WHERE orders.id_customer='$id_khachhang'";
        return $db->getList($query);
    }
    function deleteOrder($order_detail_id)
    {
        $db = new connect();
        $query = "DELETE FROM order_details WHERE id = $order_detail_id";
        return $db->exec($query);
    }
}
?>