<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CourseRegistration
 *
 * @author User
 */
class CourseRegistration
{

    public $id;
    public $created_at;
    public $full_name;
    public $email;
    public $address;
    public $district;
    public $city;
    public $phone_number;
    public $mobile_number;
    public $school;
    public $grade;
    public $dob;
    public $age;

    public function __construct($id)
    {

        if ($id) {

            $query = "SELECT * FROM `course_registration` WHERE `id`=" . $id;

            $db = new Database();

            $result = mysqli_fetch_array($db->readQuery($query));

            $this->id = $result['id'];
            $this->created_at = $result['created_at'];
            $this->full_name = $result['full_name'];
            $this->email = $result['email'];
            $this->address = $result['address'];
            $this->district = $result['district'];
            $this->city = $result['city'];
            $this->phone_number = $result['phone_number'];
            $this->mobile_number = $result['mobile_number'];
            $this->school = $result['school'];
            $this->grade = $result['grade'];
            $this->dob = $result['dob'];
            $this->age = $result['age'];

            return $result;
        }
    }

    public function create()
    {
        date_default_timezone_set('Asia/Colombo');
        $createdAt = date('Y-m-d H:i:s');
        $db = new Database();
        $query = "INSERT INTO `course_registration` (`created_at`, `full_name`, `email`,`address`,`district`,`city`, `phone_number`,`mobile_number`,`school`,`grade`, `dob`, `age`) VALUES  ('"
            . $createdAt . "','"
            . $this->full_name . "','"
            . $this->email . "', '"
            . $this->address . "', '"
            . $this->district . "', '"
            . $this->city . "', '"
            . $this->phone_number . "', '"
            . $this->mobile_number . "', '"
            . $this->school . "', '"
            . $this->grade . "', '"
            . $this->dob . "', '"
            . $this->age . "')";


        $result = $db->readQuery($query);

        if ($result) {
            return mysqli_insert_id($db->DB_CON);
        } else {
            return FALSE;
        }
    }

    public function all()
    {

        $query = "SELECT * FROM `course_registration`  ORDER BY `id` ASC";

        $db = new Database();

        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysqli_fetch_array($result)) {
            array_push($array_res, $row);
        }

        return $array_res;
    }
    public function getAllregistrationsByCourse($id)
    {

        $query = "SELECT * FROM `course_registration` WHERE `id` IN (SELECT `registration_id` FROM `student_course` WHERE `course` = $id)  ORDER BY `id` ASC";

        $db = new Database();

        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysqli_fetch_array($result)) {
            array_push($array_res, $row);
        }

        return $array_res;
    }

    //function
    function sendSMS($sender_id, $phone_number, $message)
    {

        $data = array(
            'user_id' => '101974',
            'api_key' => 'atauzyrdbcwwaxxyx',
            'sender_id' => $sender_id,
            'to' => $phone_number,
            'message' => $message
        );

        $url = 'http://send.ozonedesk.com/api/v2/send.php';
        $ch = curl_init($url);
        $postString = http_build_query($data, '', '&');
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $postString);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        curl_close($ch);

        if ($response) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function update()
    {

        $db = new Database();
        $query = "UPDATE  `course_registration` SET "
            . "`full_name` ='" . $this->full_name . "', "
            . "`email` ='" . $this->email . "', "
            . "`address` ='" . $this->address . "', "
            . "`district` ='" . $this->district . "', "
            . "`city` ='" . $this->city . "', "
            . "`phone_number` ='" . $this->phone_number . "', "
            . "`mobile_number` ='" . $this->mobile_number . "', "
            . "`school` ='" . mysqli_real_escape_string($this->school) . "', "
            . "`grade` ='" . $this->grade . "', "
            . "`dob` ='" . $this->dob . "', "
            . "`age` ='" . $this->age . "' "
            . "WHERE `id` = '" . $this->id . "'";

        $result = $db->readQuery($query);

        if ($result) {

            return $this->__construct($this->id);
        } else {

            return FALSE;
        }
    }

    public function delete()
    {
        $query = 'DELETE FROM `course_registration` WHERE id="' . $this->id . '"';
        $db = new Database();
        return $db->readQuery($query);
    }
}
