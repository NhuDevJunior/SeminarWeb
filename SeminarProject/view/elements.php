<?php
   // ob_start();
   include("../controller/profileAdmin.php");
   // include("../controller/elementControl.php");
   // session_start();
   if(!isset($_SESSION["usernameAdmin"]))
   {
   	header("location:loginAdmin.php");
   }
   $dataAdmin = $_SESSION["dataAdmin"];
   
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Lumino - Dashboard</title>
	<link href="../lumino/css/bootstrap.min.css" rel="stylesheet">
	<link href="../lumino/css/font-awesome.min.css" rel="stylesheet">
	<link href="../lumino/css/datepicker3.css" rel="stylesheet">
	<link href="../lumino/css/styles.css" rel="stylesheet">
	
	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="../lumino/js/html5shiv.js"></script>
	<script src="../lumino/js/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
					<a class="navbar-brand" href="#"><span>Trang</span> Quản Trị</a>
				
			</div>
		</div><!-- /.container-fluid -->
	</nav>
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<a href="#">
			<div class="profile-userpic">
				<img src="http://placehold.it/50/30a5ff/fff" class="img-responsive" alt="">
			</div>
			<div class="profile-usertitle">
				<div class="profile-usertitle-name"><?php echo $_SESSION["usernameAdmin"]?></div>
				<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
			</div>
			<div class="clear"></div>
		</a>
		</div>
		<div class="divider"></div>
		<!-- <form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form> -->
		<ul class="nav menu">
			<li><a href="indexAdmin.php"><em class="fa fa-dashboard">&nbsp;</em> Quản lý người dùng</a></li>
			<li><a href="widgets.php"><em class="fa fa-calendar">&nbsp;</em> Widgets</a></li>
			<li><a href="charts.php"><em class="fa fa-bar-chart">&nbsp;</em> Charts</a></li>
			<li class="active"><a href="elements.php"><em class="fa fa-toggle-off">&nbsp;</em>Trang cá nhân</a></li>
			<li><a href="panels.php"><em class="fa fa-clone">&nbsp;</em> Alerts &amp; Panels</a></li>
			<li><a href="logoutAdmin.php"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
		</ul>
	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Trang cá nhân</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Trang cá nhân</h1>
			</div>
		</div><!--/.row-->
		        <div class="col-md-3">
		        	
		        </div>
		        <div class="col-md-5">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Trang cá nhân</h4>
                </div>
                <form  method="post">
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">Họ tên</label><input type="text" class="form-control" name="name" value="<?php echo $dataAdmin["nameAdmin"]?>" placeholder="tên" ></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12" style="margin-top: 5%;"><label class="labels">Số điện thoại</label><input type="text" class="form-control" name="phone" placeholder="điện thoại" value="<?php echo $dataAdmin["phoneAdmin"]?>"></div>
                    <div class="col-md-12" style="margin-top: 5%;"><label class="labels">Email ID</label><input type="text" class="form-control" name="email" placeholder="email" value="<?php echo $dataAdmin["mailAdmin"]?>"></div>
                    <div class="col-md-12" style="margin-top: 5%;"><label class="labels">Mật khẩu</label><input type="text" class="form-control" name="password" placeholder="mật khẩu" value="<?php echo $dataAdmin["password"]?>"></div>
                </div>
                <div class="row mt-3" style="margin-top: 5%;">
                    <div class="col-md-6"><label class="labels">Giới tính</label><input type="text" class="form-control" name="sex" placeholder="giới tính" value="<?php echo $dataAdmin["sexAdmin"]?>"></div>
                    <div class="col-md-6"><label class="labels">Tuổi</label><input type="text" class="form-control" name="age" value="<?php echo $dataAdmin["ageAdmin"]?>" placeholder="tuổi"></div>
                    <div class="col-md-12" style="margin-top: 10%;">
                    <?php
                    if(@$_GET['error'])
                    {
                        ?>
                        <div class="alert alert-danger" role="alert"><?php echo $_GET['error']?></div>
                        <?php
                    }
                    elseif(@$_GET['successfull'])
                    {
                     ?>
                        <div class="alert alert-success" role="alert"><?php echo $_GET['successfull']?></div>
                        <?php
                    }
                ?>
                    </div>
                </div>

                <div class="mt-5 text-center" style="margin-top: 5%;">            
                <!-- <form  method="post"> -->
                <input type="submit" class="btn btn-primary profile-button" name="update" value="Lưu thay đổi" />
                </div>
               </form>

            </div>
		</div>
		
	
	</div>	<!--/.main-->
	
	<script src="../lumino/js/jquery-1.11.1.min.js"></script>
	<script src="../lumino/js/bootstrap.min.js"></script>
	<script src="../lumino/js/chart.min.js"></script>
	<script src="../lumino/js/chart-data.js"></script>
	<script src="../lumino/js/easypiechart.js"></script>
	<script src="../lumino/js/easypiechart-data.js"></script>
	<script src="../lumino/js/bootstrap-datepicker.js"></script>
	<script src="../lumino/js/custom.js"></script>
		
</body>
</html>