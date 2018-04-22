<?php
session_start();

if(!isset($_SESSION['username']))
{
	header("Location:admin_login.php");
}
else
{
	session_destroy();
	$logoutStatus = "Logout Successful";
	header("Location:admin_login.php");
}
?>