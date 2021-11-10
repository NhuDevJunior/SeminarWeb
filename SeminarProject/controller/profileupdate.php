<?php
    session_start();
    include("../controller/connection.php");
    $dataUser = $_SESSION["dataUser"];
    function validate($data){
     		$data = trim($data);
     		$data = htmlspecialchars($data);
     		$data = stripcslashes($data);
     		return $data;
        
    }
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
    if(isset($_POST["backtohome"]))
    {
    	header("location:index.php");
    	exit();
    }
    if(isset($_POST["update"]))
    {
    	// echo "nhu";
    	if(empty($_POST["name"]))
    	{
    		header("location:profile.php?error=Trường Tên bị bỏ trống!");
    		exit();
    	}
    	elseif (empty($_POST["phone"])) {
    		header("location:profile.php?error=Trường Số điện thoại bị bỏ trống!");
    		exit();
    	}
    	elseif (empty($_POST["age"])) {
    		header("location:profile.php?error=Trường tuổi bị bỏ trống!");
    		exit();
    	}
    	elseif (empty($_POST["address"])) {
    		header("location:profile.php?error=Trường địa chỉ bị bỏ trống!");
    		exit();
    	}
    	elseif (empty($_POST["email"])) {
    		header("location:profile.php?error=Trường email bị bỏ trống!");
    		exit();
    	}
    	elseif (empty($_POST["sex"])) {
    		header("location:profile.php?error=Trường sex bị bỏ trống!");
    		exit();
    	}
    	elseif (empty($_POST["password"])) {
    		header("location:profile.php?error=Trường password bị bỏ trống!");
    		exit();
    	}
    	else{
    		if(!is_numeric($_POST["age"]))
    		{
    		header("location:profile.php?error=Tuổi phải là một số!");
    		exit();
    	    }
    	    elseif (!is_numeric($_POST["phone"])) {
    		header("location:profile.php?error=số điện thoại chỉ bao gồm các số!");
    		exit();

    	    }
    	    elseif(checkmail($_POST["email"])==false)
    	    {
    		header("location:profile.php?error=mail cần có kí tự @");
    		exit();
    	    }
    	    else
    	    {
    	    $nameGuest = $_POST["name"];
    	    $ageGuest = $_POST["age"];
    	    $phoneGuest = $_POST["phone"];
    	    $mailGuest = $_POST["email"];
            $sexGuest = $_POST["sex"];
            $password = $_POST["password"];
            $addressGuest = $_POST["address"];
            $id_guest = $dataUser['id_guest'];
		    $sql = "update guest set nameGuest='$nameGuest',ageGuest='$ageGuest',phoneGuest='$phoneGuest',mailGuest='$mailGuest',addressGuest='$addressGuest',sexGuest='$sexGuest',password='$password' where id_guest=$id_guest";
			$result = mysqli_query($con, $sql);
		    if($result)
            {
            $dataUser["nameGuest"] = $nameGuest;
            $dataUser["ageGuest"] = $ageGuest;
            $dataUser["phoneGuest"] = $phoneGuest;
            $dataUser["addressGuest"] = $addressGuest;
            $dataUser["sexGuest"] = $sexGuest;
            $dataUser["mailGuest"] = $mailGuest;
            $dataUser["password"] = $password;
            unset($_SESSION["dataUser"]);
            $_SESSION["dataUser"] = $dataUser;
            // session_destroy();
            $_SESSION["dataUser"] = $dataUser;
            // $updatedata = $_SESSION["dataUser"];
            // echo $dataUser["nameGuest"];
    		header("location:profile.php?successfull=cập nhật thành công!");
    		exit();  
		    }
		    else{
    		header("location:profile.php?error=cập nhật thất bại do database!");
    		exit();  
		    }
 	    	
    	    }
    	}
    }
?>