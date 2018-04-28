<?php
require '../../vendor/autoload.php';
use App\Sessions;
Sessions::init();
if(!isset($_SESSION['username']))
{
	header("Location:admin_login.php");
}
else
{
	Sessions::destroy();
	$logoutStatus = "Logout Successful";
	header("Location:admin_login.php");
}
?>