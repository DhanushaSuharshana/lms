<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of student
 *
 * @author User
 */
class Student {

    public $id;
    public $full_name;
    public $student_id;
    public $email;
    public $city;
    public $phone_number;
    public $password;
    public $authToken;
    public $lastLogin;
    public $status;
    public $level;
    public $image_name;
    public $phone_code;
    public $phone_verification;
    public $resetcode;
    public $is_online;
    public $queue;

    public function __construct($id) {

        if ($id) {

            $query = "SELECT * FROM `student` WHERE `id`=" . $id;
            $db = new Database();

            $result = mysqli_fetch_array($db->readQuery($query));

            $this->id = $result['id'];
            $this->full_name = $result['full_name'];
            $this->student_id = $result['student_id'];
            $this->email = $result['email'];
            $this->city = $result['city'];
            $this->phone_number = $result['phone_number'];
            $this->password = $result['password'];
            $this->authToken = $result['authToken'];
            $this->lastLogin = $result['lastLogin'];
            $this->status = $result['status'];
            $this->image_name = $result['image_name'];
            $this->phone_code = $result['phone_code'];
            $this->phone_verification = $result['phone_verification'];
            $this->resetcode = $result['resetcode'];
            $this->is_online = $result['is_online'];

            return $this;
        }
    }

    public function create() {

        $query = "INSERT INTO `student` (`full_name`, `student_id`, `email`,`city`,`phone_number`,`password`) VALUES  ('"
                . $this->full_name . "','"
                . $this->student_id . "', '"
                . $this->email . "', '"
                . $this->city . "', '"
                . $this->phone_number . "', '"
                . $this->password . "')";

        $db = new Database();

        $result = $db->readQuery($query);

        if ($result) {
            return $db->readLastQuery();
        } else {
            return FALSE;
        }
    }

    public function all() {

        $query = "SELECT * FROM `student`  ORDER BY `id` DESC";

        $db = new Database();

        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysqli_fetch_array($result)) {
            array_push($array_res, $row);
        }

