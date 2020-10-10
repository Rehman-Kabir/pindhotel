<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Cashier | Pind hotel</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.18/datatables.min.css"/>

  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.css" rel="stylesheet">

  <link href="css/stock_style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
  <!--Navbar-->
  <nav class="navbar navbar-expand-lg navbar-dark primary-color">

        <!-- Navbar brand -->
        <a class="navbar-brand" href="Cashier.php">Pind Hotel</a>
      
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
              <a class="nav-link" href="Cashier.php">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
          </ul>
        </div>
        <!-- Collapsible content -->
      
      </nav>
  <!--/.Navbar-->
 
  
  <!--<div>
    <img src="img/stock/invoice.gif" width="100%">
    </div>-->
  <!--<div style="background-color: rgba(33, 89, 194, 0.753)">
  <form align = "center" name = "CashierCheckAvailabilityForm" method="POST" action="CashierViewInvoiceAvailability.php">
      <input type="text2" id="fname" name="ItemID" placeholder="Enter Item Number" required>
      
      <button class="buttoncheackcash" name="check" data-toggle="modal" onclick="action='CashierViewInvoiceAvailability.php';" data-target="#modalLoginForm">Check Availability</button>
    
      </form>
  </div>--><br>

  <?php
	      $mysqli = new mysqli('localhost', 'ahad', '', 'restaurant') or die(mysqli_error($mysqli));
        	$result = $mysqli->query("SELECT * FROM cashierinvoice order by id desc") or die($mysqli->error);
	        //pre_r($result);
        ?>
  <div class="container">
  <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
              <thead style="color: white;" class="bg-primary" align="center">
                <tr>
                  <th class="th-sm">ID
                  </th>
                  <th class="th-sm">subTotal
                  </th>
                  <th class="th-sm">Discount
                  </th>
                  <th class="th-sm">NetTotal
                  </th>
                  <th class="th-sm">Date and Time
                  </th>
                <!--  <th class="th-sm">Action
                  </th> -->
                </tr>
              </thead>
              <tbody>
                
              <?php
		          	while($row = $result->fetch_assoc()): ?>
			          	<tr align="center">
					          <td><b><?php echo $row['id']; ?></b></td>
                    <td><b><?php echo $row['subTotal']; ?></b></td>
                    <td><b><?php echo $row['discount']; ?></b></td>
                    <td><b><?php echo $row['netTotal']; ?></b></td>
                    <td><b><?php echo $row['dateTime']; ?></b></td> <!--
				          	<td align="center">
					            	<a href="StockItem.php?edit=<?php echo $row['id']; ?>"
                          class ="btn btn-info btn-sm" >
                          <i class="fa fa-edit"></i>
                        </a>
					            	<a href="StockItem_process.php?delete=<?php echo $row['id']; ?>"
                          class ="btn btn-danger btn-sm">
                          <i class="fa fa-trash"></i>
                        </a>
				          	</td> -->
			          	</tr>
			        <?php endwhile; ?>

              </tbody>
              <!--
              <tfoot>
                <tr>
                  <th>ItemID
                  </th>
                  <th>ItemName
                  </th>
                  <th>Description
                  </th>
                  <th>Category
                  </th>
                  <th>Price
                  </th>
                  <th >Action
                  </th>
                </tr>
              </tfoot> -->
            </table>
  </div>
 <br>

 












<!-- Footer -->

  
  <!--Ens of the footer-->        
  
  
  
  
  <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.18/datatables.min.js"></script>
    
    
    <script type="text/javascript"> 
        $(document).ready(function () {
$('#dtBasicExample').DataTable();
$('.dataTables_length').addClass('bs-select');
});
    </script>
  

  </body>
  </html>