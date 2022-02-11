<?php
include '../class/include.php';
if (!isset($_SESSION)) {
    session_start();
}

if (!Student::authenticate()) {
    redirect('login.php');
}

$id = '';
if ($_SESSION['id']) {
    $id = $_SESSION['id'];
    $STUDENT = new Student($id);
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Ecollege.lk - Registration   </title> 
        <link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32">
        <link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16">

        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,400italic,500,700">
        <link rel="stylesheet" href="css/vendor.min.css">
        <link rel="stylesheet" href="css/elephant.min.css">
        <link rel="stylesheet" href="css/signup-2.min.css"> 
        <link href="css/jquery.formValid.css" rel="stylesheet" type="text/css"/>
        <link href="css/sweetalert.css" rel="stylesheet" type="text/css"/>
    </head>

    <body class="reg-bck">
        <div class="signup" style="max-width: 450px!important;">

            <div class="signup-body" id="register_form">
                <a class="signup-brand" href="../index.php">
                    <center>
                        <img class="img-responsive" src="img/logo.png" alt="Ecollege.lk">
                    </center>

                </a>
                <p class="signup-heading">
                    <em> Verify Mobile Number. </em>
                </p>  
                <div class="signup-form">
                    <div class="alert alert-warning">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <span class="icon icon-info-circle icon-lg"></span>
                        <small>Verification code has been sent to your mobile phone.Please check your inbox.</small>
                    </div>


                    <div class="row gutter-xs">

                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="first-name" >Enter Mobile Code</label>
                                <input id="code" class="form-control" type="text" name="code" class="form-control"    placeholder="Code Here.." >

                            </div>
                        </div> 
                    </div> 

                    <div class="row">
                        <input class="form-control form-control-lg" type="hidden" id="student" value="<?php echo $STUDENT->id; ?>">
                        <div class="col-md-3"></div>
                        <div class="col-md-6"><button class="btn btn-primary btn-block" type="submit" id="verify">Verify</button>  </div>
                        <div class="col-md-3"></div>
                    </div> 
                    <div class="row"> 
                        <div class="col-md-3"></div>
                        <div class="col-md-6" style="margin-top: 10px;"> <center>
                                <button type="button" id="send_phone_verification" class="btn btn-large btn-info" disabled="">  Resend code <span id="countdown_p"></span></button>  </center>  </div>
                        <div class="col-md-3">   </div>
                    </div> 
                </div> 
            </div>

        </div>
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/vendor.min.js"></script>
        <script src="js/elephant.min.js"></script>
        <script src="js/signup-1.min.js"></script> 
        <script src="js/jquery.formValid.js" type="text/javascript"></script>
        <script src="ajax/js/mobile-verify.js" type="text/javascript"></script>

        <script src="js/sweetalert.min.js" type="text/javascript"></script>



    </body>
</html>