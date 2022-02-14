$(document).ready(function () {

//Update student details
    $("#update").click(function (event) {
        event.preventDefault();

        if (!$('#full_name').val() || $('#full_name').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter full name..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#email').val() || $('#email').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter email..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        }else if (!$('#phone_number').val() || $('#phone_number').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter phone number..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#address').val() || $('#address').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter phone address..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else {
            var formData = new FormData($('#form-data')[0]);

            $.ajax({
                url: "ajax/post-and-get/student.php",
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

