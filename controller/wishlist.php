<?php

$act = 'wishlist';

if (isset($_GET['act'])) {
    $act = $_GET['act'];
}

switch ($act) {
    case 'wishlist':
        include_once "View/wishlist.php";
        break;

    case 'wishlist_action':
        if (!isset($_SESSION['wishlist'])) $_SESSION['wishlist'] = [];

        if (isset($_POST['like']) && ($_POST['like'])) {
            $id=$_POST['id'];
            $img = $_POST['img'];
            $name = $_POST['name'];
            // $size = isset($_POST['size']) ? $_POST['size'] : '';
            $price = $_POST['price'];
            // $soluong = $_POST['soluong'];
            $id_menu=$_POST['id_menu'];

            // Check if the item is already in the wishlist
            $flag = false;
            foreach ($_SESSION['wishlist'] as &$item) {
                if ($item[0] == $id) {
                    $flag = true;
                    // $item[4] = $soluong; // Update the quantity
                    break;
                }
               
            }

            // If the item is not in the wishlist, add it
            if (!$flag) {
                $giohang = [$id,$img, $name,  $price, $id_menu];
                $_SESSION['wishlist'][] = $giohang;
            }
       
        }

        include_once "View/wishlist.php";
    break;
    // case 'update':
    //     if (!isset($_SESSION['wishlist'])) $_SESSION['wishlist'] = [];

    //     if (isset($_POST['update']) && ($_POST['update'])) {
    //         $img = $_POST['img'];
    //         $name = $_POST['name'];
    //         $size = isset($_POST['size']) ? $_POST['size'] : '';
    //         $price = $_POST['price'];
    //         $soluongs = $_POST['soluong'];

    //         foreach ($_SESSION['wishlist'] as $index => &$item) {
    //             // Check if the item is in the array of submitted quantities
    //             if (isset($soluongs[$index])) {
    //                 $item[4] = $soluongs[$index]; // Update the quantity
    //             }
    //         }

        
         
       
    //     }

    //     include_once "View/wishlist.php";
    // break;
}



