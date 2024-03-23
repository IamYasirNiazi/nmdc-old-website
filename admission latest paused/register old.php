<?php session_start();
if(!isset($_SESSION['student'])){header("Location:logout.php");}
include "config.php";
$std_id=$_SESSION['student'];

$admin=$db->getValue("SELECT `email` FROM `contacts` WHERE `id`=1");
$sitename=$db->getValue("SELECT `name` FROM `contacts` WHERE `id`=1");

// To send HTML mail, the Content-type header must be set
$headers = "From: ".$sitename." ".strip_tags($admin) . "\r\n";
$headers .= "Reply-To: ".$sitename." ".strip_tags($admin) . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n".
'X-Mailer: PHP/' . phpversion();

if(isset($_POST["savedata"])){
$submit_st=0;	
}

if(isset($_POST["submit"])){
$submit_st=1;	
}

$date = mysqli_real_escape_string($con,$_POST["date"]);
$dates = mysqli_real_escape_string($con,$_POST["dates"]);
$id = mysqli_real_escape_string($con,$_POST["id"]);

$nameb = mysqli_real_escape_string($con,$_POST["name"]);
$name = strtoupper($nameb);
$fnameb = mysqli_real_escape_string($con,$_POST["fname"]);
$fname = strtoupper($fnameb);

$gender = mysqli_real_escape_string($con,$_POST["gender"]);
$mstatus = mysqli_real_escape_string($con,$_POST["mstatus"]);
$dob = mysqli_real_escape_string($con,$_POST["dob"]);
$domicile = mysqli_real_escape_string($con,$_POST["domicile"]);
$pbirth = mysqli_real_escape_string($con,$_POST["pbirth"]);
$applicant_status = mysqli_real_escape_string($con,$_POST["applicant_status"]);
$cnic = mysqli_real_escape_string($con,$_POST["cnic"]);
$passport = mysqli_real_escape_string($con,$_POST["passport"]);
$app_mob = mysqli_real_escape_string($con,$_POST["app_mob"]);
$email = mysqli_real_escape_string($con,$_POST["email"]);
$caddress = mysqli_real_escape_string($con,$_POST["caddress"]);
$paddress = mysqli_real_escape_string($con,$_POST["paddress"]);

$fathcontact = mysqli_real_escape_string($con,$_POST["fathcontact"]);
$mothcontact = mysqli_real_escape_string($con,$_POST["mothcontact"]);
$landline = mysqli_real_escape_string($con,$_POST["landline"]);
$pr_admitted = mysqli_real_escape_string($con,$_POST["pr_admitted"]);

$matric = mysqli_real_escape_string($con,$_POST["matric"]);
$matric_year = mysqli_real_escape_string($con,$_POST["matric_year"]);
$matric_inst = mysqli_real_escape_string($con,$_POST["matric_inst"]);
$matric_roll = mysqli_real_escape_string($con,$_POST["matric_roll"]);
$matric_marks = mysqli_real_escape_string($con,$_POST["matric_marks"]);
$matric_tmarks = mysqli_real_escape_string($con,$_POST["matric_tmarks"]);
$matric_per = mysqli_real_escape_string($con,$_POST["matric_per"]);

$fsc = mysqli_real_escape_string($con,$_POST["fsc"]);
$fsc_year = mysqli_real_escape_string($con,$_POST["fsc_year"]);
$fsc_inst = mysqli_real_escape_string($con,$_POST["fsc_inst"]);
$fsc_roll = mysqli_real_escape_string($con,$_POST["fsc_roll"]);
$fsc_marks = mysqli_real_escape_string($con,$_POST["fsc_marks"]);
$fsc_tmarks = mysqli_real_escape_string($con,$_POST["fsc_tmarks"]);
$fsc_per = mysqli_real_escape_string($con,$_POST["fsc_per"]);

$mcat = mysqli_real_escape_string($con,$_POST["mcat"]);
$mcat_year = mysqli_real_escape_string($con,$_POST["mcat_year"]);
$mcat_inst = mysqli_real_escape_string($con,$_POST["mcat_inst"]);
$mcat_roll = mysqli_real_escape_string($con,$_POST["mcat_roll"]);
$mcat_marks = mysqli_real_escape_string($con,$_POST["mcat_marks"]);
$mcat_tmarks = mysqli_real_escape_string($con,$_POST["mcat_tmarks"]);
$mcat_per = mysqli_real_escape_string($con,$_POST["mcat_per"]);

