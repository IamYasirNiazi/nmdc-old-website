<?php session_start();
include_once "config.php";

$admin=$db->getValue("SELECT `email` FROM `contacts` WHERE `id`=1");
$sitename=$db->getValue("SELECT `name` FROM `contacts` WHERE `id`=1");

$cnic = mysqli_real_escape_string($con,strval($_POST['cnic']));

$q=mysqli_query($con,"SELECT * FROM `students_accnt` WHERE `cnic`='$cnic'");
if($row=mysqli_fetch_array($q))
{
$id=$row['id'];
$batch=rand(111111,999999);
$code=rand(111111,999999);
$to=$row['email'];
$from=$admin;
$subject ='Password Reset Requested | '.$sitename;

// To send HTML mail, the Content-type header must be set
$headers = "From: ".$sitename." ".strip_tags($admin) . "\r\n";
$headers .= "Reply-To: ".$sitename." ".strip_tags($admin) . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n".
'X-Mailer: PHP/' . phpversion();

// Compose a simple HTML email message
$message = '<html><body style="font-family:Gotham, "Helvetica Neue", Helvetica, Arial, sans-serif;">';
$message .='<div style="width:80%; margin-left:10%;">';
$message .='<div style="height:auto; width:100%;float:left; margin-bottom:30px;">';
$message .='<h1 style="margin:0;padding-top:20px; color:#000; text-align:center;">'.$sitename.'</h1>';
$message .='</div>';

$message .= '<p style="font-size:15px; padding-top:20px;">Password Reset Request for '.$sitename.'</p>';
$message .= '<p style="font-size:15px;">Your Secret Code is '.$code.'</p>';

$message .='</div>';
$message .='<div style="color:#000; height:auto; width:80%; margin-left:10%; margin-top:50px; border-top:1px solid #ccc;">';
$message .='<h4 style="margin:0; font-size:16px; text-align:center; padding-top:10px;padding-bottom:10px;">'.$sitename.'</h4>';
$message .='</div>';
$message .= '<p style="font-size:9px;color:#ccc">Email Batch:'.$batch.'</p>';
$message .= '</body></html>';

// Sending email	
mail($to,$subject,$message,$headers);

$upquery=$db->execute("UPDATE `students_accnt` SET `rcode`='$code' WHERE `cnic`='$cnic'");
if($upquery)
{
$_SESSION['cnic']=$cnic;
$_SESSION['id']=$id;
$_SESSION['code']=$code;
	
echo "<script>window.location.href='forgotpassb.php'</script>";	
}

}
else
{
echo "<script>window.location.href='forgotpass.php?error'</script>";	
}
?>