<?php include('connect.php');
	
	$id = $_GET['id'];
	$approval = $_POST['approve'];
	
	$query = mysqli_query($conn, "UPDATE reply SET approved=$approval where idreply=$id");
	header('location:adminPanel.php');
?>