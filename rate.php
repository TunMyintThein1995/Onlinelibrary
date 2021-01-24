<?php
$bid=$_GET["bid"];
$rating=$_GET["rate"];
include("connection.php");
$sql="UPDATE `booktb` SET  rating=rating+$rate  WHERE `bookid` =$bid";
$res=mysqli_query($conn,$sql);

header("Location:index.php?bookid=".$bid);
?>