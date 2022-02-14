<?php
include '../class/include.php';
if (!isset($_SESSION)) {
    session_start();
}
$_SESSION['back_url'] = '';
if (!Student::authenticate()) {
    $_SESSION['back_url'] = 'exam-papers.php';
    redirect('login.php');
}
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ecollege.lk - Exam Papers </title>
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

<body class="layout layout-header-fixed exam-paper-all-page">
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
                                <strong>Exam Papers</strong>
                            </div>
                            <div class="card-body table-card-body">
                                <table id="demo-datatables-colreorder-1" class="table table-hover table-striped table-nowrap dataTable" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Paper</th>
                                            <th>Attempt</th>
                                            <th>Attended At</th>
                                            <th>Marks</th>
                                            <th>Grade</th>
                                            <th>Option</th>
                                        </tr>
                                    </thead>
                                    <?php
                                    $papers = LessonMCQPaper::getAllExampapers();
                                    foreach ($papers as $key => $paper) {
                                        $marks = StudentMarks::getStudentMarksByPaper($_SESSION['id'], $paper['id']);

                                    ?>

                                        <tr>
                                            <td><?php echo $key + 1; ?></td>
                                            <td><?php echo $paper['title']; ?></td>
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
                                                        <a href="view-mcq-paper-answers.php?id=<?= $paper['id']; ?>&exam" class="card-link" style="" id="enter-class" wid="">
                                                            <p class="btn btn-warning btn-block">View Answers</p>
                                                        </a>
                                                    <?php
                                                    } else {
                                                    ?>
                                                        <a href="view-mcq-paper.php?id=<?= $paper['id']; ?>&exam" class="card-link" style="" id="enter-class" wid="">
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
                                                    <a href="view-mcq-paper.php?id=<?= $paper['id']; ?>&exam" class="card-link" style="" id="enter-class" wid="">
                                                        <p class="btn btn-success btn-block">Attend now</p>
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
                                            <th>Paper</th>
                                            <th>Attempt</th>
                                            <th>Attended At</th>
                                            <th>Marks</th>
                                            <th>Grade</th>
                                            <th>Option</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include './footer.php'; ?>
    </div>




    <script src="js/jquery.min.js" type="text/javascript"></script>
    <script src="js/vendor.min.js"></script>
    <script src="js/elephant.min.js"></script>
    <script src="js/application.min.js"></script>
    <script src="js/profile.min.js"></script>
    <script src="js/sweetalert.min.js" type="text/javascript"></script>

    <script src="ajax/js/education_category.js" type="text/javascript"></script>
    <script src="ajax/js/student.js" type="text/javascript"></script>
    <script src="ajax/js/check-login.js" type="text/javascript"></script>
    <script src="ajax/js/category.js" type="text/javascript"></script>
    <script src="delete/js/student-subject.js" type="text/javascript"></script>


</body>

</html>