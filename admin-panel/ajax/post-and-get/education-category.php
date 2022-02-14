<?php

include '../../../class/include.php';

//create catetgory
if (isset($_POST['create'])) {

    $CATEGORY = new EducationCategory(NULL);

    $CATEGORY->name = $_POST['name'];
    $dir_dest = '../../../upload/category/';

    

    $handle = new Upload($_FILES['image_name']);

    $imgName = null;

    if ($handle->uploaded) {
        $handle->image_resize = true;
        $handle->file_new_name_ext = 'jpg';
        $handle->image_ratio_crop = 'C';
        $handle->file_new_name_body = Helper::randamId();
        $handle->image_x = 400;
        $handle->image_y = 400;

        $handle->Process($dir_dest);

        if ($handle->processed) {
            $info = getimagesize($handle->file_dst_pathname);
            $imgName = $handle->file_dst_name;
        }
    }
 
    $CATEGORY->image_name = $handle->file_dst_name;

    $CATEGORY->create();
    $result = [
        "message" => 'success'
    ];
    echo json_encode($result);
    exit();
}

if (isset($_POST['update'])) {

    $CATEGORY = new EducationCategory($_POST['id']);

    $dir_dest = '../../../upload/category/';

    $handle = new Upload($_FILES['image_name']);

    $imgName = null;

    if ($handle->uploaded) {
        $handle->image_resize = true;
        $handle->file_new_name_body = TRUE;
        $handle->file_overwrite = TRUE;
        $handle->file_new_name_ext = FALSE;
        $handle->image_ratio_crop = 'C';
        $handle->file_new_name_body = $_POST ["oldImageName"];
        $handle->image_x = 400;
        $handle->image_y = 400;

        $handle->Process($dir_dest);

        if ($handle->processed) {
            $info = getimagesize($handle->file_dst_pathname);
            $imgName = $handle->file_dst_name;
        }
    }

    $CATEGORY->image_name = $_POST ["oldImageName"];
    $CATEGORY->name = $_POST['name'];
    $CATEGORY->update();
    $result = [
        "message" => 'success'
    ];
    echo json_encode($result);
    exit();
}
?> 