<?php 
$dbhost = 'localhost';
$dbuser = 'ahad';
$dbpass = '';
$db = 'restaurant';

$conn = new mysqli($dbhost, $dbuser, $dbpass, $db);
if($conn -> connect_error){
	die("connection failed :". $conn ->connect_error);
}
 ?>