<?php
session_start();

$error='';

if ($_POST) {
	$_SESSION['username']=$_POST['name'];
	$_SESSION['password']=$_POST['password'];

	//establishing connection with server
	$conn = mysqli_connect("localhost", "root", "");

	//connecting with database
	$db = mysqli_select_db($conn,"vendor");

	//sql query to fetch information of registered admin
	$query = mysqli_query ($conn, "SELECT * FROM admininfo WHERE username='".$_SESSION['username']."' AND password ='".$_SESSION['password']."'");

	$result=mysqli_query($conn,$query);
	
	$rows = mysqli_num_rows($result);

	if($rows == 1){
		header('Location:admin_menu.php');
	}else{
		$error = "your username or password is not correct";
	}
	mysqli_close($conn);
}else{
	$error = "Access denied";
}
?>
