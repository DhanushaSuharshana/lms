<?php
include '../class/include.php';
include './auth.php';
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
                                <form id="form-data" >

                                    <div class="profile-card">
                                        <div class="profile-avetar ">

                                            <a href="#"data-toggle="modal" data-target="#infoModalAlert" >
                                                <?php
                                                if (empty($LECTURE->image_name)) {
                                                    ?>
                                                    <input type="image" src="img/member.jpg" width="128" height="128"  class="append_img profile-avetar-img " /> 

                                                <?php } else { ?>
                                                    <img   class="profile-avetar-img  append_img  "  width="128" height="128"   src="../upload/lecture/profile/<?php echo $LECTURE->image_name ?>"  >   
                                                <?php } ?>
                                            </a>
                                        </div>
                                        <div class="profile-overview"> 

                                            <label class="btn btn-primary file-upload-btn uploard_btn">
                                                Change Profile
                                                <input class="file-upload-input" type="file" id="change_profile" name="image_name" multiple="multiple">
                                            </label>
                                            <br>    
                                            <p style="margin: 0px 0 1px;">Lecture Name : <?php echo $LECTURE->full_name ?></p>
                                            <p style="margin: 0px 0 1px;">NIC Number : <?php echo $LECTURE->nic_number ?></p>
                                            <p style="margin: 0px 0 1px;">Email : <?php echo $LECTURE->email ?></p>
                                        </div>
                                    </div> 
                                    <input type="hidden"  name="id" value="<?php echo $LECTURE->id ?>">
                                    <input type="hidden"  name="action" value="CHANGEPROFILE">   
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="row"> 
                        <div class="col-md-2"></div>
                        <div class="col-md-8"> 
                            <form class="demo-form-wrapper card " style="padding: 50px" id="form-data-profile">
                                <div class="form form-horizontal">
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="full_name">Full Name: </label>
                                        <div class="col-sm-9">
                                            <input id="full_name" name="full_name" class="form-control" type="text"  value="<?php echo $LECTURE->full_name ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="date_of_birth">Date of Birth: </label>
                                        <div class="col-sm-9">
                                            <input id="date_of_birth" name="date_of_birth" class="form-control" type="text"  value="<?php echo $LECTURE->birth_day ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="age"> Age: </label>
                                        <div class="col-sm-9">
                                            <input id="age" name="age" class="form-control" type="text" value="<?php echo $LECTURE->age ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="age"> NIC / Passport no: </label>
                                        <div class="col-sm-9">
                                            <input id="nic_number" name="nic_number" class="form-control" type="text" value="<?php echo $LECTURE->nic_number ?>">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="address">Address: </label>
                                        <div class="col-sm-9">
                                            <input id="address" name="address" class="form-control" type="text" value="<?php echo $LECTURE->address ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="email">District: </label>
                                        <div class="col-sm-9">
                                            <select  class="custom-select" id="district" name="district" required="">
                                                <option value="">-- Select your District -- </option>
                                                <?php
                                                foreach (District::all() as $district) {
                                                    if ($district['id'] == $LECTURE->district) {
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

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="city">City: </label>
                                        <div class="col-sm-9">
                                            <select class="custom-select" name="city" id="city-bar">
                                                <option value="<?php echo $LECTURE->city ?>" selected="selected"> <?php
                                                    $CITY = new City($LECTURE->city);
                                                    echo $CITY->name
                                                    ?> 
                                                </option> 
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="phone_number">Phone Number: </label>
                                        <div class="col-sm-9">
                                            <input id="phone_number" name="phone_number" class="form-control" type="text" value="<?php echo $LECTURE->phone_number ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="email">Email: </label>
                                        <div class="col-sm-9">
                                            <input id="email" name="email" class="form-control" type="text" value="<?php echo $LECTURE->email ?>">
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="email">Mediums: </label>

                                        <div class="col-sm-7" style="margin-right: 0px!important;">

                                            <?php
                                            $medium = unserialize($LECTURE->mediums);
                                            ?>
                                            <label class="custom-control custom-control-primary custom-checkbox" style="margin-left: 5px!important;">
                                                <input class="custom-control-input" type="checkbox" name="mediums[]" value="1" <?php
                                                if (in_array("1", $medium)) {
                                                    echo 'checked';
                                                }
                                                ?>>
                                                <span class="custom-control-indicator"></span>
                                                <span class="custom-control-label">Sinhala </span>
                                            </label>
                                            <label class="custom-control custom-control-primary custom-checkbox" style="margin-left: 5px!important;">
                                                <input class="custom-control-input" type="checkbox" name="mediums[]" value="2" <?php
                                                if (in_array("1", $medium)) {
                                                    echo 'checked';
                                                }
                                                ?>>
                                                <span class="custom-control-indicator"></span>
                                                <span class="custom-control-label">Tamil </span>
                                            </label>
                                            <label class="custom-control custom-control-primary custom-checkbox" style="margin-left:0px!important;">
                                                <input class="custom-control-input" type="checkbox" name="mediums[]" value="3"  <?php
                                                if (in_array("3", $medium)) {
                                                    echo 'checked';
                                                }
                                                ?>>
                                                <span class="custom-control-indicator"></span>
                                                <span class="custom-control-label">English </span>
                                            </label>
                                            <label class="custom-control custom-control-primary custom-checkbox" style="margin-left: 5px!important;">
                                                <input class="custom-control-input" type="checkbox" name="mediums[]" value="4"  <?php
                                                if (in_array("4", $medium)) {
                                                    echo 'checked';
                                                }
                                                ?>>
                                                <span class="custom-control-indicator"></span>
                                                <span class="custom-control-label">Arabic </span>
                                            </label>
                                            <label class="custom-control custom-control-primary custom-checkbox" style="margin-left: 5px!important;">
                                                <input class="custom-control-input" type="checkbox" name="mediums[]" value="5"   <?php
                                                if (in_array("5", $medium)) {
                                                    echo 'checked';
                                                }
                                                ?>>
                                                <span class="custom-control-indicator"></span>
                                                <span class="custom-control-label">Hindi </span>
                                            </label>

                                            <label class="custom-control custom-control-primary custom-checkbox" style="margin-left:0px!important;">
                                                <input class="custom-control-input" type="checkbox" name="mediums[]" value="6"  id="other" <?php
                                                if (in_array("6", $medium)) {
                                                    echo 'checked';
                                                }
                                                ?>>
                                                <span class="custom-control-indicator"></span>
                                                <span class="custom-control-label">Other </span>
                                            </label> 
                                        </div>
                                        <?php
                                        if (in_array("6", $medium)) {
                                            ?> 
                                        <div class="col-sm-2" style="padding-left: 0px;" id="other_bar">
                                                <input id="other_val" name="mediums[]" class="form-control" type="text" value="<?php echo end($medium); ?>">
                                            </div>
                                            <?php
                                        }
                                        ?>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="grade">Grade: </label>
                                        <div class="col-sm-9">
                                            <input id="grade" name="grade" class="form-control" type="text" value="<?php echo $LECTURE->grade ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="grade">School: </label>
                                        <div class="col-sm-9">
                                            <input id="school" name="school" class="form-control" type="text" value="<?php echo $LECTURE->school ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="grade">Collage / Tuition Class: </label>
                                        <div class="col-sm-9">
                                            <input id="collage" name="collage" class="form-control" type="text" value="<?php echo $LECTURE->collage ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="grade">Educated Level :</label>
                                        <div class="col-sm-9">
                                            <select id="form-control-21" class="custom-select" name="education_level">
                                                <option value="" selected="selected"> -- Select your Educated Level -- </option>
                                                <?php if ($LECTURE->education_level == 1) { ?>                
                                                    <option value="1" selected="">Doctorate / ආචාර්ය උපාධිය</option>
                                                    <option value="2">Master's degree or Postgraduate / පශ්චාත් උපාධිය</option>
                                                    <option value="3">Bachelor's degree / උපාධිය</option>
                                                    <option value="4">Graduate Teacher / උපාධිධාරී ගුරු</option>
                                                    <option value="5">Trainee Teacher / පුහුණු ගුරු</option>
                                                    <option value="6">Diploma / ඩිප්ලෝමා</option>
                                                    <option value="7">Certificate / සහතිකපත්</option>
                                                    <option value="8">Professional / වෘත්තීමය</option>
                                                    <option value="9">Other / වෙනත්</option>
                                                <?php } ?>
                                                <?php if ($LECTURE->education_level == 2) { ?>                
                                                    <option value="1">Doctorate / ආචාර්ය උපාධිය</option>
                                                    <option value="2" selected="">Master's degree or Postgraduate / පශ්චාත් උපාධිය</option>
                                                    <option value="3">Bachelor's degree / උපාධිය</option>
                                                    <option value="4">Graduate Teacher / උපාධිධාරී ගුරු</option>
                                                    <option value="5">Trainee Teacher / පුහුණු ගුරු</option>
                                                    <option value="6">Diploma / ඩිප්ලෝමා</option>
                                                    <option value="7">Certificate / සහතිකපත්</option>
                                                    <option value="8">Professional / වෘත්තීමය</option>
                                                    <option value="9">Other / වෙනත්</option>
                                                <?php } ?>
                                                <?php if ($LECTURE->education_level == 3) { ?>                
                                                    <option value="1">Doctorate / ආචාර්ය උපාධිය</option>
                                                    <option value="2">Master's degree or Postgraduate / පශ්චාත් උපාධිය</option>
                                                    <option value="3"  selected="">Bachelor's degree / උපාධිය</option>
                                                    <option value="4">Graduate Teacher / උපාධිධාරී ගුරු</option>
                                                    <option value="5">Trainee Teacher / පුහුණු ගුරු</option>
                                                    <option value="6">Diploma / ඩිප්ලෝමා</option>
                                                    <option value="7">Certificate / සහතිකපත්</option>
                                                    <option value="8">Professional / වෘත්තීමය</option>
                                                    <option value="9">Other / වෙනත්</option>
                                                <?php } ?>
                                                <?php if ($LECTURE->education_level == 4) { ?>                
                                                    <option value="1">Doctorate / ආචාර්ය උපාධිය</option>
                                                    <option value="2">Master's degree or Postgraduate / පශ්චාත් උපාධිය</option>
                                                    <option value="3">Bachelor's degree / උපාධිය</option>
                                                    <option value="4" selected="">Graduate Teacher / උපාධිධාරී ගුරු</option>
                                                    <option value="5">Trainee Teacher / පුහුණු ගුරු</option>
                                                    <option value="6">Diploma / ඩිප්ලෝමා</option>
                                                    <option value="7">Certificate / සහතිකපත්</option>
                                                    <option value="8">Professional / වෘත්තීමය</option>
                                                    <option value="9">Other / වෙනත්</option>
                                                <?php } ?>
                                                <?php if ($LECTURE->education_level == 5) { ?>                
                                                    <option value="1">Doctorate / ආචාර්ය උපාධිය</option>
                                                    <option value="2">Master's degree or Postgraduate / පශ්චාත් උපාධිය</option>
                                                    <option value="3">Bachelor's degree / උපාධිය</option>
                                                    <option value="4">Graduate Teacher / උපාධිධාරී ගුරු</option>
                                                    <option value="5"  selected="">Trainee Teacher / පුහුණු ගුරු</option>
                                                    <option value="6">Diploma / ඩිප්ලෝමා</option>
                                                    <option value="7">Certificate / සහතිකපත්</option>
                                                    <option value="8">Professional / වෘත්තීමය</option>
                                                    <option value="9">Other / වෙනත්</option>
                                                <?php } ?>
                                                <?php if ($LECTURE->education_level == 6) { ?>                
                                                    <option value="1">Doctorate / ආචාර්ය උපාධිය</option>
                                                    <option value="2">Master's degree or Postgraduate / පශ්චාත් උපාධිය</option>
                                                    <option value="3">Bachelor's degree / උපාධිය</option>
                                                    <option value="4">Graduate Teacher / උපාධිධාරී ගුරු</option>
                                                    <option value="5">Trainee Teacher / පුහුණු ගුරු</option>
                                                    <option value="6" selected="">Diploma / ඩිප්ලෝමා</option>
                                                    <option value="7">Certificate / සහතිකපත්</option>
                                                    <option value="8">Professional / වෘත්තීමය</option>
                                                    <option value="9">Other / වෙනත්</option>
                                                <?php } ?>
                                                <?php if ($LECTURE->education_level == 7) { ?>                
                                                    <option value="1">Doctorate / ආචාර්ය උපාධිය</option>
                                                    <option value="2">Master's degree or Postgraduate / පශ්චාත් උපාධිය</option>
                                                    <option value="3">Bachelor's degree / උපාධිය</option>
                                                    <option value="4">Graduate Teacher / උපාධිධාරී ගුරු</option>
                                                    <option value="5">Trainee Teacher / පුහුණු ගුරු</option>
                                                    <option value="6" >Diploma / ඩිප්ලෝමා</option>
                                                    <option value="7" selected="">Certificate / සහතිකපත්</option>
                                                    <option value="8">Professional / වෘත්තීමය</option>
                                                    <option value="9">Other / වෙනත්</option>
                                                <?php } ?>
                                                <?php if ($LECTURE->education_level == 8) { ?>                
                                                    <option value="1">Doctorate / ආචාර්ය උපාධිය</option>
                                                    <option value="2">Master's degree or Postgraduate / පශ්චාත් උපාධිය</option>
                                                    <option value="3">Bachelor's degree / උපාධිය</option>
                                                    <option value="4">Graduate Teacher / උපාධිධාරී ගුරු</option>
                                                    <option value="5">Trainee Teacher / පුහුණු ගුරු</option>
                                                    <option value="6" >Diploma / ඩිප්ලෝමා</option>
                                                    <option value="7" >Certificate / සහතිකපත්</option>
                                                    <option value="8" selected="">Professional / වෘත්තීමය</option>
                                                    <option value="9">Other / වෙනත්</option>
                                                <?php } ?>
                                                <?php if ($LECTURE->education_level == 9) { ?>                
                                                    <option value="1">Doctorate / ආචාර්ය උපාධිය</option>
                                                    <option value="2">Master's degree or Postgraduate / පශ්චාත් උපාධිය</option>
                                                    <option value="3">Bachelor's degree / උපාධිය</option>
                                                    <option value="4">Graduate Teacher / උපාධිධාරී ගුරු</option>
                                                    <option value="5">Trainee Teacher / පුහුණු ගුරු</option>
                                                    <option value="6">Diploma / ඩිප්ලෝමා</option>
                                                    <option value="7">Certificate / සහතිකපත්</option>
                                                    <option value="8">Professional / වෘත්තීමය</option>
                                                    <option value="9" selected="">Other / වෙනත්</option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="experience">Experience: </label>
                                        <div class="col-sm-9">
                                            <input id="experience" name="experience" class="form-control" type="number" min="0" value="<?php echo $LECTURE->experience ?>">
                                        </div>
                                    </div>

                                    <div class="form-group"> 
                                        <label class="col-sm-3 control-label" for="it_literancy">IT literacy: </label>
                                        <div class="col-sm-9">

                                            <?php
                                            $it_literacy = unserialize($LECTURE->it_literacy);
                                            ?>

                                            <div class="col-md-5" style="margin-bottom: 8px;">
                                                <label class="custom-control custom-control-primary custom-checkbox">
                                                    <input class="custom-control-input" type="checkbox" name="it_literacy[]" value="1" <?php
                                                    if (in_array("1", $it_literacy)) {
                                                        echo 'checked';
                                                    }
                                                    ?>>
                                                    <span class="custom-control-indicator"></span>
                                                    <span class="custom-control-label">I can operate digital equipments </span>
                                                </label>

                                            </div>
                                            <div class="col-md-6" style="margin-bottom: 8px;">   
                                                <label class="custom-control custom-control-primary custom-checkbox">
                                                    <input class="custom-control-input" type="checkbox" name="it_literacy[]" value="2" <?php
                                                    if (in_array("2", $it_literacy)) {
                                                        echo 'checked';
                                                    }
                                                    ?>>
                                                    <span class="custom-control-indicator"></span>
                                                    <span class="custom-control-label">I can use Internet browsing & email </span>
                                                </label>
                                            </div>

                                            <div class="col-md-5">
                                                <label class="custom-control custom-control-primary custom-checkbox">
                                                    <input class="custom-control-input" type="checkbox" name="it_literacy[]" value="3" <?php
                                                    if (in_array("3", $it_literacy)) {
                                                        echo 'checked';
                                                    }
                                                    ?>>
                                                    <span class="custom-control-indicator"></span>
                                                    <span class="custom-control-label">I can Type setting </span>
                                                </label>
                                            </div>
                                            <div class="col-md-7">
                                                <label class="custom-control custom-control-primary custom-checkbox"  >
                                                    <input class="custom-control-input" type="checkbox" name="it_literacy[]" value="4"<?php
                                                    if (in_array("4", $it_literacy)) {
                                                        echo 'checked';
                                                    }
                                                    ?> >
                                                    <span class="custom-control-indicator"></span>
                                                    <span class="custom-control-label">No It literacy (don’t worry about I will support you) </span>
                                                </label> 
                                            </div> 
                                        </div>
                                    </div>

                                    <?php
                                    $facility = unserialize($LECTURE->facilities);
                                    ?>

                                    <div class="form-group"> 
                                        <label class="col-sm-3 control-label" for="it_literancy">Equipment Facilities: </label>
                                        <div class="col-sm-9">                                               
                                            <div class="col-md-6" style="margin-bottom: 6px;">
                                                <label class="custom-control custom-control-primary custom-checkbox">
                                                    <input class="custom-control-input" type="checkbox" name="facilities[]" value="1" <?php
                                                    if (in_array("1", $facility)) {
                                                        echo 'checked';
                                                    }
                                                    ?>>
                                                    <span class="custom-control-indicator"></span>
                                                    <span class="custom-control-label">Internet connection </span>
                                                </label>
                                            </div>
                                            <div class="col-md-6" style="margin-bottom: 6px;">
                                                <label class="custom-control custom-control-primary custom-checkbox">
                                                    <input class="custom-control-input" type="checkbox" name="facilities[]" value="2" <?php
                                                    if (in_array("2", $facility)) {
                                                        echo 'checked';
                                                    }
                                                    ?>>
                                                    <span class="custom-control-indicator"></span>
                                                    <span class="custom-control-label">Desktop / Laptop </span>
                                                </label>
                                            </div>

                                            <div class="col-md-6" style="margin-bottom: 6px;">
                                                <label class="custom-control custom-control-primary custom-checkbox">
                                                    <input class="custom-control-input" type="checkbox" name="facilities[]" value="3" <?php
                                                    if (in_array("3", $facility)) {
                                                        echo 'checked';
                                                    }
                                                    ?>>
                                                    <span class="custom-control-indicator"></span>
                                                    <span class="custom-control-label">Tablet computer </span>
                                                </label>
                                            </div>
                                            <div class="col-md-6" style="margin-bottom: 6px;">
                                                <label class="custom-control custom-control-primary custom-checkbox"  >
                                                    <input class="custom-control-input" type="checkbox" name="facilities[]" value="4"  <?php
                                                    if (in_array("4", $facility)) {
                                                        echo 'checked';
                                                    }
                                                    ?>>
                                                    <span class="custom-control-indicator"></span>
                                                    <span class="custom-control-label">Smart phone</span>
                                                </label>
                                            </div>
                                            <div class="col-md-6" >
                                                <label class="custom-control custom-control-primary custom-checkbox">
                                                    <input class="custom-control-input" type="checkbox" name="facilities[]" value="5"  <?php
                                                    if (in_array("5", $facility)) {
                                                        echo 'checked';
                                                    }
                                                    ?>>
                                                    <span class="custom-control-indicator"></span>
                                                    <span class="custom-control-label">Video camera</span>
                                                </label>
                                            </div>
                                            <div class="col-md-6" >
                                                <label class="custom-control custom-control-primary custom-checkbox">
                                                    <input class="custom-control-input" type="checkbox" name="facilities[]" value="6"  <?php
                                                    if (in_array("6", $facility)) {
                                                        echo 'checked';
                                                    }
                                                    ?>>
                                                    <span class="custom-control-indicator"></span>
                                                    <span class="custom-control-label">Recording instruments</span>
                                                </label>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="grade"> Register For Payment: </label>
                                        <div class="col-sm-9">
                                            <lable>Account Number</lable>
                                            <input id="account_number" name="account_number" class="form-control" type="text" value="<?php echo $LECTURE->account_number ?>" style="margin-bottom: 10px;">
                                            <lable >Account Holder Name</lable>
                                            <input id="account_holder_name" name="account_holder_name" class="form-control" type="text" value="<?php echo $LECTURE->account_holder_name ?>" style="margin-bottom: 10px;">
                                            <lable >Bank Name</lable>
                                            <input id="bank_name" name="bank_name" class="form-control" type="text" value="<?php echo $LECTURE->bank_name ?>"  style="margin-bottom: 10px;">
                                            <lable >Branch</lable>
                                            <input id="branch" name="branch" class="form-control" type="text" value="<?php echo $LECTURE->branch ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="grade"> How did you hear about us?: </label>
                                        <div class="col-sm-9"> 
                                            <select class="form-control"  name="hear_about_us">
                                                <option selected="">-- Select one --</option>
                                                <?php if ($LECTURE->hear_about_us == 1) { ?>
                                                    <option value="1" selected="">Facebook / ෆේස්බුක්/social media</option>                                                
                                                    <option value="2" >Google Search / ගූගල් පිරික්සීමෙන්</option>
                                                    <option value="3"  >Someone suggested me / තවත් කෙනෙකු යෝජනා කිරීමෙන්</option>
                                                    <option value="4"  >Other / වෙනත්</option>
                                                <?php } ?>
                                                <?php if ($LECTURE->hear_about_us == 2) { ?>
                                                    <option value="1" >Facebook / ෆේස්බුක්/social media</option>                                                
                                                    <option value="2" selected="">Google Search / ගූගල් පිරික්සීමෙන්</option>
                                                    <option value="3"  >Someone suggested me / තවත් කෙනෙකු යෝජනා කිරීමෙන්</option>
                                                    <option value="4"  >Other / වෙනත්</option>
                                                <?php } ?>
                                                <?php if ($LECTURE->hear_about_us == 3) { ?>
                                                    <option value="1" >Facebook / ෆේස්බුක්/social media</option>                                                
                                                    <option value="2" >Google Search / ගූගල් පිරික්සීමෙන්</option>
                                                    <option value="3" selected="" >Someone suggested me / තවත් කෙනෙකු යෝජනා කිරීමෙන්</option>
                                                    <option value="4"  >Other / වෙනත්</option>
                                                <?php } ?>
                                                <?php if ($LECTURE->hear_about_us == 4) { ?>
                                                    <option value="1" >Facebook / ෆේස්බුක්/social media</option>                                                
                                                    <option value="2" >Google Search / ගූගල් පිරික්සීමෙන්</option>
                                                    <option value="3"  >Someone suggested me / තවත් කෙනෙකු යෝජනා කිරීමෙන්</option>
                                                    <option value="4" selected="" >Other / වෙනත්</option>
                                                <?php } else { ?>
                                                    <option value="1" >Facebook / ෆේස්බුක්/social media</option>                                                
                                                    <option value="2" >Google Search / ගූගල් පිරික්සීමෙන්</option>
                                                    <option value="3"  >Someone suggested me / තවත් කෙනෙකු යෝජනා කිරීමෙන්</option>
                                                    <option value="4"  >Other / වෙනත්</option>
                                                <?php } ?>

                                            </select> 
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-3"></div> 
                                        <div class="col-md-3"></div> 
                                        <div class="col-md-3"></div> 
                                        <div class="col-md-3"> 
                                            <input type="hidden"  name="id" value="<?php echo $LECTURE->id ?>"> 
                                            <input type="hidden"  name="action" value="UPDATE">                                     
                                            <input type="submit" class="btn btn-primary btn-block" type="submit" id="update-profile"   value="update" >
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

        <script src="js/jquery.min.js" type="text/javascript"></script> 
        
            <script>
            $(document).ready(function () {

                $('#other').click(function () {
                    if ($(this).prop("checked") == true) {
                         
                        $("#other_bar").show();
                    } else if ($(this).prop("checked") == false) {

                        $("#other_bar").hide();
                        $("#other_val").val( );

                    }
                });
            });

        </script>
        <script src="js/vendor.min.js"></script>
        <script src="js/elephant.min.js"></script>
        <script src="js/application.min.js"></script>
        <script src="js/profile.min.js"></script>
        <script src="js/sweetalert.min.js" type="text/javascript"></script>
        <script src="js/jm.spinner.js" type="text/javascript"></script>
        
        <script src="ajax/js/lecture.js" type="text/javascript"></script>
        <script src="ajax/js/check-login.js" type="text/javascript"></script> 
        <script src="ajax/js/category.js" type="text/javascript"></script>
        <script src="ajax/js/city.js" type="text/javascript"></script>
        <script src="ajax/js/lecture.js" type="text/javascript"></script>
    
    </body>


</html>