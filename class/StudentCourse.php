<?php

/**
 * Description of StudentCourse
 *
 * @author sublime holdings
 * @web www.sublime.lk
 */
class StudentCourse
{

    public $id;
    public $registration_id;
    public $ref_no;
    public $course;

    public function __construct($id)
    {
        if ($id) {

            $query = "SELECT `id`,`registration_id`,`ref_no`,`course` FROM `student_course` WHERE `id`=" . $id;

            $db = new Database();

            $result = mysql_fetch_array($db->readQuery($query));

            $this->id = $result['id'];
            $this->registration_id = $result['registration_id'];
            $this->ref_no = $result['ref_no'];
            $this->course = $result['course'];

            return $this;
        }
    }

    public function create()
    {

        $query = "INSERT INTO `student_course` (`registration_id`,`ref_no`, `course`) VALUES  ('" . $this->registration_id . "','" . $this->ref_no . "', '" . $this->course . "')";

        $db = new Database();

        $result = $db->readQuery($query);

        if ($result) {
            $last_id = mysql_insert_id();

            return $this->__construct($last_id);
        } else {
            return FALSE;
        }
    }

    public function all()
    {

        $query = "SELECT * FROM `student_course` ORDER BY `registration_id` ASC";
        $db = new Database();
        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysql_fetch_array($result)) {
            array_push($array_res, $row);
        }

        return $array_res;
    }
    public function getRegisteredCoursesByID($id)
    {

        $query = "SELECT * FROM `student_course` WHERE `registration_id` = $id ORDER BY `registration_id` ASC";
        $db = new Database();
        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysql_fetch_array($result)) {
            array_push($array_res, $row);
        }

        return $array_res;
    }
    public function getDetailsByCourseAndRegId($course, $reg_id)
    {

        $query = "SELECT * FROM `student_course` WHERE `registration_id` = $reg_id AND `course` = $course ORDER BY `registration_id` ASC";
        $db = new Database();
        $result = mysql_fetch_array($db->readQuery($query));

        return $result;
    }

    public function update()
    {

        $query = 'UPDATE `student_course` SET `registration_id`= "' . $this->registration_id . '" WHERE id="' . $this->id . '"';

        $db = new Database();
        $result = $db->readQuery($query);

        if ($result) {
            return $this->__construct($this->id);
        } else {
            return FALSE;
        }
    }

    public function delete()
    {

        $query = 'DELETE FROM `student_course` WHERE id="' . $this->id . '"';

        $db = new Database();

        return $db->readQuery($query);
    }
    public function DeleteCoursesByRegId($id)
    {

        $query = 'DELETE FROM `student_course` WHERE `registration_id`="' . $id . '"';
        $db = new Database();

        return $db->readQuery($query);
    }
}
