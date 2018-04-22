<?php
 include("admin_login_process.php");
?>
<form method="POST" action="admin_login.php">
    <input type="text" name="name" placeholder="enter admin id" required>
    <input type="password" name="password" placeholder="enter password" required>
    <input type="submit" name="submit" value="submit">
</form>
<span><?php echo $error; ?></span>