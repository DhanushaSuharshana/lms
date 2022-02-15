<?php

include_once(dirname(__FILE__) . '/../../../class/include.php');
header('Content-Type: application/json; charset=UTF8');

//create photo album
if (isset($_POST['create'])) {
    
    $COURSE = new Course(NULL);

    $COURSE->title = $_POST['title'];
    $COURSE->instructor = $_POST['instructor'];

    $dir_dest = '../../../upload/course/';

    $handle = new Upload($_FILES['image_name']);

    $imgName = null;

    if ($handle->uploaded) {
        $handle->image_resize = true;
        $handle->file_new_name_ext = 'jpg';
        $handle->image_ratio_crop = 'C';
        $handle->file_new_name_body = Helper::randamId();
        $handle->image_x = 400;
        $handle->image_y = 310;

        $handle->Process($dir_dest);

        if ($handle->processed) {
            $info = getimagesize($handle->file_dst_pathname);
            $imgName = $handle->file_dst_name;
        }
    }

    $COURSE->image_name = $imgName;
    $COURSE->create();
    $result = ["status" => 'success'];
    echo json_encode($result);
    exit();
}


//manage photo album
if (isset($_POST['update'])) {
    $dir_dest = '../../../upload/course/';
    $handle = new Upload($_FILES['image_name']);
    $imgName = null;

    $COURSE = new Course($_POST['id']);
    if ($handle->uploaded) {
        $handle->image_resize = true;
        $handle->file_new_name_body = TRUE;
        $handle->file_overwrite = TRUE;
        $handle->file_new_name_ext = FALSE;
        $handle->image_ratio_crop = 'C';
        $handle->file_new_name_body = $COURSE->image_name;
        $handle->image_x = 400;
        $handle->image_y = 310;
        $handle->Process($dir_dest);
        if ($handle->processed) {
            $info = getimagesize($handle->file_dst_pathname);
            $imgName = $handle->file_dst_name;
        }
    }



    $COURSE->title = $_POST['title'];
    $COURSE->instructor = $_POST['instructor'];
    $COURSE->update();

    if ($COURSE) {
        $result = ["status" => 'success'];
        echo json_encode($result);
        exit();
    } else {
        $result = ["status" => 'error'];
        echo json_encode($result);
        exit();
    }
}



//--------------------------------------------------------------------------
//-- ** Start arrange code  
if (isset($_POST['arrange'])) {

    $COURSE_OBJ = new Course(NULL);

    foreach ($_POST['sort'] as $key => $img) {

        $key = $key + 1;

        $res = $COURSE_OBJ->arrange($key, $img);
        //-- ** End Assign Post Params
    }

    $result = [
        "status" => 'success'
    ];
    echo json_encode($result);
    exit();
}
//End arrange Code Block
//--------------------------------------------------------------------------
if ($_POST['option'] == 'delete') {
    $COURSE = new Course($_POST['id']);
    unlink("../../../upload/course/" . $COURSE->image_name);
    $result = $COURSE->delete();
    //-- ** End Assign Post Params
    if ($result) {
        $data = array("status" => TRUE);
        header('Content-type: application/json');
        echo json_encode($data);
    }
}



if (isset($_POST['save-data'])) {

    foreach ($_POST['sort'] as $key => $img) {
        $key = $key + 1;

        $COURSE = Course::arrange($key, $img);

        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
}
