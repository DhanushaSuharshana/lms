<?php
 include '../../../class/include.php';

if (isset($_POST['PasswordReset'])) {
    $STUDENT = new Student(NULL);
    $code = $_POST["code"];
    $password = $_POST["password"];
    $confpassword = $_POST["confirmpassword"];

    if ($password === $confpassword && $password != NULL && $confpassword != NULL) {
        if ($STUDENT->SelectResetCode($code)) {
            $STUDENT->updatePassword($password, $code);
            header('Location:../../login.php?message=15');
        } else {
            header('Location: ../../reset-password.php?message=16');
        }
    } else {
        header('Location: ../../reset-password.php?message=17');
    }
 
}

