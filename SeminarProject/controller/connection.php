<?php
  $con = mysqli_connect('localhost','workshop','210699','workshop');
  if(!$con)
  {
  	die('please check your connection'.mysql_error());
  }
?>