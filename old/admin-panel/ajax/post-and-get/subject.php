<?php

include '../../../class/include.php';
if (isset($_POST['create'])) {

    $EDUCATION_SUBJECT = new EducationSubject(NULL);


    $EDUCATION_SUBJECT->name = $_POST['name'];
    $EDUCATION_SUBJECT->sub_category = $_POST['category'];
    $EDUCATION_SUBJECT->description = $_POST['description'];

    $EDUCATION_SUBJECT->create();
    $result = [
        "message" => 'success'
    ];
    echo json_encode($result);
    exit();
}

if (isset($_POST['update'])) {

    $EDUCATION_SUBJECT = new EducationSubject($_POST['id']);

    $EDUCATION_SUBJECT->name = $_POST['name'];
     $EDUCATION_SUBJECT->description = $_POST['description'];
    $EDUCATION_SUBJECT->update();
    $result = [
        "message" => 'success'
    ];
    echo json_encode($result);
    exit();
}