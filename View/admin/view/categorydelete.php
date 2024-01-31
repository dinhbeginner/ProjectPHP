<?php
include "../class/cartegory_class.php";
$category = new Category;
if (!isset($_GET['id_danhmuc']) || $_GET['id_danhmuc'] == NULL) {
    echo '<script>window.location.href="categorylist.php"</script>';
} else {
    
    $category_id = $_GET['id_danhmuc'];
}
$delete_category = $category->deleteCategory($category_id);

?>
    