<?php

include '../../../class/include.php';

//Create Exam Paper 
if (isset($_POST['create-exam-paper'])) {

    $MCQ_PAPER = new LessonMCQPaper(NULL);

    $MCQ_PAPER->title = ucwords($_POST['title']);
    $MCQ_PAPER->lecturer = $_POST['lecturer'];


    $MCQ_PAPER->create();
    $result = ["status" => "success"];
    echo json_encode($result);
    exit();
}
//Edit Exam Paper 
if (isset($_POST['edit-exam-paper'])) {

    $MCQ_PAPER = new LessonMCQPaper($_POST['id']);

    $MCQ_PAPER->title = ucwords($_POST['title']);
    $MCQ_PAPER->lecturer = $_POST['lecturer'];


    $MCQ_PAPER->update();
    $result = ["status" => "success"];
    echo json_encode($result);
    exit();
}
//Arrange
if (isset($_POST['arrange'])) {

    foreach ($_POST['sort'] as $key => $img) {
        $key = $key + 1;
        $paper = LessonMCQPaper::arrange($key, $img);
    }
    $result = ["status" => 'success'];
    echo json_encode($result);
    exit();
}
