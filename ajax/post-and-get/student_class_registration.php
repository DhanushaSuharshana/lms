<?php

include '../../class/include.php';


//create Classes Registration
if ($_POST['option'] == 'create') {

    $STUDENT_REGISTRATION = new StudentRegistration(NULL);

    $STUDENT_REGISTRATION->student_id = $_POST['stu_id'];
    $STUDENT_REGISTRATION->class_id = $_POST['class_id'];
    $STUDENT_REGISTRATION->lecture_id = $_POST['lecture_id'];
    $STUDENT_REGISTRATION->create();


    $result = ["status" => 'success'];
    echo json_encode($result);
    exit();
}

//remove selected class
if ($_POST['option'] == 'delete') {

   $STUDENT_REGISTRATION = new StudentRegistration($_POST['id']);

    $result = $STUDENT_REGISTRATION->delete();
  
    if ($result) {
        $data = array("status" => TRUE);
        header('Content-type: application/json');
        echo json_encode($data);
    }
}
?> 