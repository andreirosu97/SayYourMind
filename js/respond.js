$(function() {
    var $rating = $('#rating');
    var $sex = $('#sex');
    var $age = $('#age');
    var $work = $('#work');
    var $text = $('#text');
    var $reqId = $('#reqIdFromHTML');
    var allFilledOut;

    $("#respBtn").on('click', function(e) {
        console.log($sex.val());
        if ($rating.val() &&
            $age.val() &&
            $work.val() &&
            $sex.val() &&
            $text.val() &&
            $reqId.val()) {
            e.preventDefault();
            allFilledOut = 1;
        }

        var response = {
            reqid: $reqId.val(),
            rating: $rating.val(),
            text: $text.val(),
            sex: $sex.val(),
            age: $age.val(),
            work: $work.val()
        };

        if (allFilledOut) {
            $.ajax({
                type: 'POST',
                url: "../api/putResponse.php",
                data: response,
                dataType: 'JSON',
                encode: true,
                success: function(userData) {
                    console.log(userData);
                    if (userData.result) {
                        $.notify({
                            // options
                            title: 'Thank you ! <br>',
                            message: 'Your response was recorded ',
                        }, {
                            // settings
                            element: 'body',
                            type: "success",
                            allow_dismiss: true,
                            placement: {
                                from: "top",
                                align: "center"
                            },
                            offset: 140,
                            spacing: 20,
                            z_index: 1031,
                            delay: 1600,
                            timer: 100,
                            animate: {
                                enter: 'animated bounceInDown',
                                exit: 'animated bounceOutUp'
                            },
                            onClosed: function() {
                                console.log("Response was registered !");
                                window.location.assign("index.php");
                            }
                        });

                    }
                }
            });
        }
    });
});