<?php

include '../../../class/include.php';

if ($_POST['action'] == 'GET_SUB_CATEGORY_BY_CATEGORY') {

    $SUB_CATEGORY = new EducationSubCategory(NULL);

    $result = $SUB_CATEGORY->CategoryByEducationId($_POST["category"]);
    echo json_encode($result);
    header('Content-type: application/json');
    exit();
}

