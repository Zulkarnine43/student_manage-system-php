<?php
include("../db/config.php");
 $name = $_POST['name'];
 $mobile = $_POST['mobile'];
 $email = $_POST['email'];
 $pass = $_POST['password'];
  $conpass = $_POST['con_password'];

  if($pass != $conpass){
  	header("location:../view/registration.php");
  }

  $insert = "INSERT INTO users values (NULL,'$name','$mobile','$email','$pass')";
  if(mysqli_query($connect,$insert)){

  	
  	 	header("location:../view/login.php");

  }
else{
	echo"not registrstion";
}

?>