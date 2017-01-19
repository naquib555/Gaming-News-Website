<?php include('connect.php');

	$username = $_POST['username'];
	$password = $_POST['password'];

	$username = stripslashes($username);
	$password = stripslashes($password);

	$sql = "SELECT * FROM login WHERE username = '$username' and password = '$password'";

	$result = mysqli_query($conn, $sql);
	$data = mysqli_fetch_array($result);

	$count = mysqli_num_rows($result);

	if($count == 1) {
		session_start();
		$_SESSION['username'] = $username;
		$_SESSION['id'] = $data['idlogin'];
		$_SESSION['usertype'] = $data['usertype'];
		$_SESSION['active'] = $data['active'];
		$wrongEntry = false;
		if($_SESSION['usertype'] == 1)
			header("location:index.php");
		else 
			header("location:adminPanel.php");
	} else {
		$wrongEntry = true;
		?>
			<script type="text/javascript">alert("wrong Username or Password");</script>
		<?php
		header("location:index.php");
	}
?>