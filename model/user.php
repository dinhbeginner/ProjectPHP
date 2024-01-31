<?php
class User{
    function checkUser($user, $email)
    {
        $db = new connect();
        $select = "SELECT username, email FROM tbl_khachhang WHERE username='$user' OR email='$email'";
        $result = $db->getList($select);
        return $result;
    }

    function insertKh($tenkh, $user, $matkhau, $email, $diachi, $sodt)
    {
        $db = new connect();
        $query = "INSERT INTO tbl_khachhang(customer, username, password, email, address, phone) VALUES ('$tenkh','$user','$matkhau','$email','$diachi','$sodt')";
        $result = $db->exec($query);
        return $result;
    }
    
    function loginKh($user, $pass){
        $db = new connect();
        $query = "SELECT * FROM tbl_khachhang  WHERE username='$user' AND password='$pass'";
        $result = $db->getList($query);
        return $result;
    }
    function Check($id, $email)
    {
        $db = new connect();
        $select = "SELECT id_customer, email FROM tbl_khachhang WHERE id_customer='$id' OR email='$email'";
        $result = $db->getList($select);
        return $result;
    }
}

?>