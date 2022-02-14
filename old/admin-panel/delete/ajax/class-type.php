<?php

include '../../../class/include.php';
 

if ($_POST['option'] == 'delete') {

    $CLASS_TYPE = new ClassType($_POST['id']);
  
    $result = $CLASS_TYPE->delete();

    if ($result) {
        $data = array("status" => TRUE);
        header('Content-type: application/json');
        echo json_encode($data);
    }
}