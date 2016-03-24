
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
        ?>
        <script type="text/javascript">
            alert("ไม่มีผู้ใช้นี้ในระบบ !!!!");
            history.back();
        </script>
        <?php
    }
    else
    {
        $_SESSION["user_id"] = $row["id"];
        $_SESSION["user_name"] = $row["name"];
        header("location:home.php");

    }
?>
