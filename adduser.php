<?php 
session_start();
include 'db-connection.php';
//getting connection to the database while asking for specific data and where it needs to be put
$first = $_POST['first'];
$last = $_POST['last'];
$uid = $_POST['uid'];
$pwd = $_POST['pwd'];

$sql = "INSERT INTO user (first, last, uid, pwd) VALUES ('$first', '$last', '$uid', '$pwd')";

$result = mysqli_query($conn, $sql);

header("Location: index.php")

?>