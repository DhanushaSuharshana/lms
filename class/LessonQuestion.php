<?php

/**
 * Description of LessonQuestion
 *
 * @author W j K n``
 */
class LessonQuestion
{

    //put your code here
    public $id;
    public $paper;
    public $question;
    public $image_name;
    public $created_at;
    public $sort;

    public function __construct($id)
    {
        if ($id) {

            $query = "SELECT * FROM `lesson_question` WHERE `id`=" . $id;

            $db = new Database();

            $result = mysql_fetch_array($db->readQuery($query));

            $this->id = $result['id'];
            $this->paper = $result['paper'];
            $this->question = $result['question'];
            $this->image_name = $result['image_name'];
            $this->created_at = $result['created_at'];
            $this->sort = $result['sort'];

            return $this;
        }
    }

    public function create()
    {
        date_default_timezone_set('Asia/Colombo');
        $createdAt = date('Y-m-d H:i:s');

        $query = "INSERT INTO `lesson_question` (`paper`,`question`,`image_name`, `created_at`, `sort`) VALUES  ('"
            . $this->paper . "', '"
            . $this->question . "', '"
            . $this->image_name . "', '"
            . $createdAt . "','"
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

    public function all()
    {

        $query = "SELECT * FROM `lesson_question` ORDER BY `class` ASC";
        $db = new Database();
        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysql_fetch_array($result)) {
            array_push($array_res, $row);
        }

        return $array_res;
    }

    public function update()
    {
        $query = "UPDATE  `lesson_question` SET "
            . "`paper`= '" . $this->paper . "', "
            . "`question`= '" . $this->question . "', "
            . "`image_name`= '" . $this->image_name . "' "
            . "WHERE `id` = '" . $this->id . "'";

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
        $this->deleteOptions();
        $query = 'DELETE FROM `lesson_question` WHERE id="' . $this->id . '"';

        $db = new Database();

        return $db->readQuery($query);
    }
    public function deleteOptions()
    {

        $query = "DELETE FROM `lesson_question_option` WHERE `question` = '" . $this->id . "'";

        $db = new Database();

        return $db->readQuery($query);
    }

    public function getQuestionsByPaper($id)
    {

        $query = "SELECT * FROM `lesson_question` WHERE `paper` = '" . $id . "' ";
        $db = new Database();

        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysql_fetch_array($result)) {
            array_push($array_res, $row);
        }
        return $array_res;
    }
}
