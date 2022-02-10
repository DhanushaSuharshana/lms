<!DOCTYPE html>
<?php
include './class/include.php';
$courses = Course::all();
?>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Ecollage.lk | Course Registration</title>
    <link rel="stylesheet" href="assets/libs/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/libs/material-design-iconic-font/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="assets/libs/jquery-ui/jquery-ui.min.css">
    <link rel="stylesheet" href="assets/libs/rslides/responsiveslides.css">
    <link rel="stylesheet" href="assets/libs/slick/slick.css">
    <link href="assets/css/sweetalert.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="assets/css/main.css">
    <link href="css/jquery.formValid.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Work+Sans:400,500,600%7CMontserrat:300,400,600%7CRaleway:300,400,400i,600%7COpen+Sans:400,400i%7CVarela+Round">
</head>

<body id="how-it-works" class="page course-registration-page">

    <?php include './header.php'; ?>

    <main>

        <div class="page-heading text-center">
            <div class="container">
                <h2>Course Registration Form</h2>
            </div>
        </div>
        <div class="container success">
            <div class="col-md-12">

                <form id="form" class="contact" method="post">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="demo-form-wrapper">
                                <div class="col-md-12">
                                    <label class="req">NAME</label>
                                    <input id="txtFullName" type="text" name="txtFullName" placeholder="Enter your full name">
                                    <div class="valid-message"></div>
                                </div>

                                <div class="col-md-12">
                                    <label class="req">E-MAIL ADDRESS</label>
                                    <input id="txtEmail" type="text" name="txtEmail" placeholder="Enter e-mail address">
                                    <div class="valid-message"></div>
                                </div>
                                <div class="col-md-12">
                                    <label class="req">ADDRESS</label>
                                    <input id="txtAddress" type="text" name="txtAddress" placeholder="Enter your address">
                                    <div class="valid-message"></div>
                                </div>
                                <div class="col-md-6">
                                    <label class="req">DISTRICT</label>
                                    <input id="txtDistrict" type="text" name="txtDistrict" placeholder="Enter district">
                                    <div class="valid-message"></div>
                                </div>
                                <div class="col-md-6">
                                    <label class="req">CITY</label>
                                    <input id="txtCity" type="text" name="txtCity" placeholder="Enter city">
                                    <div class="valid-message"></div>
                                </div>
                                <div class="col-md-6">
                                    <label class="">T.P. NUMBER (HOME)</label>
                                    <input id="txtPhone" type="text" name="txtPhone" placeholder="Enter telephone number">
                                    <div class="valid-message"></div>
                                </div>
                                <div class="col-md-6">
                                    <label class="req">MOBILE NUMBER</label>
                                    <input id="txtMobile" type="text" name="txtMobile" placeholder="Enter mobile number">
                                    <div class="valid-message"></div>
                                </div>
                                <div class="col-md-6">
                                    <label class="req">SCHOOL</label>
                                    <input id="txtSchool" type="text" name="txtSchool" placeholder="Enter school">
                                    <div class="valid-message"></div>
                                </div>
                                <div class="col-md-6">
                                    <label class="req">GRADE</label>
                                    <select id="txtGrade" name="txtGrade">
                                        <option value=""> Please Select Grade</option>
                                        <option value="Pre School">Pre School</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                        <option value="13">13</option>
                                        <option value="After O/L">After O/L</option>
                                        <option value="After A/L">After A/L</option>
                                    </select>
                                    <div class="valid-message"></div>
                                </div>
                                <div class="col-md-6">
                                    <label class="req">DATE OF BIRTH</label>
                                    <input id="txtDOB" type="text" name="txtDOB" placeholder="Enter date of birth (Ex:- yyyy-mm-dd)">
                                    <div class="valid-message"></div>
                                </div>
                                <div class="col-md-6">
                                    <label class="req">AGE</label>
                                    <input id="txtAge" type="text" name="txtAge" placeholder="Enter age">
                                    <div class="valid-message"></div>
                                </div>

                                <div class="col-md-12">
                                    <label>SELECT COURSE/S</label>
                                    <div class="col-md-6">
                                        <?php
                                        foreach ($courses as $key => $course) {
                                            if ($key % 2 == 0) {
                                        ?>
                                                <input id="chbCourse" type="checkbox" name="chbCourse[]" value="<?= $course['id']; ?>"><?= $course['name']; ?><br />
                                        <?php
                                            }
                                        }
                                        ?>
                                    </div>
                                    <div class="col-md-6">
                                        <?php
                                        foreach ($courses as $key => $course) {
                                            if ($key % 2 == 1) {
                                        ?>
                                                <input id="chbCourse" type="checkbox" name="chbCourse[]" value="<?= $course['id']; ?>"><?= $course['name']; ?><br />
                                        <?php
                                            }
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="text-center text-danger btn-padding font-size-new" id="message"></div>
                            </div>
                            <div class="  clearfix">
                                <div class="col-sm-4">
                                    <div class="pull-center">
                                        <button type="submit" id="btnSubmit" name="btnSubmit" class="greybutton">SUBMIT</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>


        </div>


        <div class="ready">
            <div class="container">
                <div class="row">
                    <a href="#" class="whitebutton">SIGN UP NOW</a>
                    <p>ONLINE LEARNING FROM EVERYWHERE</p>
                    <h4>Are you ready to start learning?</h4>
                </div>
            </div>
        </div>

    </main>

    <?php include './footer.php'; ?>

    <script src="assets/libs/jquery/jquery.js"></script>
    <script src="assets/libs/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/libs/rslides/responsiveslides.min.js"></script>
    <script src="assets/libs/jquery-ui/jquery-ui.min.js"></script>
    <script src="assets/libs/slick/slick.min.js"></script>
    <script src="assets/js/sweetalert.min.js" type="text/javascript"></script>
    <script src="assets/js/main.js"></script>
    <script src="js/jquery.formValid.js" type="text/javascript"></script>
    <script src="ajax/js/course-registration.js"></script>
</body>

</html>