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
    <title>Edit Course Registration Details</title>
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
    <link href="css/sweetalert.css" rel="stylesheet" type="text/css" />
    <style>
        .demo-form-wrapper {
            padding-bottom: 25px;
            padding-top: 25px;
        }

        #chbCourse {
            margin-right: 10px;
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
                            <form class="form form-horizontal" id="form">
                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="">Full Name</label>
                                    <div class="col-sm-10">
                                        <input id="txtFullName" name="txtFullName" class="form-control" type="text" value="<?php echo $REG->full_name ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="">Email Address </label>
                                    <div class="col-sm-10">
                                        <input id="txtEmail" name="txtEmail" class="form-control" type="text" value="<?php echo $REG->email ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="">Address</label>
                                    <div class="col-sm-10">
                                        <input id="txtAddress" name="txtAddress" class="form-control" type="text" value="<?php echo $REG->address ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="">District</label>
                                    <div class="col-sm-10">
                                        <input id="txtDistrict" name="txtDistrict" class="form-control" type="text" value="<?php echo $REG->district ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="">City</label>
                                    <div class="col-sm-10">
                                        <input id="txtCity" name="txtCity" class="form-control" type="text" value="<?php echo $REG->city ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="">T.P Number (Home)</label>
                                    <div class="col-sm-10">
                                        <input id="txtPhone" name="txtPhone" class="form-control" type="text" value="<?php echo $REG->phone_number ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="">Mobile Number</label>
                                    <div class="col-sm-10">
                                        <input id="txtMobile" name="txtMobile" class="form-control" type="text" value="<?php echo $REG->mobile_number ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="">School</label>
                                    <div class="col-sm-10">
                                        <input id="txtSchool" name="txtSchool" class="form-control" type="text" value="<?php echo $REG->school ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="">Grade</label>
                                    <div class="col-sm-10">
                                    
                                        <select id="txtGrade" name="txtGrade" class="form-control">

                                            <option value=""> Please Select Grade</option>
                                            <option value="Pre School" <?php if($REG->grade == 'Pre School') { echo 'selected'; } ?>>Pre School</option>
                                            <option value="1" <?php if($REG->grade == '1') { echo 'selected'; } ?>>1</option>
                                            <option value="2" <?php if($REG->grade == '2') { echo 'selected'; } ?>>2</option>
                                            <option value="3" <?php if($REG->grade == '3') { echo 'selected'; } ?>>3</option>
                                            <option value="4" <?php if($REG->grade == '4') { echo 'selected'; } ?>>4</option>
                                            <option value="5" <?php if($REG->grade == '5') { echo 'selected'; } ?>>5</option>
                                            <option value="6" <?php if($REG->grade == '6') { echo 'selected'; } ?>>6</option>
                                            <option value="7" <?php if($REG->grade == '7') { echo 'selected'; } ?>>7</option>
                                            <option value="8" <?php if($REG->grade == '8') { echo 'selected'; } ?>>8</option>
                                            <option value="9" <?php if($REG->grade == '9') { echo 'selected'; } ?>>9</option>
                                            <option value="10" <?php if($REG->grade == '10') { echo 'selected'; } ?>>10</option>
                                            <option value="11" <?php if($REG->grade == '11') { echo 'selected'; } ?>>11</option>
                                            <option value="12" <?php if($REG->grade == '12') { echo 'selected'; } ?>>12</option>
                                            <option value="13" <?php if($REG->grade == '13') { echo 'selected'; } ?>>13</option>
                                            <option value="After O/L" <?php if($REG->grade == 'After O/L') { echo 'selected'; } ?>>After O/L</option>
                                            <option value="After A/L" <?php if($REG->grade == 'After A/L') { echo 'selected'; } ?>>After A/L</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="">DOB</label>
                                    <div class="col-sm-10">
                                        <input id="txtDOB" name="txtDOB" class="form-control" type="text" value="<?php echo $REG->dob ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="">Age</label>
                                    <div class="col-sm-10">
                                        <input id="txtAge" name="txtAge" class="form-control" type="text" value="<?php echo $REG->age ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="">Course/s</label>
                                    <div class="col-sm-10">
                                        <?php
                                        $courses = Course::all();
                                        foreach ($courses as $key => $course) {
                                        ?>
                                            <input id="chbCourse" type="checkbox" name="chbCourse[]" class="course_<?= $course['id']; ?>" value="<?= $course['id']; ?>"><?= $course['name']; ?><br />
                                        <?php
                                        }
                                        ?>

                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for=""></label>
                                    <div class="col-sm-10">
                                        <div class="pull-center">
                                            <input id="id" name="id" class="form-control" type="hidden" value="<?php echo $id ?>">
                                            <button type="submit" id="btnSubmit" name="btnSubmit" class="btn btn-primary">SUBMIT</button>
                                        </div>
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
    <script src="js/sweetalert.min.js" type="text/javascript"></script>
    <script src="js/simple-lightbox.min.js" type="text/javascript"></script>
    <script src="ajax/js/course-registration.js" type="text/javascript"></script>

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