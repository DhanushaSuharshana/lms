$(document).ready(function() {
    var form = $("#form").formValid({
        fields: {
            reset_code: {
                required: true,
                tests: [{
                    type: "null",
                    message: "Please enter the Reset Code..!",
                }, ],
            },
            new_password: {
                required: true,
                tests: [{
                    type: "null",
                    message: "Please enter the new Password..!",
                }, ],
            },
            confirm_password: {
                required: true,
                tests: [{
                    type: "null",
                    message: "Please enter the Confirm Password..!",
                }, ],
            },
        },
    });

    form.keypress(300);

    $('button[type="submit"]').click(function(e) {
        e.preventDefault();
        form.test();
        if (form.errors() == 0) {
            var formData = new FormData($("form#form")[0]);
            window.swal({
                title: "Please wait...",
                text: "please wait your request processing..!",
                imageUrl: "assest/img/tenor.gif",
                showConfirmButton: false,
                allowOutsideClick: false,
            });
            $.ajax({
                url: "ajax/post-and-get/reset-password.php",
                type: "POST",
                data: formData,
                async: true,
                cache: false,
                contentType: false,
                processData: false,
                dataType: "JSON",
                success: function(result) {
                    if (result.status == "success") {
                        swal({
                                title: "Success!",
                                text: "password reset was successful!...",
                                type: "success",
                                timer: 2000,
                                showConfirmButton: false,
                            },
                            function() {
                                setTimeout(function() {
                                    window.location.replace("./");
                                }, 1500);
                            }
                        );
                    } else if (result.status == "email_error") {
                        swal({
                            title: "Error!",
                            text: "Invalid email address!...",
                            type: "error",
                            timer: 1500,
                            showConfirmButton: false,
                        });
                    } else if (result.status == "error") {
                        swal({
                            title: "Error!",
                            text: "Some Error!...",
                            type: "error",
                            timer: 1500,
                            showConfirmButton: false,
                        });
                    }
                },
            });
        }
        return false;
    });
});