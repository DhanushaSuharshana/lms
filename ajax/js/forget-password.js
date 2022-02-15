$(document).ready(function() {
    var form = $("#form").formValid({
        fields: {
            "phone_number": {
                "required": true,
                "tests": [{
                    "type": "null",
                    "message": "Please enter the mobile number..!"
                }]
            },
        },
    });

    form.keypress(300);

    $('button[type="submit"]').click(function() {
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
                url: "ajax/post-and-get/forget-password.php",
                type: "POST",
                data: formData,
                async: true,
                cache: false,
                contentType: false,
                processData: false,
                dataType: "JSON",
                success: function(result) {
                    if (result.status == "success") {
                        setTimeout(function() {
                            window.location.replace("reset-pw.php");
                        }, 500);
                    } else if (result.status == "mobile_error") {
                        swal({
                            title: "Error!",
                            text: "Invalid mobile number!...",
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