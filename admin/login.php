<?php
include_once(dirname(__FILE__) . '/../class/include.php');
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Login | Sri Lanka Youth Services</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="NYSC" name="author" />
        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="assets/css/jquery.formValid.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
        <link href="plugin/sweetalert/sweetalert.css" rel="stylesheet" type="text/css"/>
    </head>
    <body class="authentication-bg">
        <div class="account-pages my-5 pt-sm-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">

                    </div>
                </div>
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card">

                            <div class="card-body p-4"> 
                                <div class="text-center mt-2">
                                    <div class="text-center">
                                        <a href="" class="mb-3 d-block auth-logo">
                                            <img src="assets/images/logo-dark.png" alt="" height="80" class="logo logo-dark">
                                            <img src="assets/images/logo-light.png" alt="" height="80" class="logo logo-light">
                                        </a>
                                    </div>
                                    <h5 class="text-primary">Sign in to continue to Website CMS.</h5>

                                </div>
                                <div class="p-2 mt-4">
                                    <form id="form">

                                        <div class="mb-3">
                                            <label class="form-label" for="username">Username</label>
                                            <input type="text" class="form-control" id="username" placeholder="Enter username" name="username"   data-field="username">
                                            <div class="valid-message"></div>
                                        </div>

                                        <div class="mb-3">

                                            <label class="form-label" for="userpassword">Password</label>
                                            <input type="password" class="form-control"  name="password" id="password" data-field="password" placeholder="Enter password">
                                            <div class="valid-message"></div>
                                        </div>

                                        <div class="form-label">
                                            <a href="#" class="text-muted">Forgot password?</a>
                                        </div>

                                        <div class="mt-3 text-end">
                                            <button class="btn btn-primary w-sm waves-effect waves-light" type="submit">Log In</button>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>

        <!-- JAVASCRIPT -->
        <script src="assets/libs/jquery/jquery.min.js"></script>
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>
        <script src="assets/libs/waypoints/lib/jquery.waypoints.min.js"></script>
        <script src="assets/libs/jquery.counterup/jquery.counterup.min.js"></script>

        <!-- App js -->
        <script src="assets/js/app.js"></script>
        <script src="plugin/sweetalert/sweetalert.min.js" type="text/javascript"></script>

        <script src="assets/js/jquery.formValid.js" type="text/javascript"></script>
        <script src="ajax/js/login.js" type="text/javascript"></script>
    </body>

</html>
