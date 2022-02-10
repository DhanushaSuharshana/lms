$(document).ready(function () {
    $('.dataTable').on('click', '.delete-help-center', function () {

        var id = $(this).attr("data-id");

        swal({
            title: "Are you sure?",
            text: "You will not be able to recover this question!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes, delete it!",
            closeOnConfirm: false
        }, function () {

            $.ajax({
                url: "delete/ajax/help-center.php",
                type: "POST",
                data: {id: id, option: 'delete'},
                dataType: "JSON",
                success: function (jsonStr) {

                    if (jsonStr.status) {

                        swal({
                            title: "Deleted!",
                            text: "Question has been deleted.",
                            type: 'success',
                            timer: 2000,
                            showConfirmButton: false
                        });

                        $('#div' + id).remove();

                    }
                }
            });
        });
    });
});