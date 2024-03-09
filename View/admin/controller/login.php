<?php
$act = "login";

if (isset($_GET['act'])) {
    $act = $_GET['act'];
}

switch ($act) {
    case 'login':
        include_once "view/login.php";
        break;


    

    case 'login_action':
        if (isset($_POST['submit'])) {
            $adminUser = $_POST['adminUser'];
            $adminPass = $_POST['adminPass'];
          
            // Hash the password securely (consider using bcrypt or Argon2)
            $hashedPassword = $adminPass;
          
            // Check user credentials
            $adminLogin = new AdminLogin();
            $userData = $adminLogin->loginKh($adminUser, $hashedPassword);
          
            if ($userData) {
              // Store user information in session
              $_SESSION['adminId'] = $userData['adminId'];
              $_SESSION['adminName'] = $userData['adminName'];
              $_SESSION['adminEmail'] = $userData['adminEmail'];
              $_SESSION['adminUser'] = $userData['adminUser'];
              header('Location: ./index.php');
              // Redirect to homepage or wherever you want
          var_dump( $_SESSION['adminName'] );
              
            } else {
                echo '<meta http-equiv="refresh" content="0;url=./index.php?action=login"/>';
             echo '<script>alert("Bạn đã nhập sai Password hoặc UserName")</script>';
            }
        }
        break;
        
           
           
            // var_dump($_SESSION);
          
            case "logout":
                if (isset($_SESSION['adminName'])) {
                    echo '  confirm("Are you sure you want to log out?")';
                    // Unset the session variable containing the user's name
                    unset($_SESSION['adminId']);
                    unset($_SESSION['adminName']);
                    unset($_SESSION['adminEmail']);
                    unset($_SESSION['adminUser']);
                    echo '<script>alert("Bạn đã đăng xuất");</script>';
                    echo '<meta http-equiv="refresh" content="0;url=./index.php?action=login"/>';
                } else { 
                    echo '<script>alert("Bạn chưa đăng nhập");</script>';
                    echo '<meta http-equiv="refresh" content="0;url=./index.php?action=login"/>';
                }
        
                // Perform other logout actions if needed
                // ...
        
        
                break;
            
                


       
        
}
