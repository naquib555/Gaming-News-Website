<?php include('connect.php');
	session_start();

	$username = $_SESSION['username'];
	$userid = (int)$_SESSION['id'];
	$newsid = (int)$_GET['newsid'];
	

		$comment = $_POST['comment'];
		//$author = $_POST['author'];

		$query = mysqli_query($conn, "INSERT INTO comment(username, comment, info_news_id_news, iduser) VALUES('$username', '$comment', '$newsid','$userid')");
		
		if($query) {
			header("location:news_details.php?id=$newsid");
		} else {
			
		}

	
?>