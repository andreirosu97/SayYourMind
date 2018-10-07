function deleteReq($reqId) {
    var id = {
        reqId: $reqId
    };

    console.log("Delete req got from btn");

    $.ajax({
        type: 'POST',
        url: "../api/putDeleteReq.php",
        data: id,
        dataType: 'JSON',
        encode: true,
        success: function(userData) {
            console.log(userData);

            if (userData.result) {
                var succsess_notif = $.notify({
                    // options
                    title: '<strong>Great</strong>',
                    message: 'The request was deleted ',
                }, {
                    // settings
                    element: 'body',
                    type: "danger",
                    allow_dismiss: true,
                    placement: {
                        from: "top",
                        align: "right"
                    },
                    offset: 80,
                    spacing: 20,
                    z_index: 1031,
                    delay: 1000,
                    timer: 70,
                    animate: {
                        enter: 'animated bounceInDown',
                        exit: 'animated bounceOutUp'
                    },
                    onClosed: function() {
                        console.log("Deleted request.");
                        location.reload();
                    }
                });


            }
        }
    });
};

function getMoreInfo(user, reqid) {
    window.location.assign("answertome.php?user=" + user + "&req=" + reqid.substr(3));
}