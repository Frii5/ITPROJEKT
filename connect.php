<?php
$server = 'localhost';
$username   = "root";
$password   = "";
$database   = 'itprojektdb';

$con = mysqli_connect($server,$username,$password,$database);

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


mysqli_select_db($con,$database);

?>
