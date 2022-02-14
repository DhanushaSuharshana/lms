<!DOCTYPE html>
<?php
include '../class/include.php';
include './auth.php';
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Manage All Classes</title>

    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-iconaa.png">
    <link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="manifest.json">
    <link rel="mask-icon" href="safari-pinned-tab.svg" color="#f7a033">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,400italic,500,700">
    <link rel="stylesheet" href="css/vendor.min.css">
    <link rel="stylesheet" href="css/elephant.min.css">
    <link rel="stylesheet" href="css/application.min.css">
    <link rel="stylesheet" href="css/demo.min.css">
    <link href="css/sweetalert.css" rel="stylesheet" type="text/css" />
</head>

<body class="layout layout-header-fixed">
    <?php
    include './top-header.php';
    ?>
    <div class="layout-main">

        <?php
        include './navigation.php';
        ?>

        <div class="layout-content">
            <div class="layout-content-body">

                <div class="row gutter-xs">
                    <div class="col-xs-12">
                        <div class="row">

                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">

                                        <strong>Manage All Classes</strong>
                                    </div>
                                    <div class="card-body table-card-body">
                                        <table id="demo-datatables-colreorder-1" class="table table-hover table-striped table-nowrap dataTable" cellspacing="0" width="100%">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Name</th>
                                                    <th>Lecturer</th>
                                                    <th>Class Type</th>
                                                    <th>Subject</th>
                                                    <th>Start Date</th>
                                                    <th>Time</th>
                                                    <th>Modules</th>
                                                    <th>Fee</th>
                                                    <th>Payment Type</th>
                                                </tr>
                                            </thead>
                                            <?php
                                            $CLASS = new LectureClass(NULL);
                                            foreach ($CLASS->allAscendingByStartDate() as $key => $class) {
                                                $LECTURE = new Lecture($class['lecture']);
                                                $CLASS_TYPE = new ClassType($class['class_type']);
                                                $SUBJECT = new EducationSubject($class['subject_id']);
                                                $key++;
                                            ?>
                                                <tr id="div<?php echo $class['id']; ?>">
                                                    <td><?php echo $key; ?></td>
                                                    <td><?php echo $class['name']; ?></td>
                                                    <td><?php echo $LECTURE->full_name; ?></td>
                                                    <td><?php echo $CLASS_TYPE->name; ?></td>
                                                    <td><?php echo $SUBJECT->name; ?></td>
                                                    <td><?php echo $class['start_date']; ?></td>
                                                    <td><?php echo $class['start_time'] . ' - ' . $class['end_time']; ?></td>
                                                    <td><?php echo $class['modules']; ?></td>
                                                    <td>Rs. <?php echo $class['class_fee']; ?></td>
                                                    <td>
                                                        <?php
                                                        if ($class['payment_type'] == 0) {
                                                            echo 'Free';
                                                        } elseif ($class['payment_type'] == 1) {
                                                            echo 'Weekly';
                                                        }
                                                        ?>
                                                    </td>

                                                </tr>
                                            <?php } ?>
                                            <tfoot>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Name</th>
                                                    <th>Lecturer</th>
                                                    <th>Class Type</th>
                                                    <th>Subject</th>
                                                    <th>Start Date</th>
                                                    <th>Time</th>
                                                    <th>Modules</th>
                                                    <th>Fee</th>
                                                    <th>Payment Type</th>
                                                </tr>
                                            </tfoot>
                                            <tbody>


                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script src="js/jquery.min.js" type="text/javascript"></script>
    <script src="js/vendor.min.js"></script>
    <script src="js/elephant.min.js"></script>
    <script src="js/application.min.js"></script>
    <script src="js/demo.min.js"></script>
    <script src="js/sweetalert.min.js" type="text/javascript"></script>
    <script src="delete/js/class-type.js" type="text/javascript"></script>
    <script src="ajax/js/class_type.js" type="text/javascript"></script>
</body>

</html>