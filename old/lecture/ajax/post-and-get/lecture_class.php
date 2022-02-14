<?php

include '../../../class/include.php';

//Update Lecture Class
if (isset($_POST['create'])) {

    $LECTURE_CLASS = new LectureClass(NULL);

    $LECTURE_CLASS->lecture = $_POST['lecture'];
    $LECTURE_CLASS->name = ucwords($_POST['name']);
    $LECTURE_CLASS->city = $_POST['city'];
    $LECTURE_CLASS->class_type = $_POST['class_type'];
    $LECTURE_CLASS->subject_id = $_POST['subject'];
    $LECTURE_CLASS->start_date = $_POST['start_date'];
    $LECTURE_CLASS->start_time = $_POST['start_time'];
    $LECTURE_CLASS->end_time = $_POST['end_time'];
    $LECTURE_CLASS->modules = $_POST['lessons'];
    $LECTURE_CLASS->payment_type = $_POST['payment_type'];
    $LECTURE_CLASS->class_fee = $_POST['class_fee'];
    $LECTURE_CLASS->create();

    $response['status'] = 'success';
    echo json_encode($response);
    exit();
}

//update 
if (isset($_POST['update'])) {

    $LECTURE_CLASS = new LectureClass($_POST['id']);

    $LECTURE_CLASS->name = ucwords($_POST['name']);
    $LECTURE_CLASS->city = $_POST['city'];
    $LECTURE_CLASS->class_type = $_POST['class_type'];
    $LECTURE_CLASS->subject_id = $_POST['subject'];
    $LECTURE_CLASS->start_date = $_POST['start_date'];
    $LECTURE_CLASS->start_time = $_POST['start_time'];
    $LECTURE_CLASS->end_time = $_POST['end_time'];
    $LECTURE_CLASS->modules = $_POST['lessons'];
    $LECTURE_CLASS->payment_type = $_POST['payment_type'];
    $LECTURE_CLASS->class_fee = $_POST['class_fee'];
    $LECTURE_CLASS->update();


    $result = ["id" => $_POST['id']];
    echo json_encode($result);
    exit();
}


//Create MCQ 
if (isset($_POST['create-mcq'])) {

    $LECTURE_MCQ = new LectureMcq(NULL);
    $dir_dest = '../../../upload/class/mcq/';
    $filename = $_FILES['pdf_file']['name'];

    $handle = new Upload($_FILES['pdf_file']);
    $imgName = null;

    if ($handle->uploaded) {
        $handle->file_dst_name = Helper::randamId();
        $imgName = $handle->file_dst_name;
        $handle->file_new_name_body = $imgName;
        $handle->Process($dir_dest);
    }

    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server
    $file = $_FILES['pdf_file']['tmp_name'];
    $size = $_FILES['pdf_file']['size'];

    if (!in_array($extension, ['zip', 'pdf', 'docx'])) {

        $result = ["status" => "errro-format"];
        echo json_encode($result);
        exit();
    } else {


        $LECTURE_MCQ->file_name = $imgName . '.pdf';
        $LECTURE_MCQ->title = $_POST['title'];
        $LECTURE_MCQ->lecture_id = $_POST['lecture_id'];


        $LECTURE_MCQ->create();
        $result = ["status" => "sucess"];
        echo json_encode($result);
        exit();
    }
}

//Create MCQ 
if (isset($_POST['create-question'])) {

    $QUESTION = new LessonQuestion(NULL);

    $QUESTION->question = $_POST['question'];
    $QUESTION->class = $_POST['class_id'];
    $QUESTION->date = $_POST['date'];


    $QUESTION->create();
    $result = ["status" => "sucess"];
    echo json_encode($result);
    exit();
}

//Create Tutorials 
if (isset($_POST['create-tutorials'])) {

    $LECTURE_TUTORIALS = new LectureTutorial(NULL);
    $dir_dest = '../../../upload/class/tutorials/';
    $filename = $_FILES['pdf_file']['name'];

    $handle = new Upload($_FILES['pdf_file']);
    $imgName = null;

    if ($handle->uploaded) {
        $handle->file_dst_name = Helper::randamId();
        $imgName = $handle->file_dst_name;
        $handle->file_new_name_body = $imgName;
        $handle->Process($dir_dest);
    }

    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server
    $file = $_FILES['pdf_file']['tmp_name'];
    $size = $_FILES['pdf_file']['size'];

    if (!in_array($extension, ['zip', 'pdf', 'docx'])) {

        $result = ["status" => "errro-format"];
        echo json_encode($result);
        exit();
    } else {


        $LECTURE_TUTORIALS->file_name = $imgName . '.pdf';
        $LECTURE_TUTORIALS->title = $_POST['title'];
        $LECTURE_TUTORIALS->lecture_id = $_POST['lecture_id'];


        $LECTURE_TUTORIALS->create();
        $result = ["status" => "sucess"];
        echo json_encode($result);
        exit();
    }
}
