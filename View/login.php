<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from portotheme.com/html/porto_ecommerce/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Nov 2023 14:08:51 GMT -->

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




    <!-- Plugins CSS File -->

</head>
<style>
    @import url('https://fonts.googleapis.com/css?family=Montserrat:400,800');

    * {
        box-sizing: border-box;
    }

    h1 {
        font-weight: bold;
        margin: 0;
    }

    h2 {
        text-align: center;
    }

    p {
        font-size: 14px;
        font-weight: 100;
        line-height: 10px;
        letter-spacing: 0.5px;
        margin: 10px 0 30px;
    }

    span {
        font-size: 12px;
    }

    a {
        color: #333;
        font-size: 14px;
        text-decoration: none;
        margin: 15px 0;
    }

    .buttons {
        border-radius: 20px;
        border: 1px solid #FF4B2B;
        background-color: #FF4B2B;
        color: #FFFFFF;
        font-size: 12px;
        font-weight: bold;
        padding: 12px 45px;
        letter-spacing: 1px;
        text-transform: uppercase;
        transition: transform 80ms ease-in;
    }

    .buttons:active {
        transform: scale(0.95);
    }

    .buttons:focus {
        outline: none;
    }

    .button.ghosts {
        background-color: transparent;
        border-color: #FFFFFF;
    }

    .forms {
        background-color: #FFFFFF;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        padding: 0 50px;
        height: 100%;
        text-align: center;
    }

    .inputs {
        background-color: #eee;
        border: none;
        padding: 12px 15px;
        margin: 5px 0;
        width: 97%;
    }

    .inputss {
        background-color: #eee;
        border: none;
        padding: 12px 15px;
        margin: 5px 0;
        width: 50%;
    }

    .containers {
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25),
            0 10px 10px rgba(0, 0, 0, 0.22);
        position: relative;
        overflow: hidden;
        width: 100%;
        max-width: 100%;
        min-height: 780px;
    }

    .form-containers {
        position: absolute;
        top: 0;
        height: 100%;
        transition: all 0.6s ease-in-out;
    }

    .sign-in-containers {
        left: 0;
        width: 50%;
        z-index: 2;
    }

    .containers.right-panel-actives .sign-in-containers {
        transform: translateX(100%);
    }

    .sign-up-containers {
        left: 0;
        width: 50%;
        opacity: 0;
        z-index: 1;
    }

    .containers.right-panel-actives .sign-up-containers {
        transform: translateX(100%);
        opacity: 1;
        z-index: 5;
        animation: show 0.6s;
    }

    .signin {
        width: 98% !important;
    }

    @keyframes show {

        0%,
        49.99% {
            opacity: 0;
            z-index: 1;
        }

        50%,
        100% {
            opacity: 1;
            z-index: 5;
        }
    }

    .overlay-containers {
        position: absolute;
        top: 0;
        left: 50%;
        width: 50%;
        height: 100%;
        overflow: hidden;
        transition: transform 0.6s ease-in-out;
        z-index: 100;
    }

    .containers.right-panel-actives .overlay-containers {
        transform: translateX(-100%);
    }

    .overlays {
        background: #FF416C;
        background: -webkit-linear-gradient(to right, #FF4B2B, #FF416C);
        background: linear-gradient(to right, #FF4B2B, #FF416C);
        background-repeat: no-repeat;
        background-size: cover;
        background-position: 0 0;
        color: #FFFFFF;
        position: relative;
        left: -100%;
        height: 100%;
        width: 200%;
        transform: translateX(0);
        transition: transform 0.6s ease-in-out;
    }

    .containers.right-panel-actives .overlays {
        transform: translateX(50%);
    }

    .overlay-panels {
        position: absolute;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        padding: 0 40px;
        text-align: center;
        top: 0;
        height: 100%;
        width: 50%;
        transform: translateX(0);
        transition: transform 0.6s ease-in-out;
    }

    .overlay-lefts {
        transform: translateX(-20%);
    }

    .containers.right-panel-actives .overlay-lefts {
        transform: translateX(0);
    }

    .overlay-rights {
        right: 0;
        transform: translateX(0);
    }

    .containers.right-panel-actives .overlay-rights {
        transform: translateX(20%);
    }

    .social-containers {
        margin: 20px 0;
    }

    .social-containers a {
        border: 1px solid #DDDDDD;
        border-radius: 50%;
        display: inline-flex;
        justify-content: center;
        align-items: center;
        margin: 0 5px;
        height: 40px;
        width: 40px;
    }

    .ghost {
        border: 1px solid #fff;
    }
</style>

<body>




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

    <div class="container login-container">
        <div class="row">
            <div class="containers" id="container">
                <div class="form-containers sign-up-containers">
                    <form class="forms" action="index.php?action=login&act=dangky_action" method="POST">
                        <h1>Create Account</h1>
                        <div class="social-containers">
                            <a href="#" class="social "><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                            <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                        <span>or use your email for registration</span>
                        <p></p>
                        <div class="row">
                            <div class="col-xs-4 col-md-4"> <label for="email">Tên :</label>
                            </div>
                            <div class="col-xs-8 col-md-8"> <input class="inputs" name="txttenkh" id="name" placeholder="Tên khách hàng" required type="text"> </div>
                            <div class="col-xs-4 col-md-4"></div>
                            <div class="col-xs-8 col-md-8">
                                <p style="color:red" id="errname"></p>
                            </div><br>
                            <div class="col-xs-4 col-md-4"> <label for="email">Địa chỉ :</label>
                            </div>
                            <div class="col-xs-8 col-md-8"> <input class="inputs" name="txtdiachi" id="address" placeholder="Địa chỉ khách hàng" required type="text"> </div>
                            <div class="col-xs-4 col-md-4"></div>
                            <div class="col-xs-8 col-md-8">
                                <p style="color:red" id="erraddress"></p>
                            </div><br>
                            <div class="col-xs-4 col-md-4"> <label for="email">Số điện thoại :</label>
                            </div>
                            <div class="col-xs-8 col-md-8"> <input class="inputs" name="txtsodt" id="sdt" placeholder="Số điện thoại khách hàng" required type="text"> </div>
                            <div class="col-xs-4 col-md-4"></div>
                            <div class="col-xs-8 col-md-8">
                                <p style="color:red" id="errsdt"></p>
                            </div><br>
                            <div class="col-xs-4 col-md-4"> <label for="email">UserName :</label>
                            </div>
                            <div class="col-xs-8 col-md-8"> <input class="inputs" name="txtusername" id="username" placeholder="Tên đăng nhập" required type="text"> </div>
                            <div class="col-xs-4 col-md-4"></div>
                            <div class="col-xs-8 col-md-8">
                                <p style="color:red" id="errusername"></p>
                            </div><br>
                            <input class="inputs " name="txtemail" placeholder="Email" type="email">
                            <div class="col-xs-4 col-md-4"></div>
                            <div class="col-xs-8 col-md-8">
                                <p class="pt-1"></p>
                            </div><br>
                            <input class="inputs" name="txtpass" placeholder="Mật khẩu" id="pass" type="password">
                            <div class="col-xs-4 col-md-4"></div>
                            <div class="col-xs-8 col-md-8">
                                <p style="color:red" id="errpass"></p>
                            </div><br>
                            <input class="inputs" name="retypepassword" placeholder="Nhập lại mật khẩu" id="retypepass" type="password">
                            <div class="col-xs-4 col-md-4"></div>
                            <div class="col-xs-8 col-md-8">
                                <p style="color:red" id="errretypepass"></p>
                            </div><br>

                            <button class="buttons signin" onclick="return kiemtra()" type="submit" name="submit">Sign Up</button>
                        </div>

                    </form>
                </div>


                <div class="form-containers sign-in-containers">
                    <form class="forms" action="index.php?action=login&act=login_action" method="POST">

                        <h1>Sign in</h1>
                        <div class="social-containers">
                            <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                            <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                        <span>or use your account</span>
                        <p></p>
                        <input class="inputss" type="text" name="txtusername" placeholder="Username" />
                        <p class=""></p>
                        <input class="inputss" type="password" name="txtpassword" placeholder="Password" />
                        <a href="index.php?action=forgot-password">Forgot your password?</a>
                        <button class="buttons" type="submit" name="submit">Sign In</button>
                    </form>
                </div>
                <div class="overlay-containers">
                    <div class="overlays">
                        <div class="overlay-panels overlay-lefts">
                            <h1>Welcome Back!</h1>
                            <p>To keep connected with us please login with your personal info</p>
                            <button class="ghost buttons" id="signIn">Sign In</button>
                        </div>
                        <div class="overlay-panels overlay-rights">
                            <h1>Hello, Friend!</h1>
                            <p>Enter your personal details and start journey with us</p>
                            <button class="ghost buttons" id="signUp">Sign Up</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        const signUpButton = document.getElementById('signUp');
        const signInButton = document.getElementById('signIn');
        const container = document.getElementById('container');

        signUpButton.addEventListener('click', () => {
            container.classList.add("right-panel-actives");
        });

        signInButton.addEventListener('click', () => {
            container.classList.remove("right-panel-actives");
        });

        function kiemtra() {
            var sdt = document.getElementById("sdt").value;
            var name = document.getElementById("name").value;
            var address = document.getElementById("address").value;
            var username = document.getElementById("username").value;
            var pass = document.getElementById("pass").value;
            var retypepass = document.getElementById("retypepass").value;

            // Reset error messages
            document.getElementById('errsdt').textContent = "";
            document.getElementById('errname').textContent = "";
            document.getElementById('erraddress').textContent = "";
            document.getElementById('errusername').textContent = "";
            document.getElementById('errpass').textContent = "";
            document.getElementById('errretypepass').textContent = "";

            var isValid = true;

            if (sdt.length !== 10) {
                document.getElementById('errsdt').textContent = "Số điện thoại không hợp lệ";
                isValid = false;
            }

            // Add more conditions for other fields
            // Example: Check if the name is not empty
            if (name.trim() === "") {
                document.getElementById('errname').textContent = "Tên không được để trống";
                isValid = false;
            }

            // Example: Check if the address is not empty
            if (address.trim() === "") {
                document.getElementById('erraddress').textContent = "Địa chỉ không được để trống";
                isValid = false;
            }

            // Example: Check if the username is not empty
            if (username.trim() === "") {
                document.getElementById('errusername').textContent = "Tên đăng nhập không được để trống";
                isValid = false;
            }

            // Example: Check if the password is at least 6 characters long
            if (pass.length < 6) {
                document.getElementById('errpass').textContent = "Mật khẩu phải có ít nhất 6 ký tự";
                isValid = false;
            }

            // Example: Check if the retyped password matches the original password
            if (pass !== retypepass) {
                document.getElementById('errretypepass').textContent = "Mật khẩu nhập lại không khớp";
                isValid = false;
            }

            return isValid; // Allow or prevent form submission
        }
    </script>
    </main><!-- End .main -->

    >
    </div><!-- End .page-wrapper -->

    <!-- <div class="loading-overlay">
		<div class="bounce-loader">
			<div class="bounce1"></div>
			<div class="bounce2"></div>
			<div class="bounce3"></div>
		</div>
	</div>

	<div class="mobile-menu-overlay"></div><!-- End .mobil-menu-overlay -->


    <!-- End .mobile-menu-container -->






    <!-- Plugins JS File -->
    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/plugins.min.js"></script>

    <!-- Main JS File -->
    <script src="assets/js/main.min.js"></script>
    <script>
        (function() {
            var js = "window['__CF$cv$params']={r:'82caea763cec5f7b',t:'MTcwMTA5MzgyMC43NTgwMDA='};_cpo=document.createElement('script');_cpo.nonce='',_cpo.src='../../cdn-cgi/challenge-platform/h/g/scripts/jsd/9914b343/main.js',document.getElementsByTagName('head')[0].appendChild(_cpo);";
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


<!-- Mirrored from portotheme.com/html/porto_ecommerce/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Nov 2023 14:08:53 GMT -->

</html>