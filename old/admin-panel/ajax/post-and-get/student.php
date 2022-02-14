<?php

include '../../../class/include.php';


//Update Student Details
if ($_POST['action'] == 'UPDATE') {
    $STUDENT = new Student($_POST['id']);


    $STUDENT->full_name = $_POST['full_name'];
    $STUDENT->nic_number = $_POST['nic_number'];
    $STUDENT->gender = $_POST['gender'];
    $STUDENT->age = $_POST['age'];
    $STUDENT->phone_number = $_POST['phone_number'];
    $STUDENT->address = $_POST['address'];
    $STUDENT->email = $_POST['email'];

    if (isset($_POST['status'])) {
        $STUDENT->status = $_POST['status'];
    } else {
        $STUDENT->status = 0;
    }

    $STUDENT->updateActiveStudent();


    $result = [
        "message" => 'success'
    ];
    echo json_encode($result);
    exit();
}
?> 