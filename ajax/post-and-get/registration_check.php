<?php

include '../../class/include.php';

$STUDENT = new Student(NULL);

$CHECK_EMAIL = $STUDENT->checkRegistrationEmail($_POST['email']);
$CHECK_MOBILE_NUMBER = $STUDENT->checkRegistrationMobile($_POST['phone_number']);

if ($_POST['password'] != $_POST['com_password']) {
    $response['status'] = 'error';
    $response['message'] = " Password and Confirm Password dosn't match. ";
    echo json_encode($response);
    exit();
} else if ($CHECK_EMAIL == 'true') {
    $response['status'] = 'error';
    $response['message'] = " Your Email is already exsists.!. Enter another Email address.";
    echo json_encode($response);
    exit();
} else if ($CHECK_MOBILE_NUMBER == 'true') {
    $response['status'] = 'error';
    $response['message'] = " Your Mobile Number is already exsists.!. Enter another Mobile Number.";
    echo json_encode($response);
    exit();
} else {
    $response['status'] = 'success';
    echo json_encode($response);
    exit();
}
