<?php session_start();
if(!isset($_SESSION['admins'])){header('Location:logout.php');}
include_once "config.php";

$id = mysqli_real_escape_string($con,strval($_REQUEST['id']));

$query=$db->execute("DELETE FROM `uploads` WHERE `id`='$id'");
if($query)
{
header('Location: upload_files.php?delete');
}
else
{
header('Location: upload_files.php?error');
}
?>