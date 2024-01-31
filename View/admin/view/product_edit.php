<?php


include "class/product_class.php"
?>
<?php
$product = new product;

$product_id = $_GET['product_id'];
$get_product = $product->get_product($product_id);
if ($get_product) {
    $resultA = $get_product->fetch();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validate and sanitize user inputs before passing them to the insert_product method
    $validatedData = validateAndSanitize($_POST);
    $update_product = $product->update_product($validatedData, $product_id, $_FILES);

    // Check if the product insertion was successful and provide feedback
    if ($update_product) {
        echo "<script>alert('Product added successfully!');</script>";
    } else {
        echo "<script>alert('ERROR to add product!');</script>";
    }
}

function validateAndSanitize($data)
{
    // Implement your validation and sanitization logic here
    // For example, you can use filter_input or custom validation functions
    // Return the validated and sanitized data
    return $data;
}

$cartegory_id = $_GET['cartegory_id'];
$show_brand_ajax = $product->show_brand_ajax($cartegory_id);
?>
<style>
    select {
        height: 30px;
        width: 200px;
    }
</style>
<div class="admin-content-right">
    <div class="admin-content-right-product_add">
        <h1 style="padding-bottom: 20px;">Thêm Sản Phẩm</h1>
        <form action="" method="POST" enctype="multipart/form-data">
            <label for="">Nhập tên Sản Phẩm <span style="color:red">*</span></label>
            <input name="product_name" required type="text" value="<?php echo $resultA['product_name']; ?>">
            <label for="">Chọn Danh Mục<span style="color:red">*</span></label>

            <select name="cartegory_id" id="cartegory_id">
                <option value="#">--Select--</option>
                <?php
                $show_cartegory = $product->show_cartegory();
                if ($show_cartegory) {
                    while ($result = $show_cartegory->fetch()) {
                ?>
                        <option value="<?php echo $result['cartegory_id'] ?>" <?php echo ($result['cartegory_id'] == $resultA['cartegory_id']) ? 'selected' : ''; ?>>
                            <?php echo $result['cartegory_name'] ?>
                        </option>
                <?php
                    }
                }
                ?>
            </select><br>
            <label for=""> Chọn Loại Sản Phẩm<span style="color:red">*</span></label>
            <select name="brand_id" id="brand_id">
                <?php

                if ($show_brand_ajax) {
                    while ($result = $show_brand_ajax->fetch()) {
                ?>
                        <option value="<?php echo $result['brand_id'] ?>"><?php echo $result['brand_name'] ?></option>
                <?php
                    }
                }
                ?>
            </select>
            <label for=""> Chọn Giá Sản Phẩm<span style="color:red">*</span></label>

            <input name="product_price" required type="text" placeholder="Giá sản phẩm" value="<?php echo $resultA['product_price']; ?>">
            <label for=""> Chọn Giá khuyến mãi<span style="color:red">*</span></label>

            <input name="product_price_new" type="text" placeholder="Giá khuyến mãi" value="<?php echo $resultA['product_price_new']; ?>">
            <label for="">Mô tả Sản Phẩm<span style="color:red">*</span></label>

            <textarea name="product_desc" id="editor" cols="30" rows="10" placeholder="Mô tả sản phẩm" <?php echo $resultA['product_desc']; ?>></textarea>
            <label for="">Ảnh sản phẩm<span style="color:red">*</span></label>

            <input name="product_img" required type="file">
            <label for="">Ảnh Mô tả<span style="color:red">*</span></label>

            <input name="product_img2" required  type="file">
            <button type="submit">UpDate</button>
        </form>
    </div>
</div>

</body>

</html>