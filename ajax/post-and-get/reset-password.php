
<?php

include '../../class/include.php';



if (isset($_POST['PasswordReset'])) {
    $USER = new STUDENT(NULL);
    $code = $_POST["reset_code"];
    $password = $_POST["new_password"];
    $confpassword = $_POST["confirm_password"];

    if ($password === $confpassword && $password != NULL && $confpassword != NULL) {
        if ($USER->SelectResetCode($code)) {
            $USER->updatePassword($password, $code);
            $result = ["status" => 'success'];
            echo json_encode($result);
            exit();
        } else {
            $result = ["status" => 'error'];
            echo json_encode($result);
            exit();
        }
    } else {
        $result = ["status" => 'error'];
        echo json_encode($result);
        exit();
    }
}
