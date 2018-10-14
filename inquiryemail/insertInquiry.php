<?php
   include('../config.php');

$sql="INSERT INTO inquiries (Full_Name, Email_Address, Telephone_Number, Your_Message) 
VALUES ('$_POST[Full_Name]', '$_POST[Email_Address]', '$_POST[Telephone_Number]', '$_POST[Your_Message]')";


if (!mysqli_query($mysqli,$sql))
  {
  die('Error: ' . mysqli_error($mysqli));
  }
  header("location: ../index.html");
  echo "1 record added";

 mysqli_close($mysqli);
?> 