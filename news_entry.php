<?php include('connect.php');
	$title = $_POST['title'];
	$description = $_POST['description'];
	$content = $_POST['content'];
	$author = $_POST['author'];
	//$date = $_POST['date'];
	$dateformat = new DateTime();
	$date = $dateformat->format('Y-m-d H:i:s');


	//fileupload

	$target_dir = "uploads/";
	//echo $_FILES['imagefile']['name'];
	$target_file = $target_dir.basename($_FILES['imagefile']['name']);
	//echo "\n".$target_file."\n";
	$uploadOk = 1;
	$imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
	if(isset($_POST["submit"])) {
		$check = getimagesize($_FILES["imagefile"]["tmp_name"]);
		if($check!==false) {
			//echo"File is an image - ".$check["mime"].".";
			$uploadOk = 1;
		} else {
			//echo "File is not an image.";
			$uploadOk = 0;
		}
	}

	//check file exist or not
	if(file_exists($target_file)) {
		//echo "Sorry, file already exists.";
		$uploadOk = 0;
	}

	if($_FILES["imagefile"]["size"] > 500000) {
		//echo "sorry, your file is too large.";
		$uploadOk = 0;
	}

	//formats
	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
		//echo "sorry, only JPG, JPEG, PNG & GIF files are allowed.";
		$uploadOk = 0;
	}

	if($uploadOk == 0) {
		//echo "Sorry, your file was not uploaded.";
	} else {
		if(move_uploaded_file($_FILES["imagefile"]["tmp_name"], $target_file)) {
			//echo "The file ".basename($_FILES["imagefile"]["name"])." hase been uploaded.";
		} else {
			//echo "Sorry, there was an error uploading your file.";
		}
	}

	$result = mysqli_query($conn, "INSERT INTO info_news(news_title, news_short_description, news_content, image_path, news_author) VALUES ('$title', '$description', '$content', '$target_file', '$author')");

	if($result) {
		?>

<!DOCTYPE html>
<html>
<head>
	<title>Success</title>

	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">


</head>
<body>
<div class="page-header" style="padding-left: 50px;">
	<h1>Successfully Inserted.</h1><br>
	<small><a href="adminpanel.php">Return to adminPanel</a></small>
</div>
</body>
</html>
		<?php
	} else {
		//echo $date;
		//echo mysqli_error($conn);
		//echo "\n".$title." \n".$description." \n".$content." \n".$author." \n".$date;
		echo "Failed to insert";
	}
?>

