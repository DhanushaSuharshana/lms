<?php

include '../../../class/include.php';

$LECTURE = new Lecture(NULL);

$email = $_POST['email'];
$password = $_POST['password'];


if ($LECTURE->login($email, $password)) {
    $response['status'] = 'success';
    echo json_encode($response);
    exit();
} else {
    $response['status'] = 'error';
    $response['message'] = "Email or Password went wrong.";
    echo json_encode($response);
    exit();
}
?>
 
