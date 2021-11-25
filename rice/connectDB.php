<?php
    $host = 'localhost';
    $dbUser = 'root';
    $dbPwd = 'a123';
    $dbName = 'rice';

    $link = mysqli_connect($host, $dbUser, $dbPwd, $dbName);
    if($link){
        mysqli_query($link,"SET NAMES utf-8");
    }else{
        echo "無法連線:</br>"+ mysqli_connect_error();
    }
?>