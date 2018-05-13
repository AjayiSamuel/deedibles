<?php
use App\Database as DB;
$imageError = NULL;
$imageStatus = NULL;

$conn = DB::_db();
$query = "SELECT * FROM vendor_info WHERE id = '$vendorid'";
$result = mysqli_query($conn,$query);

if (isset($_FILES['profilebackground'])) {
    $target_dir = "images/vendorBackground/";
    $fileExt1 = explode('.', $_FILES["profilebackground"]["name"]);
    $fileActualExt1 = strtolower(end($fileExt1));
    $row = mysqli_fetch_assoc($result);
    
    $background_file = $target_dir . "profilebackground-".$row['id'].".".$fileActualExt1;
    $target_dir = './' . $background_file;
    $uploadOk = 1;
    echo "$imageStatus & $imageError & $uploadOk <br> <br> <br>";
    
    $imageFileType = pathinfo($background_file, PATHINFO_EXTENSION);
    
    // Check if image file is a actual image or fake image
    if (isset($_POST["submit"])) {
        $check = getimagesize($_FILES["profilebackground"]["tmp_name"]);
        if ($check !== false) {
            $imageStatus = "File is an image  - " . $check["mime"] . ".";
            echo "$imageStatus & $imageError <br> <br> ";
            $uploadOk = 1;
            echo "$imageStatus & $imageError & $uploadOk <br> <br> <br>";
        } else {
            $imageError = "File is not in an acceptable format.";
            $uploadOk = 0;
            echo "$imageStatus & $imageError & $uploadOk <br> <br> <br>";
            //exit;
        }
    }
    
    // Check file size
    if ($_FILES["profilebackground"]["size"] > 5000000) {
        $imageError = "Sorry, your file is too large.";
        $uploadOk = 0;
        echo "$imageStatus & $imageError & $uploadOk <br> <br> <br>";
    }
    // Allow certain file formats
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif") {
        $imageError = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
        echo "$imageStatus & $imageError & $uploadOk <br> <br> <br>";
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        $imageError = "Sorry, your file was not uploaded.";
        echo "$imageStatus & $imageError & $uploadOk <br> <br> <br>";
        // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["profilebackground"]["tmp_name"], $target_dir)) {
            
            $queryimage1 = "UPDATE `vendor_info` SET `background_img` = '$background_file' WHERE `vendor_info`.`id` = '$vendorid' ";

			if (mysqli_query(DB::_db(), $queryimage1)) {
				echo "image input sucessful";
            }
            
            $imageStatus = "The file " . basename($_FILES["profilebackground"]["name"]) . " has been uploaded.";
            $logo_dir = $target_dir;
            echo "$imageStatus & $imageError & $uploadOk <br> <br> <br> $ $logo_dir";
        } else {
            $imageError = "Sorry, there was an error uploading your file.";
            echo "$imageStatus & $imageError & $uploadOk <br> <br> <br>";
        }
    }
    

    } else {
        echo "image is missing";
    }
