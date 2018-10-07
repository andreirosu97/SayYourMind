$(function() {
    var $rating = $('#rating');
    var $gender = $('#gender');
    var $age = $('#age');
    var $work = $('#work');
    var $text = $('#text');
    var $reqId = $('#reqIdFromHTML');
    var allFilledOut;

    $("#sign-up-button").on('click', function(e) {
        if ($rating.val() &&
            $gender.val() &&
            $age.val() &&
            $work.val() &&
            $text.val()) {
            e.preventDefault();
            allFilledOut = 1;
        }

        var response = {
            reqid: $username.val(),
            rating: $password.val(),
            text: sex: age: work

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
                    if (userData.registered) {
                        var succsess_notif = $.notify({
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
                            delay: 2200,
                            timer: 100,
                            showProgressbar: true,
                            animate: {
                                enter: 'animated bounceInDown',
                                exit: 'animated bounceOutUp'
                            },
                            onClosed: function() {
                                window.location.close();
                            }
                        });

                    }
                }
            });
        }
    });
});