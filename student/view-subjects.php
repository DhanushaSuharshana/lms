<!DOCTYPE html>
<?php
include '../class/include.php';
include_once(dirname(__FILE__) . '/auth.php');
?>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>View Subject - Ecollage.lk   </title>
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
                        foreach ($STUDENT_SUBJECT->getSubjectsByStudent($_SESSION['id']) as $student_subject) {
                            $EDUCATIN_SUBJECT = new EducationSubject($student_subject['subject']);
                            $EDUCATIN_SUB_CAT = new EducationSubCategory($EDUCATIN_SUBJECT->sub_category);
                            ?>

                            <div class="col-md-3">
                                <div class="card ">
                                    <div class="card-image">

                                        <a class="card-link" href="select-lectures.php?id=<?php echo $student_subject['subject'] ?>">

                                            <img class="card-img-top img-responsive" src="img/color.jpg"   style="width: 100%">

                                        </a>

                                    </div>

                                    <div class="card-body">
                                        <a class="card-link" href="select-lectures.php?id=<?php echo $student_subject['subject'] ?>">
                                            <div class="overlay-content overlay-top text-center" style="margin-top: -160px;">
                                                <span class="label  " style="font-size: 22px;border-radius: 0px;text-align: center; padding: 0px"> 
                                                    <?php echo $EDUCATIN_SUBJECT->name;
                                                    ?>
                                                </span> 
                                            </div>
                                        </a>
                                        <h3 class="card-title text-center" style="margin-top: 10px"><?php echo $EDUCATIN_SUBJECT->name ?></h3>
                                        <h5 class="card-title text-center"><?php echo $EDUCATIN_SUB_CAT->name ?></h5>
                                        <h6 class="card-subtitle text-center"> <span class="icon icon-users icon-1x"></span> -  <b class="text-danger"> <?php
                                            $count = count(LectureClass::getLectureClassesBySubjectId($student_subject['subject']));
                                            echo $count;
                                            ?> </b>Available Lecture Classes</h6>

                                        <a class="card-link" href="select-lectures.php?id=<?php echo $student_subject['subject'] ?>">
                                            <center>
                                                <p class="btn btn-success btn-block" style="width: 80%" > Select Your Lectures
                                                </p>
                                            </center> 
                                        </a>
                                    </div>
                                </div>
                            </div>


                            <?php
                        }
                        ?>

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