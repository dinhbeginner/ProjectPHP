<?php

$act = 'cart';

if (isset($_GET['act'])) {
    $act = $_GET['act'];
}

switch ($act) {
    case 'cart':
        include_once "View/cart.php";
        break;

    case 'cart_action':
        if (!isset($_SESSION['cart'])) $_SESSION['cart'] = [];

        if (isset($_POST['mua']) && ($_POST['mua'])) {
            $id = $_POST['id'];
            $img = $_POST['img'];
            $name = $_POST['name'];
            $size = isset($_POST['size']) ? $_POST['size'] : '';
            $price = $_POST['price'];
            if (!isset($_POST['soluong']) || empty($_POST['soluong'])) {
                $soluong = 1;
            } else {
                $soluong = $_POST['soluong'];
            }
            
            $id_menu=$_POST['id_menu'];
            // Check if the item is already in the cart
            $flag = false;
           
            foreach ($_SESSION['cart'] as &$item) {
                if ($item[2] == $name && $item[3] == $size) {
                    $flag = true;
                    $item[5] = $soluong; // Update the quantity
                    break;
                }
            }

            // If the item is not in the cart, add it
            if (!$flag) {
                $giohang = [$id, $img, $name, $size, $price, $soluong, $id_menu];
                $_SESSION['cart'][] = $giohang;
            }
        }

        include_once "View/cart.php";
        break;
    case 'update':
        if (!isset($_SESSION['cart'])) $_SESSION['cart'] = [];

        if (isset($_POST['update']) && ($_POST['update'])) {

            $img = $_POST['img'];
            $name = $_POST['name'];
            $size = isset($_POST['size']) ? $_POST['size'] : '';
            $price = $_POST['price'];
            $soluongs = $_POST['soluong'];

            foreach ($_SESSION['cart'] as $index => &$item) {
                // Check if the item is in the array of submitted quantities
                if (isset($soluongs[$index])) {
                    $item[5] = $soluongs[$index]; // Update the quantity
                }
            }
        }

        include_once "View/cart.php";
        break;
}
