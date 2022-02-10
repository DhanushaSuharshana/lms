<?php

include '../../../class/include.php';
 

if ($_POST['option'] == 'delete') {

    $COURSE = new Course($_POST['id']);
  
    $result = $COURSE->delete();

    if ($result) {
        $data = array("status" => TRUE);
        header('Content-type: application/json');
        echo json_encode($data);
    }
}