<?php 
	include("vendor_login_process.php");
?>

<form action="" method="POST">
	<input type="email" name="email" placeholder="enter your email" required/>
	<input  type="password" name="password" placeholder="enter your password" required/>
	<input type="submit" value="login" name="submit" />
	<p> <?php echo $error ?> </p>
</form>
