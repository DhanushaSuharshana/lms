<?php

/**
 * Description of Product
 *
 * @author sublime holdings
 * @web www.sublime.lk
 */
class StudentRegistration {

    public $id;
    public $student_id;
    public $lecture_id;
    public $class_id;
    public $queue;

    public function __construct($id) {
        if ($id) {

            $query = "SELECT * FROM `student_class_registration` WHERE `id`=" . $id;

            $db = new Database();

            $result = mysqli_fetch_array($db->readQuery($query));

            $this->id = $result['id'];
            $this->student_id = $result['student_id'];
            $this->lecture_id = $result['lecture_id'];
            $this->class_id = $result['class_id'];
            $this->queue = $result['queue'];

            return $this;
        }
    }

    public function create() {

        $query = "INSERT INTO `student_class_registration` (`student_id`,`lecture_id`,`class_id`,`queue`) VALUES  ('"
                . $this->student_id . "', '"
                . $this->lecture_id . "', '"
                . $this->class_id . "', '"
                . $this->queue . "')";

        $db = new Database();

        $result = $db->readQuery($query);

        if ($result) {
            return mysqli_insert_id($db->DB_CON);
        } else {
            return FALSE;
        }
    }

    public function all() {

        $query = "SELECT * FROM `student_class_registration` ORDER BY `class_id` ASC";
        $db = new Database();
        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysqli_fetch_array($result)) {
            array_push($array_res, $row);
        }

        return $array_res;
    }

    public function update() {

        $query = "UPDATE  `student_class_registration` SET "
                . "`class_id` ='" . $this->class_id . "', "
                . "`subject_id` ='" . $this->subject_id . "', "
                . "`start_date` ='" . $this->start_date . "', "
                . "`start_time` ='" . $this->start_time . "', "
                . "`duration` ='" . $this->duration . "', "
                . "`class_fee` ='" . $this->class_fee . "' "
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

        $query = 'DELETE FROM `student_class_registration` WHERE id="' . $this->id . '"';

        $db = new Database();

        return $db->readQuery($query);
    }

    public function getRegistrationClassesByStudent($class_id, $student_id) {

        $query = "SELECT * FROM `student_class_registration` WHERE `class_id` = '" . $class_id . "' AND `student_id` = '" . $student_id . "'  ";

        $db = new Database();

        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysqli_fetch_array($result)) {
            array_push($array_res, $row);
        }

        return $array_res;
    }

    public function getLectureClassesBySubjectId($id) {

        $query = "SELECT * FROM `student_class_registration` WHERE `subject_id` = '" . $id . "'  ";

        $db = new Database();

        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysqlii_fetch_array($result)) {
            array_push($array_res, $row);
        }

        return $array_res;
    }

    public function getLectureClassesById($id) {

        $query = "SELECT * FROM `student_class_registration` WHERE `lecture_id` = '" . $id . "'  ";

        $db = new Database();

        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysqli_fetch_array($result)) {
            array_push($array_res, $row);
        }

        return $array_res;
    }
    public function getStudentByClassId($id) {

        $query = "SELECT * FROM `student_class_registration` WHERE `class_id` = '" . $id . "'  ";

        $db = new Database();

        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysqli_fetch_array($result)) {
            array_push($array_res, $row);
        }

        return $array_res;
    }

    public function getStudentByStudentId($student) {

        $query = "SELECT * FROM `student_class_registration` WHERE `student_id` = '" . $student . "'  ";

        $db = new Database();

        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysqli_fetch_array($result)) {
            array_push($array_res, $row);
        }

        return $array_res;
    }
    public function getStudentByLectureId($id) {

        $query = "SELECT * FROM `student_class_registration` WHERE `lecture_id` = '" . $id . "'  ";

        $db = new Database();

        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysqli_fetch_array($result)) {
            array_push($array_res, $row);
        }

        return $array_res;
    }

}
