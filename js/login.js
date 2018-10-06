$(function() {

    var $username = $('#inputUsername');
    var $password = $('#inputPassword');
    var allFilledOut;

    $("#sign-in-button").on('click', function(e) {
        allFilledOut = 0;
        if ($username.val() && $password.val()) {
            e.preventDefault();
            allFilledOut = 1;
        }

        var user = {
            username: $username.val(),
            password: $password.val()
        };

        $.ajax({
            type: 'POST',
            url: "../api/getUser.php",
            data: user,
            dataType: 'JSON',
            encode: true,
            success: function(userData) {
                console.log(userData);
                if (userData.goodpass) {
                    var succsess_notif = $.notify({
                        // options
                        title: 'Wellcome ! <br>',
                        message: 'We are patching you in ',
                    }, {
                        // settings
                        element: 'body',
                        type: "info",
                        allow_dismiss: false,
                        placement: {
                            from: "top",
                            align: "center"
                        },
                        offset: 140,
                        spacing: 20,
                        z_index: 1031,
                        delay: 3000,
                        timer: 70,
                        showProgressbar: true,
                        animate: {
                            enter: 'animated bounceInDown',
                            exit: 'animated bounceOutUp'
                        },
                        onClosed: function() {
                            console.log("Logged in, moving to dashboard.");
                            window.location.assign("dashboard.php");
                        }
                    });

                    setTimeout(function() {
                        succsess_notif.update({ 'type': 'success', 'message': 'You are being redirected!', 'title': '<strong>Success</strong><br>' });
                    }, 1750);

                } else if (allFilledOut) {
                    $.notify({
                        // options
                        title: '<strong>Warning !</strong><br>',
                        message: 'The credentials were not introduced correctly !',
                    }, {
                        // settings
                        element: 'body',
                        type: "danger",
                        allow_dismiss: true,
                        newest_on_top: true,
                        placement: {
                            from: "top",
                            align: "center"
                        },
                        offset: 175,
                        spacing: 20,
                        z_index: 1031,
                        delay: 1800,
                        animate: {
                            enter: 'animated bounceIn',
                            exit: 'animated bounceOut'
                        }
                    });
                }
            },
            error: function() {
                console.log("ERROR");
            }
        });
    });
});