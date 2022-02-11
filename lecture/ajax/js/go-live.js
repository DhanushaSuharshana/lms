$(document).ready(function () {
    $("#go-live").click(function () {
        var class_id = $('#class_id').val();
        var lecture_id = $('#lecture_id').val();
        function makeid(length) {
            var result = '';
            var characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
            var charactersLength = characters.length;
            for (var i = 0; i < length; i++) {
                result += characters.charAt(Math.floor(Math.random() * charactersLength));
            }
            return result;
        }

        var random_id = makeid(15);
        const options = {
            parentNode: document.querySelector('#meeting'),
            roomName: random_id,
            width: 1150,
            height: 530,
        }

        $.ajax({
            url: "ajax/post-and-get/add-live-video.php",
            type: "POST",
            data: {
                class_id: class_id,
                lecture_id: lecture_id,
                roomName: random_id,
                action: 'ADD_LIVE_VIDEO'
            },
            dataType: "JSON",
            success: function (jsonStr) {
                meetAPI = new JitsiMeetExternalAPI("meet.jit.si", options);
                

                // $("#go-live-modal").modal("show");
                
            }
        });

    })
})