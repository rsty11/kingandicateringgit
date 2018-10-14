<?php 
	include("config.php"); 
    session_start();
{
	$user=$_POST['user'];
	$userpass=$_POST['userpass'];
	$user= mysqli_real_escape_string( $mysqli,$user);
	$userpass = mysqli_real_escape_string( $mysqli, $userpass);
    $error = "Invalid log in credentials. Try again!";

    $fetch=mysqli_query( $mysqli, "select Employee_ID from employee where Username='$user' and Password = '$userpass'");
    $count=mysqli_num_rows($fetch);
    if($count!="")
    {
    $_SESSION['login_username']=$user;
	 header("location: Admin/dash.php");
    }
    else
    {
        $_SESSION["error"] = $error;
	   header('Location: admin.php');
	}
}
?>
