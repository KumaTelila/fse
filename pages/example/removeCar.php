<?php
session_start();
include("conndb.php");
$plate=$_POST['plate'];

$selectu = mysqli_query($conn, "SELECT * FROM car WHERE plate = '$plate'") ;
$duchk = mysqli_num_rows($selectu);
if($duchk==0){
    echo "not found ";
    die();
}
else{
    $sql = mysqli_query($conn, "DELETE FROM car WHERE plate = '$plate'");
    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
      } else {
        echo "Error deleting record: " ;
      }
}



?>