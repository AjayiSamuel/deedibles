<?php

use App\Database as DB;

$file2 = $_FILES['imagetwo'];
$fileName2 = $_FILES['imagetwo']['name'];
$fileTmpName2 = $_FILES['imagetwo']['tmp_name'];
$fileSize2 = $_FILES['imagetwo']['size'];
$fileError2 = $_FILES['imagetwo']['error'];
$fileType2 = $_FILES['imagetwo']['type'];

$fileExt2 = explode('.', $fileName2);
$fileActualExt2 = strtolower(end($fileExt2));
$conn = DB::_db();
$query = "SELECT * FROM vendor_info WHERE id = '$vendorid'";
$result = mysqli_query($conn,$query);
$row = mysqli_fetch_assoc($result);

if (in_array($fileActualExt2, $allowed)) {
	if ($fileError2 === 0) {
		if ($fileSize2 < 5000000) {
			$fileNameNew2 = "image2-".$row['id'] . "." . $fileActualExt2;
			$fileDestination2 = 'images/vendorimages/' . $fileNameNew2;
			move_uploaded_file($fileTmpName2, $fileDestination2);

			$queryimage2 = "UPDATE `vendor_info` SET `image2`= '$fileDestination2' WHERE `vendor_info`.`id` = '$vendorid' ";

			if (mysqli_query(DB::_db(), $queryimage2)) {
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