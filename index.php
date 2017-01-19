<?php include("connect.php");
	$result = mysqli_query($conn, "SELECT * FROM info_news");
	//MAX(hitcount);
	$hit = mysqli_query($conn, "SELECT MAX(hitcount) FROM info_news");
	$data_hit = mysqli_fetch_assoc($hit);
	$maxhit = $data_hit['MAX(hitcount)'];
	$hitcount = mysqli_query($conn, "SELECT * FROM info_news WHERE ORDER BY hitcount");
	//
	session_start();
	//ORDER BY idnews DESC
?>

<!DOCTYPE html>
<html>
<head>
	<title>quBit News</title>
</head>

<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/index.css">

<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
<body>

<?php include('navigation_bar.php');
	navigation();
	

?>
















<div class="row">
	<div class="col-md-8">
		<div class="container">
	<?php
		while($row = mysqli_fetch_array($result)) {
	?>
			<a href="news_details.php?id=<?php echo $row['id_news']; ?>">
				<div class="row" id="news">
					<img src="<?php echo $row['image_path']; ?>" class="img-responsive">
					<h2><?php echo $row['news_title']; ?></h2>
			</a>
					<h4><?php echo $row['news_short_description']; ?></h4>
						




					<small>
						<?php 
							$publishedDate = $row['news_published'];
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

					<hr>
					<br>
				</div>

			
	<?php
		}
	?>
		</div>
	</div>
	<div class="col-md-4"></div>
</div>








</body>
</html>