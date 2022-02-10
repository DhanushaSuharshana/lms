$(document).ready(function () {

//create subject details
    $("#create").click(function (event) {
        event.preventDefault();

        if (!$('#name').val() || $('#name').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter  subject name..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#image_name').val() || $('#image_name').val().length === 0) {

            swal({
                title: "Error!",
                text: "Please enter  image..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else {
            var formData = new FormData($('#form-data')[0]);

            $.ajax({
                url: "ajax/post-and-get/education-category.php",
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

        if (!$('#name').val() || $('#name').val().length === 0) {
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
                url: "ajax/post-and-get/education-category.php",
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

