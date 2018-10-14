<?php include("../../../config.php");?>
<?php
$print=$_GET['print'];
if(empty($print)){
echo "Select one.";

}else{
$query="select from reservations where res_ID=".$print."";
$result=mysqli_query($mysqli,$query);
header("location: ../examples/invoice-print.php?");
exit();
mysqli_close($mysqli);
}
?>