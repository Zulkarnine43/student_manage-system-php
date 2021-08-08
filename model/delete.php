<?php 
session_start();
include("../db/config.php");

echo $getID = $_GET["id"];
$dltquery = "delete from student where id=$getID";
$runquery = mysqli_query($connect,$dltquery);
if($runquery==true){
	$_SESSION['warning'] = 1;

	header("location: ../view/indexx.php");

}

