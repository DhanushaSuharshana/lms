<?php

include '../../../class/include.php';

if ($_POST['action'] === 'MOBILECODE') {

    $LECTURE = new Lecture($_POST['id']);

    if ($LECTURE->GenarateMobileCode()) {

        $status = $LECTURE->sendSMS('E College', $LECTURE->phone_number, "Your account verification code is " . $LECTURE->phone_code);

        if ($status) {
            header('Content-Type: application/json; charset=UTF8');
            $reture['status'] = 'success';
            echo json_encode($reture);
            exit();
        }
    }
}

if ($_POST['action'] === 'MOBILEVERYFY') {

    $LECTURE = new Lecture($_POST['id']);
    $CHECK_CODE = $LECTURE->checkMobileVerificationCode($_POST['code']);

    if ($CHECK_CODE == 'true') {
        $LECTURE->phone_verification = 1;
        $LECTURE->updateMobileVerification();

        $response['status'] = 'success';
        echo json_encode($response);
        exit();
    } else {
        $response['status'] = 'error';
        echo json_encode($response);
        exit();
    }
}



