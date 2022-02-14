<!DOCTYPE html>
<?php

$id = $_GET['id'];

?>
<html lang="en">

<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SLYSC.lk | Mobily Verify</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assest/css/sweetalert.css">
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <link rel="stylesheet" href="assest/css/preloader.css">

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
        <p class="login-box-msg">Please check your mobile <br>
          and enter your Mobily Verify code</p>

        <form action="#" method="post">

          <div class="form-group">
            <label for="verification_code">Verification Code</label>
            <input type="text" class="form-control" id="code" name="code" placeholder="Enter Verification Code">
          </div>

          <div class="row">
            <div class="col-6">
              <input type="hidden" id="student" value="<?php echo $id ?>">

            </div>
            <!-- /.col -->
            <div class="col-6">
              <button class="btn btn-primary btn-block" id="verify">Verify Now</button>
            </div>
            <!-- /.col -->
          </div>
        </form>

      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
  <!-- /.login-box -->

  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.min.js"></script>
  <script src="ajax/js/mobile-verify.js"></script>
  <script src="assest/js/sweetalert.min.js"></script>
  <script src="assest/js/jquery.preloader.min.js"></script>


</body>


</html>