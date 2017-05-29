<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.min.js"></script>
</head>
<body>


<table allign="center">

    <tr>
        <td><canvas id="myChart4" width="450" height="450"></canvas>
            <script>
                var ctx = document.getElementById("myChart4");
                var myChart4 = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: [ <?php echo $graf1nazov ?> ],
                        datasets: [{
                            label: 'Navstevovanost sportovisk',
                            data: [<?php echo $graf1hodnoty ?>],
                            backgroundColor: [
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(255, 206, 86, 0.2)',
                                'rgba(75, 192, 192, 0.2)'
                            ],
                            maintainAspectRatio: false,
                            responsive: true,
                            borderColor: [
                                'rgba(255,99,132,1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)',
                                'rgba(75, 192, 192, 1)'
                            ],
                            borderWidth: 1
                        }]
                    },
                    options: {
                        scales: {
                            yAxes: [{
                                ticks: {
                                    beginAtZero:true
                                }
                            }]
                        }
                    }
                });
            </script></td>
        <td><canvas id="myChart5" width="450" height="450"></canvas>
            <script>
                var ctx = document.getElementById("myChart5");
                var myChart5 = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: [<?php echo $graf2nazov ?> ],
                        datasets: [{
                            label: '# zaznami pozicania',
                            data: [<?php echo $graf2hodnoty ?>],
                            backgroundColor: [
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(255, 206, 86, 0.2)',
                                'rgba(75, 192, 192, 0.2)',
                                'rgba(153, 102, 255, 0.2)',
                            ],
                            maintainAspectRatio: false,
                            responsive: true,
                            borderColor: [
                                'rgba(255,99,132,1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)',
                                'rgba(75, 192, 192, 1)',
                                'rgba(153, 102, 255, 1)'
                            ],
                            borderWidth: 1
                        }]
                    },
                    options: {
                        scales: {
                            yAxes: [{
                                ticks: {
                                    beginAtZero:true
                                }
                            }]
                        }
                    }
                });
            </script></td>
    </tr>
    <tr>
        <td><canvas id="myChart6" width="450" height="450"></canvas>
            <script>
                var ctx = document.getElementById("myChart6");
                var myChart6 = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: [<?php echo $graf3nazov ?> ],
                        datasets: [{
                            label: 'navstevnost uzivatelov',
                            data: [<?php echo $graf3hodnoty ?>],
                            backgroundColor: [
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(255, 206, 86, 0.2)',
                                'rgba(75, 192, 192, 0.2)',
                                'rgba(153, 102, 255, 0.2)',
                                'rgba(255, 159, 64, 0.2)'
                            ],
                            maintainAspectRatio: false,
                            responsive: true,
                            borderColor: [
                                'rgba(255,99,132,1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)',
                                'rgba(75, 192, 192, 1)',
                                'rgba(153, 102, 255, 1)',
                                'rgba(255, 159, 64, 1)'
                            ],
                            borderWidth: 1
                        }]
                    },
                    options: {
                        scales: {
                            yAxes: [{
                                ticks: {
                                    beginAtZero:true
                                }
                            }]
                        }
                    }
                });
            </script></td>
        <td><canvas id="myChart7" width="450" height="450"></canvas>
            <script>
                var ctx = document.getElementById("myChart7");
                var myChart7 = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: [<?php echo $graf4nazov ?> ],
                        datasets: [{
                            label: 'Platby',
                            data: [<?php echo $graf4hodnoty ?>],
                            backgroundColor: [
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(255, 206, 86, 0.2)',
                                'rgba(75, 192, 192, 0.2)',
                                'rgba(153, 102, 255, 0.2)',
                                'rgba(255, 159, 64, 0.2)'
                            ],
                            borderColor: [
                                'rgba(255,99,132,1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)',
                                'rgba(75, 192, 192, 1)',
                                'rgba(153, 102, 255, 1)',
                                'rgba(255, 159, 64, 1)'
                            ],
                            borderWidth: 1,
                            maintainAspectRatio: false,
                            responsive: true,
                        }]
                    },
                    options: {
                        scales: {
                            yAxes: [{
                                ticks: {
                                    beginAtZero:true
                                }
                            }]
                        }
                    }
                });
            </script></td>
    </tr>
</table>

</body>
</html>
