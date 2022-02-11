<?php

include '../../../class/include.php';


//Update Student Details
if ($_POST['action'] == 'UPDATE') {
    $STUDENT = new Student($_POST['id']);


    $STUDENT->sub_category = $_POST['sub_category'];
    $STUDENT->update();


    $result = ["id" => $_POST['id']];
    echo json_encode($result);
    exit();
}

?> 