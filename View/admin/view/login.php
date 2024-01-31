<?php
// Enable error reporting

// Initialize session


// Handle login action

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="assets\img\logo-fav.png">
  <title>Beagle</title>
  <link rel="stylesheet" type="text/css" href="assets\lib\perfect-scrollbar\css\perfect-scrollbar.css">
  <link rel="stylesheet" type="text/css" href="assets\lib\material-design-icons\css\material-design-iconic-font.min.css">
  <link rel="stylesheet" href="assets\css\app.css" type="text/css">
</head>

<body class="be-splash-screen">
  <div class="be-wrapper be-login">
    <div class="be-content">
      <div class="main-content container-fluid">
        <div class="splash-container">
          <div class="card card-border-color card-border-color-primary">
            <div class="card-header">
              <img class="logo-img" src="assets\img\logo-xx.png" alt="logo" width="102" height="27">
              <span class="splash-description">Please enter your user information.</span>
            </div>
            <div class="card-body">
              <form action="index.php?action=login&act=login_action" method="post">
                <div class="form-group">
                  <input class="form-control" id="adminuser" name="adminUser" type="text" placeholder="Username" autocomplete="off">
                </div>
                <div class="form-group">
                  <input class="form-control" id="adminpassword" name="adminPass" type="password" placeholder="Password">
                </div>
                <div class="form-group row login-tools">
                  <div class="col-6 login-remember">
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" type="checkbox" id="checkbox1">
                      <label class="custom-control-label" for="checkbox1">Remember Me</label>
                    </div>
                  </div>
                  <div class="col-6 login-forgot-password"><a href="pages-forgot-password.html">Forgot Password?</a></div>
                </div>
                <div class="form-group login-submit">
                  <input class="btn btn-primary btn-xl" type="submit" name="submit" data-dismiss="modal" value="Sign me in">
                </div>
              </form>
              <!-- Display login error if exists -->
             
              <div id="err" class="alert alert-danger" role="alert"><?= isset($loginError) ? $loginError : '' ?></div>
             
            </div>
          </div>
          <div class="splash-footer"><span>Don't have an account? <a href="pages-sign-up.html">Sign Up</a></span></div>
        </div>
      </div>
    </div>
  </div>
  <script src="assets\lib\jquery\jquery.min.js" type="text/javascript"></script>
  <script src="assets\lib\perfect-scrollbar\js\perfect-scrollbar.min.js" type="text/javascript"></script>
  <script src="assets\lib\bootstrap\dist\js\bootstrap.bundle.min.js" type="text/javascript"></script>
  <script src="assets\js\app.js" type="text/javascript"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      //-initialize the javascript
      App.init();
    });
  </script>
</body>

</html>