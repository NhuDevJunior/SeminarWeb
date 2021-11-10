<?php
    session_start();
    include("../controller/connection.php");
    $dataAdmin = $_SESSION["dataAdmin"];
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
    // if(isset($_POST["backtohome"]))
    // {
    // 	header("location:index.php");
    // 	exit();
    // }
    if(isset($_POST["update"]))
    {
    	// echo "nhu";
    	if(empty($_POST["name"]))
    	{
    		header("location:elements.php?error=Trường Tên bị bỏ trống!");
    		exit();
    	}
    	elseif (empty($_POST["phone"])) {
    		header("location:elements.php?error=Trường Số điện thoại bị bỏ trống!");
    		exit();
    	}
    	elseif (empty($_POST["age"])) {
    		header("location:elements.php?error=Trường tuổi bị bỏ trống!");
    		exit();
    	}
    	elseif (empty($_POST["email"])) {
    		header("location:elements.php?error=Trường email bị bỏ trống!");
    		exit();
    	}
    	elseif (empty($_POST["sex"])) {
    		header("location:elements.php?error=Trường email bị bỏ trống!");
    		exit();
    	}
    	elseif (empty($_POST["password"])) {
    		header("location:elements.php?error=Trường email bị bỏ trống!");
    		exit();
    	}
    	else{
    		if(!is_numeric($_POST["age"]))
    		{
    		header("location:elements.php?error=Tuổi phải là một số!");
    		exit();
    	    }
    	    elseif (!is_numeric($_POST["phone"])) {
    		header("location:elements.php?error=số điện thoại chỉ bao gồm các số!");
    		exit();

    	    }
    	    elseif(checkmail($_POST["email"])==false)
    	    {
    		header("location:elements.php?error=mail cần có kí tự @");
    		exit();
    	    }
    	    else
    	    {
    	    $nameAdmin = $_POST["name"];
    	    $ageAdmin = $_POST["age"];
    	    $phoneAdmin = $_POST["phone"];
    	    $mailAdmin = $_POST["email"];
            $sexAdmin = $_POST["sex"];
            $password = $_POST["password"];
            // $addressGuest = $_POST["address"];
            $id_admin = $dataAdmin['id_admin'];
		    $sql = "update admin set nameAdmin='$nameAdmin',ageAdmin='$ageAdmin',phoneAdmin='$phoneAdmin',mailAdmin='$mailAdmin',sexAdmin='$sexAdmin',password='$password' where id_admin='$id_admin'";
			$result = mysqli_query($con, $sql);
		    if($result)
            {
            $dataAdmin["nameAdmin"] = $nameAdmin;
            $dataAdmin["ageAdmin"] = $ageAdmin;
            $dataAdmin["phoneAdmin"] = $phoneAdmin;
            // $dataUser["addressGuest"] = $addressGuest;
            $dataAdmin["sexAdmin"] = $sexAdmin;
            $dataAdmin["mailAdmin"] = $mailAdmin;
            $dataAdmin["password"] = $password;
            unset($_SESSION["dataAdmin"]);
            $_SESSION["dataAdmin"] = $dataAdmin;
            // session_destroy();
            $_SESSION["dataAdmin"] = $dataAdmin;
            // $updatedata = $_SESSION["dataUser"];
            // echo $dataUser["nameGuest"];
    		header("location:elements.php?successfull=cập nhật thành công!");
    		exit();  
		    }
		    else{
    		header("location:elements.php?error=cập nhật thất bại do database!");
    		exit();  
		    }
 	    	
    	    }
    	}
    }
?>