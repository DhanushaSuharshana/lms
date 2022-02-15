<!DOCTYPE html>
<html lang="en">

<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SLYSC.lk | Reset password</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">

    <link rel="stylesheet" href="assest/css/preloader.css">
    <link rel="stylesheet" href="assest/css/jquery.formValid.css">
    <link rel="stylesheet" href="assest/css/sweetalert.css">

</head>

<body class="hold-transition login-page someBlock">
    <div class="login-box">
        <!-- /.login-logo -->
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="#" class="h1">

                    <img src="./assest/img/logo.png" width="50%">
                </a>
            </div>
            <div class="card-body">
                <p class="login-box-msg">Reset Password</p>

                <form action="#" method="post" id="form">

                    <div class="form-group">
                        <label for="exampleInputEmail1"> Reset Code</label>
                        <input type="text" class="form-control" id="reset_code" name="reset_code" data-field="reset_code" placeholder="Enter reset code">
                        <div class="valid-message"></div>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1"> New Password</label>
                        <input type="password" class="form-control" id="new_password" name="new_password" data-field="new_password" placeholder="Enter new password">
                        <div class="valid-message"></div>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1"> Confirm Password</label>
                        <input type="password" class="form-control" id="confirm_password" name="confirm_password" data-field="confirm_password" placeholder="Confirm Password">
                        <div class="valid-message"></div>
                    </div>
                    <div class="form-group">
                        <div class="text-center text-danger btn-padding font-size-new" id="message"></div>
                    </div>
                    <div class="row">

                        <div class="col-8">
                            <!--
                              <div class="icheck-primary">
                                <input type="checkbox" id="remember">
                                <label for="remember">
                                  Remember Me
                                </label>
                              </div>
                                --> <a href="#">Log In?</a>
                        </div>
                        <!-- /.col -->
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">Reset</button>
                            <input type="hidden" name="PasswordReset">
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
                <p class="mb-1 text-center">

                </p>
                <hr>
                <p class="mb-0 text-center">
                    <a href="registration.php" class="text-center">Register Now</a>
                </p>
            </div>
        </div>
    </div>
    <!-- /.login-box -->


    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="assest/js/jquery.preloader.min.js"></script>
    <script src="assest/js/jquery.formValid.js"></script>

    <script src="dist/js/adminlte.min.js"></script>
    <script src="ajax/js/reset-password.js"></script>
    <script src="assest/js/sweetalert.min.js"></script>

</body>


</html>