$(document).ready(function () {
    var student = $('#student').val();
    var paper = $('#paper').val();
    $.ajax({
        url: "ajax/post-and-get/view-mcq-paper.php",
        type: "POST",
        data: {
            student,
            paper
        },
        dataType: 'json',
        success: function (result) {
            var correct_answer = 0;
            var incorrect_answer = 0;
            $.each(result, function (key, answer) {
                if (answer.is_correct == 1) {
                    correct_answer++;
                    $('#qu-' + answer.question + '-' + answer.answer).addClass('correct-li');
                    $('#input-' + answer.question + '-' + answer.answer).attr('checked', 'checked');
                } else {
                    incorrect_answer++;
                    $('#qu-' + answer.question + '-' + answer.correct_answer).addClass('correct-li');
                    $('#qu-' + answer.question + '-' + answer.answer).addClass('incorrect-li');
                    $('#input-' + answer.question + '-' + answer.answer).attr('checked', 'checked');
                }
            });
            $('#show-correct-answers').text(correct_answer);
            $('#show-incorrect-answers').text(incorrect_answer);
            $('.count-section').removeClass('hidden');

            // swal({
            //     title: "Success!",
            //     text: "Your data was saved successfully!.....",
            //     type: 'success',
            //     timer: 2000,
            //     showConfirmButton: false
            // }, function () {
            //     setTimeout(function () {
            //         location.reload();
            //     }, 1500);
            // });
        }
    });
});