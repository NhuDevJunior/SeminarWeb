<?php
  $con = mysqli_connect('localhost','workshop','210699','workshop');
  // $query = "select * from guest where username = 'user123' and password = 'user123'";
	if (mysqli_connect_errno()) {
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	  exit();
	}
$row = [];
$id = '5';
$query = "select * from guest where id_guest =$id";
$result3 = mysqli_query($con,$query);
$row = mysqli_fetch_assoc($result3);
printf($row['nameGuest']);
	// $sql = "select * from guest";
	// $result = mysqli_query($con, $sql);
 //  $list = [];
 //  while ($row = mysqli_fetch_array($result, 1)) {
 //    $list[] = $row;
 //  }
 //  foreach ($list as $std) {
 //    printf($std["nameGuest"]);
 //  }
  // printf($row["nameGuest"]);
    // if($result)
    // {
    // 	echo "update thành công";
    // }
    // else{
    // 	echo "update thất bại";
    // }

	mysqli_close($con);
?>