<?php include("../../../config.php");?>
<?php


$query="delete from archived_res";
$result=mysqli_query($mysqli,$query);
header('Location: archive_res.php');
exit();
mysqli_close($mysqli);
?>

