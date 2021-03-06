<?php

/**
 * Description of Product
 *
 * @author sublime holdings
 * @web www.sublime.lk
 */
class LectureAssessment {

    //put your code here
    public $id;
    public $lecture_id;
    public $class_id;
    public $date;
    public $title;
    public $file_name;

    public function __construct($id) {
        if ($id) {

            $query = "SELECT * FROM `lecture_assessment` WHERE `id`=" . $id;

            $db = new Database();

            $result = mysqli_fetch_array($db->readQuery($query));

            $this->id = $result['id'];
            $this->lecture_id = $result['lecture_id'];
            $this->class_id = $result['class_id'];
            $this->date = $result['date'];
            $this->title = $result['title'];
            $this->file_name = $result['file_name'];

            return $this;
        }
    }

    public function create() {

        $query = "INSERT INTO `lecture_assessment` (`lecture_id`,`class_id`,`date`, `title`, `file_name`) VALUES  ('" 
                . $this->lecture_id . "', '"
                . $this->class_id . "', '"
                . $this->date . "', '"
                . $this->title . "','" 
                . $this->file_name . "')";

        $db = new Database();

        $result = $db->readQuery($query);

        if ($result) {
            return mysqli_insert_id($db->DB_CON);
        } else {
            return FALSE;
        }
    }

    public function all() {

        $query = "SELECT * FROM `lecture_assessment` ORDER BY `lecture_id` ASC";
        $db = new Database();
        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysqli_fetch_array($result)) {
            array_push($array_res, $row);
        }

        return $array_res;
    }

    public function update() {

        $query = 'UPDATE `lecture_assessment` SET `lecture_id`= "' . $this->lecture_id . '" WHERE id="' . $this->id . '"';

        $db = new Database();
        $result = $db->readQuery($query);

        if ($result) {
            return $this->__construct($this->id);
        } else {
            return FALSE;
        }
    }

    public function delete() {

        $query = 'DELETE FROM `lecture_assessment` WHERE id="' . $this->id . '"';

        $db = new Database();

        return $db->readQuery($query);
    }

    public function getAssessmentByClassId($id,$date) {

        $query = "SELECT * FROM `lecture_assessment` WHERE `class_id` = '" . $id . "'   AND `date` = '" . $date . "' ";
 
        $db = new Database();

        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysqli_fetch_array($result)) {
            array_push($array_res, $row);
        }
      
        return $array_res;
    }

}
