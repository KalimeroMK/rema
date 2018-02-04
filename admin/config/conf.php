<?php
// Create connection
$con=mysqli_connect("localhost","rema","simeon08","rema");

// Check connection
if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  mysqli_query($con, "SET NAMES UTF8");

?>