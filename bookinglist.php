<!DOCTYPE html>
<html lang="en">
<?php
session_start();

error_reporting(0);
if ($_SESSION["user_id"] != null){
?>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ระบบจองรถตู้-วิทยุการบินเชียงใหม่</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/logo-nav.css" rel="stylesheet">
    <link href="css/sb-admin-2.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

     <!-- Custom Fonts -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <?php
    include 'connectDB.php';
    $status = "Waiting";
    $result = $mysqli->query("SELECT * FROM `request` WHERE status = '$status'");
    ?>
    <meta http-equiv="refresh" content="5" />
</head>

<body>

    <div id="wrapper">
    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="margin-bottom: 0">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
               <?php
                error_reporting(0);
                if ($_SESSION["user_id"] != null){
                  echo '<a class="navbar-brand" href="home.php">';}
                ?>
                <?php
                 if  ($_SESSION["user_id"] == null){
                   echo '<a class="navbar-brand" href="index.php">';}
                  ?>
                    <img src = "image/band.png" width="250" height="50" >
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <ul class="nav navbar-top-links navbar-center">

                    <li>
                        <a class="page-scroll" href="bookinglist.php"><i class="fa fa-list-alt fa-lg"></i><font color="#798481" size="4">&nbsp; รายการจองรถตู้</a></font>
                    </li>
                    <li>
                        <a class="page-scroll" href="vandetail.php"><i class="fa fa-bus fa-lg"></i><font color="#798481" size="4">&nbsp; ข้อมูลรถตู้</a></font>
                    </li>
                    <li>
                        <a class="page-scroll" href="vanprocess.php"><i class="fa fa-bars fa-lg"></i><font color="#798481" size="4">&nbsp; ขั้นตอนการจองรถตู้</a></font>
                    </li>
                </ul>

            <!-- /.navbar-collapse -->
        <!-- /.container -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                      <li>
                            <a href="viewcalendar.php"><i class="fa fa-calendar-o fa-lg"></i><font color="#798481" size="4">&nbsp; ข้อมูลแบบปฏิทิน</a></font>
                        </li>
                        <br>
                        <li>
                            <a href="statsvan.php"><i class="fa fa-bar-chart fa-lg"></i><font color="#798481" size="4"> &nbsp; สถิติการใช้รถยนต์</a></font>
                        </li>
                        <br>
                        <li>
                            <a href="home.php"><i class="fa fa-arrow-circle-left fa-lg"></i><font color="#798481" size="4"> &nbsp; กลับ</a></font>
                        </li>
                        <li class="btn-danger divider" style="height:3px;"></li>
                               <br>
                               <li>
                               <font color="#798481" size="4"> &nbsp; ยินดีต้อนรับ:</a></font>
                                     <?php  echo $_SESSION["user_name"];?>

                               <br>
                               <a href="logout.php"><button class="btn btn-danger"><i class="fa fa-sign-out fa-fw"></i>ออกจากระบบ</button></a>
                            </li>
                            <li class="btn-danger divider" style="height:3px;"></li>

                   </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
    </div>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header alert btn-info"><i class="fa fa-list-alt fa-fw"></i>&nbsp; รายการจองรถตู้</h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            &nbsp;
            <div class="col-lg-12">
                <table class="table table-bordered">
                    <thead class="thead-default">
                    <tr>
                        <div class="col-lg-1"><th>ลำดับที่</th></div>
                        <div class="col-lg-3"><th>ชื่อผู้ขอใช้งาน</th></div>
                        <div class="col-lg-2"><th>เวลาไป</th></div>
                        <div class="col-lg-2"><th>เวลากลับ</th></div>
                        <div class="col-lg-4"><th>ภารกิจ</th></div>
                        <div class="col-lg-4"><th>รถตู้คันที่</th></div>
                        <div class="col-lg-4"><th>สถานะ</th></div>
                        <div class="col-lg-4"><th></th></div>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $no =1;
                    while ( $row = $result->fetch_assoc()) {
                        echo
                        "<tr>
                    <th>{$no}</th>
                    <th>{$row['name']}</th>
                    <th>{$row['go']}</th>
                    <th>{$row['back']}</th>
                    <th>{$row['task']}</th>
                    <th>{$row['vanNum']}</th>
                    <th>{$row['status']}</th>
                    <th><a class=\"btn btn-primary\" href=\"accept.php?id={$row['id']}\">แก้ไข</a></th>
                    </tr>\n";
                        $no += 1;
                    }
                    ?>
                    </tbody>
                </table>
            </div>

            <!-- /.row -->

            <!-- /.row -->
    </div>

    <!-- /#wrapper -->
    </nav>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
<?php
}else {
    header("Location:index.php");
}?>
