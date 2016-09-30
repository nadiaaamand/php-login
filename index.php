<?php 
	include 'header.php';
?>

<body> 


<?php 
//Calling for the user id - if you are logged in you will see the id, if not you will get the else message
	if (isset($_SESSION['ID'])) {
		echo '<h1>';
		echo "You are logged in <br><br> If you want to log out you should press the button 'Log out'";
		echo '</h1>';
		} else {
			echo '<h1>';
			echo "Hey! Please sign in or sign up.";
			echo '</h1>';
		}
?>
</body>
</html>