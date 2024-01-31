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
        width: 100%;
        /* Adjusted the width */
        margin-bottom: 1rem;
        color: #212529;
        line-height: 60px;
        font-size: x-large;
    }

    .grid {
        padding: 20px;
    }
</style>

<body>
    <div class="be-wrapper be-fixed-sidebar">
        <div class="container ">

            <section class="page-content mt-5">

                <h1 class="text-center my-4">Danh Sách Danh Mục</h1>
                <section class="grid mt-5">
                    <?php

                 

                    include "class/cartegory_class.php"; // Corrected the class name

                    ?>
                    <?php
                    $category = new Category; // Corrected the object name
                    $show_category = $category->showCategory(); // Corrected the variable name
                    ?>

                    <table class=" table-bordered table-hover s">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">Stt</th>
                                <th scope="col">ID</th>
                                <th scope="col">Danh mục</th>
                                <th scope="col">Tùy Biến</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if ($show_category) {
                                $i = 0;
                                while ($result = $show_category->fetch()) {
                                    $i++;
                            ?>
                                    <tr>
                                        <td><?php echo $i ?></td>
                                        <td><?php echo $result['id_danhmuc']; ?></td>
                                        <td><?php echo $result['name_danhmuc']; ?></td>
                                        <td>
                                            <a href="index.php?action=editdanhmuc&category_id=<?php echo $result['id_danhmuc'] ?>" class="btn btn-primary btn-sm">Sửa</a>
                                            <button class="btn btn-danger btn-sm" onclick="confirmDelete(<?php echo $result['id_danhmuc'] ?>)">Xóa</button>
                                        </td>
                                    </tr>
                            <?php
                                }
                            }
                            ?>
                        </tbody>
                    </table>

                </section>
            </section>
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