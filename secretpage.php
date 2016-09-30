<?php 
include 'header.php';

//Calling for the user id - if you are logged in you will see the id, if not you will get the else message
	if (isset($_SESSION['ID'])) {
		echo "Hey you! This is amazing, you have found the secret page";
		} else {
			echo "Something's wrong...";
		}
?>
