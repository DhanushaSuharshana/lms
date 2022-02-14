$(document).ready(function() {

    var form = $('#form').formValid({
        fields: {
            "full_name": {
                "required": true,
                "tests": [{
                    "type": "null",
                    "message": "Please enter the first name..!"
                }]
            },

            "email": {
                "required": true,
                "tests": [{
                        "type": "null",
                        "message": "Please enter the email..!"
                    },
                    {
                        "type": "email",
                        "message": "Please enter the valid email..!"
                    }
                ]
            },

            "phone_number": {
                "required": true,
                "tests": [{
                    "type": "null",
                    "message": "Please enter the phone number..!"
                }]
            },
            "password": {
                "required": true,
                "tests": [{
                    "type": "null",
                    "message": "Please enter your password..!"
                }]
            },
            "com_password": {
                "required": true,
                "tests": [{
                    "type": "null",
                    "message": "Please enter your confirm password..!"
                }]
            }
        }
    });


    form.keypress(300);
    $('#next').click(function() {
        form.test();
        if (form.errors() == 0) {

            var formData = new FormData($("form#form")[0]);
            $.ajax({
                url: "ajax/post-and-get/registration_check.php",
                type: 'POST',
                data: formData,
                async: false,
                cache: false,
                contentType: false,
                processData: false,
                dataType: "JSON",
                success: function(result) {

                    if (result.status == 'error') {
                        $('#message').text(result.message);
                    } else {

                        var formData = new FormData($("form#form")[0]);

                        $.ajax({
                            url: "ajax/post-and-get/registration.php",
                            type: 'POST',
                            data: formData,
                            async: false,
                            cache: false,
                            contentType: false,
                            processData: false,
                            dataType: "JSON",
                            success: function(result) {
                                if (result.status == 'error') {
                                    $('#message').text(result.message);
                                } else {

                                    $.ajax({
                                        url: "ajax/post-and-get/mobile-verify.php",
                                        type: "POST",
                                        data: {
                                            id: result.id,
                                            action: "MOBILECODE"
                                        },
                                        dataType: "JSON",
                                        success: function(result) {

                                            if (result.status == 'success') {
                                                window.swal({
                                                    title: "Please wait...!",
                                                    text: "it may take few seconds...!",
                                                    imageUrl: "assets/images/tenor.gif",
                                                    showConfirmButton: false,
                                                    allowOutsideClick: false
                                                });
                                                setTimeout(function() {
                                                    window.location.href = "mobile-verify.php";
                                                }, 1000);
                                            } else {
                                                swal({
                                                    title: "Error!",
                                                    text: "Something Went Wrong",
                                                    type: 'error',
                                                    timer: 2000,
                                                    showConfirmButton: false
                                                });
                                            }
                                        }
                                    });

                                }
                            }
                        });
                    }
                }

            });
        }
        return false;

    });


});