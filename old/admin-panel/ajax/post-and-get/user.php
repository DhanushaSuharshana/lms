<?php

include '../../../class/include.php';

//Profile Change
if ($_POST['action'] == 'CHANGEPROFILE') {

    $USER = new User($_POST['id']);
    $folder = '../../upload/user/profile/';

    $imgName = Helper::randamId();

    $handle = new Upload($_FILES['image_name']);

    if (empty($USER->image_name)) {
        if ($handle->uploaded) {

            $handle->image_resize = true;
            $handle->file_new_name_ext = 'jpg';
            $handle->image_ratio_crop = 'C';
            $handle->file_new_name_body = $imgName;

            $handle->image_x = 128;
            $handle->image_y = 128;

            $handle->Process($folder);

            if ($handle->processed) {

                user::ChangeProPic($_POST["id"], $handle->file_dst_name);
                header('Content-Type: application/json');

                $result = [
                    "filename" => $handle->file_dst_name,
                    "message" => 'success'
                ];
                echo json_encode($result);
                exit();
            } else {

                header('Content-Type: application/json');

                $result = [
                    "message" => 'error'
                ];
                echo json_encode($result);
                exit();
            }
        } else {

            header('Content-Type: application/json');

            $result = [
                "message" => 'error'
            ];
            echo json_encode($result);
            exit();
        }
    } else {
        unlink("$folder" . $USER->image_name);
        if ($handle->uploaded) {

            $handle->image_resize = true;
            $handle->file_new_name_ext = 'jpg';
            $handle->image_ratio_crop = 'C';
            $handle->file_new_name_body = $imgName;

            $handle->image_x = 128;
            $handle->image_y = 128;

            $handle->Process($folder);

            if ($handle->processed) {

                User::ChangeProPic($_POST["id"], $handle->file_dst_name);

                header('Content-Type: application/json');

                $result = [
                    "filename" => $handle->file_dst_name,
                    "message" => 'success'
                ];
                echo json_encode($result);
                exit();
            } else {

                header('Content-Type: application/json');

                $result = [
                    "message" => 'error'
                ];
                echo json_encode($result);
                exit();
            }
        } else {

            header('Content-Type: application/json');

            $result = [
                "message" => 'error'
            ];
            echo json_encode($result);
            exit();
        }
    }
}



if (isset($_POST['UPDATE'])) {



    $USER = new User(NULL);

    $USER->id = $_POST['id'];
    $USER->name = $_POST['name'];
    $USER->username = $_POST['username'];
    $USER->email = $_POST['email'];
    $USER->isActive = 1;

    $result = $USER->update();

    if ($result) {
        header("location: ../../profile.php?id=" . $USER->id . "&&message=9");
    } else {
        
    }
}