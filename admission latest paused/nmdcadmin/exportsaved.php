<?php 
include_once "../config.php";
 
// Filter the excel data 
function filterData(&$str){ 
    $str = preg_replace("/\t/", "\\t", $str); 
    $str = preg_replace("/\r?\n/", "\\n", $str); 
    if(strstr($str, '"')) $str = '"' . str_replace('"', '""', $str) . '"'; 
} 
 
// Excel file name for download 
$fileName = "FormSaved_Students_data_" . date('d-m-Y') . ".xls"; 
 
// Column names 
$fields = array('Date', 'Full Name', 'Father Name', 'Gender', 'Marital Status', 'DOB', 'Domicile', 'Place of Birth', 'Status of Applicant', 'CNIC', 'Passport', 'Applicant Mobile', 'Email Address', 'Current Residential Address', 'Permanent Address', 'Father Contact', 'Mother Contact', 'Land Line', 'Admitted in Other College', 'Hostel Accommodation', 'Matriculation/O Level', 'Year of Passing', 'Institution Name', 'Roll no.', 'Marks Obtained', 'Total Marks', 'Percentage', 'F.Sc/A Level', 'Year of Passing', 'Institution Name', 'Roll no.', 'Marks Obtained', 'Total Marks', 'Percentage', 'MCAT', 'Year of Passing', 'Institution Name', 'Roll no.', 'Marks Obtained', 'Total Marks', 'Percentage'); 
 
// Display column names as first row 
$excelData = implode("\t", array_values($fields)) . "\n"; 
 
// Fetch records from database 
$query = $db->query("SELECT * FROM `students_data` WHERE `submit_st`=0 ORDER BY `id` ASC"); 
if($query->num_rows > 0){ 
// Output each row of the data 
while($row = $query->fetch_assoc()){
if($row['matric_year']==0){$matric_year="Waiting for Result";}else{$matric_year=$row['matric_year'];}
if($row['fsc_year']==0){$fsc_year="Waiting for Result";}else{$fsc_year=$row['fsc_year'];}
if($row['mcat_year']==0){$mcat_year="Waiting for Result";}else{$mcat_year=$row['mcat_year'];}

$lineData = array($row['date'], $row['name'], $row['fname'], $row['gender'], $row['mstatus'], $row['dob'], $row['domicile'], $row['pbirth'], $row['applicant_status'], $row['cnic'], $row['passport'], $row['app_mob'], $row['email'], $row['caddress'], $row['paddress'], $row['fathcontact'], $row['mothcontact'], $row['landline'], $row['pr_admitted'], $row['hostel'], $row['matric'], $matric_year, $row['matric_inst'], $row['matric_roll'], $row['matric_marks'], $row['matric_tmarks'], $row['matric_per'], $row['fsc'], $fsc_year, $row['fsc_inst'], $row['fsc_roll'], $row['fsc_marks'], $row['fsc_tmarks'], $row['fsc_per'], $row['mcat'], $mcat_year, $row['mcat_inst'], $row['mcat_roll'], $row['mcat_marks'], $row['mcat_tmarks'], $row['mcat_per']); 
array_walk($lineData, 'filterData'); 
$excelData .= implode("\t", array_values($lineData)) . "\n"; 
} 
} 
// Headers for download 
header("Content-Type: application/vnd.ms-excel"); 
header("Content-Disposition: attachment; filename=\"$fileName\""); 
 
// Render excel data 
echo $excelData; 
 
exit;

?>