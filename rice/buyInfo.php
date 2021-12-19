<?php
    require_once "connectDB.php";
    
    $rNum = $_POST['rNum'];
    $lNum = $_POST['lNum'];
    $bNum = $_POST['bNum'];
    $buyTypeSum = [$rNum, $lNum, $bNum];
    for($i = 0; $i < count($buyTypeSum); $i++){
        $sql = "INSERT INTO `buyrice` (`userName`,`type`,`quantity`,`sum`) VALUES('{$buyTypeSum[$i]}','{$buyTypeSum[$i]}','{$buyTypeSum[$i]}','{$buyTypeSum[$i]}')";
        $result = mysqli_query($link,$sql);
        if(mysqli_affected_rows($link)>0){
            echo "<script>alert('註冊成功');location.href='login.html';</script>";
        }elseif(mysqli_affected_rows($link)==0){
            echo "無資料新增";
        }else{
            echo "<script>alert('註冊失敗');location.href='resigter.html';</script>";
        }
    }
