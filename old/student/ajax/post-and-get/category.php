<?php

include_once '../../../class/include.php';

if ($_POST['action'] == 'GET_SUB_CATEGORY_BY_CATEGORY') {

    $EDUCATION_SUB_CATEGORY = new EducationSubCategory(NULL);

    $result = $EDUCATION_SUB_CATEGORY->getSubCategoryByCategory($_POST["category"]);
    echo json_encode($result);
    header('Content-type: application/json');
    exit();
}

if ($_POST['action'] == 'GET_SUBJECT_BY_SUB_CATEGORY') {

    $EDUCATION_SUBJECT = new EducationSubject(NULL);
    $result = $EDUCATION_SUBJECT->getSubjectBySubCategory($_POST["sub_category"]);
    echo json_encode($result);
    header('Content-type: application/json');
    exit();
}

