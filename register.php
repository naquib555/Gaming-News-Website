<?php include('connect.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login info</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>

<?php
$uname = $_POST['uname'];

if($uname != "") {

	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	
	$email = $_POST['email'];
	$pass = $_POST['pass'];

	$userid_query = mysqli_query($conn, "SELECT * FROM login WHERE username='$uname'");

	$rows = mysqli_num_rows($userid_query);

	if($rows == 0) {

		$login_query = mysqli_query($conn, "INSERT INTO login(username, password, usertype, active, firstname, lastname, email) VALUES('$uname', '$pass', 1, 0, '$fname', '$lname', '$email')");

		if($login_query) {
			include('navigation_bar.php');
			navigation();
?>


<div class="row">
  <div class="col-md-3"></div>
  <div class="col-md-6">
    <div class="panel panel-success">
      <div class="panel-heading">
        <h1 class="panel-title">Successfully Registered</h1>
      </div>
      <div class="panel-body">
        <h3>Thank you for registering in this website. Please <?php echo $fname.", "; ?>wait for admin approval.</h3>
      </div>
    </div>
  </div>
  <div class="col-md-3"></div>
</div>


		<?php
	} else {

		include('navigation_bar.php');
			navigation();
			

		?>


<div class="row">
  <div class="col-md-4"></div>
  <div class="col-md-4">
    <div class="panel panel-danger">
      <div class="panel-heading">
        <h1 class="panel-title">Error Occured</h1>
      </div>
      <div class="panel-body">
        <h3>Please Sign Up again</h3>
      </div>
    </div>
  </div>
  <div class="col-md-4"></div>
</div>


		<?php
	
	}


	} else {

		include('navigation_bar.php');
			navigation();

		?>


<div class="row">
  <div class="col-md-4"></div>
  <div class="col-md-4">
    <div class="panel panel-danger">
      <div class="panel-heading">
        <h1 class="panel-title">Error Occured</h1>
      </div>
      <div class="panel-body">
        <h3>This username already exist. Please Signup with different username.</h3>
      </div>
    </div>
  </div>
  <div class="col-md-4"></div>
</div>


		<?php
	}

} else {

include('navigation_bar.php');
			navigation();
			

		?>


<div class="row">
  <div class="col-md-4"></div>
  <div class="col-md-4">
    <div class="panel panel-danger">
      <div class="panel-heading">
        <h1 class="panel-title">Error Occured</h1>
      </div>
      <div class="panel-body">
        <h3>Please Sign Up again</h3>
      </div>
    </div>
  </div>
  <div class="col-md-4"></div>
</div>
<?php



}
?>	
	


	
</body>
</html>