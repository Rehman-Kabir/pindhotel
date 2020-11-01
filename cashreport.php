<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Report | Pind Hotel</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.css" rel="stylesheet">

      <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.18/datatables.min.css"/>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  
</head>
<body background="bg3.jpg">
  <!--Navbar-->
<nav class="navbar navbar-expand-lg navbar-dark primary-color">

    <!-- Navbar brand -->
    <a class="navbar-brand" href="Dashboard.php">PIND HOTEL <br>(Al Mohsin Group)</a>
  
    <!-- Collapse button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
      aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <!-- Collapsible content -->
    <div class="collapse navbar-collapse" id="basicExampleNav">
  
      <!-- Links -->
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="Dashboard.php">Dashboard
            <span class="sr-only">(current)</span>
          </a>
        </li>
      
  
      </ul>
      <!-- Links -->
    </div>
    <!-- Collapsible content -->
  
  </nav>
  <!--/.Navbar-->
  <br><br>

<div class="container">
    <div class="row"  style="margin-left:300px;">
     <div><h2 style="margin-left:90px;">Sale Report</h2>  
        <br>
	<form id="" method="POST" action="">
         <div class="form-group">
            <label for="">Item ID</label>
            <input type="text" class="form-control" id="EmpId" placeholder="Enter Item ID" name="ItemID">
          </div>
          <div class="form-group">
            <label for="">Waiter Name</label>
            <input type="text" class="form-control" id="EmpId" placeholder="Enter waiter" name="waiter">
          </div>
        
          <div class="form-group">
            <label for="EmpId">Enter Date</label><p>FROM</p>
            <input type="date" class="form-control" id="EmpId" placeholder="Waiter ID" name="datetime_s"><p>TO</p>
            <input type="date" class="form-control" id="EmpId" placeholder="Waiter ID" name="datetime_e">
          </div>       
	<button type="submit" class="btn btn-primary btn-md" name="cdata">CHECK Data</button>
</form>
 </div>
<table id="dtBasicExample" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
              <tr>
                <th class="th-sm">ItemId
                </th>
                <th class="th-sm">ItemQuantity
                </th>                
		<th class="th-sm">Price
                </th>
                </th>                
		<th class="th-sm">DateTime
                </th>
