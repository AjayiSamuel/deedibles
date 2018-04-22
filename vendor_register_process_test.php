<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vendor";

$error="";
$status="";

if ($_POST)
{
	echo "Post validation succcess...","<br>";
	$vendorusername=$_POST['username'];
	$vendoremail=$_POST['email'];
	$vendorpassword=$_POST['password'];
	$vendorconfirmpassword=$_POST['confirmpassword'];
	
	echo $vendorusername,"<br>";
	echo $vendoremail,"<br>";
	echo $vendorpassword,"<br>";
	echo $vendorconfirmpassword,"<br>";
	//list of error messages variables
	$passworderror = "";
	$passwordstatus = "";
	$databaseerror = "";
	$databasestatus = "";
	$usernameerror = "";
	$emailerror ="";
	$status="";

	if($vendorpassword != $vendorconfirmpassword)
	{
		$passworderror = "your password does not match <br>";
		echo $passworderror;
		die();
	}
	else
	{
		$passwordstatus = "your password is a match <br>";
		$conn = mysqli_connect($servername, $username, $password, $dbname);
		if (!$conn) 
		{
			$databaseerror = "could not connect to database";
    		die("Connection failed: " . mysqli_connect_error($conn));
		}
		$databasestatus = "Connected to database successfully <br>";
		echo $databasestatus;
		//checking if username already exists in database
		$sqlusername = mysqli_query($conn,"SELECT vendor_username FROM vendor_info WHERE vendor_username='$vendorusername' ");
		$usernamecheck = mysqli_num_rows($sqlusername);
		if($usernamecheck >= 1)
		{
			$usernameerror = " username '$vendorusername' has been taken by another user"; 
			echo $usernameerror;
			die();
		}
		else
		{
			echo "There is no duplicate '$vendorusername' in the database <br>";
			//checking for email duplication
			$sqlemail = mysqli_query($conn,"SELECT vendor_email FROM vendor_info WHERE vendor_email='$vendoremail' ");
			$emailcheck = mysqli_num_rows($sqlemail);
			if($emailcheck >= 1)
			{
				$emailerror = " '$vendoremail' has been used by another user"; 
				echo $emailerror;
				die();
			}
			echo "No duplicate of email in database";
			//inserting variables into the database
			$sqlinsert = "INSERT INTO vendor_info( vendor_username, vendor_email, vendor_password) VALUES( '$vendorusername', '$vendoremail', '$vendorpassword')";
			$insertquery = mysqli_query($conn,$sqlinsert);
			//echo "$insertquery value of insertion <br>";

			$registrationstatus = mysqli_affected_rows($conn);
			if ($registrationstatus)
			{
				$status = "Your Resgisteration was successful";
				//link id in vendor_info to vendor_profile to link database tables
				//selecting id form db
				$sqlid = "SELECT id FROM vendor_info id WHERE vendor_username = '$vendorusername' ";

				$resultid = mysqli_query($conn,$sqlid);
				//checking 
				if(mysqli_num_rows($resultid) == 1)
				{
					$row = mysqli_fetch_assoc($resultid);
					$vendorid = $row["id"];
					echo "<br> the id no is $vendorid <br>";

					$sqlinsertkey = "INSERT INTO vendor_profile (id_key) VALUES ('$vendorid')";
					$insertkeyquery = mysqli_query($conn,$sqlinsertkey);
					if($insertkeyquery)
					{
						echo "<br> Key inserted successfully <br>";
						header("Location:vendor_upload_profile.php");

					}
					else
					{
						echo "<br>could not insert key into vendor_profile<br>";
					}
				}

			}
			else
			{
				$error = "error: data not insertted into database";
			}
			echo "$registrationstatus was inserted <br>";

		}
		echo "check update code";

	}
}
else
{
	//echo"access denied";
}

?>