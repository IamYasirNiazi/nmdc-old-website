<?php session_start();
include_once "config.php";

$cnic=$_SESSION['cnic'];
$code = mysqli_real_escape_string($con,$_POST['code']);

$q=mysqli_query($con,"SELECT * FROM `students_accnt` WHERE `cnic`='$cnic' AND `rcode`='$code'");
if($row=mysqli_fetch_array($q))
{
echo "<script>window.location.href='forgotpassc.php'</script>";
}
else
{
echo "<script>window.location.href='forgotpassb.php?error'</script>";	
}
?>