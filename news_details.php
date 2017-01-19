<?php include('connect.php');
	
	$id = $_GET['id'];

	$result = mysqli_query($conn, "SELECT * FROM info_news WHERE id_news = '$id'");
	$comment = mysqli_query($conn, "SELECT * FROM comment WHERE info_news_id_news = '$id'");
	$hitcount = mysqli_query($conn, "UPDATE info_news SET hitcount=hitcount+1 WHERE id_news = '$id'");
	$row_comment = mysqli_num_rows($comment);



	$data = mysqli_fetch_array($result);
	session_start();

	?>

	<!DOCTYPE html>
	<html>
	<head>
		<title></title>

		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">

		<link rel="stylesheet" type="text/css" href="css/index.css">
	</head>
	<body>

		<?php include('navigation_bar.php');
			navigation();
			//&commentid=<?php echo $data_comment['idforum'];
		?>




	<div class="page-header">
		<div class="container">
			<h1><?php echo $data['news_title']; ?></h1><br>
			<small>
				<span class="lead"><?php echo $data['news_author']; ?></span>
				<?php 
					$publishedDate = $data['news_published'];
					$dateCurrent = date("Y-m-d");
					$dateSplit = explode(" ", $publishedDate);
					$date1 = date_create($dateSplit[0]);
					$date2 = date_create($dateCurrent);
					//$diff = date_diff($date1, $date2);
					//$daysAgo = (int)$diff->format("%a");

					$start = $date1;
					$end = $date2;
					$days = round(($end->format('U') - $start->format('U')) / (60*60*24));
							
					$daysAgo = (int) $days;
					

					if($daysAgo < 30 && $daysAgo > 0)
						echo " ".$daysAgo. " days ago";
					else if($daysAgo >= 30) {
						echo (" ".$daysAgo % 29). " month ago";
					} else {
						echo " today at ".$dateSplit[1];
					}
				?>
			</small>
		</div>
		
	</div>
	
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<img src="<?php echo $data['image_path']; ?>" class="img-responsive">
		</div>
		<div class="col-md-2"></div>
	</div>
	

	<div class="container">
		<div class="row">
			<p class="lead"><?php echo $data['news_short_description']; ?></p>
			<p class="lead"><?php echo $data['news_content']; ?></p>
		</div>
	</div>

	<div class="jumbotron">
		<div class="container">
		<?php 
			if($row_comment == 0 && (isset($_SESSION['active']) && $_SESSION['active']==0)) {
		?>
			<h3>Be first to comment</h3>
  			<form class="form-horizontal" action="comment.php?newsid=<?php echo $id; ?>" method="POST">
  				<textarea class="form-control" name="comment" rows="3"></textarea>
  				<input type="submit" value="Comment"></input>
  			</form>
  		<?php
  			} else {
  				?>
  					<h4>Review Section</h4><hr>
  				<?php
  				while($data_comment = mysqli_fetch_array($comment)) {
  					//$userid = $data_comment['iduser'];
  					//$name = mysqli_query($conn, "SELECT username FROM login WHERE idlogin = '$userid'");

  					if($data_comment['approved'] == 1) {
  				?>


  					<div class="page-header">
  						<div class="container">
  							<div class="row" id="review-sec">
  								
  								
  									<h3><?php echo $data_comment['username']; ?></h3>
  									<p><?php echo $data_comment['comment']; ?></p>
  								
  							</div>

  							
  							
  					<?php
  						if(isset($_SESSION['username']) && !($_SESSION['active']==0)) {
  							$reply_query = mysqli_query($conn, "SELECT * FROM reply WHERE comment_idforum = $data_comment[idforum]");
  							
  							while($reply_data = mysqli_fetch_array($reply_query)) {
  								if($reply_data['approved'] == 1) {
  					?>

  								<div class="page-header">
  									<div class="container">
  										<p><?php echo $reply_data['username']. " replied:"; ?></p>
  										<p style=" width: 1100px; height: 85px; overflow: auto;"><?php echo $reply_data['reply']; ?></p>
  									</div>
  								</div>

  					<?php
  								}
  							}

  					?>

  					
  							
					<?php
							commentReply($data_comment['idforum']);
						
						}
					?>
  						</div>
  					</div>
  					
		<?php
					}
  				}
  		?>
  					<?php
  						if(isset($_SESSION['username']) && !($_SESSION['active']==0)) {
  					?>
  					<label>Hi <?php echo $_SESSION['username']; ?></label>
  					<form class="form-horizontal" action="comment.php?newsid=<?php echo $id; ?>" method="POST">
  						<textarea class="form-control" name="comment" rows="3"></textarea>
  						<input type="submit" value="Comment"></input>
  					</form>
  		<?php
  						}
  			}
  		?>
		</div>
	</div>

	<?php 
		function commentReply($comment_id) {
			$news_id = $_GET['id'];
			$url = "reply.php?newsid=$news_id&commentid=$comment_id";
			//"reply.php?newsid=<?php echo $id; 

	?>
		<div class="row" id="replysection">
			<form class="form-horizontal" action=<?php echo $url; ?> method="POST">
  				<textarea class="form-control" name="reply" rows="1"></textarea>
  				<input type="submit" value="Reply"></input>
  			</form>
  		</div>
  	<?php
		}
	?>



	
	</body>
	</html>


