<?php
include '../class/include.php';
include_once(dirname(__FILE__) . '/auth.php');
?>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Ecollege.lk - Verify Id  </title>
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

    </head>
    <body class="layout layout-header-fixed">
        <!--Top header -->



        <?php include './top-header.php'; ?>
        <!--End Top header -->
        <div class="layout-main">
            <?php include './disable-navigation.php'; ?>
            <div class="layout-content">
                <div class="profile">
                    <div class="profile-header">
                        <div class="profile-cover">
                            <div class="profile-container">
                                <div class="profile-card">
                                    <div class="profile-avetar">
                                        <?php
                                        if (empty($STUDENT->image_name)) {
                                            ?>
                                            <input type="image" src="img/member.jpg" width="128" height="128"  class="append_img profile-avetar-img " /><i class="fa fa-camera fa-lg fa-color "></i> 

                                        <?php } else { ?>
                                            <img   class="profile-avetar-img  append_img  "  width="128" height="128"   src="upload/student/profile/<?php echo $STUDENT->image_name ?>"  >  <i class="fa fa-camera fa-lg fa-color "></i> 
                                        <?php } ?>

                                    </div>
                                    <div class="profile-overview">
                                        <h1 class="profile-name"><?php echo $STUDENT->full_name ?></h1>
                                        <p style="margin: 0px 0 1px;">NIC Number : <?php echo $STUDENT->nic_number ?></p>
                                        <p style="margin: 0px 0 1px;">Email : <?php echo $STUDENT->email ?></p>
                                    </div>

                                </div> 
                            </div>
                        </div>
                    </div>
                    <div class="row"> 
                        <div class="col-md-2"></div>
                        <div class="col-md-8"> 
                            <img id="loading" src="https://www.vedantalimited.com/SiteAssets/Images/loading.gif" style="display: none;position: absolute;margin-top: 20%;margin-left: 37%;z-index: 9999;"/>

                            <form class="demo-form-wrapper card " style="padding: 50px" id="form-data">
                                <div class="form form-horizontal">
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="nic_front">NIC Front Image: </label>
                                        <div class="col-sm-9">
                                            <input id="nic_front" name="nic_front" class="form-control" type="file"   >
                                            <?php
                                            if (empty($STUDENT->nic_front)) {
                                                ?>
                                                <img    src="img/Nic_Front.jpg" class="append_nic_front_img nic-img"   >  

                                                <?php
                                            } else {
                                                ?>
                                                <img   class="append_nic_front_img nic-img"     src="upload/student/nic_card/front/thumb/<?php echo $STUDENT->nic_front ?>" >
                                            <?php } ?>
                                        </div>

                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="nic_back">NIC Back Image: </label>
                                        <div class="col-sm-9">
                                            <input  class="form-control"  id="nic_back" name="nic_back" type="file" value="<?php echo $STUDENT->nic_back ?>">
                                            <?php
                                            if (empty($STUDENT->nic_back)) {
                                                ?>
                                                <img    src="img/Nic_Back.jpg" class="append_nic_back_img nic-img "  >  

                                                <?php
                                            } else {
                                                ?>
                                                <img   class="append_nic_back_img nic-img"     src="upload/student/nic_card/back/thumb/<?php echo $STUDENT->nic_back ?>"  >  
                                            <?php } ?>

                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-3"></div> 
                                        <div class="col-md-3"></div> 
                                        <div class="col-md-3"></div> 
                                        <div class="col-md-3"> 
                                            <input type="hidden"  name="id" value="<?php echo $STUDENT->id ?>">
                                            <input type="hidden"  name="action" value="UPDATENICCARD" >
                                        <button class="btn btn-primary spinner spinner-inverse spinner-sm pull-right loading" type="button" disabled="disabled" style="display: none">Save changes</button>
                                            <input type="submit" class="btn btn-primary btn-block loading_2" type="submit" id="update_nic"   value="update" >
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                </div>
            </div>
        </div>
        <input type="hidden" value="<?php echo $_SESSION['id'] ?>" id="student_id">

        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/vendor.min.js"></script>
        <script src="js/elephant.min.js"></script>
        <script src="js/application.min.js"></script>
        <script src="js/profile.min.js"></script>
        <script src="js/sweetalert.min.js" type="text/javascript"></script>


        <script src="ajax/js/student.js" type="text/javascript"></script>
        <script src="ajax/js/check-login.js" type="text/javascript"></script>

    </body>

</html>