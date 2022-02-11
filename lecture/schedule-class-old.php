<!DOCTYPE html>
<?php
include '../class/include.php';
include_once(dirname(__FILE__) . '/auth.php');

$id = '';
$id = $_GET['id'];
$LECTURE_CLASS = new LectureClass($id);

$begin = new DateTime($LECTURE_CLASS->start_date);
$date = new DateTime($LECTURE_CLASS->start_date);
date_default_timezone_set("Asia/Calcutta");
$today = date('Y-m-d');
$todaytime = date('Y-m-d H:i:s');

$days = ($LECTURE_CLASS->modules * 7);
$end = $date->modify('+' . $days . ' day');
$interval = DateInterval::createFromDateString('7 day');
$PERIOD = new DatePeriod($begin, $interval, $end);
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Schedule Class - Ecollage.lk</title>
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
    <meta property="og:url" content="http://demo.madebytilde.com/elephant">
    <meta property="og:type" content="website">
    <meta property="og:image" content="../../elephant.html">
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
    <link href="css/jm.spinner.css" rel="stylesheet" type="text/css" />
    <link href="css/simplelightbox.min.css" rel="stylesheet" type="text/css" />

</head>

<body class="layout layout-header-fixed">
    <div class="box"></div>

    <?php include './top-header.php'; ?>
    <div class="layout-main">
        <?php include './navigation.php'; ?>
        <div class="layout-content">
            <div class="layout-content-body">
                <div class="row">
                    <div class="col-md-12 " style="margin-top: 25px;">
                        <div class="col-md-12 text-center" style="padding: 10px;border-bottom: 1px solid #bfbcbc;">
                            <h3>Manage <span class="text-success"><?php echo $LECTURE_CLASS->name ?></span> Class Documents - <?php echo $LECTURE_CLASS->start_date ?></h3>
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
                            <div class="tab-content">
                                <div class="tab-pane fade active in" id="home">
                                    <form class="demo-form-wrapper card " style="padding: 50px" id="form-video">
                                        <div class="form form-horizontal">

                                            <div class="form-group">
                                                <label class="col-sm-2 control-label " for="name" style="text-align: left">Select Date: </label>
                                                <div class="col-sm-10">

                                                    <select class="custom-select" id="date" name="date" required="">
                                                        <option value="">-- Select schedule date -- </option>
                                                        <?php
                                                        foreach ($PERIOD as $date) {

                                                            if ($date->format("Y-m-d") >= $today) {
                                                        ?>
                                                                <option value="<?php echo $date->format("Y-m-d"); ?>"><?php echo $date->format("Y-m-d "); ?></option>
                                                        <?php
                                                            }
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label " for="name" style="text-align: left">Video URL Code: </label>
                                                <div class="col-sm-10">
                                                    <input id="url" name="url" class="form-control  " type="text" placeholder="Enter Video URL  ">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-md-3"></div>
                                                <div class="col-md-3"></div>
                                                <div class="col-md-4"></div>
                                                <div class="col-md-2">
                                                    <input type="hidden" name="create_video">
                                                    <input type="hidden" name="lecture_id" value="<?php echo $_SESSION['id'] ?>">
                                                    <input type="hidden" name="class_id" value="<?php echo $id ?>">
                                                    <input type="submit" class="btn btn-primary btn-block" value="Create" id="create-video">
                                                </div>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                                <div class="tab-pane fade" id="past_lesson">
                                    <?php
                                    foreach ($PERIOD as $date) {
                                        $date_f = $date->format("Y-m-d");
                                    ?>

                                        <div class="card">
                                            <a href="# " class="   card-toggler" title="Collapse">
                                                <div class="card-header  ">
                                                    <div class="col-md-8">
                                                        <h5>
                                                            View Previous - <span class="text-success"><b>( <?php echo $date_f ?> ) </b></span>
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

                                                if (count($LECTURE_VIDEO->getVideoByClass($id, $date_f)) > 0) {
                                                    foreach ($LECTURE_VIDEO->getVideoByClass($id, $date_f) as $lecture_video) {
                                                ?>
                                                        <div class="col-md-9">
                                                            <iframe width="100%" height="500" src="https://www.youtube.com/embed/<?php echo substr($lecture_video['url'], 17) ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                                            <button class="file-delete-btn delete delete-video btn-danger" data-id=" <?php echo $lecture_video['id'] ?>" title="Delete" type="button" style="background-color: red;margin-right: 9px;">
                                                                <span class="icon icon-remove"></span>
                                                            </button>

                                                        </div>
                                                        <div class="col-md-3">
                                                            <div style="height:400px; border:1px solid #ccc; overflow-y: scroll; margin-bottom:24px; padding:16px;" class="chat_history" data-lecture_id="<?php echo $_SESSION['id'] ?>" video_id="<?php echo $lecture_video['id'] ?>" id="chat_history_<?php echo $lecture_video['id'] ?>">
                                                                <p>Start your Chat session now..!</p>
                                                            </div>
                                                            <div class="form-group">
                                                                <textarea class="form-control" name="chat_message_<?php echo $lecture_video['id'] ?>" id="chat_message_<?php echo $lecture_video['id'] ?>" placeholder="Enter"></textarea>
                                                            </div>
                                                            <div class="form-group" align="right">
                                                                <button type="button" name="send_chat" class="btn btn-info send_chat" lecture_id="<?php echo $_SESSION['id'] ?>" video_id="<?php echo $lecture_video['id'] ?>">Send</button></div>
                                                        </div>
                                                    <?php
                                                    }
                                                } else {
                                                    ?>
                                                    <h4 class="text-danger text-center"> No Video Available</h4>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    <?php } ?>


                                </div>
                                <div class="tab-pane fade" id="mcq_papers">
                                    <form class="demo-form-wrapper card " style="padding: 50px" id="form-question">
                                        <div class="form form-horizontal">
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label " for="name" style="text-align: left">Select Date: </label>
                                                <div class="col-sm-10">

                                                    <select class="custom-select" id="date" name="date" required="">
                                                        <option value="">-- Select schedule date -- </option>
                                                        <?php
                                                        foreach ($PERIOD as $date) {
                                                            if ($date->format("Y-m-d") >= $today) {
                                                        ?>
                                                                <option value="<?php echo $date->format("Y-m-d"); ?>"><?php echo $date->format("Y-m-d "); ?></option>
                                                        <?php
                                                            }
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label " for="name" style="text-align: left"> Question: </label>
                                                <div class="col-sm-10">
                                                    <textarea id="question" name="question" class="form-control" placeholder="Enter Question "></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label " for="name" style="text-align: left"> Image Name: </label>
                                                <div class="col-sm-10">
                                                    <input id="image" name="image" class="form-control" type="file" placeholder="Select Image ">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label " for="name" style="text-align: left"> Option A: </label>
                                                <div class="col-sm-10">
                                                    <input id="option-a" name="option_a" class="form-control  " type="text" placeholder="Enter Option A ">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label " for="name" style="text-align: left"> Option B: </label>
                                                <div class="col-sm-10">
                                                    <input id="option-b" name="option_b" class="form-control  " type="text" placeholder="Enter Option B ">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label " for="name" style="text-align: left"> Option C: </label>
                                                <div class="col-sm-10">
                                                    <input id="option-c" name="option_c" class="form-control  " type="text" placeholder="Enter Option C ">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label " for="name" style="text-align: left"> Option D: </label>
                                                <div class="col-sm-10">
                                                    <input id="option-d" name="option_d" class="form-control  " type="text" placeholder="Enter Option D ">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label " for="name" style="text-align: left"> Option E: </label>
                                                <div class="col-sm-10">
                                                    <input id="option-e" name="option_e" class="form-control  " type="text" placeholder="Enter Option E ">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label " for="name" style="text-align: left">Correct Answer: </label>
                                                <div class="col-sm-10">

                                                    <select class="custom-select" id="correct-answer" name="correct_answer" required="">
                                                        <option value="">-- Select correct answer -- </option>
                                                        <option value="A">A</option>
                                                        <option value="B">B</option>
                                                        <option value="C">C</option>
                                                        <option value="D">D</option>
                                                        <option value="E">E</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-md-3"></div>
                                                <div class="col-md-3"></div>
                                                <div class="col-md-4"></div>
                                                <div class="col-md-2">
                                                    <input type="hidden" name="create-question">
                                                    <input type="hidden" name="class_id" value="<?php echo $id ?>">
                                                    <input type="hidden" name="lecture_id" value="<?php echo $_SESSION['id'] ?>">
                                                    <input type="submit" class="btn btn-primary btn-block" value="Add" id="create-question">
                                                </div>
                                            </div>
                                        </div>

                                    </form>
                                    <div class="row gutter-xs">
                                        <div class="col-md-12">
                                            <?php
                                            foreach ($PERIOD as $date) {

                                                $date_f = $date->format("Y-m-d");
                                                $end_time = new DateTime($LECTURE_CLASS->end_time);
                                                $end_time_f = $end_time->format("H:i:s");
                                                $class_end_time = date('Y-m-d H:i:s', strtotime("$date_f $end_time_f"));


                                            ?>
                                                <div class="card">

                                                    <a href="# " class="card-toggler" title="Collapse">
                                                        <div class="card-header  ">
                                                            <div class="col-md-8">
                                                                <h5>
                                                                    Manage Questions - <span class="text-success"><b>( <?php echo $date_f ?> ) </b></span>
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
                                                        <table id="demo-datatables-colreorder-1" class="table table-hover table-striped table-nowrap dataTable" cellspacing="0" width="100%">
                                                            <thead>
                                                                <tr>
                                                                    <th>ID</th>
                                                                    <th>Question</th>
                                                                    <th>Option</th>
                                                                </tr>
                                                            </thead>
                                                            <?php
                                                            $questions = LessonQuestion::getQuestionsByClassId($id, $date_f);
                                                            if (count($questions) > 0) {
                                                                foreach ($questions as $key => $question) {
                                                                    $key++;
                                                            ?>
                                                                    <tr id="row_<?php echo $question['id']; ?>">
                                                                        <td><?php echo $key; ?></td>
                                                                        <td><?php echo $question['question']; ?></td>
                                                                        <?php
                                                                        $disabled = '';
                                                                        if ($class_end_time < $todaytime) {
                                                                            $disabled = 'disabled';
                                                                        ?>
                                                                        <?php
                                                                        }
                                                                        ?>
                                                                        <td>
                                                                            <a href="edit-question.php?id=<?php echo $question['id'] ?>" class="op-link btn btn-sm btn-info <?= $disabled; ?>"><i class="icon icon-pencil"></i></a> |
                                                                            <a href="#" class="delete-question btn btn-sm btn-danger <?= $disabled; ?>" data-id="<?php echo $question['id'] ?>"><i class="waves-effect icon icon-trash" data-type="cancel"></i></a>
                                                                        </td>

                                                                    </tr>
                                                                <?php
                                                                }
                                                            } else {
                                                                ?>
                                                                <tr>
                                                                    <td colspan="3">No data found...</td>
                                                                </tr>
                                                            <?php
                                                            }
                                                            ?>
                                                            <tfoot>
                                                                <tr>
                                                                    <th>ID</th>
                                                                    <th>Question</th>
                                                                    <th>Option</th>
                                                                </tr>
                                                            </tfoot>
                                                        </table>
                                                        <?php
                                                        if ($class_end_time < $todaytime) {
                                                        ?>
                                                            <center>
                                                                <a href="view-student-marks.php?id=<?= $id; ?>&date=<?= $date_f; ?>" class="card-link" style="" id="enter-class" wid="">
                                                                    <p class="btn btn-success btn-block" style="width: 15%">View Marks</p>
                                                                </a>
                                                            </center>
                                                        <?php
                                                        }
                                                        ?>
                                                    </div>
                                                </div>
                                            <?php

                                            }

                                            ?>

                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tutorials">
                                    <form class="demo-form-wrapper card " style="padding: 50px" id="form-tutorials">
                                        <div class="form form-horizontal">

                                            <div class="form-group">
                                                <label class="col-sm-2 control-label " for="name" style="text-align: left"> Title: </label>
                                                <div class="col-sm-10">
                                                    <input id="title_1" name="title" class="form-control" type="text" placeholder="Enter Title ">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label " for="pdf_file" style="text-align: left">Tutorials Papers: </label>
                                                <div class="col-sm-10">
                                                    <input id="pdf_file_1" name="pdf_file" class="form-control  " type="file">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label " for="name" style="text-align: left">Select Date: </label>
                                                <div class="col-sm-10">
                                                    <select class="custom-select" id="date_1" name="date">
                                                        <option value="">-- Select schedule date -- </option>
                                                        <?php
                                                        foreach ($PERIOD as $date) {
                                                            if ($date->format("Y-m-d") >= $today) {
                                                        ?>
                                                                <option value="<?php echo $date->format("Y-m-d"); ?>"><?php echo $date->format("Y-m-d"); ?></option>
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
                                                    <input type="hidden" name="create-tutorials">
                                                    <input type="hidden" name="class_id" value="<?php echo $id ?>">
                                                    <input type="hidden" name="lecture_id" value="<?php echo $_SESSION['id'] ?>">
                                                    <input type="submit" class="btn btn-primary btn-block" value="Add" id="create-tutorial">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <?php
                                    foreach ($PERIOD as $date) {
                                        $date_f = $date->format("Y-m-d");
                                    ?>
                                        <div class="card">
                                            <a href="# " class="   card-toggler" title="Collapse">
                                                <div class="card-header  ">
                                                    <div class="col-md-8">
                                                        <h5>
                                                            Manage Tutorials Papers - <span class="text-success"><b>( <?php echo $date_f ?> ) </b></span>
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
                                                if (count($LECTURE_TUTORIALS->getTutorialsClassId($id, $date_f)) > 0) {
                                                    foreach ($LECTURE_TUTORIALS->getTutorialsClassId($id, $date_f) as $lecture_tutorials) {
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
                                                    <h4 class="text-danger text-center"> No Available Tutorials</h4>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>

                                <div class="tab-pane fade" id="assignment">
                                    <form class="demo-form-wrapper card " style="padding: 50px" id="form-assessment">
                                        <div class="form form-horizontal">

                                            <div class="form-group">
                                                <label class="col-sm-2 control-label " for="name" style="text-align: left"> Title: </label>
                                                <div class="col-sm-10">
                                                    <input id="title_2" name="title" class="form-control" type="text" placeholder="Enter Title ">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label " for="pdf_file" style="text-align: left">Assessment Papers: </label>
                                                <div class="col-sm-10">
                                                    <input id="pdf_file_2" name="pdf_file" class="form-control  " type="file">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label " for="name" style="text-align: left">Select Date: </label>
                                                <div class="col-sm-10">

                                                    <select class="custom-select" id="date_2" name="date">
                                                        <option value="">-- Select schedule date -- </option>
                                                        <?php
                                                        foreach ($PERIOD as $date) {
                                                            if ($date->format("Y-m-d") >= $today) {
                                                        ?>
                                                                <option value="<?php echo $date->format("Y-m-d"); ?>"><?php echo $date->format("Y-m-d"); ?></option>
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
                                                    <input type="hidden" name="create-assessment">
                                                    <input type="hidden" name="class_id" value="<?php echo $id ?>">
                                                    <input type="hidden" name="lecture_id" value="<?php echo $_SESSION['id'] ?>">
                                                    <input type="submit" class="btn btn-primary btn-block" value="Add" id="create-assessment">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <?php
                                    foreach ($PERIOD as $date) {
                                        $date_f = $date->format("Y-m-d");
                                    ?>

                                        <div class="card">
                                            <a href="# " class="   card-toggler" title="Collapse">
                                                <div class="card-header  ">
                                                    <div class="col-md-8">
                                                        <h5>
                                                            Manage Assessment - <span class="text-success"><b>( <?php echo $date_f ?> ) </b></span>
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
                                                if (count($LECTURE_ASSESSMENT->getAssessmentByClassId($id, $date_f)) > 0) {
                                                    foreach ($LECTURE_ASSESSMENT->getAssessmentByClassId($id, $date_f) as $lecture_assessment) {
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
                                                    <h4 class="text-danger text-center"> No Available Assignments..</h4>
                                                <?php } ?>

                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>

                                <div class="tab-pane fade" id="home_work">
                                    <form class="demo-form-wrapper card " style="padding: 50px" id="form-home-work">
                                        <div class="form form-horizontal">
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label " for="name" style="text-align: left"> Title: </label>
                                                <div class="col-sm-10">
                                                    <input id="title_3" name="title" class="form-control  " type="text" placeholder="Enter Title ">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label " for="name" style="text-align: left">Home Work Papers: </label>
                                                <div class="col-sm-10">
                                                    <input id="pdf_file_3" name="pdf_file" class="form-control  " type="file">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label " for="name" style="text-align: left">Select Date: </label>
                                                <div class="col-sm-10">

                                                    <select class="custom-select" id="date" name="date" required="">
                                                        <option value="">-- Select schedule date -- </option>
                                                        <?php
                                                        foreach ($PERIOD as $date) {
                                                            if ($date->format("Y-m-d") >= $today) {
                                                        ?>
                                                                <option value="<?php echo $date->format("Y-m-d"); ?>"><?php echo $date->format("Y-m-d "); ?></option>
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
                                                    <input type="hidden" name="create-home-work">
                                                    <input type="hidden" name="class_id" value="<?php echo $id ?>">
                                                    <input type="hidden" name="lecture_id" value="<?php echo $_SESSION['id'] ?>">
                                                    <input type="submit" class="btn btn-primary btn-block" value="Add" id="create-home-work">
                                                </div>
                                            </div>
                                        </div>

                                    </form>


                                    <?php
                                    foreach ($PERIOD as $date) {
                                        $date_f = $date->format("Y-m-d");
                                    ?>

                                        <div class="card">
                                            <a href="# " class="   card-toggler" title="Collapse">
                                                <div class="card-header  ">
                                                    <div class="col-md-8">
                                                        <h5>
                                                            Manage Home Work - <span class="text-success"><b>( <?php echo $date_f ?> ) </b></span>
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
                                                $HOME_WORK = new HomeWork(NULL);
                                                if (count($HOME_WORK->getHomeWorkByClassId($id, $date_f)) > 0) {
                                                    foreach ($HOME_WORK->getHomeWorkByClassId($id, $date_f) as $home_work) {
                                                ?>
                                                        <div class="col-md-4 card " style="padding: 10px;margin: 10px;" id="div_3<?php echo $home_work['id'] ?>">
                                                            <div class="text-center">
                                                                <p>
                                                                    <?php echo $home_work['title'] ?>
                                                                </p>
                                                                <a href="../upload/class/home-work/<?php echo $home_work['file_name'] ?>" target="_blank" class="btn btn-success  " style="margin-bottom: 10px;"> VIEW ASSIGNMENT </a> |
                                                                <a href="#" class="delete-lecture-assessment btn btn-sm btn-danger" data-id="<?php echo $home_work['id'] ?>" style="margin-top: -8px;"><i class="waves-effect icon icon-trash" data-type="cancel"></i></a>

                                                            </div>
                                                        </div>
                                                    <?php
                                                    }
                                                } else {
                                                    ?>
                                                    <h4 class="text-danger text-center"> No Available Home Work..</h4>
                                                <?php } ?>

                                            </div>
                                        </div>
                                    <?php } ?>



                                    <div class="row">
                                        <div class="col-md-12">
                                            <h3 class="text-center">Manage Student Work</h3>
                                        </div>
                                        <?php
                                        $HOME_WORK = new HomeWork(NULL);
                                        foreach ($HOME_WORK->getHomeWorkByClassIdAndStudentId($id) as $home_work) {
                                        ?>

                                            <div class="col-md-4">
                                                <div class="card">
                                                    <div class="card-header  ">
                                                        <h5>
                                                            <?php echo $home_work['title'] ?>- <span class="text-success"><b><?php
                                                                                                                                $STUDENT = new Student($home_work['student_id']);
                                                                                                                                echo $STUDENT->full_name;
                                                                                                                                ?></b></span>
                                                        </h5>
                                                        <div class="gallery">
                                                            <a href="../upload/home-work/<?php echo $home_work['image_name'] ?>" class="big">
                                                                <img src="../upload/home-work/thumb/<?php echo $home_work['image_name'] ?>" alt="<?php echo $home_work['title'] ?>" />
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

    </div>
    <script src="js/jquery.min.js" type="text/javascript"></script>
    <script src="js/vendor.min.js"></script>
    <script src="js/elephant.min.js"></script>
    <script src="js/application.min.js"></script>
    <script src="js/demo.min.js"></script>
    <script src="js/sweetalert.min.js" type="text/javascript"></script>
    <script src="ajax/js/chat.js" type="text/javascript"></script>
    <script src="ajax/js/schedule-class.js" type="text/javascript"></script>

    <script src="delete/js/lecture-mcq.js" type="text/javascript"></script>
    <script src="delete/js/lesson-question.js" type="text/javascript"></script>
    <script src="delete/js/lecture-tutorial.js" type="text/javascript"></script>
    <script src="delete/js/lecture-assessment.js" type="text/javascript"></script>
    <script src="delete/js/lecture-video.js" type="text/javascript"></script>

    <script src="js/jm.spinner.js" type="text/javascript"></script>
    <script src="js/simple-lightbox.min.js" type="text/javascript"></script>

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