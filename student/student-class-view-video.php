<!DOCTYPE html>
<?php
include '../class/include.php';
include_once(dirname(__FILE__) . '/auth.php');
$id = $_GET['id'];
$LECTURE_CLASS = new LectureClass($id);
$LECTURE = new Lecture($LECTURE_CLASS->lecture);
$LECTURE_CLASS_VIDEO = new LectureVideo(NULL);
date_default_timezone_set("Asia/Calcutta");
$today_time = date('Y-m-d H:i:A');
$today = date('Y-m-d');


//set start time
$start_time = $LECTURE_CLASS->start_date . ' ' . $LECTURE_CLASS->start_time;
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ecollege.lk - Student Class View </title>
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

</head>

<body class="layout layout-header-fixed">
    <div class="box"></div>
    <?php include './top-header.php'; ?>
    <div class="layout-main">
        <?php include './disable-navigation.php'; ?>
        <div class="layout-content">
            <div class="layout-content-body">
                <div class="row">
                    <div class="col-md-12" style="margin-top: 15px;">
                        <div class="col-md-12">
                            <h3 style="text-align: center"> <span class="text-success">
                                    <?php echo ucfirst($LECTURE_CLASS->name) ?></span> - <?php echo $LECTURE->full_name ?> </h3>
                        </div>

                        <div class="panel m-b-lg">
                            <div class="tab-content">
                                <div class="animated">
                                    <div class="middle-area" id="count_section">
                                        <div class="col-md-9">
                                            <?php
                                            $video_id = array();
                                            $papers = LessonMCQPaper::getMCQPapersByClassId($id, $today);
                                            foreach ($LECTURE_CLASS_VIDEO->getVideoByClass($id, $today) as $lecture_video) {
                                                array_push($video_id, $lecture_video['id']);

                                            ?>

                                                <div class="col-md-12">
                                                    
                                                    <?php
                                                    if ($lecture_video['is_youtube'] == 1) {
                                                    ?>
                                                        <iframe width="100%" height="520" src="https://www.youtube.com/embed/<?php echo substr($lecture_video['url'], 17) ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                                                    <?php
                                                    } else {
                                                    ?>
                                                        <!-- jitsi meet -->
                                                        <iframe width="100%" height="520" allow="camera; microphone; fullscreen; display-capture" src="<?= $lecture_video['url']; ?>" style="height: 520px; width: 100%; border: 0px;"></iframe>

                                                    <?php
                                                    }
                                                    ?>
                                                </div>

                                            <?php
                                            }
                                            ?>

                                            <div class="col-md-12">
                                                <center>
                                                    <?php
                                                    if ($papers) {
                                                        foreach ($papers as $key => $paper) {
                                                            $key++;
                                                            if (count($papers) > 1) {
                                                    ?>
                                                                <a href="view-mcq-paper.php?id=<?= $paper['id']; ?>" class="card-link col-sm-3" style="" id="enter-class" wid="">
                                                                    <p class="btn btn-success btn-block" style="width: 100%">View MCQ Paper <?= $key; ?></p>
                                                                </a>
                                                            <?php
                                                            } else {
                                                            ?>

                                                                <a href="view-mcq-paper.php?id=<?= $paper['id']; ?>" class="card-link" style="" id="enter-class" wid="">
                                                                    <p class="btn btn-success btn-block" style="width: 15%">View MCQ Paper</p>
                                                                </a>

                                                    <?php
                                                            }
                                                        }
                                                    }
                                                    ?>
                                                </center>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div style="height:400px; border:1px solid #ccc; overflow-y: scroll; margin-bottom:24px; padding:16px;" class="chat_history" data-studentid="<?php echo $_SESSION['id'] ?>" video_id="<?php echo $video_id['0'] ?>" id="chat_history_<?php echo $video_id['0'] ?>">
                                                <p>Start your Chat session now..!</p>
                                            </div>
                                            <div class="form-group">
                                                <textarea class="form-control" name="chat_message_<?php echo $video_id['0'] ?>" id="chat_message_<?php echo $video_id['0'] ?>" placeholder="Enter"></textarea>
                                            </div>
                                            <div class="form-group" align="right">
                                                <button type="button" name="send_chat" class="btn btn-info send_chat" student_id="<?php echo $_SESSION['id'] ?>" video_id="<?php echo $video_id['0'] ?>">Send</button></div>
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
    <input type="hidden" value="<?php echo $_SESSION['id'] ?>" id="student_id">
    </div>


    <script src="js/jquery.min.js" type="text/javascript"></script>
    <script src="js/vendor.min.js"></script>
    <script src="js/elephant.min.js"></script>
    <script src="js/application.min.js"></script>
    <script src="js/sweetalert.min.js" type="text/javascript"></script>
    <script src="ajax/js/check-login.js" type="text/javascript"></script>
    <script src="ajax/js/chat.js" type="text/javascript"></script>
    <script src="https://cdn.rawgit.com/mervick/emojionearea/master/dist/emojionearea.min.js"></script>


</body>

</html>