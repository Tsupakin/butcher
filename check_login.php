<?php

session_start();

mysql_connect("localhost","root","");

mysql_select_db("butcher");

$strSQL = "SELECT * FROM member WHERE Username = '".mysql_real_escape_string($_POST['txtUsername'])."'

and Password = '".mysql_real_escape_string($_POST['txtPassword'])."'";

$objQuery = mysql_query($strSQL);

$objResult = mysql_fetch_array($objQuery);

if(!$objResult)

{

	echo "Username and Password Incorrect!";

}

else

{

	$_SESSION["UserID"] = $objResult["UserID"];

	$_SESSION["Status"] = $objResult["Status"];

	$_SESSION["Username"] = $objResult["Username"];



	session_write_close();



	if($objResult["Status"] == "ADMIN")

	{

		header("location:admin_page.php");

	}

	else

	{

		header("location:Select.php");

	}

}

mysql_close();

?>