<?php include('connect.php');
include('navigation_bar.php');

session_start();
$userid = (int) $_SESSION['id'];

	$comment_query = mysqli_query($conn, "SELECT * FROM comment WHERE iduser=$userid");
  $user_info = mysqli_query($conn, "SELECT * FROM login WHERE idlogin=$userid");

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>

	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">

	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.js"></script>


</head>
<body>

<?php navigation(); ?>


<div class="page-header">
  <?php $user = mysqli_fetch_array($user_info); ?>
  <h1 style="text-align: center;"><?php echo $user['firstname'] . " " . $user['lastname']; ?></h5>
  <h5 style="text-align: center;"><?php echo "username: ".$user['username']; ?></h5>
  <h5 style="text-align: center;">status:
  
  <?php
    if($user['active'] == 1) {
      echo "active";
    } else if($user['active'] == 0) {
      echo "pending";
    } else {
      echo "banned";
    }
  ?>
  </h4>
</div>

<div class="row">
  <div class="col-md-4"></div>
  <div class="col-md-4">
    <div class="panel panel-primary">
      <div class="panel-heading">
        <h3 class="panel-title">Update Profile</h3>
      </div>
      <div class="panel-body">
        <form action="changepassword.php" method="POST">
          <div class="form-group">
            <label for="newpass">New Password</label>
            <input type="password" class="form-control" id="newpass" name="newpass" placeholder="New Password">
          </div>
          <div class="form-group">
            <label for="conpass">Confirm Password</label>
            <input type="password" class="form-control" id="conpass" name="conpass" placeholder="Confirm Password">
          </div>
          <input type="submit" value="Update"></input>

        </form>
      </div>
    </div>
  </div>
  <div class="col-md-4"></div>
</div>




<div class="row">
<div class="col-md-4"></div>
	<div class="col-md-4">
		<h1 style="text-align: center;">Comment Details</h1>
	</div>
	<div class="col-md-4"></div>
</div>

<hr>
	
	<div class="row">
	<div class="col-md-2"></div>
	<div class="col-md-8">
		<table class="table table-bordered">
  			<tr>
  				<th>News</th><th>Comment</th>
  			</tr>
  			<?php
  					while($data_comment = mysqli_fetch_array($comment_query)) {
  						$news_id_comment = (int) $data_comment['info_news_id_news'];
  						$news_query = mysqli_query($conn, "SELECT * FROM info_news WHERE id_news=$news_id_comment");
  						$data_news = mysqli_fetch_array($news_query);
  			?>
  						<tr>
  							<td>
  								<a href="news_details.php?id=<?php echo $data_news['id_news']; ?>">
  									<?php echo $data_news['news_title']; ?>
  								</a>
  							</td>
  							<td><?php echo $data_comment['comment']; ?></td>
  						</tr>
  			<?php
  					}
  			?>
		</table>
	</div>
	<div class="col-md-2"></div>
</div>
</div>









</body>
</html>