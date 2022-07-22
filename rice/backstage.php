<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="all.css">
    <link rel="stylesheet" href="lan.css">
    <script src="all.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.5.1/dist/chart.min.js"></script>
    <script src="jquery-3.6.0.min.js"></script>
    <script src="jslib.js"></script>
    <title>利芳米行</title>
</head>

<body in=backstage>
    <include src="nav.php"></include>

    <div style="height:30px;"></div>
    <table>
        <tr>
            <th>購買人</th>
            <th>種類</th>
            <th>數量</th>
            <th>總價</th>
            <th>是否已出貨</th>
        </tr>
        <?php
        require_once "connectDB.php";
        $rSum = 0;
        $lSum = 0;
        $bSum = 0;
        $sql = "SELECT * FROM `buyrice`";
        $selResult = mysqli_query($link, $sql);
        while ($row = mysqli_fetch_array($selResult, MYSQLI_ASSOC)) {
            echo "<tr>";
            echo "<td>" . $row["username"] . "</td>";
            echo "<td>" . $row["type"] . "</td>";
            echo "<td>" . $row["quantity"] . "</td>";
            if ($row["type"] == '圓米') {
                $rSum += $row["quantity"];
            } elseif ($row["type"] == '長米') {
                $lSum += $row["quantity"];
            } else {
                $bSum += $row["quantity"];
            }
            echo "<td>" . $row["sum"] . "</td>";
            echo "<td><input type='checkbox'></td>";
            echo "</tr>";
        }
        ?>
    </table>
    <div style="position: relative;top:-100px; height:30vh; width:20vw">
        <canvas id="myChart" width="10" height="10"></canvas>
    </div>
</body>

</html>
<script>
    var ctx = document.getElementById('myChart').getContext('2d');
    Chart.defaults.font.family = '標楷體';
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['圓米', '長米', '糙米'],
            datasets: [{
                label: '賣出數量',
                data: [<?php echo $rSum ?>, <?php echo $lSum ?>, <?php echo $bSum ?>],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                ],
                borderWidth: 1
            }]
        },
        options: {
            maintainAspectRatio: false,
            scaleStartValue: 0,
            scaleStepWidth: 50,
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>