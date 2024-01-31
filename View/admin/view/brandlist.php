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
    <div class="container">
        <section class="page-content">
          
            <h1 class="text-center my-4">Danh Sách Danh Mục</h1>
            <section class="grid">
                <?php



                include "class/brand_class.php"; // Corrected the class name

                ?>
                <?php
                $brand = new Brand;
                $show_brand = $brand->show_brand(); // Corrected the variable name
                ?>

                <table class=" table-bordered table-hover s">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">Stt</th>
                            <th scope="col">ID Menu</th>
                            <th scope="col">Name Danh Muc</th>
                            <th scope="col">Tên Menu</th>
                            <th scope="col">Hình</th>
                            <th scope="col">Tùy Biến</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if ($show_brand) {
                            $i = 0;
                            while ($result = $show_brand->fetch()) {
                                $i++;
                        ?>
                                <tr>
                                    <td><?php echo $i ?></td>
                                    <td><?php echo $result['id_menu']; ?></td>
                                    <td><?php echo $result['category_name']; ?></td>
                                    <td><?php echo $result['ten_menu']; ?></td>
                                    <td style="width:200px">  <img src="assets/upload/menu/<?php echo $result['imag_danhmuc_'];  ?>" width="50%"alt=""></td>
                                    <td>
                                        <a href="index.php?action=editbrand&brand_id=<?php echo $result['id_menu'] ?>" class="btn btn-primary btn-sm">Sửa</a>
                                        <button class="btn btn-danger btn-sm" onclick="confirmDelete(<?php echo $result['id_menu'] ?>)">Xóa</button>
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

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script>
        function confirmDelete(brandId) {
            var userConfirmed = confirm("Bạn có muốn xóa không?");
            if (userConfirmed) {
                window.location.href = "view/branddelete.php?id_menu=" + brandId;
                return window.location.href = "http://localhost/webphp/webmang/view/admin/index.php?action=brandlist"
            }
        }
    </script>
</body>

</html>