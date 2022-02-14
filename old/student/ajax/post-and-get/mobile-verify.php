<?php

include '../../../class/include.php';



if ($_POST['action'] === 'MOBILECODE') {

    $STUDENT = new Student($_POST['id']);

    if ($STUDENT->GenarateMobileCode()) {

        $status = $STUDENT->sendSMS('SLYSC', $STUDENT->phone_number, "Your STUDENT ID is " . $STUDENT->student_id . " and your account verification code is " . $STUDENT->phone_code);

        if ($status) {
            header('Content-Type: application/json; charset=UTF8');
            $reture['status'] = 'success';
            echo json_encode($reture);
            exit();
        }
    }
}

if ($_POST['action'] === 'MOBILEVERYFY') {

    $STUDENT = new Student($_POST['id']);
    $CHECK_CODE = $STUDENT->checkMobileVerificationCode($_POST['code']);

    if ($CHECK_CODE == 'true') {
        $STUDENT->phone_verification = 1;
        $STUDENT->updateMobileVerification();

        $response['status'] = 'success';
        echo json_encode($response);
        exit();
    } else {
        $response['status'] = 'error';
        echo json_encode($response);
        exit();
    }
}
