<?php

/**
 * Description of Product
 *
 * @author sublime holdings
 * @web www.sublime.lk
 */
class Chat {

    //put your code here
    public $id;
    public $video_id;
    public $student_id;
    public $lecture_id;
    public $chat_message;
    public $type;

    public function __construct($id) {
        if ($id) {

            $query = "SELECT * FROM `chat_message` WHERE `id`=" . $id;

            $db = new Database();

            $result = mysqli_fetch_array($db->readQuery($query));

            $this->id = $result['id'];
            $this->video_id = $result['video_id'];
            $this->student_id = $result['student_id'];
            $this->lecture_id = $result['lecture_id'];
            $this->chat_message = $result['chat_message'];
            $this->type = $result['type'];

            return $this;
        }
    }

    public function create() {

        $query = "INSERT INTO `chat_message` (`video_id`, `student_id`,`lecture_id`, `chat_message`,`type`) VALUES  ('"
                . $this->video_id . "', '"
                . $this->student_id . "','"
                . $this->lecture_id . "','"
                . $this->chat_message . "','"
                . $this->type . "')";

        $db = new Database();

        $result = $db->readQuery($query);

        if ($result) {
            return mysqli_insert_id($db->DB_CON);
        } else {
            return FALSE;
        }
    }

    public function fetch_user_chat_history($video_id, $id, $type) {

        $query = "SELECT * FROM `chat_message` WHERE `video_id` = '" . $video_id . "' ORDER BY timestamp ASC";

        $db = new Database();

        $result = $db->readQuery($query);

        $output = '<ul class="list-unstyled">';

        while ($row = mysqli_fetch_array($result)) {

            $user_name = '';
            $STUDENT = new Student($row["student_id"]);
            $LECTURE = new Lecture($row["lecture_id"]);



            if ($row['type'] == 'S') {
                $user_name = '<b class="text-success">' . $STUDENT->full_name . ' </b>';

                $output .= '
                        <li style="border-bottom:1px dotted #ccc">
                                <p  >' . $user_name . '</p>
                                <p>' . $row["chat_message"] . '</p>
                        <div align="right">
                                - <small><em>' . $row['timestamp'] . '</em></small>
                        </div> 
                        </li>';
            }

            if ($row['type'] == 'L') {

                $user_name = '<b class="text-info"> ' . $LECTURE->full_name . ' </b>';
                $output .= '
                        <li style="border-bottom:1px dotted #ccc">
                                <p align="right">' . $user_name . '</p>
                                <p>' . $row["chat_message"] . '</p>
                        <div align="right">
                                - <small><em>' . $row['timestamp'] . '</em></small>
                        </div> 
                        </li>';
            }
        }

        $output .= '</ul>';
        return $output;
    }

    public function all() {

        $query = "SELECT * FROM `chat_message` ORDER BY `video_id` ASC";
        $db = new Database();
        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysqli_fetch_array($result)) {
            array_push($array_res, $row);
        }

        return $array_res;
    }

    public function getChatByVideo($video_id) {

        $query = "SELECT * FROM `chat_message` WHERE `video_id` = '" . $video_id . "' ORDER BY timestamp ASC";

        $db = new Database();

        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysqli_fetch_array($result)) {
            array_push($array_res, $row);
        }

        return $array_res;
    }

    public function update() {

        $query = 'UPDATE `chat_message` SET `video_id`= "' . $this->video_id . '" WHERE id="' . $this->id . '"';

        $db = new Database();
        $result = $db->readQuery($query);

        if ($result) {
            return $this->__construct($this->id);
        } else {
            return FALSE;
        }
    }

    public function delete() {

        $query = 'DELETE FROM `chat_message` WHERE id="' . $this->id . '"';

        $db = new Database();

        return $db->readQuery($query);
    }

}
