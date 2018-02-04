<?php

// Create connection
$con = mysqli_connect("localhost", "rema", "simeon08", "rema");
// za kirilica od baza
mysqli_query($con, "SET NAMES UTF8");
// Check connection
if (mysqli_connect_errno($con)) {
	echo "Failed to connect to MySQLI: " . mysqli_connect_error();
}
$host    = "localhost"; // Host name
$db_name = "rema";		// Database name
$db_user = "rema";		// Database user name
$db_pass = "simeon08";			// Database Password
$db_table= "product";		// Table name
$db_column = "product_name";	// Table column from which suggestions will get shown

 $conn = mysqli_connect($host,$db_user,$db_pass)or die(mysql_error());
         mysqli_select_db($db_name,$conn)or die(mysqli_error());

?>
