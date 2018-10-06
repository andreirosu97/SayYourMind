window.onload = getCurrectSesion();

function getCurrectSesion() {
    $.ajax({
        type: 'GET',
        url: "../getCurretSession.php",
        dataType: 'JSON',
        encode: true,
        success: function(sessionData) {
            console.log(sessionData);
        }
    });
};