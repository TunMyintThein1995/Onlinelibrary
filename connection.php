<?php
$conn=mysqli_connect("localhost","root","");
if(!$conn)
{
	die("Could not Connect!");
}
mysqli_select_db($conn,"librarydb");

?>