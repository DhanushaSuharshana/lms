
$(document).ready(function () {
 
    setInterval(function () {
        update_chat_history_data();
    }, 5000);

    function update_chat_history_data() {
        $('.chat_history').each(function () {
         
            var student_id = $(this).data('studentid');
            var video_id = $(this).attr('video_id');
            fetch_user_chat_history(student_id, video_id);
        });
    }

    function fetch_user_chat_history(student_id,video_id) {
        
        $.ajax({
            url: "ajax/post-and-get/chat.php",
            method: "POST",
            data: {
                action: 'GETALL',
                student_id: student_id,
                video_id: video_id, 
            },
            success: function (data) {
                 
                $('#chat_history_' + video_id).html(data);
            }
        })
    }

});


$(document).on('click', '.send_chat', function () {

    var student_id = $(this).attr('student_id');
    var video_id = $(this).attr('video_id');
    var chat_message = $('#chat_message_' + video_id).val();

    $.ajax({
        url: "ajax/post-and-get/chat.php",
        method: "POST",
        data: {
            action: 'CREATE',
            student_id: student_id,
            video_id: video_id,
            chat_message: chat_message
        },
        success: function (data)
        {
            $('#chat_message_' + video_id).val('');
            $('#chat_history_' + video_id).html(data);
        }
    })
});