<?php
include '../class/include.php';
include './auth.php';
$id = '';
$id = $_GET['id'];
$LECTURE_SUBJECT = new LectureSubject($id);
$EDUCATIN_SUBJECT = new EducationSubject($LECTURE_SUBJECT->subject_id);
$EDUCATION_SUB_CATEGORY = new EducationSubCategory($EDUCATIN_SUBJECT->sub_category);
$EDUCATION_CATEGORY = new EducationCategory($EDUCATION_SUB_CATEGORY->category);
?>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Ecollege.lk - Edit Subject  </title>
        <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
        <meta property="og:url" content="http://demo.madebytilde.com/elephant">
        <meta property="og:type" content="website"> >

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
        <link rel="stylesheet" href="css/profile.min.css">
        <link href="css/sweetalert.css" rel="stylesheet" type="text/css"/>
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" href="css/demo.min.css">
        <style>
            .profile-pic {
                position: relative;
                display: inline-block;
            }


            .fa-color{ 

                margin-top: -43px;
            }

        </style>
    </head>
    <body class="layout layout-header-fixed">
        <!--Top header -->
        <?php include './top-header.php'; ?>
        <!--End Top header -->
        <div class="layout-main">
            <?php include './navigation.php'; ?>

            <div class="layout-content">
                <div class="layout-content-body">
                    <div class="row gutter-xs">
                        <div class="col-xs-12">
                        </div>
                    </div>
                    <div class="row gutter-xs">
                        <div class="col-xs-12">
                            <div class="row">  

                                <div class="col-md-12"> 

                                    <div class="card">
                                        <div class="card-header"> 
                                            <strong>Edit Subjects</strong>
                                        </div>
                                    </div>
                                    <form class="demo-form-wrapper card " style="padding: 50px" id="form-data">
                                        <div class="form form-horizontal">
                                            <div class="form-group">
                                                <label class="col-sm-1 control-label " for="title" style="text-align: left">Category: </label>
                                                <div class="col-sm-11">
                                                    <select  class="custom-select" id="category" name="category" required="">
                                                        <?php
                                                        foreach (EducationCategory::all() as $education_category) {
                                                            if ($education_category['id'] == $EDUCATION_CATEGORY->id) {
                                                                ?>

                                                                <option value="<?php echo $education_category['id']; ?>" selected=""><?php echo $education_category['name']; ?></option>   
                                                            <?php } else {
                                                                ?>
                                                                <option value="<?php echo $education_category['id']; ?>" ><?php echo $education_category['name']; ?></option>   

                                                                <?php
                                                            }
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-1 control-label " for="title" style="text-align: left">Sub Category: </label>
                                                <div class="col-sm-11">
                                                    <select class="custom-select" name="sub_category" id="sub_category">
                                                        <?php
                                                        foreach (EducationSubCategory::all() as $education_sub_category) {
                                                            if ($education_sub_category['id'] == $EDUCATION_SUB_CATEGORY->id) {
                                                                ?>

                                                                <option value="<?php echo $education_sub_category['id']; ?>" selected=""><?php echo $education_sub_category['name']; ?></option>   
                                                            <?php } else {
                                                                ?>
                                                                <option value="<?php echo $education_sub_category['id']; ?>" ><?php echo $education_sub_category['name']; ?></option>   

                                                                <?php
                                                            }
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-1 control-label " for="title" style="text-align: left">  Subject: </label>
                                                <div class="col-sm-11">
                                                    <select class="custom-select" name="subject" id="subject">
                                                        <?php
                                                        foreach (EducationSubject::all() as $education_subject) {
                                                            if ($education_subject['id'] == $EDUCATIN_SUBJECT->id) {
                                                                ?>

                                                                <option value="<?php echo $education_subject['id']; ?>" selected=""><?php echo $education_subject['name']; ?></option>   
                                                            <?php } else {
                                                                ?>
                                                                <option value="<?php echo $education_subject['id']; ?>" ><?php echo $education_subject['name']; ?></option>   

                                                                <?php
                                                            }
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
                                                    <input type="hidden"  name="update"  >
                                                    <input type="hidden"  name="id"  value="<?php echo $id ?>" >
                                                    <input type="submit" class="btn btn-primary btn-block"   value="update" id="update" >
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
        <script src="js/vendor.min.js"></script>
        <script src="js/elephant.min.js"></script>
        <script src="js/application.min.js"></script>
        <script src="js/profile.min.js"></script>
        <script src="js/sweetalert.min.js" type="text/javascript"></script>
        <script src="js/demo.min.js"></script>
  
        <script src="ajax/js/category.js" type="text/javascript"></script>
        <script src="ajax/js/lecture_subject.js" type="text/javascript"></script>
        <script src="delete/js/lecture-subject.js" type="text/javascript"></script>
    </body>

</html>