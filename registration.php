<?php

session_start();
header('location:index.php');

//making connection to server
$servername = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dbName = "sessionpractical";

$con = mysqli_connect($servername, $dBUsername, $dBPassword, $dbName);

if ($con) {
	echo "connection sucessfull";
}else{
	echo "no connection";
}
$name = $_POST['user'];
$pass = $_POST['password'];

$q = "SELECT * FROM register WHERE name = '$name' && password = '$pass'";
$result= mysqli_query($con, $q);

$num = mysqli_num_rows($result);


if ($num ==1) {
	echo " duplicate data ";
}
else{
	$qy= "INSERT INTO register(name,password) VALUES('$name', '$pass')";
	mysqli_query($con,$qy);
}


?>