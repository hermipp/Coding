<?php
include 'dbh.php';
session_start()

?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Home</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="home.css">
	</head>
	<body>
		<div id="main">
			<h1 style="background-color: #6495ed;color: white;"><?php echo $_SESSION['name']?>-online</h1>
				<div class="output">
					<?php
						$sql="SELECT * FROM posts ";
						$result=$conn->query($sql);
						
						if($result->num_rows > 0){
							while($row=$result->fetch_assoc()){
								echo "" . $row["name"]. " " . ":: " . $row["msg"]." --".$row["date"]. "<br />";
								echo "<br />";
							}
						}
						else{
							echo "O results";
						}
						$conn->close();
					?>
				</div>
			<form action="send.php" method="post">
				<textarea name="msg" placeholder="Type to send message..." class="form-control"></textarea><br />
				<input type="submit" value="Send">
			</form><br />
			<form action="logout.php">
				<input style="width: 100%;background-color: #6495ed;color: white;font-size: 20px;" type="submit" value="Log out">
			</form>
		</div>
	</body>
</html>
