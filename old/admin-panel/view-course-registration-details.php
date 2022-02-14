<!DOCTYPE html>

<?php
include '../class/include.php';
$id = '';
$id = $_GET['id'];
$REG = new CourseRegistration($id);
$courses = StudentCourse::getRegisteredCoursesByID($id);
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>View Course Registration Details</title>
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
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
    <link href="css/simplelightbox.min.css" rel="stylesheet" type="text/css" />
    <style>
        .demo-form-wrapper {
            padding-bottom: 25px;
            padding-top: 25px;
        }
    </style>

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
                <!--                    <div class="row">
                                            <div class="col-md-12">
                                                <p><small>In addition to the basic styling that Bootstrap offers for every element of a form, we have expanded this styling with custom <code>selects</code>, <code>checkboxes</code>, <code>radios</code>, <code>switches</code> and a few additional classes.<span class="nowrap">Please see <a href="toggles.html">Toggles page</a></span>.</small></p>
                                            </div>
                                        </div>-->
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-10 card">
                        <div class="demo-form-wrapper">
                            <form class="form form-horizontal">
                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="">Registered At</label>
                                    <div class="col-sm-10">
                                        <input id="form-control-4" class="form-control" type="text" value="<?php echo $REG->created_at ?>" disabled="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="">Full Name</label>
                                    <div class="col-sm-10">
                                        <input id="form-control-4" class="form-control" type="text" value="<?php echo $REG->full_name ?>" disabled="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="">Email Address </label>
                                    <div class="col-sm-10">
                                        <input id="form-control-4" class="form-control" type="text" value="<?php echo $REG->email ?>" disabled="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="">Address</label>
                                    <div class="col-sm-10">
                                        <input id="form-control-4" class="form-control" type="text" value="<?php echo $REG->address ?>" disabled="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="">District</label>
                                    <div class="col-sm-10">
                                        <input id="form-control-4" class="form-control" type="text" value="<?php echo $REG->district ?>" disabled="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="">City</label>
                                    <div class="col-sm-10">
                                        <input id="form-control-4" class="form-control" type="text" value="<?php echo $REG->city ?>" disabled="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="">T.P Number (Home)</label>
                                    <div class="col-sm-10">
                                        <input id="form-control-4" class="form-control" type="text" value="<?php echo $REG->phone_number ?>" disabled="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="">Mobile Number</label>
                                    <div class="col-sm-10">
                                        <input id="form-control-4" class="form-control" type="text" value="<?php echo $REG->mobile_number ?>" disabled="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="">School</label>
                                    <div class="col-sm-10">
                                        <input id="form-control-4" class="form-control" type="text" value="<?php echo $REG->school ?>" disabled="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="">Grade</label>
                                    <div class="col-sm-10">
                                        <input id="form-control-4" class="form-control" type="text" value="<?php echo $REG->grade ?>" disabled="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="">DOB</label>
                                    <div class="col-sm-10">
                                        <input id="form-control-4" class="form-control" type="text" value="<?php echo $REG->dob ?>" disabled="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="">Age</label>
                                    <div class="col-sm-10">
                                        <input id="form-control-4" class="form-control" type="text" value="<?php echo $REG->age ?>" disabled="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="">Course/s</label>
                                    <div class="col-sm-10">
                                        <?php
                                        foreach ($courses as $course) {
                                            $COURSE = new Course($course['course']);
                                        ?>
                                            <input id="form-control-4" class="form-control" type="text" value="<?= $course['ref_no'] . ' - ' . $COURSE->name; ?>" disabled=""><br />
                                        <?php
                                        }
                                        ?>

                                    </div>
                                </div>


                            </form>
                        </div>

                    </div>
                    <div class="col-md-1"></div>
                </div>

            </div>
        </div>


    </div>

    <script src="js/vendor.min.js"></script>
    <script src="js/elephant.min.js"></script>
    <script src="js/application.min.js"></script>
    <script src="js/demo.min.js"></script>
    <script src="js/simple-lightbox.min.js" type="text/javascript"></script>


    <script>
        $(function() {
            var $gallery = $('.gallery a').simpleLightbox();

            $gallery.on('show.simplelightbox', function() {
                    console.log('Requested for showing');
                })
                .on('shown.simplelightbox', function() {
                    console.log('Shown');
                })
                .on('close.simplelightbox', function() {
                    console.log('Requested for closing');
                })
                .on('closed.simplelightbox', function() {
                    console.log('Closed');
                })
                .on('change.simplelightbox', function() {
                    console.log('Requested for change');
                })
                .on('next.simplelightbox', function() {
                    console.log('Requested for next');
                })
                .on('prev.simplelightbox', function() {
                    console.log('Requested for prev');
                })
                .on('nextImageLoaded.simplelightbox', function() {
                    console.log('Next image loaded');
                })
                .on('prevImageLoaded.simplelightbox', function() {
                    console.log('Prev image loaded');
                })
                .on('changed.simplelightbox', function() {
                    console.log('Image changed');
                })
                .on('nextDone.simplelightbox', function() {
                    console.log('Image changed to next');
                })
                .on('prevDone.simplelightbox', function() {
                    console.log('Image changed to prev');
                })
                .on('error.simplelightbox', function(e) {
                    console.log('No image found, go to the next/prev');
                    console.log(e);
                });
        });
    </script>
</body>

</html>