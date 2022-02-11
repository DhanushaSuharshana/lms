<?php

include '../../../class/include.php';


$LECTURE = new Lecture(NULL);

$LECTURE->full_name = $_POST['full_name'];
$LECTURE->birth_day = $_POST['date'] . '/' . $_POST['month'] . '/' . $_POST['year'];
$LECTURE->age = $_POST['age'];
$LECTURE->nic_number = $_POST['nic_number'];
$LECTURE->phone_number = $_POST['phone_number'];
$LECTURE->address = $_POST['address'];
$LECTURE->district = $_POST['district'];
$LECTURE->city = $_POST['city'];
$LECTURE->email = $_POST['email'];
$LECTURE->school = $_POST['school'];
$LECTURE->collage = $_POST['collage'];
$LECTURE->experience = $_POST['experience'];
$LECTURE->mediums = serialize($_POST['mediums']);
$LECTURE->education_level = $_POST['education_level'];
$LECTURE->it_literacy = serialize($_POST['it_literacy']);
$LECTURE->facilities = serialize($_POST['facilities']);
$LECTURE->password = md5($_POST['password']);


$LECTURE->create();
if ($LECTURE->id) {
    $LECTURE->login($LECTURE->email, $_POST['password']); 
    $response = ["status" => 'success', "id" => $LECTURE->id];
    echo json_encode($response);
    exit();
} else {

    $response['status'] = 'error';
    echo json_encode($response);
    exit();
}
 

 