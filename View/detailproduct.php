<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from portotheme.com/html/porto_ecommerce/product.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Nov 2023 14:10:37 GMT -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Porto - Bootstrap eCommerce Template</title>

    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Porto - Bootstrap eCommerce Template">
    <meta name="author" content="SW-THEMES">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/images/icons/favicon.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script>
        WebFontConfig = {
            google: {
                families: ['Open+Sans:300,400,600,700,800', 'Poppins:300,400,500,600,700', 'Shadows+Into+Light:400']
            }
        };
        (function(d) {
            var wf = d.createElement('script'),
                s = d.scripts[0];
            wf.src = 'assets/js/webfont.js';
            wf.async = true;
            s.parentNode.insertBefore(wf, s);
        })(document);
    </script>

    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- Main CSS File -->
    <link rel="stylesheet" href="assets/css/style.min.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/fontawesome-free/css/all.min.css">
</head>
<style>
    /* Add your custom styles here */


    .product-actions {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 10px;
        background-color: #fff;
        border-radius: 5px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        margin: 20px;
        flex-wrap: nowrap;
        width: 500px;
        /* Đảm bảo rằng các phần tử con không bao giờ được ngắt dòng */
    }

    .product-single-qtys {
        display: flex;
        /* Sử dụng flex để các phần tử con nằm trên cùng một hàng */
        align-items: center;


    }

    .horizontal-quantitys {
        width: 20px;
        padding: 5px;
        text-align: center;


    }

    .quantity-btns {
        cursor: pointer;
        background-color: #6c757d;
        color: #fff;
        border: none;
        padding: 5px 10px;
        border-radius: 5px;

    }

    .size-button.active {
        background-color: blue;
        /* Màu sắc khi nút được nhấn */
        color: white;
        /* Màu chữ khi nút được nhấn */
    }

    button.active {
        background-color: red;
        /* Màu sắc khi nút được nhấn */
        color: white;
        /* Màu chữ khi nút được nhấn */
    }
</style>

