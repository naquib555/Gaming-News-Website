<?php include('connect.php');
	
	$id = $_GET['id'];
	$approval = $_POST['approve'];
	
	$query = mysqli_query($conn, "UPDATE comment SET approved=$approval where idforum=$id");
	header('location:adminPanel.php');
?>

