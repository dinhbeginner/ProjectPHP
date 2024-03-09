<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from portotheme.com/html/porto_ecommerce/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Nov 2023 14:07:21 GMT -->

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
    <link rel="stylesheet" type="text/css" href="assets/vendor/simple-line-icons/css/simple-line-icons.min.css">
</head>

<body>
    <div class="page-wrapper">


        <main class="main">
            <div class="page-header">
                <div class="container d-flex flex-column align-items-center">
                    <nav aria-label="breadcrumb" class="breadcrumb-nav">
                        <div class="container">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="demo4.html">Home</a></li>
                                <li class="breadcrumb-item"><a href="category.html">Shop</a></li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    My Account
                                </li>
                            </ol>
                        </div>
                    </nav>

                    <h1>My Account</h1>
                </div>
            </div>

            <div class="container account-container custom-account-container">
                <div class="row">
                    <div class="sidebar widget widget-dashboard mb-lg-0 mb-3 col-lg-3 order-0">
                        <h2 class="text-uppercase">My Account</h2>
                        <ul class="nav nav-tabs list flex-column mb-0" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="dashboard-tab" data-toggle="tab" href="#dashboard" role="tab" aria-controls="dashboard" aria-selected="true">Dashboard</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" id="order-tab" data-toggle="tab" href="#order" role="tab" aria-controls="order" aria-selected="true">Orders</a>
                            </li>


                            <li class="nav-item">
                                <a class="nav-link" href="index.php?action=wishlist">Wishlist</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="index.php?action=login&act=logout">Logout</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-9 order-lg-last order-1 tab-content">
                        <div class="tab-pane fade show active" id="dashboard" role="tabpanel">
                            <div class="dashboard-content">
                                <p>
                                    Hello <strong class="text-dark">Editor</strong> (not
                                    <strong class="text-dark">Editor</strong>?
                                    <a href="login.html" class="btn btn-link ">Log out</a>)
                                </p>

                                <p>
                                    From your account dashboard you can view your
                                    <a class="btn btn-link link-to-tab" href="#order">recent orders</a>,
                                    manage your
                                    <a class="btn btn-link link-to-tab" href="#address">shipping and billing
                                        addresses</a>, and
                                    <a class="btn btn-link link-to-tab" href="#edit">edit your password and account
                                        details.</a>
                                </p>

                                <div class="mb-4"></div>

                                <div class="row row-lg">
                                    <div class="col-6 col-md-4">
                                        <div class="feature-box text-center pb-4">
                                            <a href="#order" class="link-to-tab"><i class="sicon-social-dropbox"></i></a>
                                            <div class="feature-box-content">
                                                <h3>ORDERS</h3>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-6 col-md-4">
                                        <div class="feature-box text-center pb-4">
                                            <a href="#download" class="link-to-tab"><i class="sicon-cloud-download"></i></a>
                                            <div class=" feature-box-content">
                                                <h3>DOWNLOADS</h3>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-6 col-md-4">
                                        <div class="feature-box text-center pb-4">
                                            <a href="#address" class="link-to-tab"><i class="sicon-location-pin"></i></a>
                                            <div class="feature-box-content">
                                                <h3>ADDRESSES</h3>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-6 col-md-4">
                                        <div class="feature-box text-center pb-4">
                                            <a href="#edit" class="link-to-tab"><i class="icon-user-2"></i></a>
                                            <div class="feature-box-content p-0">
                                                <h3>ACCOUNT DETAILS</h3>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-6 col-md-4">
                                        <div class="feature-box text-center pb-4">
                                            <a href="index.php?action=wishlist"><i class="sicon-heart"></i></a>
                                            <div class="feature-box-content">
                                                <h3>WISHLIST</h3>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-6 col-md-4">
                                        <div class="feature-box text-center pb-4">
                                            <a href="login.html"><i class="sicon-logout"></i></a>
                                            <div class="feature-box-content">
                                                <h3>LOGOUT</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- End .row -->
                            </div>
                        </div><!-- End .tab-pane -->

                        <div class="tab-pane fade" id="order" role="tabpanel">
                            <div class="order-content">
                                <h3 class="account-sub-title d-none d-md-block"><i class="sicon-social-dropbox align-middle mr-3"></i>Orders</h3>
                                <div class="order-table-container text-center">
                                    <table class="table table-order text-left">
                                        <thead>
                                            <tr>
                                                <th class="order-id">ORDER</th>
                                                <th class="order-product">PRODUCT</th>
                                                <th class="order-product">NAME_PRODUCT</th>
                                                <th class="order-date">DATE</th>
                                                <th class="order-price">TOTAL</th>
                                                <th class="order-action">ACTIONS</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $orders = new dashboard;
                                            $result = $orders->order($_SESSION['makh']);
                                            $i = 0;
                                            while ($row = $result->fetch()) {
                                                $i++;
                                            ?>
                                                <tr>
                                                    <td><?php echo $i ?></td>
                                                    <td><img src="assets/images/products/<?php echo $row['product_img']; ?>" alt="" width="20%"></td>
                                                    <td><?php echo $row['product_name']; ?></td>
                                                    <td><?php echo $row['order_date']; ?></td>
                                                    <td><?php echo $row['total']; ?></td>
                                                    <td>
                                                        <form action="index.php?action=dashboard&act=delete" method="POST">
                                                            <!-- Thêm các nút hoặc hành động tương ứng -->
                                                            <button>Edit</button>
                                                            <button class="btn btn-danger" onclick="deleteOrder(<?php echo $row['order_detail_id']; ?>)" type="submit">Delete</button>
                                                            <input name="delete" type="hidden" value="<?php echo $row['order_detail_id']; ?>">

                                                        </form>
                                                    </td>
                                                </tr>
                                            <?php } ?>

                                            <script>
                                                function deleteOrder(order_detail_id) {
                                                    if (confirm('Are you sure you want to delete this order?')) {
                                                        // Gửi yêu cầu xóa đơn hàng bằng AJAX
                                                        var xhttp = new XMLHttpRequest();
                                                        xhttp.onreadystatechange = function() {
                                                            if (this.readyState == 4 && this.status == 200) {
                                                                // Xóa thành công, làm gì đó nếu cần
                                                                alert('Order deleted successfully');
                                                            }
                                                        };
                                                        xhttp.open("GET", "delete_order.php?order_detail_id=" + order_detail_id, true);
                                                        xhttp.send();
                                                    }
                                                }
                                            </script>
                                        </tbody>
                                    </table> <!-- <td class="text-center p-0" colspan="5">
                                                    <p class="mb-5 mt-5">
                                                        No Order has been made yet.
                                                    </p>
                                                </td> -->
                                    <hr class="mt-0 mb-3 pb-2" />

                                    <a href="http://localhost/webphp/webmang/" class="btn btn-dark">Go Shop</a>
                                </div>
                            </div>
                        </div><!-- End .tab-pane -->


                    </div><!-- End .tab-content -->
                </div><!-- End .row -->
            </div><!-- End .container -->

            <div class="mb-5"></div><!-- margin -->
        </main><!-- End .main -->


    </div><!-- End .page-wrapper -->







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
            var js = "window['__CF$cv$params']={r:'82caea196af05f7b',t:'MTcwMTA5MzgwOS4wNzMwMDA='};_cpo=document.createElement('script');_cpo.nonce='',_cpo.src='../../cdn-cgi/challenge-platform/h/g/scripts/jsd/9914b343/main.js',document.getElementsByTagName('head')[0].appendChild(_cpo);";
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


<!-- Mirrored from portotheme.com/html/porto_ecommerce/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Nov 2023 14:08:24 GMT -->

</html>