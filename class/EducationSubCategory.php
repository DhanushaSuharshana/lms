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
class EducationSubCategory {

    public $id;
    public $name;
    public $category;
    public $status;
    public $sort;

    public function __construct($id) {
        if ($id) {

            $query = "SELECT * FROM `education_sub_category` WHERE `id`=" . $id;

            $db = new Database();

            $result = mysql_fetch_array($db->readQuery($query));

            $this->id = $result['id'];
            $this->name = $result['name'];
            $this->category = $result['category'];
            $this->status = $result['status'];
            $this->sort = $result['sort'];

            return $this;
        }
    }

    public function create() {

        $query = "INSERT INTO `education_sub_category` (`name`,`category`,`status`,`sort`) VALUES  ('"
                . $this->name . "','"
                . $this->category . "','"
                . $this->status . "','"
                . $this->sort . "')";


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

        $query = "SELECT * FROM `education_sub_category`";
        $db = new Database();
        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysql_fetch_array($result)) {
            array_push($array_res, $row);
        }

        return $array_res;
    }

    public function activeCategory() {

        $query = "SELECT * FROM `education_sub_category` WHERE `status` = 1";
        $db = new Database();
        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysql_fetch_array($result)) {
            array_push($array_res, $row);
        }

        return $array_res;
    }

    public function update() {

        $query = "UPDATE  `education_sub_category` SET "
                . "`name` ='" . $this->name . "', "
                . "`category` ='" . $this->category . "', "
                . "`status` ='" . $this->status . "', "
                . "`sort` ='" . $this->sort . "' "
                . "WHERE `id` = '" . $this->id . "'";

        $db = new Database();

        $result = $db->readQuery($query);

        if ($result) {
            return $this->__construct($this->id);
        } else {
            return FALSE;
        }
    }

    public function CategoryByEducationId($id) {

        $query = "SELECT * FROM `education_sub_category`  WHERE `category`= $id ";
        $db = new Database();
        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysql_fetch_array($result)) {
            array_push($array_res, $row);
        }

        return $array_res;
    }

    public function delete() {

        $query = 'DELETE FROM `education_sub_category` WHERE id="' . $this->id . '"';

        $db = new Database();

        return $db->readQuery($query);
    }

    public function getSubCategoryByCategory($category) {

        $query = "SELECT * FROM `education_sub_category` WHERE `category` = '" . $category . "' ORDER BY `sort` ASC";

        $db = new Database();

        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysql_fetch_array($result)) {
            array_push($array_res, $row);
        }

        return $array_res;
    }

}
