<?php
include("config.php");
$tbl_student = "CREATE TABLE IF NOT EXISTS student(
 std_id int NOT NULL auto_increment,
  primary key(std_id),
  name varchar (50),
  age varchar (50),
  roll varchar (50),
  address varchar (50),
  mobile varchar (50)





)";

$student = mysqli_query($connect,$tbl_student);

if($student == TRUE )
{ echo " table created";}
else {
	echo"table not created";
}
?>
