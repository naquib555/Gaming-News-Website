<?php include('connect.php');
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin Panel</title>

	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">

	
	<link rel="stylesheet" type="text/css" href="css/adminPanel.css">

	<link rel="stylesheet" type="text/css" href="css/index.css">

</head>
<body>


<?php include('navigation_bar.php');
	navigation();
?>








<div class="row">
	<div class="col-md-3"></div>
	<div class="col-md-6"><h1>Admin Panel</h1></div>
	<div class="col-md-3"></div>
</div>

<div class="row">
	<div class="col-md-4"></div>
	<div class="col-md-4">
		<h3>Add News</h3>

		<form action="news_entry.php" method="POST" enctype="multipart/form-data">
			<div class="form-input">
				<label>Title:</label>
				<input type="text" name="title" style="width:300px; height: 30px;"/>
				<label>Description:</label>
				<input type="text" name="description" style="width:300px; height: 30px;"/>
				<label>Content:</label>
				<textarea class="form-control" rows="5" name="content"></textarea>
				<label>Author:</label>
				<input type="text" name="author" style="width:300px; height: 30px;"/>
				<label>Image:</label>
				<input type="file" name="imagefile" id="imagefile" style="width:300px; height: 30px;"/>
				<input type="submit" name="submit" value="submit"></input>
			</div>

		</form>

	</div>
	<div class="col-md-4"></div>
</div>


<div class="container">
<?php
	$comment_query = mysqli_query($conn, "SELECT * FROM comment WHERE approved=0");
?>
	<div class="col-md-4"></div>
	<div class="col-md-4">
		<h3>Comment Approval</h3>
	</div>
	<div class="col-md-4"></div>
	<div class="row">
		<table class="table table-bordered">
  			<tr>
  				<th>User Name</th><th>Comment</th><th>Approve</th>
  			</tr>
  			<?php
  					while($data_comment = mysqli_fetch_array($comment_query)) {
  			?>
  						<tr>
  							<td><?php echo $data_comment['username']; ?></td>
  							<td><?php echo $data_comment['comment']; ?></td>
  							<td>
  								<form method="POST" action="commentApproval.php?id=<?php echo $data_comment['idforum']; ?>">
	  								<input type="radio" name="approve" value=1 onChange="this.form.submit()"> YES</input>
	  								<input type="radio" name="approve" value=0 onChange="this.form.submit()"> No</input>
	  							</form>
  							</td>
  						</tr>
  			<?php
  					}
  			?>
		</table>
	</div>
</div>

<div class="container">
<?php
	$reply_query = mysqli_query($conn, "SELECT * FROM reply WHERE approved=0");
?>
	<div class="col-md-4"></div>
	<div class="col-md-4">
		<h3>Reply Approval</h3>
	</div>
	<div class="col-md-4"></div>
	<div class="row">
		<table class="table table-bordered">
  			<tr>
  				<th>User Name</th><th>Comment</th><th>Approve</th>
  			</tr>
  			<?php
  					while($data_reply = mysqli_fetch_array($reply_query)) {
  			?>
  						<tr>
  							<td><?php echo $data_reply['username']; ?></td>
  							<td><?php echo $data_reply['reply']; ?></td>
  							<td>
  								<form method="POST" action="replyApproval.php?id=<?php echo $data_reply['idreply']; ?>">
	  								<input type="radio" name="approve" value=1 onChange="this.form.submit()"> YES</input>
	  								<input type="radio" name="approve" value=0 onChange="this.form.submit()"> No</input>
	  							</form>
  							</td>
  						</tr>
  			<?php
  					}
  			?>
		</table>
	</div>
</div>





<div class="container">
<?php
	$login_query = mysqli_query($conn, "SELECT * FROM login WHERE active=0");
?>
	<div class="col-md-4"></div>
	<div class="col-md-4">
		<h3>Pending Request</h3>
	</div>
	<div class="col-md-4"></div>
	<div class="row">
		<table class="table table-bordered">
  			<tr>
  				<th>User Name</th><th>Approve</th>
  			</tr>
  			<?php
  					while($data_login = mysqli_fetch_array($login_query)) {
  			?>
  						<tr>
  							<td><?php echo $data_login['username']; ?></td>
  							
  							<td>
  								<form method="POST" action="userApproval.php?id=<?php echo $data_login['idlogin']; ?>">
	  								<input type="radio" name="approve" value=1 onChange="this.form.submit()"> Yes</input>
	  								<input type="radio" name="approve" value=0 onChange="this.form.submit()"> Stall</input>
	  							</form>
  							</td>
  						</tr>
  			<?php
  					}
  			?>
		</table>
	</div>
</div>



<div class="container">
<?php
	$login_query = mysqli_query($conn, "SELECT * FROM login WHERE active=1");
?>
	<div class="col-md-4"></div>
	<div class="col-md-4">
		<h3>Active Users</h3>
	</div>
	<div class="col-md-4"></div>
	<div class="row">
		<table class="table table-bordered">
  			<tr>
  				<th>User Name</th><th>Action</th>
  			</tr>
  			<?php
  					while($data_login = mysqli_fetch_array($login_query)) {
  			?>
  						<tr>
  							<td><?php echo $data_login['username']; ?></td>
  							
  							<td>
  								<form method="POST" action="userApproval.php?id=<?php echo $data_login['idlogin']; ?>">
	  								<input type="radio" name="approve" value=2 onChange="this.form.submit()"> Remove User</input>
	  							</form>
  							</td>
  						</tr>
  			<?php
  					}
  			?>
		</table>
	</div>
</div>


<div class="container">
<?php
	$login_query = mysqli_query($conn, "SELECT * FROM login WHERE active=2");
?>
	<div class="col-md-4"></div>
	<div class="col-md-4">
		<h3>Removed Users</h3>
	</div>
	<div class="col-md-4"></div>
	<div class="row">
		<table class="table table-bordered">
  			<tr>
  				<th>User Name</th><th>Add Users</th>
  			</tr>
  			<?php
  					while($data_login = mysqli_fetch_array($login_query)) {
  			?>
  						<tr>
  							<td><?php echo $data_login['username']; ?></td>
  							
  							<td>
  								<form method="POST" action="userApproval.php?id=<?php echo $data_login['idlogin']; ?>">
	  								<input type="radio" name="approve" value=1 onChange="this.form.submit()"> Add User</input>
	  							</form>
  							</td>
  						</tr>
  			<?php
  					}
  			?>
		</table>
	</div>
</div>





</body>
</html>