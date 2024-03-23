<?php session_start();
include_once "config.php";
$uname=$_POST['email'];
$pass=$_POST['pass'];
// To protect MySQL injection
$uname = stripslashes($uname);
$pass = stripslashes($pass);
$uname = mysqli_real_escape_string($con,$uname);
$pass = mysqli_real_escape_string($con,$pass);
$query=mysqli_query($con,"SELECT `email`, `pass`,`id` FROM `adminusers` WHERE BINARY `email`= BINARY '$uname' AND BINARY `pass`= BINARY '$pass'");
if($row=mysqli_fetch_array($query))
{
$_SESSION['admins']=$row['id'];
header('Location: upload_files.php');
}
else
{
header('Location: administrationslogin.php?error');
}
?>