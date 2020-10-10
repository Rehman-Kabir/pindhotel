<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Add Item | Pind Hotel</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">

  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.18/datatables.min.css"/>


  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.css" rel="stylesheet">
  <script src="js/stockvalidation.js"></script>
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
            <li class="nav-item">
              <a class="nav-link" href="CashierStockSupplyOrder.php">Supplyorder</a>
            </li>          

          </ul>
     
      
         
        </div>
      
      
      </nav>

  <br>



  
  <div class="" style="margin: 22px;">
      <div class="row">


        <div class="col-md-5">
          

        <?php require_once 'StockItem_process.php'; ?>
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
                  <h2>UPDATE ITEM DETAILS</h2>  
		            <?php else: ?>
                <h2>ADD NEW ITEM</h2>  
                  <?php endif; ?>
                

          <br>    
          <!-- Extended default form grid -->
          <form name="addItemForm" method="POST" action="StockItem_process.php">
              <!-- Grid row -->
              <div class="form-row">
                <!-- Default input -->
                <div class="form-group col-md-6">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <label for="ItemID">ItemID</label>
                    <input type="text" class="form-control" value ="<?php echo $ItemID; ?>" name="ItemID" id="ItemID" placeholder="ItemID">
                  </div>
                  <!-- Default input -->
                  <div class="form-group col-md-6">
                    <label for="ItemName">ItemName</label>
                    <input type="text" class="form-control" value ="<?php echo $ItemName; ?>" id="ItemName" name="ItemName" placeholder="ItemName">
                  </div>
                </div>
                <!-- Grid row -->
              
                <!-- Default input -->
                <div class="form-group">
                  <label for="Description">Description</label>
                  <input type="text" class="form-control" value ="<?php echo $Description; ?>" id="Description" name="Description"  placeholder="Description">
                </div>
                <!-- Default input -->
                <div class="form-row">
                    <!-- Default input -->
                    <div class="form-group col-md-6">
                <label for="Category">Category</label>
                <input type="text" class="form-control" value ="<?php echo $Category; ?>" name="Category" id="Category" placeholder="Category">
                </div>
                <!-- Grid row -->
                <div class="form-group col-md-6">
                    <label for="Price">Price (each)</label>
                    <input type="text" class="form-control" value ="<?php echo $Price; ?>" name="Price" id="Price" placeholder="Rs:">
                  </div></div>
              
                <!-- Grid row -->
                <?php
		              if ($update == true):
		            ?>
                  <button type="submit" class="btn btn-warning btn-md" name="update" onclick="javascript: return validateAddItemForm();">Update</button>
                  <button type="submit" class="btn btn-danger btn-md" name="cancle" onclick="action='StockItem.php';">Cancle</button>
		            <?php else: ?>
		            	<button type="submit" class="btn btn-primary btn-md" name="save" onclick="javascript: return validateAddItemForm();">SUBMIT</button>
                  <button type="reset" class="btn btn-danger btn-md">RESET</button>
                  <?php endif; ?>
                
    
            </form>
            <br><br><br>



        </div>

        <?php
	      $mysqli = new mysqli('localhost', 'ahad', '', 'restaurant') or die(mysqli_error($mysqli));
        	$result = $mysqli->query("SELECT * FROM stockitem order by id desc") or die($mysqli->error);
	        //pre_r($result);
        ?>
  
      <div class="col">
        

          <!--<table id="dtBasicExample" class="table table-striped table-bordered" cellspacing="0" width="100%">-->
          <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
              <thead style="color: white;" class="bg-primary" align="center">
                <tr>
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
                  <th class="th-sm">Action
                  </th>
                </tr>
              </thead>
              <tbody>
                
              <?php
		          	while($row = $result->fetch_assoc()): ?>
			          	<tr align="center">
					          <td><b><?php echo $row['ItemID']; ?></b></td>
                    <td><b><?php echo $row['ItemName']; ?></b></td>
                    <td><b><?php echo $row['Description']; ?></b></td>
                    <td><b><?php echo $row['Category']; ?></b></td>
                    <td><b><?php echo $row['Price']; ?></b></td>
				          	<td align="center">
					            	<a href="StockItem.php?edit=<?php echo $row['id']; ?>"
                          class ="btn btn-info btn-sm" >
                          <i class="fa fa-edit"></i>
                        </a>
					            	<a href="StockItem_process.php?delete=<?php echo $row['id']; ?>"
                          class ="btn btn-danger btn-sm">
                          <i class="fa fa-trash"></i>
                        </a>
				          	</td>
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
            <br>
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

    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.18/datatables.min.js"></script>
    
    <script src="js/stockvalidation.js"></script>
    <script type="text/javascript"> 
        $(document).ready(function () {
$('#dtBasicExample').DataTable();
$('.dataTables_length').addClass('bs-select');
});
    </script>

  </body>
  </html>