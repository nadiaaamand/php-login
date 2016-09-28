<?php 
session_start();
include 'db-connection.php';
//connects to database and looks to see if username or password is right or wrong
$uid = $_POST['uid'];
$pwd = $_POST['pwd'];

$sql = "SELECT * FROM user WHERE uid='$uid' AND pwd='$pwd'";

$result = mysqli_query($conn, $sql);

if (!$row = mysqli_fetch_assoc($result)) {
	echo "Your Username or Password is incorrect, please try again";
	} else {
		$_SESSION['ID'] = $row['ID'];
		}

header("Location: index.php")

?>