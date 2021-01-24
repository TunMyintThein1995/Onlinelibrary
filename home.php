<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="allstyle.css" />
<link rel="stylesheet" type="text/css" href="menustyle.css" />
<link rel="stylesheet" type="text/css" href="inputcss.css" />
</head>
<body>
 <div id="header">
	<?php
		include("header.php");
	?>
	</div>
		<div id="menu">
	<?php
		include("menu.php");
		?>
	</div>
    	<div id="left">
        <ol type="I">
        <?php
		include("connection.php");
		$sql="SELECT categoryid,categoryname FROM `categorytb`";
		$result=mysqli_query($conn,$sql);
		while($row=mysqli_fetch_array($result))
	{
		echo '<p><li><a href=home.php?categoryid='.$row["categoryid"].'>'.$row["categoryname"].'</a></li></p>';
	}
		?>
        </ol>
    </div>
		<div id="right">
			<?php
            if(isset($_GET["id"]))
			{
				$id=$_GET["id"];
				if($id=="reg")
				{
					include("register.php");
				}
				if($id=="search")
				{
					include("search.php");
				}
				if($id=="logout")
				{
					include("register.php");
				}
			}
			if(isset($_GET["fieldid"]))
			{
				$fid=$_GET["fieldid"];
				include("booktable.php");
			}
			if(isset($_GET["categoryid"]))
			{
				$categoryid=$_GET["categoryid"];
				include("category.php");
			}
			if(isset($_GET["bookid"]))
			{
				$bookid=$_GET["bookid"];
				include("viewcount.php");
			}
			//if(isset($_GET["bookid"]))
//			{
//				$bookid=$_GET["bookid"];
//				//include("search_tb.php");
//			}
			?>
	</div>
 	
</body>
</html>