<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Purchase Report | Pind Hotel</title>
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
        <!-- <li class="nav-item dropdown">
          <a class="nav-link dropdown" href="waiter.php">AddWaiter</a>     
        </li>
	<li class="nav-item dropdown">
          <a class="nav-link dropdown" href="waiterreport.php">WaiterReport</a>     
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown" href="addwages.php">AddWages</a>     
        </li>-->
  
      </ul>
      <!-- Links -->
    </div>
    <!-- Collapsible content -->
  
  </nav>
  <!--/.Navbar-->
  <br><br>

<div class="container">
    <div class="row"  style="margin-left:300px;">
      <div><h2 style="margin-left:90px;">Get Purchase Report</h2>  
        <br>   
        <form id="" method="POST" action="">
         <div class="form-group">
            <label for="EmpId">Item ID</label>
            <input type="text" class="form-control" id="EmpId" placeholder="Enter Item ID" name="itemid">
          </div>
          <div class="form-group">
            <label for="EmpId">Date</label><p>FROM</p>
            <input type="date" class="form-control" id="EmpId" placeholder="Waiter ID" name="datetime_s"><p>TO</p>
            <input type="date" class="form-control" id="EmpId" placeholder="Waiter ID" name="datetime_e">
          </div>
          
	<button type="submit" class="btn btn-primary btn-md" onclick="javascript: return validateaddEmployee();" name="cdate">CHECK Data</button>
	
	</form>
 </div>
<table id="dtBasicExample" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
              <tr>
                <th class="th-sm">ItemID
                </th>
                <th class="th-sm">Purchase Price
                </th>                
		            <th class="th-sm">Price
                </th>
              </tr>
            </thead>
	<?php
      $GLOBAL['tprice'] = 0; 
          $mysqli = new mysqli('localhost', 'ahad', '', 'restaurant') or die (mysqli_error($mysqli));
         if(isset($_POST['cdate'])):
          $itemid = $_POST['itemid'];
          $date_s = $_POST['datetime_s'];
          $date_e = $_POST['datetime_e'];

          if($itemid != '' && $date_s != '' && $date_e != ''){
           $result= $mysqli->query("SELECT * FROM stocksupplyorder WHERE ItemID = '$itemid' AND  pur_date BETWEEN '$date_s' AND '$date_e'")or die($mysqli->error);
          }
          elseif ($itemid != '') {
            	$result= $mysqli->query("SELECT * FROM stocksupplyorder WHERE ItemID = '$itemid'") or die($mysqli->error);
          }
          elseif ($date_s != '' && $date_e != '') {
            $result= $mysqli->query("SELECT * FROM stocksupplyorder WHERE pur_date BETWEEN '$date_s' AND '$date_e'") or die($mysqli->error);
          }
          elseif ($itemid != '' && $date_s != '') {
            $result= $mysqli->query("SELECT * FROM stocksupplyorder WHERE ItemID = '$itemid' AND pur_date = '$date_s'") or die($mysqli->error);
          }
          elseif ($date_s != '') {
            $result= $mysqli->query("SELECT * FROM stocksupplyorder WHERE pur_date = '$date_s'") or die($mysqli->error);
          }
          else {
            $result= $mysqli->query("SELECT * FROM stocksupplyorder WHERE ItemID = '$itemid' AND pur_date = '$date_s'") or die($mysqli->error);
          }
          $GLOBAL['tprice'] = 0;
           while ($row = $result->fetch_assoc()):?>

		           <tr>
                  <td><?php echo $row['ItemID']; ?></td>
		              <td><?php echo $row['pur_date']; ?></td>         
                  <td><?php echo $row['pur_price']; ?></td>
			            <?php $GLOBAL['tprice'] = $GLOBAL['tprice'] + (int)$row['pur_price'];?>
              </tr>
           <?php endwhile; ?>
           <?php endif; ?>
</table>

<div class="container">
	<h2>Item Total Price : <?php echo $GLOBAL['tprice']; ?> </h2>
</div>

</body>
</html>