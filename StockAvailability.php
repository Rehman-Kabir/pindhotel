<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Stock Reports | Pind Hotel</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
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
		<li class="nav-item ">
              <a class="nav-link" href="Dashboard.php">Dashboard
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="stock.php">Stockhome
                <span class="sr-only">(current)</span>
              </a>
            </li>
            
      
            <!-- Dropdown -->
           <!-- <li class="nav-item dropdown">
              <a class="nav-link dropdown" id="navbarDropdownMenuLink" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">Reports</a>
               <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="#">Summary</a>
                <a class="dropdown-item" href="#">Reports Store</a>
                
              </div> 
            </li>-->
      
          </ul>
          <!-- Links -->
      
          <!--<form class="form-inline my-2 my-lg-0 align-self-stretch">
              <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>-->
        </div>
        <!-- Collapsible content -->
      
      </nav>
  <!--/.Navbar-->
  <br><br>

  <?php
         $mysqli = new mysqli('localhost', 'ahad', '', 'restaurant') or die(mysqli_error($mysqli));
         $ItemID = $_POST['ItemID'];
        	$result = $mysqli->query("SELECT * FROM stockitem WHERE ItemID='$ItemID'") or die($mysqli->error);
        
          
         $row = $result->fetch_assoc();
?>





  <div class="container w-50">
<div class="row justify-content-md-center text-white">
    <div class="col col-lg-3 text-white bg-info ">
      <h1>ITEM</h1>
    </div>
    <div class="col col-lg-5 bg-info ">
    <p class="text-right">
					            <a href="Stock.php"
                          class ="btn btn-danger btn-sm" align="center">
                           Close 
                        </a> </p>
    </div>
  </div>
  <div class="row justify-content-md-center text-white">
    <div class="col col-lg-3 text-white bg-info ">
      <br><b>ItemID :</b>
    </div>
    <div class="col col-lg-5 bg-primary ">
      <br><b><font size="6"><?php echo $row['ItemID']; ?> </font></b>
    </div>
  </div>
  <div class="row justify-content-md-center text-white">
    <div class="col col-lg-3 text-white bg-info">
    <b>Item Name :</b>
    </div>
    <div class="col col-lg-5 bg-primary ">
    <b><?php echo $row['ItemName']; ?></b>
    </div>
  </div>
  <div class="row justify-content-md-center text-white">
    <div class="col col-lg-3 text-white bg-info">
    <b>Description :</b>
    </div>
    <div class="col col-lg-5 bg-primary ">
    <b><?php echo $row['Description']; ?></b>
    </div>
  </div>
  <div class="row justify-content-md-center text-white">
    <div class="col col-lg-3 text-white bg-info">
    <b>Category :</b>
    </div>
    <div class="col col-lg-5 bg-primary ">
    <b><?php echo $row['Category']; ?></b>
    </div>
  </div>
  <div class="row justify-content-md-center text-white">
    <div class="col col-lg-3 text-white bg-info">
    <b>Price : <br><br></b>
    </div>
    <div class="col col-lg-5 bg-primary ">
    Rs: <b><?php echo $row['Price']; ?> <br><br></b>
    </div>
  </div>

  <div class="row justify-content-md-center text-white">
    <div class="col col-lg-3 text-white bg-info">
    <b><br>Availability : </b>
    </div>

  
    <?php
		              if ($row['ItemQuantity'] == 0):
		            ?>
                  <div class="col col-lg-5 bg-danger   ">
                  <i class="fas fa-exclamation-triangle fa-2x"></i>&nbsp;<b><font size="6">Out of stock</font></b></br></br>
    </div> 
    <?php
		              elseif ($row['ItemQuantity'] <= 10):
		            ?>
                 <div class="col col-lg-5 bg-warning   ">
                  <b><font size="20"><?php echo $row['ItemQuantity']; ?></font></b> &nbsp;&nbsp;<font size="3"> (Running out of stock) </font>
    </div> 
		            <?php else: ?>
                <div class="col col-lg-5 bg-success   ">
    <b><font size="20"><?php echo $row['ItemQuantity']; ?></font></b>
    </div> 
                  <?php endif; ?>

    
  </div>
</div>

<br><br>
 












<!-- Footer -->

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
  

  </body>
  </html>