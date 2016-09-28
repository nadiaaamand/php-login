<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body> 
<form>
	<input type="text" name="uid" placeholder="Username"><br>
    <input type="password" name="pwd" placeholder="Password"><br>
    <button type="submit">Log in</button>

</form>
<br><br>
<form action="adduser.php" method="POST">
	<input type="text" name="first" placeholder="First Name"><br>
	<input type="text" name="last" placeholder="Last Name"><br>
    <input type="text" name="uid" placeholder="Username"><br>
    <input type="password" name="pwd" placeholder="Password"><br>
    <button type="submit">Sign Up</button>
</form>
</body>
</html>