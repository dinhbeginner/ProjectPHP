<?php
include "../class/khachhang.php";
$khachhang = new khachhang;
if (!isset($_GET['id_customer']) || $_GET['id_customer'] == NULL) {
    echo '<script>window.location.href = "http://localhost/webphp/webmang/view/admin/index.php?action=listkhachhang"; // Replace "index.php" with the actual URL of your index page
    </script>';
} else {

    $id_customer = $_GET['id_customer'];
}
$delete_kh = $khachhang->delete_kh($id_customer);
