$(document).ready(function () {

    $('.delete-mcq-paper').click(function () {
        var id = $(this).attr("data-id");

        swal({
            title: "Are you sure?",
            text: "You will not be able to recover this MCQ Paper!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes, delete it!",
            closeOnConfirm: false
        }, function () {

            $.ajax({
                url: "delete/ajax/lesson-mcq.php",
                type: "POST",
                data: {id: id, option: 'delete'},
                dataType: "JSON",
                success: function (jsonStr) {

                    if (jsonStr.status) {

                        swal({
                            title: "Deleted!",
                            text: "MCQ paper has been deleted.",
                            type: 'success',
                            timer: 2000,
                            showConfirmButton: false
                        });
                    window.location.reload();      
                       $('#row_' + id).remove();

                    }
                }
            });
        });
    });
});