<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of lecture
 *
 * @author User
 */
class Lecture {

    public $id;
    public $full_name;
    public $email;
    public $nic_number;
    public $phone_number;
    public $address;
    public $birth_day;
    public $age;
    public $grade;
    public $school;
    public $experience;
    public $collage;
    public $mediums;
    public $education_level;
    public $account_number;
    public $account_holder_name;
    public $hear_about_us;
    public $bank_name;
    public $branch;
    public $city;
    public $it_literacy;
    public $facilities;
    public $district;
    public $authToken;
    public $lastLogin;
    public $status;
    public $subject;
    public $image_name;
    public $resetcode;
    public $phone_code;
    public $phone_verification;
    public $queue;

    public function __construct($id) {

        if ($id) {

            $query = "SELECT * FROM `lecture` WHERE `id`=" . $id;

            $db = new Database();

            $result = mysqli_fetch_array($db->readQuery($query));

            $this->id = $result['id'];
            $this->full_name = $result['full_name'];
            $this->birth_day = $result['birth_day'];
            $this->age = $result['age'];
            $this->grade = $result['grade'];
            $this->school = $result['school'];
            $this->collage = $result['collage'];
            $this->experience = $result['experience'];
            $this->mediums = $result['mediums'];
            $this->education_level = $result['education_level'];
            $this->account_number = $result['account_number'];
            $this->account_holder_name = $result['account_holder_name'];
            $this->branch = $result['branch'];
            $this->bank_name = $result['bank_name'];
            $this->hear_about_us = $result['hear_about_us'];
            $this->it_literacy = $result['it_literacy'];
            $this->facilities = $result['facilities'];
            $this->email = $result['email'];
            $this->nic_number = $result['nic_number'];
            $this->phone_number = $result['phone_number'];
            $this->address = $result['address'];
            $this->password = $result['password'];
            $this->authToken = $result['authToken'];
            $this->lastLogin = $result['lastLogin'];
            $this->subject = $result['subject'];
            $this->city = $result['city'];
            $this->district = $result['district'];
            $this->image_name = $result['image_name'];
            $this->resetcode = $result['resetcode'];
            $this->phone_code = $result['phone_code'];
            $this->phone_verification = $result['phone_verification'];
            $this->queue = $result['queue'];

            return $result;
        }
    }

    public function create() {

        $query = "INSERT INTO `lecture` (`full_name`,`birth_day`,`age`,`school`,`collage`,`experience`,`mediums`,`education_level`,`it_literacy`,`facilities`,`email`,`nic_number`,`phone_number`,`address`,`district`,`city`,`password`) VALUES  ('"
                . $this->full_name . "','"
                . $this->birth_day . "','"
                . $this->age . "','"
                . $this->school . "','"
                . $this->collage . "','"
                . $this->experience . "','"
                . $this->mediums . "','"
                . $this->education_level . "','"
                . $this->it_literacy . "','"
                . $this->facilities . "','"
                . $this->email . "', '"
                . $this->nic_number . "', '"
                . $this->phone_number . "', '"
                . $this->address . "', '"
                . $this->district . "', '"
                . $this->city . "', '"
                . $this->password . "')";

        $db = new Database();

        $result = $db->readQuery($query);

        if ($result) {
            return mysqli_insert_id($db->DB_CON);
        } else {
            return FALSE;
        }
    }

    public function all() {

        $query = "SELECT * FROM `lecture`  ORDER BY queue ASC";

        $db = new Database();

        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysqli_fetch_array($result)) {
            array_push($array_res, $row);
        }

