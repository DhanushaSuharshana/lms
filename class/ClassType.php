<?php

/**
 * Description of Product
 *
 * @author sublime holdings
 * @web www.sublime.lk
 */
class ClassType {

    public $id;
    public $name;
    public $queue;

    public function __construct($id) {
        if ($id) {

            $query = "SELECT * FROM `class_type` WHERE `id`=" . $id;

            $db = new Database();

            $result = mysql_fetch_array($db->readQuery($query));

            $this->id = $result['id'];
            $this->name = $result['name'];
            $this->queue = $result['queue'];

            return $this;
        }
    }

    public function create() {

        $query = "INSERT INTO `class_type` (`name`, `queue`) VALUES  ('" . $this->name . "', '" . $this->queue . "')";

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

        $query = "SELECT * FROM `class_type` ORDER BY `name` ASC";
        $db = new Database();
        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysql_fetch_array($result)) {
            array_push($array_res, $row);
        }

        return $array_res;
    }

    public function update() {

        $query = 'UPDATE `class_type` SET `name`= "' . $this->name . '" WHERE id="' . $this->id . '"';

        $db = new Database();
        $result = $db->readQuery($query);

        if ($result) {
            return $this->__construct($this->id);
        } else {
            return FALSE;
        }
    }

    public function delete() {

        $query = 'DELETE FROM `class_type` WHERE id="' . $this->id . '"';

        $db = new Database();

        return $db->readQuery($query);
    }

}
