<?php 

session_start();
include("../db/config.php");


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1">

	<title>login </title>
	<link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<body>
<br/>
<?php
include("header.php");
?>


<div class="container">
<div class="row"> 

<br/>
<br/>

<div class="col-md-9">
		<?php

if(isset($_SESSION['error_msg']))  {  ?>
<div class="alert alert-warning">
	<strong style="color:red;"> Warning!!!! </strong> <?php
	echo $_SESSION['error_msg'];?>
	
</div>
<?php }  ?>

<h2> Create an Account</h2>
<hr>

	<form action="../model/regiconfirm.php" method="POST" >
	
	<div class="form-group">
		<label style="color: blue" for="name">Name:</label>
		<input  required type="text" class="form-control" name="name" placeholder="Enter LastName">
		
	</div>
	<div class="form-group">
		<label style="color: blue" for="mobile">Mobile:</label>
		<input  required type="text" class="form-control" name="mobile" placeholder="Enter Mobile">
		
	</div>
	<div class="form-group">
		<label style="color: blue" for="email">Email:</label>
		<input  required type="email" class="form-control" name="email" placeholder="Enter Email">
		
	</div>
	<div class="form-group">
		<label style="color: blue" for="password">P assword:</label>
		<input type="password" class="form-control" name="password" placeholder="password">
		
	</div>
	
	<div class="form-group">
		<label style="color: blue" for="confirm password">Confirm Password:</label>
		<input type="password" class="form-control" name="con_password" placeholder=" Confirm Password">
		
	</div>
		<button name="submit" type="submit" class="btn btn-info">Submit </button>
		 already have an account?<a href="login.php">Login</a>
		
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
<?php  unset($_SESSION['error_msg'])   ?>