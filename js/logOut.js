$(function() {
    var btn = document.getElementById('logBtn');
    $("#logBtn").on('click', function(e) {
        console.log();
        if (btn.innerHTML == "Log out") {
            e.preventDefault();
            $.ajax({
                type: 'GET',
                url: "../api/logOut.php",
                dataType: 'JSON',
                encode: true,
                success: function(result) {
                    console.log(result);
                    if (result.logOut) {
                        console.log("Successfully logged out !");
                        $.notify({
                            title: '<strong>Heads up!</strong>',
                            message: 'You have successfully logged out. Bye !'
                        }, {
                            offset: 60,
                            delay: 1000,
                            animate: {
                                enter: 'animated bounceIn',
                                exit: 'animated bounceOut'
                            },
                            onClosed: function() {
                                window.location.replace("");
                            }
                        });
                    } else
                        console.log("Error at logging out !");
                }
            });
        }
    });
});