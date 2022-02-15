<?php

include_once '../../../class/User.php';
include_once '../../../class/Database.php';

$USER = new User(NULL);

$username = $_POST['username'];
$password = $_POST['password'];

$result = $USER->login($username, $password);

if (!empty($result)) {
    $result = ["status" => 'success'];
    echo json_encode($result);
    exit();
} else {
    $result = [
        "status" => 'error'
    ];
    echo json_encode($result);
    exit();
} 
