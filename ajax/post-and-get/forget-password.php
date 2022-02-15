<?php

include '../../class/include.php';


$STUDENT = new Student(NULL);

$phone_number = $_POST['phone_number'];

 

if ($STUDENT->checkReset($phone_number)) {

    if ($rand = $STUDENT->GenarateCode($phone_number)) {
        $res = $STUDENT->SelectForgetUser($phone_number);

        $username = $STUDENT->full_name;
        $phone_number = $STUDENT->phone_number;
        $resetcode = $rand;

        $status = $STUDENT->sendSMS('SLYSC', $STUDENT->phone_number, "Your account password reset code is " . $resetcode);

        if ($status) {
            $result = ["status" => 'success'];
            echo json_encode($result);
            exit();
        } else {
            $result = ["status" => 'error'];
            echo json_encode($result);
            exit();
        }
    }
} else {
    $result = ["status" => 'mobile_error'];
    echo json_encode($result);
    exit();
}
