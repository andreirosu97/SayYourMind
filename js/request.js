(function() {
    'use strict';

    window.addEventListener('load', function() {
        var forms = document.getElementsByClassName('needs-validation');

        var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
                if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
        });
    }, false);
})();

$(function() {
    var $que = $('#question');
    var uid;

    $("#reqBtn").on('click', function(e) {
        if ($que.val()) {

            e.preventDefault();
            document.getElementById('question').readOnly = true;
            document.getElementById('question').style.resize = 'none';
            document.getElementById('reqBtn').disabled = true;

            $.ajax({
                type: 'GET',
                url: "../api/getCurretSession.php",
                dataType: 'JSON',
                encode: true,
                success: function(sessionData) {
                    uid = sessionData.user.name;
                    var data = {
                        uid: uid,
                        text: $que.val()
                    };
                    console.log(data.uid);
                    $.ajax({
                        type: 'POST',
                        url: "../api/putRequest.php",
                        data: data,
                        dataType: 'JSON',
                        encode: true,
                        success: function(userData) {
                            console.log(userData);
                            var succsess_notif = $.notify({
                                // options
                                title: 'Great ! <br>',
                                message: 'We are submiting your request right now ',
                            }, {
                                // settings
                                element: 'body',
                                type: "info",
                                allow_dismiss: false,
                                placement: {
                                    from: "top",
                                    align: "right"
                                },
                                offset: 140,
                                spacing: 20,
                                z_index: 1031,
                                delay: 2000,
                                timer: 70,
                                showProgressbar: true,
                                animate: {
                                    enter: 'animated bounceInDown',
                                    exit: 'animated bounceOutUp'
                                },
                                onClosed: function() {
                                    console.log("Request published.\n" + userData.result.reqid);
                                    document.getElementById('linkOut').value =
                                        "https://sayyourmind.com/answertome.php?user=" + userData.result.uid + "&req=" + userData.result.reqid;
                                }
                            });

                            setTimeout(function() {
                                succsess_notif.update({ 'type': 'success', 'message': 'We are generating your link.', 'title': '<strong>Success</strong><br>' });
                            }, 1500);
                        }

                    });
                }

            })
        }
    });
});