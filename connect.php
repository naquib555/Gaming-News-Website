<?php
	$db_host = "localhost";
	$db_username = "root";
	$db_password = "rootroot5";
	$db_name = "radar";

	$conn = new mysqli($db_host, $db_username, $db_password, $db_name);

	//$db=mysql_select_db($db_name, $conn) or die("Could not select database");
	
	if(!$conn) {
		die("Connection Failed: ". mysqli_connect_error());
	}
?>