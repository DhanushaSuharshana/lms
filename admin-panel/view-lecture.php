<!DOCTYPE html>

<?php
include '../class/include.php';
$id = '';
$id = $_GET['id'];
$LECTURE = new Lecture($id);
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
        <link href="css/simplelightbox.min.css" rel="stylesheet" type="text/css"/>
        <style>.demo-form-wrapper {
                padding-bottom: 25px;
                padding-top: 25px;
            }
        </style>

    </head>
    <body class="layout layout-header-fixed">
        <div class="layout-header">
            <div class="navbar navbar-default">
                <div class="navbar-header">
                    <a class="navbar-brand navbar-brand-center" href="dashboard.php">
                        <img class="navbar-brand-logo" src="img/logo.png" alt="Ecollage.lk">
                    </a>
                    <button class="navbar-toggler visible-xs-block collapsed" type="button" data-toggle="collapse" data-target="#sidenav">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="bars">
                            <span class="bar-line bar-line-1 out"></span>
                            <span class="bar-line bar-line-2 out"></span>
                            <span class="bar-line bar-line-3 out"></span>
                        </span>
                        <span class="bars bars-x">
                            <span class="bar-line bar-line-4"></span>
                            <span class="bar-line bar-line-5"></span>
                        </span>
                    </button>
                    <button class="navbar-toggler visible-xs-block collapsed" type="button" data-toggle="collapse" data-target="#navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="arrow-up"></span>
                        <span class="ellipsis ellipsis-vertical">
                            <img class="ellipsis-object" width="32" height="32" src="img/0180441436.jpg" alt="Teddy Wilson">
                        </span>
                    </button>
                </div>
                <div class="navbar-toggleable">
                    <nav id="navbar" class="navbar-collapse collapse">
                        <button class="sidenav-toggler hidden-xs" title="Collapse sidenav ( [ )" aria-expanded="true" type="button">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="bars">
                                <span class="bar-line bar-line-1 out"></span>
                                <span class="bar-line bar-line-2 out"></span>
                                <span class="bar-line bar-line-3 out"></span>
                                <span class="bar-line bar-line-4 in"></span>
                                <span class="bar-line bar-line-5 in"></span>
                                <span class="bar-line bar-line-6 in"></span>
                            </span>
                        </button>

                        <div class="title-bar">
                            <h1 class="title-bar-title">
                                <span class="d-ib">View Student - " <?php echo $LECTURE->full_name ?> "</span>
                                <span class="d-ib">
                                    <a class="title-bar-shortcut" href="#" title="Add to shortcut list" data-container="body" data-toggle-text="Remove from shortcut list" data-trigger="hover" data-placement="right" data-toggle="tooltip">
                                        <span class="sr-only">Add to shortcut list</span>
                                    </a>
                                </span>
                            </h1>
                            <p class="title-bar-description">
                                <small>You can personalize your dashboard by using <a href="index.php">widgets</a>.</small>
                            </p>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <div class="layout-main">
            <?php
            include 'navigation.php';
            ?>
            <div class="layout-content">
                <div class="layout-content-body">

                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-10 card">
                            <div class="demo-form-wrapper">
                                <form class="form form-horizontal">
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="">Full Name</label>
                                        <div class="col-sm-10">
                                            <input id="form-control-4" class="form-control" type="text" value="<?php echo $LECTURE->full_name ?>" disabled="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="">Nic Number </label>
                                        <div class="col-sm-10">
                                            <input id="form-control-4" class="form-control" type="text" value="<?php echo $LECTURE->nic_number ?>" disabled="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="">Phone Number</label>
                                        <div class="col-sm-10">
                                            <input id="form-control-4" class="form-control" type="text" value="<?php echo $LECTURE->phone_number ?>" disabled="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="">Address</label>
                                        <div class="col-sm-10">
                                            <input id="form-control-4" class="form-control" type="text" value="<?php echo $LECTURE->address ?>" disabled="">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="">District</label>
                                        <div class="col-sm-10">
                                            <input id="form-control-4" class="form-control" type="text" value="<?php
                                            $CITY = new City($LECTURE->city);
                                            $DISTRICT = new District($CITY->district);
                                            echo $DISTRICT->name;
                                            ?>" disabled="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="">City</label>
                                        <div class="col-sm-10">
                                            <input id="form-control-4" class="form-control" type="text" value="<?php
                                            $CITY = new City($LECTURE->city);
                                            echo $CITY->name;
                                            ?>" disabled="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="">Email</label>
                                        <div class="col-sm-10">
                                            <input id="form-control-4" class="form-control" type="text" value="<?php echo $LECTURE->email ?>" disabled="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="">Age</label>
                                        <div class="col-sm-10">
                                            <input id="form-control-4" class="form-control" type="text" value="<?php echo $LECTURE->age ?>" disabled="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="">Birth Day</label>
                                        <div class="col-sm-10">
                                            <input id="form-control-4" class="form-control" type="text" value="<?php echo $LECTURE->birth_day ?>" disabled="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="">School</label>
                                        <div class="col-sm-10">
                                            <input id="form-control-4" class="form-control" type="text" value="<?php echo $LECTURE->school ?>" disabled="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="">Collage</label>
                                        <div class="col-sm-10">
                                            <input id="form-control-4" class="form-control" type="text" value="<?php echo $LECTURE->collage ?>" disabled="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="email">Mediums: </label>

                                        <div class="col-sm-10" style="margin-right: 0px!important;" >

                                            <?php
                                            $medium = unserialize($LECTURE->mediums);
                                            ?>
                                            <label class="custom-control custom-control-primary custom-checkbox" style="margin-left: 5px!important;"  >
                                                <input class="custom-control-input" disabled="" type="checkbox" name="mediums[]" value="1" <?php
                                                if (in_array("1", $medium)) {
                                                    echo 'checked';
                                                }
                                                ?>>
                                                <span class="custom-control-indicator"></span>
                                                <span class="custom-control-label">Sinhala </span>
                                            </label>
                                            <label class="custom-control custom-control-primary custom-checkbox" style="margin-left: 5px!important;">
                                                <input disabled="" class="custom-control-input" type="checkbox" name="mediums[]" value="2" <?php
                                                if (in_array("1", $medium)) {
                                                    echo 'checked';
                                                }
                                                ?>>
                                                <span class="custom-control-indicator"></span>
                                                <span class="custom-control-label">Tamil </span>
                                            </label>
                                            <label class="custom-control custom-control-primary custom-checkbox" style="margin-left:0px!important;">
                                                <input disabled="" class="custom-control-input" type="checkbox" name="mediums[]" value="3"  <?php
                                                if (in_array("3", $medium)) {
                                                    echo 'checked';
                                                }
                                                ?>>
                                                <span class="custom-control-indicator"></span>
                                                <span class="custom-control-label">English </span>
                                            </label>
                                            <label   class="custom-control custom-control-primary custom-checkbox" style="margin-left: 5px!important;">
                                                <input disabled="" class="custom-control-input" type="checkbox" name="mediums[]" value="4"  <?php
                                                if (in_array("4", $medium)) {
                                                    echo 'checked';
                                                }
                                                ?>>
                                                <span class="custom-control-indicator"></span>
                                                <span class="custom-control-label">Arabic </span>
                                            </label>
                                            <label   class="custom-control custom-control-primary custom-checkbox" style="margin-left: 5px!important;">
                                                <input disabled="" class="custom-control-input" type="checkbox" name="mediums[]" value="5"   <?php
                                                if (in_array("5", $medium)) {
                                                    echo 'checked';
                                                }
                                                ?>>
                                                <span class="custom-control-indicator"></span>
                                                <span class="custom-control-label">Hindi </span>
                                            </label>

                                            <label class="custom-control custom-control-primary custom-checkbox" style="margin-left:0px!important;">
                                                <input disabled="" class="custom-control-input" type="checkbox" name="mediums[]" value="6"  id="other" <?php
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
                                                <input disabled="" id="other_val" name="mediums[]" class="form-control" type="text" value="<?php echo end($medium); ?>">
                                            </div>
                                            <?php
                                        }
                                        ?>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="grade">Educated Level :</label>
                                        <div class="col-sm-10">
                                            <select id="form-control-21" class="custom-select" name="education_level" disabled="">
                                                <option value="" selected="selected"> -- Select your Educated Level -- </option>
                                                <?php if ($LECTURE->education_level == 1) { ?>                
                                                    <option value="1" selected="">Doctorate / ආචාර්ය උපාධිය</option> 
                                                <?php } ?>
                                                <?php if ($LECTURE->education_level == 2) { ?>         
                                                    <option value="2" selected="">Master's degree or Postgraduate / පශ්චාත් උපාධිය</option> 
                                                <?php } ?>
                                                <?php if ($LECTURE->education_level == 3) { ?>    
                                                    <option value="3"  selected="">Bachelor's degree / උපාධිය</option> 
                                                <?php } ?>
                                                <?php if ($LECTURE->education_level == 4) { ?>  
                                                    <option value="4" selected="">Graduate Teacher / උපාධිධාරී ගුරු</option>

                                                <?php } ?>
                                                <?php if ($LECTURE->education_level == 5) { ?>  
                                                    <option value="5"  selected="">Trainee Teacher / පුහුණු ගුරු</option>

                                                <?php } ?>
                                                <?php if ($LECTURE->education_level == 6) { ?>     
                                                    <option value="6" selected="">Diploma / ඩිප්ලෝමා</option> 
                                                <?php } ?>
                                                <?php if ($LECTURE->education_level == 7) { ?>                
                                                    <option value="7" selected="">Certificate / සහතිකපත්</option>
                                                <?php } ?>
                                                <?php if ($LECTURE->education_level == 8) { ?>      
                                                    <option value="8" selected="">Professional / වෘත්තීමය</option> 
                                                <?php } ?>
                                                <?php if ($LECTURE->education_level == 9) { ?>   
                                                    <option value="9" selected="">Other / වෙනත්</option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>



                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="">Experience</label>
                                        <div class="col-sm-10">
                                            <input id="form-control-4" class="form-control" type="text" value="<?php echo $LECTURE->experience ?>" disabled="">
                                        </div>
                                    </div>

                                    <div class="form-group"> 
                                        <label class="col-sm-2 control-label" for="it_literancy">IT literacy: </label>
                                        <div class="col-sm-10">

                                            <?php
                                            $it_literacy = unserialize($LECTURE->it_literacy);
                                            ?>

                                            <div class="col-md-5" style="margin-bottom: 8px;">
                                                <label class="custom-control custom-control-primary custom-checkbox">
                                                    <input class="custom-control-input" type="checkbox" name="it_literacy[]" disabled="" value="1" <?php
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
                                                    <input class="custom-control-input" type="checkbox" name="it_literacy[]" disabled="" value="2" <?php
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
                                                    <input class="custom-control-input" type="checkbox" name="it_literacy[]" disabled="" value="3" <?php
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
                                                    <input class="custom-control-input" type="checkbox" name="it_literacy[]" disabled="" value="4"<?php
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
                                        <label class="col-sm-2 control-label" for="it_literancy">Equipment Facilities: </label>
                                        <div class="col-sm-10">                                               
                                            <div class="col-md-6" style="margin-bottom: 6px;">
                                                <label class="custom-control custom-control-primary custom-checkbox">
                                                    <input class="custom-control-input" type="checkbox" name="facilities[]" disabled="" value="1" <?php
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
                                                    <input class="custom-control-input" type="checkbox" name="facilities[]" disabled="" value="2" <?php
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
                                                    <input class="custom-control-input" type="checkbox" name="facilities[]" disabled="" value="3" <?php
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
                                                    <input class="custom-control-input" type="checkbox" name="facilities[]" disabled=""  value="4"  <?php
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
                                                    <input class="custom-control-input" type="checkbox" name="facilities[]" disabled=""  value="5"  <?php
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
                                                    <input class="custom-control-input" type="checkbox" name="facilities[]" disabled=""  value="6"  <?php
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
                                        <label class="col-sm-2 control-label" for="grade"> Register For Payment: </label>
                                        <div class="col-sm-10">
                                            <lable>Account Number</lable>
                                            <input id="account_number" name="account_number" class="form-control" type="text" disabled=""  value="<?php echo $LECTURE->account_number ?>" style="margin-bottom: 10px;">
                                            <lable >Account Holder Name</lable>
                                            <input id="account_holder_name" name="account_holder_name" class="form-control" disabled=""  type="text" value="<?php echo $LECTURE->account_holder_name ?>" style="margin-bottom: 10px;">
                                            <lable >Bank Name</lable>
                                            <input id="bank_name" name="bank_name" class="form-control" type="text" disabled=""  value="<?php echo $LECTURE->bank_name ?>"  style="margin-bottom: 10px;">
                                            <lable >Branch</lable>
                                            <input id="branch" name="branch" class="form-control" type="text" disabled=""  value="<?php echo $LECTURE->branch ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="grade"> How did you hear about us?: </label>
                                        <div class="col-sm-10"> 
                                            <select class="form-control"  name="hear_about_us" disabled="" >
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
                                        <label class="col-sm-2 control-label" for="">Profile Image</label>
                                        <div class="col-sm-10">
                                            <?php
                                            if (empty($LECTURE->image_name)) {
                                                ?>
                                                <img src="img/3002121059.jpg" width="128px"class="img-thumbnail">
                                            <?php } else { ?>
                                                <img src="../upload/lecture/profile/<?php echo $LECTURE->image_name ?>" width="128px" class="img-thumbnail">

                                            <?php } ?>
                                        </div>
                                    </div>


                                </form>
                            </div>

                        </div>
                        <div class="col-md-1"></div>
                    </div>

                </div>
            </div>


        </div>

        <script src="js/vendor.min.js"></script>
        <script src="js/elephant.min.js"></script>
        <script src="js/application.min.js"></script>
        <script src="js/demo.min.js"></script>
        <script src="js/simple-lightbox.min.js" type="text/javascript"></script>


        <script>
            $(function () {
                var $gallery = $('.gallery a').simpleLightbox();

                $gallery.on('show.simplelightbox', function () {
                    console.log('Requested for showing');
                })
                        .on('shown.simplelightbox', function () {
                            console.log('Shown');
                        })
                        .on('close.simplelightbox', function () {
                            console.log('Requested for closing');
                        })
                        .on('closed.simplelightbox', function () {
                            console.log('Closed');
                        })
                        .on('change.simplelightbox', function () {
                            console.log('Requested for change');
                        })
                        .on('next.simplelightbox', function () {
                            console.log('Requested for next');
                        })
                        .on('prev.simplelightbox', function () {
                            console.log('Requested for prev');
                        })
                        .on('nextImageLoaded.simplelightbox', function () {
                            console.log('Next image loaded');
                        })
                        .on('prevImageLoaded.simplelightbox', function () {
                            console.log('Prev image loaded');
                        })
                        .on('changed.simplelightbox', function () {
                            console.log('Image changed');
                        })
                        .on('nextDone.simplelightbox', function () {
                            console.log('Image changed to next');
                        })
                        .on('prevDone.simplelightbox', function () {
                            console.log('Image changed to prev');
                        })
                        .on('error.simplelightbox', function (e) {
                            console.log('No image found, go to the next/prev');
                            console.log(e);
                        });
            });
        </script>
    </body>

</html>