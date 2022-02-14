<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PhotoAlbum
 *
 * @author Suharshana DsW
 */
class Course {

    public $id;
    public $title;
    public $image_name;
    public $instructor;
    public $queue;

    public function __construct($id) {
        if ($id) {

            $query = "SELECT * FROM `course` WHERE `id`=" . $id;

            $db = new Database();

            $result = mysqli_fetch_array($db->readQuery($query));

            $this->id = $result['id'];
            $this->title = $result['title'];
            $this->image_name = $result['image_name'];
            $this->instructor = $result['instructor'];
            $this->queue = $result['queue'];

            return $this;
        }
    }

    public function create() {

        $query = "INSERT INTO `course` (`title`,`image_name`,`instructor`,`queue`) VALUES  ('"
                . $this->title . "','"
                . $this->image_name . "', '"
                . $this->instructor . "', '"
                . $this->queue . "')";

        $db = new Database();

        $result = $db->readQuery($query);

        if ($result) {

            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function all() {

        $query = "SELECT * FROM `course` ORDER BY queue ASC";
        $db = new Database();
        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysqli_fetch_array($result)) {
            array_push($array_res, $row);
        }

        return $array_res;
    }

    public function update() {

        $query = "UPDATE  `course` SET "
                . "`title` ='" . $this->title . "', "
                . "`image_name` ='" . $this->image_name . "', "
                . "`instructor` ='" . $this->instructor . "', "
                . "`queue` ='" . $this->queue . "' "
                . "WHERE `id` = '" . $this->id . "'";

        $db = new Database();

        $result = $db->readQuery($query);

        if ($result) {
            return $this->__construct($this->id);
        } else {
            return FALSE;
        }
    }

//    public function delete() {
//
//        $this->deletePhotos();
//
//        unlink(Helper::getSitePath() . "upload/photo-album/" . $this->image_name);
//
//        $query = 'DELETE FROM `course` WHERE id="' . $this->id . '"';
//
//        $db = new Database();
//
//        return $db->readQuery($query);
//    }
//
//    public function deletePhotos() {
//
//        $ALBUM_PHOTOS = new AlbumPhoto(NULL);
//
//        $allPhotos = $ALBUM_PHOTOS->getAlbumPhotosById($this->id);
//
//        foreach ($allPhotos as $photo) {
//
//            $IMG = $ALBUM_PHOTOS->image_name = $photo["image_name"];
//            unlink(Helper::getSitePath() . "upload/photo-album/gallery/" . $IMG);
//            unlink(Helper::getSitePath() . "upload/photo-album/gallery/thumb/" . $IMG);
//
//            $ALBUM_PHOTOS->id = $photo["id"];
//            $ALBUM_PHOTOS->delete();
//        }
//    }

    public function arrange($key, $img) {
        $query = "UPDATE `course` SET `queue` = '" . $key . "'  WHERE id = '" . $img . "'";
        $db = new Database();
        $result = $db->readQuery($query);
        return $result;
    }

}
