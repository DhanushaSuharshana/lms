<?php

include '../../../class/include.php';

if ($_POST['action'] == 'ADD_LIVE_VIDEO') {
    $LECTURE_VIDEO = new LectureVideo(NULL);

    $LECTURE_VIDEO->url = 'https://meet.jit.si/' . $_POST['roomName'];
    $LECTURE_VIDEO->is_youtube = 0;
    $LECTURE_VIDEO->date = date('Y-m-d');
    $LECTURE_VIDEO->class_id = $_POST['class_id'];
    $LECTURE_VIDEO->lecture_id = $_POST['lecture_id'];
    // $LECTURE_VIDEO->date = $_POST['date'];
    // $LECTURE_VIDEO->class_id = $_POST['class_id'];
    // $LECTURE_VIDEO->lecture_id = $_POST['lecture_id'];


    $LECTURE_VIDEO->create();
    $result = ["status" => "sucess"];
    echo json_encode($result);
    exit();
}
