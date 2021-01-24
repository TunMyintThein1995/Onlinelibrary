<?php
    $book=$_GET["bookname"];
    include("connection.php");
    $sql="SELECT bookid,title,author FROM booktb  WHERE title LIKE '$book%'";
	 // or `author`LIKE 'book%'";
	 $res=mysqli_query($conn,$sql);
	 while($row=mysqli_fetch_array($res))
     {
		 echo '<p><a href="index.php?bookid='.$row["bookid"].'">'.$row["title"].'</a></p>';
	 }
    ?>
