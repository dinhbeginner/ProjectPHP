<?php
function getImgMenu()
{
    $db = new connect();
    $select = "SELECT imag_danhmuc_ FROM tbl_menu  LIMIT 6 ";
    $result = $db->getList($select);
    return $result;
}
?>
<!DOCTYPE html>

<html lang="en">


<!-- Mirrored from portotheme.com/html/porto_ecommerce/demo4.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Nov 2023 14:13:22 GMT -->

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
                families: ['Open+Sans:300,400,600,700,800', 'Poppins:300,400,500,600,700,800', 'Oswald:300,400,500,600,700,800']
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
    <link rel="stylesheet" href="assets/css/demo4.min.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/fontawesome-free/css/all.min.css">
</head>
<style>
    .product-default .btn-icon-wish {
        display: inline-block;
        position: absolute;
        top: 0;
        margin: -19px -7px 15px;
        width: 52px;
        height: 57px;
        font-size: 1.6rem;
        text-align: center;
        opacity: 0;
        transition: all 0.25s ease;
    }
</style>

<body>
    <div class="page-wrapper">

        <!-- End .top-notice -->


        <!-- End .header -->

        <main class="main">
            <div class="home-slider slide-animate owl-carousel owl-theme show-nav-hover nav-big mb-2 text-uppercase" data-owl-options="{
				'loop': false
			}">
                <div class="home-slide home-slide1 banner">
                    <img class="slide-bg" src="assets/images/demoes/slider/slide-1.jpg" width="1903" height="499" alt="slider image">
                    <div class="container d-flex align-items-center">
                        <div class="banner-layer appear-animate" data-animation-name="fadeInUpShorter">
                            <h4 class="text-transform-none m-b-3">Find the Boundaries. Push Through!</h4>
                            <h2 class="text-transform-none mb-0">Summer Sale</h2>
                            <h3 class="m-b-3">70% Off</h3>
                            <h5 class="d-inline-block mb-0">
                                <span>Starting At</span>
                                <b class="coupon-sale-text text-white bg-secondary align-middle"><sup>$</sup><em class="align-text-top">199</em><sup>99</sup></b>
                            </h5>
                            <a href="index.php?action=gridproduct&act" class="btn btn-dark btn-lg">Shop Now!</a>
                        </div>
                        <!-- End .banner-layer -->
                    </div>
                </div>
                <!-- End .home-slide -->

                <div class="home-slide home-slide2 banner banner-md-vw">
                    <img class="slide-bg" style="background-color: #ccc;" width="1903" height="499" src="assets/images/demoes/slider/slide-2.jpg" alt="slider image">
                    <div class="container d-flex align-items-center">
                        <div class="banner-layer d-flex justify-content-center appear-animate" data-animation-name="fadeInUpShorter">
                            <div class="mx-auto">
                                <h4 class="m-b-1">Extra</h4>
                                <h3 class="m-b-2">20% off</h3>
                                <h3 class="mb-2 heading-border">Accessories</h3>
                                <h2 class="text-transform-none m-b-4">Summer Sale</h2>
                                <a href="index.php?action=gridproduct&act" class="btn btn-block btn-dark">Shop All Sale</a>
                            </div>
                        </div>
                        <!-- End .banner-layer -->
                    </div>
                </div>
                <!-- End .home-slide -->
            </div>
            <!-- End .home-slider -->

            <div class="container">
                <div class="info-boxes-slider owl-carousel owl-theme mb-2" data-owl-options="{
					'dots': false,
					'loop': false,
					'responsive': {
						'576': {
							'items': 2
						},
						'992': {
							'items': 3
						}
					}
				}">
                    <div class="info-box info-box-icon-left">
                        <i class="icon-shipping"></i>

                        <div class="info-box-content">
                            <h4>FREE SHIPPING &amp; RETURN</h4>
                            <p class="text-body">Free shipping on all orders over $99.</p>
                        </div>
                        <!-- End .info-box-content -->
                    </div>
                    <!-- End .info-box -->

                    <div class="info-box info-box-icon-left">
                        <i class="icon-money"></i>

                        <div class="info-box-content">
                            <h4>MONEY BACK GUARANTEE</h4>
                            <p class="text-body">100% money back guarantee</p>
                        </div>
                        <!-- End .info-box-content -->
                    </div>
                    <!-- End .info-box -->

                    <div class="info-box info-box-icon-left">
                        <i class="icon-support"></i>

                        <div class="info-box-content">
                            <h4>ONLINE SUPPORT 24/7</h4>
                            <p class="text-body">Lorem ipsum dolor sit amet.</p>
                        </div>
                        <!-- End .info-box-content -->
                    </div>
                    <!-- End .info-box -->
                </div>
                <!-- End .info-boxes-slider -->

                <div class="banners-container mb-2">
                    <div class="banners-slider owl-carousel owl-theme" data-owl-options="{
						'dots': false
					}">


                        <?php
                        $bannerDanhMuc = new danhmuc();
                        $results = $bannerDanhMuc->getBannerWatch();
                        $hh = new menu;
                        $result = $hh->getMenu('2')->fetch();
                        while ($row = $results->fetch()) {
                        ?>
                            <div class="banner banner1 banner-sm-vw d-flex align-items-center appear-animate" style="background-color: #ccc;" data-animation-name="fadeInLeftShorter" data-animation-delay="500">
                                <figure class="w-100">
                                    <img src="assets/images/demoes/banners/<?php echo $row['img']; ?>" alt="banner" width="380" height="175" />
                                </figure>
                                <div class="banner-layer">
                                    <h3 class="m-b-2">Porto Watches</h3>
                                    <h4 class="m-b-3 text-primary"><sup class="text-dark"><del>20%</del></sup>30%<sup>OFF</sup></h4>
                                    <a href="index.php?action=product_danhmuc&id_menu=<?= $result['id_menu']; ?>&act=<?= $result['ten_menu']; ?>" class="btn btn-sm btn-dark">Shop Now</a>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                        <!-- End .banner -->

                        <div class="banner banner2 banner-sm-vw text-uppercase d-flex align-items-center appear-animate" data-animation-name="fadeInUpShorter" data-animation-delay="200">
                            <figure class="w-100">
                                <img src="assets/images/demoes/banners/banner-2.jpg" style="background-color: #ccc;" alt="banner" width="380" height="175" />
                            </figure>
                            <div class="banner-layer text-center">
                                <div class="row align-items-lg-center">
                                    <div class="col-lg-7 text-lg-right">
                                        <h3>Deal Promos</h3>
                                        <h4 class="pb-4 pb-lg-0 mb-0 text-body">Starting at $99</h4>
                                    </div>
                                    <div class="col-lg-5 text-lg-left px-0 px-xl-3">
                                        <a href="index.php?action=gridproduct&act" class="btn btn-sm btn-dark">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End .banner -->
                        <?php
                        $bannerDanhMuc = new danhmuc();
                        $results = $bannerDanhMuc->getBannerBag();
                        $hh = new menu;
                        $result = $hh->getMenu('2')->fetch();
                        while ($row = $results->fetch()) {
                        ?>
                            <div class="banner banner3 banner-sm-vw d-flex align-items-center appear-animate" style="background-color: #ccc;" data-animation-name="fadeInRightShorter" data-animation-delay="500">
                                <figure class="w-100">
                                    <img src="assets/images/demoes/banners/banner-3.jpg" alt="banner" width="380" height="175" />
                                </figure>
                                <div class="banner-layer text-right">
                                    <h3 class="m-b-2">Handbags</h3>
                                    <h4 class="m-b-2 text-secondary text-uppercase">Starting at $99</h4>
                                    <a href="index.php?action=product_danhmuc&id_menu=6&act=BAGS" class="btn btn-sm btn-dark">Shop Now</a>
                                </div>
                            </div>
                        <?php
                        } ?>
                        <!-- End .banner -->
                    </div>
                </div>
            </div>
            <!-- End .container -->

            <section class="featured-products-section">
                <div class="container">
                    <h2 class="section-title heading-border ls-20 border-0">Sản Phẩm Khuyến Mãi</h2>

                    <div class="products-slider custom-products owl-carousel owl-theme nav-outer show-nav-hover nav-image-center" data-owl-options="{
						'dots': false,
						'nav': true
					}">

                        <?php
                        $hh = new product();
                        $results = $hh->getproductDiscount();
                        while ($set = $results->fetch()) {
                        ?>
                            <div class="product-default appear-animate" data-animation-name="fadeInRightShorter">

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
                                        <form id="wishlistForm" action="index.php?action=wishlist&act=wishlist_action" method="post">
                                            <div class="product-action">
                                                <input type="hidden" name="id" value="<?php echo $set['product_id'] ?>">
                                                <input type="hidden" name="img" value="<?php echo $set['product_img'] ?>">
                                                <input type="hidden" name="name" value="<?php echo $set['product_name'] ?>">
                                                <input type="hidden" name="price" value="<?php echo $set['product_price_new'] ?>">

                                                <!-- Add to Wishlist Button with Dialog -->
                                                <!-- <a href="#" class="btn-icon-wish add-wishlist " style=" 

   
   margin: -15px -7px 2px;
    width: 52px;
    height: 50px;
    background-color: white;
    
    " title="Add to Wishlist" onclick="showWishlistDialog();">
                                                    <input style="border:0px solid;cursor: pointer;" class="icon-wishlist-2" type="submit" name="like" value="">


                                                </a> -->
                                                <a href="" style="background-color: white;" class="btn-icon-wish" title="wishlist"><input style="background-color: white;border:0px solid;margin-top: 17px;" type="submit" value="❤️" name="like" class="heart-button" placeholder="❤️"></input></a>
                                                <input type="hidden" name="id_menu" value="<?= $set['id_menu'] ?>">
                                                <!-- View Details Button -->
                                                <a href="index.php?action=detailproduct&id_detail=<?= $set['product_id']; ?>&id_menu=<?= $set['id_menu'] ?>" class="btn-icon btn-add-cart">
                                                    <i class="fa fa-arrow-right"></i>
                                                    <span>Xem Chi Tiết</span>
                                                </a>
                                            </div>
                                        </form>

                                        <!-- JavaScript to handle the Wishlist Dialog -->
                                        <script>
                                            function showWishlistDialog() {
                                                // You can implement your dialog here, for example, using a modal library or custom JavaScript code
                                                alert("Click thêm 1 lần nữa để thêm Product vào Wishlist ");
                                            }
                                        </script>



                                        <!-- <a href="" class="btn-quickview" title="Quick View"><i class="fas fa-external-link-alt"></i></a> -->
                                    </div>

                                </div>


                                <!-- End .product-details -->

                                <!-- <input type="hidden" value="" name="status"> -->
                            </div>


                        <?php

                        }
                        ?>

                    </div>

                    <!-- End .featured-proucts -->
                </div>
            </section>

            <section class="new-products-section">
                <div class="container">
                    <h2 class="section-title heading-border ls-20 border-0">Sản Phẩm Mới</h2>

                    <div class="products-slider custom-products owl-carousel owl-theme nav-outer show-nav-hover nav-image-center mb-2" data-owl-options="{
						'dots': false,
						'nav': true,
						'responsive': {
							'992': {
								'items': 4
							},
							'1200': {
								'items': 5
							}
						}
					}">
                        <?php

                        $results = $hh->getproductNew();
                        while ($set = $results->fetch()) {
                        ?>
                            <div class="product-default appear-animate" data-animation-name="fadeInRightShorter">
                                <figure>
                                    <a href="index.php?action=detailproduct&id_detail=<?= $set['product_id']; ?>&id_menu=<?= $set['id_menu'] ?>">
                                        <img src="assets/images/products/<?php echo $set['product_img'] ?>" width="220" height="220" alt="product">
                                        <img src="assets/images/products/<?php echo $set['product_img2'] ?>" width="220" height="220" alt="product">
                                    </a>
                                    <div class="label-group">
                                        <div class="product-label label-hot">HOT</div>
                                    </div>
                                </figure>
                                <div class="product-details">
                                    <div class="category-list">
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
                                        <del class="old-price"><?php echo $set['product_price'] ?></del>
                                        <span class="product-price"><?php echo $set['product_price_new'] ?></span>
                                    </div>
                                    <!-- End .price-box -->

                                    <form id="wishlistForm" action="index.php?action=wishlist&act=wishlist_action" method="post">
                                        <div class="product-action">
                                            <input type="hidden" name="id" value="<?php echo $set['product_id'] ?>">
                                            <input type="hidden" name="img" value="<?php echo $set['product_img'] ?>">
                                            <input type="hidden" name="name" value="<?php echo $set['product_name'] ?>">
                                            <input type="hidden" name="price" value="<?php echo $set['product_price_new'] ?>">

                                            <a href="" style="background-color: white;" class="btn-icon-wish" title="wishlist"><input style="background-color: white;border:0px solid;margin-top: 17px;" type="submit" value="❤️" name="like" class="heart-button" placeholder="❤️"></input></a>
                                            <input type="hidden" name="id_menu" value="<?= $set['id_menu'] ?>">
                                            <a href="index.php?action=detailproduct&id_detail=<?= $set['product_id']; ?>&id_menu=<?= $set['id_menu'] ?>" class="btn-icon btn-add-cart product-type-simple"><i class="icon-shopping-cart"></i><span>Xem chi tiết </span></a>

                                    </form>
                                </div>
                            </div>
                            <!-- End .product-details -->
                    </div>
                <?php
                        }
                ?>

                </div>
                <!-- End .featured-proucts -->

                <div class="banner banner-big-sale appear-animate" data-animation-delay="200" data-animation-name="fadeInUpShorter" style="background: #2A95CB center/cover url('assets/images/demoes/demo4/banners/banner-4.jpg');">
                    <div class="banner-content row align-items-center mx-0">
                        <div class="col-md-9 col-sm-8">
                            <h2 class="text-white text-uppercase text-center text-sm-left ls-n-20 mb-md-0 px-4">
                                <b class="d-inline-block mr-3 mb-1 mb-md-0">Big Sale</b> All new fashion brands
                                items up to 70% off
                                <small class="text-transform-none align-middle">Online Purchases Only</small>
                            </h2>
                        </div>
                        <div class="col-md-3 col-sm-4 text-center text-sm-right">
                            <a class="btn btn-light btn-white btn-lg" href="index.php?act=sales&id_danhmuc=3&action=sales">View Sale</a>
                        </div>
                    </div>
                </div>

                <h2 class="section-title categories-section-title heading-border border-0 ls-0 appear-animate" data-animation-delay="100" data-animation-name="fadeInUpShorter">Danh Mục Sản Phẩm

                </h2>
                <?php

                ?>
                <div class="categories-slider owl-carousel owl-theme show-nav-hover nav-outer">


                    <?php
                    $bannermenu = new menu();
                    $results = $bannermenu->getImgMenu();
                    $i = 0;
                    function getProductCount($product_id)
                    {
                        $db = new connect();
                        $select = "SELECT * FROM tbl_product WHERE id_menu='$product_id'";
                        $result = $db->getList($select);
                        return $result->rowCount();
                    }

                    while ($row = $results->fetch()) {
                        // var_dump($row)

                        $i++;
                        $productCount = getProductCount($i);
                    ?>


                        <div class="product-category appear-animate" data-animation-name="fadeInUpShorter">
                            <a href="index.php?action=product_danhmuc&id_menu=<?php echo $row['id_menu']; ?>&act=<?php echo $row['ten_menu']; ?>">

                                <figure>
                                    <img src="assets/images/demoes/products/<?php echo $row['imag_danhmuc_']; ?>" alt="" width="280" height="240" />
                                </figure>
                                <div class="category-content">
                                    <h3><?php echo $row['ten_menu']; ?></h3>

                                    <span><mark class="count"><?php echo $productCount ?></mark> products</span>
                                </div>
                            </a>
                        </div>


                    <?php
                    }
                    ?>


                </div>
    </div>
    </section>

    <section class="feature-boxes-container">
        <div class="container appear-animate" data-animation-name="fadeInUpShorter">
            <div class="row">
                <div class="col-md-4">
                    <div class="feature-box px-sm-5 feature-box-simple text-center">
                        <div class="feature-box-icon">
                            <i class="icon-earphones-alt"></i>
                        </div>

                        <div class="feature-box-content p-0">
                            <h3>Customer Support</h3>
                            <h5>You Won't Be Alone</h5>

                            <p>We really care about you and your website as much as you do. Purchasing Porto or
                                any other theme from us you get 100% free support.</p>
                        </div>
                        <!-- End .feature-box-content -->
                    </div>
                    <!-- End .feature-box -->
                </div>
                <!-- End .col-md-4 -->

                <div class="col-md-4">
                    <div class="feature-box px-sm-5 feature-box-simple text-center">
                        <div class="feature-box-icon">
                            <i class="icon-credit-card"></i>
                        </div>

                        <div class="feature-box-content p-0">
                            <h3>Fully Customizable</h3>
                            <h5>Tons Of Options</h5>

                            <p>With Porto you can customize the layout, colors and styles within only a few
                                minutes. Start creating an amazing website right now!</p>
                        </div>
                        <!-- End .feature-box-content -->
                    </div>
                    <!-- End .feature-box -->
                </div>
                <!-- End .col-md-4 -->

                <div class="col-md-4">
                    <div class="feature-box px-sm-5 feature-box-simple text-center">
                        <div class="feature-box-icon">
                            <i class="icon-action-undo"></i>
                        </div>
                        <div class="feature-box-content p-0">
                            <h3>Powerful Admin</h3>
                            <h5>Made To Help You</h5>

                            <p>Porto has very powerful admin features to help customer to build their own shop
                                in minutes without any special skills in web development.</p>
                        </div>
                        <!-- End .feature-box-content -->
                    </div>
                    <!-- End .feature-box -->
                </div>
                <!-- End .col-md-4 -->
            </div>
            <!-- End .row -->
        </div>
        <!-- End .container-->
    </section>
    <!-- End .feature-boxes-container -->

    <section class="promo-section bg-dark" data-parallax="{'speed': 2, 'enableOnMobile': true}" data-image-src="assets/images/demoes/demo4/banners/banner-5.jpg">
        <div class="promo-banner banner container text-uppercase">
            <div class="banner-content row align-items-center text-center">
                <div class="col-md-4 ml-xl-auto text-md-right appear-animate" data-animation-name="fadeInRightShorter" data-animation-delay="600">
                    <h2 class="mb-md-0 text-white">Top Fashion<br>Deals</h2>
                </div>
                <div class="col-md-4 col-xl-3 pb-4 pb-md-0 appear-animate" data-animation-name="fadeIn" data-animation-delay="300">
                    <a href="index.php?act=sales&id_danhmuc=3&action=sales" class="btn btn-dark btn-black ls-10">View Sale</a>
                </div>
                <div class="col-md-4 mr-xl-auto text-md-left appear-animate" data-animation-name="fadeInLeftShorter" data-animation-delay="600">
                    <h4 class="mb-1 mt-1 font1 coupon-sale-text p-0 d-block ls-n-10 text-transform-none">
                        <b>Exclusive
                            COUPON</b>
                    </h4>
                    <h5 class="mb-1 coupon-sale-text text-white ls-10 p-0"><i class="ls-0">UP TO</i><b class="text-white bg-secondary ls-n-10">$100</b> OFF</h5>
                </div>
            </div>
        </div>
    </section>

    <section class="blog-section pb-0">
        <div class="container">
            <h2 class="section-title heading-border border-0 appear-animate" data-animation-name="fadeInUp">
                Latest News</h2>

            <div class="owl-carousel owl-theme appear-animate" data-animation-name="fadeIn" data-owl-options="{
						'loop': false,
						'margin': 20,
						'autoHeight': true,
						'autoplay': false,
						'dots': false,
						'items': 2,
						'responsive': {
							'0': {
								'items': 1
							},
							'480': {
								'items': 2
							},
							'576': {
								'items': 3
							},
							'768': {
								'items': 4
							}
						}
					}">
                <?php
                $tt = new tintuc;
                $new = $tt->gettintucindex();
                while ($blog = $new->fetch()) {

                ?>
                    <article class="post">
                        <div class="post-media">
                            <a href="index.php?action=news&act=detailnews&id_new=<?php echo $blog['id_new'] ?>">
                                <img src="assets/images/blog/thoitrang/<?php echo $blog['img_new'] ?>" alt="Post" width="225" height="280">
                            </a>
                            <!-- <div class="post-date">
                                        <span class="day">26</span>
                                        <span class="month">Feb</span>
                                    </div> -->
                        </div>
                        <!-- End .post-media -->

                        <div class="post-body">
                            <h2 class="post-title">
                                <a href="index.php?action=news&act=detailnews&id_new=<?php echo $blog['id_new'] ?>"><?php echo $blog['name_new'] ?></a>
                            </h2>
                            <div class="post-content">
                                <p><?php echo substr($blog['content_new'], 0, 100); ?>...</p>

                            </div>
                            <!-- End .post-content -->
                            <a href="single.html" class="post-comment">0 Comments</a>
                        </div>
                        <!-- End .post-body -->
                    </article>
                <?php } ?>
                <!-- End .post -->


                <!-- End .post -->
            </div>

            <hr class="mt-0 m-b-5">

            <div class="brands-slider owl-carousel owl-theme images-center appear-animate" data-animation-name="fadeIn" data-animation-duration="500" data-owl-options="{
					'margin': 0}">
                <img src="assets/images/brands/brand1.png" width="130" height="56" alt="brand">
                <img src="assets/images/brands/brand2.png" width="130" height="56" alt="brand">
                <img src="assets/images/brands/brand3.png" width="130" height="56" alt="brand">
                <img src="assets/images/brands/brand4.png" width="130" height="56" alt="brand">
                <img src="assets/images/brands/brand5.png" width="130" height="56" alt="brand">
                <img src="assets/images/brands/brand6.png" width="130" height="56" alt="brand">
            </div>
            <!-- End .brands-slider -->

            <hr class="mt-4 m-b-5">

            <div class="product-widgets-container row pb-2">
                <?php

                $i = 0;

                // Fetch results outside the loop
                function getLimitproduct()
                {
                    $db = new connect();
                    $select = "SELECT id_menu,product_id, product_name, product_price, product_price_new, product_img, product_img2 FROM tbl_product  LIMIT 12 OFFSET 4 ";
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
                                echo 'BEST SELLING PRODUCTS';
                            } elseif ($i == 3) {
                                echo 'LATEST PRODUCTS';
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
                                            <img src="assets/images/products/<?php echo $row['product_img']; ?>" width="84" height="84" alt="product">
                                            <img src="assets/images/products//<?php echo $row['product_img2']; ?>" width="84" height="84" alt="product">
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
    </section>
    </main>
    <!-- End .main -->




    <!-- End .newsletter-popup -->

    <a id="scroll-top" href="#top" title="Top" role="button"><i class="icon-angle-up"></i></a>

    <!-- Plugins JS File -->
    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/optional/isotope.pkgd.min.js"></script>
    <script src="assets/js/plugins.min.js"></script>
    <script src="assets/js/jquery.appear.min.js"></script>

    <!-- Main JS File -->
    <script src="assets/js/main.min.js"></script>
    <script>
        (function() {
            var js = "window['__CF$cv$params']={r:'82caf05a4aa93fd5',t:'MTcwMTA5NDA2Mi44ODkwMDA='};_cpo=document.createElement('script');_cpo.nonce='',_cpo.src='../../cdn-cgi/challenge-platform/h/g/scripts/jsd/9914b343/main.js',document.getElementsByTagName('head')[0].appendChild(_cpo);";
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


<!-- Mirrored from portotheme.com/html/porto_ecommerce/demo4.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Nov 2023 14:13:44 GMT -->

</html>