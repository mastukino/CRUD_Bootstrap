<?php
 
//MySQLi Procedural
$conn = mysqli_connect("localhost","root","","sample_crud_bootstrap");
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
 
?>