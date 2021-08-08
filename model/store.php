<?php

include("../db/config.php");
session_start();

$name = $_POST['name'];
$age = $_POST['age'];
$roll = $_POST['roll'];
$address = $_POST['address'];
$mobile = $_POST['mobile'];

$insertquery = "INSERT INTO student values(NULL,'$name','$age','$roll','$address','$mobile') ";
if(mysqli_query($connect,$insertquery)){

	
	$_SESSION['success'] = 1;
	header("location:../view/indexx.php");
}
else{
	$_SESSION['error'] = 1;
		header("location:../view/insert.php");

}

?>