$(document).ready(function () {


    $("#verify").click(function (event) {
       
        if (!$('#code').val() || $('#code').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter verification code..!",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });
        } else {
            var id = $("#student").val();
            var code = $("#code").val();
            $.ajax({
                url: "ajax/post-and-get/mobile-verify.php",
                type: "POST",
                data: {
                    id: id, 
                    code: code, 
                    action: "MOBILEVERYFY"
                },
                dataType: "JSON",
                success: function (result) {
                    if (result.status == 'success') {
                        window.swal({
                            title: "Please wait...!",
                            text: "it may take few seconds...!",
                            imageUrl: "assets/images/tenor.gif",
                            showConfirmButton: false,
                            allowOutsideClick: false
                        });
                        setTimeout(function () {
                            window.location.replace("complete-profile.php?message=19");
                        }, 1500);
                    } else {
                        swal({
                            title: "Error!",
                            text: "Please enter correct verification code..!",
                            type: 'error',
                            timer: 2000,
                            showConfirmButton: false
                        });
                    }
                }
            });
        }

    });

    $("#send_phone_verification").click(function (event) {
        var id = $("#student").val();
        $.ajax({
            url: "ajax/post-and-get/mobile-verify.php",
            type: "POST",
            data: {
                id: id, 
                action: "MOBILECODE"
            },
            dataType: "JSON",
            success: function (result) {
                if (result.status == 'success') {
                    window.swal({
                        title: "Please wait...!",
                        text: "it may take few seconds...!",
                        imageUrl: "assets/images/tenor.gif",
                        showConfirmButton: false,
                        allowOutsideClick: false
                    });
                    setTimeout(function () {
                        window.location.href = "mobile-verify.php";
                    }, 1000);
                } else {
                    swal({
                        title: "Error!",
                        text: "Something Went Wrong",
                        type: 'error',
                        timer: 2000,
                        showConfirmButton: false
                    });
                }
            }
        });
    });

    var timer2 = "02:01";
    var interval = setInterval(function () {
        var timer = timer2.split(':');
        //by parsing integer, I avoid all extra string processing
        var minutes = parseInt(timer[0], 10);
        var seconds = parseInt(timer[1], 10);
        --seconds;
        minutes = (seconds < 0) ? --minutes : minutes;
        seconds = (seconds < 0) ? 59 : seconds;
        seconds = (seconds < 10) ? '0' + seconds : seconds;
        //minutes = (minutes < 10) ?  minutes : minutes;
        $('#countdown_p').html("(" + minutes + ':' + seconds + ")");
        if (minutes < 0)
            clearInterval(interval);
        //check if both minutes and seconds are 0
        if ((seconds <= 0) && (minutes <= 0))
            clearInterval(interval);
        timer2 = minutes + ':' + seconds;
    }, 1000);
    setTimeout(
            function ()
            {

                $('#send_phone_verification').prop("disabled", false);
                $('#countdown_p').hide();
            }, 121000);

});