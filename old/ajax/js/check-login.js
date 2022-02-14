
///Check acount active or not
window.onload = function () {

    var student_id = $('#student_id').val();

    $.ajax({
        url: "ajax/post-and-get/check-login.php",
        type: "POST",
        data: {
            action: 'CHECKLOGIN',
            student_id: student_id
        },
        dataType: "JSON",
        success: function (result) {
         
            if (result.status == 'success') {              
                $('#message').text(result.message);
            }else{
             $('#message').hide();
            }
        }
    });
};




