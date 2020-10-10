<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Supply Order | Pind Hotel</title>
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
              <a class="nav-link" href="cashier.php">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="CashierStockItem.php">AddStock
                <span class="sr-only">(current)</span>
              </a>
            </li>
           
          </ul>
        </div>
        
      
      </nav>
  <!--/.Navbar-->
  <br><br>



  <div class="container">
      <div class="row">
        <div class="">
          
        <?php require_once 'StockSupplyOrder_process.php'; ?>
      <?php
      	if(isset($_SESSION['message'])): ?>
	        <div class = "alert alert-<?=$_SESSION['msg_type']?>">
	    	<?php
		    	echo $_SESSION['message'];
		    	unset($_SESSION['message']);
	    	?>
	    </div>
    <?php endif ?>
    

    <?php
		              if ($update == true):
		            ?>
                  <h2>UPDATE SUPPLY ORDER</h2>  
		            <?php else: ?>
                <h2>ADD SUPPLY ORDER</h2>   
                  <?php endif; ?>
        
         
          <br>    
          <!-- Extended default form grid -->
          <form name="SupplyOrderForm" method="POST" action="StockSupplyOrder_process.php">
          <input type="hidden" name="id" value="<?php echo $id; ?>">
              <!-- Grid row -->
              <div class="form-row">
                <!-- Default input -->
                <div class="form-group col-md-6">
                    <label for="ItemID">ItemID</label>
                    <input type="text" class="form-control" value ="<?php echo $ItemID; ?>" name="ItemID" placeholder="ItemID">
                  </div>
                  <!-- Default input -->
                  <div class="form-group col-md-6">
                    <label for="ItemQuantity">Quantity</label>
                    <input type="text" class="form-control" value ="<?php echo $ItemQuantity; ?>" name="ItemQuantity" placeholder="Quantity">
                  </div>
                </div>
                <!-- Grid row -->
             <div class="form-row">
                    
                    <div class="form-group col-md-6">
                        <label for="SupplerID">Return Quantity</label>
                        <input type="text" class="form-control" value ="<?php echo $Retqty; ?>" name="ret_qty" placeholder="Return Quantity">
                      </div>
                       
                      <div class="form-group col-md-6">
                        <label for="OrderID">Return Price</label>
                        <input type="text" class="form-control" value ="<?php echo $Retprice; ?>" name="ret_price" placeholder="Return Price">
                      </div>

                      <div class="form-group col-md-6">
                        <label for="Pu_price">Return Date (each)</label>
                        <input type="date" class="form-control" value ="<?php echo $Retdate; ?>" name="ret_date" placeholder="Return Date:">
                      </div>
              </div>
 		         <div class="form-row">
                   
                      <!-- Default input -->
                     <div class="form-group col-md-6">
                        <label for="Pu_price">Purchase Date (each)</label>
                        <input type="date" class="form-control" value ="<?php echo $Purdate; ?>" name="pur_date" placeholder="Purchase Date:">
                      </div>
                    </div>
                <!-- Default input -->
                <div class="form-row">
                   
                      <!-- Default input -->
                     <div class="form-group col-md-6">
                        <label for="Pu_price">Purchase Price (each)</label>
                        <input type="text" class="form-control" value ="<?php echo $Purprice; ?>" name="pur_price" placeholder="Purchase:">
                      </div>
                    </div>
                <!-- Grid row -->
                
              
                <!-- Grid row -->
                <?php
		              if ($update == true):
		            ?>
              <button type="submit" class="btn btn-warning btn-md" name="update" onclick="javascript: return validateSupplyOrderFormUpdate();">Update</button>
                  <button type="submit" class="btn btn-danger btn-md" name="cancle" onclick="action='StockSupplyOrder.php';">Cancle</button>
              <?php else: ?>
		            	<button type="submit" class="btn btn-primary btn-md" name="save" onclick="javascript: return validateSupplyOrderForm();">SUBMIT</button>
                  <button type="reset" class="btn btn-danger btn-md">RESET</button>
                  <?php endif; ?>
            </form> 
            <br>



        </div>
        <?php
	       $mysqli = new mysqli('localhost', 'ahad', '', 'restaurant') or die(mysqli_error($mysqli));
        	$result = $mysqli->query("SELECT * FROM StockSupplyOrder order by id desc") or die($mysqli->error);
	        //pre_r($result);
        ?>
</div></div>
      <div class="" style="margin: 15px;">
        <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
              <thead style="color: white;" class="bg-primary" align="center">
                <tr>
                <th class="th-sm">ID
                  </th>
                  <th class="th-sm">ItemID
                  </th>
                  <th class="th-sm">Quantity
                  </th>
                  <th class="th-sm">Return Quantity
                  </th>
                  <th class="th-sm">Return Price
                  </th>
                  <th class="th-sm">Return Date
                  </th>
                  <th class="th-sm">Purchase Date
                  </th>
                  <th class="th-sm">Purchase Price
                  </th>
                  <th class="th-sm">Action
                  </th>
                </tr>
              </thead>
              <tbody>
              <?php
		          	while($row = $result->fetch_assoc()): ?>
			          	<tr align="center">
                    <td><b><?php echo $row['id']; ?></b></td>
		    <td><b><?php echo $row['ItemID']; ?></b></td>
                    <td><b><?php echo $row['ItemQuantity']; ?></b></td>
                    <td><b><?php echo $row['ret_qty']; ?></b></td>
                    <td><b><?php echo $row['ret_price']; ?></b></td>
                    <td><b><?php echo $row['ret_date']; ?></b></td>
                    <td><b><?php echo $row['pur_date']; ?></b></td>
                    <td><b><?php echo $row['pur_price']; ?></b></td>
                    
				          	<td align="center">
					            	<a href="StockSupplyOrder.php?edit=<?php echo $row['id']; ?>"
                          class ="btn btn-info btn-sm" >
                          <i class="fa fa-edit"></i>
                        </a>
					            	<a href="StockSupplyOrder_process.php?delete=<?php echo $row['id']; ?>&ItemID=<?php echo $row['ItemID']; ?>"
                          class ="btn btn-danger btn-sm">
                          <i class="fa fa-trash"></i>
                        </a>
				          	</td>
			          	</tr>
			        <?php endwhile; ?>
                
                
              </tbody> <!--
              <tfoot>
                <tr>
                  <th class="th-sm">#
                  </th>
                  <th class="th-sm">ItemID
                  </th>
                  <th class="th-sm">Quantity
                  </th>
                  <th class="th-sm">Return Quantity
                  </th>
                  <th class="th-sm">Return price
                  </th>
                  <th class="th-sm">Purchase Day
                  </th>
                  <th class="th-sm">Purchase Month
                  </th>
                  <th class="th-sm">Purchase Year
                  </th>
                  <th class="th-sm">Purchase Price
                  </th>
                  <th class="th-sm">
                  </th>
                </tr>
              </tfoot> -->
            </table> <br>
            <?php
	            function pre_r( $array ){
		            echo '<pre>';
	            	print_r($array);
		            echo '</pre>';
              	}
          	?>


      </div>
    </div>
  </div>











 












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
    <script src="js/stockvalidation.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.18/datatables.min.js"></script>
    <script type="text/javascript"> 
        $(document).ready(function () {
$('#dtBasicExample').DataTable();
$('.dataTables_length').addClass('bs-select');
});
    </script>

  </body>
  </html>