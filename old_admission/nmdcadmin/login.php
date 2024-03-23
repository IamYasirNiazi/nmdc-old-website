<?php session_start();
include "../config.php";
$uname=$_POST['uname'];
$pass=$_POST['pass'];
// To protect MySQL injection
$uname = stripslashes($uname);
$pass = stripslashes($pass);
$uname = mysqli_real_escape_string($con,$uname);
$pass = mysqli_real_escape_string($con,$pass);
$query=mysqli_query($con,"SELECT `uname`, `pass`, `id`, `status` FROM `nmdc_adm` WHERE `uname`= '$uname' AND BINARY `pass`= BINARY '$pass' AND `status`=1");
if($row=mysqli_fetch_array($query))
{
$_SESSION['nmdc_admin'] = $row['id'];
header("Location:home.php");
}
else
{
header("Location:index.php?error");		
}
?>