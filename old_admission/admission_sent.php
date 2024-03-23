<?php session_start();
include_once "links.php";
include_once "config.php";
$db=new Db();
if(!isset($_SESSION['student'])){header("Location:logout.php");}
$id=$_SESSION['student'];
$name=$db->getValue("SELECT `name` FROM `students_data` WHERE `id`='$id'");
?>
<div class="container-fluid" style="padding:0;">

<div style="padding:0; text-align:center;">
<a href="home.php" style="text-decoration:none;">
<h1 style="background-color:#1f74ab; color:#FFF; padding:15px;margin:0;">NIAZI MEDICAL & DENTAL COLLEGE SARGODHA</h1></a>

<a href="logout.php">
<button class="btn btn-info" style="margin-top:10px; margin-bottom:20px; float:right; margin-right:40px;">LOGOUT</button>
</a>
<a href="view_print.php">
<button class="btn btn-primary" style="margin-top:10px; margin-bottom:20px; float:right; margin-right:10px;">Print Form</button>
</a>
<a href="home.php">
<button class="btn btn-success" style="margin-top:10px; margin-bottom:20px; float:right; margin-right:10px;">HOME PAGE</button>
</a>


	<div class="container boxshadow" style="margin-top:80px; text-align:justify; font-size:18px; font-family:Constantia, 'Lucida Bright', 'DejaVu Serif', Georgia, serif;">
		<div class="alert alert-success">
			<strong>Thank You!</strong> Mr./Ms. <span style="text-transform:uppercase"><?php echo $name; ?></span><br>
<pre style="font-family:Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size:15px;">Assalam-O-Alaikum, We have received your online admission form.
 
Please submit hard copy of this form alongwith processing fees in our College Admission Office for further processing of your admission. 

Principal 
Niazi Medical College Sargodha.
</pre>
		</div>
	</div>
    
    
    
</div>
</div>
    
</body>
</html>