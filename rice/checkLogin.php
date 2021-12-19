<?php
    require_once "connectDB.php";

    $account = $_POST['account'];
    $password = $_POST['password'];
    
    $selSql = "SELECT `name`,`account`,`password` FROM `user`";
    $selResult = mysqli_query($link,$selSql);
    $fieldInfo = mysqli_fetch_field($selResult);
    while($row = mysqli_fetch_array($selResult,MYSQLI_ASSOC)){
        if($row['account'] == $account & $row['password']==$password){
            session_start();
            $_SESSION["name"] = $row["name"];
            // unset($_SESSION['name']); //刪除變數
            echo "<script>alert('登入成功');location.href='riceType.php';</script>";
        }else{
            continue;
        }
    }
    echo "<script>alert('帳號或密碼輸入錯誤，登入失敗');location.href='login.html';</script>";
?>