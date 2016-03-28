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
                <a class="navbar-brand" href="index.php">
                    <img src = "image/band.png" width="250" height="50" >
                </a>
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
                            <a href="viewtable.php"><i class="fa fa-table fa-lg"></i><font color="#798481" size="4"> &nbsp; ข้อมูลแบบตาราง</a></font>
                        </li>
                        <br>
                        <li>
                            <a href="statsvan.php"><i class="fa fa-bar-chart fa-lg"></i><font color="#798481" size="4"> &nbsp; สถิติการใช้รถยนต์</a></font>
                        </li>
                        <br>
                        <li>
                            <a href="index.php"><i class="fa fa-arrow-circle-left fa-lg"></i><font color="#798481" size="4"> &nbsp; กลับสู่หน้าหลัก</a></font>
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
                    <h3 class="page-header alert btn-info"><i class="fa fa-bar-chart fa-fw"></i>&nbsp; สถิติการใช้รถยนต์</h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
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
