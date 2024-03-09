<!DOCTYPE html>
<html lang="en">
<?php

error_reporting(E_ERROR | E_PARSE);
set_include_path(get_include_path() . PATH_SEPARATOR . 'class');
spl_autoload_extensions('.php');
spl_autoload_register();

session_start();

?>


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/x-icon" href="../../assets/images/icons/favicon.png">
    <title>PORTO - ADMIN</title>
    <link rel="stylesheet" type="text/css" href="assets\lib\perfect-scrollbar\css\perfect-scrollbar.css">
    <link rel="stylesheet" type="text/css" href="assets\lib\material-design-icons\css\material-design-iconic-font.min.css">
    <link rel="stylesheet" type="text/css" href="assets\lib\jquery.vectormap\jquery-jvectormap-1.2.2.css">
    <link rel="stylesheet" type="text/css" href="assets\lib\jqvmap\jqvmap.min.css">
    <link rel="stylesheet" type="text/css" href="assets\lib\datetimepicker\css\bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" href="assets\css\app.css" type="text/css">
</head>

<body>
    <?php

    if (!$_SESSION['adminName']) {
        include_once "controller/login.php";
    } else {
    ?>
        <?php
        include_once "view/header.php";
        ?>
        <div>
            <?php
            $ctr = "index";
            if (isset($_GET['action'])) {
                $ctr = $_GET['action'];
            }
            switch ($ctr) {
                case "index":
                    include_once "controller/$ctr.php";
                    break;
                case 'adddanhmuc':
                    include_once "controller/categoryadd.php";
                    break;
                case 'ListDanhmuc':
                    include_once "controller/categorylist.php";
                    break;
                case 'editdanhmuc':
                    include_once "controller/categoryedit.php";
                    break;
                case 'brandlist':
                    include_once "controller/brandlist.php";
                    break;
                case 'addbrand':
                    include_once "controller/brandadd.php";
                    break;
                case 'editbrand':
                    include_once "controller/brandedit.php";
                    break;
                case 'login':
                    include_once "controller/login.php";
                    break;
                case 'ListProduct':
                    include_once "controller/listproduct.php";
                    break;
                case 'productadd':
                    include_once "controller/productadd.php";
                    break;
                case 'productedit':
                    include_once "controller/productedit.php";
                    break;
                case 'listkhachhang':
                    include_once "controller/khachhang.php";
                    break;
                case 'donhang':
                    include_once "controller/donhang.php";
                    break;
                    case 'loai':
                        include_once "controller/loai.php";
                        break;
            }

            ?>

        </div>
        <?php

        include_once "view/sidebar.php";
        ?>
    <?php }

    ?>
    <script src="assets\lib\jquery\jquery.min.js" type="text/javascript"></script>
    <script src="assets\lib\perfect-scrollbar\js\perfect-scrollbar.min.js" type="text/javascript"></script>
    <script src="assets\lib\bootstrap\dist\js\bootstrap.bundle.min.js" type="text/javascript"></script>
    <script src="assets\js\app.js" type="text/javascript"></script>
    <script src="assets\lib\jquery-flot\jquery.flot.js" type="text/javascript"></script>
    <script src="assets\lib\jquery-flot\jquery.flot.pie.js" type="text/javascript"></script>
    <script src="assets\lib\jquery-flot\jquery.flot.time.js" type="text/javascript"></script>
    <script src="assets\lib\jquery-flot\jquery.flot.resize.js" type="text/javascript"></script>
    <script src="assets\lib\jquery-flot\plugins\jquery.flot.orderBars.js" type="text/javascript"></script>
    <script src="assets\lib\jquery-flot\plugins\curvedLines.js" type="text/javascript"></script>
    <script src="assets\lib\jquery-flot\plugins\jquery.flot.tooltip.js" type="text/javascript"></script>
    <script src="assets\lib\jquery.sparkline\jquery.sparkline.min.js" type="text/javascript"></script>
    <script src="assets\lib\countup\countUp.min.js" type="text/javascript"></script>
    <script src="assets\lib\jquery-ui\jquery-ui.min.js" type="text/javascript"></script>
    <script src="assets\lib\jqvmap\jquery.vmap.min.js" type="text/javascript"></script>
    <script src="assets\lib\jqvmap\maps\jquery.vmap.world.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            //-initialize the javascript
            App.init();
            App.dashboard();

        });
    </script>
</body>

</html>