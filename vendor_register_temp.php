<?php
	include("vendor_register_process.php");
?>

<form method="POST" action="">
	<input name ="username" type="text" value="<?php $vendorusername ?>" placeholder="Enter your username (E.g 'AjayiSamuel')" required><br>
	<input name ="email" type="email" value="<?php $vendoremail ?>" placeholder="enter your email" required><br>
	<input name ="password" type="password" value="<?php $vendorpassword?>" placeholder="enter password" required><br>
	<input name ="confirmpassword" type="password" placeholder="confirm " required><br>
	<input type="submit" value="Register" name="submit"><br>
		<p><?php echo $error; echo $passworderror; echo $emailerror; echo $usernameerror; ?></p>
</form>