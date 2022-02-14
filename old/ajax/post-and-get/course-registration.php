<?php

include '../../class/include.php';

$COURSE_REG = new CourseRegistration(NULL);

$COURSE_REG->full_name = $_POST['txtFullName'];
$COURSE_REG->email = $_POST['txtEmail'];
$COURSE_REG->address = $_POST['txtAddress'];
$COURSE_REG->district = $_POST['txtDistrict'];
$COURSE_REG->city = $_POST['txtCity'];
$COURSE_REG->phone_number = $_POST['txtPhone'];
$COURSE_REG->mobile_number = $_POST['txtMobile'];
$COURSE_REG->school = $_POST['txtSchool'];
$COURSE_REG->grade = $_POST['txtGrade'];
$COURSE_REG->dob = $_POST['txtDOB'];
$COURSE_REG->age = $_POST['txtAge'];



$COURSE_REG->create();
if ($COURSE_REG->id) {

    foreach ($_POST['chbCourse'] as $course) {
        $SCOURSE = new StudentCourse(NULL);
        $COURSE = new Course($course);
        $number = $COURSE->current_id + 1;

        $SCOURSE->registration_id = $COURSE_REG->id;
        $SCOURSE->course = $course;
        $SCOURSE->ref_no = 'ecoll/' . date('Y') . '/' . $COURSE->ref_code . '/' . $COURSE->batch . '/' . sprintf("%03s", $number);
        $res = $SCOURSE->create();
        if ($res) {
            $COURSE->current_id = $number;
            $COURSE->updateCurrentID();
        }
    }

    $response['status'] = 'success';
    $response['message'] = 'You have been registered successfully.';
    echo json_encode($response);
    exit();
} else {

    $response['status'] = 'error';
    echo json_encode($response);
    exit();
}
