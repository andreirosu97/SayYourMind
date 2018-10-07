$(function() {
    var $reqId = $('#reqIdFromHTML');

    var data = {
        reqid: $reqId.val()
    };

    $.ajax({
        type: 'POST',
        url: "../api/getVarStats.php",
        data: data,
        dataType: 'JSON',
        encode: true,
        success: function(userData) {
            console.log(userData);
            var info = [0, 0, 0, 0];
            if (userData.male)
                info[0] = userData.male;
            if (userData.female)
                info[1] = userData.female;
            if (userData.other)
                info[2] = userData.other;

            var ctx = document.getElementById("sexChart");
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
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    },
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