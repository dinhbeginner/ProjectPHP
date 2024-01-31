<?php
$ctr='news';
if(isset($_GET['act'])){
    $ctr=$_GET['act'];
}
switch($ctr){
    case 'news':
        include_once 'View/news.php';
        break;
    case 'detailnews':
        include_once 'View/detailnews.php';
        break;
}
?>