<?php
session_start();
include("conndb.php");
//$id=0;
$name=ucfirst($_POST['name']);
$fname=ucfirst($_POST['fname']);
$gname=ucfirst($_POST['gname']);
$gender = strtoupper($_POST['gender']);
$phone=$_POST['phone'];
$per_date=$_POST['per_date'];
$email=$_POST['email'];
$edu_lev=$_POST['edu_lev'];
$e_state=$_POST['e_state'];
$uname = $_POST['uname'];
$pass = md5($_POST['pass']);
$pass2 = md5($_POST['pass2']);
//$id++;
$selectu = mysqli_query($conn, "SELECT * FROM trainer WHERE uname = '$uname'") or die("echo 'could not connect to table';");
	$duchk = mysqli_num_rows($selectu);
	$selecte = mysqli_query($conn, "SELECT email FROM trainer WHERE email = '$email'") or die("echo 'could not connect to table';");
	$dechk = mysqli_num_rows($selecte);
	if ($duchk != 0) {
		echo 'name in use, <a href="addTrainer.php">try again.</a>';
	}else if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
		echo "first name not correct format <a href='addTrainer.php'>try again.</a>";
	}else if (!preg_match("/^[a-zA-Z ]*$/", $fname)) {
		echo "father name not correct format <a href='addTrainer.php'>try again.</a>";
	}else if (!preg_match("/^[a-zA-Z ]*$/", $gname)) {
		echo "grand father name not correct format <a href='addTrainer.php'>try again.</a>";
	}  else if ($dechk != 0) {
		echo "email in use, <a href='addTrainer.php'>try again</a>";
	} else if (!preg_match("/^[0-9]*$/", $phone)) {
		echo "phone not correct format, <a href='addTrainer.php'>try again</a>";
	}  else if ($pass != $pass2) {
		echo 'passwords do not match, <a href="addTrainer.php">try again</a>';
	} else if (!preg_match("/^[a-zA-Z ]*$/", $uname)) {
		echo "not correct format, <a href='addTrainer.php'>try again</a>";
	} else {
		//$iquery = "INSERT INTO trainer (name, fname, gname, gender, phone, per_date, email, edu_lev, e_state, uname, pass, pass2) VALUES (    '$name',    '$fname',    '$gname',   '$gender',    '$phone',     '$per_date',    '$email',  '$edu_lev',  '$e_state',    '$uname',     '$pass')";
		$sql =  "INSERT INTO trainer (fname, mname, lname, gender, dob, email, phone, edu, state, uname, pass) VALUES (    '$name',    '$fname',    '$gname',   '$gender',   '$per_date',  '$email', '$phone', '$edu_lev',  '$e_state',    '$uname',     '$pass')";
         
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully." 
                . " Please browse your localhost php my admin" 
                . " to view the updated data</h3>"; 
  
            echo nl2br("\n$name\n $fname\n "
                . "$gender\n $phone\n $email");
        } else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn);
        }
          
        // Close connection
        mysqli_close($conn);
       // $insert = mysqli_query($conn, $iquery) or die(mysqli_error($conn));
		//if ($insert) {
		//	echo "successfully inserted<br><a href='addTrainer.php'>back</a>";
		}
	  ?>