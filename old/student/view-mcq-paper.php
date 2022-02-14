<!DOCTYPE html>
<?php
include '../class/include.php';
include_once(dirname(__FILE__) . '/auth.php');
$id = $_GET['id'];
$PAPER = new LessonMCQPaper($id);
$LECTURE_CLASS = new LectureClass($PAPER->class);
$LECTURE = new Lecture($LECTURE_CLASS->lecture);
$QUESTION = new LessonQuestion(NULL);
date_default_timezone_set("Asia/Calcutta");
$today_time = date('Y-m-d H:i:A');
// $today = date('Y-m-d');
$attempt = '';

//set start time
$start_time = $LECTURE_CLASS->start_date . ' ' . $LECTURE_CLASS->start_time;
$is_paper = StudentMarks::getStudentMarksByPaper($_SESSION['id'], $id);
if ($is_paper) {
    $attempt = $is_paper['attempt'] + 1;
    if ($attempt > 3) {
        if (isset($_GET['exam'])) {
            redirect("view-mcq-paper-answers.php?id=$id&exam");
        } else {
            redirect("view-mcq-paper-answers.php?id=$id");
        }
    }
} else {
    $attempt = 1;
}
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ecollege.lk - Student Class MCQ Paper </title>
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
    <link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="manifest.json">
    <link rel="mask-icon" href="safari-pinned-tab.svg" color="#f7a033">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,400italic,500,700">
    <link rel="stylesheet" href="css/vendor.min.css">
    <link rel="stylesheet" href="css/elephant.min.css">
    <link rel="stylesheet" href="css/application.min.css">
    <link href="css/sweetalert.css" rel="stylesheet" type="text/css" />
    <link href="css/mcq-style.css" rel="stylesheet" type="text/css" />

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
                            <?php
                            if (isset($_GET['exam'])) {
                            ?>
                                <h3 style="text-align: center"><span class="text-success"><?php echo $PAPER->title; ?></span></h3>
                            <?php
                            } else {
                            ?>
                                <h3 style="text-align: center"><span class="text-success"><?php echo ucfirst($LECTURE_CLASS->name) ?></span> - <?php echo $LECTURE->full_name ?> </h3>
                            <?php
                            }
                            ?>
                            <h5 style="text-align: center"> Attempt - <span class="attempt-span"><?= $attempt; ?></span></h5>
                        </div>

                        <div class="panel m-b-lg">
                            <div class="tab-content">
                                <div class="animated">
                                    <div class="middle-area mcq-section" id="count_section">
                                        <div class="col-md-12">
                                            <div class="count-section hidden">
                                                <div class="col-md-3">
                                                    <div class="count-values" id="show-correct-answers"></div>
                                                    <div class="topic">Correct Answers</div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="count-values" id="show-incorrect-answers"></div>
                                                    <div class="topic">Incorrect Answers</div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="count-values" id="show-marks"></div>
                                                    <div class="topic">Marks</div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="count-values" id="show-grade"></div>
                                                    <div class="topic">Grade</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-10  col-md-offset-1">

                                            <form id="form-mcq">
                                                <ol>
                                                    <?php
                                                    $video_id = array();
                                                    foreach ($QUESTION->getQuestionsByPaper($id) as $key => $question) {
                                                        $key++;
                                                        $options = LessonQuestionOption::getOptionsByQuestionId($question['id']);

                                                    ?>
                                                        <li>
                                                            <?= $question['question']; ?>
                                                            <?php
                                                            if ($question['image_name'] != '') {
                                                            ?>
                                                                <br />
                                                                <br />
                                                                <img src="../upload/class/question/<?= $question['image_name']; ?>" class="img-thumbnail" alt="" />
                                                                <br />
                                                                <br />
                                                            <?php
                                                            }
                                                            ?>
                                                            <ol class="option_ol" type="A">
                                                                <input type="radio" name="<?= $question['id']; ?>" class="qu_options" value="A" />
                                                                <span id="qu-<?= $question['id']; ?>-A">
                                                                    <li><?= $options['option_A']; ?></li>
                                                                </span>
                                                                <input type="radio" name="<?= $question['id']; ?>" class="qu_options" value="B" />
                                                                <span id="qu-<?= $question['id']; ?>-B">
                                                                    <li><?= $options['option_B']; ?></li>
                                                                </span>
                                                                <input type="radio" name="<?= $question['id']; ?>" class="qu_options" value="C" />
                                                                <span id="qu-<?= $question['id']; ?>-C">
                                                                    <li><?= $options['option_C']; ?></li>
                                                                </span>
                                                                <input type="radio" name="<?= $question['id']; ?>" class="qu_options" value="D" />
                                                                <span id="qu-<?= $question['id']; ?>-D">
                                                                    <li><?= $options['option_D']; ?></li>
                                                                </span>
                                                                <?php
                                                                if ($options['option_E'] != '') {
                                                                ?>
                                                                    <input type="radio" name="<?= $question['id']; ?>" class="qu_options" value="E" />
                                                                    <span id="qu-<?= $question['id']; ?>-E">
                                                                        <li><?= $options['option_D']; ?></li>
                                                                    </span>
                                                                <?php
                                                                }
                                                                ?>
                                                            </ol>
                                                        </li>
                                                    <?php
                                                    }
                                                    ?>
                                                </ol>
                                                <center>
                                                    <!-- <input type="hidden" name="submit_mcq_paper" /> -->
                                                    <input type="hidden" name="student" value="<?= $_SESSION['id']; ?>" />
                                                    <input type="hidden" name="paper" value="<?= $id; ?>" />
                                                    <input type="hidden" name="attempt" id="attempt" value="<?= $attempt; ?>" />
                                                    <input type="submit" class="btn btn-success btn-block" id="submit-mcq-paper" value="Submit" />
                                                </center>
                                            </form>
                                        </div>
                                    </div>

                                </div>
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
    <script src="js/sweetalert.min.js" type="text/javascript"></script>
    <script src="ajax/js/check-login.js" type="text/javascript"></script>
    <script src="ajax/js/chat.js" type="text/javascript"></script>
    <script src="ajax/js/mcq-paper.js" type="text/javascript"></script>
    <script src="https://cdn.rawgit.com/mervick/emojionearea/master/dist/emojionearea.min.js"></script>


</body>

</html>