$hostel = mysqli_real_escape_string($con,$_POST["hostel"]);
$status = 1;

if(empty($id) && !empty($name))
{
$res=$db->execute("INSERT INTO `students_data`(`date`, `dates`, `name`, `fname`, `gender`, `mstatus`, `dob`, `domicile`, `pbirth`, `applicant_status`, `cnic`, `passport`, `app_mob`, `email`, `caddress`, `paddress`, `fathcontact`, `mothcontact`, `landline`, `pr_admitted`, `matric`, `matric_year`, `matric_inst`, `matric_roll`, `matric_marks`, `matric_tmarks`, `matric_per`, `fsc`, `fsc_year`, `fsc_inst`, `fsc_roll`, `fsc_marks`, `fsc_tmarks`, `fsc_per`, `mcat`, `mcat_year`, `mcat_inst`, `mcat_roll`, `mcat_marks`, `mcat_tmarks`, `mcat_per`, `hostel`, `std_id`, `submit_st`, `status`) VALUES ('$date', '$dates', '$name', '$fname', '$gender', '$mstatus', '$dob', '$domicile', '$pbirth', '$applicant_status', '$cnic', '$passport', '$app_mob', '$email', '$caddress', '$paddress', '$fathcontact', '$mothcontact', '$landline', '$pr_admitted', '$matric', '$matric_year', '$matric_inst', '$matric_roll', '$matric_marks', '$matric_tmarks', '$matric_per', '$fsc', '$fsc_year', '$fsc_inst', '$fsc_roll', '$fsc_marks', '$fsc_tmarks', '$fsc_per', '$mcat', '$mcat_year', '$mcat_inst', '$mcat_roll', '$mcat_marks', '$mcat_tmarks', '$mcat_per', '$hostel', '$std_id', '$submit_st', '$status')");
if($res){
if($submit_st==1){	
mail($email, $sitename, "Thanks for Submitting Application form, Now please login to your account and download your form.", $headers);
header("Location:admission_sent.php");
}else{
header("Location:home.php?success");	
}	
}else{
echo "Error in Insertion";
}
}

if(!empty($id) && !empty($name))
{
$res=$db->execute("UPDATE `students_data` SET `date`='$date', `dates`='$dates', `name`='$name', `fname`='$fname', `gender`='$gender', `mstatus`='$mstatus', `dob`='$dob', `domicile`='$domicile', `pbirth`='$pbirth', `applicant_status`='$applicant_status', `cnic`='$cnic', `passport`='$passport', `app_mob`='$app_mob', `email`='$email', `caddress`='$caddress', `paddress`='$paddress', `fathcontact`='$fathcontact', `mothcontact`='$mothcontact', `landline`='$landline', `pr_admitted`='$pr_admitted', `matric`='$matric', `matric_year`='$matric_year', `matric_inst`='$matric_inst', `matric_roll`='$matric_roll', `matric_marks`='$matric_marks', `matric_tmarks`='$matric_tmarks', `matric_per`= '$matric_per', `fsc`='$fsc', `fsc_year`='$fsc_year', `fsc_inst`='$fsc_inst', `fsc_roll`='$fsc_roll', `fsc_marks`='$fsc_marks', `fsc_tmarks`='$fsc_tmarks', `fsc_per`='$fsc_per', `mcat`='$mcat', `mcat_year`='$mcat_year', `mcat_inst`='$mcat_inst', `mcat_roll`='$mcat_roll', `mcat_marks`='$mcat_marks', `mcat_tmarks`='$mcat_tmarks', `mcat_per`='$mcat_per', `hostel`='$hostel', `std_id`='$std_id', `submit_st`='$submit_st' WHERE `id`='$id'");
if($res){
if($submit_st==1){	
mail($email, $sitename, "Thanks for Submitting Application form, Now please login to your account and download your form.", $headers);
header("Location:admission_sent.php");
}else{
header("Location:home.php?success");	
}
}else{
echo "Error in Insertion";
}
}
?>