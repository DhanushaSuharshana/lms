$(document).ready(function () {

    var form = $('#form').formValid({
        fields: {
            "full_name": {
                "required": true,
                "tests": [
                    {
                        "type": "null",
                        "message": "Please enter the first name..!"
                    }
                ]
            },
            "nic_number": {
                "required": true,
                "tests": [
                    {
                        "type": "null",
                        "message": "Please enter the nic number..!"
                    }
                ]
            },
            "gender": {
                "required": true,
                "tests": [
                    {
                        "type": "select",
                        "message": "Please select the gender..!"
                    }
                ]
            },
            "email": {
                "required": true,
                "tests": [
                    {
                        "type": "null",
                        "message": "Please enter the email..!"
                    },
                    {
                        "type": "email",
                        "message": "Please enter the valid email..!"
                    }
                ]
            },
            
            "student_id": {
                "required": true,
                "tests": [
                    {
                        "type": "null",
                        "message": "Please enter the Student ID..!"
                    }
                ]
            },
            "password": {
                "required": true,
                "tests": [
                    {
                        "type": "null",
                        "message": "Please enter your password..!"
                    }
                ]
            },
            "com_password": {
                "required": true,
                "tests": [
                    {
                        "type": "null",
                        "message": "Please enter your confirm password..!"
                    }
                ]
            }
        }
    });

    form.keypress(300);

    $('button[type="submit"]').click(function () {
        form.test();
        if (form.errors() == 0) {
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
                success: function (result) {
                    if (result.status == 'error') {
                        $('#message').text(result.message);
                    } else {
                        window.location.replace("index.php");
                    }
                }
            });
        }
        return false;
    });


});