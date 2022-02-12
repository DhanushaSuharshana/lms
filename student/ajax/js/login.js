$(document).ready(function() {

    var form = $('#form').formValid({
        fields: {
            "student_id": {
                "required": true,
                "tests": [{
                    "type": "null",
                    "message": "Please enter the Student ID..!"
                }]
            },
            "password": {
                "required": true,
                "tests": [{
                    "type": "null",
                    "message": "Please enter your password..!"
                }]
            }
        }
    });

    form.keypress(300);

    $('button[type="submit"]').click(function() {
        form.test();
        if (form.errors() == 0) {
            var formData = new FormData($("form#form")[0]);
            $.ajax({
                url: "ajax/post-and-get/login.php",
                type: 'POST',
                data: formData,
                async: false,
                cache: false,
                contentType: false,
                processData: false,
                dataType: "JSON",
                success: function(result) {
                    if (result.status == 'success') {
                        if (result.url == '') {
                            window.location.replace("view-subjects.php");
                        } else {
                            // window.location.replace(result.url);
                            window.location.replace("view-subjects.php");
                        }
                    } else {
                        $('#message').text(result.message);
                    }
                }
            });
        }
        return false;
    });


});