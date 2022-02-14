<?php

include '../../../class/include.php';


if ($_POST['option'] == 'delete') {

    $EDUCATION_SUB_CATEGORY = new EducationSubCategory($_POST['id']);

    $result = $EDUCATION_SUB_CATEGORY->delete();

    if ($result) {
        $data = array("status" => TRUE);
        header('Content-type: application/json');
        echo json_encode($data);
    }
}