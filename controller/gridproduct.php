<?php
$act="products";
if(isset($_GET['act']))
{
        $act=$_GET['act'];//sanphamkhuyenmai
}

switch($act){
    case 'products':
        include_once "View/gridproduct.php";
        break;
    case 'timkiem':
        include_once "View/gridproduct.php";
        break;
    case 'orderby':
        include_once "View/gridproduct.php";
        break;
    

}
include_once "View/gridproduct.php";

?>