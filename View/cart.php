<?php


// Identify the item to remove, $itemToRemove should be replaced with your logic
if (isset($_GET['delete']) && $_GET['delete'] >= 0) {
    array_splice($_SESSION['cart'], $_GET['delete'], 1);
}
if (empty($_SESSION['cart'])) {
    echo '<script>alert("Giỏ hàng rỗng");</script>';

    echo '<meta http-equiv="refresh" content="0;url=./index.php"/>';
}

?>


<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from portotheme.com/html/porto_ecommerce/cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Nov 2023 14:08:49 GMT -->

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
<style>
    .quantity-containers {
        display: flex;
        align-items: center;
    }

    .quantity-btns {
        background-color: #007bff;
        color: #fff;
        border: none;
        padding: 5px 10px;
        cursor: pointer;
    }

    .product-quantitys input {
        width: 40px;
        text-align: center;
        margin: 0 5px;
    }

    .product-rows .btn-remove {
        font-size: 18px;
        color: #e74c3c;
        cursor: pointer;
    }
</style>

<body>
    <div class="page-wrapper">


        <main class="main">
            <div class="container">
                <ul class="checkout-progress-bar d-flex justify-content-center flex-wrap">
                    <li class="active">
                        <a href="">Shopping Cart</a>
                    </li>
                    <li>
                        <a href="">Checkout</a>
                    </li>
                    <li class="disabled">
                        <a href="">Order Complete</a>
                    </li>
                </ul>

                <div class="row">
                    <div class="col-lg-8">
                        <div class="cart-table-container">
                            <form action="index.php?action=cart&act=update" method="post">
                                <table class="table table-cart">
                                    <thead>
                                        <tr>
                                            <th class="thumbnail-col"></th>
                                            <th class="product-col">Product</th>
                                            <th class="price-col">Size</th>
                                            <th class="price-col">Price</th>
                                            <th class="qty-col">Quantity</th>
                                            <th class="text-right">Subtotal</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php


                                        if (isset($_SESSION['cart']) && (is_array($_SESSION['cart']))) {
                                            for ($i = 0; $i < sizeof($_SESSION['cart']); $i++) {
                                                $link = "index.php?action=cart&act=cart_action&delete=" . $i;
                                                $totall = floatval(str_replace('.', '', $_SESSION['cart'][$i][4])) * $_SESSION['cart'][$i][5];
                                                // var_dump($totall);
                                                $resultFormatted = number_format($totall, 0, '.', ',');
                                        ?>
                                                <tr class="product-row" id="productRow_<?php echo $i; ?>">
                                                    <td>
                                                        <figure class="product-image-container">
                                                            <a href="index.php?action=detailproduct&id_detail=<?= $_SESSION['cart'][$i][0]; ?>&id_menu=<?= $_SESSION['cart'][$i][6];  ?>" class="product-image">
                                                                <img src="assets/images/products/<?php echo $_SESSION['cart'][$i][1] ?>" alt="product">
                                                                <input type="hidden" name="img" value="<?php echo $_SESSION['cart'][$i][1] ?>">
                                                            </a>
                                                            <a href="<?php echo $link ?>" class="btn-remove icon-cancel" title="Remove Product"></a>
                                                        </figure>
                                                    </td>
                                                    <td class="product-cols">
                                                        <h5 class="product-title">
                                                            <a href=""><?php echo $_SESSION['cart'][$i][2] ?></a>
                                                            <input type="hidden" name="name" value="<?php echo $_SESSION['cart'][$i][2] ?>">
                                                        </h5>
                                                    </td>
                                                    <td><?php echo $_SESSION['cart'][$i][3] ?>
                                                        <input type="hidden" name="size" value="<?php echo $_SESSION['cart'][$i][3] ?>">
                                                    </td>
                                                    <td><?php echo $_SESSION['cart'][$i][4] ?></td>
                                                    <input type="hidden" name="price" value="<?php echo $_SESSION['cart'][$i][4] ?>">

                                                    </td>
                                                    <td class="product-quantitys">
                                                        <div class="quantity-containers">
                                                            <button type="button" class="quantity-btns" onclick="updateQuantity(<?php echo $i ?>, -1)">-</button>
                                                            <input class="horizontal-quantitys" name="soluong[<?php echo $i ?>]" id="quantityInput_<?php echo $i ?>" type="text" value="<?php echo $_SESSION['cart'][$i][5] ?>" readonly>
                                                            <button type="button" class="quantity-btns" onclick="updateQuantity(<?php echo $i ?>, 1)">+</button>
                                                        </div>
                                                    </td>
                                                    <td class="text-right"><span class="subtotal-price" id="subtotal_<?php echo $i ?>"><?php echo $resultFormatted ?></span>
                                                <input type="hidden" name="total" value="<?php echo $resultFormatted ?>">
                                                </td>
                                                </tr>
                                        <?php
                                            }
                                        }
                                        ?>
                                    </tbody>
                                    <script>
                                        <?php
                                        // Encode the entire cart array in PHP
                                        // $encodedCart = json_encode($_SESSION['cart']);
                                        // echo "var cartData = " . $encodedCart . ";";
                                        // 
                                        ?>

                                        // // Hàm để cập nhật số lượng và dữ liệu từ sessionStorage
                                        // window.onload = function() {
                                        //     // Cập nhật giao diện từ sessionStorage khi trang được load
                                        //     updateUIFromSessionStorage();
                                        // };


                                        // function updateUIFromSessionStorage() {
                                        //     var cartSessionData = JSON.parse(sessionStorage.getItem('cartData')) || [];

                                        //     // Lặp qua mỗi mục trong giỏ hàng và cập nhật giao diện
                                        //     for (var i = 0; i < cartSessionData.length; i++) {
                                        //         var quantityInput = document.getElementById('quantityInput_' + i);
                                        //         var subtotalElement = document.getElementById('subtotal_' + i);

                                        //         // Kiểm tra xem dữ liệu có tồn tại không
                                        //         if (quantityInput && subtotalElement) {
                                        //             // Cập nhật số lượng
                                        //             quantityInput.value = cartSessionData[i].quantity;

                                        //             // Cập nhật tổng cộng
                                        //             var pricePerItem = parseFloat(cartSessionData[i][3]);
                                        //             var newSubtotal = pricePerItem * cartSessionData[i].quantity;
                                        //             subtotalElement.textContent = newSubtotal.toFixed(3);
                                        //         } else {
                                        //             console.error('Invalid HTML structure for cart row: ' + i);
                                        //         }
                                        //     }
                                        // }

                                        function updateQuantity(index, change) {
                                            var quantityInput = document.getElementById('quantityInput_' + index);
                                            var currentQuantity = parseInt(quantityInput.value);
                                            var newQuantity = currentQuantity + change;

                                            if (newQuantity > 0) {
                                                quantityInput.value = newQuantity;

                                                // Update subtotal
                                                var pricePerItem = parseFloat(cartSessionData[index][3]); // Sửa đổi: sử dụng cartSessionData thay vì cartData
                                                var subtotalElement = document.getElementById('subtotal_' + index);
                                                var newSubtotal = pricePerItem * newQuantity;
                                                subtotalElement.textContent = newSubtotal.toFixed(3);

                                                // Update data in sessionStorage
                                                var cartSessionData = JSON.parse(sessionStorage.getItem('cartData')) || [];

                                                if (cartSessionData.length > index) {
                                                    cartSessionData[index].quantity = newQuantity;
                                                    sessionStorage.setItem('cartData', JSON.stringify(cartSessionData));
                                                } else {
                                                    console.error('Invalid index or cart data structure.');
                                                }
                                            }
                                        }




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

                                        // function findClientIndex(name, size) {
                                        //     for (var i = 0; i < cartData.length; i++) {
                                        //         if (cartData[i][1] === name && cartData[i][2] === size) {
                                        //             return i;
                                        //         }
                                        //     }
                                        //     return false;
                                        // }
                                    </script>






                                    <tfoot>
                                        <tr>
                                            <td colspan="5" class="clearfix">


                                                <div class="float-right">
                                                    <a href="index.php?action=cart&act=update"><input type="submit" name="update" class="btn btn-shop btn-update-cart" value="Update Cart"></a>
                                                </div>



                                            </td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </form>
                        </div><!-- End .cart-table-container -->
                    </div><!-- End .col-lg-8 -->

                    <div class="col-lg-4">
                        <div class="cart-summary">
                            <h3>CART TOTALS</h3>

                            <table class="table table-totals">
                                <tbody>

                                </tbody>


                                <tfoot>
                                    <tr>
                                        <td>Total</td>

                                        <td><?php
                                            $sum = 0;
                                            if (isset($_SESSION['cart']) && (is_array($_SESSION['cart']))) {
                                                for ($i = 0; $i < sizeof($_SESSION['cart']); $i++) {
                                                    $link = "index.php?action=cart&act=cart_action&delete=" . $i;
                                                    $totall = floatval(str_replace('.', '', $_SESSION['cart'][$i][4])) * $_SESSION['cart'][$i][5];
                                                    $sum += $totall;
                                                    $resultFormatted = number_format($sum, 0, '.', ',');
                                                }
                                                echo $resultFormatted;
                                            }

                                            ?>

                                        </td>
                                    </tr>
                                </tfoot>
                            </table>

                            <div class="checkout-methods">
                                <a href="index.php?action=checkout" class="btn btn-block btn-dark">Proceed to Checkout
                                    <i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div><!-- End .cart-summary -->
                    </div><!-- End .col-lg-4 -->
                </div><!-- End .row -->
            </div><!-- End .container -->

            <div class="mb-6"></div><!-- margin -->
        </main><!-- End .main -->


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
                var js = "window['__CF$cv$params']={r:'82caea66badfa3dc',t:'MTcwMTA5MzgxOS42NDAwMDA='};_cpo=document.createElement('script');_cpo.nonce='',_cpo.src='../../cdn-cgi/challenge-platform/h/g/scripts/jsd/9914b343/main.js',document.getElementsByTagName('head')[0].appendChild(_cpo);";
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


<!-- Mirrored from portotheme.com/html/porto_ecommerce/cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Nov 2023 14:08:51 GMT -->

</html>