<?php
include_once(dirname(__FILE__) . '/../class/include.php');
include_once(dirname(__FILE__) . '/auth.php');
?>
<!doctype html>
<html lang="en">

    <head>

        <meta charset="utf-8" />
        <title>CMS : ReadX Blogs</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="ReadX Blogs" name="description" />
        <meta content="ReadX" name="author" />

        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    <body  >





        <!-- Begin page -->
        <div  >

            <?php
            include './top-header.php';
            ?>

            <!-- ========== Left Sidebar Start ========== -->
            <?php include './navigation.php'; ?>
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-flex align-items-center justify-content-between">
                                    <h4 class="mb-0">Dashboard</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">ReadX</a></li>
                                            <li class="breadcrumb-item active">Blog CMS</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->


                        <div class="row pt-3">
                            <div class="col-xl-4">
                                <div class="card bg-primary">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col-sm-8">
                                                <p class="text-white font-size-18">You can manage the <b>Blog</b> Types from this CMS  <i class="mdi mdi-arrow-right"></i></p>
                                                <div class="mt-4">
                                                    <a href="manage-blog-type.php" class="btn btn-success waves-effect waves-light">Manage Types</a>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="mt-4 mt-sm-0">
                                                    <img src="assets/images/setup-analytics-amico.svg" class="img-fluid" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- end card-body-->
                                </div> <!-- end card--> 
                            </div> <!-- end Col -->

                            <div class="col-xl-4">
                                <div class="card bg-warning">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col-sm-8">
                                                <p class="text-white font-size-18">You can manage the <b>Blog Contents</b> from this CMS  <i class="mdi mdi-arrow-right"></i></p>
                                                <div class="mt-4">
                                                    <a href="manage-blogs.php" class="btn btn-success waves-effect waves-light">Manage Blogs</a>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="mt-4 mt-sm-0">
                                                    <img src="assets/images/setup-analytics-amico.svg" class="img-fluid" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- end card-body-->
                                </div> <!-- end card--> 
                            </div> <!-- end Col -->

                            <div class="col-xl-4">
                                <div class="card bg-success">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col-sm-8">
                                                <p class="text-white font-size-18">View the <b>Website</b> Front Design <i class="mdi mdi-arrow-right"></i></p>
                                                <div class="mt-4">
                                                    <a href="http://readx.slysc.lk/" target="_blank" class="btn btn-info  waves-effect waves-light">View Website</a>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="mt-4 mt-sm-0">
                                                    <img href="" target="_blank" class="img-fluid" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- end card-body-->
                                </div> <!-- end card--> 
                            </div> <!-- end Col -->
                        </div> 
                        <div>

                            <div class="row">


                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <h4 class="mb-5">ICON GUIDE</h4>

                                                <div class="row clearfix demo-icon-container">
                                                    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                                                                 <a href="#">
                                                        <div class="badge bg-pill bg-soft-danger font-size-14" data-id="11"><i class="fas fa-trash-alt p-1"></i></div>
                                                    </a> <span class="icon-name">Delete</span>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                                                         <div class="badge bg-pill bg-soft-success font-size-14" type="button" data-bs-toggle="modal" data-bs-target=".bs-example-modal-lg-11"><i class="fas fa-pencil-alt p-1"></i></div> <span class="icon-name">Edit</span>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                                                        <a href="#" class="badge bg-pill bg-soft-primary font-size-14"><i class="fas fa-exchange-alt  p-1"></i></a><span class="icon-name">Arrange</span>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                                                        <a href="#" class="badge bg-pill bg-soft-warning font-size-14"><i class="fas fa-image   p-1"></i></a>  <span class="icon-name">Add Photos</span>
                                                    </div>                                                        
                                                </div>

                                            </div>
                                        </div>
                                    </div> <!-- end col-->

                                </div>


                            
                            </div>

                        </div>

                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->


                <?php include './footer.php'; ?>
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->


        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- JAVASCRIPT -->
        <script src="assets/libs/jquery/jquery.min.js"></script>
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>
        <script src="assets/libs/waypoints/lib/jquery.waypoints.min.js"></script>
        <script src="assets/libs/jquery.counterup/jquery.counterup.min.js"></script>

        <!-- apexcharts -->
        <script src="assets/libs/apexcharts/apexcharts.min.js"></script>

        <script src="assets/js/pages/dashboard.init.js"></script>

        <!-- App js -->
        <script src="assets/js/app.js"></script>

    </body>

</html>