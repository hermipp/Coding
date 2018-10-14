<!-- Project Manager 0.1 Alpha - versión ESP -->
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
				<tr><th>Nombre de usuario</th><td><input type="text" name="uname" placeholder="Usuario" required></td></tr>
				<tr><th>Contraseña</th><td><input type="password" name="psswd" placeholder="Contraseña" required></td></tr>
				<tr><td colspan="2" align="right"><input type="submit" name="login" value="Log in"></td></tr>
				<tr><td colspan="2" align="center"><a href="http://localhost/projectmanager/index-val.php">Anar a la versió en valencià</a></td></tr>
				<tr><td colspan="2" align="center"><a href="http://localhost/projectmanager/index-eng.php">Go to English version</a><br /></td></tr>
				<tr><td colspan="2" align="center"><input type="checkbox" name="remember-eng" value="2"> <b>Prefiero usar la versión en castellano</b></td></tr>
				<tr><td colspan="2" align="center"><div class="alert alert-info alert-dismissable"><b>NOTA: si selecciona la casilla "Prefiero usar la versión en<br />castellano",cuando inicie sesión en menos de un mes, automáticamente </br>será redirigido a la versión en castellano</b></div></td></tr>
			</form>
		</table>
	</body>
</html>
