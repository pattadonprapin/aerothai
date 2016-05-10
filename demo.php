
<html>
	<head>
		<meta charset="UTF-8">
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">>
		<link rel="stylesheet" href="css/graph.css">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/logo-nav.css" rel="stylesheet">
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
		<nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="margin-bottom: 0">
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
			<div class="navbar-default sidebar" role="navigation">
				<div class="sidebar-nav navbar-collapse">
					<ul class="nav" id="side-menu">

						<li>
							<a href="viewcalendar.php"><i class="fa fa-calendar-o fa-lg"></i><font color="#798481" size="4">&nbsp; ยืนยันภาระกิจ</a></font>
						</li>
						<br>
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
				<!-- /.sidebar-collapse -->
			</div>
			<div id="page-wrapper">
				<div class="row">

					<div class="col">
						<div id="population_chart" data-sort="false" data-width="800" class="jChart chart-lg" name="สถิติการใช้รถตู้ของวันที่">
							<div class="define-chart-row" data-color="#84d6ff" title="รถตู้คันที่ 1">14</div>
							<div class="define-chart-row" data-color="#38BCFF" title="รถตู้คันที่ 2">8</div>
							<div class="define-chart-row" data-color="#00A9FF" title="รถตู้คันที่ 3">10</div>
							<div class="define-chart-row" data-color="#008DD3" title="รถตู้คันที่ 4">16</div>
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
		