<?php

include '../../../class/include.php';


if ($_POST['option'] == 'delete') {

    $LECTURE_VIDEO = new LectureVideo($_POST['id']); 
    $result = $LECTURE_VIDEO->delete();

    if ($result) {
        $data = array("status" => TRUE);
        header('Content-type: application/json');
        echo json_encode($data);
    }
}
 