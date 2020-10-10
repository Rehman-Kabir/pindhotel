<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Waiter | Pind Hotel</title>
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
        <li class="nav-item dropdown">
          <a class="nav-link dropdown" href="waiter.php">AddWaiter</a>     
        </li>
	<li class="nav-item dropdown">
          <a class="nav-link dropdown" href="waiterreport.php">WaiterReport</a>     
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown" href="addwages.php">AddWages</a>     
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
      <div><h2 style="margin-left:90px;">Add Waiter Wages</h2>  
        <br>    
        
        <?php require_once 'addWaiter_process.php';?>

        <?php
        if (isset($_SESSION['message'])):?>

        <div class = "alert alert-<?=$_SESSION['msg_type']?>">

          <?php 
              echo $_SESSION['message'];
              unset($_SESSION['message']);
          ?>
         </div>
         <?php endif ?> 


        <form id="addEmployee" method="POST" action="addWaiter_process.php">
         <input type = "hidden" name = "id" value = "<?php echo $id; ?>">
         <div class="form-group">
            <label for="EmpId">Waiter ID</label>
            <input type="text" class="form-control" id="EmpId" value="<?php echo $WtrId;?>" placeholder="Waiter ID" name="w_id">
            <span class="helper-text"></span>
          </div>
         <div class="form-row" >
            <!-- Default input -->
           <!-- <div class="form-group col-md-6">
              <label for="FirstName">First Name</label>
              <input type="text" class="form-control" id="FirstName" value="<?php echo $FirstName; ?>" placeholder="First Name" name="FirstName" >
              <span id="FirstName" class="text-danger font-weight-bold"></span>
            </div>-->
            <!-- Default input -->
            <!--<div class="form-group col-md-6">
              <label for="LastName">Last Name</label>
              <input type="text" class="form-control" id="LastName" value="<?php echo $LastName;?>" placeholder="Last Name" name="LastName">
              <span class="helper-text"></span>
            </div>-->
          </div>
          <!-- Grid row -->
        
          <!-- Default input -->
          <div class="form-group">
            <label for="UserName">Waiter Name</label>
            <input type="text" class="form-control" id="UserName" value="<?php echo $w_name;?>" placeholder="User Name" name="w_name">
            <span class="helper-text"></span>
          </div>
          <!-- Default input -->
         <!-- <div class="form-group">
            <label for="Email">Email</label>
            <input type="email" class="form-control" id="Email" value="<?php echo $Email;?>" placeholder="email" name="Email">
            <span id="Brand" class="text-danger font-weight-bold"></span>
          </div>-->
          <!-- Grid row -->
          <div class="form-row">
            <!-- Default input -->
            <div class="form-group col-md-6">
              <label for="NICNumber">NIC Number</label>
              <input type="text" class="form-control" id="NICNumber" value="<?php echo $w_cnic;?>" placeholder="NIC Number" name="w_cnic">
              <span class="helper-text"></span>
            </div>
            <!-- Default input -->
            <div class="form-group col-md-6">
              <label for="Address">Address</label>
              <input type="text" class="form-control" id="Address" value="<?php echo $w_address;?>" placeholder="Address" name="w_address">
              <span class="helper-text"></span>
            </div>
          </div>
          <div class="form-group">
            <label for="PhoneNumber">Phone Number</label>
            <input type="text" class="form-control" id="PhoneNumber" value="<?php echo $w_phone;?>" placeholder="xxxxxxxxxxx" name="w_phone">
            <span class="helper-text"></span>
          </div>

 <div class="form-row">
            <!-- Default input -->
            <div class="form-group col-md-6">
              <label for="Password">Duty Type</label><br>
              <input type="radio"  id="Cashier" value="Cashier" name="dtype"><label for="Cashier">Cashier</label><br>
              <input type="radio"  id="Waiter" value="Waiter"  name="dtype"  checked><label for="Waiter">Waiter</label><br>
              <input type="radio"  id="Others" value="Others"  name="dtype"><label for="Others">Others</label>
              <span class="helper-text"></span>
            </div>
            <!-- Default input -->
             <div class="form-group col-md-6">
              <label for="ConfirmPassword">Date</label>
              <input type="date" class="form-control" id="ConfirmPassword" value="<?php echo $datetime;?>" placeholder="Enter Date" name="datetime">
              <span class="helper-text"></span>
            </div>
          </div>
          <?php
          if ($update == true):
          ?>
          <a href="waiter.php"><button type="submit" class="btn btn-primary btn-md" onclick="javascript: return validateaddEmployee();" name="UPDATE">UPDATE</button></a>
          <?php else: ?>  
          <a href="waiter.php"><button type="submit" class="btn btn-primary btn-md" onclick="javascript: return validateaddEmployee();" name="ADD">ADD</button></a>
          <?php endif; ?>
        </form>
        <!-- Extended default form grid --></div>
     
      <br><br>
      <div style="margin-left:-350px;margin-top:100px"><h2>Waiters</h2>  
        <br>

        <?php
          $mysqli = new mysqli('localhost', 'ahad', '', 'restaurant') or die (mysqli_error($mysqli));
          $result = $mysqli->query("SELECT * FROM waiter") or die($mysqli->error);
         
          ?>    
        <!-- Extended default form grid -->
        <table id="dtBasicExample" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
              <tr>
                <th class="th-sm">WtrId
                </th>
                <!--<th class="th-sm">Name
                </th>-->
                
                <th class="th-sm">UserName
                </th>
                <th class="th-sm">NICNumber
                </th>
                <th class="th-sm">Address
                </th>
                <th class="th-sm">PhoneNumber
                </th>
		 <th class="th-sm">Duty Type
                </th>
		 <th class="th-sm">Date
                </th>
                
                <th class="th-sm">Edit
                </th>
                <th class="th-sm">Delete
                </th>
                
              </tr>
            </thead>

            <?php
              while ($row = $result->fetch_assoc()):?>
              
              <tr>
                  <td><?php echo $row['w_id']; ?></td>         
                  <td><?php echo $row['w_name']; ?></td>
		              <td><?php echo $row['w_cnic']; ?></td>			
                  <td><?php echo $row['w_phone']; ?></td>
                  <td><?php echo $row['w_address']; ?></td>
                  <td> <?php if($row['dtype'] == '0') {
                     echo 'Cashier' ;
                   }
                    elseif ($row['dtype'] =='2') {
                      echo 'Others'; 
                    }
                    else { 
                    echo 'waiter'; 
                    }?>
                    </td>
                  <td><?php echo $row['datetime']; ?></td>
                  <td><a href="waiter.php?edit=<?php echo $row['id']; ?>" class="btn btn-info">Edit</a></td>
                  <td><a href="addWaiter_process.php?delete=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a></td>
              </tr>
                  <?php endwhile; ?>
                
            </table>
      </div>
      <?php
          function pre_r( $array ) {
            echo '<pre>';
            print_r($array);
            echo '</pre>';
          }
      ?> 
    </div>
  </div>



<!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  
  <script src="js/addEmployee.js"></script>

  <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.18/datatables.min.js"></script>

<script  type="text/javascript" >
$(document).ready(function () {
       $('dtBasicExample').DataTable();
       $('.dataTables_length').addClass('bs-select');
      });
</script>

</body>

</html>