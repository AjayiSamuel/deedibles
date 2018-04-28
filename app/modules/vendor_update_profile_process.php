<?php

require '../../vendor/autoload.php';
use App\Sessions;
use App\Database as DB;
Sessions::init();
$vendorid = $_SESSION['id'];
echo "<br> My id is $vendorid";

if (!isset($_SESSION['id'])) {
	echo "Your need to login to use this page";
} else {
	//Session variables
	$vendorid = $_SESSION['id'];
	$vendorusername = $_SESSION['username'];
	//sql connection variables
	$servername = "localhost";
	$username = "root";
	$password = "Spellingbee@1";
	$dbname = "vendordb";
	//log variables
	$logoError = "";
	$logoStatus = "";

	if ($_POST) {
		//varibles to be equated into the post
		$vendorCompanyname = $_POST['companyname'];
		$vendordescription = $_POST['description'];
		$vendorPhoneNumber = $_POST['phone_number'];
		$vendorFacebookLink = $_POST['facebook_link'];
		$vendorInstagramLink = $_POST['instagram_link'];
		$vendorCategory = $_POST['category'];
		$vendorDate = date("d-m-Y");
		//$vendorTime = date("h:i:sa");
		$vendorAddress = $_POST['address'];
		//checking date (To be deleted later)
		echo "$vendorDate";

		//connecting to the database
		$conn = DB::_db();

		//script that uploads logo
		include("upload_logo.php");
		if ($uploadOk == 0) {
			exit;
		}

		$updateinput = "UPDATE `vendor_info` SET `company_name`= '$vendorCompanyname', `phone_number`='$vendorPhoneNumber',`company_description`='$vendordescription',`facebook_link`='$vendorFacebookLink',`instagram_link`='$vendorInstagramLink',`category`='$vendorCategory',`address`='$vendorAddress',`date`='$vendorDate' , `logo` = '$target_file' WHERE `vendor_info`.`id` = '$vendorid' ";

		var_dump($updateinput);
		//section for uploading logo and images

		//allowed images types
		$allowed = array('jpg', 'jpeg', 'png', 'gif', 'svg', 'tiff');


		//script that uploads the image one
		include("upload_image1.php");

		//script that uploads the image one
		include("upload_image2.php");

		//script that uploads the image one
		include("upload_image3.php");

		echo "<br> input to database successful";
		if (mysqli_query($conn, $updateinput)) {
			header("Location:vendor_profile.php");
		} else {
			$error = "error inputting data";
		}

	}
}

?>
