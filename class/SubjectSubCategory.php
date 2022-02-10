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
class SubjectSubCategory {

    public $id;
    public $education_subject;
    public $name;
    public $sort;

    public function __construct($id) {
        if ($id) {

            $query = "SELECT * FROM `subject_sub_category` WHERE `id`=" . $id;

            $db = new Database();

            $result = mysql_fetch_array($db->readQuery($query));

            $this->id = $result['id'];
            $this->education_subject = $result['education_subject'];
            $this->name = $result['name'];
            $this->sort = $result['sort'];

            return $this;
        }
    }

    public function create() {

        $query = "INSERT INTO `subject_sub_category` (`name`,`education_subject`) VALUES  ('"
                . $this->name . "','"
                . $this->education_subject . "')";


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

        $query = "SELECT * FROM `subject_sub_category`";
        $db = new Database();
        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysql_fetch_array($result)) {
            array_push($array_res, $row);
        }

        return $array_res;
    }

    public function getSubCategoryById($id) {

        $query = "SELECT * FROM `subject_sub_category` WHERE `education_subject` ='" . $id . "'";
        $db = new Database();
        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysql_fetch_array($result)) {
            array_push($array_res, $row);
        }

        return $array_res;
    }

    public function update() {

        $query = "UPDATE  `subject_sub_category` SET "
                . "`name` ='" . $this->name . "', "
                . "`education_subject` ='" . $this->education_subject . "' "
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

        $query = 'DELETE FROM `subject_sub_category` WHERE id="' . $this->id . '"';

        $db = new Database();

        return $db->readQuery($query);
    }

}
