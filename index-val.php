<!-- Project Manager 0.1 Alpha - versió VAL -->
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
				<tr><th>Nom d'usuari</th><td><input type="text" name="uname" placeholder="Usuari" required></td></tr>
				<tr><th>Contrasenya</th><td><input type="password" name="psswd" placeholder="Contrasenya" required></td></tr>
				<tr><td colspan="2" align="right"><input type="submit" name="login" value="Log in"></td></tr>
				<tr><td colspan="2" align="center"><a href="http://localhost/projectmanager/index-esp.php">Ir a la versión en castellano</a></td></tr>
				<tr><td colspan="2" align="center"><a href="http://localhost/projectmanager/index-eng.php">Go to English version</a><br /></td></tr>
				<tr><td colspan="2" align="center"><input type="checkbox" name="remember-eng" value="3"> <b>Preferisc utilitzar la versió en valencià</b></td></tr>
				<tr><td colspan="2" align="center"><div class="alert alert-info alert-dismissable"><b>NOTA: si selecciona la casella "Preferisc utilizar la versió en<br />valencià",quan inicie sessió en menys d'un mes, automàticament </br>serà redirigit a la versió en valencià</b></div></td></tr>
			</form>
		</table>
	</body>
</html>
