<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Admin Panel | Pind Hotel</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/adminpanel.css" rel="stylesheet">
  <link href="scss/_custom-styles.scss" rel="stylesheet">

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
        <li class="nav-item active">
          <a class="nav-link" href="Dashboard.php">Dashboard
            <span class="sr-only">(current)</span>
          </a>
        </li>
<li class="nav-item">
          <a class="nav-link" href="cashreport.php">Cashreport</a>
        </li>
     
<li class="nav-item">
          <a class="nav-link" href="SignIn.php">logout</a>
        </li>

  
      </ul>
      
    </div>
    
    </nav>




<table class="panel-table-1">

  <tr>
 

    <th>
      <div class="card1">
        <h5 class="card-header h5">Employee Details</h5>
        <div class="card-body">
          <h5 class="card-title">All the Details of the Employees !</h5>
          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
          <a href="addEmployee.php" class="btn btn-primary">Check Details</a>
          </form>
          
        </div>
      </div>    
    </th>

    <th>
      <div class="card1">
        <h5 class="card-header h5">Stock Details</h5>
        <div class="card-body">
          <h5 class="card-title">Special title treatment</h5>
          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
          <a href="Stock.php" class="btn btn-primary">VIEW</a>
        </div>
      </div>    
    </th>

  </tr>
  
  <tr>
      <th>
        <div class="card1">
          <h5 class="card-header h5">Expenditure Details</h5>
          <div class="card-body">
            <h5 class="card-title">Special title treatment</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="Expenditure.php" class="btn btn-primary">VIEW</a>
            <!--<a href="#!" class="btn btn-primary">BILLS</a>-->
            <!--<a href="#!" class="btn btn-primary">REPORTS</a>-->
          </div>
        </div>      
      </th>
    
      <th>
        <div class="card1">
          <h5 class="card-header h5">Sales Details</h5>
          <div class="card-body">
            <h5 class="card-title">Special title treatment</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="Cashieradmin.php" class="btn btn-primary">Cashier</a>
            
          </div>
        </div>    
      </th>
  
    </tr>
  
</table>

          



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