<?php 
	include("app/modules/vendor_upload_profile_process.php");
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
	Welcome <span style="font-weight:900;"><?php echo "$vendorusername" ; ?></span>
</h3>
</div>           
                      <div class="text-sub">Enter details of company below:</div>
                    </div>
                  </div>
                  <!-- .form-header-->

                  <div class="form-body">
                    <div class="mv-form-group">
                      <div class="mv-label"> <strong class="text-uppercase">Company Name</strong></div>
                      <div class="mv-field">
					  <input name="companyname" type="text" placeholder="enter company name" class="mv-inputbox mv-inputbox-style-1" required>
                      </div>
					</div>

					<div class="mv-form-group">
                      <div class="mv-label"> <strong class="text-uppercase">Company bio/slogan</strong></div>
                      <div class="mv-field">
					  <input name="description" type ="message" placeholder="enter your company's description" class="mv-inputbox mv-inputbox-style-1" required>
                      </div>
					</div>
					
					<div class="mv-form-group">
                      <div class="mv-label"> <strong class="text-uppercase">Phone Number</strong></div>
                      <div class="mv-field">
					  <input name="phone_number" type="text"  placeholder="enter company phone number" class="mv-inputbox mv-inputbox-style-1" required>
                      </div>
					</div>
					
										
					<div class="mv-form-group">
                      <div class="mv-label"> <strong class="text-uppercase">facebook</strong></div>
                      <div class="mv-field">
					  <input name="facebook_link" type="text" placeholder="paste link to facebook page here" class="mv-inputbox mv-inputbox-style-1" required>
                      </div>
					</div>

					<div class="mv-form-group">
                      <div class="mv-label"> <strong class="text-uppercase">Instagram</strong></div>
                      <div class="mv-field">
					  <input name="instagram_link" type="text" placeholder="paste link to Instagram page here" class="mv-inputbox mv-inputbox-style-1" required>


                      </div>
					</div>
					
					<div class="mv-form-group">
                      <div class="mv-label"> <strong class="text-uppercase">category</strong></div>
                      <div class="mv-field">
											<select name="category" placeholder="select your category">
		<option value="cakes">cake</option>
		<option value="chocolates">chocolate</option>
		<option value="cocktails">cocktail</option>
		<option value="cupcakes">cupcake</option>
		<option value="dessert">dessert</option>
		<option value="edible arrangements">edible arrangement</option>
		<option value="edible underwears">edible underwear</option>
		<option value="fruit trees">fruit trees</option>
		<option value="gift baskets">gift basket</option>
		<option value="ice cream bars">ice cream bar</option>
		<option value="small chops">small chops</option>
		<option value="snacks">snacks</option>
	</select>
                      </div>
					</div>

					<div class="mv-form-group">
                      <div class="mv-label"> <strong class="text-uppercase">Upload Logo</strong></div>
                      <div class="mv-field">
											<input type="file" name="logo" placeholder="upload your company logo" required><span><?php echo "$logoError";?></span>
                      </div>
          </div>
          
          <div class="mv-form-group">
                      <div class="mv-label"> <strong class="text-uppercase">Background Image</strong></div>
                      <div class="mv-field">
											<input type="file" name="profilebackground" placeholder="upload your company logo" required><span><?php echo "$logoError";?></span>
                      </div>
					</div>

					<div class="mv-form-group">
                      <div class="mv-label"> <strong class="text-uppercase">First Image</strong></div>
                      <div class="mv-field">
											<input type="file" name="imageone" placeholder="upload first image" required>          </div>
					</div>

					<div class="mv-form-group">
                      <div class="mv-label"> <strong class="text-uppercase">Second Image</strong></div>
                      <div class="mv-field">
											<input type="file" name="imagetwo" placeholder="upload second image " required>
                      </div>
					</div>

					<div class="mv-form-group">
                      <div class="mv-label"> <strong class="text-uppercase">Third Image</strong></div>
                      <div class="mv-field">
											<input type="file" name="imagethree" placeholder="upload third image " required>
                      </div>
					</div>

					<div class="mv-form-group">
                      <div class="mv-label"> <strong class="text-uppercase">Enter Address</strong></div>
                      <div class="mv-field">
					  <input name="address" type="text" placeholder="enter company address" class="mv-inputbox mv-inputbox-style-1" required>
                      </div>
          </div>
          <div class="mv-form-group">
                      <div class="mv-label"> <strong class="text-uppercase">Company Description</strong></div>
                      <div class="mv-field">
						<textarea name="longcompanydesription" placeholder="Enter company description " class="mv-inputbox mv-inputbox-style-1" required style="resize:vertical;">
</textarea>
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

<?php
include 'layouts/footer.php';
?>
</body>
</html>