<?php session_start();
include_once "config.php";

$code=$_SESSION['code'];
$id=$_SESSION['id'];
$pass = mysqli_real_escape_string($con,$_POST['pass']);

$q=mysqli_query($con,"UPDATE `students_accnt` SET `pass`='$pass' WHERE `id`='$id' AND `rcode`='$code'");
if($q)
{		
echo "<script>window.location.href='index.php?passdone'</script>";
}
else
{
echo "<script>window.location.href='forgotpass.php?error'</script>";	
}
?>