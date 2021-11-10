<?php
     // ob_start();
     session_start();
     include("../controller/connection.php");
     
     if(isset($_POST["submit"]))
     {
        if(isset($_POST['name'])&&isset($_POST['password']))
        {
            $username = $_POST["name"];
            $password = $_POST["password"];
            $sql = "select * from admin where username = '$username' and password = '$password'";
            $result = mysqli_query($con, $sql);
            // Associative array
            $row = mysqli_fetch_assoc($result);
            mysqli_free_result($result);
            mysqli_close($con);
            if($row)
            {
            // printf ("%s (%s)\n", $row["nameGuest"], $row["ageGuest"]);
                $_SESSION["dataAdmin"] = $row;
                $_SESSION["usernameAdmin"] = $row["username"];
                header("location:indexAdmin.php");

            }
            else
            {
                header("location:loginAdmin.php?Invalid= Tên đăng nhập hoặc mật khẩu không đúng. Xin thử lại!");
                exit();
            }
        }
        // $username = $_POST["username"];
        // $password = $_POST["password"];
        // $sqlLogin ="SELECT * FROM guest WHERE username= '$username' AND password = '$password' ";
        // $result = mysql_query($con,$sqlLogin);
        // $row = mysqli_fetch_row($result);
        // if(count($row))
        // {
        //     $_SESSION("login") = $row;
        //     header("location:index.php");
        // }
        // echo "working ok";
     }
     // else
     // {
     //     echo "not working";
     // }
?>