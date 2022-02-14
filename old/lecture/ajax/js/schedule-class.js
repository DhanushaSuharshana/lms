
$(document).ready(function () {

    //Create lecture Video
    $('#create-video').click(function (event) {
        event.preventDefault();

        if (!$('#url').val() || $('#url').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter video url..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else {

            $('.box').jmspinner('large');
            $('.box').addClass('well');
            $('.box').css('z-index', '9999');


            var formData = new FormData($('#form-video')[0]);
            $.ajax({
                url: "ajax/post-and-get/schedule-class.php",
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

    //Create lecture MCq Papers
    $('#create-mcq-paper').click(function (event) {
        event.preventDefault();

        if (!$('#title').val() || $('#title').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter title..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });

        // } else if (!$('#date').val() || $('#date').val().length === 0) {
        //     swal({
        //         title: "Error!",
        //         text: "Please select the class schedule day.!",
        //         type: 'error',
        //         timer: 1500,
        //         showConfirmButton: false
        //     });
        } else {

            $('.box').jmspinner('large');
            $('.box').addClass('well');
            $('.box').css('z-index', '9999');


            var formData = new FormData($('#form-mcq')[0]);
            $.ajax({
                url: "ajax/post-and-get/schedule-class.php",
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

    //Edit lecture MCq Papers
    $('#edit-mcq-paper').click(function (event) {
        event.preventDefault();

        if (!$('#title').val() || $('#title').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter title..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });

        // } else if (!$('#date').val() || $('#date').val().length === 0) {
        //     swal({
        //         title: "Error!",
        //         text: "Please select the class schedule day.!",
        //         type: 'error',
        //         timer: 1500,
        //         showConfirmButton: false
        //     });
        } else {

            $('.box').jmspinner('large');
            $('.box').addClass('well');
            $('.box').css('z-index', '9999');


            var formData = new FormData($('#edit-form-paper')[0]);
            $.ajax({
                url: "ajax/post-and-get/schedule-class.php",
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

    //Create lecture MCq Papers
    $('#create-question').click(function (event) {
        event.preventDefault();

        if (!$('#option-a').val() || $('#option-a').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter option 01.!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#option-b').val() || $('#option-b').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter option 02.!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#option-c').val() || $('#option-c').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter option 03.!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#correct-answer').val() || $('#correct-answer').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please select correct answer.!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else {

            $('.box').jmspinner('large');
            $('.box').addClass('well');
            $('.box').css('z-index', '9999');


            var formData = new FormData($('#form-question')[0]);
            $.ajax({
                url: "ajax/post-and-get/schedule-class.php",
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

    //Edit lecture MCq Papers
    $('#edit-question').click(function (event) {

        event.preventDefault();

        if (!$('#option-a').val() || $('#option-a').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter option 01.!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#option-b').val() || $('#option-b').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter option 02.!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#option-c').val() || $('#option-c').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter option 03.!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#correct-answer').val() || $('#correct-answer').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please select correct answer.!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else {

            $('.box').jmspinner('large');
            $('.box').addClass('well');
            $('.box').css('z-index', '9999');

            var formData = new FormData($('#edit-form-question')[0]);

            $.ajax({
                url: "ajax/post-and-get/schedule-class.php",
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

    //Create lecture Tutorials
    $('#create-tutorial').click(function (event) {
        event.preventDefault();


        if (!$('#title_1').val() || $('#title_1').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter title..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#pdf_file_1').val() || $('#pdf_file_1').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter attach file.!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
            //        } else if (!$('#date_1').val() || $('#date_1').val().length === 0) {
            //            swal({
            //                title: "Error!",
            //                text: "Please select the class schedule day.!",
            //                type: 'error',
            //                timer: 1500,
            //                showConfirmButton: false
            //            });
        } else {

            $('.box').jmspinner('large');
            $('.box').addClass('well');
            $('.box').css('z-index', '9999');

            var formData = new FormData($('#form-tutorials')[0]);
            $.ajax({
                url: "ajax/post-and-get/schedule-class.php",
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

    //Create lecture Assessment
    $('#create-assessment').click(function (event) {
        event.preventDefault();


        if (!$('#title_2').val() || $('#title_2').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter title..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#pdf_file_2').val() || $('#pdf_file_2').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter attach file.!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });

            //        } else if (!$('#date_2').val() || $('#date_2').val().length === 0) {
            //            swal({
            //                title: "Error!",
            //                text: "Please select the class schedule day.!",
            //                type: 'error',
            //                timer: 1500,
            //                showConfirmButton: false
            //            });

        } else {

            $('.box').jmspinner('large');
            $('.box').addClass('well');
            $('.box').css('z-index', '9999');

            var formData = new FormData($('#form-assessment')[0]);
            $.ajax({
                url: "ajax/post-and-get/schedule-class.php",
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

    //home Work 
    $('#create-home-work').click(function (event) {
        event.preventDefault();


        if (!$('#title_3').val() || $('#title_3').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter title..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#pdf_file_3').val() || $('#pdf_file_3').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter attach file.!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });

            //        } else if (!$('#date_2').val() || $('#date_2').val().length === 0) {
            //            swal({
            //                title: "Error!",
            //                text: "Please select the class schedule day.!",
            //                type: 'error',
            //                timer: 1500,
            //                showConfirmButton: false
            //            });

        } else {

            $('.box').jmspinner('large');
            $('.box').addClass('well');
            $('.box').css('z-index', '9999');

            var formData = new FormData($('#form-home-work')[0]);
            $.ajax({
                url: "ajax/post-and-get/schedule-class.php",
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

});

