<?php

include '../../../class/include.php';


if ($_POST['option'] == 'delete') {

    $LECTURE_TUTORIALS= new LectureTutorial($_POST['id']);
    unlink('../../../upload/class/tutorials/' . $LECTURE_TUTORIALS->file_name);
    $result = $LECTURE_TUTORIALS->delete();

    if ($result) {
        $data = array("status" => TRUE);
        header('Content-type: application/json');
        echo json_encode($data);
    }
}
 