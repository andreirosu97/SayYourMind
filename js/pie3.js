$(function() {
    var $reqId = $('#reqIdFromHTML');

    var data = {
        reqid: $reqId.val()
    };

    $.ajax({
        type: 'POST',
        url: "../api/getDomTotal.php",
        data: data,
        dataType: 'JSON',
        encode: true,
        success: function(userData) {
            console.log(userData);
            var info = [0, 0, 0, 0, 0];
            if (userData.it)
                info[0] = userData.it;
            if (userData.mm)
                info[1] = userData.mm;
            if (userData.teach)
                info[2] = userData.teach;
            if (userData.ind)
                info[3] = userData.ind;
            if (userData.oth)
                info[3] = userData.oth;

            var ctx = document.getElementById("domChartTotal");
            new Chart(ctx, {
                type: 'pie',
                data: {
                    labels: ["IT", "Management and Marketing", "Teaching", "Industrial", "Other"],
                    datasets: [{
                        data: info,
                        backgroundColor: [
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(255, 159, 64, 0.2)'
                        ],
                        borderColor: [
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)'
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