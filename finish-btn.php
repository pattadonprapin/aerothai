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
    $mysqli->query("UPDATE vandetail SET status = 0 ");
    $mysqli->query("DELETE FROM request WHERE id = '$id' ");

header("location:home.php");

?>