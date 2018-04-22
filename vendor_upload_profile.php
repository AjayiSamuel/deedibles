<?php 
	include("vendor_upload_profile_process.php");
?>
<h3>
	Welcome <span><?php echo "$vendorusername" ; ?></span> Enter details of company below:
</h3>

<form method="POST" action="" enctype="multipart/form-data">
	<input name="companyname" type="text" placeholder="enter company name" required>
	<br>
	<input name="description" type ="message" placeholder="enter your company's description" required>
	<br>
	<input name="phone_number" type="text"  placeholder="enter company phone number" required>
	<br>
	<input name="facebook_link" type="text" placeholder="paste link to facebook page here" required>
	<br>
	<input name="instagram_link" type="text" placeholder="paste link to Instagram page here" required>
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

