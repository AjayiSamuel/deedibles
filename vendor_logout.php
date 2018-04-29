<?php
require 'vendor/autoload.php';
use App\Sessions;
Sessions::init();
if(!isset($_SESSION['username']))
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