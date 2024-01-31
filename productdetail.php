<!doctype html>
<?php


include_once "model/connect.php";
include_once "model/danhmuc.php";
include_once "model/product.php";
// include_once "model/banner_danhmuc.php";

?>
<html lang="en">
  <head>
  <title>Porto - Bootstrap eCommerce Template</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/x-icon" href="assets/images/icons/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <?php
   
    if (isset($_GET['action'])) {
        $ctr = $_GET['action'];
    }

    // Check if 'id' is set and not empty
    // if (isset($_GET['id']) && ($_GET['id'] == 1 || empty($_GET['id']))) {
    //     $ctr = 'product';
    // }

    // // Check if 'id' is set and equal to 2
    // if (isset($_GET['id']) && $_GET['id'] == 2 ) {
    //     $ctr = 'gridproduct';
    // }


    include_once "controller/$ctr.php";
    ?>



  
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>