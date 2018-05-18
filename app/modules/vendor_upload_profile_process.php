<?php
require 'vendor/autoload.php';

use App\Database as DB;
use App\Sessions;

Sessions::init();

if (!isset($_SESSION['id'])) {
	echo "Your need to login to use this page";
	header("Location:index.php");
} else {
	$vendorid = $_SESSION['id'];
	$vendorusername = $_SESSION['username'];


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
		$vendorlongdescription = $_POST['longcompanydesription'];
		
		echo "$vendorDate";


		//connecting to the database
		$conn = DB::_db();

		//script that uploads logo
		include("upload_logo.php");
		if ($uploadOk == 0) {
			exit;
		}

		$updateinput = "UPDATE `vendor_info` SET `company_name`= '$vendorCompanyname', `phone_number`='$vendorPhoneNumber',`company_description`='$vendordescription',`facebook_link`='$vendorFacebookLink',`instagram_link`='$vendorInstagramLink',`category`='$vendorCategory',`address`='$vendorAddress',`date`='$vendorDate' , `long_company_description`='$vendorlongdescription' , `logo` = '$target_dir' WHERE `vendor_info`.`id` = '$vendorid' ";

		//section for uploading logo and images

		//allowed images types
		$allowed = array('jpg', 'jpeg', 'png', 'gif', 'svg', 'tiff');

		//script that uploads background photo
		include("upload_backgroud.php");

		//script that uploads the image one
		include("upload_image1.php");

		//script that uploads the image two
		include("upload_image2.php");

		//script that uploads the image three
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
