<?php
   // ob_start();
   session_start();
   // if(!isset($_SESSION["login"]))
   // {
   //  header("location:login.php");
   // }\
   include("../controller/indexAdminControl.php");
   if(!isset($_SESSION["usernameAdmin"]))
   {
   	header("location:loginAdmin.php");
   }
   
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Giao diện quản trị viên</title>
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
			<li class="active"><a href="indexAdmin.php"><em class="fa fa-dashboard">&nbsp;</em> Quản lý người dùng</a></li>
			<li><a href="widgets.php"><em class="fa fa-calendar">&nbsp;</em> Widgets</a></li>
			<li><a href="charts.php"><em class="fa fa-bar-chart">&nbsp;</em> Charts</a></li>
			<li><a href="elements.php"><em class="fa fa-toggle-off">&nbsp;</em> Trang cá nhân</a></li>
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
				<li class="active">Quản lý người dùng</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Người dùng</h1>
			</div>
		</div><!--/.row-->
		
		<div class="container">
			<div class="panel panel-primary">
				<div class="panel-heading">
					Quản lí thông tin người dùng
<!-- 					<form method="post">
					<input type="text" name="search" class="form-control" style="margin-top: 10;margin-bottom: 10% placeholder='Tìm kiếm theo tên'">
					</form> -->
				</div>
				<div class="panel-body">
					<form method="post">
					<input type="text" name="search" class="form-control" style="margin-top: 5%;margin-bottom: 5%" placeholder='Tìm kiếm theo tên'>
					</form>
					<table class="table table-bordered">
						<thead>
							<tr>
								<th>Mã</th>
								<th>Họ và tên</th>
								<th>Tuổi</th>
								<th>Giới tính</th>
								<th>Email</th>
								<th>Điện thoại</th>
								<th>Địa chỉ</th>
								<th>Username</th>
								<th>Password</th>
								<th></th>
								<th></th>
							</tr>
							<tbody>
								<?php
								foreach ($list as $std) {
									$id_guest = $std["id_guest"];
									$nameGuest = $std["nameGuest"];
									$ageGuest = $std["ageGuest"];
									$sexGuest = $std["sexGuest"];
									$mailGuest = $std["mailGuest"];
									$phoneGuest = $std["phoneGuest"];
									$addressGuest = $std["addressGuest"];
									$username = $std["username"];
									$password = $std["password"];
									echo '<tr>
									<td>'.$id_guest.'</td>
									<td>'.$nameGuest.'</td>
									<td>'.$ageGuest.'</td>
									<td>'.$sexGuest.'</td>
									<td>'.$mailGuest.'</td>
									<td>'.$phoneGuest.'</td>
									<td>'.$addressGuest.'</td>
									<td>'.$username.'</td>
									<td>'.$password.'</td>
								<td><a href="adminEditUser.php?id='.$id_guest.'"><button class="btn btn-warning">Sửa</button></a></td>
								<td><button class="btn btn-danger" onclick = "deleteGuest('.$id_guest.')">Xóa</button></td>
								</tr>';
								}
								?>
<!-- 								<td><button class="btn btn-warning">Sửa</button></td>
								<td><button class="btn btn-danger">Xóa</button></td> -->
							</tbody>
						</thead>
					</table>
					<a href="adminInputUser.php">
					<button class="btn btn-success">Thêm</button>
					</a>
				</div>
			</div>
		</div>
	    
	</div>	<!--/.main-->
	<script type="text/javascript">
		function deleteGuest(id_guest)
		{
			option = confirm("bạn có muốn xóa người dùng này không")
			if(!option)
			{
				return;
			}
			console.log(id_guest)
			$.post('../controller/delete_guest.php',{
				'id_guest':id_guest
			},function(data){
				alert(data)
				location.reload()
			})
		}
	</script>
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