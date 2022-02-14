$(document).ready(function () {

//Change the profile pricute
    $("#change_profile").change(function (event) {
        event.preventDefault();

        $('.uploard_btn').hide();

        $('.box').jmspinner('large');
        $('.box').addClass('well');
        $('.box').css('z-index', '9999');

        var formData = new FormData($('#form-data-profile')[0]);

        $.ajax({
            url: "ajax/post-and-get/student.php",
            type: "POST",
            data: formData,
            async: false,
            dataType: 'json',
            success: function (result) {

                $(".append_img").attr("src", "../upload/student/profile/" + result.filename);
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
        $('.box').jmspinner(false);
        $('.box').removeClass('well');
        $('.box').css('z-index', '-1111');

        $('.uploard_btn').show();

    });


//Update Subject
    $("#update_subjects").click(function (event) {
        event.preventDefault();

        if (!$('#subject').val() || $('#subject').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please select your Subject..!",
                type: 'error',
                timer: 3000,
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
                    if (result.status == 'error') {
                        swal({
                            title: "Error!",
                            text: "You can't add same Subjects..!",
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
                                window.location.replace("complete-profile.php");
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

