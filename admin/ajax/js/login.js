$(document).ready(function () {

    var form = $('#form').formValid({
        fields: {
            "username": {
                "required": true,
                "tests": [
                    {
                        "type": "null",
                        "message": "Please enter the User Name..!"
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
            }
        }
    });

    form.keypress(300);

    $('button[type="submit"]').click(function () {
        form.test();

        if (form.errors() == 0) {
            var formData = new FormData($("#form")[0]);
            $.ajax({
                url: "ajax/php/login.php",
                type: 'POST',
                data: formData,
                async: false,
                cache: false,
                contentType: false,
                processData: false,
                dataType: "JSON",
                success: function (result) {

                    if (result.status == 'success') {
                        swal({
                            title: "success!",
                            text: "Your login has success..!!",
                            type: 'success',
                            timer: 2000,
                            showConfirmButton: false
                        });
                        window.setTimeout(function () {
                            window.location = 'index.php';
                        }, 2000);

                    } else if (result.status === 'error') {

                        swal({
                            title: "Error!",
                            text: "user name or password is wrong..!",
                            type: 'error',
                            timer: 2000,
                            showConfirmButton: false
                        });
                    }
                }
            });
        }
        return false;
    });


});