<?php

 include '../../../class/include.php';
 
if ($_POST['option'] === 'GETPOSTPHOTOS') {

    $POST_IMAGE = new PostImage(NULL);
    $array_1 = array();
    $array_2 = array();

    foreach ($POST_IMAGE->getPhotosByPostId($_POST['id']) as $post_images) {

        array_push($array_1, "upload/post/" . $post_images['image_name']);
        array_push($array_2, "upload/post/thumb/" . $post_images['image_name']);
    }

    $result['full'] = $array_1;
    $result['thumb'] = $array_2;
   
    header('Content-type: application/json');
    echo json_encode($result);
}
