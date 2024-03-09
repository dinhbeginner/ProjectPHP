<?php
include "../class/hoadon.php";
?>

<?php
$donhang = new hoadon;
if ($_GET['action'] == 'donhang' && $_GET['act'] == 'AllProduct') {
    $result = $donhang->order();
} elseif (($_GET['action'] == 'donhang' && $_GET['act'] == 'notConfirmProduct')) {
    $result = $donhang->notcomfirm();
} elseif (($_GET['action'] == 'donhang' && $_GET['act'] = 'ComfirmProduct')) {
    $result = $donhang->comfirm();
}
?>

<?php
$loi = "";
if (isset($_POST['submit_donhang']) == true) {
    $email = 'nguyenvanben2004@gmail.com';
    $conn = new PDO("mysql:host=localhost;dbname=websize_porto;charset=utf8", "root", "");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    guiemail($email);
}

function guiemail($email)
{
    require "../../PHPMailer-master/src/PHPMailer.php";
    require "../../PHPMailer-master/src/SMTP.php";
    require '../../PHPMailer-master/src/Exception.php';
    $mail = new PHPMailer\PHPMailer\PHPMailer(true); //true:enables exceptions
    try {
        $mail->SMTPDebug = 0; //0,1,2: chế độ debug
        $mail->isSMTP();
        $mail->CharSet = "utf-8";
        $mail->Host = 'smtp.gmail.com';  //SMTP servers
        $mail->SMTPAuth = true; // Enable authentication
        $mail->Username = 'nguyenhoangdinh591@gmail.com'; // SMTP username
        $mail->Password = 'muta oheh rorg mnsp';   // SMTP password
        $mail->SMTPSecure = 'ssl';  // encryption TLS/SSL 
        $mail->Port = 465;  // port to connect to                
        $mail->setFrom('nguyenhoangdinh591@gmail.com', 'PORTO');
        $mail->addAddress($email);
        $mail->isHTML(true);  // Set email format to HTML
        $mail->Subject = 'Xác nhận đơn hàng';
        $noidungthu = "Đơn hàng của bạn đã được xác nhận";
        $mail->Body = $noidungthu;
        $mail->smtpConnect(array(
            "ssl" => array(
                "verify_peer" => false,
                "verify_peer_name" => false,
                "allow_self_signed" => true
            )
        ));
        $mail->send();
        echo '<meta http-equiv="refresh" content="0;url=http://localhost/webphp/webmang/view/admin/index.php?action=donhang&act=AllProduct"/>';
    } catch (Exception $e) {
        echo 'Error: ', $mail->ErrorInfo;
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Danh Sách Đơn Hàng</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Custom CSS -->
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
</head>

<body>
    <div class="be-wrapper be-fixed-sidebar">
        <div style="width:1383px;margin-left:250px">
            <div class="admin-content-right">
                <div class="admin-content-right-product_add">
                    <form action="" method="post">
                        <div class="row">
                            <div class="col-md-9">
                                <h1 style="padding-bottom: 20px;">Danh Sách Đơn Hàng</h1>
                            </div>
                            <div class="col-md-3">
                                <div id="confirmationMessage" style="display:none;" class="alert alert-primary">Xác Nhận Thành Công</div>
                            </div>
                        </div>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>ID_Khách Hàng</th>
                                    <th>UserName</th>
                                    <th>Product_name</th>
                                    <th>Quantity</th>
                                    <th>Size</th>
                                    <th>Price</th>
                                    <th>Tình Trạng</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if ($result) {
                                    $i = 0;
                                    while ($resultkh = $result->fetch()) {
                                        $i++;
                                ?>
                                        <tr>
                                            <td scope="row"><?php echo $i; ?></td>
                                            <td><?php echo $resultkh['id_customer']; ?></td>
                                            <td><?php echo $resultkh['customer']; ?></td>
                                            <td><?php echo $resultkh['product_name']; ?></td>
                                            <td><?php echo $resultkh['quantity']; ?></td>
                                            <td><?php echo $resultkh['product_size']; ?></td>
                                            <td><?php echo number_format($resultkh['product_price_new'] * $resultkh['quantity'], 3) ?></td>
                                            <td><?php if ($resultkh['status'] == 0) {
                                                    echo '<button type="submit" class="btn btn-danger" onclick="confirmHD(' . $resultkh["order_detail_id"] . ')">Chưa xác nhận</button>';
                                                } else {
                                                    echo '<button type="submit" class="btn btn-primary">Đã xác nhận</button>';
                                                } ?></td>
                                            <td>
                                                <div class="row">
                                                    <button type="submit" name="submit_donhang" class="btn btn-danger btn-sm" onclick="confirmDelete(<?php echo $resultkh['order_detail_id'] ?>)">Xóa</button>
                                                </div>
                                            </td>
                                        </tr>
                                <?php
                                    }
                                } ?>
                            </tbody>
                        </table>
                        <input type="hidden" name="submit_donhang" value="true">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script>
        function confirmDelete(orderDetailId) {
            var userConfirmed = confirm("Bạn có muốn xóa không?");
            if (userConfirmed) {
                window.location.href = "view/hddelete.php?idhd=" + orderDetailId;
                return window.location.href = "http://localhost/webphp/webmang/view/admin/index.php?action=donhang";
            }
        }

        function confirmHD(orderDetailId) {
            var userConfirmed = confirm("Bạn có muốn xác nhận không?");
            if (userConfirmed) {
                window.location.href = "view/hddelete.php?confirmhd=" + orderDetailId;
                return window.location.href = "http://localhost/webphp/webmang/view/admin/index.php?action=donhang";
            }
        }

        function showConfirmationMessage() {
            $("#confirmationMessage").show();
            setTimeout(function() {
                $("#confirmationMessage").hide();
            }, 1500); // Hide the message after 2 seconds (2000 milliseconds)
        }

        // Call the function to show the confirmation message when the form is submitted
        $(document).ready(function() {
            if ($("input[name='submit_donhang']").val() == 'true') {
                showConfirmationMessage();
            }
        });
    </script>
</body>

</html>