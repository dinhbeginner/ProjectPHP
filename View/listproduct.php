<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from portotheme.com/html/porto_ecommerce/category-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Nov 2023 14:10:25 GMT -->

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

<body>
    <div class="page-wrapper">

        <!-- End .top-notice -->


        <!-- End .header -->

        <main class="main">
            <div class="category-banner-container bg-gray">
                <div class="category-banner banner text-uppercase" style="background: no-repeat 60%/cover url('assets/images/banners/banner-top.jpg');">
                    <div class="container position-relative">
                        <div class="row">
                            <div class="pl-lg-5 pb-5 pb-md-0 col-md-5 col-xl-4 col-lg-4 offset-1">
                                <h3>Electronic
                                    <br>Deals
                                </h3>
                                <a href="category.html" class="btn btn-dark">Get Yours!</a>
                            </div>
                            <div class="pl-lg-3 col-md-4 offset-md-0 offset-1 pt-3">
                                <div class="coupon-sale-content">
                                    <h4 class="m-b-1 coupon-sale-text bg-white text-transform-none">Exclusive COUPON
                                    </h4>
                                    <h5 class="mb-2 coupon-sale-text d-block ls-10 p-0">
                                        <i class="ls-0">UP TO</i>
                                        <b class="text-dark">$100</b> OFF
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <nav aria-label="breadcrumb" class="breadcrumb-nav">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="index.php">
                                <i class="icon-home"></i>
                            </a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href=""><?php echo $_GET['action'] ?></a>
                        </li>
                        <!-- <li class="breadcrumb-item active" aria-current="page">Accessories</li> -->
                    </ol>
                </nav>

                <div class="row">
                    <div class="col-lg-9 order-lg-1">
                        <nav class="toolbox sticky-header" data-sticky-options="{'mobile': true}">
                            <div class="toolbox-left">
                                <a href="#" class="sidebar-toggle">
                                    <svg data-name="Layer 3" id="Layer_3" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                                        <line x1="15" x2="26" y1="9" y2="9" class="cls-1"></line>
                                        <line x1="6" x2="9" y1="9" y2="9" class="cls-1"></line>
                                        <line x1="23" x2="26" y1="16" y2="16" class="cls-1"></line>
                                        <line x1="6" x2="17" y1="16" y2="16" class="cls-1"></line>
                                        <line x1="17" x2="26" y1="23" y2="23" class="cls-1"></line>
                                        <line x1="6" x2="11" y1="23" y2="23" class="cls-1"></line>
                                        <path d="M14.5,8.92A2.6,2.6,0,0,1,12,11.5,2.6,2.6,0,0,1,9.5,8.92a2.5,2.5,0,0,1,5,0Z" class="cls-2"></path>
                                        <path d="M22.5,15.92a2.5,2.5,0,1,1-5,0,2.5,2.5,0,0,1,5,0Z" class="cls-2"></path>
                                        <path d="M21,16a1,1,0,1,1-2,0,1,1,0,0,1,2,0Z" class="cls-3"></path>
                                        <path d="M16.5,22.92A2.6,2.6,0,0,1,14,25.5a2.6,2.6,0,0,1-2.5-2.58,2.5,2.5,0,0,1,5,0Z" class="cls-2"></path>
                                    </svg>
                                    <span>Filter</span>
                                </a>

                                <div class="toolbox-item toolbox-sort">

                                    <form action="index.php?action=listproduct&act=orderby" method="post" id="sortingForm">
                                        <div class="select-custom">
                                            <label for="orderby">Sort by:</label>
                                            <select name="orderby" id="orderby" class="form-control">
                                                <option value="menu_order" selected="selected">Default sorting</option>
                                                <option value="ID_DESC">Các Sản Phẩm Mới Nhất</option>
                                                <option value="ASC">Xắp xếp theo giá từ thấp lên cao</option>
                                                <option value="DESC">Xắp xếp theo giá từ cao xuống thấp</option>
                                            </select>
                                        </div>
                                        <!-- Remove the button from here -->
                                    </form>

                                    <!-- Add this script at the end of your HTML, before the closing </body> tag -->
                                    <script>
                                        // Using jQuery to detect changes in the select and submit the form
                                        $(document).ready(function() {
                                            $('#orderby').change(function() {
                                                $('#sortingForm').submit();
                                            });
                                        });
                                    </script>
                                    <!-- End .select-custom -->


                                </div>
                                <!-- End .toolbox-item -->
                            </div>
                            <!-- End .toolbox-left -->

                            <div class="toolbox-right">
                                <div class="toolbox-item toolbox-show">
                                    <!-- <label>Show:</label>

                                    <div class="select-custom">
                                        <select name="count" class="form-control">
                                            <option value="12">12</option>
                                            <option value="24">24</option>
                                            <option value="36">36</option>
                                        </select>
                                    </div> -->
                                    <!-- End .select-custom -->
                                </div>
                                <!-- End .toolbox-item -->

                                <div class="toolbox-item layout-modes">
                                    <a href="index.php?action=gridproduct&act=gridproduct" class="layout-btn btn-grid" title="Grid">
                                        <i class="icon-mode-grid"></i>
                                    </a>
                                    <a href="index.php?action=listproduct" class="layout-btn btn-list active" title="List">
                                        <i class="icon-mode-list"></i>
                                    </a>
                                </div>
                                <!-- End .layout-modes -->
                            </div>
                            <!-- End .toolbox-right -->
                        </nav>
                        <?php

                        $allsp = new product;
                        $count = $allsp->getAllproduct()->rowCount();
                        // var_dump( $count);
                        $limit = 12;
                        $trang = new page();
                        $page = $trang->findPage($count, $limit);
                        $start = $trang->findStart($limit);


                        ?>
                        <div class="row pb-4">
                            <?php

                            if (isset($_GET['action']) && $_GET['action'] == 'product_danhmuc' && isset($_GET['id_menu']) && !empty($_GET['id_menu'])) {
                                $result = $allsp->getProductMenu($_GET['id_menu'], $start, $limit);
                            } elseif (isset($_GET['id_menu'])) {
                                $result = $allsp->getProductMenu($_GET['id_menu'], $start, $limit);
                            } elseif (isset($_GET['act']) && $_GET['act'] == 'orderby') {
                                if ($_POST['orderby']) {
                                    $tk = $_POST['orderby'];
                                    $result = $allsp->orderby($tk);
                                    $count = 0;

                                    // var_dump($count);
                                }
                            } else {
                                $result = $allsp->getAllProductTrang1($start, $limit);
                            }
                            // var_dump($result);
                            while ($set = $result->fetch()) {
                            ?>
                                <div class="col-sm-12 col-6 product-default left-details product-list mb-2">
                                    <figure>
                                        <a href="index.php?action=detailproduct&id_detail=<?= $set['product_id'] ?>&id_menu=<?= $set['id_menu'] ?>">
                                            <img src="assets/images/products/<?php echo $set['product_img'] ?>" width="250" height="250" alt="product" />
                                            <img src="assets/images/products/<?php echo $set['product_img2'] ?>" width="250" height="250" alt="product" />
                                        </a>
                                        <?php if ($set['product_price'] != "") : ?>

                                            <div class="label-group">
                                                <div class="product-label label-hot">HOT</div>
                                                <div class="product-label label-sale">-20%</div>
                                            </div>
                                        <?php
                                        endif
                                        ?>
                                    </figure>
                                    <div class="product-details">
                                        <div class="category-list">
                                            <a href="category.html" class="product-category">Product</a>
                                        </div>
                                        <h3 class="product-title"> <a href="index.php?action=detailproduct&id_detail=<?= $set['product_id'] ?>&id_menu=<?= $set['id_menu'] ?>"><?php echo $set['product_name'] ?></a>
                                        </h3>
                                        <div class="ratings-container">
                                            <div class="product-ratings">
                                                <span class="ratings" style="width:100%;color:darkorange"></span>
                                                <!-- End .ratings -->
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <!-- End .product-ratings -->
                                        </div>
                                        <!-- End .product-container -->
                                        <p class="product-description"></p>
                                        <div class="price-box">
                                            <span class="old-price"><?php echo $set['product_price'] ?></span>
                                            <span class="product-price"><?php echo $set['product_price_new'] ?></span>
                                        </div>
                                        <!-- End .price-box -->
                                        <div class="product-action">
                                            <div class="row">
                                                <form action="index.php?action=cart&act=cart_action" method="post">
                                                    <a href="" class="btn-icon btn-add-cart">
                                                        <i class="icon-shopping-cart"></i>



                                                        <input type="hidden" name="id" value="<?php echo $set['product_id'] ?>">
                                                        <input type="hidden" name="id_menu" value="<?php echo $set['id_menu'] ?>">
                                                        <input type="hidden" name="img" value="<?php echo $set['product_img'] ?>">
                                                        <input type="hidden" name="name" value="<?php echo $set['product_name'] ?>">
                                                        <input type="hidden" name="price" value="<?php echo $set['product_price_new'] ?>">

                                                        <!-- Add to Wishlist Button with Dialog -->
                                                        <span class="pl-3"></span>

                                                        <input class="btn-icon btn-add-cart" style="border:0px solid;cursor: pointer;" type="submit" name="mua" value="ADD TO CART">
                                                    </a>
                                                </form>
                                                <!-- View Details Button -->

                                                <form id="wishlistForm" action="index.php?action=wishlist&act=wishlist_action" method="post">
                                                    <input type="hidden" name="id" value="<?php echo $set['product_id'] ?>">
                                                    <input type="hidden" name="id_menu" value="<?php echo $set['id_menu'] ?>">
                                                    <input type="hidden" name="img" value="<?php echo $set['product_img'] ?>">
                                                    <input type="hidden" name="name" value="<?php echo $set['product_name'] ?>">
                                                    <input type="hidden" name="price" value="<?php echo $set['product_price_new'] ?>">

                                                    <input type="submit" name="like" style="height:40px" value="Thêm vào wishlist" class="wishlist-button">
                                                    <svg class="icon-heart" xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512">
                                                        <path d="M47.6 300.4L228.3 469.1c7.5 7 17.4 10.9 27.7 10.9s20.2-3.9 27.7-10.9L464.4 300.4c30.4-28.3 47.6-68 47.6-109.5v-5.8c0-69.9-50.5-129.5-119.4-141C347 36.5 300.6 51.4 268 84L256 96 244 84c-32.6-32.6-79-47.5-124.6-39.9C50.5 55.6 0 115.2 0 185.1v5.8c0 41.5 17.2 81.2 47.6 109.5z" />
                                                    </svg>
                                                    <span></span>
                                                    </input>
                                                </form>
                                            </div>

                                        </div>

                                    </div>
                                    <!-- End .product-details -->
                                </div>
                            <?php
                            } ?>

                        </div>

                        <nav class="toolbox toolbox-pagination">
                            <div class="toolbox-item toolbox-show">
                                <!-- <label>Show:</label>

                                <div class="select-custom">
                                    <select name="count" class="form-control">
                                        <option value="12">12</option>
                                        <option value="24">24</option>
                                        <option value="36">36</option>
                                    </select>
                                </div> -->
                                <!-- End .select-custom -->
                            </div>
                            <!-- End .toolbox-item -->

                            <ul class="pagination toolbox-item">
                                <?php
                                $current_page = isset($_GET['page']) ? $_GET['page'] : 1;

                                if ($current_page > 1 && $page > 1) {
                                    echo '<li><a href="' . buildPaginationLink($current_page - 1) . '">Prev</a></li>';
                                }

                                for ($i = 1; $i <= $page; $i++) {
                                    echo '<li class="page-item"><a class="page-link" href="' . buildPaginationLink($i) . '">' . $i . '</a></li>';
                                }

                                if ($current_page < $page && $page > 1) {
                                    echo '<li><a href="' . buildPaginationLink($current_page + 1) . '">Next</a></li>';
                                }
                                ?>
                            </ul>

                            <?php
                            function buildPaginationLink($page)
                            {
                                $queryUrl = $_GET;
                                $queryUrl['page'] = $page;
                                return 'index.php?' . http_build_query($queryUrl);
                            }
                            ?>
                        </nav>
                    </div>
                    <!-- End .col-lg-9 -->

                    <div class="sidebar-overlay"></div>
                    <aside class="sidebar-shop col-lg-3 order-lg-first mobile-sidebar">
                        <div class="sidebar-wrapper">
                            <div class="widget">
                                <h3 class="widget-title">
                                    <a data-toggle="collapse" href="#widget-body-2" role="button" aria-expanded="true" aria-controls="widget-body-2">PRODUCTS</a>
                                </h3>

                                <div class="collapse show" id="widget-body-2">
                                    <div class="widget-body">
                                        <ul class="cat-list">
                                            <!-- Menu items -->
                                            <ul>
                                                <?php
                                                $hh = new menu;
                                                $result = $hh->getMenu('2');
                                                while ($sets = $result->fetch()) {
                                                ?>

                                                    <li>

                                                        <a href="index.php?action=listproduct&id_menu=<?= $sets['id_menu']; ?>">
                                                            <?php echo $sets['ten_menu']; ?><span class="products-count">(3)</span>
                                                        </a>


                                                    </li>
                                                <?php
                                                }
                                                ?>

                                            </ul>

                                            <!-- Container for related products -->
                                            <div id="related-products-container"></div>





                                        </ul>
                                    </div>
                                    <!-- End .widget-body -->
                                </div>
                                <!-- End .collapse -->
                            </div>
                            <!-- End .widget -->

                            <!-- <div class="widget">
                                <h3 class="widget-title">
                                    <a data-toggle="collapse" href="#widget-body-3" role="button" aria-expanded="true" aria-controls="widget-body-3">Price</a>
                                </h3>

                                <div class="collapse show" id="widget-body-3">
                                    <div class="widget-body pb-0">
                                        <form action="#">
                                            <div class="price-slider-wrapper">
                                                <div id="price-slider"></div>
                                                
                                            </div>
                                         

                                            <div class="filter-price-action d-flex align-items-center justify-content-between flex-wrap">
                                                <div class="filter-price-text">
                                                    Price:
                                                    <span id="filter-price-range"></span>
                                                </div>
                                                

                                                <button type="submit" class="btn btn-primary">Filter</button>
                                            </div>
                                          
                                        </form>
                                    </div>
                               
                                </div>
                              
                            </div> -->


                            <!-- <div class="widget widget-color">
                                <h3 class="widget-title">
                                    <a data-toggle="collapse" href="#widget-body-4" role="button" aria-expanded="true" aria-controls="widget-body-4">Color</a>
                                </h3>

                                <div class="collapse show" id="widget-body-4">
                                    <div class="widget-body pb-0">
                                        <ul class="config-swatch-list">
                                            <li class="active">
                                                <a href="#" style="background-color: #000;"></a>
                                            </li>
                                            <li>
                                                <a href="#" style="background-color: #0188cc;"></a>
                                            </li>
                                            <li>
                                                <a href="#" style="background-color: #81d742;"></a>
                                            </li>
                                            <li>
                                                <a href="#" style="background-color: #6085a5;"></a>
                                            </li>
                                            <li>
                                                <a href="#" style="background-color: #ab6e6e;"></a>
                                            </li>
                                        </ul>
                                    </div>
                                  
                                </div>
                              
                            </div> -->
                            <!-- End .widget -->

                            <!-- <div class="widget widget-size">
                                <h3 class="widget-title">
                                    <a data-toggle="collapse" href="#widget-body-5" role="button" aria-expanded="true" aria-controls="widget-body-5">Sizes</a>
                                </h3>

                                <div class="collapse show" id="widget-body-5">
                                    <div class="widget-body pb-0">
                                        <ul class="config-size-list">
                                            <li class="active">
                                                <a href="#">XL</a>
                                            </li>
                                            <li>
                                                <a href="#">L</a>
                                            </li>
                                            <li>
                                                <a href="#">M</a>
                                            </li>
                                            <li>
                                                <a href="#">S</a>
                                            </li>
                                        </ul>
                                    </div>
                                 
                                </div>
                              
                            </div> -->
                            <!-- End .widget -->

                            <div class="widget widget-featured">
                                <h3 class="widget-title">Featured</h3>

                                <div class="widget-body">
                                    <div class="owl-carousel widget-featured-products">

                                        <?php
                                        $fooderproduct = new product();


                                        // Fetch results outside the loop
                                        $results = $fooderproduct->getAllproduct();

                                        // Use a do-while loop for the main iteration
                                        do {

                                        ?>
                                            <div class="featured-col">
                                                <?php
                                                // Use a for loop to display three products
                                                for ($j = 1; $j <= 3; $j++) {
                                                    // Fetch a row for each product
                                                    if ($row = $results->fetch()) {
                                                ?>
                                                        <div class="product-default left-details product-widget">
                                                            <figure>
                                                                <a href="index.php?action=detailproduct&id_detail=<?= $row['product_id']; ?>&id_menu=<?= $row['id_menu'] ?>">
                                                                    <img src="assets/images/products/<?php echo $row['product_img']; ?>" width="75" height="75" alt="product" />
                                                                    <img src="assets/images/products/<?php echo $row['product_img2']; ?>" width="75" height="75" alt="product" />
                                                                </a>
                                                            </figure>
                                                            <div class="product-details">
                                                                <h3 class="product-title"> <a href=""><?php echo $row['product_name']; ?></a> </h3>
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

                                                <?php }
                                                } ?>

                                            </div>
                                            <!-- End .featured-col -->
                                        <?php
                                        } while ($row);
                                        ?>
                                        <!-- End .featured-col -->
                                    </div>

                                    <!-- End .widget-featured-slider -->
                                </div>
                                <!-- End .widget-body -->
                            </div>
                            <!-- End .widget -->

                            <div class="widget widget-block">
                                <h3 class="widget-title">Custom HTML Block</h3>
                                <h5>This is a custom sub-title.</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras non placerat mi. Etiam non tellus </p>
                            </div>
                            <!-- End .widget -->
                        </div>
                        <!-- End .sidebar-wrapper -->
                    </aside>
                    <!-- End .col-lg-3 -->
                </div>
                <!-- End .row -->
            </div>
            <!-- End .container -->

            <div class="mb-4"></div>
            <!-- margin -->
        </main>
        <!-- End .main -->


        <!-- End .footer -->
    </div>
    <!-- End .page-wrapper -->

    <div class="loading-overlay">
        <div class="bounce-loader">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>

    <div class="mobile-menu-overlay"></div>
    <!-- End .mobil-menu-overlay -->

    <div class="mobile-menu-container">
        <div class="mobile-menu-wrapper">
            <span class="mobile-menu-close">
                <i class="fa fa-times"></i>
            </span>
            <nav class="mobile-nav">
                <ul class="mobile-menu">
                    <li>
                        <a href="demo4.html">Home</a>
                    </li>
                    <li>
                        <a href="category.html">Categories</a>
                        <ul>
                            <li>
                                <a href="category.html">Full Width Banner</a>
                            </li>
                            <li>
                                <a href="category-banner-boxed-slider.html">Boxed Slider Banner</a>
                            </li>
                            <li>
                                <a href="category-banner-boxed-image.html">Boxed Image Banner</a>
                            </li>
                            <li>
                                <a href="https://www.portotheme.com/html/porto_ecommerce/category-sidebar-left.html">Left Sidebar</a>
                            </li>
                            <li>
                                <a href="category-sidebar-right.html">Right Sidebar</a>
                            </li>
                            <li>
                                <a href="category-off-canvas.html">Off Canvas Filter</a>
                            </li>
                            <li>
                                <a href="category-horizontal-filter1.html">Horizontal Filter 1</a>
                            </li>
                            <li>
                                <a href="category-horizontal-filter2.html">Horizontal Filter 2</a>
                            </li>
                            <li>
                                <a href="#">List Types</a>
                            </li>
                            <li>
                                <a href="category-infinite-scroll.html">Ajax Infinite Scroll
                                    <span class="tip tip-new">New</span>
                                </a>
                            </li>
                            <li>
                                <a href="category.html">3 Columns Products</a>
                            </li>
                            <li>
                                <a href="category-4col.html">4 Columns Products</a>
                            </li>
                            <li>
                                <a href="category-5col.html">5 Columns Products</a>
                            </li>
                            <li>
                                <a href="category-6col.html">6 Columns Products</a>
                            </li>
                            <li>
                                <a href="category-7col.html">7 Columns Products</a>
                            </li>
                            <li>
                                <a href="category-8col.html">8 Columns Products</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="product.html">Products</a>
                        <ul>
                            <li>
                                <a href="#" class="nolink">PRODUCT PAGES</a>
                                <ul>
                                    <li>
                                        <a href="product.html">SIMPLE PRODUCT</a>
                                    </li>
                                    <li>
                                        <a href="product-variable.html">VARIABLE PRODUCT</a>
                                    </li>
                                    <li>
                                        <a href="product.html">SALE PRODUCT</a>
                                    </li>
                                    <li>
                                        <a href="product.html">FEATURED & ON SALE</a>
                                    </li>
                                    <li>
                                        <a href="product-sticky-info.html">WIDTH CUSTOM TAB</a>
                                    </li>
                                    <li>
                                        <a href="product-sidebar-left.html">WITH LEFT SIDEBAR</a>
                                    </li>
                                    <li>
                                        <a href="product-sidebar-right.html">WITH RIGHT SIDEBAR</a>
                                    </li>
                                    <li>
                                        <a href="product-addcart-sticky.html">ADD CART STICKY</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#" class="nolink">PRODUCT LAYOUTS</a>
                                <ul>
                                    <li>
                                        <a href="product-extended-layout.html">EXTENDED LAYOUT</a>
                                    </li>
                                    <li>
                                        <a href="product-grid-layout.html">GRID IMAGE</a>
                                    </li>
                                    <li>
                                        <a href="product-full-width.html">FULL WIDTH LAYOUT</a>
                                    </li>
                                    <li>
                                        <a href="product-sticky-info.html">STICKY INFO</a>
                                    </li>
                                    <li>
                                        <a href="product-sticky-both.html">LEFT & RIGHT STICKY</a>
                                    </li>
                                    <li>
                                        <a href="product-transparent-image.html">TRANSPARENT IMAGE</a>
                                    </li>
                                    <li>
                                        <a href="product-center-vertical.html">CENTER VERTICAL</a>
                                    </li>
                                    <li>
                                        <a href="#">BUILD YOUR OWN</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Pages
                            <span class="tip tip-hot">Hot!</span>
                        </a>
                        <ul>
                            <li>
                                <a href="wishlist.html">Wishlist</a>
                            </li>
                            <li>
                                <a href="cart.html">Shopping Cart</a>
                            </li>
                            <li>
                                <a href="checkout.html">Checkout</a>
                            </li>
                            <li>
                                <a href="dashboard.html">Dashboard</a>
                            </li>
                            <li>
                                <a href="login.html">Login</a>
                            </li>
                            <li>
                                <a href="forgot-password.html">Forgot Password</a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="blog.html">Blog</a></li>
                    <li>
                        <a href="#">Elements</a>
                        <ul class="custom-scrollbar">
                            <li><a href="element-accordions.html">Accordion</a></li>
                            <li><a href="element-alerts.html">Alerts</a></li>
                            <li><a href="element-animations.html">Animations</a></li>
                            <li><a href="element-banners.html">Banners</a></li>
                            <li><a href="element-buttons.html">Buttons</a></li>
                            <li><a href="element-call-to-action.html">Call to Action</a></li>
                            <li><a href="element-countdown.html">Count Down</a></li>
                            <li><a href="element-counters.html">Counters</a></li>
                            <li><a href="element-headings.html">Headings</a></li>
                            <li><a href="element-icons.html">Icons</a></li>
                            <li><a href="element-info-box.html">Info box</a></li>
                            <li><a href="element-posts.html">Posts</a></li>
                            <li><a href="element-products.html">Products</a></li>
                            <li><a href="element-product-categories.html">Product Categories</a></li>
                            <li><a href="element-tabs.html">Tabs</a></li>
                            <li><a href="element-testimonial.html">Testimonials</a></li>
                        </ul>
                    </li>
                </ul>

                <ul class="mobile-menu mt-2 mb-2">
                    <li class="border-0">
                        <a href="#">
                            Special Offer!
                        </a>
                    </li>
                    <li class="border-0">
                        <a href="#" target="_blank">
                            Buy Porto!
                            <span class="tip tip-hot">Hot</span>
                        </a>
                    </li>
                </ul>

                <ul class="mobile-menu">
                    <li>
                        <a href="login.html">My Account</a>
                    </li>
                    <li>
                        <a href="contact.html">Contact Us</a>
                    </li>
                    <li>
                        <a href="blog.html">Blog</a>
                    </li>
                    <li>
                        <a href="wishlist.html">My Wishlist</a>
                    </li>
                    <li>
                        <a href="cart.html">Cart</a>
                    </li>
                    <li>
                        <a href="login.html" class="login-link">Log In</a>
                    </li>
                </ul>
            </nav>
            <!-- End .mobile-nav -->

            <form class="search-wrapper mb-2" action="#">
                <input type="text" class="form-control mb-0" placeholder="Search..." required />
                <button class="btn icon-search text-white bg-transparent p-0" type="submit"></button>
            </form>

            <div class="social-icons">
                <a href="#" class="social-icon social-facebook icon-facebook" target="_blank">
                </a>
                <a href="#" class="social-icon social-twitter icon-twitter" target="_blank">
                </a>
                <a href="#" class="social-icon social-instagram icon-instagram" target="_blank">
                </a>
            </div>
        </div>
        <!-- End .mobile-menu-wrapper -->
    </div>
    <!-- End .mobile-menu-container -->

    <div class="sticky-navbar">
        <div class="sticky-info">
            <a href="demo4.html">
                <i class="icon-home"></i>Home
            </a>
        </div>
        <div class="sticky-info">
            <a href="category.html" class="">
                <i class="icon-bars"></i>Categories
            </a>
        </div>
        <div class="sticky-info">
            <a href="wishlist.html" class="">
                <i class="icon-wishlist-2"></i>Wishlist
            </a>
        </div>
        <div class="sticky-info">
            <a href="login.html" class="">
                <i class="icon-user-2"></i>Account
            </a>
        </div>
        <div class="sticky-info">
            <a href="cart.html" class="">
                <i class="icon-shopping-cart position-relative">
                    <span class="cart-count badge-circle">3</span>
                </i>Cart
            </a>
        </div>
    </div>



    <a id="scroll-top" href="#top" title="Top" role="button">
        <i class="icon-angle-up"></i>
    </a>

    <!-- Plugins JS File -->
    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/plugins.min.js"></script>
    <script src="assets/js/nouislider.min.js"></script>

    <!-- Main JS File -->
    <script src="assets/js/main.min.js"></script>
    <script>
        (function() {
            var js = "window['__CF$cv$params']={r:'82caeb13cb185ce5',t:'MTcwMTA5Mzg0OC42MDQwMDA='};_cpo=document.createElement('script');_cpo.nonce='',_cpo.src='../../cdn-cgi/challenge-platform/h/g/scripts/jsd/9914b343/main.js',document.getElementsByTagName('head')[0].appendChild(_cpo);";
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


<!-- Mirrored from portotheme.com/html/porto_ecommerce/category-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Nov 2023 14:10:27 GMT -->

</html>