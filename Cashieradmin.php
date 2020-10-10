<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Cashier Admin| Pind Hotel</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
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
        <a class="navbar-brand" href="Dashboard.php">Pind Hotel</a>
      
        <!-- Collapse button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
          aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <!-- Collapsible content -->
        <div class="collapse navbar-collapse" id="basicExampleNav">
      
          <!-- Links -->
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="Dashboard.php">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
    
            <!-- Dropdown -->
            <!--<li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">Reports</a>
              <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                
                <a class="dropdown-item" href="">Reports Store</a>
                
              </div>
            </li>-->
      
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
 
  
 <!-- <div>
    <img src="img/stock/Restaurant_02.jpg" height="10%" width="100%">
  </div>-->
  <div style="background-color: rgba(33, 89, 194, 0.753)">
    <form align = "center" name = "CashierCheckAvailabilityForm" method="POST" action="CashierAvailability.php">
      <input type="text2" id="fname" name="ItemID" placeholder="Enter Item Number" required>
      
      <button class="buttoncheackcash" name="check" data-toggle="modal" onclick="action='CashierAvailability.php';" data-target="#modalLoginForm">Check Availability</button>
    
      </form>
  </div>

  <br>
  <div class="container">
    <div class="row">
      <div class="col">
      
      <p align="center">

      <form action="Cashier_process.php" method="POST">
			<button type="submit" class="button buttoncheack" name="new"><i class="fa fa-file-medical fa-3x"></i>
          </i><br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp New Invoice &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</button>
			</p></form>
      </div>
      
      <div class="col">
      <p align="center"> <a href="CashierViewInvoice.php">
      <form action="CashierViewInvoice.php">
			<button class="button buttoncheack"><i class="fa fa-file-invoice-dollar fa-3x"></i>
          </i><br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp View Invoice &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</button>
			</p></a></form>
      </div>

      <div class="col">
      <p align="center"> <a href="StockSalesReports.php">
      <form action="StockReports.php">
			<button class="button buttoncheack"><i class="fa fa-capsules fa-3x"></i>
          </i><br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Stock Items &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</button>
			</p></a></form>
      </div>

      </div>
</div>
     
<br>



 

 












<!-- Footer -->

 
  
  
  <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
  

  </body>
  </html>