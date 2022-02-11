<?php

/**
 * Description of StudentAnswers
 *
 * @author W j K n``
 */
Class StudentAnswers
{

    public $id;
    public $student;
    public $question;
    public $attempt;
    public $answer;
    public $is_correct;

    public function __construct($id)
    {
        if ($id) {

            $query = "SELECT * FROM `student_answer` WHERE `id`=" . $id;

            $db = new Database();

            $result = mysqli_fetch_array($db->readQuery($query));

            $this->id = $result['id'];
            $this->student = $result['student'];
            $this->question = $result['question'];
            $this->attempt = $result['attempt'];
            $this->answer = $result['answer'];
            $this->is_correct = $result['is_correct'];

            return $this;
        }
    }

    public function create()
    {

        $query = "INSERT INTO `student_answer` (`student`,`question`,`attempt`, `answer`, `is_correct`) VALUES  ('"
            . $this->student . "', '"
            . $this->question . "', '"
            . $this->attempt . "', '"
            . $this->answer . "','"
            . $this->is_correct . "')";

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

        $query = "SELECT * FROM `student_answer` ORDER BY `student` ASC";
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
        $query = "UPDATE  `student_answer` SET "
            . "`student`= '" . $this->student . "', "
            . "`question`= '" . $this->question . "', "
            . "`answer`= '" . $this->answer . "', "
            . "`is_correct`= '" . $this->is_correct . "' "
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
        $query = 'DELETE FROM `student_answer` WHERE id="' . $this->id . '"';

        $db = new Database();

        return $db->readQuery($query);
    }

    public function getStudentAnswersByQuestionId($id, $question)
    {

        $query = "SELECT * FROM `student_answer` WHERE `student` = '" . $id . "' AND `question` = '" . $question . "' ORDER BY `id` DESC LIMIT 1";

        $db = new Database();
        $result = mysqli_fetch_array($db->readQuery($query));
        return $result;
    }
}
