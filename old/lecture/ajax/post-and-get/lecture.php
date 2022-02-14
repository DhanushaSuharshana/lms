<?php

include '../../../class/include.php';


//Update Lecture Details
if ($_POST['action'] == 'UPDATE') {
    $LECTURE = new Lecture($_POST['id']);


    $LECTURE->full_name = $_POST['full_name'];
    $LECTURE->birth_day = $_POST['date_of_birth'];
    $LECTURE->age = $_POST['age'];
    $LECTURE->nic_number = $_POST['nic_number'];
    $LECTURE->address = $_POST['address'];
    $LECTURE->district = $_POST['district'];
    $LECTURE->city = $_POST['city'];
    $LECTURE->phone_number = $_POST['phone_number'];
    $LECTURE->email = $_POST['email'];

    $LECTURE->mediums = serialize($_POST['mediums']);
    $LECTURE->grade = $_POST['grade'];
    $LECTURE->school = $_POST['school'];
    $LECTURE->collage = $_POST['collage'];
    $LECTURE->education_level = $_POST['education_level'];
    $LECTURE->experience = $_POST['experience'];
    $LECTURE->it_literacy = serialize($_POST['it_literacy']);
    $LECTURE->facilities = serialize($_POST['facilities']);
    $LECTURE->account_number = $_POST['account_number'];
    $LECTURE->account_holder_name = $_POST['account_holder_name'];
    $LECTURE->bank_name = $_POST['bank_name'];
    $LECTURE->branch = $_POST['branch'];
    $LECTURE->hear_about_us = $_POST['hear_about_us'];

    $LECTURE->update();


    $result = ["id" => $_POST['id']];
    echo json_encode($result);
    exit();
}

