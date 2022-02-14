<!DOCTYPE html>
<?php
include '../class/include.php';
include_once(dirname(__FILE__) . '/auth.php');
?>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title> Payment Successful </title>
        <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">

        <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
        <link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32">
        <link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16">
        <link rel="manifest" href="manifest.json">
        <link rel="mask-icon" href="safari-pinned-tab.svg" color="#f7a033">
        <meta name="theme-color" content="#ffffff">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,400italic,500,700">
        <link rel="stylesheet" href="css/vendor.min.css">
        <link rel="stylesheet" href="css/elephant.min.css">
        <link rel="stylesheet" href="css/errors.min.css">
    </head>
    <body>
        <div class="error">
            <div class="error-body">
                <h1 class="error-heading  " style="color: #28a745">Your Payment is Successfully..!</h1>
                <h4 class="error-subheading">Your class payment is successful. You can enter class Now..!</h4>

                <p><a class="btn btn-primary btn-pill btn-thick" href="manage-select-class.php">Return to Home Page</a></p>
            </div>
            <div class="error-footer">
                <ul class="list-inline">
                    <li>
                        <a class="link-muted" href="#">
                            <span class="icon icon-twitter icon-2x"></span>
                        </a>
                    </li>
                    <li>
                        <a class="link-muted" href="#">
                            <span class="icon icon-facebook-official icon-2x"></span>
                        </a>
                    </li>
                    <li>
                        <a class="link-muted" href="#">
                            <span class="icon icon-linkedin icon-2x"></span>
                        </a>
                    </li>
                </ul>
                <p>
                    <small>© <?php echo date('yy') ?> Ecollage.lk</small>
                </p>
            </div>
        </div>
        <script src="js/vendor.min.js"></script>
        <script src="js/elephant.min.js"></script>

    </body>

</html>