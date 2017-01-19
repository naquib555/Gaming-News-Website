<html>
<head>
	<title>quBit News</title>
</head>

<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/index.css">
<link rel="stylesheet" type="text/css" href="css/nav.css">

<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/signup.js"></script>

<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script>

<body>
<?php include('connect.php');

	function navigation() {
?>
<div class="row">
	<div class="navbar navbar-inverse navbar-static-top">
		<div class="container-fluid">
			<div class="col-md-1">
				<div class="navbar-header">
					<a class="navbar-brand" href="index.php">quBitRADAR</a>
				</div>
			</div>
			<div class="col-md-5">
				<div class="collapse navbar-collapse">
					<ul class="nav navbar-nav">
						<li><a href="index.php">HOME</a></li>
						<?php 
						if(isset($_SESSION['username'])) {
							if($_SESSION['usertype'] == 1) {
						?>
						<li><a href="user_profile.php">PROFILE</a></li>
						<?php
							}
						}
						?>
						<!--li><a href="#">CATEGORIES</a></li-->
						<?php 
						if(isset($_SESSION['username'])) {
							if($_SESSION['usertype'] == 0) {
						?>
						<li><a href="adminPanel.php">ADMIN PANEL</a></li>
						<?php
							}
						}
						?>
					</ul>
				</div>
			</div>
			<?php
				if(!isset($_SESSION['username'])) {
			?>
					<div class="col-md-5 login-form">
						<form class="form-inline" action="checklogin.php" method="POST">
					<div class="form-group">
						<input type="text" class="form-control" id="username" name="username" placeholder="username">
					</div>
					<div class="form-group">
						<input type="password" class="form-control" id="password" name="password" placeholder="password">
					</div>
					<div class="form-group"><button type="submit" class="btn btn-primary">Login</button></div>
				</form>
				

				


			</div>
			<div class="col-md-1 signup"><button class="btn btn-success signup" data-toggle="modal" data-target="#myModal">Sign Up</button></div>

			<?php
				} else if($_SESSION['active'] == 1) {

			?>
					<div class="col-md-5 logout-form">
						<div class="row">
							<div class="col-md-6"></div>
							<div class="col-md-4">
								<label id="message"><?php echo 'Hi '.$_SESSION['username']; ?></label>
							</div>
								<div class="col-md-2">
									<form class="form-inline" action="logout.php">
									<button type="submit" class="btn btn-danger">Logout</button>
								</form>
							</div>
						</div>
					</div>
			<?php
				} else if($_SESSION['active'] == 0) {
					?>
					<div class="col-md-5 logout-form">
						<div class="row">
							<div class="col-md-6"></div>
							<div class="col-md-4">
								<label id="message"><?php echo'Hi '.$_SESSION['username'].', your request is pending'; ?></label>
							</div>
							<div class="col-md-2"><form class="form-inline" action="logout.php">
									<button type="submit" class="btn btn-danger">Logout</button>
								</form></div>
						</div>
					</div>
			<?php
				} else if($_SESSION['active'] == 2) {
			?>
				<div class="col-md-7 logout-form">
						<div class="row">
							<div class="col-md-2"></div>
							<div class="col-md-10">
								<form class="form-inline" action="logout.php">
									<label id="message"><?php echo 'Sorry '.$_SESSION['username'].', your banned from this website'; ?></label>
									<button type="submit" class="btn btn-danger">Logout</button>
								</form>
							</div>
						</div>
					</div>
			<?php
				}
			?>
			

			
		</div>
	</div>
</div>


<!--modal-->

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Sign Up</h4>
      </div>
      <div class="modal-body">
        
        <form class="form-horizontal" action="register.php" method="POST" id="signupform">
		  <div class="form-group">
		    <label for="Fname" class="col-sm-2 control-label">FirstName</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" id="Fname" name="fname" placeholder="First Name">
		    </div>
		  </div>

		  <div class="form-group">
		    <label for="Lname" class="col-sm-2 control-label">LastName</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" id="Lname" name="lname" placeholder="Last Name">
		    </div>
		  </div>

		  <div class="form-group">
		    <label for="email" class="col-sm-2 control-label">Email</label>
		    <div class="col-sm-10">
		      <input type="email" class="form-control" id="email" name="email" placeholder="Email">
		    </div>
		  </div>

		  <div class="form-group">
		    <label for="username" class="col-sm-2 control-label">UserName</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" id="username" name="uname" placeholder="Username">
		      <span id="usernameResult"></span>
		    </div>
		  </div>

		  <div class="form-group">
		    <label for="pass" class="col-sm-2 control-label">Password</label>
		    <div class="col-sm-10">
		      <input type="password" class="form-control" id="pass" name="pass" placeholder="Password">
		    </div>
		  </div>

		  <div class="form-group">
		    <div class="col-sm-offset-2 col-sm-10">
		      <button type="submit" id="submit" class="btn btn-primary">Sign up</button>
		    </div>
		  </div>
		</form>
        	
        </form>
      </div>
      
    </div>
  </div>
</div>



<?php
	}
?>

</body>
</html>