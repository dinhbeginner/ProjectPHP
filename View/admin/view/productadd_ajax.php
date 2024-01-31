<?php
include "class/product_class.php";
$product = new product;

$cartegory_id = '2';
?>
<?php

$show_brand_ajax = $product->show_brand_ajax($cartegory_id);
if ($show_brand_ajax) {
    while ($result = $show_brand_ajax->fetch()) {
?>
        <option value="<?php echo $result['id_menu'] ?>"><?php echo $result['ten_menu'] ?></option>
<?php
    }
}
?>