$(function() {
    var $reqId = $('#reqIdFromHTML');

    var data = {
        reqid: $reqId.val()
    };

    $.ajax({
        type: 'POST',
        url: "../api/getVarTotal.php",
        data: data,
        dataType: 'JSON',
        encode: true,
        success: function(userData) {
            console.log(userData);

            var info = [1, 1, 1, 1];
            if (userData.v1)
                info[0] = userData.v1;
            if (userData.v2)
                info[1] = userData.v2;
            if (userData.v3)
                info[2] = userData.v3;
            if (userData.v4)
                info[3] = userData.v4;

            var ctx = document.getElementById("varChartTotal");
            new Chart(ctx, {
                type: 'pie',
                data: {
                    labels: ["0-17", "18-29", "30-49", "50+"],
                    datasets: [{
                        data: info,
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                        ],
                        borderColor: [
                            'rgba(255,99,132,1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)'
                        ],
                        borderWidth: 2
                    }]
                },
                options: {
                    legend: {
                        display: false,
                    }
                }
            });

        },
        error: function(data) {
            console.log("MUIE");
        }
    })

});