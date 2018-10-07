$(function() {

    var $reqId = $('#reqIdFromHTML');

    var data = {
        reqid: $reqId.val()
    };

    $.ajax({
        type: 'POST',
        url: "../api/getMaleFemaleOtherStats.php",
        data: data,
        dataType: 'JSON',
        encode: true,
        success: function(userData) {
            console.log("Sex data: " + userData);
            if (userData.male && userData.female && userData.other) {
                var info = [userData.male, userData.female, userData.other];
                var ctx = document.getElementById("sexChart");
                new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: ["Female", "Male", "Other"],
                        datasets: [{
                            data: info,
                            backgroundColor: [
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(255, 206, 86, 0.2)',
                            ],
                            borderColor: [
                                'rgba(255,99,132,1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)',
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
            }
        }
    })

});