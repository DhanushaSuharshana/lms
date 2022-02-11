<?php

/**
 * Description of Course
 *
 * @author W j K n``
 * @web www.synotec.lk
 */
class Course
{

    public $id;
    public $name;
    public $ref_code;
    public $batch;
    public $current_id;
    public $queue = 100;

    public function __construct($id)
    {
        if ($id) {

            $query = "SELECT `id`,`name`,`ref_code`,`batch`,`current_id`,`queue` FROM `course` WHERE `id`=" . $id;

            $db = new Database();

            $result = mysqli_fetch_array($db->readQuery($query));

            $this->id = $result['id'];
            $this->name = $result['name'];
            $this->ref_code = $result['ref_code'];
            $this->batch = $result['batch'];
            $this->current_id = $result['current_id'];
            $this->queue = $result['queue'];

            return $this;
        }
    }

    public function create()
    {

        $query = "INSERT INTO `course` (`name`,`ref_code`,`batch`,`current_id`, `queue`) VALUES  ('" . $this->name . "','" . $this->ref_code . "','" . $this->batch . "','0', '" . $this->queue . "')";

        $db = new Database();

        $result = $db->readQuery($query);

        if ($result) {
            return mysqli_insert_id($db->DB_CON);
        } else {
            return FALSE;
        }
    }

    public function all()
    {

        $query = "SELECT * FROM `course` ORDER BY `id` ASC";
        $db = new Database();
        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysqli_fetch_array($result)) {
            array_push($array_res, $row);
        }

        return $array_res;
    }

    public function update()
    {

        $query = 'UPDATE `course` SET `name`= "' . $this->name . '", `ref_code`= "' . $this->ref_code . '", `batch`= "' . $this->batch . '", `current_id`= "' . $this->current_id . '" WHERE id="' . $this->id . '"';

        $db = new Database();
        $result = $db->readQuery($query);

        if ($result) {
            return $this->__construct($this->id);
        } else {
            return FALSE;
        }
    }
    public function updateCurrentID()
    {

        $query = 'UPDATE `course` SET  `current_id`= "' . $this->current_id . '" WHERE id="' . $this->id . '"';

        $db = new Database();
        $result = $db->readQuery($query);

        if ($result) {
            return $this->__construct($this->id);
        } else {
            return FALSE;
        }
    }

    public function delete()
    {

        $query = 'DELETE FROM `course` WHERE id="' . $this->id . '"';

        $db = new Database();

        return $db->readQuery($query);
    }
}
