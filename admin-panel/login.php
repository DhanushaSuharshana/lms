<?php
include '../class/include.php';
?>

<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Admin Login</title>

        <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-iconaa.png">
        <link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32">
        <link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16">
        <link rel="manifest" href="manifest.json">
        <link rel="mask-icon" href="safari-pinned-tab.svg" color="#f7a033">
        <meta name="theme-color" content="#ffffff">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,400italic,500,700">
        <link rel="stylesheet" href="css/vendor.min.css">
        <link rel="stylesheet" href="css/elephant.min.css">
        <link rel="stylesheet" href="css/login-1.min.css">
    </head>
    <body>
        <div class="login">
            <div class="login-body">
                <a class="login-brand" href="../index.php">
                    <center>
                        <img class="img-responsive" src="img/logo.png" alt="Elephant">
                    </center>
              
                </a>
                <h3 class="login-heading">Admin</h3>
                <div class="login-form">
                    <?php
                    if (isset($_GET['message'])) {

                        $MESSAGE = New Message($_GET['message']);
                        ?>
                        <div class="alert alert-<?php echo $MESSAGE->status; ?>" role = "alert">
                            <?php echo $MESSAGE->description; ?>
                        </div>
                        <?php
                    }
                    ?>
                    <form method="post" action="ajax/post-and-get/login.php">

                        <div class="form-group">
                            <label for="username" class="control-label">Username</label>
                            <input id="username" class="form-control" type="text" name="username" spellcheck="false" autocomplete="off" data-msg-required="Please enter your username." required>
                        </div>
                        <div class="form-group">
                            <label for="password" class="control-label">Password</label>
                            <input id="password" class="form-control" type="password" name="password"   data-msg-minlength="Password must be 6 characters or more." data-msg-required="Please enter your password." required>
                        </div>
                        <div class="form-group">
                            <div class="pull-left text-danger btn-padding font-size-new" id="message"></div>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary btn-block" type="submit">Sign in</button>
                        </div>
                        <div class="form-group">
<!--                            <ul class="list-inline">
                                <li>
                                    <label class="custom-control custom-control-primary custom-checkbox">
                                        <input class="custom-control-input" type="checkbox">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-label">Keep me signed in</span>
                                    </label>
                                </li>
                            </ul>-->
                            <ul class="list-inline">
                                <!--                                <li><a href="#">Forgot username?</a></li>-->
                                <!--                                <li>
                                                                    <span aria-hidden="true"> · </span>
                                                                </li>-->
                                <li><a href="forget-password.php">Forgot password?</a></li>
                            </ul>
                        </div>
                    </form>
                </div>
            </div>
            <div class="login-footer">
                <ul class="list-inline">
                    <li><a class="link-muted" href="#">Sign up</a></li>
                    <li>|</li>
                    <li><a class="link-muted" href="#">Privacy Policy</a></li>
                    <li>|</li>
                    <li><a class="link-muted" href="#">Terms</a></li>
                    <li>|</li>
                    <li><a class="link-muted" href="#">Cookie Policy</a></li>
                    <li>|</li>
                    <li>© Synotec 2019</li>
                </ul>
            </div>
        </div>

        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/jquery.formValid.js" type="text/javascript"></script>


    </body>
</html>