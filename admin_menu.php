<?php
require '../../vendor/autoload.php';
use App\Sessions;
Sessions::init();
if(!isset($_SESSION['username']))
{
	header("Location:admin_login.php");
	exit;
}
else
{
	$adminname = $_SESSION['username'];
	echo " $adminname's session <br /> <a href='admin_logout.php'>Logout</a> <br> ";
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Administrative menu</title>
</head>
<body>
	<h3>
		Welcome Administrator
	</h3>

<a href="?view_user">veiw users</a> 
<a href="?update_user">update user</a> 
<a href="?delete_user">delete user</a>
<br>
<br>

<?php

if(isset($_GET['view_user'])){
		include("admin_view.php");
	}
	elseif(isset($_GET['update_user'])){
		include "admin_update.php";
	}
	elseif(isset($_GET['delete_user'])){
		include "admin_delete.php";
	}
	else {
		include "admin_view.php";
	}
?>

</body>
</html>



