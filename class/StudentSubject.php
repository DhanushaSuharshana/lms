<?php

/**
 * Description of Product
 *
 * @author sublime holdings
 * @web www.sublime.lk
 */
class StudentSubject {

    //put your code here
    public $id;
    public $subject;
    public $student;
    public $queue;

    public function __construct($id) {
        if ($id) {

            $query = "SELECT * FROM `student_subjects` WHERE `id`=" . $id;

            $db = new Database();

            $result = mysql_fetch_array($db->readQuery($query));

            $this->id = $result['id'];
            $this->subject = $result['subject'];
            $this->student = $result['student'];
            $this->queue = $result['queue'];

            return $this;
        }
    }

    public function create() {

        $query = "INSERT INTO `student_subjects` (`subject`, `student`) VALUES  ('" . $this->subject . "',  '" . $this->student . "')";

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

        $query = "SELECT * FROM `student_subjects`  ";
        $db = new Database();
        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysql_fetch_array($result)) {
            array_push($array_res, $row);
        }

        return $array_res;
    }

    public function update() {

        $query = 'UPDATE `student_subjects` SET `subject`= "' . $this->subject . '" WHERE id="' . $this->id . '"';

        $db = new Database();
        $result = $db->readQuery($query);

        if ($result) {
            return $this->__construct($this->id);
        } else {
            return FALSE;
        }
    }

    public function checkStudentSubjects($id) {

        $query = 'SELECT `id` FROM `student_subjects`  WHERE `student`="' . $id . '"';

        $db = new Database();
        $result = mysql_fetch_array($db->readQuery($query));

        if (!$result) {
            return FALSE;
        } else {
            return TRUE;
        }
    }

    public function checkStudentDuplicateSubjects($subject, $id) {

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

        $query = 'DELETE FROM `student_subjects` WHERE id="' . $this->id . '"';

        $db = new Database();

        return $db->readQuery($query);
    }

    public function getSubjectsByStudent($student) {

        $query = "SELECT * FROM `student_subjects` WHERE `student` = '" . $student . "'  ";

        $db = new Database();

        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysql_fetch_array($result)) {
            array_push($array_res, $row);
        }

        return $array_res;
    }

}
