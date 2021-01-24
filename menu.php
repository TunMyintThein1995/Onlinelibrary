<ul>
     <li><a href="index.php?id=home">Home</a></li>
  
  <li><a href="#">SpecialField</a>
  	<ul>
  <?php
	  include("connection.php");
	  $sql="SELECT fieldid,fieldname FROM `fieldtb` ";
	  $result=mysqli_query($conn,$sql);
	  while($row=mysqli_fetch_array($result))
	  {
		  echo '<li><a href="index.php?fieldid='.$row["fieldid"].'">'.$row["fieldname"].'</a></li>';
	  }	
	  
  ?>
  
 	</ul>
  </li>
  
  <li><a href="index.php?id=reg">Register</a></li>
  <li><a href="index.php?id=search">Search</a></li>
  <?php
  if(isset($_SESSION["userid"]))
	{
		echo '<li><a href="index.php?id=logout">Logout</a></li>';
	}
  ?>
  
  
 </ul>
