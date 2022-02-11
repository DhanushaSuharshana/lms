<?php

/**
 * Description of Product
 *
 * @author sublime holdings
 * @web www.sublime.lk
 */
class LectureVideo {

    //put your code here
    public $id;
    public $lecture_id;
    public $class_id;
    public $url;
    public $is_youtube;
    public $date;

    public function __construct($id) {
        if ($id) {

            $query = "SELECT * FROM `lecture_class_video` WHERE `id`=" . $id;

            $db = new Database();

            $result = mysqli_fetch_array($db->readQuery($query));

            $this->id = $result['id'];
            $this->class_id = $result['class_id'];
            $this->lecture_id = $result['lecture_id'];
            $this->date = $result['date'];
            $this->url = $result['url'];
            $this->is_youtube = $result['is_youtube'];

            return $this;
        }
    }

    public function create() {

        $query = "INSERT INTO `lecture_class_video` (`lecture_id`,`class_id`, `date`, `url`, `is_youtube`) VALUES  ('"
                . $this->lecture_id . "', '"
                . $this->class_id . "', '"
                . $this->date . "','"
                . $this->url . "','"
                . $this->is_youtube . "')";

        $db = new Database();

        $result = $db->readQuery($query);

        if ($result) {
            return mysqli_insert_id($db->DB_CON);
        } else {
            return FALSE;
        }
    }

    public function all() {

        $query = "SELECT * FROM `lecture_class_video` ORDER BY `lecture_id` ASC";
        $db = new Database();
        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysqli_fetch_array($result)) {
            array_push($array_res, $row);
        }

        return $array_res;
    }

    public function upclass_id() {

        $query = 'UPDATE `lecture_class_video` SET `lecture_id`= "' . $this->lecture_id . '" WHERE id="' . $this->id . '"';

        $db = new Database();
        $result = $db->readQuery($query);

        if ($result) {
            return $this->__construct($this->id);
        } else {
            return FALSE;
        }
    }

    public function delete() {

        $query = 'DELETE FROM `lecture_class_video` WHERE id="' . $this->id . '"';

        $db = new Database();

        return $db->readQuery($query);
    }

    public function getVideoByClass($id, $date) {

        $query = "SELECT * FROM `lecture_class_video` WHERE `class_id` = '" . $id . "' AND `date` = '" . $date . "' ORDER BY `id` ASC";

        $db = new Database();

        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysqli_fetch_array($result)) {
            array_push($array_res, $row);
        }

        return $array_res;
    }

    public function getVideoByClassDay($id, $date) {

        $query = "SELECT * FROM `lecture_class_video` WHERE `class_id` = '" . $id . "' AND `date` = '" . $date . "' ";

        $db = new Database();

        $result = mysqli_fetch_array($db->readQuery($query));

        return $result['id'];
    }

}
