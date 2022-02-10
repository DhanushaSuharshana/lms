$(document).ready(function () {


    //all adds
    filter_data();

    function filter_data() {

        //load
        $('.filter_data').html('');

        var city = $('#city-bar').val();
        var subject = $('#subject').val();
        var district = $('#district').val();
        var pagelimit = $('#pagelimit').val();
        var setlimit = $('#setlimit').val();
      
        $.ajax({
            url: "ajax/post-and-get/filter.php",
            type: "POST",
            data: {
                city: city,
                district: district,
                subject: subject,
                pagelimit: pagelimit,
                setlimit: setlimit,
                action: 'GET_FILTER_ADDS'
            },
            success: function (data) {

                $('.filter_data').append(data);



            }
        });
    }


    //common change
    $('#search').click(function () {
        filter_data(); 
    });



});