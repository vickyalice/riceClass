<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="all.css">
    <link rel="stylesheet" href="lan.css">
    <link rel="stylesheet" href="D:/fontawesome-free-5.15.3-web/css/all.css">
    <script src="jquery-3.6.0.min.js"></script>
    <script src="jslib.js"></script>
    <title>利芳米行</title>
    <script>
        function changeSum() {
            var r_up = document.getElementById("rUp").textContent;
            var l_up = document.getElementById("lUp").textContent;
            var b_up = document.getElementById("bUp").textContent;
            var r_num = document.getElementById("rNum").value;
            var l_num = document.getElementById("lNum").value;
            var b_num = document.getElementById("bNum").value;
            document.getElementById("rPrice").innerHTML = r_up * r_num;
            document.getElementById("lPrice").innerHTML = l_up * l_num;
            document.getElementById("bPrice").innerHTML = b_up * b_num;
            document.getElementById("Sum").innerHTML = r_up * r_num + l_up * l_num + b_up * b_num;
        }
        function rdel() {
            $('#rTb').hide();
            $('#rUp').text("0");
            changeSum();
        }
        function ldel() {
            $('#lTb').hide();
            $('#lUp').text("0");
            changeSum();
        }
        function bdel() {
            $('#bTb').hide();
            $('#bUp').text("0");
            changeSum();
        }
    </script>
</head>

<body in=cart>
    <include src="nav.html"></include>

    <div style="height:60px;"></div>
    <center>
        <div>
            <span style="margin-left: -600px;">
                <script src="https://cdn.lordicon.com/libs/mssddfmo/lord-icon-2.1.0.js"></script>
                <lord-icon src="https://cdn.lordicon.com/slkvcfos.json" trigger="hover"
                    colors="primary:#121331,secondary:black" style="width:80px;height:80px;">
                </lord-icon>
                我的購物車
            </span>
        </div>
    </center>

    <table>
        <tr>
            <th>品名</th>
            <th>單價</th>
            <th>數量(斤)</th>
            <th>價錢</th>
            <th></th>
        </tr>
        <tr id="rTb">
            <td>圓米</td>
            <td><span id="rUp">26</span></td>
            <td><input type="number" name="num" id="rNum" value="10" min=10 max=1000 step=5 style="width:50px;"
                    onchange="changeSum()"></td>
            <td><span id="rPrice">260</span></td>
            <td>
                <input type="button" id="del" name="del" value="❌" onclick="rdel()">
            </td>
        </tr>
        <tr id="lTb">
            <td>長米</td>
            <td id="lUp">29</td>
            <td><input type="number" name="num" id="lNum" value="10" min=10 max=1000 step=5 style="width:50px;"
                    onchange="changeSum()"></td>
            <td><span id="lPrice">290</span></td>
            <td>
                <input type="button" id="del" name="del" value="❌" onclick="ldel()">
            </td>
        </tr>
        <tr id="bTb">
            <td>糙米</td>
            <td id="bUp">30</td>
            <td><input type="number" name="num" id="bNum" value="10" min=10 max=1000 step=5 style="width:50px;"
                    onchange="changeSum()"></td>
            <td><span id="bPrice">300</span></td>
            <td>
                <input type="button" id="del" name="del" value="❌" onclick="bdel()">
            </td>
        </tr>
        <tr>
            <td>總價:</td>
            <td style="width:50px;"></td>
            <td colspan="4" id="Sum" onchange="changeSum()">850</td>
        </tr>
    </table>
</body>

</html>