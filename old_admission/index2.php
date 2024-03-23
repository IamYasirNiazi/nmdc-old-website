<?php
include_once "links.php";
date_default_timezone_set("Asia/Karachi");
$error="<div class='alert alert-danger alert-dismissable'>
<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
<strong>Error !</strong> Login details are Invalid.
</div>";
$success="<div class='alert alert-success alert-dismissable'>
<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
<strong>Success !</strong> Acount Created Successfully, Login your Account.
</div>";
?>
<div class="container-fluid" style="padding:0;">

<div style="padding:0; text-align:center;">
<a href="home.php" style="text-decoration:none;">
<h1 style="background-color:#1f74ab; color:#FFF; padding:15px;margin:0;">NIAZI MEDICAL & DENTAL COLLEGE SARGODHA</h1></a>

<button class="btn btn-danger" style="margin-top:20px; letter-spacing:3px; word-spacing:10px; margin-bottom:20px;">LOGIN YOUR ACCOUNT</button>
</div>

<div class="col-md-4 col-md-offset-4" style="margin-top:10px;">
<?php 
if(isset($_REQUEST['error']))
{
echo $error;
}
if(isset($_REQUEST['success']))
{
echo $success;
}
?>
</div>

<form action="login.php" method="POST" id="my-reg-form" class="form-group">
					<div class="container">
                    <div class="col-md-6 col-md-offset-3" style="background-color:#f2f2f2; border:1px solid #333; border-radius:10px; padding-top:20px;">
					<div class="row">
						<div class="col-md-12 form-group">
							<label>CNIC *</label>
							<input type="text" name="cnic" class="validate_cnic form-control" required>
						</div>
						<div class="col-md-12 form-group">
							<label>Password</label>
							<input type="password" name="pass" class="form-control" required>
						</div>
					</div>

<div class="row">
<div class="col-md-12 form-group">                                     
<button class="btn btn-success form-control" id="reg_submit" type="submit" name="submit" style="margin-bottom:10px; margin-top:10px;">LOGIN ACCOUNT</button>
<a href="signup.php" style="color:#F00;"><p style="margin-top:20px;">Don't have Account? Create your Account</p></a>
</div>
</div>
					</div> 
			        </div>
</form>
</body>
</html>