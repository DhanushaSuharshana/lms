<?php
if (!isset($_SESSION)) {
    session_start();
}
?>
<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Log In - SLYSC.lk</title>
        <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
        <link rel="icon" type="image/png" href="img/logo.png" sizes="32x32">


        <link rel="mask-icon" href="safari-pinned-tab.svg" color="#f7a033">
        <meta name="theme-color" content="#ffffff">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,400italic,500,700">
        <link rel="stylesheet" href="css/vendor.min.css">
        <link rel="stylesheet" href="css/elephant.min.css">
        <link rel="stylesheet" href="css/login-2.min.css">
        <link href="css/jquery.formValid.css" rel="stylesheet" type="text/css"/>
    </head>
    <body class="log-bck">
        <div class="login">
            <div class="login-body">
                <a class="login-brand" href="../index.php">
                    <center>
                         <img class="img-responsive" src="img/logo.png" alt="slysc.lk" width="60%">
                    </center>
                   
                </a>
                <div class="login-form">
                    <form   id="form">
                         <div class="msg text-center">Sign in to start your session</div>
                        <div class="form-group">
                            <label for="student_id">Student ID / Email / Phone Number</label>
                            <input id="student_id" class="form-control" type="text" name="student_id"  data-field="student_id"  >
                            <div class="valid-message"></div>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input id="password" class="form-control" type="password"  name="password" minlength="6"  data-field="password">
                            <div class="valid-message"></div>
                        </div> 
                        <div class="form-group">
                            <div class="text-center text-danger btn-padding font-size-new" id="message"></div>
                        </div>
                        
                        <input type="hidden" name="back_url" value="<?= $_SESSION['back_url']; ?>" />
                        <button class="btn btn-primary btn-block" type="submit"  >Sign in</button>
                    </form>
                </div>
                <div class="login-footer">
                    Don't have an account? <a href="registration.php">Sign Up</a><br>
                    Change Password? <a href="forget-password.php">Forgot password? </a><br>
                     
                </div>
            </div>

        </div>
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/jquery.formValid.js" type="text/javascript"></script>
        <script src="ajax/js/login.js" type="text/javascript"></script>


    </body>
</html>