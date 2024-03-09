<?php
$act="products";
if(isset($_GET['act']))
{
        $act=$_GET['act'];//sanphamkhuyenmai
}

switch($act){
    case 'products':
        include_once "View/listproduct.php";
        break;
    case 'timkiem':
        include_once "View/listproduct.php";
        break;
    case 'orderby':
        include_once "View/listproduct.php";
        break;
    

}
include_once "View/listproduct.php"

?>