<?php
require 'vendor/autoload.php';

use App\Database as DB;
use App\Sessions;
Sessions::init();

$servername = "localhost";
$username = "root";
$password = "Spellingbee@1";
$dbname = "vendordb";

//initializing variables  
$vendorusername="";
$vendoremail="";
$vendorpassword="";
$vendorconfirmpassword="";

//declaring error and status log variables
$passworderror = ""; //holds value is password error occurs
$usernameerror = ""; //if name duplication occurs
$emailerror = ""; //if email duplication occurs
$error = ""; //holds value if data was not insertted into the database
$status = ""; //holds the value of registration success

if ($_POST) {
	$vendorusername = $_POST['reg_username'];
	$vendoremail = $_POST['reg_email'];
	$vendorpassword = $_POST['reg_password'];
	$vendorconfirmpassword = $_POST['reg_confirmpassword'];

	$_SESSION['username'] = $_POST['reg_username'];

	if ($vendorpassword != $vendorconfirmpassword) {
		$passworderror = "your password does not match <br>";
	} else {
		$conn = DB::_db();

		//checking if username already exists in database
		$sqlusername = mysqli_query($conn, "SELECT vendor_username FROM vendor_info WHERE vendor_username='$vendorusername' ");
		$usernamecheck = mysqli_num_rows($sqlusername);
		if ($usernamecheck >= 1) {
			$usernameerror = " username <b>'$vendorusername'</b> has been taken by another user";
			//echo $usernameerror;
		} else {
			//checking for email duplication
			$sqlemail = mysqli_query($conn, "SELECT vendor_email FROM vendor_info WHERE vendor_email='$vendoremail' ");
			$emailcheck = mysqli_num_rows($sqlemail);
			if ($emailcheck >= 1) {
				$emailerror = " <b>'$vendoremail'</b> has been used by another user";
			} else {
				//inserting variables into the database
				$sqlinsert = "INSERT INTO vendor_info( vendor_username, vendor_email, vendor_password) VALUES( '$vendorusername', '$vendoremail', '$vendorpassword')";
				$insertquery = mysqli_query($conn, $sqlinsert);

				$registrationstatus = mysqli_affected_rows($conn);
				if ($registrationstatus) {
					$status = "Your Resgisteration was successful";
					//link id in vendor_info to vendor_profile to link database tables
					//selecting id form db
					$sqlid = "SELECT id FROM vendor_info id WHERE vendor_username = '$vendorusername' ";

					$resultid = mysqli_query($conn, $sqlid);
					//checking 
					if (mysqli_num_rows($resultid) == 1) {
						$row = mysqli_fetch_assoc($resultid);
						$vendorid = $row["id"];
						$_SESSION['id'] = $vendorid;
						echo "<br> the id no is $vendorid <br>";
						header("Location:vendor_upload_profile.php");
					}

				} else {
					$error = "error: data not insertted into database";
				}
				echo "$registrationstatus was inserted <br>";
				mysqli_close($conn);
			}
		}
	}
} else {
	$error = "access denied";
}

?>