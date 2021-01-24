<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$user=$_POST["user"];
$full=$_POST["full"];
$pass=$_POST["pass"];
$confirm=$_POST["confirm"];
$gen=$_POST["gen"];
$Country=$_POST["Country"];
$utype=$_POST["utype"];

$startdate=date('Y-m-d');

if($utype=="Gold")
{
	$enddate=date('Y-m-d',strtotime("+2months"));
}
else 
{
	$enddate=date('Y-m-d',strtotime("+4months"));
}
//$y=$_POST["Year"];
//$m=$_POST["Month"];
//$d=$_POST["Day"];
//$date=$y.'-'.$m.'-'.$d;


include("connection.php");
$sql="INSERT INTO `usertb`(username,fullname,password,Confirmpassword,gender,country,startdate,enddate) 
VALUES ('$user','$full','$pass','$confirm','$gen','$Country','$startdate','$enddate')";

$res=mysqli_query($conn,$sql);

header("Location:login.php");
//echo $sql;

?>
</body>
</html>