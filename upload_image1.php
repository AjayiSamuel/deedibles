<?php
	require("conn.php");

	$file1 = $_FILES['imageone'];
	$fileName1 = $_FILES['imageone']['name'];
	$fileTmpName1 = $_FILES['imageone']['tmp_name'];
	$fileSize1 = $_FILES['imageone']['size'];
	$fileError1 = $_FILES['imageone']['error'];
	$fileType1 = $_FILES['imageone']['type'];

	$fileExt1 = explode('.', $fileName1);
	$fileActualExt1 = strtolower(end($fileExt1));

	$allowed = array('jpg', 'jpeg', 'png', 'gif', 'svg', 'tiff');

	if (in_array($fileActualExt1, $allowed)) {
		if ($fileError1 === 0){
			if ($fileSize1 < 5000000){
				$fileNameNew1 = uniqid('',true).".".$fileActualExt1;
				$fileDestination1 = 'images/'.$fileNameNew1;
				move_uploaded_file($fileTmpName1, $fileDestination1);

				$queryimage1 = "UPDATE `vendor_info` SET `image1`= '$fileDestination1' WHERE `vendor_info`.`id` = '$vendorid' ";

				if(mysqli_query($conn,$queryimage1)){
					echo "image input sucessful";
				}

			}else{
				echo "your file was too big";
			}

		}else{
			echo "there was an error uploading your file";
		}
	 } else {
	 	echo "you cannot upload files of this type";
	 }


?>