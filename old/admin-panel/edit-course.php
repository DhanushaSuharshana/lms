<!DOCTYPE html>

<?php
include '../class/include.php';
include './auth.php';

$id = '';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
}
$COURSE = new Course($id);
?>
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
                        <div class="row">

                            <div class="col-md-12">
                                <?php
                                if (isset($_GET['message'])) {

                                    $MESSAGE = new Message($_GET['message']);
                                ?>
                                    <div class="alert alert-<?php echo $MESSAGE->status; ?>" role="alert">
                                        <?php echo $MESSAGE->description; ?>
                                    </div>
                                <?php
                                }
                                ?>
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Edit Course</strong>
                                    </div>
                                    <div class="card-body">
                                        <form class="demo-form-wrapper card " method="post" style="padding: 50px" id="form-data">
                                            <div class="form form-horizontal">
                                                <div class="form-group">
                                                    <label class="col-sm-2 control-label " for="title" style="text-align: left">Course Name : </label>
                                                    <div class="col-sm-10">
                                                        <input id="name" name="name" class="form-control" type="text" value="<?= $COURSE->name; ?>">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-2 control-label " for="title" style="text-align: left">Reference Code : </label>
                                                    <div class="col-sm-10">
                                                        <input id="ref_code" name="ref_code" class="form-control" type="text" value="<?= $COURSE->ref_code; ?>">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-2 control-label " for="title" style="text-align: left">Batch : </label>
                                                    <div class="col-sm-10">
                                                        <input id="batch" name="batch" class="form-control" type="text" value="<?= $COURSE->batch; ?>">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="col-md-3"></div>
                                                    <div class="col-md-3"></div>
                                                    <div class="col-md-4"></div>
                                                    <div class="col-md-2">
                                                        <input type="hidden" name="update">
                                                        <input type="hidden" name="id" id="id" value="<?= $id; ?>">
                                                        <input type="submit" class="btn btn-primary btn-block" value="Update" id="update">
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
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
    <script src="ajax/js/course.js" type="text/javascript"></script>
</body>

</html>