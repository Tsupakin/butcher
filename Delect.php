<?php
session_start();

mysql_connect("localhost","root","");

mysql_select_db("butcher");

$Tab = $_GET['Tab'];

$strSQL = "SELECT * FROM order_butcher WHERE Tab = '$Tab' ";
$objQuery = mysql_query($strSQL);
$objResult = mysql_fetch_array($objQuery);
$strSQL = "DELETE FROM order_butcher WHERE Tab = $Tab";
$objQuery = mysql_query($strSQL);
header('Location: check_bill.php');
?>