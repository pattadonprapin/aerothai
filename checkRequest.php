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
    <link href="css/search.css" rel="stylesheet">
    <link href="js/locales/search.js" rel="stylesheet">
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
    <meta http-equiv="refresh" content="10" />
    <![endif]-->

    <?php
    include 'connectDB.php';
    $status = "Waiting";
    $result = $mysqli->query("SELECT * FROM `request`");
    ?>
    <!--<meta http-equiv="refresh" content="5" />-->
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
                <a class="hidden" href="bookinglist.php"><i class="fa fa-list-alt fa-lg"></i><font color="#798481" size="4">&nbsp; รายการจองรถตู้</a></font>
            </li>
            <li>
                <a class="hidden" href="vandetail.php"><i class="fa fa-bus fa-lg"></i><font color="#798481" size="4">&nbsp; ข้อมูลรถตู้</a></font>
            </li>
            <li>
                <a class="hidden" href="vanprocess.php"><i class="fa fa-bars fa-lg"></i><font color="#798481" size="4">&nbsp; ขั้นตอนการจองรถตู้</a></font>
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
                        <a href="index.php"><i class="fa fa-arrow-circle-left fa-lg"></i><font color="#798481" size="4"> &nbsp; กลับสู่หน้าหลัก</a></font>
                    </li>
                    <li class="btn-danger divider" style="height:3px;"></li>
                    <br>

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
        <div class="form-group pull-right">
            <input type="text" class="search form-control" placeholder="พิมตัวอักษรเพื่อค้นหา">
        </div>
        <span class="counter pull-right"></span>
        <table class="table table-hover table-bordered results">
            <thead>
            <tr>
                <th>ลำดับ</th>
                <th class="col-md-3 col-xs-3">ชื่อผู้ขอใช้งาน</th>
                <th class="col-md-3 col-xs-3">เวลาไป</th>
                <th class="col-md-3 col-xs-3">เวลากลับ</th>
                <th class="col-md-5 col-xs-5">ภารกิจ</th>
                <th class="col-md-3 col-xs-3">รถตู้คันที่</th>
                <th class="col-md-2 col-xs-2">สถานะ</th>

            </tr>
            <tr class="warning no-result">
                <td colspan="4"><i class="fa fa-warning"></i> No result</td>
            </tr>

            </thead>
            <tbody class="searchable">
            <?php
            $no =1;
            while ( $row = $result->fetch_assoc()) {
                echo
                "<tr>
                    <th>{$no}</th>
                    <td>{$row['name']}</td>
                    <td>{$row['go']}</td>
                    <td>{$row['back']}</td>
                    <td>{$row['task']}</td>
                    <td>{$row['vanNum']}</td>
                    <td>{$row['status']}</td>
                    </tr>";
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
<script>
    $(document).ready(function() {
        $(".search").keyup(function () {
            var searchTerm = $(".search").val();
            var listItem = $('.results tbody').children('tr');
            var searchSplit = searchTerm.replace(/ /g, "'):containsi('")

            $.extend($.expr[':'], {'containsi': function(elem, i, match, array){
                return (elem.textContent || elem.innerText || '').toLowerCase().indexOf((match[3] || "").toLowerCase()) >= 0;
            }
            });

            $(".results tbody tr").not(":containsi('" + searchSplit + "')").each(function(e){
                $(this).attr('visible','false');
            });

            $(".results tbody tr:containsi('" + searchSplit + "')").each(function(e){
                $(this).attr('visible','true');
            });

            var jobCount = $('.results tbody tr[visible="true"]').length;
            $('.counter').text(jobCount + ' item');

            if(jobCount == '0') {$('.no-result').show();}
            else {$('.no-result').hide();}
        });
    });
</script>
</html>

