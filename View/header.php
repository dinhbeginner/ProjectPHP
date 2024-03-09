<!DOCTYPE html>
<html lang="en">

<?php ?>
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
    h7 {
        font-size: 20px;
        text-shadow: 2px 3px 4px;
        color: #283048;
        font-family: Georgia, 'Times New Roman', Times, serif;
    }
</style>

<body>
    <div class="page-wrapper">
        <div class="top-notice bg-primary text-white">
            <div class="container text-center">
                <h5 class="d-inline-block">Get Up to <b>40% OFF</b> New-Season Styles</h5>
                <a href="category.html" class="category">MEN</a>
                <a href="category.html" class="category ml-2 mr-3">WOMEN</a>
                <small>* Limited time only.</small>
                <button title="Close (Esc)" type="button" class="mfp-close">×</button>
            </div>
            <!-- End .container -->
        </div>
        <!-- End .top-notice -->

        <header class="header">
            <div class="header-top">
                <div class="container">
                    <div class="header-left d-none d-sm-block">
                        <p class="top-message text-uppercase">FREE Returns. Standard Shipping Orders $99+</p>
                    </div>
                    <!-- End .header-left -->

                    <div class="header-right header-dropdowns ml-0 ml-sm-auto w-sm-100">


                        <span class="separator"></span>

                        <div class="social-icons">
                            <a href="https://www.facebook.com/facebook/" class="social-icon social-facebook icon-facebook" target=""></a>
                            <a href="https://twitter.com/" class="social-icon social-twitter icon-twitter" target=""></a>
                            <a href="https://web.telegram.org/" class="social-icon social-instagram icon-instagram" target=""></a>
                        </div>
                        <!-- End .social-icons -->
                    </div>
                    <!-- End .header-right -->
                </div>
                <!-- End .container -->
            </div>
            <!-- End .header-top -->

            <div class="header-middle sticky-header" data-sticky-options="{'mobile': true}">
                <div class="container">
                    <div class="header-left col-lg-2 w-auto pl-0">
                        <button class="mobile-menu-toggler text-primary mr-2" type="button">
                            <i class="fas fa-bars"></i>
                        </button>
                        <a href="demo4.html" class="logo">
                            <img src="assets/images/logo.png" width="111" height="44" alt="Porto Logo">
                        </a>
                    </div>
                    <!-- End .header-left -->

                    <div class="header-right w-lg-max">
                        <div class="header-icon header-search header-search-inline header-search-category w-lg-max text-right mt-0">
                            <a href="#" class="search-toggle" role="button"><i class="icon-search-3"></i></a>
                            <form action="index.php?action=gridproduct&act=timkiem" method="post">
                                <div class="header-search-wrapper">
                                    <input type="search" class="form-control" name="search" id="q" placeholder="Search..." required>

                                    <!-- End .select-custom -->
                                    <button class="btn icon-magnifier p-0" title="search" type="submit"></button>
                                </div>
                                <!-- End .header-search-wrapper -->
                            </form>
                        </div>
                        <!-- End .header-search -->

                        <div class="header-contact d-none d-lg-flex pl-4 pr-4">
                            <img alt="phone" src="assets/images/phone.png" width="30" height="30" class="pb-1">
                            <h6><span>Call us now</span><a href="tel:#" class="text-dark font1">+0396516454</a></h6>
                        </div>

                        <?php
                        // var_dump($_SESSION);
                        if (isset($_SESSION['tenkh'])) : ?>
                            <a href="index.php?action=dashboard" class="header-icon" title="Wellcom <?php echo $_SESSION['tenkh'] ?>"><i class="icon-user-2">
                                    <h7><?php echo $_SESSION['tenkh'] ?></h7>
                                </i></a>

                        <?php else : ?>
                            <!-- If not logged in, show the login link -->
                            <a href="index.php?action=login&act=login" class="header-icon" title="Login">
                                <i class="icon-user-2"></i>
                            </a>
                        <?php endif; 
                        $count=0;
                          if (isset($_SESSION['cart']) && (is_array($_SESSION['cart']))) {
                        
                        for ($i = 0; $i < sizeof($_SESSION['cart']); $i++) {
                            $count++;
                        }
                    }
                        ?>





                        <a href="index.php?action=wishlist" class="header-icon" title="wishlist"><i class="icon-wishlist-2"></i></a>

                        <div class="dropdown cart-dropdown">
                            <a href="index.php?action=cart" title="Cart" class="dropdown-toggle dropdown-arrow cart-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                                <i class="minicart-icon"></i>
                                <span class="cart-count badge-circle"><?php echo  $count?></span>
                            </a>

                            <div class="cart-overlay"></div>

                            <div class="dropdown-menu mobile-cart">
                                <a href="#" title="Close (Esc)" class="btn-close">×</a>

                                <div class="dropdownmenu-wrapper custom-scrollbar">
                                    <div class="dropdown-cart-header">Shopping Cart</div>
                                    <!-- End .dropdown-cart-header -->

                                    <?php
                                    if (isset($_SESSION['cart']) && (is_array($_SESSION['cart']))) {
                                        $totall=0;
                                        for($j = 0; $j < sizeof($_SESSION['cart']); $j++) {
                                            $totall += floatval($_SESSION['cart'][$j][4]) * $_SESSION['cart'][$j][5];
                                        }
                                        for ($i = 0; $i < sizeof($_SESSION['cart']); $i++) {
                                            $link = "index.php?action=cart&act=cart_action&delete=" . $i;
                                           
                                          
                                            $resultFormatted = number_format($totall, 3, '.', '');
                                    ?>
                                            <div class="dropdown-cart-products">
                                                <div class="product">
                                                    <div class="product-details">
                                                        <h4 class="product-title">
                                                            <a href="product.html"><?php echo $_SESSION['cart'][$i][2] ?></a>
                                                        </h4>

                                                        <span class="cart-product-info">
                                                            <span class="cart-product-qty"><?php echo $_SESSION['cart'][$i][5] ?></span> × <?php echo $_SESSION['cart'][$i][4] ?>
                                                        </span>
                                                    </div>
                                                    <!-- End .product-details -->

                                                    <figure class="product-image-container">
                                                        <a href="product.html" class="product-image">
                                                            <img src="assets/images/products/<?php echo $_SESSION['cart'][$i][1] ?>" alt="product" width="80" height="80">
                                                        </a>

                                                        <a href="<?php echo $link ?>" class="btn-remove" title="Remove Product"><span>×</span></a>
                                                    </figure>
                                                </div>
                                                <!-- End .product -->



                                            </div>
                                        <?php


                                        }
                                        if(sizeof($_SESSION['cart'])>0){
                                        ?>

                                        <div class="dropdown-cart-total">
                                            <span>SUBTOTAL:</span>

                                            <span class="cart-total-price float-right"><?php echo $resultFormatted ?></span>
                                        </div>
                                        <!-- End .dropdown-cart-total -->
                                    <?php
}

                                    }
                                    ?>
                                    <script>
                                        
                                        function removeItem(index) {
                                            // Get the item at the specified index from cartData
                                            var removedItem = cartData[index];

                                            // Find the index of the item in the client-side cartData array
                                            var clientIndex = findClientIndex(removedItem[1], removedItem[2]);

                                            // Remove the item from the client-side cartData array
                                            if (clientIndex !== false) {
                                                cartData.splice(clientIndex, 1);

                                                // Update the UI by removing the corresponding HTML element
                                                var productRow = document.getElementById('productRow_' + index);
                                                if (productRow) {
                                                    productRow.remove();
                                                } else {
                                                    console.error('Product row not found for index ' + index);
                                                }

                                                // Update the cart on the server using AJAX
                                                var cartName = encodeURIComponent('<?php echo session_name(); ?>');
                                                var cartId = encodeURIComponent('<?php echo session_id(); ?>');
                                                var removeItemUrl = 'remove_item.php?name=' + encodeURIComponent(removedItem[1]) +
                                                    '&size=' + encodeURIComponent(removedItem[2]);

                                                console.log('Remove Item URL:', removeItemUrl);

                                                var xhr = new XMLHttpRequest();
                                                xhr.onreadystatechange = function() {
                                                    if (xhr.readyState === 4) {
                                                        if (xhr.status === 200) {
                                                            // If the request is successful, you may perform additional actions if needed
                                                            // recalculateTotals();
                                                            console.log('Item removed successfully from the server.');
                                                        } else {
                                                            // Handle the case when the server request fails
                                                            console.error('Failed to update the cart on the server.');
                                                        }
                                                    }
                                                };
                                                xhr.open('GET', removeItemUrl, true);
                                                xhr.send();
                                            } else {
                                                console.error('Item not found in the client-side cartData array.');
                                            }
                                        }
                                    </script>
                                    <div class="dropdown-cart-action">
                                        <a href="index.php?action=cart" class="btn btn-gray btn-block view-cart">View
                                            Cart</a>
                                        <a href="index.php?action=checkout" class="btn btn-dark btn-block">Checkout</a>
                                    </div>
                                    <!-- End .dropdown-cart-total -->
                                </div>
                                <!-- End .dropdownmenu-wrapper -->
                            </div>
                            <!-- End .dropdown-menu -->
                        </div>
                        <!-- End .dropdown -->
                    </div>
                    <!-- End .header-right -->
                </div>
                <!-- End .container -->
            </div>
            <!-- End .header-middle -->

            <div class="header-bottom sticky-header d-none d-lg-block" data-sticky-options="{'mobile': false}">
                <div class="container">
                    <nav class="main-nav w-100">
                        <ul class="menu">

                            <?php
                            $hh = new danhmuc;
                            $results = $hh->getDanhMuc();
                            $menu_con = new menu;

                            if ($results) {
                                while ($set = $results->fetch()) {
                            ?>
                                    <li>
                                        <a href="index.php?act=<?php echo strtolower($set['name_danhmuc']); ?>&id_danhmuc=<?php echo $set['id_danhmuc']; ?>&action=<?php echo strtolower($set['name_danhmuc']); ?>"><?php echo $set['name_danhmuc']; ?></a>
                                        <?php if ($set['id_danhmuc'] == 2) { ?>
                                            <div class="megamenu megamenu-fixed-width widthmenu" style="width:200px">
                                                <?php

                                                $result = $menu_con->getMenu($set['id_danhmuc']);

                                                if ($result) {
                                                ?>
                                                    <a href="index.php?id_danhmuc=2&act" class="nolink">All Product</a>
                                                    <ul class="submenu">
                                                        <?php
                                                        while ($sets = $result->fetch()) {
                                                        ?>
                                                            <li><a href="index.php?action=product_danhmuc&id_menu=<?php echo $sets['id_menu']; ?>&act=<?php echo strtolower($sets['ten_menu']) ?>"><?php echo $sets['ten_menu']; ?></a></li>
                                                        <?php
                                                        }
                                                        ?>
                                                    </ul>
                                                <?php } ?>
                                            </div>
                                        <?php
                                        }
                                        ?>

                                    </li>
                            <?php
                                }
                            }
                            if(isset($_SESSION['makh'])){
                            ?>

                            <li class="float-right"><a href="index.php?action=login&act=logout" rel="noopener" class="pl-5" target="_blank">LOGOUT</a></li>
                            <?php }
                            else{?>
                            <li class="float-right"><a href="index.php?action=login&act=login" class="pl-5">Log in</a></li>
<?php }?>
                        </ul>
                    </nav>
                </div>
                <!-- End .container -->
            </div>
            <!-- End .header-bottom -->
        </header>
        <!-- End .header -->


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
            <span class="mobile-menu-close"><i class="fa fa-times"></i></span>
            <nav class="mobile-nav">
                <ul class="mobile-menu">
                    <?php
                    $hh = new danhmuc;
                    $results = $hh->getDanhMuc();
                    $menu_con = new menu;
                    if ($results) {
                        while ($set = $results->fetch()) {
                    ?>
                            <li>
                                <a href="index.php?act=<?php echo strtolower($set['name_danhmuc']); ?>&id_danhmuc=<?php echo $set['id_danhmuc']; ?>&action=<?php echo strtolower($set['name_danhmuc']); ?>"><?php echo $set['name_danhmuc']; ?></a>
                                <?php if ($set['id_danhmuc'] == 2) { ?>
                                    <div class="megamenu megamenu-fixed-width widthmenu" style="width:200px">
                                        <?php

                                        $result = $menu_con->getMenu($set['id_danhmuc']);

                                        if ($result) {
                                        ?>

                                            <ul class="submenu">
                                                <?php
                                                while ($sets = $result->fetch()) {
                                                ?>
                                                    <li><a href="index.php?action=product_danhmuc&id_menu=<?php echo $sets['id_menu']; ?>&act=<?php echo strtolower($sets['ten_menu']) ?>""><?php echo $sets['ten_menu']; ?></a></li>
                                                <?php
                                                }
                                                ?>
                                            </ul>
                                        <?php } ?>
                                    </div>
                                <?php
                                }
                                ?>

                            </li>
                    <?php
                        }
                    }
                    ?>

                </ul>



                <ul class=" mobile-menu">
                                                    <li><a href="login.html">My Account</a></li>
                                                    <!-- <li><a href="contact.html">Contact Us</a></li>
                    <li><a href="blog.html">Blog</a></li> -->
                                                    <li><a href="wishlist.html">My Wishlist</a></li>
                                                    <li><a href="cart.html">Cart</a></li>
                                                    <li><a href="index.php?action=login" class="">Log In</a></li>
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
            <a href="index.php?act=<?php echo strtolower($set['name_danhmuc']); ?>&id_danhmuc=<?php echo $set['id_danhmuc']; ?>&action=<?php echo strtolower($set['name_danhmuc']); ?>">
                <i class="icon-home"></i>Home
            </a>
        </div>
        <div class="sticky-info">
            <a href="index.php?act=products&id_danhmuc=2&action=products" class="">
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

    <!-- <div class="newsletter-popup mfp-hide bg-img" id="newsletter-popup-form" style="background: #f1f1f1 no-repeat center/cover url(assets/images/newsletter_popup_bg.jpg)">
        <div class="newsletter-popup-content">
            <img src="assets/images/logo.png" width="111" height="44" alt="Logo" class="logo-newsletter">
            <h2>Subscribe to newsletter</h2>

            <p>
                Subscribe to the Porto mailing list to receive updates on new arrivals, special offers and our promotions.
            </p>

            <form action="#">
                <div class="input-group">
                    <input type="email" class="form-control" id="newsletter-email" name="newsletter-email" placeholder="Your email address" required />
                    <input type="submit" class="btn btn-primary" value="Submit" />
                </div>
            </form>
            <div class="newsletter-subscribe">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" value="0" id="show-again" />
                    <label for="show-again" class="custom-control-label">
						Don't show this popup again
					</label>
                </div>
            </div>
        </div> -->
    <!-- End .newsletter-popup-content -->

    <!-- <button title="Close (Esc)" type="button" class="mfp-close">
			×
		</button> -->
    </div>
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