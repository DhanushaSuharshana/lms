<?php

include '../../../class/include.php';
 

if ($_POST['option'] == 'delete') {

    $SUBJECT_SUB_CATEGORY = new SubjectSubCategory($_POST['id']);
  
    $result = $SUBJECT_SUB_CATEGORY->delete();

    if ($result) {
        $data = array("status" => TRUE);
        header('Content-type: application/json');
        echo json_encode($data);
    }
}