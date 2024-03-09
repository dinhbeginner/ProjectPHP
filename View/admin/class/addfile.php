<?php
define('__ROOT_', dirname(dirname(__FILE__)));

include(__ROOT_ . '/database.php');

class addfile
{
    function add($idmenu, $iddanhmuc, $tenmenu, $imgmenu)
    {
        try {
            $db = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASS);
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $query = "INSERT INTO tbl_menu (id_menu, id_danhmuc, ten_menu, imag_danhmuc_) VALUES (?, ?, ?, ?)";
            $stmt = $db->prepare($query);
            $stmt->execute([$idmenu, $iddanhmuc, $tenmenu, $imgmenu]);

            return true; // Return true on successful insertion
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            return false; // Return false on failure
        }
    }
}

?>