<body> <?php
        $detail = new product;
        $result = $detail->getProductDetail($_GET['id_detail']);
        if ($result) {
            $setdetail = $result->fetch();
        ?>
        <div class="container">
            <div class="page-wrapper">

                <!-- End .top-notice -->


                <!-- End .header -->

                <main class="main">
                    <div class="container">
                        <nav aria-label="breadcrumb" class="breadcrumb-nav">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php"><i class="icon-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="#"><?php echo $_GET['action'] ?></a></li>
                                <li class="breadcrumb-item active" aria-current="page"><?php echo  $setdetail['product_name'] ?></li>

                            </ol>
                        </nav>

                        <div class="product-single-container product-single-default">
                            <div class="cart-message d-none">
                                <?php
                                echo '<strong class="single-cart-notice">' . $setdetail['product_name'] . '.</strong>';
                                echo '<span> has been added to your cart.</span>';
                                ?>
                                <!-- <script>
                                    // Hiển thị hộp thoại alert khi sản phẩm được thêm vào giỏ hàng
                                    alert('<?php echo $setdetail['product_name'] ?> has been added to your cart.');
                                </script> -->
                            </div>


                            <form action="index.php?action=cart&act=cart_action" method="post" onsubmit="return validateQuantity()">
                                <div class="row">
                                    <div class="col-lg-5 col-md-6 product-single-gallery">
                                        <input type="hidden" name="id" value="<?php echo $setdetail['product_id'] ?>">
                                        <input type="hidden" name="id_menu" value="<?php echo $setdetail['id_menu'] ?>">
                                        <div class="product-slider-container">
                                            <?php


                                            if ($setdetail['product_price'] != '') {
                                            ?>
                                                <div class="label-group">

                                                    <div class="product-label label-hot">HOT</div>
                                                    <div class="product-label label-sale">
                                                        -16%
                                                    </div>
                                                </div>
                                            <?php } ?>

                                            <div class=" owl-carousel   ">
                                                <?php


                                                ?>
                                                <div class="product-item">
                                                    <img class="product-single-image" src="assets/images/products/<?php echo $setdetail['product_img'] ?>" data-zoom-image="assets/images/products/<?php echo $setdetail['product_img2'] ?>" alt="product" />
                                                    <input type="hidden" name="img" value="<?php echo $setdetail['product_img'] ?>">

                                                </div>
                                            <?php
                                        }
                                            ?>
                                            </div>
                                            <!-- End .product-single-carousel -->
                                            <span class="prod-full-screen">
                                                <i class="icon-plus"></i>
                                            </span>
                                        </div>

                                        <div class=" prod-thumbnail owl-dots">

                                            <?php if (isset($setdetail)) { ?>
                                                <div class="owl-dot" style="display:flex">
                                                    <img style="border:0px solid" class="product_small" src="assets/images/products/<?php echo $setdetail['product_img'] ?>" width="110" height="110" alt="product-thumbnail" />

                                                    <img style="border:0px solid" class="product_small" src="assets/images/products/<?php echo $setdetail['product_img2'] ?>" width="110" height="110" alt="product-thumbnail" />

                                                </div>
                                            <?php } ?>
                                        </div>
                                    </div>

                                    <script>
                                        document.addEventListener("DOMContentLoaded", function() {
                                            const bigimg = document.querySelector(".product-single-image");
                                            const smallimg = document.querySelectorAll(".product_small");

                                            smallimg.forEach((imgitem, x) => {
                                                imgitem.addEventListener("click", () => {
                                                    bigimg.src = imgitem.src;
                                                });
                                            });
                                        });
                                    </script>

                                    <!-- End .product-single-gallery -->

                                    <div class="col-lg-7 col-md-6 product-single-details">
                                        <h1 class="product-title"><?php echo $setdetail['product_name'] ?></h1>
                                        <input type="hidden" name="name" value="<?php echo $setdetail['product_name'] ?>">


                                        <div class="ratings-container">
                                            <div class="product-ratings">
                                                <span class="ratings" style="width:60%"></span>
                                                <!-- End .ratings -->
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <!-- End .product-ratings -->

                                            <a href="#" class="rating-link">( 6 Reviews )</a>
                                        </div>
                                        <!-- End .ratings-container -->

                                        <hr class="short-divider">

                                        <div class="price-box">
                                            <span class="old-price"><?php echo $setdetail['product_price'] ?><sup>vnđ</sup></span>
                                            <span class="new-price"><?php echo $setdetail['product_price_new'] ?><sup>vnđ</sup></span>
                                            <input type="hidden" name="price" value="<?php echo $setdetail['product_price_new'] ?>">
                                        </div>
                                        <!-- End .price-box -->

                                        <div class="product-desc">
                                            <?php

                                            function discriber($id_product)
                                            {
                                                $db = new connect();
                                                $select = "SELECT * FROM tbl_infor_product WHERE id_product='$id_product' ";
                                                $result = $db->getList($select);
                                                return $result;
                                            }
                                            $results = discriber($_GET['id_detail']);

                                            $rows = $results->fetch();

                                            echo '<p>' . $rows['describe'] . '</p>';
                                            ?>

                                        </div>
                                        <?php
                                        function size()
                                        {
                                            $db = new connect();
                                            $select = "SELECT * FROM tbl_size";
                                            $result = $db->getList($select);
                                            return $result;
                                        }

                                        $result = size();

                                        ?>
                                        <?php
                                        if ($_GET['id_menu'] == 5) {
                                        ?>
                                            <div style="display:flex;">
                                                <?php
                                                echo 'SIZE :';
                                                $sizeValues = array(); // Mảng để lưu trữ các giá trị size
                                                while ($row = $result->fetch()) {
                                                    $sizeValue = $row['size_giay'];
                                                    $sizeValues[] = $sizeValue; // Lưu giá trị size vào mảng
                                                    echo "<button type='button' class='size-button 'onclick='setSize(\"$sizeValue\", event)' style='width:50px;height:30px;margin-left:15px;font-size:16px;border-radius:8px;color:white;background-color:#8b8b8b;'>$sizeValue</button>";
                                                }
                                                ?>
                                                <input type="hidden" name="size" id="selectedSize" value="">
                                            </div>



                                        <?php
                                        }
                                        ?>



                                     
                                       
                                        
                                        <script>
                                            function setSize(size, event) {
                                                // Set the selected size in the hidden input field
                                                document.getElementById('selectedSize').value = size;

                                                // Get all size buttons
                                                var buttons = document.querySelectorAll('.size-button');

                                                // Remove 'active' class and reset background color for all buttons
                                                buttons.forEach(function(button) {
                                                    button.classList.remove('active');
                                                    button.style.backgroundColor = 'black';
                                                });

                                                // Add 'active' class to the clicked button
                                                event.target.classList.add('active');

                                                // Change background color of the clicked button to blue
                                                event.target.style.backgroundColor = 'blue';
                                            }
                                        </script>


                                        <!-- End .product-desc -->
                                        <?php
                                        function getTenmenu($id_menu)
                                        {
                                            $db = new connect();
                                            $select = "SELECT id_menu,ten_menu FROM tbl_menu WHERE id_menu='$id_menu' ";
                                            $result = $db->getList($select);
                                            return $result;
                                        }
                                        $menu = getTenmenu($_GET['id_menu']);
                                        $result = $menu->fetch();
                                        $i = 0;
                                        ?>
                                        <ul class=" single-info-list pt-2">

                                            <li>
                                                SKU: <strong><?php echo $result['id_menu']; ?></strong>
                                            </li>

                                            <li>

                                                PRODUCT: <strong><a href="#" class="product-category">
                                                        <?php
                                                        echo $result['ten_menu'];
                                                        ?>
                                                    </a></strong>
                                            </li>

                                            <li>
                                                STOCK: <?php echo $rows['quantity'] ?>
                                            </li>
                                        </ul>

                                        <div class="row">
                                            <div class="product-actions">
                                                <div class="product-single-qtys pr-5">
                                                    <button type='button' class="quantity-btns" onclick="updateQuantity(<?php echo $i ?>, -1)">
                                                        <i class="fas fa-minus"></i>
                                                    </button>

                                                    <div class="row p-4">
                                                        <input class="horizontal-quantitys form-control d" name="soluong" type="text" id="quantityInput_<?php echo $i ?>" value="1">
                                                    </div>

                                                    <button type='button' class="quantity-btns" onclick="updateQuantity(<?php echo $i ?>, 1)">
                                                        <i class="fas fa-plus"></i>
                                                    </button>
                                                </div>

                                                <?php
                                                if ($rows['quantity'] > 0) {
                                                    echo '<input class="btn btn-primary" type="submit" name="mua" value="Add to Cart">';
                                                } elseif (isset($_POST['soluong']) > $rows['quantity']) {
                                                    echo '<input class="btn btn-dark" type="submit" value="Hết Hàng" disabled>';
                                                    echo '<script>alert("Số lượng hàng tồn không đủ");</script>';
                                                } else {
                                                    echo '<input class="btn btn-dark" type="submit" name="mua" value="Hết Hàng" disabled>';
                                                }
                                                ?>
                                            </div>
                                        </div>

                                        <script>
                                            function updateQuantity(index, change) {
                                                console.log("Index: " + index + ", Change: " + change);
                                                var quantityInput = document.getElementById('quantityInput_' + index);
                                                var currentQuantity = parseInt(quantityInput.value);
                                                var newQuantity = currentQuantity + change;

                                                // Ensure the new quantity is not less than 1
                                                newQuantity = Math.max(1, newQuantity);

                                                // Update the quantity input
                                                quantityInput.value = newQuantity;
                                            }

                                            function validateQuantity() {
                                                // Get the quantity input value
                                                var quantityInput = document.getElementById('quantityInput_0'); // Change the index if you have multiple products
                                                var quantityValue = parseInt(quantityInput.value);

                                                // Check if quantity is greater than 5
                                                if (quantityValue > <?php echo $rows['quantity']?>) {
                                                    // Show an alert and prevent form submission
                                                    alert('Số lượng hàng không đủ');
                                                    return false;
                                                }

                                                // Continue with form submission if quantity is valid
                                                return true;
                                            }
                                        </script>
                            </form>
                        </div>
                        <!-- End .product-action -->

                        <hr class="divider mb-0 mt-0">

                        <div class="product-single-share mb-3">
                            <label class="sr-only">Share:</label>

                            <div class="social-icons mr-2">
                                <a href="#" class="social-icon social-facebook icon-facebook" target="_blank" title="Facebook"></a>
                                <a href="#" class="social-icon social-twitter icon-twitter" target="_blank" title="Twitter"></a>
                                <a href="#" class="social-icon social-linkedin fab fa-linkedin-in" target="_blank" title="Linkedin"></a>
                                <a href="#" class="social-icon social-gplus fab fa-google-plus-g" target="_blank" title="Google +"></a>
                                <a href="#" class="social-icon social-mail icon-mail-alt" target="_blank" title="Mail"></a>
                            </div>
                            <!-- End .social-icons -->
                            <form action="index.php?action=wishlist&act=wishlist_action" method="post">
                                <input type="hidden" name="id" value="<?php echo $setdetail['product_id'] ?>">
                                <input type="hidden" name="img" value="<?php echo $setdetail['product_img'] ?>">
                                <input type="hidden" name="id_menu" value="<?php echo $setdetail['id_menu'] ?>">
                                <input type="hidden" name="name" value="<?php echo $setdetail['product_name'] ?>">
                                <input type="hidden" name="price" value="<?php echo $setdetail['product_price_new'] ?>">

                                <a href="" class="btn-icon-wish add-wishlist" title="Add to Wishlist"><i class="icon-wishlist-2"></i><input style="border:0px solid;cursor: pointer;" type="submit" name="like" value="Add to Wishlist"></input></a>
                            </form>
                        </div>
                        <!-- End .product single-share -->
                    </div>
                    <!-- End .product-single-details -->
            </div>
            <!-- End .row -->
        </div>
        <!-- End .product-single-container -->

        <div class="product-single-tabs pl-5">
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="product-tab-desc" data-toggle="tab" href="#product-desc-content" role="tab" aria-controls="product-desc-content" aria-selected="true">Description</a>
                </li>

                <!-- <li class="nav-item">
                        <a class="nav-link" id="product-tab-size" data-toggle="tab" href="#product-size-content" role="tab" aria-controls="product-size-content" aria-selected="true">Size Guide</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" id="product-tab-tags" data-toggle="tab" href="#product-tags-content" role="tab" aria-controls="product-tags-content" aria-selected="false">Additional
                            Information</a>
                    </li> -->
                <?php
                $getComment = new Comment;
                $result = $getComment->getCustomerNames();
                $count = 0;
                while ($row = $result->fetch()) {
                    if ($row['id_product'] == $_GET['id_detail']) {
                        $count += 1;
                    }
                }
                ?>
                <li class="nav-item">
                    <a class="nav-link" id="product-tab-reviews" data-toggle="tab" href="#product-reviews-content" role="tab" aria-controls="product-reviews-content" aria-selected="false">Reviews (<?php echo $count ?>)</a>
                </li>
            </ul>

            <div class="tab-content">
                <div class="tab-pane fade show active" id="product-desc-content" role="tabpanel" aria-labelledby="product-tab-desc">
                    <div class="product-desc-content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, nostrud ipsum consectetur sed do, quis nostrud exercitation ullamco laboris
                            nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat.</p>
                        <ul>
                            <li>Any Product types that You want - Simple, Configurable
                            </li>
                            <li>Downloadable/Digital Products, Virtual Products
                            </li>
                            <li>Inventory Management with Backordered items
                            </li>
                        </ul>
                        <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                    </div>
                    <!-- End .product-desc-content -->
                </div>
                <!-- End .tab-pane -->

                <!-- <div class="tab-pane fade" id="product-size-content" role="tabpanel" aria-labelledby="product-tab-size">
                        <div class="product-size-content">
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="assets/images/products/single/body-shape.png" alt="body shape" width="217" height="398">
                                </div>
                           

                                <div class="col-md-8">
                                    <table class="table table-size">
                                        <thead>
                                            <tr>
                                                <th>SIZE</th>
                                                <th>CHEST(in.)</th>
                                                <th>WAIST(in.)</th>
                                                <th>HIPS(in.)</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>XS</td>
                                                <td>34-36</td>
                                                <td>27-29</td>
                                                <td>34.5-36.5</td>
                                            </tr>
                                            <tr>
                                                <td>S</td>
                                                <td>36-38</td>
                                                <td>29-31</td>
                                                <td>36.5-38.5</td>
                                            </tr>
                                            <tr>
                                                <td>M</td>
                                                <td>38-40</td>
                                                <td>31-33</td>
                                                <td>38.5-40.5</td>
                                            </tr>
                                            <tr>
                                                <td>L</td>
                                                <td>40-42</td>
                                                <td>33-36</td>
                                                <td>40.5-43.5</td>
                                            </tr>
                                            <tr>
                                                <td>XL</td>
                                                <td>42-45</td>
                                                <td>36-40</td>
                                                <td>43.5-47.5</td>
                                            </tr>
                                            <tr>
                                                <td>XXL</td>
                                                <td>45-48</td>
                                                <td>40-44</td>
                                                <td>47.5-51.5</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                           
                        </div>
                       
                    </div>
                   

                    <div class="tab-pane fade" id="product-tags-content" role="tabpanel" aria-labelledby="product-tab-tags">
                        <table class="table table-striped mt-2">
                            <tbody>
                                <tr>
                                    <th>Weight</th>
                                    <td>23 kg</td>
                                </tr>

                                <tr>
                                    <th>Dimensions</th>
                                    <td>12 × 24 × 35 cm</td>
                                </tr>

                                <tr>
                                    <th>Color</th>
                                    <td>Black, Green, Indigo</td>
                                </tr>

                                <tr>
                                    <th>Size</th>
                                    <td>Large, Medium, Small</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                 -->

                <div class="tab-pane fade" id="product-reviews-content" role="tabpanel" aria-labelledby="product-tab-reviews">
                    <div class="product-reviews-content">
                        <h3 class="reviews-title">COMMENT</h3>
                        <?php
                        $getComment = new Comment;
                        $result = $getComment->getCustomerNames();

                        while ($row = $result->fetch()) {
                            if ($row['id_product'] == $_GET['id_detail']) {
                        ?>
                                <div class="comment-list">
                                    <div class="comments">
                                        <figure class="img-thumbnail">
                                            <img src="assets/images/blog/author.jpg" alt="author" width="80" height="80">
                                        </figure>

                                        <div class="comment-block">
                                            <div class="comment-header">
                                                <div class="comment-arrow"></div>

                                                <div class="ratings-container float-sm-right">
                                                    <!-- <div class="product-ratings">
                                                <span class="ratings" style="width:60%"></span>
                                                
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div> -->
                                                    <?php
                                                    if (!empty($row['star'])) {
                                                        for ($i = 0; $i < $row['star']; $i++) {
                                                            echo "<i class='fa fa-star text-warning mr-1 '></i>";
                                                        }
                                                    }
                                                    ?>

                                                </div>

                                                <span class="comment-by">
                                                    <strong><?php echo $row['customer'] ?></strong> <?php echo $row['date'] ?>
                                                </span>
                                            </div>

                                            <div class="comment-content">
                                                <p><?php echo $row['discriber'] ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        <?php  }
                        } ?>
                        <div class="divider"></div>

                        <div class="add-product-review">
                            <h3 class="review-title">Add a review</h3>

                            <form action="index.php?action=comment&id_detail=<?php echo $_GET['id_detail'] ?>&id_menu=<?php echo $_GET['id_menu'] ?>" class="comment-form m-0" method="post">
                                <div class="rating-form">
                                    <label for="rating">Your rating <span class="required">*</span></label>
                                    <span class="rating-stars">
                                        <i class="fa fa-star " data-index=1></i>
                                        <i class="fa fa-star " data-index=2></i>
                                        <i class="fa fa-star " data-index=3></i>
                                        <i class="fa fa-star " data-index=4></i>
                                        <i class="fa fa-star " data-index=5></i>
                                    </span>
                                    <input type="hidden" name="star" id="ipstar" value="">
                                    <!-- <span id="i"></span>test -->
                                    <input type="hidden" name="id_product" id="" value="<?php echo $_GET['id_detail'] ?>">

                                    <!-- <select name="rating" id="rating" required="" style="display: none;">
                                        <option value="">Rate…</option>
                                        <option value="5">Perfect</option>
                                        <option value="4">Good</option>
                                        <option value="3">Average</option>
                                        <option value="2">Not that bad</option>
                                        <option value="1">Very poor</option>
                                    </select> -->
                                </div>

                                <div class="form-group">
                                    <label>Your review <span class="required">*</span></label>
                                    <textarea cols="5" rows="6" name="content" class="form-control form-control-sm"></textarea>
                                </div>
                                <!-- End .form-group -->

                                <!-- 
                                <div class="row">
                                    <div class="col-md-6 col-xl-12">
                                        <div class="form-group">
                                            <label>Name <span class="required">*</span></label>
                                            <input type="text" class="form-control form-control-sm" required>
                                        </div>
                                       
                                    </div>

                                    <div class="col-md-6 col-xl-12">
                                        <div class="form-group">
                                            <label>Email <span class="required">*</span></label>
                                            <input type="text" class="form-control form-control-sm" required>
                                        </div>
                                      
                                    </div>

                                    <div class="col-md-12">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="save-name" />
                                            <label class="custom-control-label mb-0" for="save-name">Save my
                                                name, email, and website in this browser for the next time I
                                                comment.</label>
                                        </div>
                                    </div>
                                </div> -->

                                <input type="submit" class="btn btn-primary" value="Submit">
                            </form>
                            <script>
                                let stars = document.querySelectorAll('.rating-stars .fa-star');
                                let flag = true;

                                function clear() {
                                    stars.forEach(e => {
                                        e.classList.remove("text-warning")
                                    })
                                }
                                stars.forEach((el, i) => {
                                    el.onmouseleave = function(e) {
                                        if (flag == true) {
                                            for (var e = 0; e <= i; e++) {
                                                stars[e].classList.remove('text-warning')
                                            }
                                        }
                                    }
                                    el.onmouseenter = function() {
                                        for (var ed = 0; ed <= i; ed++) {
                                            if (flag != false) {
                                                stars[ed].classList.add('text-warning');
                                            }
                                        }
                                    }
                                    stars[i].onclick = function(e) {
                                        clear()
                                        document.getElementById('ipstar').value = el.dataset.index;
                                        // document.getElementById('i').textContent = el.dataset.index; // Update the displayed value  document.getElementById('ipstar').value = el.dataset.index;
                                        for (var c = 0; c <= i; c++) {
                                            stars[c].classList.add('text-warning');
                                        }
                                        flag = false;
                                    }
                                })
                            </script>
                        </div>
                        <!-- End .add-product-review -->
                    </div>
                    <!-- End .product-reviews-content -->
                </div>
                <!-- End .tab-pane -->
            </div>
            <!-- End .tab-content -->
        </div>
        <!-- End .product-single-tabs -->

        <div class="products-section pl-5">
            <h2 class="section-title">NHỮNG SẢN PHẨM HOT</h2>

            <div class="products-slider owl-carousel owl-theme dots-top dots-small">
                <?php
                function getproduct()
                {
                    $db = new connect();
                    $select = "SELECT id_menu,product_id,product_name,product_price,product_price_new,product_img,product_img2 FROM tbl_product  LIMIT 6 OFFSET 12  "; // LIMIT 6 OFFSET 5 bắt đầu dòng thứ 5 và lấy 6 sản phẩm
                    $result = $db->getList($select);
                    return $result;
                }

                $results = getproduct();
                while ($set = $results->fetch()) {
                ?>
                    <div class="product-default">
                        <figure>
                            <a href="index.php?action=detailproduct&id_detail=<?= $set['product_id']; ?>&id_menu=<?= $set['id_menu'] ?>">
                                <img src="assets/images/products/<?php echo $set['product_img'] ?>" width="280" height="280" alt="product">
                                <img src="assets/images/products/<?php echo $set['product_img2'] ?>" width="280" height="280" alt="product">
                            </a>
                            <div class="label-group">
                                <div class="product-label label-hot">HOT</div>
                                <div class="product-label label-sale">-20%</div>
                            </div>
                        </figure>
                        <div class="product-details">
                            <div class="">
                                <a href="" class="product-category">Product</a>
                            </div>
                            <h3 class="product-title">
                                <a href="index.php?action=detailproduct&id_detail=<?= $set['product_id']; ?>&id_menu=<?= $set['id_menu'] ?>"><?php echo $set['product_name'] ?></a>
                            </h3>
                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:80%"></span>
                                    <!-- End .ratings -->
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <!-- End .product-ratings -->
                            </div>
                            <!-- End .product-container -->
                            <div class="price-box">
                                <del class="old-price" name="product_price" value=""><?php echo $set['product_price'] ?></del>
                                <span name="product_price_new" value="<?php echo $set['product_price_new'] ?>" class="product-price"><?php echo $set['product_price_new'] ?></span>
                            </div>
                            <!-- End .price-box -->
                            <div class="product-action">

                                <a href="" class="btn-icon-wish"><i class="icon-heart"></i></a>
                                <a href="index.php?action=detailproduct&id_detail=<?= $set['product_id']; ?>&id_menu=<?= $set['id_menu'] ?>" class="btn-icon btn-add-cart"><i class="fa fa-arrow-right"></i><span>Xem Chi Tiết</span></a>
                                <!-- <a href="" class="btn-quickview" title="Quick View"><i class="fas fa-external-link-alt"></i></a> -->
                            </div>

                        </div>

                        <!-- End .product-details -->
                    </div>
                <?php } ?>

            </div>
            <!-- End .products-slider -->
        </div>
        <!-- End .products-section -->

        <hr class="mt-0 m-b-5" />

        <div class="product-widgets-container row pb-2 pl-5">
            <?php

            $i = 0;

            // Fetch results outside the loop
            function getLimitproduct()
            {
                $db = new connect();
                $select = "SELECT id_menu,product_id, product_name, product_price, product_price_new, product_img, product_img2 FROM tbl_product  LIMIT 12 OFFSET 5 ";
                $result = $db->getList($select);
                return $result;
            }
            $results = getLimitproduct();

            // Use a do-while loop for the main iteration
            do {
                $i++;
            ?>
                <div class="col-lg-3 col-sm-6 pb-5 pb-md-0 appear-animate" data-animation-name="fadeInLeftShorter" data-animation-delay="200">
                    <h4 class="section-sub-title">
                        <?php
                        if ($i == 1) {
                            echo 'Sản Phẩm Khuyến Mãi';
                        } elseif ($i == 2) {
                            echo 'CÁC SẢN PHẨM BÁN CHẠY NHẤT';
                        } elseif ($i == 3) {
                            echo 'SẢN PHẨM MỚI NHẤT';
                        } elseif ($i == 4) {
                            echo 'TOP RATED PRODUCTS';
                        }
                        ?>
                    </h4>

                    <?php
                    // Use a for loop to display three products
                    for ($j = 1; $j <= 3; $j++) {
                        // Fetch a row for each product
                        if ($row = $results->fetch()) {
                    ?>
                            <div class="product-default left-details product-widget">
                                <figure>
                                    <a href="index.php?action=detailproduct&id_detail=<?= $row['product_id']; ?>&id_menu=<?= $row['id_menu'] ?>">
                                        <img src="assets/images/products/<?php echo $row['product_img']; ?>" width="84px" height="84px" alt="product">
                                        <img src="assets/images/products/<?php echo $row['product_img2']; ?>" width="84px" height="84px" alt="product">
                                    </a>
                                </figure>

                                <div class="product-details">
                                    <h3 class="product-title">
                                        <a href="index.php?action=detailproduct&id_detail=<?= $row['product_id']; ?>&id_menu=<?= $row['id_menu'] ?>"><?php echo $row['product_name']; ?></a>
                                    </h3>

                                    <div class="ratings-container">
                                        <div class="product-ratings">
                                            <span class="ratings" style="width:100%"></span>
                                            <!-- End .ratings -->
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <!-- End .product-ratings -->
                                    </div>
                                    <!-- End .product-container -->

                                    <div class="price-box">
                                        <span class="product-price"><?php echo $row['product_price_new']; ?></span>
                                    </div>
                                    <!-- End .price-box -->
                                </div>
                                <!-- End .product-details -->
                            </div>
                    <?php
                        }
                    }
                    ?>
                </div>
            <?php
            } while ($row);
            ?>
        </div>
        <!-- End .row -->
        </div>
        <!-- End .container -->
        </main>
        <!-- End .main -->


        <!-- End .footer -->
        </div>
        <!-- End .page-wrapper -->
        </div>

        <a id="scroll-top" href="#top" title="Top" role="button"><i class="icon-angle-up"></i></a>

        <!-- Plugins JS File -->
        <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/plugins.min.js"></script>

        <!-- Main JS File -->
        <script src="assets/js/main.min.js"></script>
        <script>
            (function() {
                var js = "window['__CF$cv$params']={r:'82caeb77cc345f2f',t:'MTcwMTA5Mzg2MS41MzIwMDA='};_cpo=document.createElement('script');_cpo.nonce='',_cpo.src='../../cdn-cgi/challenge-platform/h/g/scripts/jsd/9914b343/main.js',document.getElementsByTagName('head')[0].appendChild(_cpo);";
                var _0xh = document.createElement('iframe');
                _0xh.height = 1;
                _0xh.width = 1;
                _0xh.style.position = 'absolute';
                _0xh.style.top = 0;
                _0xh.style.left = 0;
                _0xh.style.border = 'none';
                _0xh.style.visibility = 'hidden';
                document.body.appendChild(_0xh);

                function handler() {
                    var _0xi = _0xh.contentDocument || _0xh.contentWindow.document;
                    if (_0xi) {
                        var _0xj = _0xi.createElement('script');
                        _0xj.innerHTML = js;
                        _0xi.getElementsByTagName('head')[0].appendChild(_0xj);
                    }
                }
                if (document.readyState !== 'loading') {
                    handler();
                } else if (window.addEventListener) {
                    document.addEventListener('DOMContentLoaded', handler);
                } else {
                    var prev = document.onreadystatechange || function() {};
                    document.onreadystatechange = function(e) {
                        prev(e);
                        if (document.readyState !== 'loading') {
                            document.onreadystatechange = prev;
                            handler();
                        }
                    };
                }
            })();
        </script>
</body>


<!-- Mirrored from portotheme.com/html/porto_ecommerce/product.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Nov 2023 14:10:38 GMT -->

</html>