<?php

session_start();
$error="";
if(isset($_POST['submit'])){
	//echo "passed <br>";
	$email=$_POST['email'];
	$password=$_POST['password'];
	$conn = mysqli_connect("localhost","root","","vendordb");

	$query = mysqli_query($conn, "SELECT * FROM vendor_info WHERE vendor_email='$email' AND vendor_password='$password'");

	$rows = mysqli_num_rows($query);
	if($rows == 1){
		$_SESSION["email"] = $email;
		$_SESSION["password"] = $password;

		$get = mysqli_fetch_assoc($query);

		$_SESSION['id'] = $get['id'];
		$_SESSION['name'] = $get['vendor_username'];
 

		#$result = mysqli_connect($conn);

		header("Location:vendor_profile.php");
	}else{
		$error2 = "username or password is invalid. <br>";
		//echo $error2;
	}
	mysqli_close($conn);
}

?> 