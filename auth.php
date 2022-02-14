<?php

if (!isset($_SESSION)) {
    session_start();
}



$STUDENT = new Student($_SESSION['id']);
 

if (!$STUDENT->authenticate()) {
    redirect('login.php');
}
