<!DOCTYPE html>
<?php
include './class/include.php';
$STUDENT = new Student(NULL);
$LAST_ID = $STUDENT->getLastStudentId();
$LAST_ID = $LAST_ID + 1;
?>

<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SLYSC.lk| Registration Page </title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <link rel="stylesheet" href="plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <link rel="stylesheet" href="assest/css/preloader.css">
  <link rel="stylesheet" href="assest/css/jquery.formValid.css">
  <link rel="stylesheet" href="assest/css/sweetalert.css"> 
</head>

<body class="hold-transition register-page someBlock">
  <div class="register-box">
    <div class="card card-outline card-primary">
      <div class="card-header text-center">
        <a href="#" class="h1">

          <img src="./assest/img/logo.png" width="30%">
        </a>
      </div>
      <div class="card-body">
        <p class="login-box-msg">Register a new membership</p>

        <form action="#" method="post" id="form">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="exampleInputEmail1">Student Id </label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="student_id" value="STU000<?php echo $LAST_ID ?>" readonly>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label for="exampleInputEmail1">Full Name </label>
                <input type="text" class="form-control" name="full_name" id="full_name" data-field="full_name" placeholder="Enter Full Name">
                <div class="valid-message"></div>
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <label for="exampleInputEmail1">Your Email</label>
                <input type="email" class="form-control" placeholder="Email" name="email" data-field="email" id="email">
                <div class="valid-message"></div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="exampleInputEmail1">Select Your District </label>
                <div class="input-group mb-3">
                  <select class="form-control" id="district">
                    <option>-- Select District --</option>
                    <?php
                    $DISTRICT = new District(NULL);
                    foreach ($DISTRICT->all() as $dis) {
                    ?>
                      <option value="<?php echo $dis['id'] ?>"><?php echo $dis['name'] ?></option>
                    <?php } ?>
                  </select>
                </div>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label for="exampleInputEmail1">Select Your City </label>
                <div class="input-group mb-3">
                  <select class="form-control" id="city-bar" name="city">
                    <option>-- Select District First --</option>

                  </select>
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <label for="exampleInputEmail1">Mobile Number </label>
                <input type="text" class="form-control phone-inputmask" placeholder="Your Mobile Number" id="phone_number" name="phone_number" data-field="phone_number">
                <div class="valid-message"></div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="exampleInputEmail1">Password </label>
                <input type="password" class="form-control" placeholder="Your Password" name="password" id="password" data-field="password">
                <div class="valid-message"></div>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label for="exampleInputEmail1">Confirm Password </label>
                <input type="password" class="form-control" placeholder="Your Confirm Password " name="com_password" id="com_password" data-field="com_password">
                <div class="valid-message"></div>
              </div>
            </div>
          </div>
          <div class="row" style="margin-bottom: 8px;">
            <div class="form-group">
              <div class="pull-left text-danger btn-padding font-size-new" id="message"></div>
            </div>
          </div>
          <div class="row">
            <div class="col-8">
              <a href="login.php" class="text-center">I already have account.</a>
            </div>
            <!-- /.col -->
            <div class="col-4">
              <button type="submit" class="btn btn-primary btn-block" id="next">Next</button>
            </div>

          </div>
        </form>



      </div>
    </div>
  </div>
  <!-- /.register-box -->
  <script src="plugins/select2/js/select2.full.min.js"></script>
  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.min.js"></script>
  <script src="assest/js/jquery.formValid.js"></script>
  <script src="assest/js/jquery.preloader.min.js"></script>
  <script src="js/jquery.inputmask.bundle.min.js" type="text/javascript"></script>
  <script src="ajax/js/city.js"></script>
  <script src="ajax/js/registration.js"></script>
  <script src="assest/js/sweetalert.min.js"></script>
  
  <script>
    $(function() {
      //Initialize Select2 Elements
      $('.select2').select2();
    });
  </script>
</body>

</html>