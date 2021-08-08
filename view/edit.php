<?php 
session_start();
if(!isset($_SESSION['login'])){
	header("location: login.php");
}

$id = $_GET['id'];
include("../db/config.php");

$showdataquery = "SELECT * FROM student where id=$id";
$rundataquery = mysqli_query($connect,$showdataquery);
$std = mysqli_fetch_array($rundataquery);

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1">

	<title> Studesnt Registration</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
</head>
<body>
<br/>
<?php
include("header.php");
?>


<div class="container">
<div class="row"> 
<div class="col-md-3">
<a class="btn btn-info" href="indexx.php">Student List</a>
</div>
<br/>
<br/>

<div class="col-md-9">
<?php

if(isset($_SESSION['error']))  {  ?>
<div class="alert alert-success">
	<strong> Success!</strong> Something is wrong.
	
</div>
<?php }  ?>
<h2> Add New Student List</h2>
<hr>

	<form action="../model/update.php?id=<?php  echo $id ?>" method="POST" >
	<div class="form-group">
		<label style="color: blue" for="name">Name:</label>
		<input  required type="text" class="form-control" value="<?php echo $std['name'];?>" name="name" placeholder="Student Name">
		
	</div>
	<div class="form-group">
		<label style="color: blue" for="Age">Age:</label>
		<input type="text" class="form-control"  value="<?php echo $std['age'];?>" name="age" placeholder="Age">
		
	</div>
	<div class="form-group">
		<label style="color: blue" for="Roll">Roll:</label>
		<input required type="text" class="form-control"  value="<?php echo $std['roll'];?>" name="roll" placeholder="Roll">
		
	</div>
     <div class="form-group">
		<label style="color: blue" for="Address">Address:</label>
		<input  required type="text" class="form-control"  value="<?php echo $std['Address'];?>" name="address" placeholder="Address">
		
	</div>
     <div class="form-group">
		<label style="color: blue" for="Mobile">Mobile:</label>
		<input type="text" class="form-control"  value="<?php echo $std['mobile'];?>" name="mobile" placeholder="Mobile">

		<button type="submit" class="btn btn-default">Submit </button>
		
	</div>
     
     


	</form>


</div>
</div> 
</div>







<srcipt src="js/bootstrap.min.js"></srcipt>
<?php
include("footer.php");
?>
</body>
</html>