<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Stock Report | Pind Hotel</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.18/datatables.min.css"/>
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.css" rel="stylesheet">
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
	 <li class="nav-item ">
              <a class="nav-link" href="Cashier.php">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="CashierStockItem.php">Addstock
                <span class="sr-only">(current)</span>
              </a>
            </li>
            
      

            
      
          </ul>
          <!-- Links -->
      
          <!-- <form class="form-inline my-2 my-lg-0 align-self-stretch">
              <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>-->
        </div>
        <!-- Collapsible content -->
      
      </nav>
  <!--/.Navbar-->
  <br>


  

  <?php
	       $mysqli = new mysqli('localhost', 'ahad', '', 'restaurant') or die(mysqli_error($mysqli));
        	$result = $mysqli->query("SELECT * FROM stockitem order by id") or die($mysqli->error);
	        //pre_r($result);
        ?>

  <div class="container">
      
      <h2>STOCK DETAILS</h2>
      <table id="dtBasicExample" class="table table-bordered table-sm" cellspacing="0" width="100%">
              <thead class="bg-info" style="color: white;">
                <tr align="center">
                  <th class="th-sm">ItemID
                  </th>
                  <th class="th-sm">ItemName
                  </th>
                  <th class="th-sm">Description
                  </th>
                  <th class="th-sm">Category
                  </th>
                  
                  <th class="th-sm">Price
                  </th>
                  <th class="th-sm">Qty
                  </th>
                </tr>
              </thead>
              <tbody>
                
              <?php
		          	while($row = $result->fetch_assoc()): ?>
                 <?php
                 $Q = $row['ItemQuantity'];
		              if ($Q == 0):
		            ?>
                  <tr align="center" class="bg-danger" style="color: white;">
					          <td><b><?php echo $row['ItemID']; ?></b></td>
                    <td><b><?php echo $row['ItemName']; ?></b></td>
                    <td><b><?php echo $row['Description']; ?></b></td>
                    <td><b><?php echo $row['Category']; ?></b></td>
                    <td><b><?php echo $row['Price']; ?></b></td>
                    <td><b><i class="fas fa-exclamation-triangle fa-md"> </i> Out of Stock</b></td>
				          	
			          	</tr>
                  <?php
                 
		              elseif ($Q <= 10):
		            ?>
                <tr align="center" class="bg-warning" style="color: white;">
					          <td><b><?php echo $row['ItemID']; ?></b></td>
                    <td><b><?php echo $row['ItemName']; ?></b></td>
                    <td><b><?php echo $row['Description']; ?></b></td>
                    <td><b><?php echo $row['Category']; ?></b></td>
                    <td><b><?php echo $row['Price']; ?></b></td>
                    <td><b><i class="fas fa-exclamation-triangle fa-md"> </i>&nbsp;&nbsp;<?php echo $row['ItemQuantity']; ?></b></td>
				          	
			          	</tr>
		            <?php else: ?>
                <tr align="center">
					          <td><b><?php echo $row['ItemID']; ?></b></td>
                    <td><b><?php echo $row['ItemName']; ?></b></td>
                    <td><b><?php echo $row['Description']; ?></b></td>
                    <td><b><?php echo $row['Category']; ?></b></td>
                    <td><b><?php echo $row['Price']; ?></b></td>
                    <td><b><?php echo $row['ItemQuantity']; ?></b></td>
				          	
			          	</tr>
                  <?php endif; ?>
			          	
			        <?php endwhile; ?>

              </tbody>
            
            </table>

      
    </div>








<br><br><br>


       
  
  
  
  
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