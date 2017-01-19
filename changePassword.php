<?php include('connect.php');

session_start();
	$id = (int)$_SESSION['id'];
	$new_pass = $_POST['newpass'];
	$con_pass = $_POST['conpass'];
	if($new_pass == $con_pass) {
		$query = mysqli_query($conn, "UPDATE login SET password='$new_pass' where idlogin = $id");

		if($query) {
			?>
			<h1>Updated Successfully</h1>
			<a href="user_profile.php">return to profile</a>
		<?php 
		}
	} else {
		?>
		<h1>Password Doesnot match</h1>
		<a href="user_profile.php">return to profile</a>
	<?php
	}

?>