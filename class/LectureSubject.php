<?php

/**
 * Description of Product
 *
 * @author sublime holdings
 * @web www.sublime.lk
 */
class LectureSubject {

    //put your code here
    public $id;
    public $subject_id;
    public $lecture;
    public $queue;

    public function __construct($id) {
        if ($id) {

            $query = "SELECT * FROM `lecture_subject` WHERE `id`=" . $id;

            $db = new Database();

            $result = mysql_fetch_array($db->readQuery($query));

            $this->id = $result['id'];
            $this->subject_id = $result['subject_id'];
            $this->lecture = $result['lecture'];
            $this->queue = $result['queue'];

            return $this;
        }
    }

    public function create() {

        $query = "INSERT INTO `lecture_subject` (`subject_id`, `lecture`) VALUES  ('" . $this->subject_id . "',  '" . $this->lecture . "')";

        $db = new Database();

        $result = $db->readQuery($query);

        if ($result) {
            $last_id = mysql_insert_id();

            return $this->__construct($last_id);
        } else {
            return FALSE;
        }
    }

    public function all() {

        $query = "SELECT * FROM `lecture_subject`  ";
        $db = new Database();
        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysql_fetch_array($result)) {
            array_push($array_res, $row);
        }

        return $array_res;
    }

    public function update() {

        $query = 'UPDATE `lecture_subject` SET `subject_id`= "' . $this->subject_id . '" WHERE id="' . $this->id . '"';

        $db = new Database();
        $result = $db->readQuery($query);

        if ($result) {
            return $this->__construct($this->id);
        } else {
            return FALSE;
        }
    }

    public function checkLectureSubjects($id) {

        $query = 'SELECT `id` FROM `lecture_subject`  WHERE `lecture` ="' . $id . '"';
        $db = new Database();
        $result = mysql_fetch_array($db->readQuery($query));

        if (!$result) {
            return FALSE;
        } else {
            return TRUE;
        }
    }
    public function checkLectureSubjectsIsExist($id, $lecturer) {

        $query = 'SELECT `id` FROM `lecture_subject`  WHERE `lecture` ="' . $lecturer . '" AND `subject_id` = "' . $id . '"';

        $db = new Database();
        $result = mysql_fetch_array($db->readQuery($query));

        if (!$result) {
            return FALSE;
        } else {
            return TRUE;
        }
    }

    public function checkLectureDuplicateSubjects($subject, $id) {

        $query = 'SELECT `id` FROM `student_subjects`  WHERE `subject`="' . $subject . '" AND `student`="' . $id . '"';

        $db = new Database();
        $result = mysql_fetch_array($db->readQuery($query));

        if (!$result) {
            return FALSE;
        } else {
            return TRUE;
        }
    }

    public function delete() {

        $query = 'DELETE FROM `lecture_subject` WHERE id="' . $this->id . '"';

        $db = new Database();

        return $db->readQuery($query);
    }

    public function getLectureSubjectsByLecture($lecture) {

        $query = "SELECT * FROM `lecture_subject` WHERE `lecture` = '" . $lecture . "'  ";

        $db = new Database();

        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysql_fetch_array($result)) {
            array_push($array_res, $row);
        }

        return $array_res;
    }

    public function getLectureSubjectsBySubject($id) {

        $query = "SELECT * FROM `lecture_subject` WHERE `subject_id` = '" . $id . "'  ";

        $db = new Database();

        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysql_fetch_array($result)) {
            array_push($array_res, $row);
        }

        return $array_res;
    }

}
