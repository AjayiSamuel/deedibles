<?php

use App\Database as DB;

$file3 = $_FILES['imagethree'];
$fileName3 = $_FILES['imagethree']['name'];
$fileTmpName3 = $_FILES['imagethree']['tmp_name'];
$fileSize3 = $_FILES['imagethree']['size'];
$fileError3 = $_FILES['imagethree']['error'];
$fileType3 = $_FILES['imagethree']['type'];

$fileExt3 = explode('.', $fileName3);
$fileActualExt3 = strtolower(end($fileExt3));

$conn = DB::_db();
$query = "SELECT * FROM vendor_info WHERE id = '$vendorid'";
$result = mysqli_query($conn,$query);
$row = mysqli_fetch_assoc($result);

if (in_array($fileActualExt3, $allowed)) {
	if ($fileError3 === 0) {
		if ($fileSize3 < 5000000) {
			$fileNameNew3 = "image3-" .$row['id']."." . $fileActualExt3;
			$fileDestination3 = 'images/vendorimages/' . $fileNameNew3;
			move_uploaded_file($fileTmpName3, $fileDestination3);

			$queryimage3 = "UPDATE `vendor_info` SET `image3`= '$fileDestination3' WHERE `vendor_info`.`id` = '$vendorid' ";

			if (mysqli_query(DB::_db(), $queryimage3)) {
				echo "image input sucessful";
			}

		} else {
			echo "your file was too big";
		}

	} else {
		echo "there was an error uploading your file";
	}
} else {
	echo "you cannot upload files of this type";
}


?>