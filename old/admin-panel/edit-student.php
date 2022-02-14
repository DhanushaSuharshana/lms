<!DOCTYPE html>

<?php
include '../class/include.php';
include './auth.php';

$id = '';
$id = $_GET['id'];
$STUDENT = new Student($id);
?>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>View Student</title>
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
        <link href="css/sweetalert.css" rel="stylesheet" type="text/css"/>
        <style>.demo-form-wrapper {
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
                    <div class="row">
                        <div class="col-md-12 ">
                            <div class="demo-form-wrapper card">
                                <form class="form form-horizontal" id="form-data">
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="">Student ID</label>
                                        <div class="col-sm-8">
                                            <input id="form-control-4" class="form-control" type="text" value="<?php echo $STUDENT->student_id ?>" disabled="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="full_name">Full Name </label>
                                        <div class="col-sm-8">
                                            <input id="full_name" name="full_name" class="form-control" type="text" value="<?php echo $STUDENT->full_name ?>"  >
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="">Email</label>
                                        <div class="col-sm-8">
                                            <input id="email" name="email" class="form-control" type="text" value="<?php echo $STUDENT->email ?>"  >
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="">NIC Number</label>
                                        <div class="col-sm-8">
                                            <input id="nic_number" name="nic_number" class="form-control" type="text" value="<?php echo $STUDENT->nic_number ?>"  >
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="">Gender</label>
                                        <div class="col-sm-8">
                                            <select class="form-control" name="gender">

                                                <?php
                                                if ($STUDENT->gender == "Male") {
                                                    ?>
                                                    <option value=""> -- Please select option --  </option>
                                                    <option value="Male" selected="">  Male </option> 
                                                    <option value="Female"> Female </option>
                                                <?php } else { ?>
                                                    <option value=""> -- Please select option --  </option>
                                                    <option value="Male" >  Male </option> 
                                                    <option value="Female" selected=""> Female </option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="">Age</label>
                                        <div class="col-sm-8">
                                            <input id="age" name="age" class="form-control" type="number" min="0" svalue="<?php echo $STUDENT->age ?>"  >
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="">Phone Number</label>
                                        <div class="col-sm-8">
                                            <input id="phone_number" name="phone_number" class="form-control" type="text" value="<?php echo $STUDENT->phone_number ?>"  >
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="">Address</label>
                                        <div class="col-sm-8">
                                            <input id="address" name="address" class="form-control" type="text" value="<?php echo $STUDENT->address ?>"  >
                                        </div>
                                    </div>
                                     
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="">Profile Image</label>
                                        <div class="col-sm-10">
                                            <?php
                                            if (empty($STUDENT->image_name)) {
                                                ?>
                                            <img src="img/3002121059.jpg" width="128px"class="img-thumbnail">
                                            <?php } else { ?>
                                                <img src="../upload/student/profile/<?php echo $STUDENT->image_name ?>" class="img-thumbnail">

                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="demo-form-wrapper"> 
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label" for="">Activate</label>
                                            <div class="col-sm-8">
                                                <label class="switch switch-primary">
                                                    <input class="switch-input" type="checkbox"  <?php
                                                    if ($STUDENT->status == 1) {
                                                        echo 'checked';
                                                    }
                                                    ?> name="status" value="1" id="rememberme" />

                                                    <span class="switch-track"></span>
                                                    <span class="switch-thumb"></span>
                                                </label>
                                            </div>
                                        </div> 
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for=""> </label>
                                        <div class="col-sm-2">
                                            <input type="hidden" name="id" value="<?php echo $STUDENT->id ?>">
                                            <input type="hidden"  name="action" value="UPDATE">
                                            <button class="btn btn-primary btn-block" type="submit" id="update">UPDATE</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--            <div class="layout-footer">
                            <div class="layout-footer-body">
                                <small class="version">Version 1.4.0</small>
                                <small class="copyright">2017 &copy; Elephant <a href="http://madebytilde.com/">Made by Tilde</a></small>
                            </div>
                        </div>-->
        </div>
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/vendor.min.js"></script>
        <script src="js/elephant.min.js"></script>
        <script src="js/application.min.js"></script>
        <script src="js/demo.min.js"></script> 
        <script src="js/sweetalert.min.js" type="text/javascript"></script>
        <script src="ajax/js/student.js" type="text/javascript"></script>


    </body>

</html>