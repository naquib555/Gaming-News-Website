<?php include('connect.php');
	$username = mysql_real_escape_string($_POST['username']);
	$query = mysqli_query($conn, "SELECT * FROM login where username='$username'");
	$row = mysql_num_rows($query);

	if ($row > 0) {
		echo 0;
	} else {
		echo 1;
	}
?>