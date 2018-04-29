<?php
require '../../vendor/autoload.php';

use App\Database as DB;
use App\Sessions;

Sessions::init();
$error = "";
if (isset($_POST['submit_login'])) {
	//echo "passed <br>";
	$email = $_POST['login_email'];
	$password = $_POST['login_password'];
	$conn = DB::_db();

	$query = mysqli_query($conn, "SELECT * FROM vendor_info WHERE vendor_email='$email' AND vendor_password='$password'");

	$rows = mysqli_num_rows($query);

	if ($rows === 1) {

		$get = mysqli_fetch_array($query);

		$_SESSION["email"] = $get['vendor_email'];
		$_SESSION['id'] = $get['id'];
		$_SESSION['username'] = $get['vendor_username'];

		#$result = mysqli_connect($conn);
		header("Location:../../vendor_profile.php");
	} else {
		$error2 = "username or password is invalid. <br>";
		//echo $error2;
	}
	mysqli_close($conn);
}

?> 