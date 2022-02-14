<?php

include '../../../class/include.php';

//Create home work
if (isset($_POST['create-home-work'])) {

    $dir_dest = '../../../upload/home-work/';
    $imgName = Helper::randamId();


    $handle = new Upload($_FILES['image']);

    if ($handle->uploaded) {

        $handle->image_resize = true;
        $handle->file_new_name_ext = 'jpg';
        $handle->image_ratio_crop = 'C';
        $handle->file_new_name_body = $imgName;

        $image_dst_x = $handle->image_dst_x;
        $image_dst_y = $handle->image_dst_y;

        if ($image_dst_y > 900) {
            $newSize = Helper::calImgResize(900, $image_dst_x, $image_dst_y);

            $image_x = (int) $newSize[0];
            $image_y = (int) $newSize[1];

            $handle->image_x = $image_x;
            $handle->image_y = $image_y;
        } else {
            $handle->image_x = $image_dst_x;
            $handle->image_y = $image_dst_y;
        }


        $handle->process($dir_dest);

        if ($handle->processed) {

            $handle1 = new Upload($_FILES['image']);

            if ($handle1->uploaded) {
                $handle1->image_resize = true;
                $handle1->file_new_name_ext = 'jpg';
                $handle1->image_ratio_crop = 'C';
                $handle1->file_new_name_body = $imgName;
                $handle1->image_x = 320;
                $handle1->image_y = 300;
                $handle1->Process($dir_dest . '/thumb');

                if ($handle1->processed) {

                    $imgName = $handle1->file_dst_name;

                    $HOME_WORK = new HomeWork(NULL);
                    $HOME_WORK->image_name = $imgName;
                    $HOME_WORK->class_id = $_POST['class_id'];
                    $HOME_WORK->title = $_POST['title'];
                    $HOME_WORK->student_id = $_POST['student_id'];
                    $HOME_WORK->create();
                    
                    header('Content-Type: application/json');
                    $result = [
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

//Edit Emage post
if (isset($_POST['upload-post-image-edit'])) {

    $dir_dest = '../../upload/post/';
    $imgName = Helper::randamId();

    $handle = new Upload($_FILES['post-image-edit']);


    if ($handle->uploaded) {

        $handle->image_resize = true;
        $handle->file_new_name_ext = 'jpg';
        $handle->image_ratio_crop = 'C';
        $handle->file_new_name_body = $imgName;

        $image_dst_x = $handle->image_dst_x;
        $image_dst_y = $handle->image_dst_y;

        if ($image_dst_y > 900) {
            $newSize = Helper::calImgResize(900, $image_dst_x, $image_dst_y);

            $image_x = (int) $newSize[0];
            $image_y = (int) $newSize[1];

            $handle->image_x = $image_x;
            $handle->image_y = $image_y;
        } else {
            $handle->image_x = $image_dst_x;
            $handle->image_y = $image_dst_y;
        }


        $handle->process($dir_dest);

        if ($handle->processed) {

            $handle1 = new Upload($_FILES['post-image-edit']);


            if ($handle1->uploaded) {
                $handle1->image_resize = true;
                $handle1->file_new_name_ext = 'jpg';
                $handle1->image_ratio_crop = 'C';
                $handle1->file_new_name_body = $imgName;
                $handle1->image_x = 500;
                $handle1->image_y = 500;
                $handle1->Process($dir_dest . '/thumb');


                if ($handle1->processed) {

                    $handle2 = new Upload($_FILES['post-image-edit']);

                    if ($handle2->uploaded) {
                        $handle2->image_resize = true;
                        $handle2->file_new_name_ext = 'jpg';
                        $handle2->image_ratio_crop = 'C';
                        $handle2->file_new_name_body = $imgName;
                        $handle2->image_x = 100;
                        $handle2->image_y = 100;
                        $handle2->Process($dir_dest . '/thumb2');
                        if ($handle2->processed) {
                            $handle2->Clean();
                            header('Content-Type: application/json');

                            $result = [
                                "filename" => $handle2->file_dst_name,
                                "message" => 'success'
                            ];
                            echo json_encode($result);
                            exit();
                        } else {
                            header('Content-Type: application/json');
                            $result = [
                                "message" => 'error2'
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


//Delte Post  
if ($_POST['option'] == 'DELETEPOST') {

    $POST = new Post($_POST['id']);
    $result = $POST->delete();

    if ($result) {

        $data = array("status" => TRUE);
        header('Content-type: application/json');
        echo json_encode($data);
    }
}

//Delte Post for edit
if ($_POST['option'] == 'DELETEPHOTO') {

    $POST_IMAGES = new PostImage(NULL);
    $result = $POST_IMAGES->deletePhotos($_POST['id']);

    if ($result) {

        $data = array("status" => TRUE);
        header('Content-type: application/json');
        echo json_encode($data);
    }
}