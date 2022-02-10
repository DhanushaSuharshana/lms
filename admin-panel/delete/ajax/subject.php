<?php

include '../../../class/include.php';
 

if ($_POST['option'] == 'delete') {

    $EDUCATION_SUBJECT = new EducationSubject($_POST['id']);
  
    $result = $EDUCATION_SUBJECT->delete();

    if ($result) {
        $data = array("status" => TRUE);
        header('Content-type: application/json');
        echo json_encode($data);
    }
}