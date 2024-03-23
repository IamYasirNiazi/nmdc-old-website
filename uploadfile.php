<?php session_start();
if(!isset($_SESSION['admins'])){header('Location:logout.php');}
include_once "config.php";

$filename = mysqli_real_escape_string($con,strval($_POST['filename']));
$lastdate = mysqli_real_escape_string($con,strval($_POST['lastdate']));

$date=date('d-m-Y');

//upload img 
$allowedExts = array("gif", "jpeg", "jpg", "png", "JPG", "PNG", "webp", "WEBP", "pdf", "PDF");
$temp = explode(".", $_FILES["img"]["name"]);
$extension = end($temp);
if ((($_FILES["img"]["type"] == "image/gif")
|| ($_FILES["img"]["type"] == "image/jpeg")
|| ($_FILES["img"]["type"] == "image/jpg")
|| ($_FILES["img"]["type"] == "image/pjpeg")
|| ($_FILES["img"]["type"] == "image/x-png")
|| ($_FILES["img"]["type"] == "image/webp")
|| ($_FILES["img"]["type"] == "application/pdf")
|| ($_FILES["img"]["type"] == "image/png"))
&& ($_FILES["img"]["size"] < 150000000)
&& in_array($extension, $allowedExts))
  {
	  	  
  if ($_FILES["img"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["img"]["error"] . "<br>";
    }
  else
    {

$folder="uploads/";
$temp = explode(".", $_FILES['img']["name"]);
$rand=rand(111,999);
$today=date('siHYmd');
$ntoday=$today.$rand;
$newfilename = $ntoday.'.'.end($temp);

move_uploaded_file($_FILES['img']["tmp_name"], $folder.$newfilename);
$file=$newfilename;	  
} }

if(!empty($filename))
{
$query=$db->execute("INSERT INTO `uploads`(`date`, `filename`, `lastdate`, `file`) VALUES ('$date','$filename','$lastdate','$file')");
if($query)
{
header('Location: upload_files.php?success');
}
else
{
header('Location: upload_files.php?error');
}

}
?>