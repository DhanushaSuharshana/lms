$(document).ready(function () {

    $('#pay').click(function (e) {
        e.preventDefault();

        var formData = new FormData($('#form-data')[0]);

        $.ajax({
            url: "ajax/post-and-get/payment.php",
            type: "POST",
            data: formData,
            async: false,
            dataType: 'json',
            success: function (result) {
                if (result.status == 'success') {
                    $("#form-data").submit();
                } else {
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
                }

            },
            cache: false,
            contentType: false,
            processData: false
        });



    });

    $('#modules').change(function () {
        var modules = $('#modules').val();
        var class_free = $('#class_free').val();
        var price = modules * class_free;
        
        $('#amount').empty();
        $('#amount').val(price);
    });
});