<?php
include 'connectDB.php';

if(isset($_GET['accept-btn']))
{
    $id = $_GET['id'];
    $status = "Accepted";
    $mysqli->query("UPDATE `request` SET vanNum = '".$_GET['van']."', status = '$status' WHERE  id='$id'");
    echo "คุณได้อนุมัติการใช้รถตู้แล้ว";

}

elseif(isset($_GET['reject-btn']))
{
    $id = $_GET['id'];
    $mysqli->query("DELETE FROM `request` WHERE  id='$id'");
    echo "คุณได้ยกเลิกคำขอใช้รถแล้ว";
}
header("location:home.php");

?>