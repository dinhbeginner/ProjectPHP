<?php
include "../class/hoadon.php";
$hoadon = new hoadon;
if (!isset($_GET['idhd']) || $_GET['idhd'] == NULL) {
    echo '<script>window.location.href = "http://localhost/webphp/webmang/view/admin/index.php?action=donhang"; // Replace "index.php" with the actual URL of your index page
    </script>';
} else {

    $id_hoadon = $_GET['idhd'];
    $delete_hd = $hoadon->xoa_hd($id_hoadon);
}
$confirmhd=$_GET['confirmhd'];
$confirm_hd = $hoadon->confirm_hd($confirmhd);