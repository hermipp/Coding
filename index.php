<!DOCTYPE HTML>
<html>
	<head>
		<title>WebChat</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<div id="main">
			<div id="info">
				<h2>Log in here</h2>
				
				<form action="login.php" method="post">
					<label><b>Username</b></label>
						<input type="text" name="uname" placeholder="Username"><br /><br />
					<label><b>Password</b></label>
						<input type="password" name="psswd" placeholder="Password"><br /><br />
					<button style="background-color: #6495ed;color: white;" type="submit"><b>Log in</b></button>
				</form>
				
				<form action="signup.php" method="post">
					<h2>Don't have an account, sign up here</h2>
					
					<label>Username:</label>
						<input type="text" name="username" placeholder="Username"><br /><br />
					<label>Email Add:</label>
						<input type="text" name="email" placeholder="Email"><br /><br />
					<label>Password:</label>
						<input type="password" name="password" placeholder="Password"><br /><br />
					<button style="background-color: #6495ed;color: white;" type="submit"><b>Sign up</b></button>
				</form>
			</div>
		</div>
	</body>
</html>
