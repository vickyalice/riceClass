<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="all.css">
    <link rel="stylesheet" href="lan.css">
    <script src="https://cdn.jsdelivr.net/npm/tw-city-selector@2.1.1/dist/tw-city-selector.min.js"></script>
    <link rel="stylesheet" href="D:/fontawesome-free-5.15.3-web/css/all.css">
    <script src="jquery-3.6.0.min.js"></script>
    <script src="jslib.js"></script>
    <title>利芳米行</title>

    <script>
        $(function() {
            new TwCitySelector()
        })
    </script>
</head>

<body in=fillup>
    <include src="nav.php"></include>

    <center>
        <div>
            <span style="margin-left:-600px;">
                <script src="https://cdn.lordicon.com/libs/mssddfmo/lord-icon-2.1.0.js"></script>
                <lord-icon src="https://cdn.lordicon.com/uetqnvvg.json" trigger="loop" colors="primary:#121331,secondary:#08a88a" style="width:100px;height:100px">
                </lord-icon>
                聯絡方式
            </span>
        </div>
    </center>
    <form method="post" action="buyInfo.php">
        <table>
            <tr>
                <th>聯絡方式</th>
            </tr>
            <tr>
                <td>姓&nbsp&nbsp&nbsp&nbsp名:<input type="text" name="name" required></td>
            </tr>
            <tr>
                <td>聯絡號碼:<input type="text" name="phone" placeholder="09-xxxxxxxx" required></td>
            </tr>
        </table>
        <table>
            <tr>
                <th>送貨方式(宅配):</th>
            </tr>
            <tr>
                <td>
                    地&nbsp&nbsp&nbsp&nbsp址:<span role="tw-city-selector"></span>
                    <input type="text" name="afterAddress" required>
                </td>
        </table>
        <table>
            <tr>
                <th>付款方式:</th>
            </tr>
            <tr>
                <td>
                    貨到付款
                </td>
            </tr>
            <tr>
                <td>
                    <br>
                    <span>如確認以上資料無誤，點選「確認購買」完成訂單，謝謝您的購買!</span><br><br>
                    <input type="hidden" name="contact">
                    <input type="submit" value="確認購買">
                </td>
            </tr>
        </table>
    </form>
</body>

</html>