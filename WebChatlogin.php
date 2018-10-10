<?php
	session_start();
	include 'dbh.php';
	
	$uname=$_POST['uname'];
	$psswd=$_POST['psswd'];
	
	$sql="SELECT * FROM signup WHERE username='$uname' AND password='$psswd'";
	$result=$conn->query($sql);
	
	if(!$row=$result->fetch_assoc()){
		header("Location:error.php");
	}
	else{
		$_SESSION['name']=$_POST['uname'];
		
		header("Location:home.php");
	}
?>
