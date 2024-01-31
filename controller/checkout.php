<?php

$act = "checkout";

if (isset($_GET['act'])) {
    $act = $_GET['act'];
}

switch ($act) {
    case 'checkout':
        if (!isset($_SESSION['makh'])) {
            echo '<script>alert("Vui lòng đăng nhập để thanh toán");</script>';
            echo '<meta http-equiv="refresh" content="0;url=./index.php?action=login"/>';
        } else {
            include_once "View/checkout.php";
        }
        break;

    case 'order':
        $hd = new hoadon();

        if (isset($_POST['submit'])) {
            $fullname = isset($_POST['fullname']) ? $_POST['fullname'] : '';
            $address = isset($_POST['address']) ? $_POST['address'] : '';
            $phone = isset($_POST['phone']) ? $_POST['phone'] : '';
            $email = isset($_POST['email']) ? $_POST['email'] : '';
            $total = isset($_POST['total']) ? $_POST['total'] : '';
            $id_customer = isset($_SESSION['makh']) ? $_SESSION['makh'] : '';
        
            if (!$id_customer) {
                echo '<div class="alert alert-primary" role="alert">
                           Vui lòng đăng nhập để thanh toán
                      </div>';
            } else {
                $sohd = $hd->insertHoaDon($id_customer, $fullname, $address, $phone, $email, $total);
        
                $total = 0;
        
                if ($sohd) {
                    for ($i = 0; $i < sizeof($_SESSION['cart']); $i++) {
                        $hd->insertCTHoaDon($sohd, $_SESSION['cart'][$i][0], $_SESSION['cart'][$i][2], $_SESSION['cart'][$i][3], $_SESSION['cart'][$i][5], $_SESSION['cart'][$i][4]);
                        $hd->updateSL();
                    }

        
                    // Update total amount in the hoadon table (you can implement this logic)
                }
        
                // Redirect to a thank you page or another appropriate page
                
            }
            echo '<script>alert("Bạn đã đặt hàng thành công")</script>';
        }
        
        include_once "View/product.php";
        unset($_SESSION['cart']);
        break;
    }
