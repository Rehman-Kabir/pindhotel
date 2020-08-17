<?php 
$dbhost = 'localhost';
$dbuser = 'pharmacy';
$dbpass = '';
$db = 'expenditure';

$conn = new mysqli($dbhost, $dbuser, $dbpass, $db);
if($conn -> connect_error){
	die("connection failed :". $conn ->connect_error);
}
 ?>