$(document).ready(function () {
    //Create lecture Exam Papers
    $('#create-exam-paper').click(function (event) {
        event.preventDefault();

        if (!$('#title').val() || $('#title').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter title..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else {

            $('.box').jmspinner('large');
            $('.box').addClass('well');
            $('.box').css('z-index', '9999');


            var formData = new FormData($('#form-exam-paper')[0]);
            $.ajax({
                url: "ajax/post-and-get/exam-paper.php",
                type: "POST",
                data: formData,
                async: false,
                dataType: 'json',
                success: function (result) {

                    $('.box').jmspinner(false);
                    $('.box').removeClass('well');
                    $('.box').css('z-index', '-1111');

                    swal({
                        title: "Success!",
                        text: "Your data was saved successfully!.....",
                        type: 'success',
                        timer: 2000,
                        showConfirmButton: false
                    }, function () {
                        setTimeout(function () {
                            window.location.reload();
                        }, 1500);
                    });
                },
                cache: false,
                contentType: false,
                processData: false
            });
        }
    });
    //Edit lecture Exam Papers
    $('#edit-exam-paper').click(function (event) {
        event.preventDefault();

        if (!$('#title').val() || $('#title').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter title..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else {

            $('.box').jmspinner('large');
            $('.box').addClass('well');
            $('.box').css('z-index', '9999');


            var formData = new FormData($('#edit-form-exam-paper')[0]);
            $.ajax({
                url: "ajax/post-and-get/exam-paper.php",
                type: "POST",
                data: formData,
                async: false,
                dataType: 'json',
                success: function (result) {

                    $('.box').jmspinner(false);
                    $('.box').removeClass('well');
                    $('.box').css('z-index', '-1111');

                    swal({
                        title: "Success!",
                        text: "Your data was saved successfully!.....",
                        type: 'success',
                        timer: 2000,
                        showConfirmButton: false
                    }, function () {
                        setTimeout(function () {
                            window.location.reload();
                        }, 1500);
                    });
                },
                cache: false,
                contentType: false,
                processData: false
            });
        }
    });
    //Arrange All Exam Papers
    $('#arrange-exam-paper').click(function (event) {
        event.preventDefault();


        var formData = new FormData($('#arrange-form-exam-paper')[0]);
        $.ajax({
            url: "ajax/post-and-get/exam-paper.php",
            type: "POST",
            data: formData,
            async: false,
            dataType: 'json',
            success: function (result) {

                $('.box').jmspinner(false);
                $('.box').removeClass('well');
                $('.box').css('z-index', '-1111');

                swal({
                    title: "Success!",
                    text: "Your data was arranged successfully!.....",
                    type: 'success',
                    timer: 2000,
                    showConfirmButton: false
                }, function () {
                    setTimeout(function () {
                        window.location.reload();
                    }, 1500);
                });
            },
            cache: false,
            contentType: false,
            processData: false
        });
    });
})