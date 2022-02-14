<?php
include '../class/include.php';
$STUDENT = new Student(NULL);
$LAST_ID = $STUDENT->getLastStudentId();
$LAST_ID = $LAST_ID + 1;
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Ecollege.lk - Registration </title>
        <link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32">
        <link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16">
        <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,400italic,500,700">
        <link rel="stylesheet" href="css/vendor.min.css">
        <link rel="stylesheet" href="css/elephant.min.css">
        <link rel="stylesheet" href="css/preloader.css">
        <link rel="stylesheet" href="css/signup-2.min.css">
        <link href="css/jquery.formValid.css" rel="stylesheet" type="text/css" />
        <link href="css/sweetalert.css" rel="stylesheet" type="text/css" />
    </head>

    <body class="reg-bck someBlock">
        <div class="signup" style="max-width: 650px!important;">
            <div class="signup-body" id="register_form">
                <a class="signup-brand" href="../index.php">
                    <center>
                        <img class="img-responsive" src="img/logo.png" alt="Ecollege.lk" width="50%">
                    </center>

                </a>
                <p class="signup-heading">
                    <em>Student Registration</em>
                </p>
                <div class="signup-form">
                    <form method="POST" id="form">

                        <div class="row gutter-xs">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="first-name">Full Name</label>
                                    <input id="first_name" class="form-control" type="text" name="full_name" class="form-control" data-field="full_name" placeholder="Enter your Full Name">
                                    <div class="valid-message"></div>
                                </div>
                            </div>

                        </div>


                        <div class="row gutter-xs">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="nic_number">NIC Number</label>
                                    <input id="nic_number" class="form-control" type="text" name="nic_number" class="form-control" placeholder="Enter your Nic number">

                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="gender">Gender</label>
                                    <select id="form-control-21" class="custom-select" name="gender">
                                        <option value="" selected="selected"> -- Select your Gender -- </option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-sm-6" style="display:none;">
                                <div class="form-group">
                                    <label for="age">Age</label>
                                    <input id="age" class="form-control" type="text" name="age" class="form-control" data-field="age" placeholder="Enter your age" value="1">
                                    <div class="valid-message"></div>
                                </div>
                            </div>
                        </div>

                        <div class="row gutter-xs">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="phone">Phone Number</label>
                                    <input id="phone_number" class="form-control phone-inputmask" type="text" name="phone_number" class="form-control" data-field="phone_number" placeholder="Enter your phone number">
                                    <div class="valid-message"></div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="phone">Address</label>
                                    <input id="address" class="form-control" type="text" name="address" class="form-control" placeholder="Enter your address" data-field="address">
                                    <div class="valid-message"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row gutter-xs">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="gender">District </label>

                                    <select class="custom-select" id="district" name="district" required="">
                                        <option value="">-- Select your District -- </option>
                                        <?php
                                        foreach (District::all() as $district) {
                                            ?>
                                            <option value="<?php echo $district['id']; ?>"><?php echo $district['name']; ?></option>
                                            <?php
                                        }
                                        ?>
                                    </select>

                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="age">City</label>
                                    <select class="custom-select" name="city" id="city-bar">
                                        <option value="" selected="selected"> -- Select your city -- </option>

                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row gutter-xs">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input id="email" class="form-control" type="email" name="email" data-field="email" placeholder="Enter your email">
                                    <div class="valid-message"></div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="student_id">Student ID</label>
                                    <input id="student_id" class="form-control" type="text" name="student_id" data-field="student_id" value="<?php echo 'STU000' . $LAST_ID ?>" readonly="">
                                    <div class="valid-message"></div>
                                </div>
                            </div>
                        </div>

                        <div class="row gutter-xs">

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="password" class="control-label">Password</label>
                                    <!--<div class="input-group">-->
                                    <input id="password" class="form-control" type="password" name="password" id="labelPassword" data-field="password" placeholder="Enter your Password">
                                    <div class="valid-message"></div>

                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="com_password" class="control-label">Confirm Password</label>
                                    <!--<div class="input-group">-->
                                    <input id="com_password" class="form-control" type="password" name="com_password" id="labelPassword" data-field="com_password" placeholder="Enter your Password again">
                                    <div class="valid-message"></div>

                                </div>
                            </div>
                        </div>
                        <div class="row" style="margin-bottom: 8px;">
                            <div class="form-group">
                                <div class="pull-left text-danger btn-padding font-size-new" id="message"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3"> </div>
                            <div class="col-md-6"> <button class="btn btn-primary btn-block" type="submit" id="next">Next</button> </div>
                            <div class="col-md-3">

                            </div>
                        </div>
                </div>

                <div class="signup-footer">
                    Already have an account? <a href="login.php">Log in</a>
                </div>
            </div>
            <div class="signup" style="max-width: 650px!important;display:none " id="agreement_form">
                <div class="signup-body">
                    <a class="signup-brand" href="../index.php">
                        <center>
                            <img class="img-responsive" src="img/logo.png" alt="Ecollege.lk">
                        </center>
                    </a>
                    <p class="signup-heading">
                        <em>Student Agreement</em>
                    </p>
                    <div class="signup-form" style="height: 500px;overflow-y: auto;">
                        <p style="font-size: 20px;text-align: center;"><u> සිසුන්ගේ එකගතා ගිවිසුම </u> </p>
                        <p style="font-size: 16px;text-align: justify;">
                            මෙහි ලියාපංදිචි සියළු ගුරුවරුන් හා දේශකයන් විසින් සත්‍ය තොරතුරු හා ලංකාවේ සම්මත විෂය නිර්දේශයන්ට අනුකූලව සකස් කරන ලද දේශන, හා නිබන්ධන ඉදිරිපත් කරන බවටත් එකග වීමෙන් අනතුරුව ලියාපදිංචි වී ඇතත් මා විසින් www.ecollege.lk හරහා ලබාගන්නා සියළු තොරතුරු, දේශන හා විෂය කරුණු මාගේ ගුරුවරයා විසින්ම ඉදිරිපත් කරන ලද ඒවා බව ද එම සියළු තොරතුරු, දේශන, නිබන්ධන හා විෂය කරුණු පිළිබදව www.ecollege.lk වෙබ් අඩවිය හෝ ecollege ආයතනය කිසිදු අධීක්ෂණයක් නොකරන බවද ඒවායේ සත්‍ය අස්‍යතාවය මා විසින්ම තහවුරු කර ගත යුතු බවත් දනිමි</p>
                        <p style="font-size: 16px;text-align: justify;">
                            මාගේ ගුරුවරයා www.ecollege.lk වෙබ් අඩවිය ඔස්සේ මා වෙත ලබාදෙන සේවාව සදහා මෙම www.ecollege.lk වෙබ් අඩවියේ සදහන් මාසික ගෙවීම ගෙවීමට මෙයින් බැදී සිටීන බැවින් සෑම මසකම එය මෙම www.ecollege.lk වෙබ් අඩවිය ඔස්සේම පමණක් ගෙවීමටත් එකග වේ.

                        </p>

                        <p style="font-size: 20px;text-align: center;"><u> Account Suspension and Termination</u></p>
                        <p style="font-size: 14px;text-align: justify;">
                            This section explains how you and www.ecollege.lk may terminate this relationship. Key updates:
                            Terminations. Our Terms now include more details about when we might need to terminate our Agreement with bad actors. We provide a greater commitment to give notice when we take such action and what you can do to appeal if you think we’ve got it wrong. We’ve also added instructions for you, if you decide you no longer want to use the Service.
                        </p>
                        <p style="font-size: 20px;text-align: center;"><u> Policies and Safety </u></p>
                        <p style="font-size: 14px;text-align: justify;">
                            When you use www.ecollege.lk, you join a community of people from all over the world. Every cool, new community feature on www.ecollege.lk involves a certain level of trust. Millions of users respect that trust and we trust you to be responsible too. Following the guidelines below helps to keep www.ecollege.lk learn for everyone.
                            You might not like everything you see on www.ecollege.lk. If you think content is inappropriate, use the flagging feature to submit it for review by our www.ecollege.lk staff. Our staff carefully reviews flagged content 24 hours a day, 7 days a week to determine whether there’s a violation of our Community Guidelines.
                        </p>
                        <p style="font-size: 20px;text-align: center;"><u> Copyright</u></p>

                        <p style="font-size: 14px;text-align: justify;">
                            Respect copyright. Only upload videos that you made or that you're authorized to use. This means don't upload videos you didn't make, or use content in your videos that someone else owns the copyright to, such as music tracks, snippets of copyrighted programs, or videos made by other users, without necessary authorizations. Visit our Copyright Center for more information.
                        </p>

                        <label class="custom-control custom-control-primary custom-checkbox" style="margin-bottom:20px;">
                            <input class="custom-control-input" type="checkbox" id="agreement">
                            <span class="custom-control-indicator" style="border-color: #ff0707!important;"></span>
                            <span class="custom-control-label" style="font-size: 16px;">Please Accept our <span style="color: #f7a033"> Agreement </span> Before you login </span>
                        </label>
                        <div class="row" style="margin:0px;">
                            <div class="col-md-4">
                                <button class="btn btn-primary btn-block" type="submit" id="black">Back</button>

                            </div>
                            <div class="col-md-4"> </div>
                            <div class="col-md-4">
                                <button class="btn btn-primary btn-block" type="submit" id="register">Sign up</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <script src="js/jquery.min.js" type="text/javascript"></script>
    <script src="js/vendor.min.js"></script>
    <script src="js/elephant.min.js"></script>
    <script src="js/signup-1.min.js"></script>
    <script src="js/jquery.formValid.js" type="text/javascript"></script>
    <script src="ajax/js/registration.js" type="text/javascript"></script>
    <script src="ajax/js/city.js" type="text/javascript"></script>
    <script src="js/sweetalert.min.js" type="text/javascript"></script>
    <script src="js/jquery.inputmask.bundle.min.js" type="text/javascript"></script>
    <script src="js/mask.init.js" type="text/javascript"></script>
    <script src="js/jquery.preloader.min.js" type="text/javascript"></script>
  
</body>

</html>