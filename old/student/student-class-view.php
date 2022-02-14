<!DOCTYPE html>
<?php
include '../class/include.php';
include_once(dirname(__FILE__) . '/auth.php');
$id = $_GET['id'];
$LECTURE_CLASS = new LectureClass($id);
$LECTURE = new Lecture($LECTURE_CLASS->lecture);

date_default_timezone_set("Asia/Calcutta");
$today_time = date('Y-m-d H:i:A');
$today = date('Y-m-d');
$todaytime = date('Y-m-d H:i:s');

//set start time
$start_time = $LECTURE_CLASS->start_date . ' ' . $LECTURE_CLASS->start_time;

$begin = new DateTime($LECTURE_CLASS->start_date);
$date = new DateTime($LECTURE_CLASS->start_date);
$days = ($LECTURE_CLASS->modules * 7);

$end = $date->modify('+' . $days . ' day');
$interval = DateInterval::createFromDateString('7 day');
$PERIOD = new DatePeriod($begin, $interval, $end);
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ecollege.lk - Student Class View </title>
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
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
    <link href="css/sweetalert.css" rel="stylesheet" type="text/css" />
    <link href="css/simplelightbox.min.css" rel="stylesheet" type="text/css" />
    <link href="css/jm.spinner.css" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="assets/css/jquery.classycountdown.min.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <script src="assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>

</head>

