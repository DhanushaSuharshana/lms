<?php

/**
 * Description of Post
 *
 * 
 */
class Post {

    public $id;
    public $student;
    public $createdAt;
    public $description;

    public function __construct($id) {
        if ($id) {

            $query = "SELECT `id`,`student`,`created_at`,`description`  FROM `post` WHERE `id`=" . $id;

            $db = new Database();

            $result = mysqli_fetch_array($db->readQuery($query));

            $this->id = $result['id'];
            $this->student = $result['student'];
            $this->createdAt = $result['created_at'];
            $this->description = $result['description'];


            return $this;
        }
    }

    public function create() {

        date_default_timezone_set('Asia/Colombo');
        $createdAt = date('Y-m-d H:i:s');

        $query = "INSERT INTO `post` ("
                . "`student`,"
                . "`created_at`,"
                . "`description`) "
                . "VALUES  ("
                . "'" . $this->student . "',"
                . "'" . $createdAt . "',"
                . "'" . $this->description . "'"
                . ")";

        $db = new Database();

        $result = $db->readQuery($query);

        if ($result) {
            return mysqli_insert_id($db->DB_CON);
        } else {
            return FALSE;
        }
    }

    public function all() {

        $query = "SELECT * FROM `post` ORDER BY `id` DESC";
        $db = new Database();
        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysqli_fetch_array($result)) {
            array_push($array_res, $row);
        }

        return $array_res;
    }

    public function update() {

        $query = "UPDATE  `post` SET "
                . "`description` ='" . $this->description . "' "
                . "WHERE `id` = '" . $this->id . "'";

        $db = new Database();

        $result = $db->readQuery($query);

        if ($result) {
            return $this->__construct($this->id);
        } else {
            return FALSE;
        }
    }

    public function delete() {

//        $this->deletePhotos();
        $query = 'DELETE FROM `post` WHERE id="' . $this->id . '"';
        
        $db = new Database();

        return $db->readQuery($query);
    }

    public function deletePhotos() {

        $POST_IMAGE = new PostImage(NULL);
        $allPhotos = $POST_IMAGE->getPhotosByPostId($this->id);

        foreach ($allPhotos as $photo) {

            unlink(Helper::getSitePath() . "upload/post/" . $photo["image_name"]);
            unlink(Helper::getSitePath() . "upload/post/thumb/" . $photo["image_name"]);
            unlink(Helper::getSitePath() . "upload/post/thumb2/" . $photo["image_name"]);


            $POST_IMAGE->delete();
        }
    }

    public function getPostsByStudent($student) {

        $query = "SELECT * FROM `post` WHERE  `student` = $student ORDER BY `created_at` DESC";
        $db = new Database();
        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysqli_fetch_array($result)) {
            array_push($array_res, $row);
        }

        return $array_res;
    }

//    public function getPostsBySharedAD($ad) {
//
//        $query = "SELECT * FROM `post` WHERE  `shared_ad` = $ad ORDER BY `created_at` DESC";
//        $db = new Database();
//        $result = $db->readQuery($query);
//        $array_res = array();
//
//        while ($row = mysqli_fetch_array($result)) {
//            array_push($array_res, $row);
//        }
//
//        return $array_res;
//    }

    public function totalRows() {

        $query = "SELECT count(*) 'total_rows' FROM `post`";
        $db = new Database();
        $result = mysqli_fetch_array($db->readQuery($query));

        return $result;
    }

    public function limitRows($offset, $limit) {

        $query = "SELECT * FROM `post` limit $offset, $limit";
        $db = new Database();
        $result = $db->readQuery($query);
        $array_res = array();

//        while ($row = mysqli_fetch_array($result)) {
//            array_push($array_res, $row);
//        }

        return $result;
    }

}
