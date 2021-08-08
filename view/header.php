
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">

</head>
<body>
	<br>
<div class="col-md-12">
	<header>
		
			<div class="heading">
				<h1 style="text-align: center;">Welcome to Student Management System</h1>

			</div>
		
		 <nav class="navbar navbar-expand-sm bg-dark justify-content-center">

		  <!-- Links -->
		  <ul class="navbar-nav">
		    <li class="nav-item">
		      <a class="nav-link" href="indexx.php">HOME   | </a>
		    </li>
		    <li class="nav-item">
		      <a class="nav-link" href="insert.php">ADD STUDENT  | </a>

		    </li>
              
                       <?php
				             $selectquery = "SELECT * FROM student";
				             $runquery = mysqli_query($connect,$selectquery);


							$mydata = mysqli_fetch_assoc($runquery)

								?>

		   
		     <li class="nav-item">
		      <a class="nav-link" href="edit.php? id=<?php echo $mydata["id"];?>">UPDATE |</a>
		    </li>
		    
		     <li class="nav-item">
		      <a class="nav-link" href="show.php? id=<?php echo $mydata["id"];?>">DETAILS |</a>
		    </li>

		     <li class="nav-item">
		      <a class="nav-link" href="registration.php">REGISTRSTION  |</a>
		    </li>
		     <li class="nav-item">
		      <a class="nav-link" href="login.php">LOGIN  |</a>
		    </li>
		     <li class="nav-item">
		      <a  class="nav-link justify-content-right" href="../session/logout.php">LOGOUT</a>
		    </li>
		  </ul>

		</nav>
	</header>
</div>

</body>
</html>