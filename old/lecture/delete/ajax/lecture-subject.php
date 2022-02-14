<?php

include '../../../class/include.php';


if ($_POST['option'] == 'delete') {

    $LECTURE_SUBJECT= new LectureSubject($_POST['id']);

    $result = $LECTURE_SUBJECT->delete();

    if ($result) {
        $data = array("status" => TRUE);
        header('Content-type: application/json');
        echo json_encode($data);
    }
}