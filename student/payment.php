<?php
include '../class/include.php';
include_once(dirname(__FILE__) . '/auth.php');

$STUDENT = new Student($_SESSION['id']);
$id = '';
$id = $_GET['id'];
$STUDENT_REGISTRATION = new StudentRegistration($id);
date_default_timezone_set("Asia/Calcutta");
$today_time = date('Y-m-d H:i:A');
$today = date('Y-m-d');

$PAYMENT = new Payment(NULL);
$LASTID = $PAYMENT->getLastID() + 1;
$payment_id = $LASTID;

$id = '';
$id = $_GET['id'];
$STUDENT_REGISTRATION = new StudentRegistration($id);
$LECTURE_CLASS = new LectureClass($id);
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


                            <form method="post" class="demo-form-wrapper card " action="https://www.payhere.lk/pay/checkout" style="padding: 50px" id="form-data">  
<!--                          <form method="post" class="demo-form-wrapper card " action="https://sandbox.payhere.lk/pay/checkout" style="padding: 50px" id="form-data">   -->

                                <!--  Sand box-->
<!--                             <input type="hidden" name="merchant_id" value="1213021">   -->
                                <!--live-->
                                <input type="hidden" name="merchant_id" value="215525">    


                                <!-- Replace your Merchant ID -->
                                <input type="hidden" name="return_url" value="http://ecollege.lk/student/payment-success.php">
                                <input type="hidden" name="cancel_url" value="http://ecollege.lk/student/payment-cancel.php">
                                <input type="hidden" name="notify_url" value="http://ecollege.lk/student/notify.php">

                                <div class="form form-horizontal">

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="full_name">Student Name: </label>
                                        <div class="col-sm-10">
                                            <input id="full_name" name="first_name" class="form-control" type="text"  value="<?php echo $STUDENT->full_name ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="email">Student Id: </label>
                                        <div class="col-sm-10"> 
                                            <input  class="form-control" type="text" value="<?php echo $STUDENT->student_id ?>" readonly="">
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="nic_number">NIC Number: </label>
                                        <div class="col-sm-10">
                                            <input id="nic_number" name="nic_number" class="form-control" type="text" value="<?php echo $STUDENT->nic_number ?>">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="nic_number">Email: </label>
                                        <div class="col-sm-10">
                                            <input type="text" name="email" value="<?php echo $STUDENT->email ?>" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="nic_number">Phone Number: </label>
                                        <div class="col-sm-10">
                                            <input type="text" name="phone" value="<?php echo $STUDENT->phone_number ?>"  class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="nic_number">City: </label>
                                        <div class="col-sm-10">
                                            <input type="text" name="city" value="<?php
                                            $CITY = new City($STUDENT->city);
                                            echo $CITY->name
                                            ?>"  class="form-control"> 
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="nic_number">How Many days Pay</label>
                                        <div class="col-sm-10">
                                            <select class="form-control" required="" id="modules" name="number_of_date"> 
                                                <?php
                                                for ($x = 1; $x <= $LECTURE_CLASS->modules; $x++) {
                                                    if ($x == 1) {
                                                        ?>
                                                        <option value="<?php echo $x ?>" selected=""><?php echo $x ?>   </option>
                                                    <?php } else { ?>
                                                        <option value="<?php echo $x ?>"><?php echo $x ?>   </option>
                                                        <?php
                                                    }
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>  
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="nic_number">Class Fee</label>
                                        <div class="col-sm-10">
                                            <input type="text"  name="amount" id="amount" value="<?php echo $LECTURE_CLASS->class_fee ?>" class="form-control" readonly="">
                                        </div>
                                    </div>  

                                    <input type="hidden" name="order_id" value="<?php echo $payment_id ?>">
                                    <input type="hidden" name="items" value="ecollage.lk">  
                                    <input type="hidden" name="currency" value="LKR">
                                    <input type="hidden"   id="class_free" value="<?php echo $LECTURE_CLASS->class_fee ?>"  >


                                    <input type="hidden" name="last_name" value="Perera"> 
                                    <input type="hidden" name="address" value="No.1, Galle Road">
                                    <input type="hidden" name="country" value="Sri Lanka"> 
                                    <input type="hidden" name="student_id" value="<?php echo $STUDENT->id ?>">
                                    <input type="hidden" name="class_id" value="<?php echo $LECTURE_CLASS->id ?>">
                                    <input type="hidden" name="date" value="<?php echo $today ?>"> 

                                    <button type="submit" id="pay" class="btn btn-warning btn-block" style="width: 20%;float: right">Pay Now</button>
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

        <script src="ajax/js/payment.js" type="text/javascript"></script>


    </body>

</html>