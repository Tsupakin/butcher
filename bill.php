<?php
session_start();
$page_name = basename($_SERVER['PHP_SELF']);

$Tab = $_GET['Tab'];
$db = new PDO("mysql:dbname=butcher;host=localhost", "root", "");
$db->exec("SET CHARACTER SET utf8");
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$rows = $db->query("SELECT * FROM order_butcher JOIN menu ON menu.MenuID = order_butcher.MenuID WHERE Tab = $Tab Limit 1");

$Sum = 0;

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title></title>
	<script>
		function myFunction() {
			var x = document.getElementById("myTopnav");
			if (x.className === "topnav") {
				x.className += " responsive";
			} else {
				x.className = "topnav";
			}
		}
	</script>
</head>
<body>
	<div id="Select_1">
		<ul class="topnav" id="myTopnav">	
			<li><a href="Check_bill.php"><i class="fa fa-arrow-left"></i></a></li>		
			<li class="icon">			    
				<a href="javascript:void(0);" style="font-size:23px;" onclick="myFunction()">☰</a>
			</li>
		</ul>
		<div id="Table">
		<?php

		foreach ($rows as $row) {

			?>

			
				<div class="Time"><?php echo $row['DateofOrder'] ?></div>
				<header></header>
				<h1>Order#<?php echo $row['OrderID'] ?></h1>
				<div id="head"><i class="fa fa-list"></i> Number Table</div>
				<header></header>
				<div class="Table_No"><?php echo $row['Tab'] ?></div>
				<div id="head"><i class="fa fa-cutlery"></i> Number Table</div>	
				<header></header>
				<?php
			}
			$db = new PDO("mysql:dbname=butcher;host=localhost", "root", "");
			$db->exec("SET CHARACTER SET utf8");
			$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$rows = $db->query("SELECT menu.MenuID,order_butcher.MenuID,menu.Menuname,order_butcher.Amount,order_butcher.Price FROM order_butcher JOIN menu ON menu.MenuID = order_butcher.MenuID WHERE Tab = $Tab");
			foreach ($rows as $row) {
				$Num = $row['Price'];				
				$Sum = $Sum+ $Num; 				
			?>
			<div id="Menu_name"><?php echo $row['Menuname'] ?></div>
			<div id="Menu_amount"><?php echo $row['Amount'] ?> tray</div>
			<div id="Menu_price"><?php echo $row['Price'] ?></div>

		

		<?php
	}
	?>
	<header></header>
	<div id="Total">Total</div>	
	<div id="All_price"><?php echo $Sum ?></div>	
	</div>	
	<div id="Tab_Menu">
		<a href="Menu.php">
			<div class="Btn_menu"><i class="fa fa-cutlery"></i> Menu</div>
		</a>
		<a href="Order.php">
			<div class="Btn_menu"><i class="fa fa-file-text"></i> Order</div>
		</a>
		<a href="Check_bill.php" class="active"#">
			<div class="Btn_menu active"><i class="fa fa-btc"></i> Check bill</div>		
		</a>
	</div>
	<?php
		$db = new PDO("mysql:dbname=butcher;host=localhost", "root", "");
		$db->exec("SET CHARACTER SET utf8");
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$rows = $db->query("SELECT * FROM order_butcher WHERE Tab = $Tab Limit 1");
		foreach ($rows as $row) {
	?>
	<a href="Delect.php?Tab=<?=$row['Tab']?>">
	<div id="Btn_CheckBill">
		<i class="fa fa-check"></i> Check bill
	</div>
	</a>
	<?php
		}
	?>
</div>
</body>
</html>