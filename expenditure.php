<?php
  include('connection.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Electricity Bill | Pind Hotel</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.css" rel="stylesheet">
  <!--Form validation-->
  <script src = "js/expenditure.js"> </script>  
  <!--Datepicker validate-->
  <script src = "expendituredate.js"></script>

  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.18/datatables.min.css"/>

</head>
<body  onload=enable_text(false);>
  <!--Header-->

  <!--Navbar-->
  <nav class="navbar navbar-expand-lg navbar-dark primary-color">

      <!-- Navbar brand -->
      <a class="navbar-brand" href="Dashboard.php">Pind Hotel <br> (Al Mohsin Group)</a>
    
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
	 <li class="nav-item">
            <a class="nav-link" href="billreport.php">Billreport
              <span class="sr-only">(current)</span>
            </a>
          </li>
         
    
         
    
        </ul>
        <!-- Links -->
    
      </div>
      <!-- Collapsible content -->
    
    </nav>
<!--/.Navbar-->




       <!-- Card -->
 <div class="card mx-xl-5">

        <!-- Card body -->
     <div class="card-body">
    
              <h5 class="card-header info-color white-text text-center py-4">
                <strong>Expenditure Details</strong>
               </h5>
        
                <h3  style="margin-left: 15px;"><b>Bill Information</b></h3>
                <hr style = " border: 1px solid black;">  

		<?php require_once 'expenditure_process.php';?>
	<form id="addEmployee" method="POST" action="expenditure_process.php">
                <!--input year -->
                <label for="" class="text-primary">Bill Year</label>
                <div class="form-group col-md-6">
                <input type="text" id="inputCity" class="form-control" placeholder="Enter Bill Year" value="<?php echo $bill_year;?>" name="billyear" required >
                </div>

                <br>
                
                <!--input month-->
                <!--Dropdown primary-->
         <div class="dropdown">
       
         <label for="billmonth" class="text-primary">Bill Month</label>
         <br>
         <select class="btn btn-primary dropdown-toggle mr-4"  style="margin-left:20px"  name="billmonth" required>
	<option value="" <?php if($bill_month == "Select Month"){ echo "disabled selected";} else { echo "selected";}?>><?php echo $bill_month; ?></option>          
	<option value="January" class="dropdown-item" href="#" >January</option>
          <option value="February" class="dropdown-item" href="#">February</option>
          <option value="March" class="dropdown-item" href="#">March</option>
          <option value="April" class="dropdown-item" href="#">April</option>
          <option value="May"   class="dropdown-item" href="#">May</option>
          <option value="June" class="dropdown-item" href="#">June</option>
          <option value="July" class="dropdown-item" href="#">July</option>
          <option value="August" class="dropdown-item" href="#">August</option>
          <option value="September" class="dropdown-item" href="#">September</option>
          <option value="October" class="dropdown-item" href="#">October</option>
          <option value="November" class="dropdown-item" href="#">November</option>
          <option value="December" class="dropdown-item" href="#">December</option>   
        </select>
        </div>
      <!--/Dropdown primary-->
      <br>


      <div class="dropdown">  
        <label for="billtype" class="text-primary">Bill Type</label>
        <br>
       <!--Menu-->
          <select class="btn btn-primary dropdown-toggle mr-4"  style="margin-left:20px"  name="billtype"  required>
              <option value="" disabled selected><?php echo $bill_type;?></option>
		<option value="Electricity" class="dropdown-item" href="#" >Electricity</option>
              <option value="Water" class="dropdown-item" href="#">Water</option>
              <option value="Other" class="dropdown-item" href="#">Other</option>
          </select>
       
      </div>
     <!--/Dropdown primary-->
     <br>
          
                <!--input units -->
                <label for="totalunits" class="text-primary">Total No Of Unit Consumed</label>
                <div class="form-group col-md-6">
                <input type="text" id="inputCity" class="form-control" value="<?php echo $total_units;?>" name="noofunits" placeholder="Enter  Total No Of Units">
                </div>

                <br>


                <!--input units -->
                <label for="totalamount" class="text-primary">Total Amount(Rs)</label>
                <div class="form-group col-md-6">
                <input type="text" id="inputCity" class="form-control" value="<?php echo $total_amount;?>" name="totamouunt" placeholder="Enter Total Amount" required>
                </div>


                 <br>
                 <!--input units -->
                 <label for="paid" class="text-primary">Paid</label>
                  <!-- Default checked -->
                    <div class="custom-control custom-radio"> 
                          <input type="radio" class="custom-control-input" id="defaultGroupExample1" value="Yes" <?php echo ($paid== 'Yes') ?  "checked" : "" ;  ?> name="paid" value ="Yes" /> 
                          <label class="custom-control-label" for="defaultGroupExample1">Yes</label>
                    </div>
                    <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" id="defaultGroupExample2"  value="No" <?php echo ($paid == 'No') ?  "checked" : "" ;  ?> name="paid" value="No" />
                                <label class="custom-control-label" for="defaultGroupExample2">No</label>
                    </div>

                    <br>
                    <!--input units -->
                    <label for="paiddate" class="text-primary">Paid Date</label>
                    <div class="form-group col-md-6">
                      <input type="date" class="form-control" id="inputZip" placeholder="DD/MM/YYYY" value="<?php echo $paid_date;?>" name="paiddate" required >
                    </div>
                     <br>
 <?php
          if ($update == true):
          ?>
          <a href="expenditure.php"><button type="submit" class="btn btn-primary btn-md" name="Update">UPDATE</button></a>
          <?php else: ?>  
          <a href="expenditure.php"><button type="submit" class="btn btn-primary btn-md" onclick="javascript: return validateaddEmployee();" name="Submit">REGISTER</button></a>
          <?php endif; ?>
                
                    </form>
                  
                    <br><br>
         </div>
            <!-- Card body -->
        
  </div>
  <!-- Card -->
         

          
        <br><br>

                <h2  style="margin-left: 600px;"><b>Bill Table</b></h2>
                <hr style = " border: 1px solid black; width: 240px;">  
                <br><br>
                <!--Bill Table-->
                <div class="container">            
                <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="80%" style="margin-left:10px;">
              <thead>
                <tr>
                <th class="th-sm">Bill Id
                  </th>
                  <th class="th-sm">Bill Year
                  </th>
                  <th class="th-sm">Bill Month
                  </th>
                  <th class="th-sm">Bill Type
                  </th>
                  <th class="th-sm">Total No of Units 
                  </th>
                  <th class="th-sm">Total Amount
                  </th>
                  <th class="th-sm">Paid
                  </th>
                  <th class="th-sm">Paid Date
                    </th>
                  <th class="th-sm">Update
                    </th>
                  <th class="th-sm">Delete
                    </th>
                </tr>
              </thead>
              <tbody>
              <?php
                
                      $reterive_query = "SELECT * FROM  expenditure ";
                      $result = $mysqli->query($reterive_query)  or die(mysqli_error($mysqli));
                         

                  while($rows = $result->fetch_assoc()): ?>
                

                  
            
              
              <tr>
              <td> <?php echo $rows['id']; ?> </td>
              <td> <?php echo $rows['BillYear']; ?> </td>
              <td> <?php echo $rows['BillMonth']; ?> </td>
              <td> <?php echo $rows['BillType']; ?> </td>
              <td> <?php echo $rows['TotalUnits']; ?> </td>
              <td> <?php echo $rows['TotalAmount']; ?> </td>
              <td> <?php echo $rows['Paid']; ?></td>
              <td> <?php echo $rows['PaidDate']; ?> </td>
              <td><a href="expenditure.php?Edit=<?php echo $rows['id'];?>" 
                class="btn btn-primary btn-rounded">Edit</a></td>
                <td><a href="expenditure_process.php?Delete=<?php echo $rows['id'];?>"
                  class="btn btn-danger btn-rounded">Delete</a></td> 
               </tr>
               <?php endwhile; ?>
              </tbody>
             
             </table>
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
  
  
  <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.18/datatables.min.js"></script>
  <script src = "js/expenditure.js"> </script>  
    <script type="text/javascript">
             $(document).ready(function () {
             $('#dtBasicExample').DataTable();
            $('.dataTables_length').addClass('bs-select');
            });
          </script> 
                  
</body>

</html>
