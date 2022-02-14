<?php

include '../../../class/include.php';


if ($_POST['option'] == 'delete') {

    $LECTURE_MCQ = new LectureMcq($_POST['id']);
    unlink('../../../upload/class/mcq/' . $LECTURE_MCQ->file_name);
    $result = $LECTURE_MCQ->delete();

    if ($result) {
        $data = array("status" => TRUE);
        header('Content-type: application/json');
        echo json_encode($data);
    }
}
 