<?php
	include 'dbh.php';
	$uname=$_POST['username'];
	$email=$_POST['email'];
	$psswd=$_POST['password'];
	
	$sql="INSERT INTO signup(username,email,password) VALUES ('$uname','$email','$psswd')";
	$result=$conn->query($sql);
	
	header("Location:index.php");
?>
