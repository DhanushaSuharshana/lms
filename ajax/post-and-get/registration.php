<?php

include '../../class/include.php';

$STUDENT = new Student(NULL);

$STUDENT->full_name = $_POST['full_name'];
$STUDENT->nic_number = $_POST['nic_number'];
$STUDENT->gender = $_POST['gender'];
$STUDENT->age = $_POST['age'];
$STUDENT->phone_number = $_POST['phone_number'];
$STUDENT->address = $_POST['address'];
$STUDENT->education_level = $_POST['education_level'];
$STUDENT->student_id = $_POST['student_id'];
$STUDENT->email = $_POST['email'];
$STUDENT->password = md5($_POST['password']);

if ($_POST['password'] != $_POST['com_password']) {
    $response['status'] = 'error';
    $response['message'] = " Password and Confirm Password dosn't match. ";
    echo json_encode($response);
    exit();
} else {

    $STUDENT->create();
    if ($STUDENT->id) {

        $STUDENT->login($STUDENT->student_id, $STUDENT->password);

        $response['status'] = 'success';
        echo json_encode($response);
        exit();
    } else {

        $response['status'] = 'error';
        echo json_encode($response);
        exit();
    }
}