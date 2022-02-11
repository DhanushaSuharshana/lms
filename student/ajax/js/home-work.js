$(document).ready(function () {


//Update student details
    $("#create").click(function (event) {
        event.preventDefault();

        if (!$('#image').val() || $('#image').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please Attach your home work image..!",
                type: 'error',
                timer: 3000,
                showConfirmButton: false
            });
        } else {

            $('.box').jmspinner('large');
            $('.box').addClass('well');
            $('.box').css('z-index', '9999');

            var formData = new FormData($('#form-data')[0]);

            $.ajax({
                url: "ajax/post-and-get/home-work.php",
                type: "POST",
                data: formData,
                async: false,
                dataType: 'json',
                success: function (result) {
                    $('.box').jmspinner(false);
                    $('.box').removeClass('well');
                    $('.box').css('z-index', '-1111');

                    swal({
                        title: "Success!",
                        text: "Your data was saved successfully!.....",
                        type: 'success',
                        timer: 2000,
                        showConfirmButton: false
                    }, function () {
                        setTimeout(function () {
                            window.location.reload();
                        }, 1500);
                    });
                },
                cache: false,
                contentType: false,
                processData: false
            });
        }
    });

})