</th>                
		<th class="th-sm">waiter
                </th>
              </tr>
            </thead>
	<?php
      $GLOBAL['twages'] = 0; 
      $GLOBAL['tt'] = 0;
      $GLOBAL['disc'] = 0;
          $mysqli = new mysqli('localhost', 'ahad', '', 'restaurant') or die (mysqli_error($mysqli));
         if(isset($_POST['cdata'])):
	  $waiter = $_POST['waiter'];
          $item_id = $_POST['ItemID'];
          $date_s = $_POST['datetime_s'];
          $date_e = $_POST['datetime_e'];
           

          if($item_id != '' && $date_s != '' && $date_e != '' && $waiter != ''){
           $result= $mysqli->query("SELECT DISTINCT c.ItemID,s.ItemName,c.invoiceID , (SELECT sum(ItemQuantity) from cashierinvoiceitem WHERE ItemID=c.ItemID and invoiceID=c.invoiceID) Quantity,(SELECT sum(Total) from cashierinvoiceitem WHERE ItemID=c.ItemID and invoiceID=c.invoiceID) Total,
 cashierinvoice.waiter_id,
 cashierinvoice.dateTime
 from cashierinvoiceitem c
INNER JOIN cashierinvoice on cashierinvoice.id=c.invoiceID
inner join stockitem s on s.ItemID=c.ItemID
WHERE c.ItemID = $item_id AND cashierinvoice.waiter_id='$waiter' AND cashierinvoice.dateTime BETWEEN '$date_s' AND '$date_e'")or die($mysqli->error);
          }
	 elseif ($waiter != '') {
            	$result= $mysqli->query("SELECT DISTINCT c.ItemID,s.ItemName,c.invoiceID , (SELECT sum(ItemQuantity) from cashierinvoiceitem WHERE ItemID=c.ItemID and invoiceID=c.invoiceID) Quantity,(SELECT sum(Total) from cashierinvoiceitem WHERE ItemID=c.ItemID and invoiceID=c.invoiceID) Total,
 cashierinvoice.waiter_id,
 cashierinvoice.dateTime
 from cashierinvoiceitem c
INNER JOIN cashierinvoice on cashierinvoice.id=c.invoiceID
inner join stockitem s on s.ItemID=c.ItemID
WHERE cashierinvoice.waiter_id='$waiter'") or die($mysqli->error);
          }
          elseif ($item_id != '' && $waiter != '') {
            	$result= $mysqli->query("SELECT DISTINCT c.ItemID,s.ItemName,c.invoiceID , (SELECT sum(ItemQuantity) from cashierinvoiceitem WHERE ItemID=c.ItemID and invoiceID=c.invoiceID) Quantity,(SELECT sum(Total) from cashierinvoiceitem WHERE ItemID=c.ItemID and invoiceID=c.invoiceID) Total,
 cashierinvoice.waiter_id,
 cashierinvoice.dateTime
 from cashierinvoiceitem c
INNER JOIN cashierinvoice on cashierinvoice.id=c.invoiceID
inner join stockitem s on s.ItemID=c.ItemID
WHERE c.ItemID = '$item_id' AND cashierinvoice.waiter_id='$waiter'") or die($mysqli->error);
          }
          elseif ($date_s != '' && $date_e != '' && $waiter != '') {
            $result= $mysqli->query("SELECT DISTINCT c.ItemID,s.ItemName,c.invoiceID , (SELECT sum(ItemQuantity) from cashierinvoiceitem WHERE ItemID=c.ItemID and invoiceID=c.invoiceID) Quantity,(SELECT sum(Total) from cashierinvoiceitem WHERE ItemID=c.ItemID and invoiceID=c.invoiceID) Total,
 cashierinvoice.waiter_id,
 cashierinvoice.dateTime
 from cashierinvoiceitem c
INNER JOIN cashierinvoice on cashierinvoice.id=c.invoiceID
inner join stockitem s on s.ItemID=c.ItemID 
WHERE cashierinvoice.waiter_id='$waiter'AND cashierinvoice.dateTime BETWEEN '$date_s' AND '$date_e'") or die($mysqli->error);
          }
          elseif ($item_id != '' && $date_s != '' && $waiter != '') {
            $result= $mysqli->query("SELECT DISTINCT c.ItemID,s.ItemName,c.invoiceID , (SELECT sum(ItemQuantity) from cashierinvoiceitem WHERE ItemID=c.ItemID and invoiceID=c.invoiceID) Quantity,(SELECT sum(Total) from cashierinvoiceitem WHERE ItemID=c.ItemID and invoiceID=c.invoiceID) Total,
 cashierinvoice.waiter_id,
 cashierinvoice.dateTime
 from cashierinvoiceitem c
INNER JOIN cashierinvoice on cashierinvoice.id=c.invoiceID
inner join stockitem s on s.ItemID=c.ItemID
WHERE c.ItemID = '$item_id' AND cashierinvoice.dateTime = '$date_s' AND cashierinvoice.waiter_id='$waiter'") or die($mysqli->error);
          }
          elseif ($date_s != '' && $waiter != '') {
            $result= $mysqli->query("SELECT DISTINCT c.ItemID,s.ItemName,c.invoiceID , (SELECT sum(ItemQuantity) from cashierinvoiceitem WHERE ItemID=c.ItemID and invoiceID=c.invoiceID) Quantity,(SELECT sum(Total) from cashierinvoiceitem WHERE ItemID=c.ItemID and invoiceID=c.invoiceID) Total,
 cashierinvoice.waiter_id,
 cashierinvoice.dateTime
 from cashierinvoiceitem c
INNER JOIN cashierinvoice on cashierinvoice.id=c.invoiceID
inner join stockitem s on s.ItemID=c.ItemID
WHERE cashierinvoice.dateTime = '$date_s' AND cashierinvoice.waiter_id='$waiter'") or die($mysqli->error);
          }
	elseif ($item_id != '') {
            	$result= $mysqli->query("SELECT DISTINCT c.ItemID,s.ItemName,c.invoiceID , (SELECT sum(ItemQuantity) from cashierinvoiceitem WHERE ItemID=c.ItemID and invoiceID=c.invoiceID) Quantity,(SELECT sum(Total) from cashierinvoiceitem WHERE ItemID=c.ItemID and invoiceID=c.invoiceID) Total,
 cashierinvoice.waiter_id,
 cashierinvoice.dateTime
 from cashierinvoiceitem c
INNER JOIN cashierinvoice on cashierinvoice.id=c.invoiceID
inner join stockitem s on s.ItemID=c.ItemID
WHERE c.ItemID = '$item_id'") or die($mysqli->error);
          }
          elseif ($date_s != '' && $date_e != '') {
            $result= $mysqli->query("SELECT DISTINCT c.ItemID,s.ItemName,c.invoiceID , (SELECT sum(ItemQuantity) from cashierinvoiceitem WHERE ItemID=c.ItemID and invoiceID=c.invoiceID) Quantity,(SELECT sum(Total) from cashierinvoiceitem WHERE ItemID=c.ItemID and invoiceID=c.invoiceID) Total,
 cashierinvoice.waiter_id,
 cashierinvoice.dateTime
 from cashierinvoiceitem c
INNER JOIN cashierinvoice on cashierinvoice.id=c.invoiceID
inner join stockitem s on s.ItemID=c.ItemID
WHERE cashierinvoice.dateTime BETWEEN '$date_s' AND '$date_e'") or die($mysqli->error);
          }
          elseif ($item_id != '' && $date_s != '') {
            $result= $mysqli->query("SELECT DISTINCT c.ItemID,s.ItemName,c.invoiceID , (SELECT sum(ItemQuantity) from cashierinvoiceitem WHERE ItemID=c.ItemID and invoiceID=c.invoiceID) Quantity,(SELECT sum(Total) from cashierinvoiceitem WHERE ItemID=c.ItemID and invoiceID=c.invoiceID) Total,
 cashierinvoice.waiter_id,
 cashierinvoice.dateTime
 from cashierinvoiceitem c
INNER JOIN cashierinvoice on cashierinvoice.id=c.invoiceID
inner join stockitem s on s.ItemID=c.ItemID
WHERE c.ItemID = '$item_id' AND cashierinvoice.dateTime = '$date_s'") or die($mysqli->error);
          }
          elseif ($date_s != '') {
            $result= $mysqli->query("SELECT DISTINCT c.ItemID,s.ItemName,c.invoiceID , (SELECT sum(ItemQuantity) from cashierinvoiceitem WHERE ItemID=c.ItemID and invoiceID=c.invoiceID) Quantity,(SELECT sum(Total) from cashierinvoiceitem WHERE ItemID=c.ItemID and invoiceID=c.invoiceID) Total,
 cashierinvoice.waiter_id,
 cashierinvoice.dateTime
 from cashierinvoiceitem c
INNER JOIN cashierinvoice on cashierinvoice.id=c.invoiceID
inner join stockitem s on s.ItemID=c.ItemID
WHERE cashierinvoice.dateTime = '$date_s'") or die($mysqli->error);
          }
          else {
            $result= $mysqli->query("SELECT DISTINCT c.ItemID,s.ItemName,c.invoiceID , (SELECT sum(ItemQuantity) from cashierinvoiceitem WHERE ItemID=c.ItemID and invoiceID=c.invoiceID) Quantity,(SELECT sum(Total) from cashierinvoiceitem WHERE ItemID=c.ItemID and invoiceID=c.invoiceID) Total,
 cashierinvoice.waiter_id,
 cashierinvoice.dateTime
 from cashierinvoiceitem c
INNER JOIN cashierinvoice on cashierinvoice.id=c.invoiceID
inner join stockitem s on s.ItemID=c.ItemID
WHERE c.ItemID = '$item_id'") or die($mysqli->error);
          }
         

           while ($row = $result->fetch_assoc()):?>

		           <tr>
                  <td><?php echo $row['ItemID']; ?></td>         
                  <td><?php echo $row['Quantity']; ?></td>
		  <?php $GLOBAL['twages'] = $GLOBAL['twages']+   (float)$row['Quantity'];?>
                  <td><?php echo $row['Total']; ?></td>
                  <?php $GLOBAL['tt'] = $GLOBAL['tt']+   (float)$row['Total'];?>
                  <td><?php echo $row['dateTime']; ?></td>
		  <td><?php echo $row['waiter_id']; ?></td>	

              </tr>
           <?php endwhile; ?>
           <?php endif; ?>
</table>

<div class="container">
	<h2>Total Sale Price :<?php echo $GLOBAL['tt'];?> </h2>
  <h2>Total Sale Quantity:<?php echo $GLOBAL['twages'];?> </h2>
  
</div>



</body>
</html>