<?php

include '../../../class/include.php';
 

if ($_POST['option'] == 'delete') {

    $STUDENT = new Category($_POST['id']);
  
    $result = $STUDENT->delete();

    if ($result) {
        $data = array("status" => TRUE);
        header('Content-type: application/json');
        echo json_encode($data);
    }
}