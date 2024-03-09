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
    body {
        font-family: Arial, sans-serif;
        background-color: #f8f9fa;
    }

    .container {
        padding-top: 20px;
    }

    .table {
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .table th,
    .table td {
        border: none;
        padding: 12px 15px;
        vertical-align: middle;
    }

    .table th {
        background-color: #007bff;
        color: #fff;
        text-align: center;
    }

    .table td {
        border-top: 1px solid #dee2e6;
    }

    .table tbody tr:hover {
        background-color: #f1f1f1;
    }

    .btn {
        padding: 8px 16px;
        border-radius: 4px;
        transition: all 0.3s;
    }

    .btn-danger {
        background-color: #dc3545;
        border: none;
        color: #fff;
    }

    .btn-danger:hover {
        background-color: #c82333;
    }

    .btn-primary {
        background-color: #007bff;
        border: none;
        color: #fff;
    }

    .btn-primary:hover {
        background-color: #0056b3;
    }

    #confirmationMessage {
        display: none;
        padding: 10px;
        background-color: #28a745;
        color: #fff;
        border-radius: 4px;
        animation: fadeInOut 2s ease;
    }

    @keyframes fadeInOut {
        0% {
            opacity: 0;
        }

        25% {
            opacity: 1;
        }

        75% {
            opacity: 1;
        }

        100% {
            opacity: 0;
        }
    }
</style>

<body>
    <div class="be-wrapper be-fixed-sidebar">
        <div style="width:1383px;margin-left:250px">
            <?php



            include "class/khachhang.php"
            ?>


            <?php

            $khachhang = new khachhang;
            $show_khachhang = $khachhang->kh();

            ?>
            <div class="admin-content-right">
                <div class="admin-content-right-product_add">
                    <h1 style="padding-bottom: 20px;">Danh Sách Khách Hàng</h1>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th></th>
                                <th>Name</th>
                                <th>UserName</th>
                                <th>Email</th>
                                <th>Addresss</th>
                                <th>Phone</th>

                                <th>action</th>

                            </tr>
                        </thead>
                        <tbody>

                            <?php

                            if ($show_khachhang) {
                                $i = 0;
                                while ($resultkh = $show_khachhang->fetch()) {
                                    $i++;
                            ?>
                                    <tr>
                                        <td scope="row"><?php echo $i; ?></td>
                                        <td><img src="assets/img/avatar<?php echo $i ?>.png" alt=""></td>
                                        <td><?php echo $resultkh['customer']; ?></td>
                                        <td><?php echo $resultkh['username']; ?></td>
                                        <td><?php echo $resultkh['email']; ?></td>
                                        <td><?php echo $resultkh['address']; ?></td>
                                        <td><?php echo $resultkh['phone']; ?></td>


                                        <td>
                                            <div class="row">

                                                <button class="btn btn-danger btn-sm" onclick="confirmDelete(<?php echo $resultkh['id_customer'] ?>)">Xóa</button>
                                            </div>
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
        function confirmDelete(idkh) {
            var userConfirmed = confirm("Bạn có muốn xóa không?");
            if (userConfirmed) {
                window.location.href = "view/khdelete.php?id_customer=" + idkh;
                return window.location.href = "http://localhost/webphp/webmang/view/admin/index.php?action=listkhachhang"
            }
        }
    </script>
</body>

</html>