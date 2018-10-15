<!-- Project Manager 0.1 Alpha - ENG version -->
<!DOCTYPE HTML>

<html>
	<head>
		<title>Project Manager</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<body>
		<table cellpadding="5" cellspacing="10" align="center">
			<h1 align="center">Project Manager</h1>
			<form name="login" action="login.php" method="post">
				<tr><th>Username</th><td><input type="text" name="uname" placeholder="Username" required></td></tr>
				<tr><th>Password</th><td><input type="password" name="psswd" placeholder="Password" required></td></tr>
				<tr><td colspan="2" align="right"><input type="submit" name="login" value="Log in"></td></tr>
				<tr><td colspan="2" align="center"><a href="index-esp.php">Ir a la versión en castellano</a></td></tr>
				<tr><td colspan="2" align="center"><a href="index-val.php">Anar a la versió en valencià</a><br /></td></tr>
				<tr><td colspan="2" align="center"><input type="checkbox" name="remember-eng" value="1"> <b>I prefer using English version</b></td></tr>
				<tr><td colspan="2" align="center"><div class="alert alert-info alert-dismissable"><b>NOTE: if you select "I prefer using the English<br />version", if you log in in less than a month, you'll be </br>automatically redirected to the English version</b></div></td></tr>
		<tr><td><input type="hidden" name="lang" value="eng"></td></tr>
			</form>
		</table>
	</body>
</html>
