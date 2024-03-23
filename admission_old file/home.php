<?php 
session_start();
if (!isset($_SESSION['student'])) {
	header("Location:logout.php");
}
?>
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Admission Form</title>
		<!-- <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"> -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
		<link href="assets/css/registeration.css" rel="stylesheet" type="text/css">
		<link href="assets/css/bootstrap-datetimepicker.min.css" rel="stylesheet" type="text/css">
		<link href="assets/css/style.css" rel="stylesheet" type="text/css">
		<style>
			a{
				text-decoration: none;
			}
			.admission-btns a.btn-info{
				color: #fff;
				background-color: #337ab7;
				border-color: #2e6da4;
			}

			@media (min-width: 576px) {
			.position-sm-static {
				position: static !important;
			}
			.position-sm-relative {
				position: relative !important;
			}
			.position-sm-absolute {
				position: absolute !important;
			}
			.position-sm-fixed {
				position: fixed !important;
			}
			.position-sm-sticky {
				position: sticky !important;
			}
			}
			@media (min-width: 768px) {
			.position-md-static {
				position: static !important;
			}
			.position-md-relative {
				position: relative !important;
			}
			.position-md-absolute {
				position: absolute !important;
			}
			.position-md-fixed {
				position: fixed !important;
			}
			.position-md-sticky {
				position: sticky !important;
			}
			}

			@media (min-width: 992px) {
			.position-lg-static {
				position: static !important;
			}
			.position-lg-relative {
				position: relative !important;
			}
			.position-lg-absolute {
				position: absolute !important;
			}
			.position-lg-fixed {
				position: fixed !important;
			}
			.position-lg-sticky {
				position: sticky !important;
			}
			}

			@media (min-width: 1200px) {
			.position-xl-static {
				position: static !important;
			}
			.position-xl-relative {
				position: relative !important;
			}
			.position-xl-absolute {
				position: absolute !important;
			}
			.position-xl-fixed {
				position: fixed !important;
			}
			.position-xl-sticky {
				position: sticky !important;
			}
			}
		</style>

	</head>

	<body style="padding:0; margin:0;">
<?php
// include_once "links.php";
include_once "config.php";
$db = new Db();

date_default_timezone_set("Asia/Karachi");
if (isset($_SESSION['student'])) {
?>
	<div style="padding:0; text-align:center;" class="container">
		<div class="row justify-content-center">
			<div  class="col-md-6 col-xs-6">
				<a href="index.php" title="NIAZI MEDICAL AND DENTAL COLLEGE" >
					<img src="../img/logo.webp" id="logoimg" style="height: 100px; " class="">
					<h1 style="font-size: 26px;font-weight: bold;margin-top: 30px;color:#181920;" class="">NIAZI MEDICAL &amp; DENTAL COLLEGE</h1>
				</a>
			</div>
			<!-- <div class="col-md-3 col-xs-3">
				<a href="logout.php">
					<button class="btn btn-info" style="margin-top:10px; margin-bottom:20px; float:right; margin-right:40px;">LOGOUT</button>
				</a>
			</div> -->
		</div>
	</div>
	<div class="clearfix"></div>
	<div class="container pt-5">
		<div class="row gap-5 justify-content-center admission-btns">
			<a href="admission_apply.php?d=mbbs" class="col-md-3 col-xs-4 btn btn-info col-md-offset-1" style="padding: 30px 50px;">
			MBBS
			</a>
			<a href="admission_apply.php?d=bds" class="col-md-3 col-xs-4 btn btn-info col-md-offset-1" style="padding: 30px 50px;">
			BDS
			</a>
			<a href="admission_apply.php?d=dpt" class="col-md-3 col-xs-4 btn btn-info col-md-offset-1" style="padding: 30px 50px;">
			DPT
			</a>
			<a href="admission_apply.php?d=dpharmacy" class="col-md-3 col-xs-4 btn btn-info col-md-offset-1" style="padding: 30px 50px;">
			D-Pharmacy
			</a>
			<a href="admission_apply.php?d=nursing" class="col-md-3 col-xs-4 btn btn-info col-md-offset-1" style="padding: 30px 50px;">
			Nursing
			</a>
			<a href="logout.php" class="col-md-3 col-xs-4 btn btn-danger col-md-offset-1" style="padding: 30px 50px;">
			LOGOUT
			</a>
		</div>
	</div>
	<?php
} else {
	// header("Location:logout.php");
	session_destroy();
	// header('Location:index.php');
	echo "<script type='text/javascript'>window.location.href='index.php'</script>";
}
	?>
	<div class="probootstrap-copyright position-md-absolute" style="padding: 3em 0;margin-top: 20px;background: #1a1919;color: white; bottom:0; width:100%;">
		<div class="container">
			<div class="row">
				<div class="text-center">
					<p>© 2018-2023 <a href="http://www.nmdc.edu.pk/">NIAZI MEDICAL AND DENTAL COLLEGE</a>. All Rights Reserved. <br>
					</p>
				</div>
			</div>
		</div>
	</div>
	</body>

</html>