        return $array_res;
    }

    public function getAllByFilter($district, $city, $subject, $pageLimit, $setLimit) {


        $query = "SELECT * FROM `lecture`  ";

        if (!empty($district)) {
            $query .= " WHERE `district` = " . $district . "    ";
        }
        if (!empty($city)) {
            $query .= " AND `city` = " . $city . "   ";
        }

//        if (!empty($city)) {
//            $query .= "`city` = " . $city . "   ";
//        }

        $query .= " ORDER BY  id DESC   ";

        $db = new Database();
        $result = $db->readQuery($query);
        $out_put = '';
        while ($row = mysqli_fetch_array($result)) {


            $out_put .= ' <div class="col-md-2 col-sm-4 col-xs-6" style="height: 200px;">	
                            <div class="teacher">
                                <div class="imgcontainer">';
            if (empty($row['image_name'])) {
                $out_put .= '<a href="lecture-view.php?id=' . $row['id'] . '">'
                        . '<img src="assets/member.jpg" alt="' . $row['full_name'] . '" class="img-responsive"></a>';
            } else {

                $out_put .= '<a href="lecture-view.php?id=' . $row['id'] . '">'
                        . '<img src="upload/lecture/profile/' . $row['image_name'] . '" alt="' . $row['full_name'] . '" class="img-responsive img-circle" style="width: 100%"></a>';
            }

            $out_put .= ' 
                                </div>
                                <a href="lecture-view.php?id=' . $row['id'] . '"> ' . $row['full_name'] . '</a>
                                <p>' . $row['email'] . '</p>
                            </div>
                        </div>';
        }

        if (!empty($out_put)) {
            echo $out_put;
        } else {
            echo $out_put = '<p style="color: red;font-weight: 600;">No Data Found..!</p>';
        }
    }

    public function getActiveStudent() {

        $query = "SELECT * FROM `lecture` WHERE `status` = 1 ORDER BY queue ASC";
        $db = new Database();

        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysqli_fetch_array($result)) {
            array_push($array_res, $row);
        }

        return $array_res;
    }

    public function getInActiveStudent() {

        $query = "SELECT * FROM `lecture` WHERE `status` = 0 ORDER BY queue ASC";
        $db = new Database();

        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysqli_fetch_array($result)) {
            array_push($array_res, $row);
        }

        return $array_res;
    }

    public function getAllMembersWithoutThis($lecture) {

        $query = "SELECT * FROM `lecture` WHERE `id` <> '" . $member . "' AND `status` = 1 AND `is_suspend` = 0";
        $db = new Database();
        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysqli_fetch_array($result)) {
            array_push($array_res, $row);
        }

        return $array_res;
    }

    public function login($email, $password) {

        $enPass = md5($password);

        $query = "SELECT `id`,`full_name`, `email`, `nic_number`  FROM `lecture` WHERE (`email`= '" . $email . "' OR `phone_number`= '" . $email . "') AND `password`= '" . $enPass . "'";

        $db = new Database();

        $result = mysqli_fetch_array($db->readQuery($query));

        if (!$result) {

            return FALSE;
        } else {

            $this->id = $result['id'];
            $this->setAuthToken($result['id']);
            $this->setLastLogin($this->id);
            $lecture = $this->__construct($this->id);
            $this->setUserSession($lecture);

            return $lecture;
        }
    }

    public function checkOldPass($id, $password) {

        $enPass = md5($password);

        $query = "SELECT `id` FROM `lecture` WHERE `id`= '" . $id . "' AND `password`= '" . $enPass . "'";

        $db = new Database();

        $result = mysqli_fetch_array($db->readQuery($query));

        if (!$result) {
            return FALSE;
        } else {
            return TRUE;
        }
    }

    public function checkMobileVerificationCode($code) {


        $query = "SELECT * FROM `lecture` WHERE `phone_code` = '" . $code . "' AND `id`= '" . $this->id . "'";

        $db = new Database();

        $result = mysqli_fetch_array($db->readQuery($query));

        if (!$result) {
            return FALSE;
        } else {
            return TRUE;
        }
    }

    public function updateMobileVerification() {

        $query = "UPDATE  `lecture` SET "
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

    public function GenarateMobileCode() {

        $rand = rand(10000, 99999);

        $query = "UPDATE  `lecture` SET "
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

    public function checkRegistrationEmail($email) {


        $query = "SELECT `id` FROM `lecture` WHERE `email`= '" . $email . "'";

        $db = new Database();

        $result = mysqli_fetch_array($db->readQuery($query));

        if (!$result) {
            return FALSE;
        } else {
            return TRUE;
        }
    }

    public function checkRegistrationNicNumber($nic_number) {


        $query = "SELECT `id` FROM `lecture` WHERE `nic_number`= '" . $nic_number . "'";

        $db = new Database();

        $result = mysqli_fetch_array($db->readQuery($query));

        if (!$result) {
            return FALSE;
        } else {
            return TRUE;
        }
    }

    public function checkRegistrationMobile($phone_number) {


        $query = "SELECT `id` FROM `lecture` WHERE `phone_number`= '" . $phone_number . "'";

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

        $query = "UPDATE  `lecture` SET "
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

    public function ChangeProPic($lecture, $file) {

        $query = "UPDATE  `lecture` SET "
                . "`image_name` ='" . $file . "' "
                . "WHERE `id` = '" . $lecture . "'";

        $db = new Database();

        $result = $db->readQuery($query);

        if ($result) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function updateNicImagesBack($lecture, $nic_back) {

        $query = "UPDATE  `lecture` SET "
                . "`nic_back` ='" . $nic_back . "' "
                . "WHERE `id` = '" . $lecture . "'";


        $db = new Database();

        $result = $db->readQuery($query);

        if ($result) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function updateNicImagesFront($lecture, $nic_front) {

        $query = "UPDATE  `lecture` SET "
                . "`nic_front` ='" . $nic_front . "' "
                . "WHERE `id` = '" . $lecture . "'";


        $db = new Database();

        $result = $db->readQuery($query);

        if ($result) {
            return TRUE;
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

        $query = "SELECT `id` FROM `lecture` WHERE `id`= '" . $id . "' AND `authToken`= '" . $authToken . "'";

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
        unset($_SESSION["full_name"]);
        unset($_SESSION["email"]);
        unset($_SESSION["nic_number"]);
        unset($_SESSION["authToken"]);
        unset($_SESSION["subject"]);
        unset($_SESSION["image_name"]);

        return TRUE;
    }

    public function checkLogin($id) {

        $query = "SELECT * FROM `lecture` WHERE `id` ='" . $id . "'  AND `status` = 0 ";

        $db = new Database();
        $result = mysqli_fetch_array($db->readQuery($query));
        return $result['id'];
    }

    private function setUserSession($lecture) {

        if (!isset($_SESSION)) {

            session_start();
        }
        $_SESSION["id"] = $lecture['id'];
        $_SESSION["email"] = $lecture['email'];
        $_SESSION["nic_number"] = $lecture['nic_number'];
        $_SESSION["full_name"] = $lecture['full_name'];
        $_SESSION["authToken"] = $lecture['authToken'];
        $_SESSION["lastLogin"] = $lecture['lastLogin'];
        $_SESSION['login_time'] = time();
        $_SESSION['image_name'] = $lecture['image_name'];
    }

    private function setAuthToken($id) {

        $authToken = md5(uniqid(rand(), true));

        $query = "UPDATE `lecture` SET `authToken` ='" . $authToken . "' WHERE `id`='" . $id . "'";

        $db = new Database();

        if ($db->readQuery($query)) {

            return $authToken;
        } else {
            return FALSE;
        }
    }

    private function setLastLogin($id) {

        date_default_timezone_set('Asia/Colombo');

        $now = date('Y-m-d H:i:s');

        $query = "UPDATE `lecture` SET `lastLogin` ='" . $now . "' WHERE `id`='" . $id . "'";

        $db = new Database();

        if ($db->readQuery($query)) {

            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function checkEmail($email) {

        $query = "SELECT `email`,`full_name`,`phone_number` FROM `lecture` WHERE (`email`= '" . $email . "' OR `phone_number`= '" . $email . "')";

        $db = new Database();

        $result = mysqli_fetch_array($db->readQuery($query));

        if (!$result) {

            return FALSE;
        } else {

            return $result;
        }
    }

    public function getLastStudentId() {
        $query = " SELECT `id` FROM `lecture` ORDER BY `id` DESC LIMIT 1";
        $db = new Database();
        $result = mysqli_fetch_assoc($db->readQuery($query));

        return $result['id'];
    }

    public function GenarateCode($email) {

        $rand = rand(10000, 99999);

        $query = "UPDATE  `lecture` SET "
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

    public function SelectForgetUser($email) {

        if ($email) {

            $query = "SELECT `email`,`phone_number`,`full_name`,`resetcode` FROM `lecture` WHERE `email`= '" . $email . "'";

            $db = new Database();

            $result = mysqli_fetch_array($db->readQuery($query));

            $this->full_name = $result['full_name'];
            $this->email = $result['email'];
            $this->phone_number = $result['phone_number'];
            $this->restCode = $result['resetcode'];
            return $result;
        }
    }

    public function SelectResetCode($code) {

        $query = "SELECT `id` FROM `lecture` WHERE `resetcode`= '" . $code . "'";

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

        $query = "UPDATE  `lecture` SET "
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

        $query = "UPDATE  `lecture` SET "
                . "`full_name` ='" . $this->full_name . "', "
                . "`birth_day` ='" . $this->birth_day . "', "
                . "`age` ='" . $this->age . "', "
                . "`nic_number` ='" . $this->nic_number . "', "
                . "`address` ='" . $this->address . "', "
                . "`district` ='" . $this->district . "', "
                . "`city` ='" . $this->city . "', "
                . "`phone_number` ='" . $this->phone_number . "', "
                . "`email` ='" . $this->email . "', "
                . "`mediums` ='" . $this->mediums . "', "
                . "`grade` ='" . $this->grade . "', "
                . "`school` ='" . $this->school . "', "
                . "`collage` ='" . $this->collage . "', "
                . "`education_level` ='" . $this->education_level . "', "
                . "`experience` ='" . $this->experience . "', "
                . "`it_literacy` ='" . $this->it_literacy . "', "
                . "`account_number` ='" . $this->account_number . "', "
                . "`account_holder_name` ='" . $this->account_holder_name . "', "
                . "`bank_name` ='" . $this->bank_name . "', "
                . "`branch` ='" . $this->branch . "', "
                . "`facilities` ='" . $this->facilities . "', "
                . "`hear_about_us` ='" . $this->hear_about_us . "' "
                . "WHERE `id` = '" . $this->id . "'";


        $db = new Database();

        $result = $db->readQuery($query);

        if ($result) {

            return $this->__construct($this->id);
        } else {

            return FALSE;
        }
    }

    public function updateActiveStudent() {

        $query = "UPDATE  `lecture` SET "
                . "`full_name` ='" . $this->full_name . "', "
                . "`nic_number` ='" . $this->nic_number . "', "
                . "`gender` ='" . $this->gender . "', "
                . "`age` ='" . $this->age . "', "
                . "`phone_number` ='" . $this->phone_number . "', "
                . "`address` ='" . $this->address . "', "
                . "`education_subject` ='" . $this->education_subject . "', "
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

    public function delete() {






        if ($this->image_name) {
            unlink(Helper::getSitePath() . "upload/lecture/profile/" . $this->image_name);
        } elseif ($this->nic_front || $this->image_name) {
            unlink(Helper::getSitePath() . "upload/lecture/nic_card/front/" . $this->nic_front);
            unlink(Helper::getSitePath() . "upload/lecture/nic_card/front/thumb/" . $this->nic_front);
            unlink(Helper::getSitePath() . "upload/lecture/nic_card/back/thumb/" . $this->nic_back);
            unlink(Helper::getSitePath() . "upload/lecture/nic_card/back/" . $this->nic_back);
        }


        $query = 'DELETE FROM `lecture` WHERE id="' . $this->id . '"';


        $db = new Database();



        return $db->readQuery($query);
    }

    public function deletePost() {



        $POST = new Post(NULL);
        $POST_IMAGES = new PostImage(NULL);

        foreach ($POST->getPostsByStudent($this->id) as $post) {

            foreach ($POST_IMAGES->getPhotosByPostId($post['id']) as $post_images) {
                unlink(Helper::getSitePath() . "upload/post/" . $post_images['image_name']);

                unlink(Helper::getSitePath() . "upload/post/thumb/" . $post_images['image_name']);
                unlink(Helper::getSitePath() . "upload/post/thumb2/" . $post_images['image_name']);



                $POST_IMAGES->id = $post_images["id"];

                $POST_IMAGES->delete();
            }
            $POST->id = $post["id"];

            $POST->delete();
        }
    }

}
