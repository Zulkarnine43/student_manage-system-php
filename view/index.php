<?php 
session_start();
if(!isset($_SESSION['login'])){
	header("location: login.php");
}


include("../db/config.php");

include("header.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1">

	<title> Student_Management</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	
</head>
<body>

<div style="background-color: gray;" id="con" class="col-md-12">
	<div class="container" >
	   <div class="row"> 
	       <div class="col-md-3">
				<a class="btn btn-info" href="../session/logout.php">logout</a>
				<br/>
				<br/>
				</div>
				<div class="col-md-9">
					
						<?php

				if(isset($_SESSION['success']))  {  ?>
				<div class="alert alert-success">
					<strong> Success!</strong> Data Insert Successfully.
					
				</div>
				<?php }  ?>

				<?php

				if(isset($_SESSION['warning']))  {  ?>
				<div class="alert alert-warning">
					<strong> Success!</strong> Data has been Deleted!.
					
				</div>
				<?php }  ?>
				<h2 style="color: red; padding: 10px; background-color: green; text-align: center;" >Student List</h2>
					<table border="1px" class="table">
						<thead>
							<th style="color: red; text-align: center; padding: 10px; background-color:orange;">ID</th>
							
							<th style="color: red; text-align: center; padding: 10px; background-color:orange;">Name</th>
							
							<th style="color: red; text-align: center;padding: 10px; background-color:orange;">Action</th>
						</thead>
						<tbody>
							<?php
				             $selectquery = "SELECT * FROM student";
				             $runquery = mysqli_query($connect,$selectquery);


							while($mydata = mysqli_fetch_assoc($runquery)){

								?>
							<tr>
								<td><?php echo $mydata['id']?></td>
								<td><?php echo $mydata['name']?></td>
								
									<td>
										
										<a class="btn btn-warning" href="edit.php? id=<?php echo $mydata["id"];?>"> Edit</a>
										<a class ="btn btn-info" href="show.php? id=<?php echo $mydata["id"];?>">All Details Of Student </a>
										<a class="btn btn-danger" onclick="return confirm('Are you sure? DELETE DATA')" href="../model/delete.php? id=<?php echo $mydata["id"];?>"> Delete </a>
									</td>
							</tr>
					<?php	} ?>
						</tbody>
					</table>
		
	       </div>
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
<?php  unset($_SESSION['warning'])   ?>