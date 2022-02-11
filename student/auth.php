<?php

if (!isset($_SESSION)) {
    session_start();
}

$STUDENT_SUBJECT = new StudentSubject(NULL);
$STUDENT = new Student(NULL);
if (!$STUDENT_SUBJECT->checkStudentSubjects($_SESSION['id'])) {
    redirect('complete-profile.php?message=19');
} else {
    if (!$STUDENT->authenticate()) {
        redirect('login.php');
    }
}


if (!$STUDENT->authenticate()) {
    redirect('login.php');
}
