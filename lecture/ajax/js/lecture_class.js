
$(document).ready(function () {

//Create lecture class
    $('#create').click(function (event) {
        event.preventDefault();


        if (!$('#class_type').val() || $('#class_type').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter class type..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#subject').val() || $('#subject').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter  subject name..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#start_date').val() || $('#start_date').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter start date..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#start_time').val() || $('#start_time').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter Start time..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#end_time').val() || $('#end_time').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter end time..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#lessons').val() || $('#lessons').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter number of class lessons..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        }  else {
            var formData = new FormData($('#form-data')[0]);
            $.ajax({
                url: "ajax/post-and-get/lecture_class.php",
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
                            window.location.replace("create-lecture-class.php");
                        }, 1500);
                    });


                },
                cache: false,
                contentType: false,
                processData: false
            });
        }
    });

//Update lecture class
    $('#update').click(function (event) {
        event.preventDefault();


        if (!$('#class_type').val() || $('#class_type').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter class type..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#subject').val() || $('#subject').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter  subject name..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#start_date').val() || $('#start_date').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter start date..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#start_time').val() || $('#start_time').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter Start time..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#end_time').val() || $('#end_time').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter duration..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else {
            var formData = new FormData($('#form-data')[0]);
            $.ajax({
                url: "ajax/post-and-get/lecture_class.php",
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
    $('#create-mcq').click(function (event) {
        event.preventDefault();
        

        if (!$('#title').val() || $('#title').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter title..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#pdf_file').val() || $('#pdf_file').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter attach file.!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else {
       
            var formData = new FormData($('#form-mcq')[0]);
            $.ajax({
                url: "ajax/post-and-get/lecture_class.php",
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
        
alert(111);
        if (!$('#question').val() || $('#question').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter question..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        }  else {
       
            var formData = new FormData($('#form-question')[0]);
            $.ajax({
                url: "ajax/post-and-get/lecture_class.php",
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
        } else {
       
            var formData = new FormData($('#form-tutorials')[0]);
            $.ajax({
                url: "ajax/post-and-get/lecture_class.php",
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