        return $array_res;
    }

    public function getActiveStudent() {

        $query = "SELECT * FROM `student` WHERE `status` = 1 ORDER BY `id` DESC";
        $db = new Database();

        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysqli_fetch_array($result)) {
            array_push($array_res, $row);
        }

        return $array_res;
    }

    public function getInActiveStudent() {

        $query = "SELECT * FROM `student` WHERE `status` = 0 ORDER BY `id` DESC";
        $db = new Database();

        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysqli_fetch_array($result)) {
            array_push($array_res, $row);
        }

        return $array_res;
    }

    public function login2($student_id, $password) {

        $query = "SELECT `id`,`full_name`,`student_id`,`email` FROM `student` WHERE (`student_id`= '" . $student_id . "' OR `phone_number` = '" . $student_id . "' OR `email` = '" . $student_id . "') AND `password`= '" . $password . "'";

        $db = new Database();

        $result = mysqli_fetch_array($db->readQuery($query));

        if (!$result) {
            return FALSE;
        } else {
            $this->id = $result['id'];
            $this->setAuthToken($result['id']);
            $this->setLastLogin($this->id);
            $student = $this->__construct($this->id);
            $this->setUserSession($student);
            return $student->id;
        }
    }

    public function login($student_id, $password) {

        $enPass = md5($password);

        $query = "SELECT `id`,`full_name`,`student_id`,`email` FROM `student` WHERE (`student_id`= '" . $student_id . "' OR `phone_number` = '" . $student_id . "' OR `email` = '" . $student_id . "') AND `password`= '" . $enPass . "'";

        $db = new Database();

        $result = mysqli_fetch_array($db->readQuery($query));

        if (!$result) {

            return FALSE;
        } else {


            $this->id = $result['id'];
            $this->setAuthToken($result['id']);
            $this->setLastLogin($this->id);
            $student = $this->__construct($this->id);
            $this->setUserSession($student);

            return $student->id;
        }
    }

    public function checkOldPass($id, $password) {

        $enPass = md5($password);

        $query = "SELECT `id` FROM `student` WHERE `id`= '" . $id . "' AND `password`= '" . $enPass . "'";

        $db = new Database();

        $result = mysqli_fetch_array($db->readQuery($query));

        if (!$result) {
            return FALSE;
        } else {
            return TRUE;
        }
    }

    public function changePassword($id, $password) {

        $enPass = md5($password);

        $query = "UPDATE  `student` SET "
                . "`password` ='" . $enPass . "' "
                . "WHERE `id` = '" . $id . "'";

        $db = new Database();

        $result = $db->readQuery($query);

        if ($result) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function ChangeProPic($student, $file) {

        $query = "UPDATE  `student` SET "
                . "`image_name` ='" . $file . "' "
                . "WHERE `id` = '" . $student . "'";

        $db = new Database();

        $result = $db->readQuery($query);

        if ($result) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function checkMobileVerificationCode($code) {


        $query = "SELECT * FROM `student` WHERE `phone_code` = '" . $code . "' AND `id`= '" . $this->id . "'";

        $db = new Database();

        $result = mysqli_fetch_array($db->readQuery($query));

        if (!$result) {
            return FALSE;
        } else {
            return TRUE;
        }
    }

    public function updateMobileVerification() {

        $query = "UPDATE  `student` SET "
                . "`phone_verification` ='" . $this->phone_verification . "' "
                . "WHERE `id` = '" . $this->id . "'";

        $db = new Database();

        $result = $db->readQuery($query);

        if ($result) {

            return $this->__construct($this->id);
        } else {

            return FALSE;
        }
    }

    public function authenticate() {

        if (!isset($_SESSION)) {
            session_start();
        }

        $id = NULL;
        $authToken = NULL;

        if (isset($_SESSION["id"])) {
            $id = $_SESSION["id"];
        }

        if (isset($_SESSION["authToken"])) {

            $authToken = $_SESSION["authToken"];
        }

        $query = "SELECT `id` FROM `student` WHERE `id`= '" . $id . "' AND `authToken`= '" . $authToken . "'";

        $db = new Database();

        $result = mysqli_fetch_array($db->readQuery($query));

        if (!$result) {
            return FALSE;
        } else {
            return TRUE;
        }
    }

    public function logOut() {

        if (!isset($_SESSION)) {
            session_start();
        }

        unset($_SESSION["id"]);
        unset($_SESSION["student_id"]);
        unset($_SESSION["authToken"]);

        return TRUE;
    }

    private function setUserSession($student) {

        if (!isset($_SESSION)) {

            session_start();
        }
        $_SESSION["id"] = $student->id;
        $_SESSION["student_id"] = $student->student_id;
        $_SESSION["authToken"] = $student->authToken;
        $_SESSION['login_time'] = time();
    }

    private function setAuthToken($id) {

        $authToken = md5(uniqid(rand(), true));

        $query = "UPDATE `student` SET `authToken` ='" . $authToken . "' WHERE `id`='" . $id . "'";

        $db = new Database();

        if ($db->readQuery($query)) {

            return $authToken;
        } else {
            return FALSE;
        }
    }

    public function checkRegistrationMobile($phone_number) {


        $query = "SELECT `id` FROM `student` WHERE `phone_number`= '" . $phone_number . "'";

        $db = new Database();

        $result = mysqli_fetch_array($db->readQuery($query));

        if (!$result) {
            return FALSE;
        } else {
            return TRUE;
        }
    }

    public function checkRegistrationEmail($email) {

        $query = "SELECT `id` FROM `student` WHERE `email`= '" . $email . "'";

        $db = new Database();

        $result = mysqli_fetch_array($db->readQuery($query));

        if (!$result) {
            return FALSE;
        } else {
            return TRUE;
        }
    }

    private function setLastLogin($id) {

        date_default_timezone_set('Asia/Colombo');

        $now = date('Y-m-d H:i:s');

        $query = "UPDATE `student` SET `lastLogin` ='" . $now . "' WHERE `id`='" . $id . "'";

        $db = new Database();

        if ($db->readQuery($query)) {

            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function checkEmail($email) {

        $query = "SELECT `email`,`student_id`,`phone_number` FROM `student` WHERE (`email`= '" . $email . "' OR `phone_number` = '" . $email . "')";

        $db = new Database();

        $result = mysqli_fetch_array($db->readQuery($query));

        if (!$result) {

            return FALSE;
        } else {

            return $result;
        }
    }

    public function getLastStudentId() {
        $query = " SELECT `id` FROM `student` ORDER BY `id` DESC LIMIT 1";
        $db = new Database();
        $result = mysqli_fetch_assoc($db->readQuery($query));

        return $result['id'];
    }

    public function GenarateCode($email) {

        $rand = rand(10000, 99999);

        $query = "UPDATE  `student` SET "
                . "`resetcode` ='" . $rand . "' "
                . "WHERE `email` = '" . $email . "'";

        $db = new Database();

        $result = $db->readQuery($query);

        if ($result) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function GenarateMobileCode() {

        $rand = rand(10000, 99999);

        $query = "UPDATE  `student` SET "
                . "`phone_code` ='" . $rand . "' "
                . "WHERE `id` = '" . $this->id . "'";

        $db = new Database();

        $result = $db->readQuery($query);

        if ($result) {
            return $this->__construct($this->id);
        } else {
            return FALSE;
        }
    }

    //function
    function sendSMS($sender_id, $phone_number, $message) {

        $data = array(
            'user_id' => '104152',
            'api_key' => 'pmrbkhbiagpfw8t5m',
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

    public function SelectForgetUser($email) {

        if ($email) {

            $query = "SELECT `email`,`phone_number`,`full_name`,`student_id`,`resetcode` FROM `student` WHERE `email`= '" . $email . "'";

            $db = new Database();

            $result = mysqli_fetch_array($db->readQuery($query));

            $this->full_name = $result['full_name'];
            $this->student_id = $result['student_id'];
            $this->email = $result['email'];
            $this->phone_number = $result['phone_number'];
            $this->restCode = $result['resetcode'];
            return $result;
        }
    }

    public function SelectResetCode($code) {

        $query = "SELECT `id` FROM `student` WHERE `resetcode`= '" . $code . "'";

        $db = new Database();

        $result = mysqli_fetch_array($db->readQuery($query));

        if (!$result) {
            return FALSE;
        } else {
            return TRUE;
        }
    }

    public function updatePassword($password, $code) {

        $enPass = md5($password);

        $query = "UPDATE  `student` SET "
                . "`password` ='" . $enPass . "' "
                . "WHERE `resetcode` = '" . $code . "'";

        $db = new Database();

        $result = $db->readQuery($query);

        if ($result) {

            return TRUE;
        } else {

            return FALSE;
        }
    }

    public function update() {

        $query = "UPDATE  `student` SET "
                . "`full_name` ='" . $this->full_name . "', "
                . "`nic_number` ='" . $this->nic_number . "', "
                . "`gender` ='" . $this->gender . "', "
                . "`age` ='" . $this->age . "', "
                . "`phone_number` ='" . $this->phone_number . "', "
                . "`address` ='" . $this->address . "', "
                . "`email` ='" . $this->email . "' "
                . "WHERE `id` = '" . $this->id . "'";

        $db = new Database();

        $result = $db->readQuery($query);

        if ($result) {

            return $this->__construct($this->id);
        } else {

            return FALSE;
        }
    }

    public function sendStudentRegistrationEmail() {

        $to = '<' . $this->email . '>';
        $subject = 'Your Registration is Successful!. - SLYSC.lk';
        $from = 'SLYSC.LK NOREPLY <info@ecollege.lk>';

        // To send HTML mail, the Content-type header must be set
        $headers = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

        // Create email headers
        $headers .= 'From: ' . $from . "\r\n" .
                'Reply-To: ' . $from . "\r\n" .
                'X-Mailer: PHP/' . phpversion();

        // Compose a simple HTML email message
        $message = '<html>';
        $message .= '<body>';
        $message .= '<div  style="padding: 10px; max-width: 650px; background-color: #f2f1ff; border: 1px solid #d4d4d4;">';
        $message .= '<h4>Welcome to the SLYSC.lk!.</h4>';
        $message .= '<p>Dear sir/madam, Thank you for registering on www.slysc.lk. Please use your Student ID when you log in to the website with the password, which you gave when creating your account...</p>';
        $message .= '<hr/>';
        $message .= '<h3>Your Member ID :' . $this->student_id . '</h3>';
        $message .= "<h4>Please Complete Your Profile From <a href='#'><span> here <span></h4></a>";
        $message .= '<hr/>';
        $message .= '<p>Thanks & Best Regards!.. <br/> www.SLYSC.lk<p/>';
        $message .= '<small>*Please do not reply to this email. This is an automated email & you will not receive a response.</small><br/>';
        $message .= '<span>Hotline: +94 71 8000 849 </span><br/>';
        $message .= '<span>mail@slysc.lk</span>';
        $message .= '</div>';
        $message .= '</body>';
        $message .= '</html>';

        if (mail($to, $subject, $message, $headers)) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function updateActiveStudent() {

        $query = "UPDATE  `student` SET "
                . "`full_name` ='" . $this->full_name . "', "
                . "`nic_number` ='" . $this->nic_number . "', "
                . "`gender` ='" . $this->gender . "', "
                . "`age` ='" . $this->age . "', "
                . "`phone_number` ='" . $this->phone_number . "', "
                . "`address` ='" . $this->address . "', "
                . "`email` ='" . $this->email . "', "
                . "`status` ='" . $this->status . "' "
                . "WHERE `id` = '" . $this->id . "'";

        $db = new Database();

        $result = $db->readQuery($query);

        if ($result) {

            return $this->__construct($this->id);
        } else {

            return FALSE;
        }
    }

}
