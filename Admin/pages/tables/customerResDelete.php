<?php include("../../../config.php");?>
<?php
$delete=$_GET['delete'];
if(empty($delete)){
echo "Select one.";

}else{
$query="delete from reservations where res_ID=".$delete."";
$result=mysqli_query($mysqli,$query);
header("location: customerreservations.php?");
exit();
mysqli_close($mysqli);
}
?>