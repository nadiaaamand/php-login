<?php 
session_start();

$curpage = basename ($_SERVER['PHP_SELF']);
//Using this cause you can't use a class directly since the class is on all pages - instead I have used an if statement --> if the current page is e.g. p5 the echo (show) that the class active. The $_server is a super global variable which holds information about header, locations.
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
			<li><a href="index-loggedin.php" <?php if($curpage == 'index-loggedin.php') {echo 'class="active"';}?>>Home</a></li>
            <?php 
			//Calling for the user id - if you are logged in you will see the id, if not you will get the 					           else message
			if (isset($_SESSION['ID'])) {
			//log out form. redirects to the logout.php where it destroyes the session
			echo "<form class='logout' action='logout.php'>
	 		<button>Log out</button>
			</form>";
			} else {
				echo "<form action='login.php' method='POST'>
				<input type='text' name='uid' placeholder='Username' required>
    			<input type='password' name='pwd' placeholder='Password' required>
   				<button type='submit' >Log in</button>
				 </form>";
				}
			//Log in form, using POST so it wont be visible in the browser
			
			?>
            <li><a href="secretpage.php" <?php if($curpage == 'secretpage.php') {echo 'class="active"';}?>>User</a></li>
            <li><a href="adduser-page-secret.php" <?php if($curpage == 'adduser-page-secret.php') {echo 'class="active"';}?>>Sign Up</a></li>
		</ul>

	</nav>
</header>

</body>

</html>