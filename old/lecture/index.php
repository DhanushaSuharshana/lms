<!DOCTYPE html>
<?php
include '../class/include.php';
include './auth.php';
$PAGES = new Page(1);
 

$number_of_student = count(StudentRegistration::getStudentByLectureId($_SESSION['id']));
$number_of_class = count(LectureClass::getLectureClassesByLecture($_SESSION['id']));
$number_of_subject = count(LectureSubject::getLectureSubjectsByLecture($_SESSION['id']));
?> 
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Ecollege.lk - Index   </title>
        <meta property="og:url" content="http://demo.madebytilde.com/elephant">
        <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
        <meta property="og:url" content="http://demo.madebytilde.com/elephant">
        <meta property="og:type" content="website"> >

        <link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32">
        <link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16">
        <link rel="manifest" href="manifest.json">
        <link rel="mask-icon" href="safari-pinned-tab.svg" color="#f7a033">
        <meta name="theme-color" content="#ffffff">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,400italic,500,700">
        <link rel="stylesheet" href="css/vendor.min.css">
        <link rel="stylesheet" href="css/elephant.min.css">
        <link rel="stylesheet" href="css/application.min.css">
        <link href="css/sweetalert.css" rel="stylesheet" type="text/css"/>

    </head>
    <body class="layout layout-header-fixed layout-sidebar-fixed">

        <!--Top header -->
        <?php include './top-header.php'; ?>
        <!--End Top header -->

        <div class="layout-main parallax">

            <?php include './navigation.php'; ?>

            <div class="layout-content" style="padding: 10px;">


                <div class="row  ">  
                    <div class="layout-content-body">
                        <div class="row gutter-xs">
                            <div class="col-md-6 col-lg-3 col-lg-push-0">
                                <div class="card bg-primary">
                                    <div class="card-body">
                                        <div class="media">
                                            <div class="media-middle media-left">
                                                <span class="bg-primary-inverse circle sq-48">
                                                    <span class="icon icon-works">&#80;</span>
                                                </span>
                                            </div>
                                            <div class="media-middle media-body">
                                                <h6 class="media-heading">Students</h6>
                                                <h3 class="media-heading">
                                                    <span class="fw-l"><?php echo  $number_of_student?></span>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3 col-lg-push-3">
                                <div class="card bg-danger">
                                    <div class="card-body">
                                        <div class="media">
                                            <div class="media-middle media-left">
                                                <span class="bg-danger-inverse circle sq-48">
                                                    <span class="icon icon-works">&#90;</span>
                                                </span>
                                            </div>
                                            <div class="media-middle media-body">
                                                <h6 class="media-heading">Subjects</h6>
                                                <h3 class="media-heading">
                                                    <span class="fw-l"><?php echo  $number_of_subject?></span>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3 col-lg-pull-3">
                                <div class="card bg-primary">
                                    <div class="card-body">
                                        <div class="media">
                                            <div class="media-middle media-left">
                                                <span class="bg-primary-inverse circle sq-48">
                                                    <span class="icon icon-works">&#105;</span>
                                                </span>
                                            </div>
                                            <div class="media-middle media-body">
                                                <h6 class="media-heading">Schedule Class</h6>
                                                <h3 class="media-heading">
                                                    <span class="fw-l"><?php echo  $number_of_class?></span>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3 col-lg-pull-0">
                                <div class="card bg-danger">
                                    <div class="card-body">
                                        <div class="media">
                                            <div class="media-middle media-left">
                                                <span class="bg-danger-inverse circle sq-48">
                                                    <span class="icon icon-works">&#36;</span>
                                                </span>
                                            </div>
                                            <div class="media-middle media-body">
                                                <h6 class="media-heading">Help Center</h6>
                                                <h3 class="media-heading">
                                                    <small class="fw-l  " style="color: white;">Click here </small>  
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row "> 
                    <div class="col-xs-12 col-md-4"> 
                        <div class="card  "  style="margin-top: 0px;">
                            <div class="card-header"> 
                                <strong class="text-center"><center>Lecture Instruction</center></strong>
                            </div>
                            <div class="card-body" style="  height: 468px!important;overflow-y: auto;">
                                <center>
                                    <div class="col-md-12 m-y">
                                        <p class="text-justify" style="line-height: 1.8;">
                                            During your live sessions you will be on camera and recorded.Present yourself in each session 
                                            like you are attending in all student at once.              
                                        </p>
                                        <p class="text-justify" style="line-height: 1.8;"> 
                                            Make sure that your personal presentation, the location you lecture in and content in shared
                                            screens,are appropriate.Any distractions caused by your appearance, background, or shared screens
                                            may impact others learning and will be recorded for posterity.
                                        <p class="text-justify" style="line-height: 1.8;">

                                            <b> Microphones & Camera        </b><br>
                                            Consider the microphone you plan to for your live session.A headset with a microphone is the best
                                            way to participate in the discussion.A separate headset and mic will reduce feedback noise and will
                                            reduce the amount of distracting external noise.Always mute your microphone when you are not talking. <br>
                                            Before attending your live session, test your microphone & camera.How good is the sound and clarity of your headset & 
                                            camera? If your microphone is old or suffering from wear and tear,consider replacing it. 

                                        </p>
                                        <p class="text-justify" style="line-height: 1.8;">
                                            <b>The Lecture Space</b><br>
                                            The Lecture Space in Critical to successfully engaging in the live Session. A quit lecturing place is key. Consider how you can remove or reduce distractions from your area,<br>
                                            <b>  1)  </b>Silence your personal device.(Tv, Mobile Phone etc.)<br>
                                            <b>2)  </b>Inform Relatives, roommates and pets that you are about to begin your session and to interrupt you.<br>
                                            <b>3)  </b>Stop any music or videos thar could distract you or others.<br>
                                            <b>  4) </b>Eat before the session, It's rude if you don't have enough to share with whole class. <br>
                                        </p> 

                                    </div>  
                                </center>
                            </div>
                        </div> 
                    </div>

                    <div class="col-xs-12 col-md-8"> 
                        <iframe id="existing-iframe-example "   class="video-res" height="510" src="<?php echo $PAGES->title ?>" allow="autoplay" allowfullscreen></iframe>
                    </div>
                </div>
            </div> 
        </div>
    </div>

    <input type="hidden" value="<?php echo $_SESSION['id'] ?>" id="student_id">


    <script src="js/jquery.min.js" type="text/javascript"></script>
    <script src="js/vendor.min.js"></script>
    <script src="js/elephant.min.js"></script>
    <script src="js/application.min.js"></script>
    <script src="js/sweetalert.min.js" type="text/javascript"></script>



    <script type="text/javascript">
        var tag = document.createElement('script');
        tag.id = 'iframe-demo';
        tag.src = 'https://www.youtube.com/iframe_api';
        var firstScriptTag = document.getElementsByTagName('script')[0];
        firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

        var player;
        function onYouTubeIframeAPIReady() {
            player = new YT.Player('existing-iframe-example', {
                events: {
                    'onReady': onPlayerReady,
                    'onStateChange': onPlayerStateChange
                }
            });
        }
        function onPlayerReady(event) {
            document.getElementById('existing-iframe-example').style.borderColor = '#FF6D00';
        }

        //                function onPlayerStateChange(event) {
        //                    if (event.data === 0) {
        //                        $('#btn-disply-none').hide();
        //                        $('#btn-disply').show();
        //
        //                    }
        //                }

    </script>

</body>
</html>