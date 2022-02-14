<?php
include '../class/include.php';
include './auth.php';
$id = $_GET['id'];
$student = $_GET['student'];
$PAPER = new LessonMCQPaper($id);
$LECTURE_CLASS = new LectureClass($PAPER->class);
$paper = StudentMarks::getStudentMarksByPaper($student, $id);
$STUDENT = new Student($student);
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ecollege.lk - View Student Answers </title>
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
                                <strong>View Student's Answers - <?= $STUDENT->full_name; ?></strong>
                            </div>
                            <div class="card-body">
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
                                                            <div class="count-values" id="show-marks"><?= $paper['marks']; ?>%</div>
                                                            <div class="topic">Marks</div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="count-values" id="show-grade"><?= $paper['grade']; ?></div>
                                                            <div class="topic">Grade</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-10  col-md-offset-1">

                                                    <form id="form-mcq">
                                                        <ol>
                                                            <?php
                                                            foreach (LessonQuestion::getQuestionsByPaper($id) as $key => $question) {
                                                                $key++;
                                                                $options = LessonQuestionOption::getOptionsByQuestionId($question['id']);
                                                                // dd($answer);
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
                                                                    <ol class="option_ol" type="01">
                                                                        <input type="radio" name="<?= $question['id']; ?>" id="input-<?= $options['id']; ?>-A" class="qu_options" value="A" disabled />
                                                                        <span id="qu-<?= $options['id']; ?>-A">
                                                                            <li><?= $options['option_A']; ?></li>
                                                                        </span>
                                                                        <input type="radio" name="<?= $question['id']; ?>" id="input-<?= $options['id']; ?>-B" class="qu_options" value="B" disabled />
                                                                        <span id="qu-<?= $options['id']; ?>-B">
                                                                            <li><?= $options['option_B']; ?></li>
                                                                        </span>
                                                                        <input type="radio" name="<?= $question['id']; ?>" id="input-<?= $options['id']; ?>-C" class="qu_options" value="C" disabled />
                                                                        <span id="qu-<?= $options['id']; ?>-C">
                                                                            <li><?= $options['option_C']; ?></li>
                                                                        </span>
                                                                        <?php
                                                                        if ($options['option_D'] != '') {
                                                                        ?>
                                                                            <input type="radio" name="<?= $question['id']; ?>" id="input-<?= $options['id']; ?>-D" class="qu_options" value="D" disabled />
                                                                            <span id="qu-<?= $options['id']; ?>-D">
                                                                                <li><?= $options['option_D']; ?></li>
                                                                            </span>
                                                                        <?php
                                                                        }
                                                                        if ($options['option_E'] != '') {
                                                                        ?>
                                                                            <input type="radio" name="<?= $question['id']; ?>" id="input-<?= $options['id']; ?>-E" class="qu_options" value="E" disabled />
                                                                            <span id="qu-<?= $options['id']; ?>-E">
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
                                                            <input type="hidden" name="student" id="student" value="<?= $student; ?>" />
                                                            <input type="hidden" name="paper" id="paper" value="<?= $id; ?>" />
                                                            <a href="view-student-marks.php?id=<?= $id; ?>" class="btn btn-success btn-block" style="width: 15%">Back</a>
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
<script>
    $(function() {
        $(".datepicker").datepicker({
            dateFormat: 'yy-mm-dd',
            minDate: 'today',
        });
    });

    $(function() {
        $('#start_time').timepicker({
            'scrollDefault': 'now'
        });
    });
</script>
<script src="ajax/js/lecture_class.js" type="text/javascript"></script>
<script src="delete/js/lecture-class.js" type="text/javascript"></script>


</html>