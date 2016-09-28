<?php 
session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body> 
<form  action="login.php" method="POST">
	<input type="text" name="uid" placeholder="Username"><br>
    <input type="password" name="pwd" placeholder="Password"><br>
    <button type="submit">Log in</button>

</form>

<?php 
	if (isset($_SESSION['ID'])) {
		echo $_SESSION['ID'];
		} else {
			echo "You are not logged in";
		}
?>
<br><br> 
<form action="adduser.php" method="POST">
	<input type="text" name="first" placeholder="First Name"><br>
	<input type="text" name="last" placeholder="Last Name"><br>
    <input type="text" name="uid" placeholder="Username"><br>
    <input type="password" name="pwd" placeholder="Password"><br>
    <button type="submit">Sign Up</button>
</form>
 
<br><br> 
<form action="logout.php">
	 <button>Log out</button>
</form>
</body>
</html>