<?php
include_once(dirname(__FILE__) . '/../class/include.php');
include_once(dirname(__FILE__) . '/auth.php');
$id = $_GET["id"];
$COURSE = new Course($id);
?>
<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>Course Students</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="All Students" name="description" />
        <meta content="dsw" name="author" />

        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />

        <!-- DataTables -->
        <link href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />

        <!-- Responsive datatable examples -->
        <link href="assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />     

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
                                    <h4 class="mb-0"><?php echo 'Student List - ' . $COURSE->title ?></h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">slysc</a></li>
                                            <li class="breadcrumb-item active">Students</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->


                        <div class="row pt-3">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Full Name</th>
                                                        <th>Student ID</th>
                                                        <th>Phone Number</th>
                                                        <th>Email</th>
                                                        <th>City</th>
                                                        <th>District</th>
                                                        <th>Status</th>
                                                    </tr>
                                                </thead>


                                                <tbody>
                                                    <?php
                                                    $Registration_class = new StudentRegistration(NULL);
                                                    $COURSE_STUDENT = $Registration_class->getStudentByClassId($COURSE->id);
                                                    foreach ($COURSE_STUDENT as $key => $course_student) {
                                                        $STUDENT = new Student($course_student["student_id"]);
                                                        $key++;
                                                        $CITY = new City($STUDENT->city);
                                                        $DISTRICT = new District($CITY->district);
                                                        ?>
                                                        <tr>
                                                            <td><?php echo $key; ?></td>
                                                            <td><?php echo $STUDENT->full_name; ?></td>
                                                            <td><?php echo $STUDENT->student_id; ?></td>
                                                            <td><?php echo $STUDENT->phone_number; ?></td>
                                                            <td><?php echo $STUDENT->email; ?></td>
                                                            <td><?php echo $CITY->name; ?></td>
                                                            <td><?php echo $DISTRICT->name; ?></td>
                                                            <td><?php
                                                                if ($STUDENT->phone_verification == 1) {
                                                                    echo 'Verified';
                                                                } else {
                                                                    echo 'Not Verified';
                                                                }
                                                                ?></td>
                                                        </tr>
                                                        <?php
                                                    }
                                                    ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->
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
        <!-- Required datatable js -->
        <script src="assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
        <!-- Buttons examples -->
        <script src="assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
        <script src="assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
        <script src="assets/libs/jszip/jszip.min.js"></script>
        <script src="assets/libs/pdfmake/build/pdfmake.min.js"></script>
        <script src="assets/libs/pdfmake/build/vfs_fonts.js"></script>
        <script src="assets/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
        <script src="assets/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
        <script src="assets/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>

        <!-- Responsive examples -->
        <script src="assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
        <script src="assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

        <!-- Datatable init js -->
        <script src="assets/js/pages/datatables.init.js"></script>
    </body>

</html>