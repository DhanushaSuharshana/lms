<?php

include_once(dirname(__FILE__) . '/../../../class/include.php');
header('Content-Type: application/json; charset=UTF8');

//-- ** Start Create Code Block
if (isset($_POST['create'])) {
    //-- ** Start Create Image 
    $dir_dest = '../../../upload/blog/';
    $handle = new Upload($_FILES['image_name']);
    $imgName = null;
    if ($handle->uploaded) {
        $handle->image_resize = true;
        $handle->file_new_name_ext = 'jpg';
        $handle->image_ratio_crop = 'C';
        $handle->file_new_name_body = Helper::randamId();
        $handle->image_x = 850;
        $handle->image_y = 460;
        $handle->Process($dir_dest);
        if ($handle->processed) {
            $info = getimagesize($handle->file_dst_pathname);
            $imgName = $handle->file_dst_name;
        }
    }
    //-- ** End Create Image
    //-- ** Start Assign Post Params
    $BLOG = new Blog(NULL);
    $BLOG->blog_type = $_POST['blog_type'];
    $BLOG->title =  filter_input(INPUT_POST,'title');
    $BLOG->date = $_POST['date'];
    $BLOG->short_description = filter_input(INPUT_POST, 'short_description');
    $BLOG->description = filter_input(INPUT_POST, 'description');
    $BLOG->image_name = $imgName;
    $BLOG->create();
    //-- ** End Assign Post Params
    if ($BLOG) {
        $result = ["status" => 'success'];
        echo json_encode($result);
        exit();
    } else {
        $result = ["status" => 'error'];
        echo json_encode($result);
        exit();
    }
}
//-- ** Start Create Code Block
//--------------------------------------------------------------------------
//Start Update Code Block
if (isset($_POST['update'])) {
    //-- ** Start Edit Image in folder location
    $dir_dest = '../../../upload/blog/';
    $handle = new Upload($_FILES['image_name']);
    $imgName = null;

    $BLOG = new Blog($_POST['id']);
    if ($handle->uploaded) {
        $handle->image_resize = true;
        $handle->file_new_name_body = TRUE;
        $handle->file_overwrite = TRUE;
        $handle->file_new_name_ext = FALSE;
        $handle->image_ratio_crop = 'C';
        $handle->file_new_name_body = $BLOG->image_name;
        $handle->image_x = 850;
        $handle->image_y = 460;
        $handle->Process($dir_dest);
        if ($handle->processed) {
            $info = getimagesize($handle->file_dst_pathname);
            $imgName = $handle->file_dst_name;
        }
    }
    //-- ** End Edit Image in folder location
    //-- ** Start Assign Post Params  
    $BLOG->blog_type = $_POST['blog_type'];
    $BLOG->title = filter_input(INPUT_POST,'title');
    $BLOG->date = $_POST['date'];
    $BLOG->short_description = filter_input(INPUT_POST, 'short_description');
    $BLOG->description = filter_input(INPUT_POST, 'description');
    $BLOG->update();
    //-- ** End Assign Post Params
    if ($BLOG) {
        $result = ["status" => 'success'];
        echo json_encode($result);
        exit();
    } else {
        $result = ["status" => 'error'];
        echo json_encode($result);
        exit();
    }
}
//End Update Code Block
//--------------------------------------------------------------------------
//-- ** Start arrange code  
if (isset($_POST['arrange'])) {

    $BLOG_OBJ = new Blog(NULL);

    foreach ($_POST['sort'] as $key => $img) {

        $key = $key + 1;

        $res = $BLOG_OBJ->arrange($key, $img);
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
//--------------------------------------------------------------------------
//-- ** Start delete code  
if ($_POST['option'] == 'delete') {
    $BLOG = new Blog($_POST['id']);
    unlink("../../../upload/blog/" . $BLOG->image_name);
    $result = $BLOG->delete();
    //-- ** End Assign Post Params
    if ($result) {
        $data = array("status" => TRUE);
        header('Content-type: application/json');
        echo json_encode($data);
    }
}
//Arange slider



 