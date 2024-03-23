<?php 
include "config.php";
if(isset($_POST["submit"])){

$date = date('Y-m-d');

$email = mysqli_real_escape_string($con,$_POST["email"]);
$cnic = mysqli_real_escape_string($con,$_POST["cnic"]);
$pass = mysqli_real_escape_string($con,$_POST["pass"]);
$status = 1;

if(!empty($cnic))
{
$res=$db->execute("INSERT INTO `students_accnt`(`date`, `email`, `cnic`, `pass`, `status`) VALUES ('$date', '$email', '$cnic', '$pass', '$status')");
if($res)
{
header("Location:index.php?success");	
}else{
header("Location:signup.php?error");		
}
}
else
{
echo "Error in Insertion";
}
}
?>