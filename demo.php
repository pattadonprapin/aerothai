
<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ระบบจองรถตู้-วิทยุการบินเชียงใหม่</title>

	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/graph.css">

	<link href="css/bootstrap.min.css" rel="stylesheet">

	<link href="css/sb-admin-2.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

	<script src="//code.jquery.com/jquery-2.1.1.min.js"></script>
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
	<script src="https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js"></script>
	<script src="js/graph.js"></script>
	<script>
	$(document).ready(function() {
		$("#population_chart").jChart({x_label:"ชั่วโมงการใช้งาน"});
		$("#colors_chart").jChart();
	});
	</script>

	<?php
	include ('connectDB.php');


	$result = $mysqli->query("SELECT * FROM `vandetail` ");
	?>
</head>
<style>
.jumbotron {
	padding-top: 20px;
	padding-bottom: 10px;
	color: white;
	background-color: #4570a5;
}
.jumbotron>h1 {
	font-size: 75pt;
	font-family: "Times New Roman", Times, serif;
	margin: 0;
}
.jumbotron>p {
	margin: 0;
}
</style>

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
             <ul class="nav navbar-top-links navbar-center">
                   
                </ul>

				<div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">

							<li>
								<a href="viewcalendar.php"><i class="fa fa-calendar-o fa-lg"></i><font color="#798481" size="4">&nbsp; ยืนยันภาระกิจ</a></font>
							</li>
							<li>
								<a href="home.php"><i class="fa fa-arrow-circle-left fa-lg"></i><font color="#798481" size="4"> &nbsp; กลับสู่หน้าหลัก</a></font>
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
				</div>
					<!-- /.sidebar-collapse -->
				</div>
				<div id="page-wrapper">
					<div class="row">

						<div class="col">
							<div id="population_chart" data-sort="false" data-width="800" class="jChart chart-lg" name="สถิติการใช้รถตู้ของวันที่">
								<?php

								while ( $row = $result->fetch_assoc()) {
								echo
								"
								<div class=\"define-chart-row\" title=\"รถตู้คันที่ {$row['number']}\">14</div>
								
								";

								}
								?>
								<div class="define-chart-footer">5</div>
								<div class="define-chart-footer">10</div>
								<div class="define-chart-footer">15</div>
								<div class="define-chart-footer">20</div>
								<div class="define-chart-footer">25</div>

							</div>
						</div>
						<!-- /.col-lg-12 -->
					</div>
					<!-- /.row -->
				</div>

			</nav>
		</div>
	</body>
	</html>
