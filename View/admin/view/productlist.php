<!DOCTYPE html>
<html lang="en">

<head>
    <title>Danh Sách Danh Mục</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<style>
    .s {
        width: 50%;
        /* Adjusted the width */
      
    }

    .grid {
        padding: 20px;
    }
</style>

<body>
    <div class="be-wrapper be-fixed-sidebar">
        <div  style="width:1383px;margin-left:250px">
            <?php



            include "class/product_class.php"
            ?>


            <?php

            $product = new product;
            $show_products = $product->show_pro();

            ?>
            <div class="admin-content-right">
                <div class="admin-content-right-product_add">
                    <h1 style="padding-bottom: 20px;">Danh Sách Sản Phẩm</h1>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>product_id</th>
                                <th>product_name</th>
                                <th>id_danhmuc</th>
                                <th>id_menu</th>
                                <th>product_price</th>
                                <th>product_discounts</th>
                                <th>quantity</th>
                                <th>discriber</th>
                                <th>product_img</th>
                                <th>product_imgs</th>
                                <th>action</th>
                               
                            </tr>
                        </thead>
                        <tbody>

                            <?php

                            if ($show_products) {
                                $i = 0;
                                while ($resultproduct = $show_products->fetch()) {
                                    $i++;
                            ?>
                                    <tr>
                                        <td scope="row"><?php echo $i; ?></td>
                                        <td><?php echo $resultproduct['product_id']; ?></td>
                                        <td><?php echo $resultproduct['product_name']; ?></td>
                                        <td><?php echo $resultproduct['id_danhmuc']; ?></td>
                                        <td><?php echo $resultproduct['id_menu']; ?></td>
                                        <td><?php echo $resultproduct['product_price']; ?></td>
                                        <td><?php echo $resultproduct['product_price_new']; ?></td>
                                        <td><?php echo $resultproduct['quantity']; ?></td>
                                        <td><?php echo $resultproduct['describe']; ?></td>
                                       
                                        <td><img src="../admin/assets//upload/products/<?php echo $resultproduct['product_img']; ?>" width="50px" alt=""></td>
                                        <td><img src="../admin/assets/upload/products/<?php echo $resultproduct['product_img2']; ?>" width="50px" alt=""></td>
                                       
                                        <td>
                                            <div class="row">
                                            <a href="index.php?action=productedit&cartegory_id=<?php echo $resultproduct['id_menu'] ?>&product_id=<?= $resultproduct['product_id'] ?>">Sửa</a> |
                                            <a href="#" onclick="confirmDelete(<?php echo $resultproduct['product_id'] ?>)">Xóa</a></div>
                                        </td>
                                    </tr>
                            <?php
                                }
                            } ?>


                        </tbody>
                    </table>
                </div>
            </div>

        </div>



    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script>
        function confirmDelete(categoryId) {
            var userConfirmed = confirm("Bạn có muốn xóa không?");
            if (userConfirmed) {
                window.location.href = "view/categorydelete.php?id_danhmuc=" + categoryId;
                return window.location.href = "http://localhost/webphp/webmang/view/admin/index.php?action=ListDanhmuc"
            }
        }
    </script>
</body>

</html>