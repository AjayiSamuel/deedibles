<?php
	require("conn.php");

	$file2 = $_FILES['imagetwo'];
	$fileName2 = $_FILES['imagetwo']['name'];
	$fileTmpName2 = $_FILES['imagetwo']['tmp_name'];
	$fileSize2 = $_FILES['imagetwo']['size'];
	$fileError2 = $_FILES['imagetwo']['error'];
	$fileType2 = $_FILES['imagetwo']['type'];

	$fileExt2 = explode('.', $fileName2);
	$fileActualExt2 = strtolower(end($fileExt2));

	if (in_array($fileActualExt2, $allowed)) {
		if ($fileError2 === 0){
			if ($fileSize2 < 5000000){
				$fileNameNew2 = uniqid('',true).".".$fileActualExt2;
				$fileDestination2 = 'images/'.$fileNameNew2;
				move_uploaded_file($fileTmpName2, $fileDestination2);

				$queryimage2 = "UPDATE `vendor_info` SET `image2`= '$fileDestination2' WHERE `vendor_info`.`id` = '$vendorid' ";

				if(mysqli_query($conn,$queryimage2)){
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