<?php
session_start();

if(!isset($_SESSION['name']))
{
	header("Location:index.php");
}
else
{
	session_destroy();
	$logoutStatus = "Logout Successful";
	header("Location:index.php");
}
?>