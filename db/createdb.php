<?php

$host="localhost";
$user="root"; 
$password="";

$connect=mysqli_connect("$host","$user","$password");

$sql="CREATE DATABASE tenbreak";

$result=mysqli_query($connect,$sql);

if($result===TRUE)
{
echo" Database Created";
}
else
{
echo "Database not created"; 
}
?>