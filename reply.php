<?php include('connect.php');

session_start();
	$userid = (int)$_SESSION['id'];
	$newsid = (int)$_GET['newsid'];
	$commentid = (int)$_GET['commentid'];

	$username = $_SESSION['username'];
	$reply = $_POST['reply'];

	$query = mysqli_query($conn, "INSERT INTO reply(username, reply, comment_idforum, comment_info_news_id_news, iduser) VALUES('$username', '$reply', $commentid, '$newsid','$userid')");
	
	if($query) {
		header("location:news_details.php?id=$newsid");
	} else {
		
	}

?>