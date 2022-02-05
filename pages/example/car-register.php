<?php
session_start();
include("conndb.php");
$bname=$_POST['bname'];
$model=$_POST['model'];
$car_type=$_POST['car_type'];
$plate=$_POST['plate'];
$per_date=$_POST['per_date'];
$pro_date=$_POST['pro_date'];
	$selecte = mysqli_query($conn, "SELECT plate FROM car WHERE plate = '$plate'") or die("echo 'could not connect to table';");
	$dechk = mysqli_num_rows($selecte);
	 if (!preg_match("/^[a-zA-Z ]*$/", $bname)) {
		echo "brand name not correct format <a href='addCar.php'>try again.</a>";
	}  else if ($dechk != 0) {
		echo "plate in use, <a href='addCar.php'>try again</a>";
    } else {
		//$iquery = "INSERT INTO car (name, fname, gname, gender, phone, per_date, email, edu_lev, e_state, uname, pass, pass2) VALUES (    '$name',    '$fname',    '$gname',   '$gender',    '$phone',     '$per_date',    '$email',  '$edu_lev',  '$e_state',    '$uname',     '$pass')";
		$sql =  "INSERT INTO car (bname, model, car_type, plate, per_date, pro_date) VALUES ( '$bname', '$model', '$car_type', '$plate', '$per_date', '$pro_date')";
         
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully." 
                . " Please browse your localhost php my admin" 
                . " to view the updated data</h3>"; 
  
            echo nl2br("\n$bname\n $model\n "
                . "$car_type\n $plate\n $per_date");
        } else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn);
        }
          
        // Close connection
        mysqli_close($conn);
       // $insert = mysqli_query($conn, $iquery) or die(mysqli_error($conn));
		//if ($insert) {
		//	echo "successfully inserted<br><a href='addcar.php'>back</a>";
		}
