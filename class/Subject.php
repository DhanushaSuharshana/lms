<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Page
 *
 * @author Suharshana DsW
 */
class Subject {

    public $id;
    public $name;
    public $order;

    public function __construct($id) {
        if ($id) {

            $query = "SELECT * FROM `subject` WHERE `id`=" . $id;

            $db = new Database();

            $result = mysql_fetch_array($db->readQuery($query));

            $this->id = $result['id'];
            $this->name = $result['name'];
            $this->order = $result['order'];

            return $this;
        }
    }

    public function create() {

        $query = "INSERT INTO `subject` (`name`,`order`) VALUES  ('"
                . $this->name . "','"
                . $this->order . "')";


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

        $query = "SELECT * FROM `subject`";
        $db = new Database();
        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysql_fetch_array($result)) {
            array_push($array_res, $row);
        }

        return $array_res;
    }

    public function update() {

        $query = "UPDATE  `subject` SET "
                . "`name` ='" . $this->name . "', "
                . "`order` ='" . $this->order . "' "
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

        $query = 'DELETE FROM `subject` WHERE id="' . $this->id . '"';
 
        $db = new Database();

        return $db->readQuery($query);
    }

}
