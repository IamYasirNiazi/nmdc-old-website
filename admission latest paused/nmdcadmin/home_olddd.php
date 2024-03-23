<?php session_start();
if(!isset($_SESSION['nmdc_admin'])){header("Location:logout.php");}
include_once "links.php";
include_once "../config.php";
$db=new Db();

date_default_timezone_set("Asia/Karachi");
$id=$_SESSION['nmdc_admin'];
?>
<div class="container-fluid" style="padding:0;">

<div style="padding:0; text-align:center;">
<a href="home.php" style="text-decoration:none;">
<h1 style="background-color:#1f74ab; color:#FFF; padding:15px;margin:0;">CONTROL PANEL</h1></a>
</div>

<div style="padding:0;">
<a href="logout.php" style="text-decoration:none;">
<button class="btn btn-info" style="margin-top:30px; margin-bottom:20px; float:right; margin-right:40px;">LOGOUT</button>
</a>

<a href="all.php" style="text-decoration:none;">
<button class="btn btn-primary" style="margin-top:30px; margin-bottom:20px; margin-left:30px;"><i class="fa fa-users"></i> All Students</button>
</a>

<a href="saved.php" style="text-decoration:none;">
<button class="btn btn-info" style="margin-top:30px; margin-bottom:20px; margin-left:10px;"><i class="fa fa-users"></i> Data Saved Students</button>
</a> 

<a href="submitted.php" style="text-decoration:none;">
<button class="btn btn-success" style="margin-top:30px; margin-bottom:20px; margin-left:10px;"><i class="fa fa-users"></i> Form Submitted Students</button>
</a>                  

<a href="waiting.php" style="text-decoration:none;">
<button class="btn btn-warning" style="margin-top:30px; margin-bottom:20px; margin-left:10px;"><i class="fa fa-users"></i> Result Waiting Students</button>
</a> 
</div>
					 
</div>


</body>
</html>