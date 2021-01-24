<?php
session_start();
$user=$_POST["user"];
$pass=$_POST["pass"];
include("connection.php");
$date=date('Y-m-d');
$sql="select userid from usertb where username='$user' and password='$pass' and enddate >='$date'";
$res=mysqli_query($conn,$sql);
$n_row=mysqli_num_rows($res);
if($n_row>0)
{
	
	$row=mysqli_fetch_array($res);
	$_SESSION["userid"]=$row["userid"];
	header("Location:index.php?fieldid=1");
}
else
{
	echo '<script>alert("Expire");window.location.href="index.php?id=reg";</script>';
	//header("location:index.php?id=reg");
}

?>
