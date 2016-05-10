<?php
include 'connectDB.php';

    function al($msg){
        echo "<script type=\"text/javascript\">alert('$msg') </script>";
    }
    al("คุณได้ยืนยันภาระกิจแล้ว");
$id = $_GET['id'];

    $result = $mysqli->query("SELECT * FROM `request` WHERE id='$id'");
    $row = $result->fetch_assoc();

    $mysqli->query("INSERT INTO `report` SET vanNum = '{$row['vanNum']}', task = '{$row['task']}'");


header("location:home.php");

?>