
$(document).ready(function () {
    $('#category').change(function () {

        var category = $(this).val();

        $.ajax({
            url: "ajax/post-and-get/education_category.php",
            type: "POST",
            data: {
                category: category,
                action: 'GET_SUB_CATEGORY_BY_CATEGORY'
            },
            dataType: "JSON",
            success: function (jsonStr) {
               
                var html = '<option> -- Please Select a Sub Category -- </option>';
                $.each(jsonStr, function (i, data) {
                    html += '<option value="' + data.id + '">';
                    html += data.name;
                    html += '</option>';
                });

                $('#sub_category').empty();
                $('#sub_category').append(html);
                $('#sub_category_show').show();
            }
        });
    });
});

