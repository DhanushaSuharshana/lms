<?php

include '../../../class/include.php';


if ($_POST['option'] == 'delete') {

    $LECTURE_CLASS = new LectureClass($_POST['id']);

    $result = $LECTURE_CLASS->delete();

    if ($result) {
        $data = array("status" => TRUE);
        header('Content-type: application/json');
        echo json_encode($data);
    }
}
 