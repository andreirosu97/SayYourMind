$(function() {
    var $reqId = $('#reqIdFromHTML');

    var data = {
        reqid: $reqId.val()
    };

    $.ajax({
        type: 'POST',
        url: "../api/getTotalAveragePerUser.php",
        data: data,
        dataType: 'JSON',
        encode: true,
        success: function(userData) {
            console.log(userData);

            var info = [5, 5];
            if (userData.avg) {
                info[0] = 10 - userData.avg;
                info[1] = userData.avg;
            }

            var ctx = document.getElementById("avgUsr");
            new Chart(ctx, {
                type: 'pie',
                data: {
                    labels: ["Remaining Rating till 10", "Current Overall Rating"],
                    datasets: [{
                        data: info,
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                        ],
                        borderColor: [
                            'rgba(255,99,132,1)',
                            'rgba(54, 162, 235, 1)',
                        ],
                        borderWidth: 2
                    }]
                },
                options: {
                    legend: {
                        display: true,
                    }
                }
            });

        },
        error: function(data) {
            console.log("MUIE");
        }
    })

});