<?php
class hoadon
{
    function insertHoaDon($id_kh, $fullname, $address, $phone, $email, $total)
    {
        $db = new connect();
        $date = new DateTime('now');
        $ngay = $date->format('Y-m-d'); // Format in 'Y-m-d' as in the database

        // Insert data into the 'orders' table
        $query = "INSERT INTO orders (id_customer, fullname, address, phone, email, total, order_date) 
                  VALUES ('$id_kh', '$fullname', '$address', '$phone', '$email', '$total', '$ngay')";
        $db->exec($query);

        // Retrieve the auto-incremented ID of the inserted row (order ID)
        $select = "SELECT id FROM orders ORDER BY id DESC LIMIT 1";
        $masohd = $db->getInstance($select);

        return $masohd; // Return the order ID
    }

    function insertCTHoaDon($order_id, $product_id, $product_name, $product_size, $quantity, $product_price)
    {
        $db = new connect();
    
        // Assuming $order_id is an array, extract the first element
        $order_id = is_array($order_id) ? reset($order_id) : $order_id;
    
        $query = "INSERT INTO order_details (order_id, product_id, product_name, product_size, quantity, product_price)
                  VALUES ('$order_id', '$product_id', '$product_name', '$product_size', '$quantity', '$product_price')";
        $db->exec($query);
    }
   
    function updateSL(){
        $db = new connect();
        $query = "UPDATE tbl_infor_product
        JOIN (
            SELECT product_id, MAX(id) AS latest_order_id
            FROM order_details
            GROUP BY product_id
            ORDER BY latest_order_id DESC
            LIMIT 1
        ) AS latest_orders
        ON tbl_infor_product.id_product = latest_orders.product_id
        JOIN order_details
        ON latest_orders.product_id = order_details.product_id AND latest_orders.latest_order_id = order_details.id
        SET tbl_infor_product.quantity = tbl_infor_product.quantity - order_details.quantity";
        $db->exec($query);
    }
    
}

    