
<?php
session_start();
$mysqli = mysqli_connect('localhost', 'root', '', 'vansystem');
$strUsername = $_POST["txtUsername"];
$strPassword = $_POST["txtPassword"];

$result = $mysqli->query("SELECT * FROM `user` WHERE 1
		AND username = '".$strUsername."'
		AND password = '".$strPassword."'
		");

$row = $result->fetch_assoc();

if($row==0)
{
    echo "Username or Password incorrect";
}
else
{
    $_SESSION["user_id"] = $row["id"];
    $_SESSION["user_name"] = $row["name"];
    header("location:home.php");
}
?>