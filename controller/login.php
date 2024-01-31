<?php
$act = "login";

if (isset($_GET['act'])) {
    $act = $_GET['act'];
}

switch ($act) {
    case 'login':
        include_once "View/login.php";
        break;


    case 'dangky_action':
        $tenkh = $dc = $sodt = $user = $email = $pass = '';

        if (isset($_POST['submit'])) {
            $tenkh = $_POST['txttenkh'];
            $dc = $_POST['txtdiachi'];
            $sodt = $_POST['txtsodt'];
            $user = $_POST['txtusername'];
            $email = $_POST['txtemail'];
            $pass = $_POST['txtpass'];
            $pass_confirm = $_POST['retypepassword'];

            // Validate passwords
            if ($pass !== $pass_confirm) {
                echo '<script>alert("Mật khẩu không khớp");</script>';
                echo '<meta http-equiv="refresh" content="0;url=./index.php?action=login"/>';
                exit();
            }

            $saltF = "G45a#?";
            $saltL = "Td23$%";
            $passnew = md5($saltF . $pass . $saltL);

            $kh = new User();
            $check = $kh->checkUser($user, $email)->rowCount();

            if ($check >= 1) {
                echo '<script>alert("Tài khoản đã tồn tại");</script>';
                echo '<meta http-equiv="refresh" content="0;url=./index.php?action=login"/>';
            } else {
                $result = $kh->insertKh($tenkh, $user, $passnew, $email, $dc, $sodt);
                if ($result !== false) {
                    echo '<script>alert("Đăng ký thành công")</script>';
                    echo '<meta http-equiv="refresh" content="0;url=./index.php"/>';
                } else {
                    echo '<script>alert("Đăng ký thất bại")</script>';
                    echo '<meta http-equiv="refresh" content="0;url=./index.php?action=login"/>';
                }
            }
        }
        break;

    case 'login_action':
        $user = $pass = '';

        if (isset($_POST['submit'])) {

            $user = $_POST['txtusername'];

            $pass = $_POST['txtpassword'];


            // Validate passwords


            $saltF = "G45a#?";
            $saltL = "Td23$%";
            $passnew = md5($saltF . $pass . $saltL);
            $kh = new User();
            $userData = $kh->loginKh($user, $passnew);
            if ($userData->rowCount() > 0) {
                $userRow = $userData->fetch(PDO::FETCH_ASSOC);

                // Store user information in session
                $_SESSION['makh'] = $userRow['id_customer'];
                $_SESSION['tenkh'] = $userRow['customer'];
                $_SESSION['email'] = $userRow['email'];
                $_SESSION['address'] = $userRow['address'];

                // Redirect to homepage or wherever you want
                echo '<script>alert("Đăng nhập thành công");</script>';

                echo '<meta http-equiv="refresh" content="0;url=./index.php"/>';
               exit();
            } else {


                echo '<script>alert("Đăng nhập thất bại")</script>';
                echo '<meta http-equiv="refresh" content="0;url=./index.php?action=login"/>';
            }
        }
        break;
        
           
           
            // var_dump($_SESSION);
          
            case "logout":
                if (isset($_SESSION['tenkh'])) {
                  echo'  confirm("Are you sure you want to log out?")';
                    // Unset the session variable containing the user's name
                    unset($_SESSION['tenkh']); 
                    unset($_SESSION['makh']); 
                    unset($_SESSION['email']); 
                    echo '<script>alert("Bạn đã đăng xuất");</script>';
                echo '<meta http-equiv="refresh" content="0;url=./index.php"/>';
                }
                else{
                    echo '<script>alert("Bạn chưa đăng nhập");</script>';
                    echo '<meta http-equiv="refresh" content="0;url=./index.php?action=login"/>';
                }
            
                // Perform other logout actions if needed
                // ...
            
               
                break;
            
                


       
        
}
