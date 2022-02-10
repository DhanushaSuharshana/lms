$(document).ready(function () {



    $('button[type="submit"]').click(function () {

        if (document.getElementById("username").value == "admin"
                && document.getElementById("password").value == "admin123")
        {
            window.location.replace("dashboard.php");
        } else
        {
            $('#message').text("Invalid Username or Password..!");
        }


    });


});