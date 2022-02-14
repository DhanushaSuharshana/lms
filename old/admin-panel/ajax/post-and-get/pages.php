<?php

include '../../../class/include.php';

if (isset($_POST['create'])) {

    $PAGES = new Page(NULL);


    $PAGES->title = $_POST['title'];
    $PAGES->description = $_POST['description'];

    $PAGES->create();
    $result = ["status" => 'success'];
    header('Location: ../../create-page.php?message=10');
    exit();
}

if (isset($_POST['update'])) {

    $PAGES = new Page($_POST['id']);

    $PAGES->title = $_POST['title'];
    $PAGES->description = $_POST['description'];
    $PAGES->update();
    header('Location: ../../edit-page.php?message=9&&id='.$_POST['id']);
    exit();
}