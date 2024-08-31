<?php
$delay1 = $_POST['delay1'];
$delay2 = $_POST['delay2'];
$delay3 = $_POST['delay3'];
$delay4 = $_POST['delay4'];

$delays = [$delay1, $delay2, $delay3, $delay4];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generated Graphs</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="form_style.css">
    <style>
        .graph-section {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        canvas {
            width: 400px;
            height: 300px;
            border: 2px solid #ddd;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .main-content {
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #333;
            font-family: Arial, sans-serif;
        }
    </style>
</head>
<body>
    <?php include("header.php"); ?>

    <div class="main-content">
        <section class="graph-section">
            <canvas id="timeDelayChart"></canvas>
        </section>
    </div>

    <script>
        var ctx = document.getElementById('timeDelayChart').getContext('2d');
        var timeDelayChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Delay 1', 'Delay 2', 'Delay 3', 'Delay 4'],
                datasets: [{
                    label: 'Time Delays (ms)',
                    data: <?php echo json_encode($delays); ?>,
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top',
                        labels: {
                            font: {
                                size: 14
                            }
                        }
                    },
                    tooltip: {
                        callbacks: {
                            label: function(tooltipItem) {
                                return `Delay ${tooltipItem.dataIndex + 1}: ${tooltipItem.raw} ms`;
                            }
                        }
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        title: {
                            display: true,
                            text: 'Time Delay (ms)',
                            font: {
                                size: 16,
                                weight: 'bold'
                            },
                            color: '#333'
                        },
                        ticks: {
                            stepSize: 10
                        }
                    },
                    x: {
                        title: {
                            display: true,
                            text: 'Delays',
                            font: {
                                size: 16,
                                weight: 'bold'
                            },
                            color: '#333'
                        }
                    }
                }
            }
        });
    </script>

    <?php include("footer.php"); ?>
</body>
</html>
