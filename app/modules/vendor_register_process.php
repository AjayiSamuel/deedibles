<?php
require '../../vendor/autoload.php';

use App\Database as DB;
use App\Sessions;

Sessions::init();

$servername = "localhost";
$username = "root";
$password = "Spellingbee@1";
$dbname = "vendordb";

//declaring log variables
$passworderror = "";
$passwordstatus = "";
$databaseerror = "";
$databasestatus = "";
$usernameerror = "";
$emailerror = "";
$error = "";
$status = "";

if ($_POST) {

	$status = "Post validation succcess... <br>";
	$vendorusername = $_POST['reg_username'];
	$vendoremail = $_POST['reg_email'];
	$vendorpassword = $_POST['reg_password'];
	$vendorconfirmpassword = $_POST['reg_confirmpassword'];

	$_SESSION['username'] = $vendorusername;

	//echo $vendorusername,"<br>";
	//echo $vendoremail,"<br>";
	//echo $vendorpassword,"<br>";
	//echo $vendorconfirmpassword,"<br>";

	//list of error messages variables
	$passworderror = "";
	$passwordstatus = "";
	$databaseerror = "";
	$databasestatus = "";
	$usernameerror = "";
	$emailerror = "";
	$status = "";

	if ($vendorpassword != $vendorconfirmpassword) {
		$passworderror = "your password does not match <br>";
		//echo $passworderror;
	} else {
		$conn = DB::_db();

		//checking if username already exists in database
		$sqlusername = mysqli_query($conn, "SELECT vendor_username FROM vendor_info WHERE vendor_username='$vendorusername' ");
		$usernamecheck = mysqli_num_rows($sqlusername);
		if ($usernamecheck >= 1) {
			$usernameerror = " username '$vendorusername' has been taken by another user";
			echo $usernameerror;
		} else {
			echo "There is no duplicate '$vendorusername' in the database <br>";
			//checking for email duplication
			$sqlemail = mysqli_query($conn, "SELECT vendor_email FROM vendor_info WHERE vendor_email='$vendoremail' ");
			$emailcheck = mysqli_num_rows($sqlemail);
			if ($emailcheck >= 1) {
				$emailerror = "$vendoremail has been used by another user";
				echo $emailerror;
			} else {

				echo "No duplicate of email in database";
				//inserting variables into the database
				$sqlinsert = "INSERT INTO vendor_info( vendor_username, vendor_email, vendor_password) VALUES( '$vendorusername', '$vendoremail', '$vendorpassword')";
				$insertquery = mysqli_query($conn, $sqlinsert);
				//echo "$insertquery value of insertion <br>";

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

						##$sqlinsertkey = "INSERT INTO vendor_profile (id_key) VALUES ('$vendorid')";
						##$insertkeyquery = mysqli_query($conn,$sqlinsertkey);
						/**
						 * if($insertkeyquery)
						 * {
						 * $_SESSION['key'] = $vendorid;
						 * echo "<br> Key inserted successfully <br>";
						 * header("Location:vendor_upload_profile.php");
						 * }
						 * else
						 * {
						 * echo "<br>could not insert key into vendor_profile<br>";
						 * }
						 **/
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
	//echo "access denied";
}

?>