<?php

session_start();

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
	$_SESSION['username'] = $name;
	header('location:next.php');

}
else{
	header('location:index.php');
}


?>