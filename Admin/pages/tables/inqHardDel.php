<?php include("../../../config.php");?>
<?php


$query="delete from archived_inq";
$result=mysqli_query($mysqli,$query);
header('Location: archive_inq.php');
exit();
mysqli_close($mysqli);
?>

