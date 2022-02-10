<!DOCTYPE html>

<?php
include '../class/include.php';
include './auth.php'; ?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ecollege.lk - Courses</title>

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
        include 'navigation.php';
        ?>
        <div class="layout-content">
            <div class="layout-content-body">
                <div class="row gutter-xs">
                    <div class="col-xs-12">
                        <!--                            <p><small>The tables presented below use <a href="https://datatables.net/extensions/colreorder/" target="_blank">DataTables ColReorder Extension</a>, the styling of which is completely rewritten in SASS, without modifying however anything in JavaScript.</small></p>-->
                    </div>
                </div>
                <div class="row gutter-xs">
                    <div class="col-xs-12">
                        <div class="card">
                            <div class="card-header">

                                <strong>All Courses </strong>
                            </div>
                            <div class="card-body">

                                <table id="demo-datatables-colreorder-1" class="table table-hover table-striped table-nowrap dataTable" cellspacing="0" width="100%">

                                    <tbody>
                                        <?php
                                        foreach (DefaultData::getCourses() as $key => $course) {
                                        ?>
                                                <tr id="div1">
                                                    <td><?= $key; ?></td>
                                                    <td><a href="registered-students-by-course.php?id=<?= $key; ?>"><?= $course; ?></a></td>
                                                </tr>
                                        <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <script src="js/vendor.min.js"></script>
    <script src="js/elephant.min.js"></script>
    <script src="js/application.min.js"></script>
    <script src="js/demo.min.js"></script>
    <script src="js/sweetalert.min.js" type="text/javascript"></script>
    <script src="delete/js/student.js" type="text/javascript"></script>
</body>

</html>