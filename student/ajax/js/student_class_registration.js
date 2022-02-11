
$(document).ready(function () {

//add selected classes
    $('.card-body').on('click', '.select', function (event) {
        event.preventDefault();

        var class_id = $(this).attr("data-id");
        var stu_id = $(this).attr("stu_id");
        var lecture_id = $(this).attr("lecture_id");
        var sub_id = $(this).attr("sub_id");

        $.ajax({
            url: "ajax/post-and-get/student_class_registration.php",
            type: "POST",
            data: {
                class_id: class_id,
                stu_id: stu_id,
                lecture_id: lecture_id,
                option: 'create'
            },
            dataType: "JSON",
            success: function (result) {

                swal({
                    title: "Success!",
                    text: "Your are added class saved successfully!.....",
                    type: 'success',
                    timer: 2000,
                    showConfirmButton: false
                }, function () {
                    setTimeout(function () {
                        window.location.reload(); 
                    }, 1500);
                });
            },
        });
    });



    $('.card-body').on('click', '.remove', function (event) {
        event.preventDefault();

        var id = $(this).attr("data-id");
        var sub_id = $(this).attr("sub_id");
        
        swal({
            title: "Are you sure?",
            text: "Now you are leave this class Room..!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes, leave now.!",
            closeOnConfirm: false
        }, function () {

            $.ajax({
                url: "ajax/post-and-get/student_class_registration.php",
                type: "POST",
                data: {id: id, option: 'delete'},
                dataType: "JSON",
                success: function (jsonStr) {

                    if (jsonStr.status) {
                        swal({
                            title: "Leave the Class!",
                            text: "You are leave this class Room.",
                            type: 'success',
                            timer: 2000,
                            showConfirmButton: false
                        }, function () {
                            setTimeout(function () {
                                window.location.replace("select-class.php?id=" + sub_id);
                            }, 1500);
                        });


                    }
                }
            });
        });
    });


});

