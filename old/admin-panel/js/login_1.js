$(document).ready(function () {

    var form = $('#form').formValid({
        fields: {
            "username": {
                "required": true,
                "tests": [
                    {
                        "type": "null",
                        "message": "Please enter the uesrname..!"
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
            var formData = new FormData($("form#form")[0]);
            
            alert(formData);

//            if (result.status == 'success') {
//                window.location.replace("index.php");
//            } else {
//                $('#message').text(result.message);
//            }


        }
        return false;
    });


});