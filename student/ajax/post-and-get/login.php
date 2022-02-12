<?php

 include '../../../class/include.php';

$STUDENT = new Student(NULL);

$student_id = filter_var($_POST['student_id'], FILTER_SANITIZE_STRING);
$password = $_POST['password'];


if ($STUDENT->login($student_id, $password)) {
    $response['status'] = 'success';
    // $response['url'] = $_POST['back_url'];
    $response['url'] = 'index.php';
  
    echo json_encode($response);
    exit();
} else {
    $response['status'] = 'error';
    $response['message'] = "Student ID or Password went wrong.";
    echo json_encode($response);
    exit();
     
}
