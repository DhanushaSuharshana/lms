<?php

include '../class/include.php';

$LECTURE = new Lecture(NULL);

if ($LECTURE->logOut()) {
    header('Location:login.php');
} else {
    header('Location: ./?message=2');
}

