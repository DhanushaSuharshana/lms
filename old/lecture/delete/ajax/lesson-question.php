<?php

include '../../../class/include.php';


if ($_POST['option'] == 'delete') {

    $QUESTION = new LessonQuestion($_POST['id']);
    $result = $QUESTION->delete();

    if ($result) {
        $data = array("status" => TRUE);
        header('Content-type: application/json');
        echo json_encode($data);
    }
}
 