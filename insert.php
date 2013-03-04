<?php

//mysql_connect("localhost","root","rackEH");//database connection
//mysql_select_db("unsats");


$con=mysqli_connect("localhost", "root", "rackEH", "unsats");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


$sql="INSERT INTO unsats (ticket, customer_contact, owner)
VALUES
('$_POST[element_1]','$_POST[element_3]','$_POST[element_6]')";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error());
  }
echo "1 record added";

mysqli_close($con);
?> 
