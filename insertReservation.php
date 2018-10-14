<?php
   include('config.php');

$sql="INSERT INTO reservations (name, email, phone, package, menu, date, day, location, pax, total) 
VALUES ('$_POST[name]', '$_POST[email]', '$_POST[phone]', '$_POST[package]', '$_POST[menu]', '$_POST[date]', '$_POST[day]', '$_POST[location]', '$_POST[pax]', '$_POST[total]')";


if (!mysqli_query($mysqli,$sql))
  {
  die('Error: ' . mysqli_error($mysqli));
  }
  header("location: index.html");
  echo "1 record added";

 mysqli_close($mysqli);
?> 