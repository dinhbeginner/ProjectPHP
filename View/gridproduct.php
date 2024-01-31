<?php

// include_once "model/banner_danhmuc.php";

?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from portotheme.com/html/porto_ecommerce/category-horizontal-filter1.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Nov 2023 14:10:22 GMT -->

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



        <!-- End .header -->

        <main class="main">
            <div class="category-banner-container bg-gray">
                <div class="category-banner banner text-uppercase" style="background: no-repeat 60%/cover url('assets/images/banners/banner-top.jpg');">
                    <div class="container position-relative">
                        <div class="row">
                            <div class="pl-lg-5 pb-5 pb-md-0 col-md-5 col-xl-4 col-lg-4 offset-1">
                                <h3>Electronic<br>Deals</h3>
                                <a href="category.html" class="btn btn-dark">Get Yours!</a>
                            </div>
                            <div class="pl-lg-3 col-md-4 offset-md-0 offset-1 pt-3">
                                <div class="coupon-sale-content">
                                    <h4 class="m-b-1 coupon-sale-text bg-white text-transform-none">Exclusive COUPON
                                    </h4>
                                    <h5 class="mb-2 coupon-sale-text d-block ls-10 p-0"><i class="ls-0">UP TO</i><b class="text-dark">$100</b> OFF</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <nav aria-label="breadcrumb" class="breadcrumb-nav">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php?action=product"><i class="icon-home"></i></a></li>
                        <li class="breadcrumb-item"><a href="#"><?php echo $_GET['act'] ?></a></li>
                        <!-- <li class="breadcrumb-item active" aria-current="page">Accessories</li> -->
                    </ol>
                </nav>

                <nav class="toolbox sticky-header horizontal-filter mb-1" data-sticky-options="{'mobile': true}">
                    <div class="toolbox-left">
                        <a href="#" class="sidebar-toggle"><svg data-name="Layer 3" id="Layer_3" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
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

                        <div class="toolbox-item filter-toggle d-none d-lg-flex">
                            <span>Filters:</span>
                            <a href=#>&nbsp;</a>
                        </div>
                    </div>
                    <!-- End .toolbox-left -->

                    <div class="toolbox-item toolbox-sort ml-lg-auto">
                       
                        <!-- Assuming this code is in your HTML file (e.g., index.php) -->

                        <form action="index.php?action=gridproduct&act=orderby" method="post" id="sortingForm">
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

                  
                    <!-- End .toolbox-item -->
                    <?php
                    if (!isset($_GET['action']) || $_GET['action'] !== 'product_danhmuc') {
                    ?>
                        <div class="toolbox-item layout-modes">
                            <a href="index.php?action=gridproduct&act=gridproduct" class="layout-btn btn-grid active" title="Grid">
                                <i class="fa fa-th"></i>
                            </a>
                            <a href="index.php?action=listproduct" class="layout-btn" title="List">
                                <i class="fa fa-list-ul"></i>
                            </a>
                        </div>
                    <?php

                       
                    }
                    ?>

                    <!-- End .layout-modes -->
                </nav>
                <?php

                $allsp = new product;
                $count = $allsp->getAllproduct()->rowCount();

                $limit = 12;
                $trang = new page();
                $page = $trang->findPage($count, $limit);
                $start = $trang->findStart($limit);


                ?>
                <div class="row main-content-wrap">
                    <div class="col-lg-9 main-content">

                        <div class="row">
                            <?php
                            if (isset($_GET['action']) && $_GET['action'] == 'product_danhmuc' && isset($_GET['id_menu']) && !empty($_GET['id_menu'])) {
                                $result = $allsp->getProductMenu($_GET['id_menu'], $start, $limit);
                               
                            } elseif (isset($_GET['id_danhmuc']) && $_GET['id_danhmuc'] == 3) {
                                $result = $allsp->getProductSale($start, $limit);
                               
                            } elseif (isset($_GET['id_menu'])) {
                                $result = $allsp->getProductMenu($_GET['id_menu'], $start, $limit);
                               
                            } elseif (isset($_GET['act']) && $_GET['act'] == 'timkiem') {
                                if ($_POST['search']) {
                                    $tk = $_POST['search'];
                                    $result = $allsp->timKiemmTenSP($tk);
                                    $count = $result->rowCount();
                                    // var_dump($count);
                                }
                            } elseif (isset($_GET['act']) && $_GET['act'] == 'orderby') {
                                if ($_POST['orderby']) {
                                    $tk = $_POST['orderby'];
                                    $result = $allsp->orderby($tk);
                                   $count=0;
                                  
                                    // var_dump($count);
                                }
                            } else {
                                $result = $allsp->getAllProductTrang1($start, $limit);
                                $count = $result->rowCount();
                            }

                            while ($set = $result->fetch()) {
                            ?>
                                <div class="col-6 col-sm-4 col-md-3">
                                    <div class="product-default">
                                        <figure>
                                            <a href="index.php?action=detailproduct&id_detail=<?= $set['product_id'] ?>&id_menu=<?= $set['id_menu'] ?>">
                                                <img src="assets/images/products/<?= $set['product_img'] ?>" width="280" height="280" alt="product" />
                                                <img src="assets/images/products/<?= $set['product_img2'] ?>" width="280" height="280" alt="product" />
                                            </a>
                                            <?php if ($set['product_price'] != "") : ?>
                                                <div class="label-group">
                                                    <div class="product-label label-hot">HOT</div>
                                                    <div class="product-label label-sale">-20%</div>
                                                </div>
                                            <?php endif ?>
                                        </figure>

                                        <div class="product-details">
                                            <div class="category-wrap">
                                                <div class="category-list">
                                                    <a href="index.php?action=detailproduct&id_detail=<?= $set['product_id'] ?>&id_menu=<?= $set['id_menu'] ?>" class="product-category">Product</a>
                                                </div>
                                            </div>
                                            <h3 class="product-title">
                                                <a href="index.php?action=detailproduct&id_detail=<?= $set['product_id'] ?>&id_menu=<?= $set['id_menu'] ?>">
                                                    <?= $set['product_name'] ?>
                                                </a>
                                            </h3>

                                            <div class="ratings-container">
                                                <div class="product-ratings">
                                                    <span class="ratings " style="width:100%;color:yellow"></span>
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                            </div>


                                            <div class="price-box">
                                                <span class="old-price"><?= $set['product_price'] ?></span>
                                                <span class="product-price"><?= $set['product_price_new'] ?></span>
                                            </div>

                                            <div class="product-action">
                                                <a href="wishlist.html" class="btn-icon-wish" title="wishlist"><i class="icon-heart"></i></a>
                                                <a href="index.php?action=detailproduct&id_detail=<?= $set['product_id'] ?>&id_menu=<?= $set['id_menu'] ?>" class="btn-icon btn-add-cart"><i class="fa fa-arrow-right"></i><span>Xem chi tiết</span></a>
                                                <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View"><i class="fas fa-external-link-alt"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php
                            }
                            ?>
                        </div>
                        <!-- End .row -->

                        <nav class="toolbox toolbox-pagination">
                            <div class="toolbox-item toolbox-show">
                                <!-- <label>Show:</label>

                                <div class="select-custom">
                                    <select name="count" class="form-control">
                                        <a href="index.php?show=6">
                                            <option value="6">6</option>
                                        </a>
                                        <option value="24">24</option>
                                        <option value="36">36</option>
                                    </select>
                                </div> -->
                            </div>
                            <!-- End .select-custom -->

                            <!-- End .toolbox-item -->

                            <?php
                            if ($count > 8) {
                            ?>
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
                            <?php } ?>

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

                                                        <a href="index.php?action=product_danhmuc&id_menu=<?= $sets['id_menu']; ?>&act=<?= $sets['ten_menu']; ?>">
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

                          
                            <!-- End .widget -->

                           
                            <!-- End .widget -->

                           
                            <!-- End .widget -->

                            <div class="widget widget-featured">
                                <h3 class="widget-title">Featured</h3>

                                <div class="widget-body">
                                    <div class="owl-carousel widget-featured-products">
                                        <?php
                                        $featured = $allsp->getAllproduct();
                                        while ($row = $featured->fetch()) {
                                        ?>
                                            <div class="featured-col">
                                                <?php
                                                for ($i = 0; $i < 3; $i++) {
                                                    // Fetch a new row for each iteration
                                                    $innerRow = $featured->fetch();
                                                    if ($innerRow) {
                                                ?>
                                                        <div class="product-default left-details product-widget">
                                                            <figure>
                                                                <a href="index.php?action=detailproduct&id_detail=<?= $innerRow['product_id']; ?>&id_menu=<?= $innerRow['id_menu'] ?>">
                                                                    <img src="assets/images/products/<?php echo $innerRow['product_img'] ?>" width="75" height="75" alt="product" />
                                                                    <img src="assets/images/products/<?php echo $innerRow['product_img2'] ?>" width="75" height="75" alt="product" />
                                                                </a>
                                                            </figure>
                                                            <div class="product-details">
                                                                <h3 class="product-title"> <a href="product.html"><?php echo $innerRow['product_name'] ?></a> </h3>
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
                                                                    <span class="product-price"><?php echo $innerRow['product_price_new'] ?></span>
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
                                            <!-- End .featured-col -->
                                        <?php } ?>

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


    <!-- End .mobile-menu-container -->





    <a id="scroll-top" href="#top" title="Top" role="button"><i class="icon-angle-up"></i></a>

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
            var js = "window['__CF$cv$params']={r:'82caeaf1fbc25f7b',t:'MTcwMTA5Mzg0Mi4wNTQwMDA='};_cpo=document.createElement('script');_cpo.nonce='',_cpo.src='../../cdn-cgi/challenge-platform/h/g/scripts/jsd/9914b343/main.js',document.getElementsByTagName('head')[0].appendChild(_cpo);";
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


<!-- Mirrored from portotheme.com/html/porto_ecommerce/category-horizontal-filter1.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Nov 2023 14:10:23 GMT -->

</html>