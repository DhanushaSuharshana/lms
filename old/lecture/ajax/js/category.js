
$(document).ready(function () {

    //category Change
    $('#category').change(function () {

        var category = $(this).val();

        $('#sub_category').empty();
        $('#subject').empty();
        $.ajax({
            url: "ajax/post-and-get/category.php",
            type: "POST",
            data: {
                category: category,
                action: 'GET_SUB_CATEGORY_BY_CATEGORY'
            },
            dataType: "JSON",
            success: function (jsonStr) {

                var html = '<option value="" "> -- Select sub category -- </option>';
                $.each(jsonStr, function (i, data) {
                    html += '<option value="' + data.id + '">';
                    html += data.name;
                    html += '</option>';
                });

                var html2 = '<option value="" "> -- Please Select sub category First-- </option>';
                $('#subject').empty();
                $('#sub_category').empty();
                $('#sub_category').append(html);
                $('#subject').append(html2);
            }
        });
    });

//Sub Category change    
    $('#sub_category').change(function () {

        var sub_category = $(this).val();

        $('#subject').empty();
        $.ajax({
            url: "ajax/post-and-get/category.php",
            type: "POST",
            data: {
                sub_category: sub_category,
                action: 'GET_SUBJECT_BY_SUB_CATEGORY'
            },
            dataType: "JSON",
            success: function (jsonStr) {

                var html = '<option value="" selected=""> -- Select subject -- </option>';

                $.each(jsonStr, function (i, data) {
                    html += '<option value="' + data.id + '">';
                    html += data.name;
                    html += '</option>';
                });

                $('#subject').empty();
                $('#subject').append(html);
                $('#sub_category_append').val(sub_category);
                $('.inputDisabled').removeAttr("disabled")
            }
        });
    });


//lectures add subjects
    $('#add-lecture-subject').click(function (event) {
        event.preventDefault();


        var formData = new FormData($('#form-data-2')[0]);
        $.ajax({
            url: "ajax/post-and-get/category.php",
            type: "POST",
            data: formData,
            async: false,
            dataType: 'json',
            success: function (result) {

                swal({
                    title: "Success!",
                    text: "Your data was saved successfully!.....",
                    type: 'success',
                    timer: 2000,
                    showConfirmButton: false
                }, function () {
                    setTimeout(function () {
                        window.location.reload();
                    }, 1500);
                });


            },
            cache: false,
            contentType: false,
            processData: false
        });

    });

});

