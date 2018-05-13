<?php
require 'vendor/autoload.php';
use App\Database as DB;
	$vendorid = $_SESSION['id'];
	$conn = DB::_db();
	$query = "SELECT * FROM vendor_info where `id` = 'vendorid'";

	$result = mysqli_query($conn, $query);
	$row = mysqli_fetch_assoc($result);


	if (mysqli_query($conn, $query)) {

		$vendorCompanyname = $row['company_name'];
		$vendordescription = $row['company_description'];
		$longdescription = $row['long_company_description'];
		$vendorPhoneNumber = $row['phone_number'];
		$vendorFacebookLink = $row['facebook_link'];
		$vendorInstagramLink = $row['instagram_link'];
		$vendorLogo = $row['logo'];
		$vendorImageOne = $row['first_pic'];
		$vendorImageTwo = $row['second_pic'];
		$vendorImageThree = $row['thrid_pic'];
		$vendorImageFour = $row['forth_pic'];
		$vendorImageFive = $row[''];
		$vendorCategory = $row['category'];
		$vendorDate =$row['date'];
		$vendorAddress = $row['address'];
	}

	else {
		echo "No input in your database";
	}

	mysqli_close($conn);
?>