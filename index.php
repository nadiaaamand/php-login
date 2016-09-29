<?php 
	include 'header.php';
?>

<body> 


<?php 
//Calling for the user id - if you are logged in you will see the id, if not you will get the else message
	if (isset($_SESSION['ID'])) {
		echo $_SESSION['ID'];
		} else {
			echo "You are not logged  in";
		}
?>
</body>
</html>