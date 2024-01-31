<?php 


if (isset($_POST['id_product'], $_POST['content'], $_SESSION['makh'])) {
    $idsp = $_POST['id_product'];
    $cmt = $_POST['content'];
    $iduser = $_SESSION['makh'];
    $rate = isset($_POST['star']) ? $_POST['star'] : 0;

    $db = new Comment();
   $db->sendCmt($idsp, $cmt, $iduser, $rate);

   
}
else{
    echo'<script>alert("VUI LÒNG ĐĂNG NHẬP ĐỂ BÌNH LUẬN")</script>';
    echo '<meta http-equiv="refresh" content="0;url=./index.php?action=login"/>';
                exit();
}


include_once "View/detailproduct.php";

 
 ?>