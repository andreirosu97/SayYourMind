$(function() {

    var $username = $('#inputUsername');
    var $password = $('#inputPassword');
    var $password2 = $('#inputPasswordRepeat');
    var allFilledOut;
    var isUserCorrect;
    var isPasswordCorrect;

    $("#sign-up-button").on('click', function(e) {
        if ($username.val() && $password.val() && $password2.val()) {
            e.preventDefault();
            allFilledOut = 1;
        }

        var user = {
            username: $username.val(),
            password: $password.val()
        };

        console.log(user);
        if (allFilledOut && isUserCorrect && isPasswordCorrect) {
            $.ajax({
                type: 'POST',
                url: "../registerUser.php",
                data: user,
                dataType: 'JSON',
                encode: true,
                success: function(userData) {
                    console.log(userData);
                    if (userData.registered) {
                        var succsess_notif = $.notify({
                            // options
                            title: 'Please be patient ! <br>',
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
                            delay: 6000,
                            timer: 100,
                            showProgressbar: true,
                            animate: {
                                enter: 'animated bounceInDown',
                                exit: 'animated bounceOutUp'
                            },
                            onClosed: function() {
                                window.location.replace("index.php");
                            }
                        });

                        setTimeout(function() {
                            succsess_notif.update('message', '<strong>Creating</strong> profile.');
                        }, 1000);

                        setTimeout(function() {
                            succsess_notif.update('message', '<strong>Cleaning</strong> the Dashboard.');
                        }, 2000);

                        setTimeout(function() {
                            succsess_notif.update('message', '<strong>Making</strong> room for your picture.');
                        }, 3000);

                        setTimeout(function() {
                            succsess_notif.update('message', '<strong>Saving</strong> everything up.');
                        }, 4000);

                        setTimeout(function() {
                            succsess_notif.update({ 'type': 'success', 'message': 'You are being redirected!', 'title': '<strong>We are done !</strong><br>' });
                        }, 5000);
                    }
                }
            });
        }
    });

    $("#inputUsername").keyup(function(e) {
        var user = {
            username: $username.val(),
            password: $password.val()
        };

        console.log(user);

        $.ajax({
            type: 'POST',
            url: "../getUser.php",
            data: user,
            dataType: 'JSON',
            encode: true,
            success: function(userData) {
                if (userData.username != null) {
                    console.log("--- ERROR: Existing user ---");
                    $("#alertUser").slideDown(400);
                    isUserCorrect = false;
                } else {
                    $("#alertUser").slideUp(400);
                    isUserCorrect = true;
                }

            }
        });
    });

    /*Dynamic alert for matching passwords*/
    $("#inputPasswordRepeat").keyup(function(e) {
        if (($password.val() != $password2.val())) {
            console.log("--- ERROR: Not matching passwords ---");
            $("#alertPassword").slideDown(400);
            isPasswordCorrect = false;
        } else {
            $("#alertPassword").slideUp(400);
            isPasswordCorrect = true;
        }
    });
});