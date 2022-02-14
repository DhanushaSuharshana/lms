<?php

include '../../../class/include.php';
if (isset($_POST['create'])) {

    $HELP_CENTER = new HelpCenter(NULL);


    $HELP_CENTER->title = $_POST['title'];
    $HELP_CENTER->description = $_POST['description'];
    $HELP_CENTER->for_lecturer = $_POST['to_whom'];
     
    $HELP_CENTER->create();
    $result = [
        "message" => 'success'
    ];
    echo json_encode($result);
    exit();
}

if (isset($_POST['update'])) {

    $HELP_CENTER = new HelpCenter($_POST['id']);

    $HELP_CENTER->title = $_POST['title'];
    $HELP_CENTER->description = $_POST['description'];
    $HELP_CENTER->for_lecturer = $_POST['to_whom'];
    $HELP_CENTER->update();
    
    $result = [
        "message" => 'success'
    ];
    echo json_encode($result);
    exit();
}