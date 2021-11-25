<?php
    require_once "connectDB.php";

    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $gmail = $_POST['gmail'];
    $account = $_POST['account'];
    $password = $_POST['password'];
    $re_password = $_POST['re_password'];

    $sql = "INSERT INTO `user` (`name`,`phone`,`gmail`,`account`,`password`,`re_password`) VALUES('{$name}','{$phone}','{$gmail}','{$account}','{$password}','{$re_password}')";
    $result = mysqli_query($link,$sql);
    if(mysqli_affected_rows($link)>0){
        echo "<script>alert('註冊成功');location.href='login.html';</script>";
    }elseif(mysqli_affected_rows($link)==0){
        echo "無資料新增";
    }else{
        echo "<script>alert('註冊失敗');location.href='resigter.html';</script>";
    }
?>