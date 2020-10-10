<?php

session_start();

$mysqli = new mysqli('localhost', 'ahad', '', 'restaurant') or die(mysqli_error($mysqli));


$update = false;


$id = 0;
$w_name = '';

if(isset($_POST['CHECK'])){

    $w_name = $_POST['w_name'];
    $datetime = $_POST['datetime'];


	$mysqli->query("SELECT * FROM waiter WHERE w_name = '$w_name'") or die($mysqli->error);

	$_SESSION['message'] = "Record has been saved!";
	$_SESSION['msg_type'] = "success";
	
	header("location: waiterreport.php");
}
