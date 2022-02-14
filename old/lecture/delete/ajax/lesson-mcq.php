<?php

include '../../../class/include.php';


if ($_POST['option'] == 'delete') {

    $PAPER = new LessonMCQPaper($_POST['id']);
    $result = $PAPER->delete();

    if ($result) {
        $data = array("status" => TRUE);
        header('Content-type: application/json');
        echo json_encode($data);
    }
}
 