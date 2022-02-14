
$(document).ready(function () {
    $('#district').change(function () {
    
        var disID = $(this).val();
       
        $('#city-bar').empty();
        $.ajax({
            url: "ajax/post-and-get/city.php",
            type: "POST",
            data: {
                district: disID,
                action: 'GETCITYSBYDISTRICT'
            },
            dataType: "JSON",
            success: function (jsonStr) {

                var html = '<option value="" style="padding: 0px 12px 0px 12px"> - Select your City - </option>';
                $.each(jsonStr, function (i, data) {
                    html += '<option value="' + data.id + '">';
                    html += data.name;
                    html += '</option>';
                });

                $('#city-bar').empty();
                $('#city-bar').append(html);
            }
        });
    });
});

