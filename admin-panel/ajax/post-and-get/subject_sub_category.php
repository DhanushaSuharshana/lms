<?php

include '../../../class/include.php';
if (isset($_POST['create'])) {

    $SUBJECT_SUB_CATEGORY = new SubjectSubCategory(NULL);


    $SUBJECT_SUB_CATEGORY->name = $_POST['name'];
    $SUBJECT_SUB_CATEGORY->education_subject = $_POST['id'];

    $SUBJECT_SUB_CATEGORY->create();
    $result = [
        "message" => 'success'
    ];
    echo json_encode($result);
    exit();
}

if (isset($_POST['update'])) {

    $SUBJECT_SUB_CATEGORY = new SubjectSubCategory($_POST['id']);

    $SUBJECT_SUB_CATEGORY->name = $_POST['name'];
    $SUBJECT_SUB_CATEGORY->update();
    $result = [
        "message" => 'success'
    ];
    echo json_encode($result);
    exit();
}