<?php

include '../class/include.php';

$USER = new User(NULL);
$result = $USER->logOut();
if ($result) {
      redirect('login.php'); 
} else {
    header('Location: ./?message=2');
}

