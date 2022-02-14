<?php

include '../../../class/include.php';


if ($_POST['action'] == 'CREATE') {

    $CHAT = new Chat(NULL);
    $CHAT->lecture_id = $_POST["lecture_id"];
    $CHAT->video_id = $_POST["video_id"];
    $CHAT->chat_message = $_POST["chat_message"];
    $CHAT->type = 'L';

    $result = $CHAT->create();

    if ($result) {
        echo $CHAT->fetch_user_chat_history($_POST["video_id"], $_POST["lecture_id"], 'L');
    }
}


if ($_POST['action'] == 'GETALL') {
    $CHAT = new Chat(NULL);
   echo $CHAT->fetch_user_chat_history($_POST["video_id"], $_POST["lecture_id"], 'L');
}

