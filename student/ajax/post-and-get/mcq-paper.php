<?php

include '../../../class/include.php';

//Create home work
$correct_answers = 0;
$incorrect_answers = 0;
$tot_questions = 0;
$final_arr = array();
$arr = array();

foreach ($_POST as $key => $qu) {
    if ($key != 'student' && $key != 'paper'&& $key != 'attempt') {
        $tot_questions++;
        $arr_answers = array();
        $option = LessonQuestionOption::getOptionsByQuestionId($key);

        $arr_answers['question'] = $key;
        $arr_answers['answer'] = $qu;


        $STUDENT_ANSWERS = new StudentAnswers(NULL);
        $STUDENT_ANSWERS->student = $_POST['student'];
        $STUDENT_ANSWERS->question = $key;
        $STUDENT_ANSWERS->attempt = $_POST['attempt'];
        $STUDENT_ANSWERS->answer = $qu;
        if ($option['correct_answer'] == $qu) {
            $correct_answers++;
            $STUDENT_ANSWERS->is_correct = 1;
            $arr_answers['is_correct'] = 1;
        } else {
            $incorrect_answers++;
            $STUDENT_ANSWERS->is_correct = 0;
            $arr_answers['is_correct'] = 0;
            $arr_answers['correct_answer'] = $option['correct_answer'];
        }
        array_push($arr, $arr_answers);
        $STUDENT_ANSWERS->create();
    }
}

$marks = $correct_answers / $tot_questions * 100;
if ($marks >= 75) {
    $grade = 'A';
} elseif ($marks >= 65) {
    $grade = 'B';
} elseif ($marks >= 55) {
    $grade = 'C';
} elseif ($marks >= 40) {
    $grade = 'S';
} else {
    $grade = 'F';
}

$MARKS = new StudentMarks(NULL);
$MARKS->student = $_POST['student'];
$MARKS->marks = $marks;
$MARKS->grade = $grade;
$MARKS->paper = $_POST['paper'];
$MARKS->attempt = $_POST['attempt'];
$MARKS->create();

$final_arr['answers'] = $arr;
$final_arr['marks'] = $marks;
$final_arr['grade'] = $grade;
$final_arr['correct_answers'] = $correct_answers;
$final_arr['incorrect_answers'] = $incorrect_answers;

echo json_encode($final_arr);
exit();
