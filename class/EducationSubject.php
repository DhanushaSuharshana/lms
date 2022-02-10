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
class EducationSubject {

    public $id;
    public $sub_category;
    public $name;
    public $description;

    public function __construct($id) {
        if ($id) {

            $query = "SELECT * FROM `education_subject` WHERE `id`=" . $id;

            $db = new Database();

            $result = mysql_fetch_array($db->readQuery($query));

            $this->id = $result['id'];
            $this->sub_category = $result['sub_category'];
            $this->name = $result['name'];
            $this->description = $result['description'];

            return $this;
        }
    }

    public function create() {

        $query = "INSERT INTO `education_subject` (`name`,`sub_category`,`description`) VALUES  ('"
                . $this->name . "','"
                . $this->sub_category . "','"
                . $this->description . "')";

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

        $query = "SELECT * FROM `education_subject`";
        $db = new Database();
        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysql_fetch_array($result)) {
            array_push($array_res, $row);
        }

        return $array_res;
    }

    public function getSubjectsByCategory($id) {

        $query = "SELECT * FROM `education_subject` WHERE `sub_category`= $id";
        $db = new Database();
        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysql_fetch_array($result)) {
            array_push($array_res, $row);
        }

        return $array_res;
    }

    public function update() {

        $query = "UPDATE  `education_subject` SET "
                . "`name` ='" . $this->name . "', " 
                . "`description` ='" . $this->description . "' "
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

        $query = 'DELETE FROM `education_subject` WHERE id="' . $this->id . '"';

        $db = new Database();

        return $db->readQuery($query);
    }

    public function getSubjectBySubCategory($sub_category) {

        $query = "SELECT * FROM `education_subject` WHERE `sub_category` = '" . $sub_category . "'  ";

        $db = new Database();

        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysql_fetch_array($result)) {
            array_push($array_res, $row);
        }

        return $array_res;
    }

}
