<?php
set_include_path(get_include_path() . PATH_SEPARATOR . 'Model');
spl_autoload_extensions('.php');
spl_autoload_register();
// include_once "model/banner_danhmuc.php";
session_start();



?>


<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from portotheme.com/html/porto_ecommerce/demo4.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Nov 2023 14:13:22 GMT -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Porto - Bootstrap eCommerce Template</title>

    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Porto - Bootstrap eCommerce Template">
    <meta name="author" content="SW-THEMES">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/images/icons/favicon.png">




    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- Main CSS File -->
    <link rel="stylesheet" href="assets/css/demo4.min.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/fontawesome-free/css/all.min.css">
</head>

<body>


    <?php
    //   $hh=new connect; 
    
    include_once "View/header.php"


    ?>

    <?php
    $ctr = "product";
    if (isset($_GET['action'])) {
        $ctr = $_GET['action'];
    }

    // Check if 'id' is set and not empty
    if (isset($_GET['id_danhmuc']) && ($_GET['id_danhmuc'] == 1 || empty($_GET['id_danhmuc']))) {
        $ctr = 'product';
    }

    // Check if 'id' is set and equal to 2
    if (isset($_GET['id_danhmuc']) && $_GET['id_danhmuc'] == 2) {
        $ctr = 'gridproduct';
    }
    if (isset($_GET['id_danhmuc']) && $_GET['id_danhmuc'] == 3) {
        $ctr = 'gridproduct';
    }

    switch ($ctr) {
            // case 'product':
            //     if (isset($_GET['id_danhmuc ']) && ($_GET['id_danhmuc'] == 2 || empty($_GET['id'])))
            //         include_once "controller/gridproduct.php";
            //     break;
        case 'product_danhmuc':

            include_once "controller/gridproduct.php";
            break;
        case 'detailproduct':
            include_once "controller/detailproduct.php";
            break;
        case 'cart':
            include_once "controller/cart.php";
            break;
        case 'checkout':
            include_once "controller/checkout.php";
            break;
    }
    include_once "controller/$ctr.php";
    ?>



    <?php
    include_once "View/fooder.php";

    ?>

    <!-- Plugins JS File -->

</body>

<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/optional/isotope.pkgd.min.js"></script>
<script src="assets/js/plugins.min.js"></script>
<script src="assets/js/jquery.appear.min.js"></script>

<!-- Main JS File -->

<!-- Mirrored from portotheme.com/html/porto_ecommerce/demo4.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Nov 2023 14:13:44 GMT -->

</html>