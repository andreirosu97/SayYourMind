$(function() {
    var $FirstName = $('#firstName');
    var $LastName = $('#lastName');
    var $UserName = $('#username');
    var $Email = $('#email');
    var $QuestionType = $('#quesitonType');
    var $Question = $('#question');
    var allFilledOut;

    $("#respBtn").on('click', function(e) {

        if ($FirstName.val() &&
            $LastName.val() &&
            $UserName.val() &&
            $Email.val() &&
            $QuestionType.val() &&
            $Question.val()) {

            e.preventDefault();
            allFilledOut = 1;
            document.getElementById('respBtn').disabled = true;
        }

        var response = {
            FirstName: $FirstName.val(),
            LastName: $LastName.val(),
            UserName: $UserName.val(),
            Email: $Email.val(),
            QuestionType: $QuestionType.val(),
            Question: $Question.val()
        };

        if (allFilledOut) {
            $.ajax({
                type: 'POST',
                url: "../api/putSupport.php",
                data: response,
                dataType: 'JSON',
                encode: true,
                success: function(userData) {
                    console.log(userData);
                    if (userData.result) {
                        $.notify({
                            // options
                            title: 'Thank you ! <br>',
                            message: 'Your support request was submited ',
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
                                console.log("Support was registered !");
                                window.location.assign("index.php");
                            }
                        });

                    }
                },
                error: function(userData) {
                    $.notify({
                        // options
                        title: '<strong>ERROR</strong> <br>',
                        message: 'Please try again later ... ',
                    }, {
                        // settings
                        element: 'body',
                        type: "danger",
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
                            window.location.assign("index.php");
                        }
                    });
                }
            });
        }
    });
});