<body class="layout layout-header-fixed">
    <div class="box"></div>
    <?php include './top-header.php'; ?>
    <div class="layout-main">
        <?php include './navigation.php'; ?>
        <div class="layout-content">
            <div class="layout-content-body">
                <div class="row">
                    <div class="col-md-12" style="margin-top: 15px;">
                        <div class="col-md-12">
                            <h3 style="text-align: center"> <span class="text-success">
                                    <?php echo ucfirst($LECTURE_CLASS->name) ?></span> - <?php echo $LECTURE->full_name ?> </h3>
                        </div>

                        <div class="panel m-b-lg">
                            <ul class="nav nav-tabs nav-justified">
                                <li class="active"><a href="#home" data-toggle="tab">Class Room</a></li>
                                <li><a href="#past_lesson" data-toggle="tab">Pass Lesson</a></li>
                                <li><a href="#mcq_papers" data-toggle="tab">MCQ Papers</a></li>
                                <li><a href="#tutorials" data-toggle="tab">Tutorials</a></li>
                                <li><a href="#assignment" data-toggle="tab">Assignment</a></li>
                                <li><a href="#home_work" data-toggle="tab">Home Work</a></li>
                            </ul>
                            <input type="hidden" value="<?php echo $id ?>" id="class_id">
                            <div class="tab-content">
                                <div class="tab-pane fade active in" id="home">
                                    <div id="wrapper" class="white">
                                        <div class="animated">
                                            <div class="middle-area" id="count_section">
                                                <h4 class="text-center text-danger"><b>WAITING FOR YOUR NEXT CLASS SESSION..!</b></h4>
                                                <?php
                                                foreach ($PERIOD as $key => $date) {

                                                    $date_start = $date->format("M d, Y");
                                                    $date_start_2 = $date->format("Y-m-d");

                                                    $date = $date_start . ' ' . substr($LECTURE_CLASS->start_time, 0, 5);

                                                    // dd($date_start_2 . $LECTURE_CLASS->start_time);
                                                    if ($date_start_2 . $LECTURE_CLASS->start_time >= $today_time) {
                                                        // dd($date);
                                                ?>

                                                        <div class="countdown" data-end="<?php echo $date ?>"></div>
                                                <?php
                                                        break;
                                                    }
                                                }
                                                ?>
                                                <center>
                                                    <a href="student-class-view-video.php?id=<?php echo $id ?>" class="card-link" style="display: none;" id="enter-class" wid>
                                                        <p class="btn btn-success btn-block" style="width: 15%">Enter Your Class</p>
                                                    </a>
                                                </center>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="past_lesson">
                                    <?php
                                    foreach ($PERIOD as $date) {
                                        $date_Start = $date->format("Y-m-d");
                                        if ($date_Start < $today) {
                                    ?>
                                            <input type="hidden" class="date_view" value="<?php echo $date_Start . ' ' . substr($LECTURE_CLASS->start_time, 0, 5) ?>">
                                            <div class="card">
                                                <a href="# " class="   card-toggler" title="Collapse">
                                                    <div class="card-header  ">
                                                        <div class="col-md-8">
                                                            <h5>
                                                                View Previous - <span class="text-success"><b>( <?php echo $date_Start ?> ) </b></span>
                                                                <span class="fas-fa fa-chevron-down"> </span>
                                                            </h5>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <span class=" icon icon-angle-down pull-right f-right"></span>
                                                        </div>
                                                    </div>
                                                </a>

                                                <div class="card-body" style="display: none;">
                                                    <hr style="margin: 0px 0px 20px 0px;">
                                                    <?php
                                                    $LECTURE_VIDEO = new LectureVideo(NULL);

                                                    if (count($LECTURE_VIDEO->getVideoByClass($id, $date_Start)) > 0) {
                                                        foreach ($LECTURE_VIDEO->getVideoByClass($id, $date_Start) as $lecture_video) {
                                                    ?>
                                                            <div class="col-md-9">
                                                                <?php
                                                                if ($lecture_video['is_youtube'] == 1) {
                                                                ?>
                                                                    <iframe width="100%" height="500" src="https://www.youtube.com/embed/<?php echo substr($lecture_video['url'], 17) ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                                                <?php
                                                                } else {
                                                                ?>
                                                                    <!-- jitsi meet -->
                                                                    <iframe width="100%" height="500" allow="camera; microphone; fullscreen; display-capture" src="<?= $lecture_video['url']; ?>" style="height: 500px; width: 100%; border: 0px;"></iframe>
                                                                <?php
                                                                }
                                                                ?>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div style="height:500px; border:1px solid #ccc; overflow-y: scroll; margin-bottom:24px; padding:16px;" class="chat_history" data-touserid="'+to_user_id+'">

                                                                    <ul class="list-unstyled">
                                                                        <?php
                                                                        $CHAT = new Chat(NULL);
                                                                        foreach ($CHAT->getChatByVideo($lecture_video['id']) as $chat) {
                                                                            $STUDENTS = new Student($chat['student_id']);
                                                                            $user_name = '';
                                                                            if ($chat['student_id'] == $_SESSION['id']) {

                                                                                $user_name = '<b class = "text-success ">You</b>';
                                                                            } else {
                                                                                $user_name = '<b class = "text-danger  ">' . $STUDENTS->full_name . ' </b>';
                                                                            }
                                                                        ?>

                                                                            <li style="border-bottom:1px dotted #ccc">
                                                                                <p> <?php echo $user_name . ' - ' . $chat["chat_message"] ?>
                                                                                    <div align="right">
                                                                                        - <small><em><?php echo $chat['timestamp'] ?></em></small>
                                                                                    </div>
                                                                                </p>
                                                                            </li>
                                                                        <?php
                                                                        }
                                                                        ?>
                                                                    </ul>
                                                                </div>

                                                            </div>
                                                        <?php
                                                        }
                                                    } else {
                                                        ?>
                                                        <h4 class="text-danger text-center"> No Video Available</h4>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                    <?php
                                        }
                                    }
                                    ?>


                                </div>
                                <div class="tab-pane fade" id="mcq_papers">
                                    <div class="row gutter-xs">
                                        <div class="col-md-12">
                                            <div class="card">
                                                <div class="card-body">
                                                    <?php
                                                    $paper_arr = array();
                                                    foreach ($PERIOD as $date) {
                                                        $date_Start = $date->format("Y-m-d");
                                                        $end_time = new DateTime($LECTURE_CLASS->end_time);
                                                        $end_time_f = $end_time->format("H:i:s");
                                                        $class_end_time = date('Y-m-d H:i:s', strtotime("$date_Start $end_time_f"));
                                                        if ($class_end_time < $todaytime) {
                                                            $papers = LessonMCQPaper::getMCQPapersByClassId($id, $date_Start);
                                                            // dd($papers);
                                                            if ($papers) {
                                                                foreach ($papers as $paper) {
                                                                    $marks = StudentMarks::getStudentMarksByPaper($_SESSION['id'], $paper['id']);
                                                                    $marks['c_date'] = $date_Start;
                                                                    $marks['paper'] = $paper['id'];
                                                                    array_push($paper_arr, $marks);
                                                                }
                                                            }
                                                        }
                                                    }

                                                    if (count($paper_arr) > 0) {
                                                    ?>
                                                        <table id="demo-datatables-colreorder-1" class="table table-hover table-striped table-nowrap dataTable" cellspacing="0" width="100%">
                                                            <thead>
                                                                <tr>
                                                                    <th>ID</th>
                                                                    <th>Class</th>
                                                                    <th>Class Date</th>
                                                                    <th>Paper</th>
                                                                    <th>Attempt</th>
                                                                    <th>Attended At</th>
                                                                    <th>Marks</th>
                                                                    <th>Grade</th>
                                                                    <th>Option</th>
                                                                </tr>
                                                            </thead>
                                                            <?php
                                                            foreach ($paper_arr as $key => $marks) {
                                                                $PAPER = new LessonMCQPaper($marks['paper']);
                                                            ?>

                                                                <tr>
                                                                    <td><?php echo $key + 1; ?></td>
                                                                    <td><?php echo $LECTURE_CLASS->name; ?></td>
                                                                    <td><?php echo $marks['c_date']; ?></td>
                                                                    <td><?php echo $PAPER->title; ?></td>
                                                                    <?php
                                                                    if (count($marks) > 2) {
                                                                    ?>
                                                                        <td><?php echo $marks['attempt']; ?></td>
                                                                        <td><?php echo $marks['created_at']; ?></td>
                                                                        <td><?php echo $marks['marks'] . '%'; ?></td>
                                                                        <td><?php echo $marks['grade']; ?></td>
                                                                        <td>
                                                                            <?php
                                                                            if ($marks['attempt'] == 3) {
                                                                            ?>
                                                                                <a href="view-mcq-paper-answers.php?id=<?= $marks['paper']; ?>" class="card-link" style="" id="enter-class" wid="">
                                                                                    <p class="btn btn-warning btn-block">View Answers</p>
                                                                                </a>
                                                                            <?php
                                                                            } else {
                                                                            ?>
                                                                                <a href="view-mcq-paper.php?id=<?= $marks['paper']; ?>" class="card-link" style="" id="enter-class" wid="">
                                                                                    <p class="btn btn-success btn-block">Attend now</p>
                                                                                </a>
                                                                            <?php
                                                                            }
                                                                            ?>

                                                                        </td>
                                                                    <?php
                                                                    } else {
                                                                    ?>
                                                                        <td colspan="4">You do not attend this paper yet... </td>
                                                                        <td>
                                                                            <a href="view-mcq-paper.php?id=<?= $marks['paper']; ?>" class="card-link" style="" id="enter-class" wid="">
                                                                                <p class="btn btn-success btn-block" style="width: 70%">Attend now</p>
                                                                            </a>
                                                                        </td>
                                                                    <?php
                                                                    }
                                                                    ?>
                                                                </tr>

                                                            <?php
                                                            }
                                                            ?>
                                                            <tfoot>
                                                                <tr>
                                                                    <th>ID</th>
                                                                    <th>Class</th>
                                                                    <th>Class Date</th>
                                                                    <th>Paper</th>
                                                                    <th>Attempt</th>
                                                                    <th>Attended At</th>
                                                                    <th>Marks</th>
                                                                    <th>Grade</th>
                                                                    <th>Option</th>
                                                                </tr>
                                                            </tfoot>
                                                        </table>
                                                    <?php
                                                    }
                                                    ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tutorials">
                                    <?php
                                    foreach ($PERIOD as $date) {
                                        $date_Start = $date->format("Y-m-d");
                                        if ($date_Start < $today) {
                                    ?>
                                            <div class="card">
                                                <a href="# " class="   card-toggler" title="Collapse">
                                                    <div class="card-header  ">
                                                        <div class="col-md-8">
                                                            <h5>
                                                                Manage Tutorials Papers - <span class="text-success"><b>( <?php echo $date_Start ?> ) </b></span>
                                                                <span class="fas-fa fa-chevron-down"> </span>
                                                            </h5>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <span class=" icon icon-angle-down pull-right f-right"></span>
                                                        </div>
                                                    </div>
                                                </a>

                                                <div class="card-body" style="display: none;">
                                                    <hr style="margin: 0px 0px 20px 0px;">

                                                    <?php
                                                    $LECTURE_TUTORIALS = new LectureTutorial(NULL);
                                                    if (count($LECTURE_TUTORIALS->getTutorialsClassId($id, $date_Start)) > 0) {
                                                        foreach ($LECTURE_TUTORIALS->getTutorialsClassId($id, $date_Start) as $lecture_tutorials) {
                                                    ?>

                                                            <div class="file" id="div_2<?php echo $lecture_tutorials['id'] ?>">
                                                                <a href="../upload/class/tutorials/<?php echo $lecture_tutorials['file_name'] ?>" target="_blank" class="file-link" title="file-name.pdf">
                                                                    <div class="file-thumbnail file-thumbnail-pdf">

                                                                    </div>
                                                                    <div class="file-info">
                                                                        <h5 style="padding:5px;"> <?php echo $lecture_tutorials['title'] ?></h5>
                                                                    </div>

                                                                </a>

                                                                <button class="file-delete-btn delete delete-tutorials" data-id=" <?php echo $lecture_tutorials['id'] ?>" title="Delete" type="button">
                                                                    <span class="icon icon-remove"></span>
                                                                </button>
                                                            </div>

                                                        <?php
                                                        }
                                                    } else {
                                                        ?>
                                                        <h4 class="text-danger text-center"> No Available MCQ Papers..!</h4>
                                                    <?php } ?>

                                                </div>
                                            </div>
                                    <?php
                                        }
                                    }
                                    ?>
                                </div>
                                <div class="tab-pane fade" id="assignment">
                                    <?php
                                    foreach ($PERIOD as $date) {
                                        $date_Start = $date->format("Y-m-d");
                                        if ($date_Start < $today) {
                                    ?>

                                            <div class="card">
                                                <a href="# " class="   card-toggler" title="Collapse">
                                                    <div class="card-header  ">
                                                        <div class="col-md-8">
                                                            <h5>
                                                                Manage Assessment - <span class="text-success"><b>( <?php echo $date_Start ?> ) </b></span>
                                                                <span class="fas-fa fa-chevron-down"> </span>
                                                            </h5>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <span class=" icon icon-angle-down pull-right f-right"></span>
                                                        </div>
                                                    </div>
                                                </a>

                                                <div class="card-body" style="display: none;">
                                                    <hr style="margin: 0px 0px 20px 0px;">

                                                    <?php
                                                    $LECTURE_ASSESSMENT = new LectureAssessment(NULL);
                                                    if (count($LECTURE_ASSESSMENT->getAssessmentByClassId($id, $date_Start)) > 0) {
                                                        foreach ($LECTURE_ASSESSMENT->getAssessmentByClassId($id, $date_Start) as $lecture_assessment) {
                                                    ?>
                                                            <div class="col-md-4 card " style="padding: 10px;margin: 10px;" id="div_3<?php echo $lecture_assessment['id'] ?>">
                                                                <div class="text-center">
                                                                    <p>
                                                                        <?php echo $lecture_assessment['title'] ?>
                                                                    </p>
                                                                    <a href="../upload/class/assessment/<?php echo $lecture_assessment['file_name'] ?>" target="_blank" class="btn btn-success  " style="margin-bottom: 10px;"> VIEW ASSIGNMENT </a> |
                                                                    <a href="#" class="delete-lecture-assessment btn btn-sm btn-danger" data-id="<?php echo $lecture_assessment['id'] ?>" style="margin-top: -8px;"><i class="waves-effect icon icon-trash" data-type="cancel"></i></a>

                                                                </div>
                                                            </div>
                                                        <?php
                                                        }
                                                    } else {
                                                        ?>
                                                        <h4 class="text-danger text-center"> No Available Assessment Papers..!</h4>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                    <?php
                                        }
                                    }
                                    ?>
                                </div>
                                <div class="tab-pane fade" id="home_work">
                                    <form class="demo-form-wrapper card " style="padding: 50px" id="form-data">
                                        <div class="form form-horizontal">
                                            <div class="form-group">
                                                <label class="col-sm-1 control-label " for="name" style="text-align: left"> Title: </label>
                                                <div class="col-sm-11">
                                                    <input id="title" name="title" class="form-control  " type="text" placeholder="Enter Title ">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-1 control-label " for="name" style="text-align: left">Image: </label>
                                                <div class="col-sm-11">
                                                    <input id="image" name="image" class="form-control  " type="file">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-md-3"></div>
                                                <div class="col-md-3"></div>
                                                <div class="col-md-4"></div>
                                                <div class="col-md-2">
                                                    <input type="hidden" name="create-home-work">
                                                    <input type="hidden" name="class_id" value="<?php echo $LECTURE_CLASS->id ?>">
                                                    <input type="hidden" name="student_id" value="<?php echo $_SESSION['id'] ?>">
                                                    <input type="submit" class="btn btn-primary btn-block" value="Submit" id="create">
                                                </div>
                                            </div>
                                        </div>

                                    </form>
                                    <?php
                                    $HOME_WORK = new HomeWork(NULL);
                                    foreach ($HOME_WORK->getHomeWorkByStudent($_SESSION['id']) as $home_work) {
                                    ?>
                                        <div class="col-md-4">
                                            <div class="card">
                                                <div class="card-header  ">
                                                    <h5>
                                                        <?php echo $home_work['title'] ?>
                                                    </h5>
                                                    <div class="gallery">
                                                        <a href="../upload/home-work/<?php echo $home_work['image_name'] ?>" class="big">
                                                            <img src="../upload/home-work/thumb/<?php echo $home_work['image_name'] ?>" alt="<?php echo $home_work['title'] ?>" title="<?php echo $home_work['title'] ?>" />
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <input type="hidden" value="<?php echo $_SESSION['id'] ?>" id="student_id">
    </div>


    <script src="js/vendor.min.js"></script>
    <script src="js/elephant.min.js"></script>
    <script src="js/application.min.js"></script>
    <script src="js/demo.min.js"></script>
    <script src="assets/js/vendor/jQuery-1.12.1.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.classycountdown.min.js"></script>
    <script src="assets/js/jquery.knob.js"></script>
    <script src="assets/js/jquery.throttle.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="js/sweetalert.min.js" type="text/javascript"></script>
    <script src="js/simple-lightbox.min.js" type="text/javascript"></script>
    <script src="js/jm.spinner.js" type="text/javascript"></script>

    <script src="ajax/js/check-login.js" type="text/javascript"></script>
    <script src="ajax/js/home-work.js" type="text/javascript"></script>


    <script>
        $(function() {
            var $gallery = $('.gallery a').simpleLightbox();

            $gallery.on('show.simplelightbox', function() {
                    console.log('Requested for showing');
                })
                .on('shown.simplelightbox', function() {
                    console.log('Shown');
                })
                .on('close.simplelightbox', function() {
                    console.log('Requested for closing');
                })
                .on('closed.simplelightbox', function() {
                    console.log('Closed');
                })
                .on('change.simplelightbox', function() {
                    console.log('Requested for change');
                })
                .on('next.simplelightbox', function() {
                    console.log('Requested for next');
                })
                .on('prev.simplelightbox', function() {
                    console.log('Requested for prev');
                })
                .on('nextImageLoaded.simplelightbox', function() {
                    console.log('Next image loaded');
                })
                .on('prevImageLoaded.simplelightbox', function() {
                    console.log('Prev image loaded');
                })
                .on('changed.simplelightbox', function() {
                    console.log('Image changed');
                })
                .on('nextDone.simplelightbox', function() {
                    console.log('Image changed to next');
                })
                .on('prevDone.simplelightbox', function() {
                    console.log('Image changed to prev');
                })
                .on('error.simplelightbox', function(e) {
                    console.log('No image found, go to the next/prev');
                    console.log(e);
                });
        });
    </script>
</body>

</html>