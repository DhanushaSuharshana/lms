<?php
include_once(dirname(__FILE__) . '/../class/include.php');
include_once(dirname(__FILE__) . '/auth.php');
?>
<!doctype html>
<html lang="en">

    <head>

        <meta charset="utf-8" />
        <title>Manage Course</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="" name="description" />
        <meta content="" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- DataTables -->
        <link href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />

        <!-- Responsive datatable examples -->
        <link href="assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />

        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
        <link href="plugin/sweetalert/sweetalert.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/preloader.css" rel="stylesheet" type="text/css" />
    </head>


    <body class="someBlock">
        <!-- Begin page -->
        <div id="layout-wrapper">

            <?php include './top-header.php'; ?>
            <!-- ========== Left Sidebar Start ========== -->
            <?php include './navigation.php'; ?>


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
                                    <h4 class="mb-0">Create Course</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                            <li class="breadcrumb-item active">Create Course</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">

                                        <h4 class="card-title">Create Course</h4>
                                        <form id="form-data">
                                            <div class="mb-3 row">
                                                <label for="example-text-input" class="col-md-2 col-form-label">Title</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="text" id="title" name="title" placeholder="Enter title">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-text-input" class="col-md-2 col-form-label">Instructor</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="text" id="instructor" name="instructor" placeholder="Enter Instructor Name">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-email-input" class="col-md-2 col-form-label">Image</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="file" id="image_name" name="image_name">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12" style="display: flex; justify-content: flex-end;margin-top: 15px;">
                                                    <button class="btn btn-primary " type="submit" id="create">Create</button>
                                                    <input type="hidden" name="create">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Manage Course</h4>
                                        <div class="row mt-3">
                                            <?php
                                            $COURSE = new Course(NULL);
                                            foreach ($COURSE->all() as $course) {
                                                ?>
                                                <div class="col-md-6 col-xl-3">
                                                    <!-- Simple card -->
                                                    <div class="card">
                                                        <img class="card-img-top img-fluid" src="../upload/course/<?php echo $course['image_name'] ?>" alt="<?php echo $course['title'] ?>">
                                                        <div class="card-body">
                                                            <h4 class="card-title mb-3"><?php echo $course['title'] ?></h4>
                                                            <div class="badge bg-pill bg-soft-success font-size-14" type="button" data-bs-toggle="modal" data-bs-target=".bs-example-modal-lg-<?php echo $course['id']; ?>"><i class="fas fa-pencil-alt p-1"></i></div> |
                                                            <a href="arrange-blog-type.php" class="badge bg-pill bg-soft-primary font-size-14"><i class="fas fa-exchange-alt  p-1"></i></a> |
                                                            <a href="manage-student.php?id=<?php echo $course['id']?>" class="badge bg-pill bg-soft-purple font-size-14"><i class="fas fa-user p-1"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Page-content -->


                <?php include './footer.php'; ?>
            </div>
        </div>
        <!-- END layout-wrapper -->



        <?php
        foreach ($COURSE->all() as $course) {
            ?>
            <!--  Large modal example -->
            <div class="modal fade bs-example-modal-lg-<?php echo $course['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="myLargeModalLabel">Edit Details : <?php echo $course['title']; ?></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
                        </div>
                        <div class="modal-body">
                            <form method="POST" id="form-data-<?php echo $course['id']; ?>" class="from">
                                <div class="card-body">

                                    <div class="mb-3 row">
                                        <label for="example-text-input" class="col-md-2 col-form-label">Title</label>
                                        <div class="col-md-10">
                                            <input class="form-control title" type="text" name="title" placeholder="Enter  Title" value="<?php echo $course['title'] ?>">
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label for="example-text-input" class="col-md-2 col-form-label">Instructor</label>
                                        <div class="col-md-10">
                                            <input class="form-control title" type="text" name="instructor" placeholder="Enter Instructor Name" value="<?php echo $course['instructor'] ?>">
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label for="example-email-input" class="col-md-2 col-form-label">Image</label>
                                        <div class="col-md-10">
                                            <input class="form-control image_name" type="file" name="image_name" value="<?php echo $course['image_name']; ?>">
                                            <img width="200" class="img-responsive" src="../upload/course/<?php echo $course['image_name']; ?>">
                                        </div>
                                    </div>



                                    <div class="row">
                                        <div class="col-12" style="display: flex; justify-content: flex-end;margin-top: 15px;">
                                            <button class="btn btn-primary edit-data" dataId="<?php echo $course['id']; ?>" type="submit">Update</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->


            <?php
        }
        ?>


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
        <script src="plugin/sweetalert/sweetalert.min.js" type="text/javascript"></script>
        <script src="ajax/js/course.js" type="text/javascript"></script>
        <script src="assets/js/jquery.preloader.min.js" type="text/javascript"></script>
        <!-- App js -->
        <script src="assets/js/app.js"></script>



    </body>

</html>