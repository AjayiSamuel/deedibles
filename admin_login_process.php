<?php

session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vendordb";
$error="";

if ($_POST) {
	$_SESSION['name']=$_POST['name'];
	$_SESSION['password']=$_POST['password'];

	$adminname = $_POST['name'];
	$adminpass = $_POST['password'];
	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	// Check connection
	if (!$conn) {
		$error="could not connect to server";
	    die("Connection failed: " . mysqli_connect_error());
	}

	$sql = "SELECT * FROM admininfo WHERE admin_name= '$adminname' AND admin_password = '$adminpass'";

	$result = mysqli_query($conn, $sql) or die (mysqli_error($conn));

	$count = mysqli_num_rows($result);

	if ($count == 1) {
	   header('Location:admin_menu.php');

	}else{
	   $error = "Username or password id invalid";
	}
mysqli_close($conn);

}

?>