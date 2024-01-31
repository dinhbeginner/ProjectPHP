<?php
define('__ROOT_', dirname(dirname(__FILE__)));

include(__ROOT_ . '/database.php');

class AdminLogin
{
    // ... (existing code)

    function loginKh($user, $pass){
        $db = new connect();
        $query = "SELECT * FROM admin WHERE adminUser=:user AND adminPass=:pass";
        
        $statement = $db->execp($query);
        $statement->bindParam(':user', $user);
        $statement->bindParam(':pass', $pass);
        
        $result = $statement->execute();

        if ($result) {
            // Fetch the data
            $userData = $statement->fetch(PDO::FETCH_ASSOC);
            return $userData;
        } else {
            return false;
        }
    }

    // ... (existing code)
}

?>
