<?php

include '../../class/include.php';

if ($_POST['action'] == 'GET_FILTER_ADDS') {


    $district = '';
    $city = '';
    $subject = '';
    $setlimit = '';
    $page = '';



//Catch the data

    if (isset($_POST["district"])) {
        $district = $_POST["district"];
    }
    if (isset($_POST["city"])) {
        $city = $_POST["city"];
    }

    if (isset($_POST["subject"])) {
        $subject = $_POST["subject"];
    }

    if (isset($_POST["setlimit"])) {
        $setlimit = $_POST["setlimit"];
    }

    if (isset($_POST["pagelimit"])) {
        $page = $_POST["pagelimit"];
    }
    
    $LECTURE = new Lecture(NULL);
    $result = $LECTURE->getAllByFilter($district,$city, $subject,0, 1);
    echo $result;
}


