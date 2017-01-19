<?php include('connect.php');
	
	$id = $_GET['id'];
	$approval = $_POST['approve'];
	
	$query = mysqli_query($conn, "UPDATE login SET active=$approval where idlogin=$id");
	header('location:adminPanel.php');
?>

