<?php

include '../../class/include.php';

//save post data
if (isset($_POST['save-post'])) {

    if (empty($_POST['description']) && empty($_POST['post-all-images'])) {
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        exit();
    } else {
        $POST = new Post(NULL);
        $POST->student = $_POST['student'];
        $POST->description = $_POST['description'];
        $result = $POST->create();
        if ($result) {

            foreach ($_POST['post-all-images'] as $key => $img) {
                $key++;
                $POST_IMAGE = new PostImage(NULL);
                $POST_IMAGE->post = $result->id;
                $POST_IMAGE->image_name = $img;
                $POST_IMAGE->sort = $key;
                $res = $POST_IMAGE->create();
            }

            header('Location: ' . $_SERVER['HTTP_REFERER']);
            exit();
        } else {
            header('Location: ' . $_SERVER['HTTP_REFERER'] . '?message=21');
            exit();
        }
    }
}

//Edit Post 
if (isset($_POST['edit-post'])) {

    $POST = new Post($_POST['id']);

    $POST->description = $_POST['description'];

    $result = $POST->update();
    $url = explode("?", $_SERVER['HTTP_REFERER']);
    
   
    if ($result) {

        foreach ($_POST['post-all-images'] as $key => $img) {
            
            $key++;
            $POSTIMAGES = new PostImage(NULL);
            $POSTIMAGES->post = $result->id;
            $POSTIMAGES->image_name = $img;
            $POSTIMAGES->sort = $key;
            $res = $POSTIMAGES->create();
        }
        header('Location: ' . $_SERVER['HTTP_REFERER'] . '?message=10');
        exit();
    } else {
        header('Location: ' . $_SERVER['HTTP_REFERER'] . '?message=21');
        exit();
    }
}

//Get post details by student
if ($_POST['option'] === 'GETPOST') {
    $POST = new Post(NULL);

    $post = $POST->getPostsByStudent($_POST['student_id']);

    header('Content-type: application/json');
    echo json_encode($post);
}

//Get post by id
if ($_POST['option'] === 'GETPOSTBYID') {
    $POST = new Post($_POST['post_id']);
    header('Content-type: application/json');
    echo json_encode($POST);
}

 