window.onload = getCurrectSesion();

function getCurrectSesion() {
    $.ajax({
        type: 'GET',
        url: "../api/getCurretSession.php",
        dataType: 'JSON',
        encode: true,
        success: function(sessionData) {
            console.log(sessionData);
        }
    });
};