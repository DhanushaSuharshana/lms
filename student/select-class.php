<!DOCTYPE html>
<?php
include '../class/include.php';
include_once(dirname(__FILE__) . '/auth.php');
$id = '';
$id = $_GET['id'];
$lecture = $_GET['lecture'];
?>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Select My Class - Ecollage.lk   </title>
        <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
        <meta property="og:url" content="http://demo.madebytilde.com/elephant">
        <meta property="og:type" content="website">
        <meta property="og:image" content="../../elephant.html">
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:site" content="@madebytilde">
        <meta name="twitter:creator" content="@madebytilde">
        <meta name="twitter:image" content="../../elephant.html">
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
        <link href="css/sweetalert.css" rel="stylesheet" type="text/css"/>

    </head>
    <body class="layout layout-header-fixed">
        <?php include './top-header.php'; ?>
        <div class="layout-main">
            <?php include './navigation.php'; ?>
            <div class="layout-content">
                <div class="layout-content-body">                    
                    <div class="row gutter-xs">
                        <?php
                        $STUDENT_SUBJECT = new StudentSubject(NULL);
                        $LECTURE_CLASS = new LectureClass(NULL);
                        if (count($LECTURE_CLASS->getLectureClassesBySubjectAndLecture($id, $lecture))) {
                            foreach ($LECTURE_CLASS->getLectureClassesBySubjectAndLecture($id, $lecture) as $lecture_class) {
                                $LECTURE = new Lecture($lecture_class['lecture']);
                                ?>

                                <div class="col-md-3">
                                    <div class="card ">
                                        <div class="card-image">

                                            <a class="card-link" href="#">
                                                <?php
                                                if (empty($LECTURE->image_name)) {
                                                    ?>
                                                    <img class="card-img-top img-responsive" src="img/member.jpg" alt=""<?php echo $LECTURE->full_name ?>" style="width: 100%">
                                                <?php } else { ?>
                                                    <img class="card-img-top img-responsive" src="../upload/lecture/profile/<?php echo $LECTURE->image_name ?>" alt="<?php echo $LECTURE->full_name ?>" style="width: 100%">
                                                <?php } ?>
                                            </a>

                                        </div>

                                        <div class="card-body">
                                            <h3 class="card-title text-center" style="margin-top: 10px"><?php echo $LECTURE->full_name ?></h3>

                                            <?php if ($LECTURE->education_level == 1) { ?> 
                                                <h6 class="card-subtitle text-center">Doctorate / ආචාර්ය උපාධිය</h6>
                                            <?php } else if ($LECTURE->education_level == 2) { ?> 
                                                <h6 class="card-subtitle text-center">Master's degree or Postgraduate / පශ්චාත් උපාධිය</h6>
                                            <?php } else if ($LECTURE->education_level == 3) { ?> 
                                                <h6 class="card-subtitle text-center">Bachelor's degree / උපාධිය</h6>
                                            <?php } else if ($LECTURE->education_level == 4) { ?>   
                                                <h6 class="card-subtitle text-center">Graduate Teacher / උපාධිධාරී ගුරු</h6>
                                            <?php } else if ($LECTURE->education_level == 5) { ?>   
                                                <h6 class="card-subtitle text-center">Trainee Teacher / පුහුණු ගුරු</h6>
                                            <?php } else if ($LECTURE->education_level == 6) { ?>   
                                                <h6 class="card-subtitle text-center">Diploma / ඩිප්ලෝමා</h6>
                                            <?php } else if ($LECTURE->education_level == 7) { ?>   
                                                <h6 class="card-subtitle text-center">Certificate / සහතිකපත්</h6>
                                            <?php } else if ($LECTURE->education_level == 8) { ?>   
                                                <h6 class="card-subtitle text-center">Professional / වෘත්තීමය</h6>
                                            <?php } else if ($LECTURE->education_level == 9) { ?>   
                                                <h6 class="card-subtitle text-center">Other / වෙනත්</h6>
                                            <?php } ?>    

                                            <h5 class="card-subtitle text-center text-success" style="margin-top: 10px"><?php echo $lecture_class['name'] ?></h5>
                                            <div class="row" style="margin-top: 10px;margin-bottom: 10px;">
                                                <div class="col-md-5" style="padding-right: 0px;">
                                                    <a class="link-muted " href="#">
                                                        <span class="icon icon-group icon-1x"></span> - <?php
                                                        $CLASS_TYPE = new ClassType($lecture_class['class_type']);
                                                        echo $CLASS_TYPE->name
                                                        ?>
                                                    </a>
                                                </div>
                                                <div class="col-md-7" style="padding: 0px;">
                                                    <a class="link-muted" href="#"  style="text-align: left !important">
                                                        <span class="icon icon-clock-o icon-1x"></span> -  <?php
                                                        echo $lecture_class['start_time'] . ' to ' . $lecture_class['end_time'];
//                                                         
                                                        ?>
                                                    </a>

                                                </div>
                                                <div class="col-md-5"  >
                                                    <a class="link-muted" href="#">
                                                        <span class="icon icon-calendar icon-1x"></span> - <?php echo $lecture_class['start_date'] ?> 
                                                    </a>
                                                </div>
                                                <div class="col-md-7" style="padding: 0px;">
                                                    <a class="link-muted" href="#"  >
                                                        <span class="icon icon-credit-card icon-1x"></span> -  Rs. <?php echo number_format($lecture_class['class_fee'], 2) ?>
                                                    </a>
                                                </div>
                                            </div>

                                            <center>
                                                <?php
                                                $STUDENT_REGISTRATION = new StudentRegistration(NULL);
                                                if (count($STUDENT_REGISTRATION->getRegistrationClassesByStudent($lecture_class['id'], $_SESSION['id'])) > 0) {
                                                    foreach ($STUDENT_REGISTRATION->getRegistrationClassesByStudent($lecture_class['id'], $_SESSION['id']) as $Registration_class) {
                                                        if ($Registration_class['class_id'] == $lecture_class['id']) {
                                                            ?>

                                                            <input type="submit" class="btn btn-success    "     value="Selected"  style="width: 40%">


                                                            <?php
                                                        }
                                                    }
                                                } else {
                                                    ?>
                                                    <input type="submit" class="btn btn-primary btn-block select "  data-id="<?php echo $lecture_class['id'] ?>" stu_id="<?php echo $_SESSION['id'] ?>" lecture_id="<?php echo $lecture_class['lecture'] ?>" sub_id="<?php echo $id ?>" value="Select"   name="create" style="width: 40%">

                                                    <?php
                                                }
                                                ?>
                                            </center> 
                                        </div>
                                    </div>
                                </div>


                                <?php
                            }
                        } else {
                            ?>
                            <div class="row" style="margin-top: 60px;">
                                <h4 class="text-center text-danger">No Lecture Classes Available..!</h4>
                            </div>

                        <?php } ?>
                    </div> 
                </div>
            </div>
            <?php include './footer.php'; ?>
        </div>

        <script src="js/vendor.min.js"></script>
        <script src="js/elephant.min.js"></script>
        <script src="js/application.min.js"></script>
        <script src="js/demo.min.js"></script>
        <script src="js/sweetalert.min.js" type="text/javascript"></script>
        <script src="ajax/js/check-login.js" type="text/javascript"></script>
        <script src="ajax/js/student_class_registration.js" type="text/javascript"></script>
    </body>

</html>