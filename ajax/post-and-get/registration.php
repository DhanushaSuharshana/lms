<?php

include '../../class/include.php';

$STUDENT = new Student(NULL);

$STUDENT->full_name = $_POST['full_name'];
$STUDENT->phone_number = $_POST['phone_number'];
$STUDENT->city = $_POST['city'];
$STUDENT->student_id = $_POST['student_id'];
$STUDENT->email = $_POST['email'];
$STUDENT->password = md5($_POST['password']);

if ($_POST['password'] != $_POST['com_password']) {
    $response['status'] = 'error';
    $response['message'] = " Password and Confirm Password dosn't match. ";
    echo json_encode($response);
    exit();
} else {

    $lastCreatedStu = $STUDENT->create();
    $STUDENT = new Student($lastCreatedStu);

    if ($STUDENT->id) {
        $STUDENT->login($STUDENT->student_id, $STUDENT->password);
        $response['status'] = 'success';
        $response['id'] = $STUDENT->id;
        echo json_encode($response);
        exit();
    } else {

        $response['status'] = 'error';
        echo json_encode($response);
        exit();
    }
}
