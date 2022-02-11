$(document).ready(function () {
    $("#submit-mcq-paper").click(function (e) {
        e.preventDefault();
        var attempt = $('#attempt').val();
        var formData = new FormData($('#form-mcq')[0]);

        $.ajax({
            url: "ajax/post-and-get/mcq-paper.php",
            type: "POST",
            data: formData,
            async: false,
            dataType: 'json',
            success: function (result) {

                swal({
                    title: "Success!",
                    text: "Your answers was saved successfully!.....",
                    type: 'success',
                    timer: 2000,
                    showConfirmButton: false
               
                });

                if (attempt == 3) {
                    $.each(result['answers'], function (key, answer) {
                        $('#submit-mcq-paper').attr('disabled', 'true');
                        if (answer.is_correct == 1) {
                            $('#qu-' + answer.question + '-' + answer.answer).addClass('correct-li');
                        } else {
                            $('#qu-' + answer.question + '-' + answer.correct_answer).addClass('correct-li');
                            $('#qu-' + answer.question + '-' + answer.answer).addClass('incorrect-li');
                        }
                    });
                } else {
                    attempt++;
                }

                $('input[type=radio').removeAttr('checked');
                $('#attempt').val(attempt);
                $('.attempt-span').html(attempt);
                $('#show-correct-answers').text(result['correct_answers']);
                $('#show-incorrect-answers').text(result['incorrect_answers']);
                $('#show-marks').text(result['marks'] + '%');
                $('#show-grade').text(result['grade']);
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
            },
            cache: false,
            contentType: false,
            processData: false
        });
    })
})                                                                    