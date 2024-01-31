<?php
include "../class/brand_class.php";
$brand = new Brand();
if (!isset($_GET['id_menu']) || $_GET['id_menu'] == NULL) {
    echo '<script>window.location.href = "http://localhost/webphp/webmang/view/admin/index.php?action=brandlist"; // Replace "index.php" with the actual URL of your index page
    </script>';
} else {

    $brand_id = $_GET['id_menu'];
}
$delete_brand = $brand->delete_brand($brand_id);
