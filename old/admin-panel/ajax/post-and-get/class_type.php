<?php

include '../../../class/include.php';

//create class Type
if (isset($_POST['create'])) {

    $CLASS_TYPE = new ClassType(NULL);


    $CLASS_TYPE->name = $_POST['name'];
    $CLASS_TYPE->create();

    $result = [
        "message" => 'success'
    ];
    echo json_encode($result);
    exit();
}

if (isset($_POST['update'])) {

    $CLASS_TYPE = new ClassType($_POST['id']);

    $CLASS_TYPE->name = $_POST['name'];
    $CLASS_TYPE->update();
    $result = [
        "message" => 'success'
    ];
    echo json_encode($result);
    exit();
}