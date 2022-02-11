<?php

/**
 * Description of LessonQuestionOption
 *
 * @author W j K n``
 */
class LessonQuestionOption
{

    //put your code here
    public $id;
    public $question;
    public $option_A;
    public $option_B;
    public $option_C;
    public $option_D;
    public $option_E;
    public $correct_answer;

    public function __construct($id)
    {
        if ($id) {

            $query = "SELECT * FROM `lesson_question_option` WHERE `id`=" . $id;
            $db = new Database();

            $result = mysqli_fetch_array($db->readQuery($query));

            $this->id = $result['id'];
            $this->question = $result['question'];
            $this->option_A = $result['option_A'];
            $this->option_B = $result['option_B'];
            $this->option_C = $result['option_C'];
            $this->option_D = $result['option_D'];
            $this->option_E = $result['option_E'];
            $this->correct_answer = $result['correct_answer'];

            return $this;
        }
    }

    public function create()
    {
        date_default_timezone_set('Asia/Colombo');
        $createdAt = date('Y-m-d H:i:s');

        $query = "INSERT INTO `lesson_question_option` (`question`,`option_A`,`option_B`, `option_C`, `option_D`, `option_E`, `correct_answer`) VALUES  ('"
            . $this->question . "', '"
            . $this->option_A . "', '"
            . $this->option_B . "', '"
            . $this->option_C . "','"
            . $this->option_D . "','"
            . $this->option_E . "','"
            . $this->correct_answer . "')";

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

        $query = "SELECT * FROM `lesson_question_option` ORDER BY `question` ASC";
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
        $query = "UPDATE  `lesson_question_option` SET "
            . "`question`= '" . $this->question . "', "
            . "`option_A`= '" . $this->option_A . "', "
            . "`option_B`= '" . $this->option_B . "', "
            . "`option_C`= '" . $this->option_C . "', "
            . "`option_D`= '" . $this->option_D . "', "
            . "`option_E`= '" . $this->option_E . "', "
            . "`correct_answer`= '" . $this->correct_answer . "' "
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

        $query = 'DELETE FROM `lesson_question_option` WHERE id="' . $this->id . '"';

        $db = new Database();

        return $db->readQuery($query);
    }

    public function getOptionsByQuestionId($id)
    {

        $query = "SELECT * FROM `lesson_question_option` WHERE `question` = '" . $id . "'";

        $db = new Database();
        $result = mysqli_fetch_array($db->readQuery($query));
        return $result;
    }
}
