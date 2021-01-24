<ul class="clearfix">
  <?php
    $bookid=$_GET["bookid"];
    include("connection.php");
    $sql="SELECT bookid,title,author,rating,viewcount,cover FROM `booktb`
    WHERE `bookid`=$bookid";

    //echo $sql;
    $res=mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($res);
    	
    	echo '<p align="left"><img src="image/'.$row["cover"].'" class="view_book"/></p>';
    	echo "<p><b>Title:</b>".$row["title"]."</p>";
    	echo "<p><b>Author:</b>".$row["author"]."</p>";
    	echo "<p><b>Viewcount:</b>".$row["viewcount"]."</p>";
    	echo "<p><b>Rating:</b>".$row["rating"]."</p>";
    	
    	for($i=1;$i<=5;$i++)
    {
    	echo '<a href="index.php?bid='.$row["bookid"].'&rating='.$i.'"><img src="image/star.gif" /></a>';
    }
    	echo '<p><a href="index.php?title='.$row["title"].'">View</a></p>';

    mysqli_close($conn);
  ?>
</ul>

