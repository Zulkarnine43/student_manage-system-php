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

	<title>Student Management</title>
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
<a class="btn btn-info" href="insert.php"> Add New Student</a>
<br/>
<br/>
<a class="btn btn-info" href="indexx.php">Student List</a>

</div>
<div class="col-md-4">
			<?php

if(isset($_SESSION['success']))  {  ?>
<div class="alert alert-success">
	<strong> Success!</strong> Data Updated Successfully.
	
</div>
<?php }  ?>
<h2>Student Information</h2>
<hr>
<table  border="1px" class="table">
	<tr>
		<th width="100" class="text-right"> Name:</th>
		<td><?php echo $std['name'];?></td>
	</tr>
	<tr>
		<th width="100" class="text-right"> ID:</th>
		<td><?php echo $std['id'];?></td>
	</tr>
	<tr>
		<th width="100" class="text-right"> Age:</th>
		<td> <?php echo $std['age'];?></td>
	</tr>
	<tr>
		<th width="100" class="text-right"> Roll:</th>
		<td> <?php echo $std['roll'];?></td>
	</tr>
	<tr>
<th width="100" class="text-right"> Address:</th>		
<td><?php echo $std['Address'];?></td>
	</tr>
	<tr>
		<th width="100" class="text-right">Mobile:</th>
		<td> <?php echo $std['mobile'];?></td>
	</tr>
	
</table>
	
	</table>
	
</div>
</div> 
</div>

<srcipt src="js/bootstrap.min.js"></srcipt>
<?php
include("footer.php");
?>
</body>
</html>
<?php  unset($_SESSION['success'])   ?>