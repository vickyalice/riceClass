<?php
    session_start();
    require_once "connectDB.php";
    
    $rNum = $_POST['rNum'];
    $lNum = $_POST['lNum'];
    $bNum = $_POST['bNum'];
    $name = $_SESSION["name"];
    $riceName = ['圓米','長米','糙米'];
    $buyTypeNum = [$rNum, $lNum, $bNum];
    $price = [26,29,30];
    for($i = 0; $i < count($buyTypeNum); $i++){
        $sum = $buyTypeNum[$i]*$price[$i];
        $sql = "INSERT INTO `buyrice` (`userName`,`type`,`quantity`,`sum`) VALUES('{$name}','{$riceName[$i]}','{$buyTypeNum[$i]}','{$sum}')";
        $result = mysqli_query($link,$sql);
        if(mysqli_affected_rows($link)>0){
            echo "<script>location.href='buySuccess.html';</script>";
        }elseif(mysqli_affected_rows($link)==0){
            echo "無購買資料";
        }else{
            echo "<script>alert('購買失敗');';</script>";
        }
    }
