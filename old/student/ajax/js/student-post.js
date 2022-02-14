
$(document).ready(function () {

//Create Post
    $('#upload_first_image').change(function () {

        $('.flipScrollableArea').removeClass('hidden');
        $('._uploadloaderbox').css('display', 'inline-block');

        var left = $('._uploadouterbox').css('left');
        var newleft = parseInt(left) + 105;
        $('._uploadouterbox').css('left', newleft + 'px');

        $('.loading').show();
        $('.loading_disable').hide();


        var fi = document.getElementById('upload_first_image'); // GET THE FILE INPUT.

        if (fi.files.length > 0) {

            for (var i = 0; i <= fi.files.length - 1; i++) {
                var fsize = fi.files.item(i).size;      // THE SIZE OF THE FILE.
                if (Math.round((fsize / 1024)) > 10000) {
                    swal({
                        title: "Error!",
                        text: "Image is too large and please upload a image size less than 10MB",
                        type: 'error',
                        timer: 2000,
                        showConfirmButton: false
                    });
                    return false;
                }
            }
        }
        var formData = new FormData($('#post-form')[0]);

        $.ajax({
            url: "ajax/post-and-get/student-post.php",
            type: "POST",
            data: formData,
            async: false,
            dataType: 'json',
            success: function (mess) {

                var arr = mess.filename.split('.');

                var html = '';
                html += '<div class="_uploadedimagesbox" role="presentation" id="col_' + arr[0] + '">';
                html += '<div data-testid="media-attachment-photo">';
                html += '<span>';
                html += '<div class="_uploadedimages" style="width: 100px; height: 100px;margin:5px;" id="js_3mg" aria-controls="js_3mh" aria-haspopup="true">';
                html += '<img alt="Cute-baby-girl-pics-for-facebook-profile-4-1024x640.jpg" class="img" src="upload/post/thumb2/' + mess.filename + '" width="100" height="100">';
                html += '<input type="hidden" class="post-all-images" name="post-all-images[]" value="' + mess.filename + '"/>';
                html += '<i class="img-post-delete _buttons _btn _removebtn _5upp _42ft fa fa-times" title="Remove Photo" id="' + arr[0] + '"></i>';
                html += '</div>';
                html += '</span>';
                html += '</div>';
                html += '</div>';

                $('.flipScrollableArea').removeClass('hidden');
                $('._uploadloaderbox').css('display', 'none');
                $('.flipScrollableAreaContent1').prepend(html);



                $('#upload_first_image').val('');
                $('.loading').hide();
                $('.loading_disable').show();

                var left1 = $('._uploadloaderbox').css('left');
                var newleft1 = parseInt(left1) + 105;
                $('._uploadloaderbox').css('left', newleft1 + 'px');
                $('.share-post').removeAttr('disabled');
//             } 
            },
            cache: false,
            contentType: false,
            processData: false,

        });

//        }, 2000);

    });

//Delete image for edit
    $('.img-post-delete').click(function () {

        var id = $(this).attr("data-id");

        swal({
            title: "Are you sure?",
            text: "You will not be able to recover this imaginary file!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes, delete it!",
            closeOnConfirm: false
        }, function () {
            $.ajax({
                url: "ajax/post-and-get/student-post.php",
                type: "POST",
                data: {
                    id: id,
                    option: 'DELETEPHOTO'
                },
                dataType: "JSON",
                success: function (jsonStr) {
                    if (jsonStr.status) {

                        swal({
                            title: "Deleted!",
                            text: "Post has been deleted.",
                            type: 'success',
                            timer: 2000,
                            showConfirmButton: false
                        });
//                        $('.warningModalAlert_2').modal('hide');
                        $('.del').css('display', 'none');
                        $('.div' + id).remove();

                    }
                }
            });
        });
    });

//post delete
    $('.post-delete').click(function () {

        var id = $(this).attr("data-id");

        swal({
            title: "Are you sure?",
            text: "You will not be able to recover this imaginary file!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes, delete it!",
            closeOnConfirm: false
        }, function () {
            $.ajax({
                url: "ajax/post-and-get/student-post.php",
                type: "POST",
                data: {
                    id: id,
                    option: 'DELETEPOST'
                },
                dataType: "JSON",
                success: function (jsonStr) {
                    if (jsonStr.status) {

                        swal({
                            title: "Deleted!",
                            text: "Post has been deleted.",
                            type: 'success',
                            timer: 2000,
                            showConfirmButton: false
                        });

                        $('#div_r' + id).remove();
                    }
                }
            });
        });
    });

//Update image section
    $('.upload_first_image_edit').change(function () {
        var id = $(this).attr("data-id");
        $('.flipScrollableArea_2').removeClass('hidden');
        $('._uploadloaderbox_edit').css('display', 'inline-block');
        $('.loading_2').css('display', 'block')
        $('.loading_disable').hide();

        var formData = new FormData($('#edit-post-form' + id)[0]);

        $.ajax({
            url: "ajax/post-and-get/student-post.php",
            type: "POST",
            data: formData,
            async: false,
            dataType: "JSON",
            success: function (mess) {

                var arr = mess.filename.split('.');

                var html = '';
                html += '<div class="_uploadedimagesbox" role="presentation" class="col_' + arr[0] + '">';
                html += '<div data-testid="media-attachment-photo">';
                html += '<span>';
                html += '<div class="_uploadedimages" style="width: 100px; height: 100px;margin:5px;"   aria-controls="js_3mh" aria-haspopup="true">';
                html += '<img alt="Cute-baby-girl-pics-for-facebook-profile-4-1024x640.jpg" class="img" src="upload/post/thumb2/' + mess.filename + '" width="100" height="100">';
                html += '<input type="hidden" class="post-all-images" name="post-all-images[]" value="' + mess.filename + '"/>';
                html += '</span>';
                html += '</div>';
                html += '</div>';
                html += '</div>';

                $('.flipScrollableArea_edit').removeClass('hidden');
                $('._uploadouterbox_edit').css('display', 'none');
                $('.flipScrollableAreaContent' + id).prepend(html);

                $('.upload_first_image_edit').val('');
                $('.loading_2').css('display', 'none');
                $ 
                $('.share-post').removeAttr('disabled');
                $('.loading_disable').show();
//             } 
            },
            cache: false,
            contentType: false,
            processData: false,

        });

//        }, 2000);

    });

//Update Post


    function loader() {

        "use strict";
        var element = $('<div class="loader"></div>').css({
            width: 100,
            height: 100,
            border: '0px'
        }).appendTo('._uploadloaderbox');
        element.canvasLoader({
            color: '#ff0000'
        });
        element.canvasLoader(false);
        element.canvasLoader(true);
//    $(element).trigger('stop.canvasLoader');
//    element.canvasLoader.options.color = '#008000';
        $(element).trigger('start.canvasLoader');
        $.fn.canvasLoader.options.color = '#0000ff';
        var version = $.fn.canvasLoader.version;
    }

    function stoploader() {

        "use strict";
        var element = $('<div class="loader"></div>').css({
            width: 100,
            height: 100,
            border: '0px'
        }).appendTo('._uploadloaderbox');
        element.canvasLoader({
            color: '#ff0000'
        });
        element.canvasLoader(false);
        element.canvasLoader(true);
        $(element).trigger('stop.canvasLoader');
        element.canvasLoader.options.color = '#008000';
//    $(element).trigger('start.canvasLoader');
//    $.fn.canvasLoader.options.color = '#0000ff';
        var version = $.fn.canvasLoader.version;
    }
    ;
});