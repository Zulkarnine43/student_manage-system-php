<?php
	$dbservername = "localhost";
	$dbuser = "root";
	$dppassword = "";
	$dbname = "tenbreak";

	$connect = mysqli_connect($dbservername, $dbuser, $dppassword, $dbname);

	if($connect==false){
	echo "<h1><b> Error Establishing Error database  connection!</b></h1>";
	}
	