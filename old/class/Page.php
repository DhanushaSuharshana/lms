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
class Page {

    public $id;
    public $title;
    public $description;

    public function __construct($id) {
        if ($id) {

            $query = "SELECT *  FROM `pages` WHERE `id`=" . $id;

            $db = new Database();

            $result = mysqli_fetch_array($db->readQuery($query));

            $this->id = $result['id'];
            $this->title = $result['title'];
            $this->description = $result['description']; 


            return $this;
        }
    }

    public function create() {

        $query = "INSERT INTO `pages` (`title`,`description`) VALUES  ('"
                . $this->title . "','" 
                . $this->description . "')";


        $db = new Database();

        $result = $db->readQuery($query);

        if ($result) {
            return mysqli_insert_id($db->DB_CON);
        } else {
            return FALSE;
        }
    }

    public function all() {

        $query = "SELECT * FROM `pages`";
        $db = new Database();
        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysqli_fetch_array($result)) {
            array_push($array_res, $row);
        }

        return $array_res;
    }

    public function update() {

        $query = "UPDATE  `pages` SET "
                . "`title` ='" . $this->title . "', "
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

        $query = 'DELETE FROM `pages` WHERE id="' . $this->id . '"';
        unlink(Helper::getSitePath() . "upload/page/" . $this->image_name);

        $db = new Database();

        return $db->readQuery($query);
    }

}
