<?php

/**
 * Description of Product
 *
 * @author sublime holdings
 * @web www.sublime.lk
 */
class Payment {

    //put your code here
    public $id;
    public $student_id;
    public $class_id;
    public $date;
    public $number_of_date;
    public $paymentStatusCode;
    public $status;

    public function __construct($id) {
        if ($id) {

            $query = "SELECT * FROM `payment` WHERE `id`=" . $id;

            $db = new Database();

            $result = mysql_fetch_array($db->readQuery($query));

            $this->id = $result['id'];
            $this->student_id = $result['student_id'];
            $this->class_id = $result['class_id'];
            $this->date = $result['date'];
            $this->number_of_date = $result['number_of_date'];
            $this->paymentStatusCode = $result['paymentStatusCode'];
            $this->status = $result['status'];

            return $this;
        }
    }

    public function create() {

        $query = "INSERT INTO `payment` (`student_id`, `class_id`,`date`,`number_of_date`,`status`) VALUES  ('"
                . $this->student_id . "', '"
                . $this->class_id . "','"
                . $this->date . "','"
                . $this->number_of_date . "','"
                . $this->status . "')";
// dd($query);
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

        $query = "SELECT * FROM `payment` ORDER BY `student_id` ASC";
        $db = new Database();
        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysql_fetch_array($result)) {
            array_push($array_res, $row);
        }

        return $array_res;
    }

    public function getPaymnetByClassId($id) {

        $query = "SELECT * FROM `payment`  WHERE `class_id` = " . $id . "  ";
        $db = new Database();
        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysql_fetch_array($result)) {
            array_push($array_res, $row);
        }

        return $array_res;
    }

    public function getLastID() {

        $query = "SELECT `id` FROM `payment` ORDER BY `id` DESC LIMIT 1";
        $db = new Database();
        $result = mysql_fetch_assoc($db->readQuery($query));

        return $result['id'];
    }

    public function getPaymentSuccessStudents($student_id, $class_id) {

        $query = "SELECT DISTINCT id FROM `payment`WHERE `student_id` =" . $student_id . " and  `class_id`=" . $class_id . "  and `paymentStatusCode` =2 and `status` =1 ";

        $db = new Database();
        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysql_fetch_array($result)) {
            array_push($array_res, $row);
        }

        return $array_res;
    }

    function updatePaymentStatusCodeAndStatus() {

        $query = "UPDATE  `payment` SET "
                . "`paymentStatusCode` ='" . $this->paymentStatusCode . "', "
                . "`date` ='" . $this->date . "', "
                . "`number_of_date` ='" . $this->number_of_date . "', "
                . "`student_id` ='" . $this->student_id . "', "
                . "`class_id` ='" . $this->class_id . "', "
                . "`status` ='" . $this->status . "' "
                . " WHERE `id` = '" . $this->id . "'  ";

        $db = new Database();
        $result = $db->readQuery($query);

        if ($result) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function update() {

        $query = 'UPDATE `payment` SET '
                . '`student_id`= "' . $this->student_id . '"'
                . ' WHERE id="' . $this->id . '"';

        $db = new Database();
        $result = $db->readQuery($query);

        if ($result) {
            return $this->__construct($this->id);
        } else {
            return FALSE;
        }
    }

    public function delete() {

        $query = 'DELETE FROM `payment` WHERE id="' . $this->id . '"';

        $db = new Database();

        return $db->readQuery($query);
    }

}
