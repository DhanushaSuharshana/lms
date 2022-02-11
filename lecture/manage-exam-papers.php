<?php
include '../class/include.php';
include './auth.php';
?>

<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ecollege.lk - Create Exam Paper </title>
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
    <link href="css/jm.spinner.css" rel="stylesheet" type="text/css" />
    <link href="css/sweetalert.css" rel="stylesheet" type="text/css" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/demo.min.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">

    <style>
        .profile-pic {
            position: relative;
            display: inline-block;
        }


        .fa-color {

            margin-top: -43px;
        }

        body {
            font-family: 'Roboto';
        }

        body {
            font-family: arial, sans serif
        }

        ul {
            list-style-type: none;
            margin: 0;
            padding: 0
        }

        .main-wrapper {
            max-width: 768px;
            margin: 150px auto
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
                        <div class="row">
                            <div class="col-md-12">

                                <div class="card">
                                    <div class="card-header">
                                        <strong>Create Exam Paper</strong>
                                    </div>
                                </div>
                                <form class="demo-form-wrapper card " style="padding: 50px" id="form-exam-paper">
                                    <div class="form form-horizontal">
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label " for="name" style="text-align: left">Title: </label>
                                            <div class="col-sm-10">
                                                <input id="title" name="title" class="form-control  " type="text" placeholder="Enter Title ">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-3"></div>
                                            <div class="col-md-3"></div>
                                            <div class="col-md-4"></div>
                                            <div class="col-md-2">
                                                <input type="hidden" name="create-exam-paper">
                                                <input type="hidden" name="lecturer" value="<?php echo $_SESSION['id'] ?>">
                                                <input type="submit" class="btn btn-primary btn-block" value="ADD" id="create-exam-paper">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-12">

                                <div class="card">
                                    <div class="card-header">
                                        <strong>Manage Exam Paper</strong>
                                        <?php
                                        if ($_SESSION['id'] == 42) {
                                        ?>
                                            <div class="col-md-3 arrange-all-exam-papers-btn">
                                                <a href="arrange-exam-papers.php" class="btn btn-success btn-block">Arrange All Exam Papers</a>
                                            </div>
                                        <?php
                                        }
                                        ?>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <table id="demo-datatables-colreorder-1" class="table table-hover table-striped table-nowrap dataTable" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Created At</th>
                                                <th>Title</th>
                                                <th>Option</th>
                                            </tr>
                                        </thead>
                                        <?php
                                        foreach (LessonMCQPaper::getExampapersByLecture($_SESSION['id']) as $key => $exam_paper) {
                                            $key++;
                                        ?>
                                            <tr id="row_<?php echo $exam_paper['id'] ?>">
                                                <td><?php echo $key ?></td>
                                                <td><?php echo $exam_paper['created_at'] ?></td>
                                                <td><?php echo $exam_paper['title'] ?></td>
                                                <td>
                                                    <a href="edit-exam-paper.php?id=<?php echo $exam_paper['id'] ?>" class="op-link btn btn-sm btn-info" title="Edit Paper"><i class="icon icon-pencil"></i></a> |
                                                    <a href="#" class="delete-mcq-paper btn btn-sm btn-danger" data-id="<?php echo $exam_paper['id'] ?>" title="Delete Paper"><i class="waves-effect icon icon-trash" data-type="cancel"></i></a> |
                                                    <a href="manage-questions.php?id=<?php echo $exam_paper['id'] ?>" class="btn btn-sm btn-warning" title="Manage Questions"><i class="waves-effect icon icon-question" data-type="cancel"></i></a> |
                                                    <a href="view-student-marks.php?id=<?php echo $exam_paper['id'] ?>&exam" class="btn btn-sm btn-primary" title="View Marks"><i class="waves-effect icon icon-eye" data-type="cancel"></i></a>

                                                </td>
                                            </tr>
                                        <?php
                                        }
                                        ?>
                                        <tfoot>
                                            <tr>
                                                <th>ID</th>
                                                <th>Created At</th>
                                                <th>Title</th>
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
        </div>

    </div>
</body>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="js/vendor.min.js"></script>
<script src="js/elephant.min.js"></script>
<script src="js/application.min.js"></script>
<script src="js/sweetalert.min.js" type="text/javascript"></script>
<script src="https://code.jquery.com/jquery-3.2.0.min.js"></script>
<script src="js/hr.timePicker.min.js" type="text/javascript"></script>
<script src="js/jm.spinner.js" type="text/javascript"></script>
<script src="ajax/js/exam-paper.js" type="text/javascript"></script>
<script src="delete/js/lesson-mcq.js" type="text/javascript"></script>
<script src="ajax/js/city.js" type="text/javascript"></script>


<script>
    $(document).ready(function() {
        $('#payment_type').change(function() {
            var type = $(this).val();
            if (type == 1) {
                $('#class_fee_show').show();
            } else {
                $('#class_fee_show').hide();
            }
        });
    });
    $(document).ready(function() {
        $(".hr-time-picker").hrTimePicker({
            disableColor: "#989c9c", // red, green, #000
            enableColor: "#ff5722", // red, green, #000
            arrowTopSymbol: "&#9650;", // ▲ -- Enter html entity code
            arrowBottomSymbol: "&#9660;" // ▼ -- Enter html entity code
        });
    });
</script>
<script type="text/javascript">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-36251023-1']);
    _gaq.push(['_setDomainName', 'jqueryscript.net']);
    _gaq.push(['_trackPageview']);
    (function() {
        var ga = document.createElement('script');
        ga.type = 'text/javascript';
        ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(ga, s);
    })();
</script>

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
            'scrollDefault': 'now',
            'forceRoundTime': true,
            'timeFormat': 'h:i A'
        });
    });
    $(function() {
        $('#end_time').timepicker({
            'scrollDefault': 'now',
            'forceRoundTime': true,
            'timeFormat': 'h:i A'
        });
    });
</script>

</html>