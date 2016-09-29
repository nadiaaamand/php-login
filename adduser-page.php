<?php 
	include 'header.php';
?>

<body> 

<?php 
//Calling for the user id - if you are logged in you will see the id, if not you will get the else message
	if (isset($_SESSION['ID'])) {
		echo $_SESSION['ID'];
		} else {
			echo "You are not logged in";
		}
?>
<?php
//Calling for the user id - if you are logged in you will see the id, if not you will get the else message
	if (isset($_SESSION['ID'])) {
		echo "You are already logged in!";
		} else {
			echo //Sign up form, needing full name and username + password. Then by using the action (where it directs to another page) and POST method it directs the info to the database
			"<form action='adduser.php' method='POST'>
				<input type='text' name='first placeholder='First Name'><br>
				<input type='text' name='last' placeholder='Last Name'><br>
				<input type='text' name='uid' placeholder='Username'><br>
				<input type='password' name='pwd' placeholder='Password'><br>
				<button type='submit'>Sign Up</button>
		</form>";
		}
?>


 
</body>
</html>