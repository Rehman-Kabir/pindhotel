<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>Stock Management | Pind Hotel</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/stock_materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/stock_style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
 

</head>
<body>
 <nav class="blue" role="navigation"><font size="4"> &nbsp<a href = "Dashboard.php"> Pind Hotel </font></a>
  &nbsp&nbsp&nbsp <a href= "Dashboard.php">Dashboard<a>
  
  &nbsp&nbsp&nbsp <a href = "Stock.php">Stockhome</a>
 
  
&nbsp&nbsp&nbsp <a href= "StockReports.php">Stockdetails<a>
  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

  </nav>

      <div class="container">
        <br><br>
        <div class="row center">
			<form action="StockAvailability.php" method="POST">
  
				<input type="text1" id="ItemID" name="ItemID" placeholder="Enter Item Number......" required>
        
				  <button class="buttoncheack" onclick="action= 'StockAvailability.php';">Check</button>
		  </form>
        </div>
        <br><br>
      </div>


  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12 m4">
          <div class="icon-block">
			<p align="center"> <a href="StockItem.php">
			<button class="button button2"><i class="material-icons" style="font-size:60px">
          enhanced_encryption</i><br>&nbsp&nbsp&nbsp&nbsp Stock Items &nbsp&nbsp&nbsp&nbsp</button>
			</p></a>
		  </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
			<p align="center"><a href="StockSupplyOrder.php">
				<button class="button button2"><i class="material-icons" style="font-size:60px">local_shipping</i>
				<br>&nbsp&nbsp Supply Orders &nbsp&nbsp</button></a>
			</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
			<p align="center"><a href="StockOutofStock.php">
				<button class="button button2">
					<i class="material-icons" style="font-size:60px">warning</i>
					<br>&nbsp&nbsp&nbsp Out Of Stock &nbsp&nbsp&nbsp
				</button></a>
			</p>
          </div>
        </div>
      </div>

    </div>
  </div>

      <div class="container">
        <div class="row center">
          <a href="stockpurchasereprot.php">
      <button class="buttoncheack"style="font-size:20px"><i class="material-icons" style="font-size:40px">insert_chart</i><br>Stock Reports</button>
          </a>
      &nbsp&nbsp&nbsp&nbsp&nbsp
      <a href="StockReports.php">
      <button class="buttoncheack"style="font-size:20px"><i class="material-icons" style="font-size:40px">local_pharmacy</i><br>&nbsp;Stock Details&nbsp;</button>
      </a>
        </div>
      </div>


  


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/stock_materialize.js"></script>
  <script src="js/stock_init.js"></script>
  
  


  

  </body>
</html>