//Verify Id Card
if ($_POST['action'] == 'UPDATENICCARD') {

    $LECTURE = new Lecture($_POST['id']);

    $dir_dest = '../../upload/student/nic_card/front/';
    $dir_dest_thumb = '../../upload/student/nic_card/front/thumb/';

    $dir_dest_back = '../../upload/student/nic_card/back/';
    $dir_dest_thumb_back = '../../upload/student/nic_card/back/thumb/';

    $imgName = Helper::randamId();

    $handle = new Upload($_FILES['nic_front']);
    $handle_back = new Upload($_FILES['nic_back']);

    if (empty($LECTURE->nic_front)) {

        if ($handle->uploaded) {


            $img_name = null;
            $img = Helper::randamId();

            $handle->image_resize = true;
            $handle->file_new_name_body = TRUE;
            $handle->file_overwrite = TRUE;
            $handle->file_new_name_ext = 'jpg';
            $handle->image_ratio_crop = 'C';
            $handle->file_new_name_body = $img;
            $image_dst_x = $handle->image_dst_x;
            $image_dst_y = $handle->image_dst_y;
            $newSize = Helper::calImgResize(1200, $image_dst_x, $image_dst_y);

            $image_x = (int) $newSize[0];
            $image_y = (int) $newSize[1];

            $handle->image_x = $image_x;
            $handle->image_y = $image_y;

            $handle->Process($dir_dest);

            $handle->image_resize = true;
            $handle->file_new_name_ext = 'jpg';
            $handle->image_ratio_crop = 'C';
            $handle->file_new_name_body = $img;

            $handle->image_x = 450;
            $handle->image_y = 200;

            $handle->Process($dir_dest_thumb);

//NIC back
            $img_name_back = null;
            $img_back = Helper::randamId();

            $handle_back->image_resize = true;
            $handle_back->file_new_name_body = TRUE;
            $handle_back->file_overwrite = TRUE;
            $handle_back->file_new_name_ext = 'jpg';
            $handle_back->image_ratio_crop = 'C';
            $handle_back->file_new_name_body = $img_back;
            $image_dst_x = $handle_back->image_dst_x;
            $image_dst_y = $handle_back->image_dst_y;
            $newSize = Helper::calImgResize(1200, $image_dst_x, $image_dst_y);

            $image_x = (int) $newSize[0];
            $image_y = (int) $newSize[1];

            $handle_back->image_x = $image_x;
            $handle_back->image_y = $image_y;

            $handle_back->Process($dir_dest_back);


            $handle_back->image_resize = true;
            $handle_back->file_new_name_ext = 'jpg';
            $handle_back->image_ratio_crop = 'C';
            $handle_back->file_new_name_body = $img_back;

            $handle_back->image_x = 450;
            $handle_back->image_y = 200;

            $handle_back->Process($dir_dest_thumb_back);



            if ($handle->processed || $handle_back->processed) {

                Student::updateNicImagesFront($_POST["id"], $handle->file_dst_name);
                Student::updateNicImagesBack($_POST["id"], $handle_back->file_dst_name);


                header('Content-Type: application/json');

                $result = [
                    "filename" => $handle->file_dst_name,
                    "filename_2" => $handle_back->file_dst_name,
                    "message" => 'success'
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


        unlink("$dir_dest" . $LECTURE->nic_front);
        unlink("$dir_dest_thumb" . $LECTURE->nic_front);

        unlink("$dir_dest_back" . $LECTURE->nic_back);
        unlink("$dir_dest_thumb_back" . $LECTURE->nic_back);


        if ($handle->uploaded) {

            $img_name = null;
            $img = Helper::randamId();

            $handle->image_resize = true;
            $handle->file_new_name_body = TRUE;
            $handle->file_overwrite = TRUE;
            $handle->file_new_name_ext = 'jpg';
            $handle->image_ratio_crop = 'C';
            $handle->file_new_name_body = $img;
            $image_dst_x = $handle->image_dst_x;
            $image_dst_y = $handle->image_dst_y;
            $newSize = Helper::calImgResize(1200, $image_dst_x, $image_dst_y);

            $image_x = (int) $newSize[0];
            $image_y = (int) $newSize[1];

            $handle->image_x = $image_x;
            $handle->image_y = $image_y;

            $handle->Process($dir_dest);

            $handle->image_resize = true;
            $handle->file_new_name_ext = 'jpg';
            $handle->image_ratio_crop = 'C';
            $handle->file_new_name_body = $imgName;

            $handle->image_x = 450;
            $handle->image_y = 200;

            $handle->Process($dir_dest_thumb);

////NIC back
            $img_name_back = null;
            $img_back = Helper::randamId();

            $handle_back->image_resize = true;
            $handle_back->file_new_name_body = TRUE;
            $handle_back->file_overwrite = TRUE;
            $handle_back->file_new_name_ext = 'jpg';
            $handle_back->image_ratio_crop = 'C';
            $handle_back->file_new_name_body = $img_back;
            $image_dst_x = $handle_back->image_dst_x;
            $image_dst_y = $handle_back->image_dst_y;
            $newSize = Helper::calImgResize(1200, $image_dst_x, $image_dst_y);

            $image_x = (int) $newSize[0];
            $image_y = (int) $newSize[1];

            $handle_back->image_x = $image_x;
            $handle_back->image_y = $image_y;

            $handle_back->Process($dir_dest_back);


            $handle_back->image_resize = true;
            $handle_back->file_new_name_ext = 'jpg';
            $handle_back->image_ratio_crop = 'C';
            $handle_back->file_new_name_body = $img_back;

            $handle_back->image_x = 450;
            $handle_back->image_y = 200;

            $handle_back->Process($dir_dest_thumb_back);



            if ($handle->processed || $handle_back->processed) {

                Student::updateNicImagesFront($_POST["id"], $handle->file_dst_name);
                Student::updateNicImagesBack($_POST["id"], $handle_back->file_dst_name);

                header('Content-Type: application/json');

                $result = [
                    "filename" => $handle->file_dst_name,
                    "filename_2" => $handle_back->file_dst_name,
                    "message" => 'success'
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


//Profile Change
if ($_POST['action'] == 'CHANGEPROFILE') {

    $LECTURE = new Lecture($_POST['id']);
    $folder = '../../../upload/lecture/profile/';

    $imgName = Helper::randamId();

    $handle = new Upload($_FILES['image_name']);

    if (empty($LECTURE->image_name)) {
        if ($handle->uploaded) {

            $handle->image_resize = true;
            $handle->file_new_name_ext = 'jpg';
            $handle->image_ratio_crop = 'C';
            $handle->file_new_name_body = $imgName;

            $handle->image_x = 400;
            $handle->image_y = 400;

            $handle->Process($folder);

            if ($handle->processed) {

                Lecture::ChangeProPic($_POST["id"], $handle->file_dst_name);
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
        unlink("$folder" . $LECTURE->image_name);
        if ($handle->uploaded) {

            $handle->image_resize = true;
            $handle->file_new_name_ext = 'jpg';
            $handle->image_ratio_crop = 'C';
            $handle->file_new_name_body = $imgName;

            $handle->image_x = 400;
            $handle->image_y = 400;

            $handle->Process($folder);

            if ($handle->processed) {

                Lecture::ChangeProPic($_POST["id"], $handle->file_dst_name);

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


//get the student details

if ($_POST['action'] == 'GETSTUDENT') {

    $LECTURE = new Lecture($_POST['post_student']);

    header('Content-Type: application/json');
    echo json_encode($LECTURE);
    exit();
}


//Password reset
if ($_POST['action'] == 'reset_password') {

    $OldPassOk = student::checkOldPass($_POST["id"], $_POST["old_passsword"]);

    if ($_POST["new_password"] === $_POST["com_password"]) {
        if ($OldPassOk) {
            $result = student::changePassword($_POST["id"], $_POST["new_password"]);
            if ($result == 'TRUE') {
                $result = ["id" => $_POST['id'], "status" => 'true'];
                echo json_encode($result);
                exit();
            } else {
                $result = ["id" => $_POST['id'], "status" => 'error'];
                echo json_encode($result);
                exit();
            }
        } else {
            $result = ["id" => $_POST['id'], "status" => 'old_passw_error'];
            echo json_encode($result);
            exit();
        }
    } else {
        $result = ["id" => $_POST['id'], "status" => 'not_match'];
        echo json_encode($result);
        exit();
    }
}
?> 