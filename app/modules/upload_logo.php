<?php
use App\Database as DB;
$logoError = NULL;
$logoStatus = NULL;
function createDir($dir)
{
	$absPath = "./$dir";
	if (!file_exists($absPath) || !is_dir($absPath)) {
		mkdir($absPath,0777);
	}
}

$conn = DB::_db();
$query = "SELECT * FROM vendor_info WHERE id = '$vendorid'";
$result = mysqli_query($conn,$query);

//check if image is available
if (isset($_FILES['logo'])) {
//			echo $_FILES['logo']['tmp_name'];
$target_dir = "images/vendorlogo/";
$fileExt1 = explode('.', $_FILES["logo"]["name"]);
$fileActualExt1 = strtolower(end($fileExt1));
$row = mysqli_fetch_assoc($result);

createDir($target_dir);
//print_r($_FILES);
$target_file = $target_dir . "logo-".$row['id'].".".$fileActualExt1;
$target_dir = './' . $target_file;
$uploadOk = 1;
echo "$logoStatus & $logoError & $uploadOk <br> <br> <br>";

$imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);

// Check if image file is a actual image or fake image
if (isset($_POST["submit"])) {
	$check = getimagesize($_FILES["logo"]["tmp_name"]);
	if ($check !== false) {
		$logoStatus = "File is an image  - " . $check["mime"] . ".";
		echo "$logoStatus & $logoError <br> <br> ";
		$uploadOk = 1;
		echo "$logoStatus & $logoError & $uploadOk <br> <br> <br>";
	} else {
		$logoError = "File is not in an acceptable format.";
		$uploadOk = 0;
		echo "$logoStatus & $logoError & $uploadOk <br> <br> <br>";
		//exit;
	}
}

// Check file size
if ($_FILES["logo"]["size"] > 5000000) {
	$logoError = "Sorry, your file is too large.";
	$uploadOk = 0;
	echo "$logoStatus & $logoError & $uploadOk <br> <br> <br>";
}
// Allow certain file formats
if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
	&& $imageFileType != "gif") {
	$logoError = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
	$uploadOk = 0;
	echo "$logoStatus & $logoError & $uploadOk <br> <br> <br>";
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
	$logoError = "Sorry, your file was not uploaded.";
	echo "$logoStatus & $logoError & $uploadOk <br> <br> <br>";
	// if everything is ok, try to upload file
} else {
	if (move_uploaded_file($_FILES["logo"]["tmp_name"], $target_dir)) {

		$queryimage1 = "UPDATE `vendor_info` SET `logo` = '$target_file' WHERE `vendor_info`.`id` = '$vendorid' ";

		if (mysqli_query(DB::_db(), $queryimage1)) {
			echo "image input sucessful";
		}

		$logoStatus = "The file " . basename($_FILES["logo"]["name"]) . " has been uploaded.";
		$logo_dir = $target_dir;
		echo "$logoStatus & $logoError & $uploadOk <br> <br> <br> $ $logo_dir";
	} else {
		$logoError = "Sorry, there was an error uploading your file.";
		echo "$logoStatus & $logoError & $uploadOk <br> <br> <br>";
	}
}


} else {
	echo "image is missing";
}

?>