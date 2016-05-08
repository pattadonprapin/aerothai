<?php
include 'connectDB.php';


    $id = $_GET['id'];

    $result = $mysqli->query("SELECT vanNum,task FROM `request` WHERE id='$id'");
    $row = $result->fetch_assoc();
    $mysqli->query("INSERT INTO `report` SET vanNum = '{$row['vanNum']}', task = '{$row['task']}'");
    echo "คุณได้อนุมัติการใช้รถตู้แล้ว";

header("location:home.php");

?>