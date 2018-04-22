<?php
session_start();

if(!isset($_SESSION['id']))
{
	echo "You need to be logged in to view this page";
	exit;
}
else
{
	$vendorid = $_SESSION['id'];
	$vendorusername = $_SESSION['username'];
	

	$conn = mysqli_connect("localhost","root","","vendordb");
	$query = "SELECT * FROM vendor_info WHERE id = '$vendorid'";

	if (!$conn) 
		{
			$databaseerror = "could not connect to database";
    		die("Connection failed: " . mysqli_connect_error($conn));
		}

		$result = mysqli_query($conn,$query);
	if ($result) {
		$row = mysqli_fetch_assoc($result);
		$companyName = $row['company_name'];
		$phoneNo = $row['phone_number'];
		$description = $row['company_description'];
		$logo = $row['logo']; 

	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title> Vendor Profile</title>
</head>
<body>
	<h3>
		Welcome <?php echo "$vendorusername";?>
	</h3>

	<p>
		<?php
			echo " $vendorusername's session <br> <a href='vendor_logout.php'>Logout</a> <br> ";
		?>
	</p>

	<div>
		<?php
			echo "$companyName <br> $phoneNo <br>";
			echo $logo."<br>";
		?>
		<img src="<?php echo $logo?>" alt="mylogo">
	</div>

</body>
</html>
