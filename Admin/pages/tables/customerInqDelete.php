<?php include("../../../config.php");?>
<?php
$delete=$_GET['delete'];
if(empty($delete)){
echo "Select one.";

}else{
$query="delete from inquiries where inq_ID=".$delete."";
$result=mysqli_query($mysqli,$query);
header("location: customerinquiries.php?");
exit();
mysqli_close($mysqli);
}
?>