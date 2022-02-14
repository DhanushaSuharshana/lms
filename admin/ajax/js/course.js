$(document).ready(function () {

    //Create  
    $("#create").click(function (event) {
        event.preventDefault();

        if (!$('#title').val() || $('#title').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter title..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#image_name').val() || $('#image_name').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter Image name..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else {
            $('.someBlock').preloader();
            var formData = new FormData($('#form-data')[0]);
            $.ajax({
                url: "ajax/php/course.php",
                type: "POST",
                data: formData,
                async: false,
                dataType: 'json',
                success: function (result) {
                    $('.someBlock').preloader('remove');
                    swal({
                        title: "Success!",
                        text: "Your data was saved successfully!.....!",
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



    //Update  
    $(".edit-data").click(function (event) {
        event.preventDefault();
        var id = $(this).attr("dataId");
        if (!$('.title').val() || $('.title').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter title..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('.image_name').attr('value') || $('.image_name').attr('value').length === 0) {
            swal({
                title: "Error!",
                text: "Please enter  image..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else {
            $('.someBlock').preloader();
            var formData = new FormData($('#form-data-' + id)[0]);
            formData.append("update", "TRUE");
            formData.append("id", id);
            $.ajax({
                url: "ajax/php/course.php",
                type: "POST",
                data: formData,
                async: false,
                dataType: 'json',
                success: function (result) {
                    $('.someBlock').preloader('remove');
                    swal({
                        title: "Success!",
                        text: "Your changes saved successfully!...",
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

    //-------- Start arrange ---------
    $('#arrange').click(function (news) {
        news.preventDefault();
        //start preloarder
        $('.someBlock').preloader();
        //grab all form data  
        var formData = new FormData($('#form-data')[0]); //grab all form data  
        formData.append("arrange", "TRUE");
        $.ajax({
            url: "ajax/php/course.php",
            type: 'POST',
            data: formData,
            async: false,
            cache: false,
            contentType: false,
            processData: false,
            dataType: 'json',
            success: function (result) {
                //remove preloarder 
                $('.someBlock').preloader('remove');
                swal({
                    title: "success!",
                    text: "Your data arrange successfully !",
                    type: 'success',
                    timer: 2000,
                    showConfirmButton: false
                });
            }
        });
    });
    //-------- End arrange ---------
    //------------------------------
});