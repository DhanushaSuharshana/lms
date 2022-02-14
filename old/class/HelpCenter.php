<?php

/**
 * Description of Product
 *
 * @author sublime holdings
 * @web www.sublime.lk
 */
class HelpCenter {

    //put your code here
    public $id;
    public $title;
    public $description;
    public $for_lecturer;
    public $queue;

    public function __construct($id) {
        if ($id) {

            $query = "SELECT * FROM `help_center` WHERE `id`=" . $id;

            $db = new Database();

            $result = mysqli_fetch_array($db->readQuery($query));

            $this->id = $result['id'];
            $this->title = $result['title'];
            $this->description = $result['description'];
            $this->for_lecturer = $result['for_lecturer'];
            $this->queue = $result['queue'];

            return $this;
        }
    }

    public function create() {

        $query = "INSERT INTO `help_center` (`title`,`description`,`for_lecturer`,  `queue`) VALUES  ('"
                . $this->title . "', '"
                . $this->description . "', '"
                . $this->for_lecturer . "', '"
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

        $query = "SELECT * FROM `help_center` ORDER BY `id` DESC";
        $db = new Database();
        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysqli_fetch_array($result)) {
            array_push($array_res, $row);
        }

        return $array_res;
    }
    public function getQuestionsByPosition($position) {

        $query = "SELECT * FROM `help_center` WHERE `for_lecturer` = $position ORDER BY `id` ASC";
        $db = new Database();
        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysqli_fetch_array($result)) {
            array_push($array_res, $row);
        }

        return $array_res;
    }

    public function update() {

        $query = "UPDATE  `help_center` SET "
                . "`title` ='" . $this->title . "', " 
                . "`description` ='" . $this->description . "', "
                . "`for_lecturer` ='" . $this->for_lecturer . "' "
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

        $query = 'DELETE FROM `help_center` WHERE id="' . $this->id . '"';

        $db = new Database();

        return $db->readQuery($query);
    }

}
