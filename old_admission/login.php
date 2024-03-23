<?php session_start();
include "config.php";
$uname=$_POST['cnic'];
$pass=$_POST['pass'];
// To protect MySQL injection
$uname = stripslashes($uname);
$pass = stripslashes($pass);
$uname = mysqli_real_escape_string($con,$uname);
$pass = mysqli_real_escape_string($con,$pass);
$query=mysqli_query($con,"SELECT `cnic`, `pass`, `id`, `status` FROM `students_accnt` WHERE `cnic`= '$uname' AND BINARY `pass`= BINARY '$pass' AND `status`=1");
if($row=mysqli_fetch_array($query))
{
$_SESSION['student'] = $row['id'];
header("Location:home.php");
}
else
{
header("Location:index.php?error");		
}
?>