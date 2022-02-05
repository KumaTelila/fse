<?php
session_start();
//include 'header.php';
include("conndb.php");
if (isset($_POST['submit'])) {

	$fname = ucfirst($_POST['fname']);

	$lname = ucfirst($_POST['lname']);
	$gender = strtoupper($_POST['gender']);
	$dob = date_create($_POST['dob']);
	$fdob = date_format($dob, "Y/m/d");
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	
	$uname = $_POST['uname'];
	$pass = md5($_POST['pass']);
	$pass2 = md5($_POST['pass2']);
	$selectu = mysqli_query($conn, "SELECT * FROM student WHERE uname = '$uname'") or die("echo 'could not connect to table';");
	$duchk = mysqli_num_rows($selectu);
	$selecteid = mysqli_query($conn, "SELECT fname FROM student WHERE fname = '$fname'") or die("echo 'could not connect to table';");
	$deidchk = mysqli_num_rows($selecteid);
	$selecte = mysqli_query($conn, "SELECT email FROM student WHERE email = '$email'") or die("echo 'could not connect to table';");
	$dechk = mysqli_num_rows($selecte);
	if ($duchk != 0) {
		echo 'name in use, <a href="register.php">try again.</a>';
	} else if ($deidchk != 0) {
		echo 'fnmae id in use, <a href="register.php">try again.</a>';
	}else if (!preg_match("/^[a-zA-Z ]*$/", $fname)) {
		echo "first name not correct format <a href='register.php'>try again.</a>";
	}else if (!preg_match("/^[a-zA-Z ]*$/", $lname)) {
		echo "last name not correct format <a href='register.php'>try again.</a>";
	} else if (!preg_match("/^[a-zA-Z]*$/", $gender)) {
		echo "gender not correct format, <a href='register.php'>try again</a>";
	} else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		echo "email not correct format, <a href='register.php'>try again</a>";
	} else if ($dechk != 0) {
		echo "email in use, <a href='register.php'>try again</a>";
	} else if (!preg_match("/^[0-9]*$/", $phone)) {
		echo "phone not correct format, <a href='register.php'>try again</a>";
	}  else if ($pass != $pass2) {
		echo 'passwords do not match, <a href="register.php">try again</a>';
	} else if (!preg_match("/^[a-zA-Z ]*$/", $uname)) {
		echo "not correct format, <a href='register.php'>try again</a>";
	} else {
		$iquery = "INSERT INTO student (fname,lname,gender,dob,email,phone,uname,pass) VALUES ('$fname','$lname','$gender','$fdob','$email','$phone','$uname', '$pass')";
		$insert = mysqli_query($conn, $iquery) or die(mysqli_error($conn));
		if ($insert) {
			echo "successfully inserted<br><a href='register.php'>back</a>";
		}
	}
} else {
?>
	<!DOCTYPE html>
	<html lang="en">

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Registration Page </title>

		<!-- Google Font: Source Sans Pro -->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
		<!-- Font Awesome -->
		<link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
		<!-- icheck bootstrap -->
		<link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
		<!-- Theme style -->
		<link rel="stylesheet" href="../../dist/css/adminlte.min.css">
	</head>

	<body class="hold-transition ">
		<div class =" content">
			<div class = "row">
				<div class="col-md-3"></div>
				<div class="col-md-4">
				<div class="card card-outline card-primary">
				<div class="card-header text-center">
					<a href="#" class="h1"><b> DSMS</b></a>
				</div>
				<div class="card-body">
					<p class="login-box-msg">Register for training</p>
					<form name="register" method="post">
						<div class="form-group">
						<input type="text" class="form-control" name="fname" placeholder="First Name" required>
						</div>
						<div class="form-group">
						<input type="text" class="form-control" name="lname"  placeholder="Last Name" required>
						</div>
						<div class="form-group">
						<input type="radio" name="gender" value="M" checked>male
						<input type="radio" name="gender" value="F">female
						<input type="radio" name="gender" value="O">othe
						</div>
						<div class="form-group">
						<input type="date"  class="form-control" name="dob" placeholder="date of birth" required>
						</div>
						<div class="form-group">
						<input type="email" class="form-control" name="email" placeholder="email" required>
						</div>
						<div class="form-group">
						<input type="text" class="form-control" name="phone"  maxlength="12" placeholder="phone number" required>
						</div>
						<div class="form-group">
						<input type="text" class="form-control" name="uname" placeholder="User name" required>
						</div>
						<div class="form-group">
						<input type="password" class="form-control" name="pass" placeholder="password" required>
						</div>
						<div class="form-group">
						<input type="password" class="form-control" name="pass2"  placeholder="confirm password" required>
						</div>
						<div class="form-group">
						<input type="submit" name="submit" value="register">
						</div>
					</form>
					<a href="../../index.php" class="text-center">I already have Registered</a>
				</div>
				<!-- /.form-box -->
			</div>
				</div>
				<div class="col-md-3"></div>
			</div>

		</div>
		<div class="register-box">
			<!-- /.card -->
		</div>
		<!-- /.register-box -->

		<!-- jQuery -->
		<script src="../../plugins/jquery/jquery.min.js"></script>
		<!-- Bootstrap 4 -->
		<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
		<!-- AdminLTE App -->
		<script src="../../dist/js/adminlte.min.js"></script>
	</body>

	</html>
<?php
}
//include 'footer.php';
?>