<?php
include '../../../config.php';

?>

<?php 

if (isset($_POST['submit'])){
$id=$_POST['ID'];

echo $name =$_POST['name'];
echo $email =$_POST['email'];    
echo $phone =$_POST['phone'];
echo $address =$_POST['address'];
echo $package =$_POST['package'];
echo $menu =$_POST['menu'];
echo $date =$_POST['date'];
echo $day =$_POST['day'];
echo $location =$_POST['location'];
echo $pax =$_POST['pax'];
echo $total =$_POST['total'];
echo $arrange =$_POST['arrange'];
echo $function =$_POST['function'];
echo $time =$_POST['time'];
echo $motif =$_POST['motif'];
echo $theme =$_POST['theme'];
echo $setup =$_POST['setup'];
echo $desc =$_POST['desc'];
echo $reserve =$_POST['reserve'];
echo $down =$_POST['down'];
echo $bal =$_POST['bal'];


echo $query="update reservations set name ='$name', email ='$email', phone ='$phone', address ='$address', package ='$package', menu ='$menu', date='$date', day ='$day', location ='$location', pax ='$pax', total ='$total',  arrange ='$arrange', function ='$function', time ='$time', motif ='$motif', theme='$theme', setup ='$setup', desc ='$desc', reserve ='$reserve', down ='$down', bal ='$bal' where res_ID =$id ";
$rows=mysqli_query($mysqli,$query);
echo "succes full updated ".$rows;
mysqli_close($mysqli);
header("location: customerreservations.php?msg=Success!");
exit();
}

?>