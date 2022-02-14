<?php

include_once(dirname(__FILE__) . '/Database.php');
include_once(dirname(__FILE__) . '/User.php');
include_once(dirname(__FILE__) . '/Student.php');
include_once(dirname(__FILE__) . '/Message.php');
include_once(dirname(__FILE__) . '/City.php');
include_once(dirname(__FILE__) . '/District.php');
include_once(dirname(__FILE__) . '/Upload.php'); 
include_once(dirname(__FILE__) . '/Setting.php');

function dd($data) {

    var_dump($data);

    exit();
}

function redirect($url) {

    $string = '<script type="text/javascript">';

    $string .= 'window.location = "' . $url . '"';

    $string .= '</script>';



    echo $string;

    exit();
}
