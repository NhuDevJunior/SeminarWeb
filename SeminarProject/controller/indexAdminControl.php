<?php
	 // session_start();
	 include("../controller/connection.php");
  $sql="";
  if(isset($_POST["search"])&&!empty($_POST["search"]))
  {
	$sql = 'select * from guest where nameGuest like "%'.$_POST['search'].'%" ';
  }
  else
  {
  $sql = "select * from guest";
  }
	$result = mysqli_query($con, $sql);
  $list = [];
  while ($row = mysqli_fetch_array($result, 1)) {
    $list[] = $row;
  }
?>