
$(document).ready(function () {

    $('#create').click(function (event) {
        event.preventDefault();


        if (!$('#subject').val() || $('#subject').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter  subject name..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else {
            var formData = new FormData($('#form-data')[0]);

            $.ajax({
                url: "ajax/post-and-get/lecture_subject.php",
                type: "POST",
                data: formData,
                async: false,
                dataType: 'json',
                success: function (result) {
                    if (result.status == 'error') {
                        swal({
                            title: "Error!",
                            text: "You can't add same Subjects..!",
                            type: 'error',
                            timer: 1500,
                            showConfirmButton: false
                        });
                    } else {
                        swal({
                            title: "Success!",
                            text: "Your data was saved successfully!.....",
                            type: 'success',
                            timer: 2000,
                            showConfirmButton: false
                        }, function () {
                            setTimeout(function () {
                                window.location.replace("create-subjects.php");
                            }, 1500);
                        });
                    }
                },
                cache: false,
                contentType: false,
                processData: false
            });

        }
    });


    $('#update').click(function (event) {
        event.preventDefault();
        var formData = new FormData($('#form-data')[0]);

        $.ajax({
            url: "ajax/post-and-get/lecture_subject.php",
            type: "POST",
            data: formData,
            async: false,
            dataType: 'json',
            success: function (result) {

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
    });


});

