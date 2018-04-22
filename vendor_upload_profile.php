<?php 
	include("vendor_upload_profile_process.php");
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
                <form method="POST" class="form-register" action="vendor_register_process.php">
                  <div class="form-header">
                    <div class="mv-title-style-13">
					<div class="text-main">
					<h3>
	Welcome <span style="font-weight:900;"><?php echo "$vendorusername" ; ?></span>
</h3>
</div>           
                      <div class="text-sub">Enter details of company below:</div>
                    </div>
                  </div>
                  <!-- .form-header-->

                  <div class="form-body">
                    <div class="mv-form-group">
                      <div class="mv-label"> <strong class="text-uppercase">Username</strong></div>
                      <div class="mv-field">
					  <input name="companyname" type="text" placeholder="enter company name" class="mv-inputbox mv-inputbox-style-1" required>
                      </div>
					</div>

					<div class="mv-form-group">
                      <div class="mv-label"> <strong class="text-uppercase">Username</strong></div>
                      <div class="mv-field">
					  <input name="description" type ="message" placeholder="enter your company's description" class="mv-inputbox mv-inputbox-style-1" required>
                      </div>
					</div>
					
					<div class="mv-form-group">
                      <div class="mv-label"> <strong class="text-uppercase">Username</strong></div>
                      <div class="mv-field">
					  <input name="phone_number" type="text"  placeholder="enter company phone number" class="mv-inputbox mv-inputbox-style-1" required>
                      </div>
					</div>
					
										
					<div class="mv-form-group">
                      <div class="mv-label"> <strong class="text-uppercase">Username</strong></div>
                      <div class="mv-field">
					  <input name="facebook_link" type="text" placeholder="paste link to facebook page here" class="mv-inputbox mv-inputbox-style-1" required>
                      </div>
					</div>

					<div class="mv-form-group">
                      <div class="mv-label"> <strong class="text-uppercase">Username</strong></div>
                      <div class="mv-field">
					  <input name="instagram_link" type="text" placeholder="paste link to Instagram page here" class="mv-inputbox mv-inputbox-style-1" required>


                      </div>
					</div>
					

                    <div class="mv-form-group submit-button mv-mt-30">
                      <button type="submit" class="mv-btn mv-btn-style-5 btn-signup">sign up</button>
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

<form method="POST" action="" enctype="multipart/form-data">
	
	<br>
	
	<br>
	
	<br>
	
	<br>
	
	<br>
	<input type="file" name="logo" placeholder="upload your company logo" required><span><?php echo "$logoError";?></span>
	<br>
	<input type="file" name="imageone" placeholder="upload first image" required>
	<br>
	<input type="file" name="imagetwo" placeholder="upload second image " required>
	<br>
	<input type="file" name="imagethree" placeholder="upload third image " required>
	<br>
	<select name="category" placeholder="select your category">
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
	<br>
	<input type="text" name ="address" placeholder="enter company address" required>
	<br>
	<input type="submit" value="Upload" name="submit">
</form>

<?php
include 'layouts/footer.php';
?>
</body>
</html>