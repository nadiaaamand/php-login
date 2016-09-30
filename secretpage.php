<?php 
include 'header-secret.php';?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
<article>
<?php 
//Calling for the user id - if you are logged in you will see the id, if not you will get the else message
	if (isset($_SESSION['ID'])) {
		echo '<h1>';
		echo "Succes!";
		echo '</h1>';
		echo '<img src="img/succes.jpg" width="600" alt="succes"/>';
		} else {
			echo '<h1>';
			echo "Something's wrong...";
			echo '</h1>';
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