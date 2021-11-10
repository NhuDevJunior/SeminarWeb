<?php
     // on_start();
     session_start();
     include("../controller/connection.php");
     if(isset($_POST["submit"])){
     if(isset($_POST["name"])&&isset($_POST["newpassword"])&&isset($_POST["newusername"])&&isset($_POST["email"])&&isset($_POST["re_password"]))
     {
     	if(!isset($_POST["agree-term"]))
     	{
     		header("location:register.php?error=Bạn chưa đồng ý điều khoản");
     		exit();     		
     	}
     	function validate($data)
     	{
     		$data = trim($data);
     		$data = htmlspecialchars($data);
     		$data = stripcslashes($data);
     		return $data;
     	}
     	$name = validate($_POST["name"]);
     	$email = validate($_POST["email"]);
     	$newusername = validate($_POST["newusername"]);
     	$newpassword = validate($_POST["newpassword"]);
     	$re_password = validate($_POST["re_password"]);
     	// echo $newusername;
     	if($newpassword!=$re_password)
     	{
     		header("location:register.php?error=Mật khẩu xác thực không khớp");
     		exit();
     	}
     	else{
     		// echo "day la buoc inser database";
     		$sql = "select * from guest where username = '$newusername'";
     		$result = mysqli_query($con,$sql);
     		if(mysqli_num_rows($result)>0)
     		{
              header("location:register.php?error=Tên đăng nhập đã tồn tại !");
              exit();
     		}
     		else
     		{
     			$sql2 = "insert into guest(username, password, nameGuest, mailGuest) values('$newusername', '$newpassword', '$name', '$email')";
     			$result2 = mysqli_query($con,$sql2);
     			if($result2)
     			{
                  header("location:register.php?successfull=Đăng kí tài khoản thành công !");
                  exit();
     			}
     		}
     	}
     }
 }
?>