<?php

include 'connectDB.php';

$van_id = $_POST["van_id"];
$result = $mysqli->query("SELECT * FROM `timeline` WHERE 1 AND van_id = '".$van_id."'");

$row = $result->fetch_assoc();
echo $row['datetime'];
?>