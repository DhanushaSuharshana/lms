<?php

include '../class/include.php';

$STUDENT = new Student(NULL);

if ($STUDENT->logOut()) {
    header('Location:login.php');
} else {
    header('Location: ./?message=2');
}

