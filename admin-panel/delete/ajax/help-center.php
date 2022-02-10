<?php

include '../../../class/include.php';
 

if ($_POST['option'] == 'delete') {

    $HELP_CENTER= new HelpCenter($_POST['id']);
  
    $result = $HELP_CENTER->delete();

    if ($result) {
        $data = array("status" => TRUE);
        header('Content-type: application/json');
        echo json_encode($data);
    }
}