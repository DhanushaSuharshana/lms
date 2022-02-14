$(document).ready(function () {

    //create subject details
    $("#create").click(function (event) {
        event.preventDefault();
        tinymce.triggerSave();

        if (!$('#title').val() || $('#title').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter your title..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });

        } else if (!$('#to_whom').val() || $('#to_whom').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please select to whom..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });

        } else {
            var formData = new FormData($('#form-data')[0]);

            $.ajax({
                url: "ajax/post-and-get/help-center.php",
                type: "POST",
                data: formData,
                async: false,
                dataType: 'json',
                success: function (result) {
                    if (result.message == 'success') {
                        swal({
                            title: "Success!",
                            text: "Your data was saved successfully!.....",
                            type: 'success',
                            timer: 2000,
                            showConfirmButton: false
                        }, function () {
                            setTimeout(function () {
                                window.location.reload();
                                ;
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

    //update subject details
    $("#update").click(function (event) {
        event.preventDefault();
        tinymce.triggerSave();

        if (!$('#title').val() || $('#title').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter  your title..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#to_whom').val() || $('#to_whom').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please select to whom..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });

        } else {
            var formData = new FormData($('#form-data')[0]);

            $.ajax({
                url: "ajax/post-and-get/help-center.php",
                type: "POST",
                data: formData,
                async: false,
                dataType: 'json',
                success: function (result) {
                    if (result.message == 'success') {
                        swal({
                            title: "Success!",
                            text: "Your data was saved successfully!.....",
                            type: 'success',
                            timer: 2000,
                            showConfirmButton: false
                        }, function () {
                            setTimeout(function () {
                                window.location.reload();
                                ;
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
});

