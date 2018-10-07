$(function() {
    var $reqId = $('#reqIdFromHTML');

    var data = {
        reqid: $reqId.val()
    };

    $.ajax({
        type: 'POST',
        url: "../api/getSexTotal.php",
        data: data,
        dataType: 'JSON',
        encode: true,
        success: function(userData) {
            console.log(userData);
            var info = [1, 1, 1];
            if (userData.male)
                info[0] = userData.male;
            if (userData.female)
                info[1] = userData.female;
            if (userData.other)
                info[2] = userData.other;

            var ctx = document.getElementById("sexChartTotal");
            new Chart(ctx, {
                type: 'pie',
                data: {
                    labels: ["Male", "Female", "Other"],
                    datasets: [{
                        data: info,
                        backgroundColor: [
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                        ],
                        borderColor: [
                            'rgba(54, 162, 235, 1)',
                            'rgba(255,99,132,1)',
                            'rgba(255, 206, 86, 1)',
                        ],
                        borderWidth: 2
                    }]
                },
                options: {
                    legend: {
                        display: true,
                    },
                    title: {
                        display: true,
                        text: "Statistic based on gender "
                    }
                }
            });

        },
        error: function(data) {
            console.log("MUIE");
        }
    })

});