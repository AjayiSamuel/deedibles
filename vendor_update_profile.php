<?php
require 'vendor/autoload.php';
use App\Database as DB;
	include("app/modules/vendor_update_profile_process.php");
?>

<?php


if(!isset($_SESSION['id']))
{
	echo "You need to be logged in to view this page";
	exit;
}
else
{
	$vendorid = $_SESSION['id'];
	$vendorusername = $_SESSION['username'];
	
	$conn = DB::_db();
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
		$fbLink = $row['facebook_link'];
		$igLink = $row['instagram_link'];
		$firstImg = $row['image1'];
		$secondImg = $row['image2'];
		$thridImg = $row['image3'];
		$category = $row['category'];
		$address = $row['address'];
	}
}
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    
    <title></title>
    <meta charset="UTF-8">
  <?php
  include 'layouts/head.php';
  ?>
  </head>
  <body>
    <div class="mv-site">
      <?php
include 'layouts/header.php';
	  ?>
	        <section class="mv-main-body login-main mv-bg-gray mv-wrap">
        <div class="container">
          <div class="row">
            <div class="col-sm-6 col-register" style="margin-left:auto;margin-right:auto;float:none;">
              <div class="mv-form-style-1 mv-box-shadow-gray-1">
                <form method="POST" class="form-register" action="" enctype="multipart/form-data">
                  <div class="form-header">
                    <div class="mv-title-style-13">
					<div class="text-main">
					<h3>
	Profile: <span style="font-weight:900;"><?php echo "$vendorusername" ; ?></span>
</h3>
</div>           
                      <div class="text-sub"> Update your company details below:</div>
                    </div>
                  </div>
                  <!-- .form-header-->

                  <div class="form-body">
                    <div class="mv-form-group">
                      <div class="mv-label"> <strong class="text-uppercase">Company Name</strong></div>
                      <div class="mv-field">
					  <input name="companyname" type="text" value="<?php echo $companyName?>" class="mv-inputbox mv-inputbox-style-1" required>
                      </div>
					</div>

					<div class="mv-form-group">
                      <div class="mv-label"> <strong class="text-uppercase">Company's description</strong></div>
                      <div class="mv-field">
					  <input name="description" type ="message" value="<?php echo $description?>" class="mv-inputbox mv-inputbox-style-1" required>
                      </div>
					</div>
					
					<div class="mv-form-group">
                      <div class="mv-label"> <strong class="text-uppercase">Phone Number</strong></div>
                      <div class="mv-field">
					  <input name="phone_number" type="text"  value="<?php echo $phoneNo?>" class="mv-inputbox mv-inputbox-style-1" required>
                      </div>
					</div>
					
										
					<div class="mv-form-group">
                      <div class="mv-label"> <strong class="text-uppercase">facebook</strong></div>
                      <div class="mv-field">
					  <input name="facebook_link" type="text" value="<?php echo $fbLink?>" class="mv-inputbox mv-inputbox-style-1" required>
                      </div>
					</div>

					<div class="mv-form-group">
                      <div class="mv-label"> <strong class="text-uppercase">Instagram</strong></div>
                      <div class="mv-field">
					  <input name="instagram_link" type="text" value="<?php echo $igLink?>" class="mv-inputbox mv-inputbox-style-1" required>


                      </div>
					</div>
					
					<div class="mv-form-group">
                      <div class="mv-label"> <strong class="text-uppercase">category</strong></div>
                      <div class="mv-field">
						<select name="category" placeholder="select your category" class="mv-select mv-select-style-1">
							<option value="<?php echo $category?>"><?php echo $category?></option>
							<option value="cake">cake</option>
							<option value="chocolate">chocolate</option>
							<option value="cocktail">cocktail</option>
							<option value="cupcake">cupcake</option>
							<option value="dessert">dessert</option>
							<option value="edible arrangement">edible arrangement</option>
							<option value="edible underwear">edible underwear</option>
							<option value="fruit trees">Fruit trees</option>
							<option value="gift basket">Gift basket</option>
							<option value="ice Cream bar">Ice Cream bar</option>
							<option value="small chops">small chops</option>
							<option value="snacks">snacks</option>
						</select>
                      </div>
					</div>

					<div class="mv-form-group">
                      <div class="mv-label"> <strong class="text-uppercase">Upload Logo</strong></div>
                      <div class="mv-field">
							<input type="file" name="logo" placeholder="upload your company logo" class="" required><span><?php echo "$logoError";?></span>
                      </div>
					</div>

					<div class="mv-form-group">
                      <div class="mv-label"> <strong class="text-uppercase">First Image</strong></div>
                      <div class="mv-field">
						<input type="file" name="imageone" value="<?php echo $firstImg?>">          
					  </div>
					</div>

					<div class="mv-form-group">
                      <div class="mv-label"> <strong class="text-uppercase">Second Image</strong></div>
                      <div class="mv-field">
						<input type="file" name="imagetwo" placeholder="upload second image ">
                      </div>
					</div>

					<div class="mv-form-group">
                      <div class="mv-label"> <strong class="text-uppercase">Third Image</strong></div>
                      <div class="mv-field">
						<input type="file" name="imagethree" placeholder="upload third image ">
                      </div>
					</div>
					<div class="mv-form-group">
                      <div class="mv-label"> <strong class="text-uppercase">Profile Background</strong></div>
                      <div class="mv-field">
						<input type="file" name="profilebackground" placeholder="upload Profile Background ">
                      </div>
					</div>
					<div class="mv-form-group">
                      <div class="mv-label"> <strong class="text-uppercase">Company Description</strong></div>
                      <div class="mv-field">
						<textarea name="longcompanydesription" placeholder="Enter company description " class="mv-inputbox mv-inputbox-style-1" required style="resize:vertical;" value="<?php echo $longDesc;?>">
</textarea>
                      </div>
					</div>
					<div class="mv-form-group">
                      <div class="mv-label"> <strong class="text-uppercase">Enter Address</strong></div>
                      <div class="mv-field">
					  <input name="address" type="text" value="<?php echo $address?>" class="mv-inputbox mv-inputbox-style-1" required>
                      </div>
					</div>

                    <div class="mv-form-group submit-button mv-mt-30">
                      <button type="submit" class="mv-btn mv-btn-style-5 btn-signup">Update</button>
                    </div>
                  </div>
                  <!-- .form-body-->
                </form>
                <!-- .form-register-->
              </div>
            </div>
          </div>
        </div>
      </section>

<?php
include 'layouts/footer.php';
?>
</body>
</html>

<!--
<h3>Update your profile below</h3>
<form method="POST" action="vendor_update_profile_process.php">

	<input type="submit" value="update" name="submit">
</form>
-->