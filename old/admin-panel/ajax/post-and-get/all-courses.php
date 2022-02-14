<?php

include '../../../class/include.php';

//create class Type
if ($_POST['option'] == 'GETALLCOURSES') {
    $COURSE = new StudentCourse(NULL);
    $result = $COURSE->getRegisteredCoursesByID($_POST['id']);
    echo json_encode($result);
    exit();
}
