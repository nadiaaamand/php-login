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
<header>
	<nav>
		<ul>
			<li><a href="index.php">Home</a></li>
            <?php 
			//Calling for the user id - if you are logged in you will see the id, if not you will get the 					           else message
			if (isset($_SESSION['ID'])) {
			//log out form. redirects to the logout.php where it destroyes the session
			echo "<form action='logout.php'>
	 		<button>Log out</button>
			</form>";
			} else {
				echo "<form  action='login.php' method='POST'>
				<input type='text' name='uid' placeholder='Username'>
    			<input type='password' name='pwd' placeholder='Password'>
   				<button type='submit' >Log in</button>
				 </form>";
				}
			//Log in form, using POST so it wont be visible in the browser
			
			?>
            <li><a href="adduser-page.php">Sign up</a></li>
		</ul>

	</nav>
</header>

</body>

</html>