<?php

include '../../../class/include.php';

$STUDENT = new Student(NULL);

$STUDENT->full_name = $_POST['full_name'];
$STUDENT->nic_number = $_POST['nic_number'];
$STUDENT->gender = $_POST['gender'];
$STUDENT->age = $_POST['age'];
$STUDENT->city = $_POST['city'];
$STUDENT->phone_number = $_POST['phone_number'];
$STUDENT->address = $_POST['address'];
$STUDENT->student_id = $_POST['student_id'];
$STUDENT->email = $_POST['email'];
$STUDENT->password = md5($_POST['password']);


$STUDENT->create();
if ($STUDENT) {

    $STUDENT->login($STUDENT->student_id, $_POST['password']);
    // $STUDENT->sendStudentRegistrationEmail();
    $response = ["status" => 'success', "id" => $STUDENT];

    echo json_encode($response);
    exit();
} else {

    $response['status'] = 'error';
    echo json_encode($response);
    exit();
}
