<?php

session_start();

$mysqli = new mysqli('localhost', 'ahad', '', 'restaurant') or die(mysqli_error($mysqli));


$update = false;


$id = 0;
$WtrId = '';
$w_name = '';
$w_cnic = '';
$w_address= '';
$w_phone = '';
$dtype = '';
$datetime= '';
$data = '';

if(isset($_POST['ADD'])){

    $WtrId = $_POST['w_id'];
    $w_name = $_POST['w_name'];
    $w_cnic = $_POST['w_cnic'];
    $w_phone = $_POST['w_phone'];
    $w_address = $_POST['w_address'];
    $dtype = $_POST['dtype'];
    $datetime = $_POST['datetime'];

    if($dtype == 'Cashier'){
    $data = 0;
    }
    elseif ($dtype == 'Others') {
        $data = 2;
    }
    else {
        $data = 1;
    }
 
	$mysqli->query("INSERT INTO waiter (w_id, w_name, w_cnic, w_phone, w_address, dtype, datetime) 
	VALUES('$WtrId','$w_name', '$w_cnic', '$w_phone', '$w_address','$data','$datetime')") or die($mysqli->error);

	$_SESSION['message'] = "Record has been Saved";
	$_SESSION['msg_type'] = "success";
	
	header("location: waiter.php");
}

if (isset($_GET['delete'])){
	$id = $_GET['delete'];
	$mysqli->query("DELETE from waiter WHERE id=$id") or die($mysqli->error());

	$_SESSION['message'] = "Record has been deleted!";
	$_SESSION['msg_type'] = "danger";
	
	header("location: waiter.php");
}

if (isset($_GET['edit'])){
	$id = $_GET['edit'];
	$update = true;
	$result = $mysqli->query("SELECT * FROM waiter WHERE id='$id'") or die($mysqli->error());
	//if (count($result)==1){
        $row = $result->fetch_array();
        $WtrId = $row['w_id'];
        $w_name = $row['w_name'];
        $w_cnic = $row['w_cnic'];
        $w_phone = $row['w_phone'];
        $w_address = $row['w_address'];
        $dtype = $row['dtype'];
	    $datetime = $row['datetime'];
    //}
	
}

if(isset($_POST['UPDATE'])){
    $id = $_POST['id'];
    $WtrId = $_POST['w_id'];
    $w_name = $_POST['w_name'];
    $w_cnic = $_POST['w_cnic'];
    $w_phone = $_POST['w_phone'];
    $w_address = $_POST['w_address'];
    $dtype = $_POST['dtype'];
    $datetime = $_POST['datetime'];

    if($dtype == 'Cashier'){
        $data = 0;
        }
        elseif ($dtype == 'Others') {
            $data = 2;
        }
        else {
            $data = 1;
        }
	
	$mysqli->query("UPDATE waiter SET w_id='$WtrId', w_name='$w_name', w_cnic='$w_cnic', w_phone='$w_phone', w_address='$w_address',dtype='$data', datetime = '$datetime'
	 WHERE id='$id'") or die($mysqli->error);
	$_SESSION['message'] = "Record has been updateed!";
	$_SESSION['msg_type'] = "warning";
	
	header('location: waiter.php');
}

?>