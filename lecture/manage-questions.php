<?php
include '../class/include.php';
include './auth.php';
$id = $_GET['id'];
$MCQ_PAPER = new LessonMCQPaper($id);
$LECTURE_CLASS = new LectureClass($MCQ_PAPER->class);

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
    <title>Ecollege.lk - Manage Question </title>
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
    <link href="css/sweetalert.css" rel="stylesheet" type="text/css" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/demo.min.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link href="css/jquery.timepicker.css" rel="stylesheet" type="text/css" />
    <link href="css/mcq-style.css" rel="stylesheet" type="text/css" />
    <link href="css/jm.spinner.css" rel="stylesheet" type="text/css" />

    <style>
        .profile-pic {
            position: relative;
            display: inline-block;
        }


        .fa-color {

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
                        <?php
                        if (isset($_GET['message'])) {

                            $MESSAGE = new Message($_GET['message']);
                        ?>
                            <div class="alert alert-<?php echo $MESSAGE->status; ?>" role="alert">
                                <?php echo $MESSAGE->description; ?>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
                <div class="row gutter-xs">
                    <div class="col-xs-12">
                        <div class="card">
                            <div class="card-header">
                                <strong>Manage Questions - <?= $MCQ_PAPER->title; ?></strong>
                            </div>
                        </div>
                        <form class="demo-form-wrapper card " style="padding: 50px" id="form-question">
                            <div class="form form-horizontal">
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
                                    <label class="col-sm-2 control-label " for="name" style="text-align: left"> Option 01: </label>
                                    <div class="col-sm-10">
                                        <input id="option-a" name="option_a" class="form-control  " type="text" placeholder="Enter Option 01 ">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label " for="name" style="text-align: left"> Option 02: </label>
                                    <div class="col-sm-10">
                                        <input id="option-b" name="option_b" class="form-control  " type="text" placeholder="Enter Option 02 ">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label " for="name" style="text-align: left"> Option 03: </label>
                                    <div class="col-sm-10">
                                        <input id="option-c" name="option_c" class="form-control  " type="text" placeholder="Enter Option 03 ">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label " for="name" style="text-align: left"> Option 04: </label>
                                    <div class="col-sm-10">
                                        <input id="option-d" name="option_d" class="form-control  " type="text" placeholder="Enter Option 04 ">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label " for="name" style="text-align: left"> Option 05: </label>
                                    <div class="col-sm-10">
                                        <input id="option-e" name="option_e" class="form-control  " type="text" placeholder="Enter Option 05 ">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label " for="name" style="text-align: left">Correct Answer: </label>
                                    <div class="col-sm-10">

                                        <select class="custom-select" id="correct-answer" name="correct_answer" required="">
                                            <option value="">-- Select correct answer -- </option>
                                            <option value="A">01</option>
                                            <option value="B">02</option>
                                            <option value="C">03</option>
                                            <option value="D">04</option>
                                            <option value="E">05</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-3"></div>
                                    <div class="col-md-3"></div>
                                    <div class="col-md-4"></div>
                                    <div class="col-md-2">
                                        <input type="hidden" name="create-question">
                                        <input type="hidden" name="paper" value="<?php echo $id ?>">
                                        <input type="submit" class="btn btn-primary btn-block" value="Add" id="create-question">
                                    </div>
                                </div>
                            </div>

                        </form>
                        <div class="row gutter-xs">
                            <div class="col-md-12">
                                <?php

                                $date_f = $MCQ_PAPER->date;
                                $end_time = new DateTime($LECTURE_CLASS->end_time);
                                $end_time_f = $end_time->format("H:i:s");
                                $class_end_time = date('Y-m-d H:i:s', strtotime("$date_f $end_time_f"));


                                ?>
                                <div class="card">



                                    <div class="card-body">
                                        <hr style="margin: 0px 0px 20px 0px;">
                                        <table id="demo-datatables-colreorder-1" class="table table-hover table-striped table-nowrap dataTable" cellspacing="0" width="100%">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Question</th>
                                                    <th>Image</th>
                                                    <th>Option</th>
                                                </tr>
                                            </thead>
                                            <?php
                                            $questions = LessonQuestion::getQuestionsByPaper($id);
                                            if (count($questions) > 0) {
                                                foreach ($questions as $key => $question) {
                                                    $key++;
                                            ?>
                                                    <tr id="row_<?php echo $question['id']; ?>">
                                                        <td><?php echo $key; ?></td>
                                                        <td><?php echo $question['question']; ?></td>
                                                        <td><img src="../upload/class/question/<?php echo $question['image_name']; ?>" class="question-img-table" alt="" /></td>
                                                        <?php
                                                        $disabled = '';
                                                        if ($MCQ_PAPER->class == '' & $class_end_time < $todaytime) {
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
                                                    <th>Image</th>
                                                    <th>Option</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                        <?php
                                        if ($MCQ_PAPER->class == '' & $class_end_time < $todaytime) {
                                        ?>
                                            <center>
                                                <a href="view-student-marks.php?id=<?= $id; ?>" class="card-link" style="" id="enter-class" wid="">
                                                    <p class="btn btn-success btn-block" style="width: 15%">View Marks</p>
                                                </a>
                                            </center>
                                        <?php
                                        }
                                        ?>
                                    </div>
                                </div>
                                <?php



                                ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>
<script src="js/jquery.min.js" type="text/javascript"></script>
<script src="js/vendor.min.js"></script>
<script src="js/elephant.min.js"></script>
<script src="js/application.min.js"></script>
<script src="js/profile.min.js"></script>
<script src="js/sweetalert.min.js" type="text/javascript"></script>
<script src="js/demo.min.js"></script>
<script src="ajax/js/lecture.js" type="text/javascript"></script>
<script src="ajax/js/view-mcq-paper.js" type="text/javascript"></script>
<script src="js/jquery.timepicker.min.js" type="text/javascript"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="js/jm.spinner.js" type="text/javascript"></script>
<script src="ajax/js/schedule-class.js" type="text/javascript"></script>
<script src="delete/js/lesson-question.js" type="text/javascript"></script>


</html>