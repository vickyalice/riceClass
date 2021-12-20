<nav style="text-align: left;font-size: 20px;height:30px;margin-bottom: 20px;margin-top:20px;">
    <a id="intr" i18n=intr href="index.html">首頁:米店介紹</a> |
    <a id="login" i18n=login href="login.html">會員登入</a> |
    <a id="res" i18n=res href="resigter.html">會員註冊</a> |
    <a id="intrBuy" i18n=intrBuy href="riceType.php">米種介紹</a> |
    <a id="cart" i18n=cart href="cart.php">訂購頁面</a> |
    <a id="backstage" i18n=backstage href="backstage.php">後臺管理</a> |
    [語言切換:
    <a onclick="changeLan('繁中');" style="cursor: pointer;">繁中</a> |
    <a onclick="changeLan('簡中');" style="cursor: pointer;">简中</a> |
    <a onclick="changeLan('英文');" style="cursor: pointer;">English</a> | ]
    <?php
        session_start();
        if( isset($_SESSION["name"])){
            echo "歡迎:".$_SESSION["name"];
            echo "&nbsp<form method='post' action='signout.php' style='display:inline-block;'><input type='submit' value='登出' style='border: 1px solid black;border-radius:5px; background-color:transparent;font-size:16px;cursor:pointer;'></form>";
        }else{
            echo "";
        }
    ?>
</nav>
