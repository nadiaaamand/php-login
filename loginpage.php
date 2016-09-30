<?php 
include 'header.php';

//Calling for the user id - if you are logged in you will see the id, if not you will get the else message
	if (isset($_SESSION['ID'])) {
		echo '<h1>';
		echo "Hmm this is weird.. You should not be here unless you just added a new user!";
		echo '</h1>';
		} else {
			echo '<h1>';
			echo "You are now added to the database, please sign in";
			echo '</h1>';
		}
?>

