<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
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
    $get_infor = $product->get_infor($product_id);
    if ($get_infor) {
        $resultB = $get_infor->fetch();
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Validate and sanitize user inputs before passing them to the insert_product method
        $validatedData = validateAndSanitize($_POST);
        $update_product = $product->update_product($validatedData, $product_id, $_FILES);

        // Check if the product insertion was successful and provide feedback
        if ($update_product) {
            echo "<script>alert('Product update successfully!');</script>";
            if ($update_product) {
                // Display success modal
                echo '<script type="text/javascript">
                    $(document).ready(function(){
                        $("#successModal").modal("show");
                        setTimeout(function(){
                            window.location.href = "http://localhost/webphp/webmang/view/admin/index.php?action=ListProduct"; // Replace "index.php" with the actual URL of your index page
                        }, 1000); // Redirect after 2 seconds (adjust as needed)
                    });
                  </script>';
            }
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
    <div class=" container admin-content-right">
        <div class="admin-content-right-product_add">
            <h1 style="padding-bottom: 20px;">Sửa Sản Phẩm</h1>
            <form action="" method="POST" enctype="multipart/form-data">
                <label for="">Nhập tên Sản Phẩm <span style="color:red">*</span></label>
                <input name="product_name" value="<?php echo $resultA['product_name'] ?>" required type="text">

                <label for=""> Chọn Loại Sản Phẩm<span style="color:red">*</span></label>
                <select name="id_menu" id="id_menu">
                    <option value="#">--Chọn--</option>
                    <?php
                    $show_menu = $product->show_menu();
                    if ($show_menu) {
                        while ($result = $show_menu->fetch()) {
                    ?>
                            <option value="<?php echo $result['id_menu'] ?>"><?php echo $result['ten_menu'] ?></option>
                    <?php
                        }
                    }
                    ?>
                </select>

                <label for=""> Chọn Giá Sản Phẩm<span style="color:red">*</span></label>
                <input name="product_price" required type="text" placeholder="Giá sản phẩm" value="<?php echo $resultA['product_price'] ?>">

                <label for=""> Chọn Giá khuyến mãi<span style="color:red">*</span></label>
                <input name="product_price_new" type="text" placeholder="Giá khuyến mãi" value="<?php echo $resultA['product_price_new'] ?>">

                <label for="">Mô tả Sản Phẩm<span style="color:red">*</span></label>
                <textarea name="product_desc" id="editor" cols="30" rows="10" placeholder="Mô tả sản phẩm"><?php echo $resultB['describe']; ?></textarea>

                <label for="">Ảnh sản phẩm 1<span style="color:red">*</span></label>
                <input name="product_img" required type="file">

                <label for="">Số lượng<span style="color:red">*</span></label>
                <input name="quantity" required type="text" value="<?php echo  $resultB['quantity'] ?>">

                <label for="">Trạng thái<span style="color:red">*</span></label>
                <input name="status" required type="text" value="<?php echo  $resultB['status'] ?>">

                <label for="">Ảnh sản phẩm 2<span style="color:red">*</span></label>
                <input name="product_img2" required type="file">

                <button name="submit" type="submit">Update</button>
            </form>
        </div>
    </div>

</body>
<script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

<script>
    CKEDITOR.replace("editor");

    $(document).ready(function() {
        $('#id_danhmuc').change(function() {
            // alert($(this).val())
            var x = $(this).val();
            $.get("productadd_ajax.php", {
                id_danhmuc: x
            }, function(data) {
                $("#id_menu").html(data);
            });
        });
    });
</script>

</html>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>