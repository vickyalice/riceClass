<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="all.css">
    <link rel="stylesheet" href="lan.css">
    <script src="all.js"></script>
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

        $sql = "SELECT * FROM `buyrice`";
        $selResult = mysqli_query($link, $sql);
        while ($row = mysqli_fetch_array($selResult, MYSQLI_ASSOC)) {
            echo "<tr>";
            echo "<td>" . $row["userName"] . "</td>";
            echo "<td>" . $row["type"] . "</td>";
            echo "<td>" . $row["quantity"] . "</td>";
            echo "<td>" . $row["sum"] . "</td>";
            echo "<td><input type='checkbox'></td>";
            echo "</tr>";
        }
        ?>
    </table>
    <a href="chart.html">圖表</a>
</body>

</html>