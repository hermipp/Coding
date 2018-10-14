<?php
//login.php - ProjectManager version 0.1
	include 'connect.php';
	if(isset($_POST['login'])){
		$uname = $_POST['uname'];
		$psswd = $_POST['psswd'];
		$rem_lang_checked = isset($_POST['remember']);
		if($rem_lang_checked){
			$rem_lang = $_POST['remember'];
			setcookie("language", $rem_lang, time()+60*60*30);
		}
		
		$sql="SELECT * FROM projectmanager-signup WHERE username='$uname' AND password='$psswd'";
		$result=$connect->query($sql);
		if(!$row=$result->fetch_assoc()){
			header("Location:error.php");
		}
		else{
			$_SESSION['name']=$_POST['uname'];
			if(isset($_COOKIE['language'])){
				$language=$_COOKIE['language'];
				switch($language){
					case 1:
						header("Location:home-eng.php");
						break;
					case 2:
						header("Location:home-esp.php");
						break;
					case 3:
						header("Location:home-val.php");
						break;
					default:
						die("ERROR: unknown index on \$language: login.php, line 20 \nPlease, restart the browser and reload the page");
				}
			}
			else{
				$host=$_SERVER['HTTP_HOST'];
				$uri=rtrim(dirname($_SERVER['REQUEST_URI']), '/\\');
				echo '$uri';

				$redirect="";
				if($uri=="/projectmanager/index-eng.php"){
					$redirect="/projectmanager/home-eng.php";
				}
				else if($uri=="/projectmanager/index-esp.php"){
					$redirect="/projectmanager/home-esp.php";
				}
				else if($uri=="/projectmanager/index-val.php"){
					$redirect="/projectmanager/home-val.php";
				}
				else{
					die("An unknown error has occured on login.php, line 50");
				}
				header("Location: http://".$host$redirect);
			}
		}
	}
?>
