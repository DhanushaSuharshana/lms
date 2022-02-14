$(document).ready(function () {

   
    $('input.students').each(function () {
        
       var student_id = $(this).val();
      
        $.ajax({
            url: "ajax/post-and-get/post.php",
            cache: false,
            dataType: "json",
            type: "POST",
            data: {
                student_id: student_id,
                option: 'GETPOST'
            },
            success: function (posts) {

                $.each(posts, function (key, post) {

                    $.ajax({
                        url: "ajax/post-and-get/post-photo.php",
                        cache: false,
                        dataType: "json",
                        type: "POST",
                        data: {
                            id: post.id,
                            option: 'GETPOSTPHOTOS'
                        },
                        success: function (result) {

                            $(function () {
                                $('#gallery' + post.id).imagesGrid({
                                    images: result.thumb,
                                    full_images: result.full
                                });
                            });
                        }
                    });
                });
            }
        });
    });
 
});

