<?php
 include '../../../class/include.php';

if (isset($_POST['PasswordReset'])) {
    $LECTURE = new Lecture(NULL);
    $code = $_POST["code"];
    $password = $_POST["password"];
    $confpassword = $_POST["confirmpassword"];

    if ($password === $confpassword && $password != NULL && $confpassword != NULL) {
        if ($LECTURE->SelectResetCode($code)) {
            $LECTURE->updatePassword($password, $code);
            header('Location:../../login.php?message=15');
        } else {
            header('Location: ../../reset-password.php?message=16');
        }
    } else {
        header('Location: ../../reset-password.php?message=17');
    }
 
}

