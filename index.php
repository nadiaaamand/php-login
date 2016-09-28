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
<!--Log in form, using POST so it wont be visible in the browser-->
<form  action="login.php" method="POST">
	<input type="text" name="uid" placeholder="Username"><br>
    <input type="password" name="pwd" placeholder="Password"><br>
    <button type="submit">Log in</button>

</form>

<?php 
//Calling for the user id - if you are logged in you will see the id, if not you will get the else message
	if (isset($_SESSION['ID'])) {
		echo $_SESSION['ID'];
		} else {
			echo "You are not logged in";
		}
?>
<br><br> 
<!--Sign up form, needing full name and username + password. Then by using the action (where it directs to another page) and POST method it directs the info to the database-->
<form action="adduser.php" method="POST">
	<input type="text" name="first" placeholder="First Name"><br>
	<input type="text" name="last" placeholder="Last Name"><br>
    <input type="text" name="uid" placeholder="Username"><br>
    <input type="password" name="pwd" placeholder="Password"><br>
    <button type="submit">Sign Up</button>
</form>
 
<br><br> 
<!--log out form. redirects to the logout.php where it destroyes the session-->
<form action="logout.php">
	 <button>Log out</button>
</form>
</body>
</html>