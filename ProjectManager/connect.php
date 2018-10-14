<?php
	$connect=mysqli_connect("localhost","root","","mydatabase");
	if(!$connect){
		die("Connection failed".mysqli_connect_error());
	}
?>
