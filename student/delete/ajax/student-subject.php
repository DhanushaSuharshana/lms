<?php

include '../../../class/include.php';


if ($_POST['option'] == 'delete') {

    $STUDENT_SUBJECT= new StudentSubject($_POST['id']);

    $result = $STUDENT_SUBJECT->delete();

    if ($result) {
        $data = array("status" => TRUE);
        header('Content-type: application/json');
        echo json_encode($data);
    }
}