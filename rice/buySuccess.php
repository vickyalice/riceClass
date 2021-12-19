<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="all.css">
    <!-- <link rel="stylesheet" href="D:/fontawesome-free-5.15.3-web/css/all.css"> -->
    <script src="jquery-3.6.0.min.js"></script>
    <title>利芳米行</title>

    <script>
        window.onload = function() {
            $("#lupuorrc").hide();
            $("#nxaaasqe").show();
            setTimeout(function() {
                $("#lupuorrc").show();
                $("#nxaaasqe").hide();
            }, 3000);
        }
    </script>
</head>

<body in=buySuccess>
    <div id="nxaaasqe" style="margin-top:10%;margin-left:auto;margin-right:auto;text-align:center;">
        <script src="https://cdn.lordicon.com/libs/mssddfmo/lord-icon-2.1.0.js"></script>
        <lord-icon src="https://cdn.lordicon.com/nxaaasqe.json" trigger="loop" colors="primary:#ffe153,secondary:#08a88a" style="width:250px;height:250px">
        </lord-icon>
        <h1>訂單成立中</h1>
    </div>

    <div id="lupuorrc" style="margin-top:10%;margin-left:auto;margin-right:auto;text-align:center;">
        <script src="https://cdn.lordicon.com/libs/mssddfmo/lord-icon-2.1.0.js"></script>
        <lord-icon src="https://cdn.lordicon.com/lupuorrc.json" trigger="loop" colors="primary:#121331,secondary:#ffe153" style="width:250px;height:250px">
        </lord-icon>
        <h1>訂單成立</h1>
        <button class="btn" onclick="location.href='index.html'">回到主頁</button>
    </div>
</body>

</html>