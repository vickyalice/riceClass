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
            echo "<th>" . $row["userName"] . "</th>";
            echo "<th>" . $row["type"] . "</th>";
            echo "<th>" . $row["quantity"] . "</th>";
            echo "<th>" . $row["sum"] . "</th>";
            echo "<th><input type='checkbox'></th>";
            echo "</tr>";
        }
        ?>
    </table>
    <a href="chart.html">圖表</a>
</body>

</html>