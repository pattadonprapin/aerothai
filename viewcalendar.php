
<!DOCTYPE html>
<html lang="en">

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
    <link href="css/sb-admin-2.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/timeline.css" rel="stylesheet">

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
    $result = $mysqli->query("SELECT * FROM `vandetail`");
    ?>

</head>

<body>

<div id="wrapper">
    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

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
                    <li >
                        <?php include 'clock.php'?>
                    </li>

                    <li>
                        <a href="home.php"><i class="fa fa-bus fa-lg"></i><font color="#798481" size="4">&nbsp; กลับสู่หน้าหลัก</a></font>
                    </li>
                    <li class="btn-danger divider" style="height:3px;"></li>
                    <?php


                    error_reporting(0);
                    if ($_SESSION["user_id"] != null){
                        ?>
                        <?php echo'
                               <br>
                               <li>
                               <font color="#798481" size="4"> &nbsp; ยินดีต้อนรับ:</a></font>';?>
                        <?php  echo $_SESSION["user_name"];?>
                        <?php echo'
                               <br>
                               <a href="logout.php"><button class="btn btn-danger"><i class="fa fa-sign-out fa-fw"></i>ออกจากระบบ</button></a>
                            </li>';?>

                    <?php }else{
                        echo'  <div class="input-group custom-search-form">
                                <form role="form" action="check_login.php" method="post" name="login">
                                      <i class="glyphicon glyphicon-log-in"></i><font color="#798481" size="4"> &nbsp; Admin</a></font>
                                      <div class="form-group input-group">
                                          <span class="input-group-addon"><i class="fa fa-user"></i>
                                          </span>
                                          <input type="text" class="form-control" name="txtUsername" placeholder="Username" required>
                                      </div>

                                      <div class="form-group input-group">
                                          <span class="input-group-addon"><i class="fa fa-key"></i>
                                          </span>
                                          <input type="password" class="form-control" name="txtPassword" placeholder="Password" required>
                                      </div>
                                      &nbsp;
                                      <button type="submit" class="btn btn-success "><i class="fa fa-sign-in fa-fw"></i>&nbsp;เข้าสู่ระบบ</button>

                                </form>
                          </div>';
                    } ?>

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
            <h3 class="page-header alert btn-info"><i class="fa fa-comment fa-fw"></i>&nbsp; รถตู้ทั้งหมด</h3>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <?php
        while ( $row = $result->fetch_assoc()) {
            echo "  <div class=\"col-lg-6 col-md-9\">
                    <div class=\"panel panel-primary\">
                        <div class=\"panel-heading\">
                            <div class=\"row\">
                                <div class=\"col-xs-3\">
                                    <i class=\"fa fa-bus fa-5x\"></i>
                                </div>
                                <div class=\"col-xs-9 text-right\">
                                    <div class=\"huge\">รถตู้คันที่ {$row[number]}</div>
                                </div>
                            </div>
                        </div>
                        <a href=\"vanFinish.php?id={$row[number]}\">

                    <div class=\"panel-footer\">
                                  <img src = \"image/van1.png\" width=\"250\" height=\"160\" >
                                <span class=\"pull-right\"><i class=\"fa fa-arrow-circle-right\"></i></span>
                                <div class=\"clearfix\"></div>
                            </div>
                        </a>
                    </div>
                </div>";

        }
        ?>

    </div>
    </nav>

</div>

<!-- /#wrapper -->
</nav>
<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>



</body>

</html>
