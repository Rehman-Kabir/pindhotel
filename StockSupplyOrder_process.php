<?php

session_start();

$mysqli = new mysqli('localhost', 'ahad', '', 'restaurant') or die(mysqli_error($mysqli));

$id = 0;
$update = false;
$ItemID = '';
$ItemQuantity ='';
$Retqty ='';
$Retprice ='';
$Retdate = '';
$Purdate ='';
$Purprice ='';


if(isset($_POST['save'])){
	$ItemID = $_POST['ItemID'];
    $ItemQuantity = $_POST['ItemQuantity'];
    $Retqty = $_POST['ret_qty'];
    $Retprice = $_POST['ret_price'];
    $Retdate =$_POST['ret_date'];
    $Purdate =$_POST['pur_date'];
    $Purprice =$_POST['pur_price'];

    $pQty = $mysqli->query("SELECT ItemQuantity FROM stockitem WHERE ItemID='$ItemID'") or die($mysqli->error);
    $row = $pQty->fetch_array();    

    $new = $row['ItemQuantity'] + $ItemQuantity;
	$mysqli->query("INSERT INTO StockSupplyOrder(ItemID, ItemQuantity, ret_qty, ret_price, ret_date, pur_date, pur_price)
	 VALUES('$ItemID', '$ItemQuantity', '$Retqty', '$Retprice', '$Retdate', '$Purdate','$Purprice')") or die($mysqli->error);
   	 $mysqli->query("UPDATE stockitem SET ItemQuantity='$new' WHERE ItemID='$ItemID'") or die($mysqli->error);

	$_SESSION['message'] = "Record has been saved!";
	$_SESSION['msg_type'] = "success";
	
	header("location: StockSupplyOrder.php");
}

if (isset($_GET['delete'])){
    $id = $_GET['delete'];
    
    $ItemID = $_GET['ItemID'];
    
    $Qty1 = $mysqli->query("SELECT ItemQuantity FROM StockSupplyOrder WHERE id=$id") or die($mysqli->error);
    $row1 = $Qty1->fetch_array();

    $pQty = $mysqli->query("SELECT ItemQuantity FROM stockitem WHERE ItemID='$ItemID'") or die($mysqli->error);
    $row = $pQty->fetch_array();
    
    $new = $row['ItemQuantity'] - $row1['ItemQuantity'];
    echo $new;
    $mysqli->query("DELETE FROM StockSupplyOrder WHERE id=$id") or die($mysql->error());
    $mysqli->query("UPDATE stockitem SET ItemQuantity='$new' WHERE ItemID='$ItemID'") or die($mysqli->error);

	$_SESSION['message'] = "Record has been deleted!";
	$_SESSION['msg_type'] = "danger";
	
	header("location: StockSupplyOrder.php");
}

if (isset($_GET['edit'])){
	$id = $_GET['edit'];
	$update = true;
	$result = $mysqli->query("SELECT * FROM StockSupplyOrder WHERE id=$id") or die($mysqli->error());
	
		$row = $result->fetch_array();
		$ItemID = $row['ItemID'];
        $ItemQuantity = $row['ItemQuantity'];
        $Retqty = $row['ret_qty'];
        $Retprice = $row['ret_price'];
	    $Retdate = $row['ret_date'];
        $Purdate = $row['pur_date'];
    	$Purprice = $row['pur_price'];
}

if(isset($_POST['update'])){
	$id = $_POST['id'];
	$ItemID = $_POST['ItemID'];
    $ItemQuantity = $_POST['ItemQuantity'];
    $Retqty = $_POST['ret_qty'];
    $Retprice  = $_POST['ret_price'];
    $Retdate = $_POST['ret_date'];
    $Purdate = $_POST['pur_date'];
    $Purprice = $_POST['pur_price'];

    
    $Qty1 = $mysqli->query("SELECT ItemQuantity FROM StockSupplyOrder WHERE id=$id") or die($mysqli->error);
    $row1 = $Qty1->fetch_array();

    $pQty = $mysqli->query("SELECT ItemQuantity FROM stockitem WHERE ItemID='$ItemID'") or die($mysqli->error);
    $row = $pQty->fetch_array();
    
    $new = $row['ItemQuantity'] - $row1['ItemQuantity'] + $ItemQuantity;

	$mysqli->query("UPDATE StockSupplyOrder SET ItemID='$ItemID', ItemQuantity='$ItemQuantity', ret_qty='$Retqty', ret_price='$Retprice', ret_date = '$Retdate', pur_date='$Purdate', pur_price='$Purprice' WHERE id=$id") or die($mysqli->error);
    $mysqli->query("UPDATE stockitem SET ItemQuantity='$new' WHERE ItemID='$ItemID'") or die($mysqli->error);
    
    $_SESSION['message'] = "Record has been updateed!";
	$_SESSION['msg_type'] = "warning";
	
	header('location: StockSupplyOrder.php');
}

?>
