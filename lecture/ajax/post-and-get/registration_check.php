<?php

include '../../../class/include.php';
$LECTURE = new Lecture(NULL);

$CHECK_EMAIL = $LECTURE->checkRegistrationEmail($_POST['email']);
$CHECK_NIC_NUMBER = $LECTURE->checkRegistrationNicNumber($_POST['nic_number']);
$CHECK_MOBILE_NUMBER = $LECTURE->checkRegistrationMobile($_POST['phone_number']);

if ($CHECK_EMAIL == 'true') {
    $response['status'] = 'error';
    $response['message'] = " Your Email is already exsists.!. Enter another Email address.";
    echo json_encode($response);
    exit();
} else if ($CHECK_NIC_NUMBER == 'true') {
    $response['status'] = 'error';
    $response['message'] = " Your Nic Number is already exsists.!. Enter another NIC Number.";
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

 