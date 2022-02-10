<!DOCTYPE html>
<?php
include '../class/include.php';
include './auth.php';

$id = '';
$id = $_GET['id'];
$HELP_CENTER = new HelpCenter($id);
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Help Center - Ecollage.lk</title>
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
    <meta property="og:url" content="http://demo.madebytilde.com/elephant">
    <meta property="og:type" content="website">
    <meta property="og:image" content="../../elephant.html">
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
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
                                        <strong>Edit Help Center</strong>
                                    </div>
                                </div>
                                <form class="demo-form-wrapper card " method="post" style="padding: 50px" id="form-data">
                                    <div class="form form-horizontal">
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label " for="title" style="text-align: left"> Title : </label>
                                            <div class="col-sm-10">
                                                <input id="title" name="title" class="form-control" type="text" value="<?php echo $HELP_CENTER->title ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label " for="title" style="text-align: left"> Description: </label>
                                            <div class="col-sm-10">
                                                <textarea name="description" id="description" class="form-control  description" rows="5"><?php echo $HELP_CENTER->description ?></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label " for="title" style="text-align: left">To Whom: </label>
                                            <div class="col-sm-5">
                                                <select class="custom-select" id="to_whom" name="to_whom" required="">
                                                    <option value="">-- Select -- </option>
                                                    <?php
                                                    if ($HELP_CENTER->for_lecturer == 1) {
                                                    ?>
                                                        <option value="1" selected="selected">Lecturer</option>
                                                        <option value="0">Student</option>
                                                    <?php
                                                    } elseif ($HELP_CENTER->for_lecturer == 0) {
                                                    ?>
                                                        <option value="1">Lecturer</option>
                                                        <option value="0" selected="selected">Student</option>
                                                    <?php
                                                    }
                                                    ?>

                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-3"></div>
                                            <div class="col-md-3"></div>
                                            <div class="col-md-4"></div>
                                            <div class="col-md-2">
                                                <input type="hidden" name="update">
                                                <input type="hidden" name="id" value="<?php echo $id ?>">
                                                <input type="submit" class="btn btn-primary btn-block" value="update" id="update">
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

    <script src="js/jquery.min.js" type="text/javascript"></script>
    <script src="ajax/js/help-center.js" type="text/javascript"></script>
    <script src="js/vendor.min.js"></script>
    <script src="js/elephant.min.js"></script>
    <script src="js/application.min.js"></script>
    <script src="js/demo.min.js"></script>
    <script src="js/sweetalert.min.js" type="text/javascript"></script>

    <script src="tinymce/js/tinymce/tinymce.min.js" type="text/javascript"></script>
    <script>
        tinymce.init({
            selector: ".description",
            // ===========================================
            // INCLUDE THE PLUGIN
            // ===========================================

            plugins: [
                "advlist autolink lists link image charmap print preview anchor",
                "searchreplace visualblocks code fullscreen",
                "insertdatetime media table contextmenu paste"
            ],
            // ===========================================
            // PUT PLUGIN'S BUTTON on the toolbar
            // ===========================================

            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image jbimages",
            // ===========================================
            // SET RELATIVE_URLS to FALSE (This is required for images to display properly)
            // ===========================================

            relative_urls: false

        });
    </script>
</body>

</html>