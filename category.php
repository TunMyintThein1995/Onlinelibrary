<ul>
<?php
$categoryid=$_GET["categoryid"];
include("connection.php");
$sql="SELECT bookid,title,author,cover FROM `booktb`
 WHERE categoryid=$categoryid";
 $res=mysqli_query($conn,$sql);
 while($row=mysqli_fetch_array($res))
{
   	
	echo '<li class="viewbook_1">';

	echo '<p><a href="index.php?bookid='.$row["bookid"].'">
	<img src="image/'.$row["cover"].'" width="150px" height="170px"></a></p>';
	echo '<p><a href="index.php?bookid='.$row["bookid"].'">Title:'.$row["title"].'</a></p>';
	echo '<p><a href="index.php?bookid='.$row["bookid"].'">Author:'.$row["author"].'</a></p>';
	echo '</li>';
}
?>
</ul>