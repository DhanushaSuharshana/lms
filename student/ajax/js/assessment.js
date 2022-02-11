$(document).ready(function () {
    $('#create').click(function () {
        swal({
            title: "Would you like to start a Assesment now?.",
            text: "Time is starting, start the assessment paper..",
            type: "warning",
            cancelButtonText: "Cancel",
            showCancelButton: true,
            confirmButtonColor: "rgb(240, 169, 0)",
            confirmButtonText: "Start",

        }, function () {
            window.location = "assessment-paper.php";
        });
    });
    
    
});


