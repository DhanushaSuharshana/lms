<?php

include '../../../class/include.php';


if ($_POST['option'] == 'delete') {

    $CATEGORY = new EducationCategory($_POST['id']);

    $result = $CATEGORY->delete();

    if ($result) {
        $data = array("status" => TRUE);
        header('Content-type: application/json');
        echo json_encode($data);
    }
}