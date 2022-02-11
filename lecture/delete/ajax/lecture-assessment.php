<?php

include '../../../class/include.php';


if ($_POST['option'] == 'delete') {

    $LECTURE_ASSESSMENT = new LectureAssessment($_POST['id']);
    unlink('../../../upload/class/assessment/' . $LECTURE_ASSESSMENT->file_name);
    $result = $LECTURE_ASSESSMENT->delete();

    if ($result) {
        $data = array("status" => TRUE);
        header('Content-type: application/json');
        echo json_encode($data);
    }
}
 