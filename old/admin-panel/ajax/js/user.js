$(document).ready(function () {

//Change the profile pricute
    $("#change_profile").change(function (event) {
        event.preventDefault();
        $('.loading').show();
        $('.uploard_btn').hide();

        var formData = new FormData($('#form-data-profile')[0]);

        $.ajax({
            url: "ajax/post-and-get/user.php",
            type: "POST",
            data: formData,
            async: false,
            dataType: 'json',
            success: function (result) {

                $(".append_img").attr("src", "upload/user/profile/" + result.filename);
                swal({
                    title: "Success!",
                    text: "Your data was saved successfully!.....",
                    type: 'success',
                    timer: 2000,
                    showConfirmButton: false
                });
            },
            cache: false,
            contentType: false,
            processData: false
        });
        $('.loading').hide();
        $('.uploard_btn').show();

    });
});