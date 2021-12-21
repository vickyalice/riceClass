<?php
    session_start();
    require_once "connectDB.php";
    if(!isset($_SESSION['name'])){
        echo "<script>alert('未登入，按下確定將導向「登入頁面」');</script>";
        echo "<script>location.href='login.html'</script>";
    }else{
        if (isset($_SESSION['name']) & isset($_POST['cart']) & !isset($_POST['contact'])) {
            $rNum = $_POST['rNum'];
            $lNum = $_POST['lNum'];
            $bNum = $_POST['bNum'];
            $member = $_SESSION["name"];
            $riceName = ['圓米', '長米', '糙米'];
            $buyTypeNum = [$rNum, $lNum, $bNum];
            $price = [26, 29, 30];
            for ($i = 0; $i < count($buyTypeNum); $i++) {
                $sum = $buyTypeNum[$i] * $price[$i];
                $sql = "INSERT INTO `buyrice` (`userName`,`type`,`quantity`,`sum`) VALUES('{$member}','{$riceName[$i]}','{$buyTypeNum[$i]}','{$sum}')";
                $result = mysqli_query($link, $sql);
                if (mysqli_affected_rows($link) > 0) {
                    echo "<script>location.href='fillupContact.php';</script>";
                } elseif (mysqli_affected_rows($link) == 0) {
                    echo "無購買資料";
                } else {
                    echo "<script>alert('購買失敗');';</script>";
                }
            }
        }else{
            $member = $_SESSION["name"];
            $name = $_POST['name'];
            $phone = $_POST['phone'];
            $county = $_POST['county'];
            $district = $_POST['district'];
            $afterAddress = $_POST['afterAddress'];
            $address = $county.$district.$afterAddress;
            $sql = "INSERT INTO `usercontactinfo` (`member`,`userName`,`phone`,`address`) VALUES('{$member}','{$name}','{$phone}','{$address}')";
            $result = mysqli_query($link, $sql);
            if (mysqli_affected_rows($link) > 0) {
                echo "<script>location.href='buySuccess.html';</script>";
            } elseif (mysqli_affected_rows($link) == 0) {
                echo "無購買資料";
            } else {
                echo "<script>alert('購買失敗');';</script>";
            }
        }
    }
?>
