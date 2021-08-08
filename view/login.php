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
	<br>
	<?php
include("header.php");
?>



<div class="container">
<div class="row"> 

<br/>
<br/>

<div class="col-md-9">
		<?php

if(isset($_SESSION['error']))  {  ?>
<div class="alert alert-warning">
	<strong style="color:red;"> Warning!!!! </strong> <P style="color: red;">Wrong email or password.</P>
	
</div>
<?php }  ?>

<h2> Login </h2>
<hr>

	<form action="../model/loginconfirm.php" method="POST" >
	<div class="form-group">
		<label style="color: blue" for="email">Email:</label>
		<input  required type="email" class="form-control" name="email" placeholder="Enter Email">
		
	</div>
	<div class="form-group">
		<label style="color: blue" for="Age">password:</label>
		<input type="password" class="form-control" name="password" placeholder="password">
		
	</div>
	
		<button name="submit" type="submit" class="btn btn-info">Submit </button>
		you don't have an account?<a href="registration.php">Create Account</a>
		
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
<?php  unset($_SESSION['error'])   ?>