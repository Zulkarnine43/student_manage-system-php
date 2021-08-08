<?php

include("../db/config.php");
$email = $_POST['email'];
$pass = $_POST['password'];

 $select = "SELECT  * FROM  users WHERE email='$email' AND password='$pass' ";
   $result = mysqli_query($connect, $select);
    $rowcount = mysqli_num_rows($result);
   if($rowcount == 1){
   	session_start();
   	$_SESSION['login'] = true;
   	header("location: ../view/indexx.php");
   } 
   else {
   	session_start();
   	$_SESSION['error'] = true;
   	header("location:../view/login.php");
   	
   }


?>