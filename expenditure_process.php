<?php

$mysqli = new mysqli('localhost', 'ahad', '', 'restaurant') or die(mysqli_error($mysqli));
$update = false;
//Get values from the html page

$bill_year = '';   
$bill_month = 'Select Month';
$bill_type = 'Select Bill';
$total_units = '';
$total_amount = '';
$paid = '';
$paid_date = '';



if(isset($_POST['Submit']))
{
$bill_year = $_POST['billyear'] ;   
$bill_month = $_POST['billmonth'];
$bill_type = $_POST['billtype'];
$total_units = $_POST['noofunits'];
$total_amount = $_POST['totamouunt'];
$paid = $_POST['paid'];
$paid_date = $_POST['paiddate'];


//echo $bill_year."".$bill_month."<br/>";

$result = $mysqli->query("INSERT INTO expenditure( BillYear, BillMonth,BillType ,TotalUnits ,TotalAmount ,Paid ,PaidDate) VALUES('$bill_year','$bill_month','$bill_type','$total_units','$total_amount','$paid','$paid_date')") or die(mysqli_error($mysqli));
header("location: expenditure.php");
}

if (isset($_GET['Delete'])){
	$id = $_GET['Delete'];
	$mysqli->query("DELETE from expenditure WHERE id=$id") or die($mysqli->error());

	$_SESSION['message'] = "Record has been deleted!";
	$_SESSION['msg_type'] = "danger";
	
	header("location: expenditure.php");
}

if (isset($_GET['Edit'])){
	$id = $_GET['Edit'];
	$update = true;
	$result = $mysqli->query("SELECT * FROM expenditure WHERE id='$id'") or die($mysqli->error());
        $row = $result->fetch_array();
        $bill_year = $row['BillYear'];
       	$bill_month = $row['BillMonth'];
        $bill_type = $row['BillType'];
        $total_units = $row['TotalUnits'];
        $total_amount= $row['TotalAmount'];
        $paid  = $row['Paid'];
	$paid_date = $row['PaidDate'];
   
}

if(isset($_POST['Update'])){
 $id = $_POST['id'];
 $bill_year = $_POST['billyear'];   
 $bill_month = $_POST['billmonth'];
 $bill_type = $_POST['billtype'];
 $total_units = $_POST['noofunits'];
 $total_amount = $_POST['totamouunt'];
 $paid = $_POST['paid'];
 $paid_date = $_POST['paiddate'];


	$mysqli->query("UPDATE expenditure SET BillYear='$bill_year', BillMonth='$bill_month', BillType='$bill_type', TotalUnits='$total_units', TotalAmount='$total_amount',Paid='$paid', PaidDate = '$paid_date'
	 WHERE id='$id'") or die($mysqli->error);
	$_SESSION['message'] = "Record has been updateed!";
	$_SESSION['msg_type'] = "warning";
	
	header('location: expenditure.php');
}
?>
