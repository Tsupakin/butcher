<?php
session_start();
$page_name = basename($_SERVER['PHP_SELF']);

if (isset($_SESSION['name'])) {
  $username = $_SESSION['name'];
  $status = $_SESSION['Status'];
}
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
	<div id="Select">
		<ul class="topnav" id="myTopnav">			
			<li class="icon">
				<a href="javascript:void(0);" style="font-size:23px;" onclick="myFunction()">☰</a>
			</li>
		</ul>
		<div id="Member">
		Hi, <?=$_SESSION['Username']?> Choose where you work today.		
		</div>
		<div id="Tab_Menu">
		<a href="Menu.php">
		<div class="Btn_menu"><i class="fa fa-cutlery"></i> Menu</div>
		</a>
		<a href="Order.php">
		<div class="Btn_menu"><i class="fa fa-file-text"></i> Order</div>
		</a>
		<a href="Check_bill.php">
		<div class="Btn_menu"><i class="fa fa-btc"></i> Check bill</div>		
		</a>
		</div>
	</div>
</body>
</html>