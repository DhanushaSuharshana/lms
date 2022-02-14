$(document).ready(function () {



//Update student details
    $("#update").click(function (event) {
        event.preventDefault();
//        $('#loading').show();
            var formData = new FormData($('#form-data')[0]);

            $.ajax({
                url: "ajax/post-and-get/complete-profile.php",
                type: "POST",
                data: formData,
                async: false,
                dataType: 'json',
                success: function (result) {
                    swal({
                        title: "Success!",
                        text: "Your data was saved successfully!.....",
                        type: 'success',
                        timer: 2000,
                        showConfirmButton: false
                    }, function () {
                        setTimeout(function () {
                            window.location.replace("profile.php");
                        }, 1500);
                    });
                },
                cache: false,
                contentType: false,
                processData: false
            });
        
    });




});

