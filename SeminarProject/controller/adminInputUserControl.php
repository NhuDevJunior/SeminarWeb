<?php
   session_start();
   include("../controller/connection.php");
    function checkmail($data){
    	$pos = strpos($data,"@");
    	if($pos==false)
    	{
    		return false;
    	}
    	else
    	{
    		return true;
    	}
    }
    function validate($data)
     	{
     		$data = trim($data);
     		$data = htmlspecialchars($data);
     		$data = stripcslashes($data);
     		$data = str_replace('\'', '\\\'', $data);
     		return $data;
     	}
  
     	// if()

     
   if(isset($_POST["backtoadmin"]))
   {
   	header("location:indexAdmin.php");
   }
   if(isset($_POST["add"]))
   {
   	if(isset($_POST["name"])&&isset($_POST["password"])&&isset($_POST["username"])&&isset($_POST["email"])&&isset($_POST["sex"])&&isset($_POST["age"])&&isset($_POST["phone"])&&isset($_POST["address"]))
     {
     	// echo "tồn tại hết nhé";
     	if(empty($_POST["name"]))
    	{
    		header("location:adminInputUser.php?error=Trường Tên bị bỏ trống!");
    		exit();
    	}
    	elseif (empty($_POST["username"])) {
            header("location:adminInputUser.php?error=Trường username bị bỏ trống!");
    		exit();
    	}
    	elseif (empty($_POST["phone"])) {
    		header("location:adminInputUser.php?error=Trường Số điện thoại bị bỏ trống!");
    		exit();
    	}
    	elseif (empty($_POST["age"])) {
    		header("location:adminInputUser.php?error=Trường tuổi bị bỏ trống!");
    		exit();
    	}
    	elseif (empty($_POST["address"])) {
    		header("location:adminInputUser.php?error=Trường địa chỉ bị bỏ trống!");
    		exit();
    	}
    	elseif (empty($_POST["email"])) {
    		header("location:adminInputUser.php?error=Trường email bị bỏ trống!");
    		exit();
    	}
    	elseif (empty($_POST["sex"])) {
    		header("location:adminInputUser.php?error=Trường sex bị bỏ trống!");
    		exit();
    	}
    	elseif (empty($_POST["password"])) {
    		header("location:adminInputUser.php?error=Trường password bị bỏ trống!");
    		exit();
    	}
    	else{
    		if(!is_numeric($_POST["age"]))
    		{
    		header("location:adminInputUser.php?error=Tuổi phải là một số!");
    		exit();
    	    }
    	    elseif (!is_numeric($_POST["phone"])) {
    		header("location:adminInputUser.php?error=số điện thoại chỉ bao gồm các số!");
    		exit();

    	    }
    	    elseif(checkmail($_POST["email"])==false)
    	    {
    		header("location:adminInputUser.php?error=mail cần có kí tự @");
    		exit();
    	    }
    	    else
    	    {
            // echo "bắt đầu code sql";
            $name = validate($_POST["name"]);
	     	$email = validate($_POST["email"]);
	     	$username = validate($_POST["username"]);
	     	$password = validate($_POST["password"]);
	     	$address = validate($_POST["address"]);
	     	$sex = validate($_POST["sex"]);
	     	$age = validate($_POST["age"]);
	     	$phone = validate($_POST["phone"]);
	     	$sql = "select * from guest where username = '$username'";
     		$result = mysqli_query($con,$sql);
     		if(mysqli_num_rows($result)>0)
     		{
              header("location:adminInputUser.php?error=Tên đăng nhập đã tồn tại !");
              exit();
     		}
     		else
     		{
     			$sql2 = "insert into guest(username, password, nameGuest, mailGuest,phoneGuest,addressGuest,ageGuest,sexGuest) values('$username', '$password', '$name', '$email','$phone','$address','$age','$sex')";
     			$result2 = mysqli_query($con,$sql2);
     			if($result2)
     			{
                  header("location:adminInputUser.php?successfull=Thêm người dùng thành công !");
                  exit();
     			}
     			else
     			{
	 	    	header("location:adminInputUser.php?error=lỗi databse");
	    		exit();
	    	     }
    	    }
    	    }
    	}
     }
     else{
     	echo "bị lỗi rồi nha";
     }
   }
?>