<?php

include '../../../class/include.php';
 

if ($_POST['option'] == 'delete') {

    $LECTURE = new Lecture($_POST['id']);
  
    $result = $LECTURE->delete();

    if ($result) {
        $data = array("status" => TRUE);
        header('Content-type: application/json');
        echo json_encode($data);
    }
}