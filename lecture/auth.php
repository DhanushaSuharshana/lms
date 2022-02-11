<?php

if (!isset($_SESSION)) {
    session_start();
}



if (!LectureSubject::checkLectureSubjects($_SESSION['id'])) {
    redirect('create-subjects.php?message=19');
} else {
    if (!Lecture::authenticate()) {
        redirect('login.php');
    }
}
 