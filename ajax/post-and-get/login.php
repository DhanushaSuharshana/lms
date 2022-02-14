<?php

include '../../class/include.php';

$STUDENT = new Student(NULL);

$student_id = $_POST['student_id'];
$password = $_POST['password'];


if ($STUDENT->login($student_id, $password)) {
    $response['status'] = 'success';
    echo json_encode($response);
    exit();
} else {
    $response['status'] = 'error';
    $response['message'] = "Student ID or Password went wrong.";
    echo json_encode($response);
    exit();
}
