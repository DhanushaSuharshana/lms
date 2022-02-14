<?php
include '../class/include.php';
include_once(dirname(__FILE__) . '/auth.php');
?>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Ecollege.lk - Profile  </title>
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
        
        <link href="css/jm.spinner.css" rel="stylesheet" type="text/css"/>
        
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
        <div class="box"></div>
        <!--Top header -->
        <?php include './top-header.php'; ?>
        <!--End Top header -->
        <div class="layout-main">
            <?php include './navigation.php'; ?>
            <div class="layout-content">
                <div class="profile">
                    <div class="profile-header">
                        <div class="profile-cover">
                            <div class="profile-container">
                                <form id="form-data-profile">

                                    <div class="profile-card">
                                        <div class="profile-avetar ">

                                            <a href="#"data-toggle="modal" data-target="#infoModalAlert" >
                                                <?php
                                                if (empty($STUDENT->image_name)) {
                                                    ?>
                                                    <input type="image" src="img/member.jpg" width="128" height="128"  class="append_img profile-avetar-img " /> 

                                                <?php } else { ?>
                                                    <img   class="profile-avetar-img  append_img  "  width="128" height="128"   src="../upload/student/profile/<?php echo $STUDENT->image_name ?>"  >   
                                                <?php } ?>
                                            </a>
                                        </div>
                                        <div class="profile-overview"> 

                                            <label class="btn btn-primary file-upload-btn uploard_btn">
                                                Change Profile
                                                <input class="file-upload-input" type="file" id="change_profile" name="image_name" multiple="multiple">
                                            </label>
                                            <br>    
                                            <p style="margin: 0px 0 1px;">Student Name : <?php echo $STUDENT->full_name ?></p>
                                            <p style="margin: 0px 0 1px;">NIC Number : <?php echo $STUDENT->nic_number ?></p>
                                            <p style="margin: 0px 0 1px;">Email : <?php echo $STUDENT->email ?></p>
                                        </div>
                                    </div> 
                                    <input type="hidden"  name="id" value="<?php echo $STUDENT->id ?>">
                                    <input type="hidden"  name="action" value="CHANGEPROFILE">   
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="row"> 
                        <div class="col-md-2"></div>
                        <div class="col-md-8"> 
                            <form class="demo-form-wrapper card " style="padding: 50px" id="form-data">
                                <div class="form form-horizontal">
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="full_name">Student Name: </label>
                                        <div class="col-sm-9">
                                            <input id="full_name" name="full_name" class="form-control" type="text"  value="<?php echo $STUDENT->full_name ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="email">Student Id: </label>
                                        <div class="col-sm-9"> 
                                            <input  class="form-control" type="text" value="<?php echo $STUDENT->student_id ?>" readonly="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="email">Email: </label>
                                        <div class="col-sm-9">
                                            <input id="email" name="email" class="form-control" type="text" value="<?php echo $STUDENT->email ?>">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="nic_number">NIC Number: </label>
                                        <div class="col-sm-9">
                                            <input id="nic_number" name="nic_number" class="form-control" type="text" value="<?php echo $STUDENT->nic_number ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="form-control-1">Gender: </label>
                                        <div class="col-sm-9">
                                            <select id="form-control-21" class="custom-select" name="gender">
                                                <option value="" selected="selected"> -- Select your Gender -- </option>
                                                <?php
                                                if ($STUDENT->gender == 'Male') {
                                                    ?>
                                                    <option value="Male" selected="">Male</option>
                                                    <option value="Female">Female</option>   
                                                <?php } else { ?>
                                                    <option value="Male" >Male</option>
                                                    <option value="Female" selected="">Female</option>        
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="form-control-1">District: </label>
                                        <div class="col-sm-9">
                                            <select  class="custom-select" id="district" name="district" required="">
                                                <option value="">-- Select your District -- </option>
                                                <?php
                                                $CITY = new City($STUDENT->city);
                                                $DISTRICT = new District($CITY->district);
                                                foreach (District::all() as $district) {
                                                    if ($district['id'] == $DISTRICT->id) {
                                                        ?>
                                                        <option value="<?php echo $district['id']; ?>" selected=""><?php echo $district['name']; ?></option>   
                                                        <?php
                                                    } else {
                                                        ?> 
                                                        <option value="<?php echo $district['id']; ?>"       ><?php echo $district['name']; ?></option>   
                                                        <?php
                                                    }
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group" id="sub_category_show">
                                        <label class="col-sm-3 control-label" for="form-control-1">  City: </label>
                                        <div class="col-sm-9">
                                            <select class="custom-select" name="city" id="city-bar">
                                                <option value="<?php echo $STUDENT->city ?>" selected="selected"> <?php
                                                    $CITY = new City($STUDENT->city);
                                                    echo $CITY->name
                                                    ?> 
                                                </option> 
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="age">Age: </label>
                                        <div class="col-sm-9">
                                            <input id="age" name="age" class="form-control" type="text" value="<?php echo $STUDENT->age ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="phone_number">Phone Number: </label>
                                        <div class="col-sm-9">
                                            <input id="phone_number" name="phone_number" class="form-control" type="text" value="<?php echo $STUDENT->phone_number ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="address">Address: </label>
                                        <div class="col-sm-9">
                                            <input id="address" name="address" class="form-control" type="text" value="<?php echo $STUDENT->address ?>">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-3"> </div> 
                                        <div class="col-md-3">  </div> 
                                        <div class="col-md-3">  </div> 
                                        <div class="col-md-3"> 
                                            <input type="hidden"  name="id" value="<?php echo $STUDENT->id ?>"> 
                                            <input type="hidden"  name="action" value="UPDATE">                                     
                                            <input type="submit" class="btn btn-primary btn-block" type="submit" id="update"   value="update" >

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
        <script src="js/jm.spinner.js" type="text/javascript"></script>
        
        
        <script src="ajax/js/education_category.js" type="text/javascript"></script>
        <script src="ajax/js/student.js" type="text/javascript"></script>
        <script src="ajax/js/check-login.js" type="text/javascript"></script>
        <script src="ajax/js/city.js" type="text/javascript"></script>

    </body>

</html>