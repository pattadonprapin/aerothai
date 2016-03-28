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

                    
                </ul>
                <br>

            <!-- /.navbar-collapse -->
        <!-- /.container -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="home.php"><i class="fa fa-arrow-circle-left fa-lg"></i><font color="#798481" size="4"> &nbsp; กลับสู่หน้าหลัก</a></font>
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
                <h3 class="page-header alert btn-info"><i class="fa fa-list-alt fa-fw"></i>&nbsp; แบบฟอร์มการขอใช้รถตู้</h3>
            </div>

            <div class="col-lg-9">
                <form role="form" action="#" method="post" name="booking">
                    <div class="form-group form-group-lg">
                      <h3 for="disabledSelect">ต้องการขอใช้รถตู้คันที่</h3>
                      <select id="disabledSelect" class="form-control input-lg">
                        <option>คันที่ 1</option>                              
                        <option>คันที่ 2</option>
                        <option>คันที่ 3</option>
                        <option>คันที่ 4</option>
                    </select>
                    </div>

                    <div class="form-group form-group-lg">
                         <h3 for="disabledTextInput">ภาระกิจ</h3>
                        <textarea class="form-control" id="disabledTextInput" rows="5" placeholder="กรอกภาระกิจ"></textarea>
                    </div>

                    <h3 class="control-label" for="date">วันออกเดินทาง</h3>
                    <div class="input-group form-group-lg">
                        <div class="input-group-addon">
                           <i class="fa fa-calendar">
                           </i>
                       </div>
                       <input class="form-control" id="date" name="date" placeholder="MM/DD/YYYY" type="text"/>
                   </div>

                    
                   <h3 class="control-label" for="date">วันเดินกลับ</h3>
                    <div class="input-group form-group-lg">
                        <div class="input-group-addon">
                           <i class="fa fa-calendar">
                           </i>
                       </div>
                       <input class="form-control" id="date" name="date" placeholder="MM/DD/YYYY" type="text"/>
                   </div>
                   <br>  

                   <div align="center">            
                    <button type="submit" class="btn btn-info btn-lg">ยืนยัน</button>
                   </div>
                </form>
                   <br>      
                   <br>      

            </div>
        </div>
    </div>

    <!-- /#wrapper -->
    </nav>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

    <!-- Include Date Range Picker -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

    <script>
    $(document).ready(function(){
        var date_input=$('input[name="date"]'); //our date input has the name "date"
        var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
        date_input.datepicker({
            format: 'mm/dd/yyyy',
            container: container,
            todayHighlight: true,
            autoclose: true,
        })
    })
    </script>





</body>

</html>
