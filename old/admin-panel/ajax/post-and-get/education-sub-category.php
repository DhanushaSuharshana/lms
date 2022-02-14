<?php

include '../../../class/include.php';

//create catetgory
if (isset($_POST['create'])) {

    $EDUCATION_SUB_CATEGORY = new EducationSubCategory(NULL);

    $EDUCATION_SUB_CATEGORY->name = $_POST['name'];
    $EDUCATION_SUB_CATEGORY->category = $_POST['id'];

    if (isset($_POST['status'])) {
        $EDUCATION_SUB_CATEGORY->status = $_POST['status'];
    }
 

    $EDUCATION_SUB_CATEGORY->create();
    $result = [
        "message" => 'success'
    ];
    echo json_encode($result);
    exit();
}

if (isset($_POST['update'])) {

    $EDUCATION_SUB_CATEGORY = new EducationSubCategory($_POST['id']);

 
    $EDUCATION_SUB_CATEGORY->name = $_POST['name'];
    if (empty($_POST['status'])) {
        $EDUCATION_SUB_CATEGORY->status = 0;
    } else {
        $EDUCATION_SUB_CATEGORY->status = $_POST['status'];
    }

    $EDUCATION_SUB_CATEGORY->update();
    $result = [
        "message" => 'success'
    ];
    echo json_encode($result);
    exit();
}
?> 