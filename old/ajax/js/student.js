$(document).ready(function () {

//Change the profile pricute
    $("#change_profile").change(function (event) {
        event.preventDefault();
        $('.loading').show();
        $('.uploard_btn').hide();

        var formData = new FormData($('#form-data-profile')[0]);

        $.ajax({
            url: "ajax/post-and-get/student.php",
            type: "POST",
            data: formData,
            async: false,
            dataType: 'json',
            success: function (result) {

                $(".append_img").attr("src", "upload/student/profile/" + result.filename);
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

//Update Nic
    $("#update_nic").click(function (event) {
        event.preventDefault();

        $('.loading').show();
        $('.loading_2').hide();

        if (!$('#nic_front').val() || $('#nic_front').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter NIC front  side image..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#nic_back').val() || $('#nic_back').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter NIC back side image..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else {
            var formData = new FormData($('#form-data')[0]);

            $.ajax({
                url: "ajax/post-and-get/student.php",
                type: "POST",
                data: formData,
                async: false,
                dataType: 'json',
                success: function (result) {
                    $(".append_nic_front_img").attr("src", "upload/student/nic_card/front/thumb/" + result.filename);
                    $(".append_nic_back_img").attr("src", "upload/student/nic_card/back/thumb/" + result.filename_2);

                    $('.loading').hide();
                    $('.loading_2').show();
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
        }
    });


//Update student details
    $("#update").click(function (event) {
        event.preventDefault();
//        $('#loading').show();
        if (!$('#full_name').val() || $('#full_name').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter full name..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#email').val() || $('#email').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter email..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#nic_number').val() || $('#nic_number').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter short nic number..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#age').val() || $('#age').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter age..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#phone_number').val() || $('#phone_number').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter phone number..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#address').val() || $('#address').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter phone address..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else {
            var formData = new FormData($('#form-data')[0]);

            $.ajax({
                url: "ajax/post-and-get/student.php",
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
        }
    });


//change Password
    $("#reset_password").click(function (event) {
        event.preventDefault();

        if (!$('#old_passsword').val() || $('#old_passsword').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter old password..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#new_password').val() || $('#new_password').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter new password..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#com_password').val() || $('#com_password').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter confirm password..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else {
            var formData = new FormData($('#form-data')[0]);
            $.ajax({
                url: "ajax/post-and-get/student.php",
                type: "POST",
                data: formData,
                async: false,
                dataType: 'json',
                success: function (result) {

                    if (result.status == 'old_passw_error') {
                        swal({
                            title: "Error!",
                            text: "old password worng..!",
                            type: 'error',
                            timer: 1500,
                            showConfirmButton: false
                        });
                    } else if (result.status == 'not_match') {
                        swal({
                            title: "Error!",
                            text: "password does not match..!",
                            type: 'error',
                            timer: 1500,
                            showConfirmButton: false
                        });
                    } else if (result.status == 'error') {
                        swal({
                            title: "Error!",
                            text: "Something went worng..!",
                            type: 'error',
                            timer: 1500,
                            showConfirmButton: false
                        });
                    } else {
                        swal({
                            title: "Success!",
                            text: "Your data was saved successfully!.....",
                            type: 'success',
                            timer: 2000,
                            showConfirmButton: false
                        }, function () {
                            setTimeout(function () {
                                window.location.replace("log-out.php");
                            }, 1500);
                        });
                    }

                },
                cache: false,
                contentType: false,
                processData: false
            });
        }
    });

//Assesment
    $('#asseessment').click(function (event) {
        event.preventDefault();
        var formData = new FormData($("form#form-data")[0]);

        $.ajax({
            url: "ajax/post-and-get/student.php",
            type: 'POST',
            data: formData,
            async: false,
            cache: false,
            contentType: false,
            processData: false,
            dataType: "JSON",
            success: function (result) {
                if (result.status == 'beginner') {
                    swal({
                        title: "Opps...!",
                        text: "you have obtain less than 40% marks ...",
                        type: 'warning',
                        confirmButtonText: "try again.",
                        showCancelButton: false,
                    }, function () {
                        window.location = "assessment-paper.php";
                    });
                } else if (result.status == 'intermediate') {
                    swal({
                        title: "Congratulation.! ",
                        text: "you have obtain 60% marks ... ",
                        type: 'warning',
                        showCancelButton: false,

                    }, function () {
                        window.location = "index.php";
                    });
                } else if (result.status == 'advance') {
                    swal({
                        title: "Congratulation.! ",
                        text: "you have obtain 100% marks ..",
                        type: 'warning',
                        showCancelButton: false

                    }, function () {
                        window.location = "index.php";
                    });
                }
            }
        });

    });

});

