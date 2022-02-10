<?php

/**
 * Description of LessonMCQPaper
 *
 * @author W j K n``
 */
class LessonMCQPaper
{

    //put your code here
    public $id;
    public $class;
    public $date;
    public $lecturer;
    public $title;
    public $created_at;
    public $sort;

    public function __construct($id)
    {
        if ($id) {

            $query = "SELECT * FROM `lesson_mcq_paper` WHERE `id`=" . $id;

            $db = new Database();

            $result = mysql_fetch_array($db->readQuery($query));

            $this->id = $result['id'];
            $this->class = $result['class'];
            $this->date = $result['date'];
            $this->lecturer = $result['lecturer'];
            $this->title = $result['title'];
            $this->created_at = $result['created_at'];
            $this->sort = $result['sort'];

            return $this;
        }
    }

    public function create()
    {
        date_default_timezone_set('Asia/Colombo');
        $createdAt = date('Y-m-d H:i:s');

        $query = "INSERT INTO `lesson_mcq_paper` (`class`,`date`, `lecturer`, `title`, `created_at`, `sort`) VALUES  ('"
            . $this->class . "', '"
            . $this->date . "', '"
            . $this->lecturer . "', '"
            . $this->title . "', '"
            . $createdAt . "', '"
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

        $query = "SELECT * FROM `lesson_mcq_paper` ORDER BY `class` ASC";
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
        $query = "UPDATE  `lesson_mcq_paper` SET "
            . "`class`= '" . $this->class . "', "
            . "`date`= '" . $this->date . "', "
            . "`lecturer`= '" . $this->lecturer . "', "
            . "`title`= '" . $this->title . "', "
            . "`sort`= '" . $this->sort . "' "
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
        $this->deleteQuestions();
        $query = 'DELETE FROM `lesson_mcq_paper` WHERE id="' . $this->id . '"';

        $db = new Database();

        return $db->readQuery($query);
    }
    public function deleteQuestions()
    {

        $query = "DELETE FROM `lesson_question` WHERE `paper` = '" . $this->id . "'";

        $db = new Database();

        return $db->readQuery($query);
    }

    public function getMCQPapersByClassId($id, $date)
    {

        $query = "SELECT * FROM `lesson_mcq_paper` WHERE `class` = '" . $id . "' AND `date` = '" . $date . "' ";

        $db = new Database();

        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysql_fetch_array($result)) {
            array_push($array_res, $row);
        }
        return $array_res;
    }
    public function getExampapersByLecture($id)
    {

        $query = "SELECT * FROM `lesson_mcq_paper` WHERE `lecturer` = '" . $id . "'";

        $db = new Database();

        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysql_fetch_array($result)) {
            array_push($array_res, $row);
        }
        return $array_res;
    }
    public function getAllExampapers()
    {

        $query = "SELECT * FROM `lesson_mcq_paper` WHERE `class` = 0 ORDER BY `sort` ASC";

        $db = new Database();

        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysql_fetch_array($result)) {
            array_push($array_res, $row);
        }
        return $array_res;
    }
    public function arrange($key, $img)
    {

        $query = "UPDATE `lesson_mcq_paper` SET `sort` = '" . $key . "'  WHERE id = '" . $img . "'";
        $db = new Database();
        $result = $db->readQuery($query);
        return $result;
    }
}
