<?php
$act="delete";
if(isset($_GET["act"])){
    $act=$_GET['act'];
}
$de=new dashboard();

if ($act == "delete" && isset($_POST["delete"])) {
    $del = intval($_POST['delete']);
    $de->deleteOrder($del);
    if($de){
        echo'<script>alert("Bạn Đã Xóa Thành Công")</script>';
    }
}
include_once "view/dashboard.php"
?>