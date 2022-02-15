<!DOCTYPE html>
<?php
include './class/include.php';
include './auth.php';
?>
<html lang="en">

    <meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>SLYSC | Dashboard</title>

        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="../../../code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Tempusdominus Bootstrap 4 -->
        <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
        <!-- iCheck -->
        <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
        <!-- JQVMap -->
        <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="dist/css/adminlte.min.css">
        <!-- overlayScrollbars -->
        <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
        <!-- Daterange picker -->
        <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
        <!-- summernote -->
        <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
        <link href="assest/css/sweetalert.css" rel="stylesheet" type="text/css"/>
    </head>

    <body class="hold-transition sidebar-mini layout-fixed">
        <div class="wrapper">

            <!-- Preloader -->
            <div class="preloader flex-column justify-content-center align-items-center">
                <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="100">
            </div>

               
                <nav class="main-header navbar navbar-expand navbar-white navbar-light">
                
                  <ul class="navbar-nav">
                    <li class="nav-item">
                      <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                    </li>
                    
                  </ul>
            
              
                  <ul class="navbar-nav ml-auto">
                  
                    <li class="nav-item">
                    </li>
                
                    <li class="nav-item">
                      <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                      </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="log-out.php" role="button">
                        <i class="fas fa-power-off"></i>
                      </a>
                    </li>
                  </ul>
                </nav>
              

            <?php
            include './navigation.php';
            ?>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <div class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1 class="m-0">Courses</h1>
                            </div><!-- /.col -->
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active">Course</li>
                                </ol>
                            </div><!-- /.col -->
                        </div><!-- /.row -->
                    </div><!-- /.container-fluid -->
                </div>
                <!-- /.content-header -->

                <!-- Main content -->
                <section class="content">
                    <div class="container-fluid">
                        <!-- Small boxes (Stat box) -->
                        <div class="row">


                            <?php
                            $EDUCSTION_CATEGORY = new Course(NULL);
                            $Registration_class = new StudentRegistration(NULL);
                            foreach ($EDUCSTION_CATEGORY->all() as $education_category) {
                                ?>
                                <div class="col-md-4">
                                    <div class="card card-primary card-outline">
                                        <div class="card-body box-profile">
                                            <div class="text-center">
                                                <img class="img-fluid" src="upload/course/<?php echo $education_category['image_name'] ?>" alt="User profile picture">
                                            </div>

                                            <h3 class="profile-username text-center"> <?php echo $education_category['title'] ?></h3>

                                            <p class="text-muted text-center"> <?php echo $education_category['instructor'] ?></p>

                                            <?php
                                            if ($Registration_class->getRegistrationClassesByStudent($education_category['id'], $_SESSION["id"])) {
                                                ?>
                                                <a class="card-link" href="">
                                                    <center>
                                                        <button class="btn btn-info btn-block" style="width: 80%" disabled="true"> Enrolled
                                                        </button>
                                                    </center> 
                                                </a>
                                                <?php
                                            } else {
                                                ?>
                                                <a class="card-link" href="">
                                                    <center>
                                                        <p class="btn btn-success btn-block select" data_id="<?php echo $education_category['id'] ?>" stu_id="<?php echo $_SESSION["id"] ?>" style="width: 80%" > Enroll Now
                                                        </p>
                                                    </center> 
                                                </a>
                                                <?php
                                            }
                                            ?>

                                        </div>
                                        <!-- /.card-body -->
                                    </div>
                                </div>
                                <?php
                            }
                            ?>
                        </div>
                        <!-- /.row -->

                    </div><!-- /.container-fluid -->
                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
            <?php
            include './footer.php';
            ?>

            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Control sidebar content goes here -->
            </aside>
            <!-- /.control-sidebar -->
        </div>
        <!-- ./wrapper -->

        <!-- jQuery -->
        <script src="plugins/jquery/jquery.min.js"></script>
        <!-- jQuery UI 1.11.4 -->
        <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
            $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- ChartJS -->
        <script src="plugins/chart.js/Chart.min.js"></script>
        <!-- Sparkline -->
        <script src="plugins/sparklines/sparkline.js"></script>
        <!-- JQVMap -->
        <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
        <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
        <!-- jQuery Knob Chart -->
        <script src="plugins/jquery-knob/jquery.knob.min.js"></script>
        <!-- daterangepicker -->
        <script src="plugins/moment/moment.min.js"></script>
        <script src="plugins/daterangepicker/daterangepicker.js"></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
        <!-- Summernote -->
        <script src="plugins/summernote/summernote-bs4.min.js"></script>
        <!-- overlayScrollbars -->
        <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
        <!-- AdminLTE App -->
        <script src="dist/js/adminlte.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="dist/js/demo.js"></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="dist/js/pages/dashboard.js"></script>
        <script src="assest/js/sweetalert.min.js" type="text/javascript"></script>
        <script src="ajax/js/student_class_registration.js" type="text/javascript"></script>
    </body>


</html>