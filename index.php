<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Online Library</title>
<link rel="stylesheet" type="text/css" href="css/style_common.css" />
<link rel="stylesheet" type="text/css" href="css/style7.css" />
<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css' />
<!--*********-->
<link href="style.css" rel="stylesheet" type="text/css" />
<link href="inputcss.css" rel="stylesheet" type="text/css" />

<script type="text/javascript">
function ctck()
{
var sds = document.getElementById("footer");
if(sds == null){alert("You are using a free package.\n You are not allowed to remove the tag.\n");}
}


function Check(cpwd)
{
	//alert("hi");
	var pwd=document.getElementById("pwd").value;
	if(cpwd != pwd)
		document.getElementById("error").innerHTML="Password and confirm password do not match!";
	else
		document.getElementById("error").innerHTML="";
}
</script> 
</head>

<body>
<div id="container">
<div id="header">
  <div id="quick_links">
    
    <h3>
    	<img src="image/logo1.jpg"/>
    	<span class="header_style1 l1">HMT</span> 
        <span class="header_style2"> Online Library</span>
     </h3>
  </div>
<div id="navigation">
	<?php
    include("menu.php");
    ?>
</div>
</div>
  
  <div id="fish_list">
    <div id="list-top"></div>
    <div id="fish_list-center">
    
            <ul>
            <?php
            include("connection.php");
            $sql="SELECT categoryid,categoryname FROM `categorytb`";
            $result=mysqli_query($conn,$sql);
            while($row=mysqli_fetch_array($result))
           {
            echo '<li><a href=index.php?categoryid='.$row["categoryid"].' class="bsize">'.$row["categoryname"].'</a></li>';
           }
            ?>
           
            </ul>
  </div>
  
</div>
 <div id="left-right">
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
					include("logout.php");
				}
				if($id=="home")
				
				include("homeview.php");
			}
			
			else if(isset($_GET["fieldid"]))
			{
				if(isset($_SESSION["userid"]))
				{
				
					$fid=$_GET["fieldid"];
					include("booktable.php");
				}
				else
				{
					include("login.php");
				}
			}
			else if(isset($_GET["categoryid"]))
			{
				if(isset($_SESSION["userid"]))
				{
				
				$categoryid=$_GET["categoryid"];
				include("category.php");
				}
				else
				{
					include("login.php");
				}
			}
			else if(isset($_GET["bookid"]))
			{
				if(isset($_SESSION["userid"]))
				{
					$bookid=$_GET["bookid"];
					//echo $bookid;
					include("connection.php");
					$sql="UPDATE `booktb` SET  viewcount=viewcount+1  WHERE `bookid` =$bookid";
					$res=mysqli_query($conn,$sql);
					mysqli_close($conn);
					include("viewcount.php");
				}
				else
				{
					include("login.php");
				}
			}
		else if(isset($_GET["bid"]))
			{
				$bid=$_GET["bid"];
				$rate=$_GET["rating"];
				include("rate.php");
			}
				
		else if(isset($_GET["title"]))
			{
				$title=$_GET["title"];
				include("view.php");
			}
		else
		{
			include("homeview.php");
		}
			?>
            
 </div>
 <div id="fotter_navigation">
<ul>
<li><a href="index.php">Home</a></li>
<li><a href="index.php?id=search">About us</a></li>
<li><a href="index.php?bookid=1">News</a></li>
<li><a href="index.php?fieldid=1">Contact us</a></li>
</ul>
</div>
<p style="color:#0CF;text-align:center;width:1200px;background-color:#333">
Developed by HMT &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &copy;Right 2012</p>

</div><!--end container-->

</body>
</html>
