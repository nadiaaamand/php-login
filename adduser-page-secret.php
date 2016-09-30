<?php 
	include 'header-secret.php';
?>

<body> 
<article>
<?php 
//Calling for the user id - if you are logged in you will see the id, if not you will get the else message
	if (isset($_SESSION['ID'])) {
		echo '<h1>';
		echo "Hey!";
		echo '</h1>';
		} else {
			echo '<h1>';
			echo "Sign up to be a part of our great team!";
			echo '</h1>';
		}
?>
<?php
//Calling for the user id - if you are logged in you will see the id, if not you will get the else message
	if (isset($_SESSION['ID'])) {
		echo '<h1>';
		echo "You are already logged in!";
		echo '</h1>';
		} else {
			echo //Sign up form, needing full name and username + password. Then by using the action (where it directs to another page) and POST method it directs the info to the database
			"<form class='signup' action='adduser.php' method='POST'>
				<input class='signin' type='text' name='first' placeholder='First Name' required><br>
				<input class='signin' type='text' name='last' placeholder='Last Name' required><br>
				<input class='signin' type='text' name='uid' placeholder='Username' required><br>
				<input class='signin' type='password' name='pwd' placeholder='Password' required><br>
				<button id='submit' type='submit'>Sign Up</button>
		</form>";
		}
?>
</article>
<footer>
<?php 
require 'footer.php';
?>
</footer>
 
</body>
</html>