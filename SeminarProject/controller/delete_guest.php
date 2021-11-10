<?php
   include("../controller/connection.php");
   if(isset($_POST["id_guest"]))
   {
   	$id_guest = $_POST["id_guest"];
   	$sql = "delete from guest where id_guest= ".$id_guest;
    $result = mysqli_query($con, $sql);
    echo "xóa người dùng thành công";
   }
?>