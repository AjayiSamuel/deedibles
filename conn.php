<?php
	$conn = mysqli_connect("localhost","root","","vendordb");

	if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>