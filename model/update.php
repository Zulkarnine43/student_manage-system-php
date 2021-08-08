<?php
session_start();
$id = $_GET['id'];

include("../db/config.php");


 $name = $_POST['name'];
$age = $_POST['age'];
$roll = $_POST['roll'];
$address = $_POST['address'];
$mobile = $_POST['mobile'];
$updatequery = "UPDATE student SET name='$name',age='$age',roll='$roll',address='$address',mobile='$mobile' where id = $id";

if(mysqli_query($connect,$updatequery)){
	$_SESSION['success'] = 1;
	header("location:../view/show.php?id=" .$id);
}
else
{
	echo"Not inserted";
}
?>
