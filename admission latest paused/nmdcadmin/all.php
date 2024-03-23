<?php session_start();
if (!isset($_SESSION['nmdc_admin'])) {
    header("Location:logout.php");
}

include_once "../config.php";
$db = new Db();

date_default_timezone_set("Asia/Karachi");
$id = $_SESSION['nmdc_admin'];

$queryCondition = "";
$courseCondition = "";
$course = "";
$headingText = "VIEW ALL STUDENTS";
$exportType = "all";
$fileName = "All_Students_data_";
if (isset($_POST['course']) && $_POST['course'] != "all") {
    $course = $_POST['course'];
    $courseCondition = " AND `students_application`.`applied_for` = '$course'";
}
if(isset($_POST['exportType']) && $_POST['exportType'] != ""){
    $exportType = $_POST['exportType'];
}
if (isset($_POST['all']) || ($exportType == 'all' && isset($_POST['exportData']))) {
    $queryCondition = ($course != "all") ? str_replace("AND", "WHERE", $courseCondition) : "";
    $headingText = "VIEW ALL STUDENTS";
    $exportType = "all";
    $fileName = $_POST['course']."_All_Students_data_";
}
// echo $queryCondition;
// die;
if (isset($_POST['saved']) || ($exportType == 'saved' && isset($_POST['exportData']))) {
    $queryCondition = " WHERE `students_application`.`submit_st`=0 $courseCondition";
    $headingText = "VIEW DATA SAVED STUDENTS";
    $exportType = "saved";
    $fileName = $_POST['course']."_Saved_Students_data_";
}
if (isset($_POST['submitted']) || ($exportType == "submitted" && isset($_POST['exportData']))) {
    $queryCondition = " WHERE (`students_data`.`matric_year`!=0 AND `students_data`.`fsc_year`!=0 AND `students_data`.`mcat_year`!=0) AND `students_application`.`submit_st`=1 $courseCondition";
    $headingText = "VIEW FORM SUBMITTED STUDENTS";
    $exportType = "submitted";
    $fileName = $_POST['course']."_Submitted_Students_data_";
}
if (isset($_POST['waiting']) || ($exportType == "waiting" && isset($_POST['exportData']))) {
    $queryCondition = " WHERE (`students_data`.`matric_year`=0 || `students_data`.`fsc_year`=0 || `students_data`.`mcat_year`=0) $courseCondition";
    $headingText = "VIEW RESULT WAITING STUDENTS";
    $exportType = "waiting";
    $fileName = $_POST['course']."_Waiting_Students_data_";
}
$finalQuery = "SELECT `students_data`.*,`students_application`.`applied_for` as `course_applied` FROM `students_data` JOIN `students_application` ON students_data.std_id = students_application.std_id $queryCondition ORDER BY students_data.`id` ASC";

if(isset($_POST['exportData'])){
    // Excel file name for download 
    $fileName = $fileName . date('d-m-Y') . ".xls";

    // Column names 
    $fields = array('Date', 'Full Name', 'Father Name', 'Gender', 'Marital Status', 'DOB', 'Domicile', 'Place of Birth', 'Status of Applicant', 'CNIC', 'Passport', 'Applicant Mobile', 'Email Address', 'Current Residential Address', 'Permanent Address', 'Father Contact', 'Mother Contact', 'Land Line', 'Admitted in Other College', 'Hostel Accommodation', 'Matriculation/O Level', 'Year of Passing', 'Institution Name', 'Roll no.', 'Marks Obtained', 'Total Marks', 'Percentage', 'F.Sc/A Level', 'Year of Passing', 'Institution Name', 'Roll no.', 'Marks Obtained', 'Total Marks', 'Percentage', 'MCAT', 'Year of Passing', 'Institution Name', 'Roll no.', 'Marks Obtained', 'Total Marks', 'Percentage');

    // Display column names as first row 
    $excelData = implode("\t", array_values($fields)) . "\n";

    // Fetch records from database 
    $query = $db->query($finalQuery);
    if ($query->num_rows > 0) {
        // Output each row of the data 
        while ($row = $query->fetch_assoc()) {
            if ($row['matric_year'] == 0) {
                $matric_year = "Waiting for Result";
            } else {
                $matric_year = $row['matric_year'];
            }
            if ($row['fsc_year'] == 0) {
                $fsc_year = "Waiting for Result";
            } else {
                $fsc_year = $row['fsc_year'];
            }
            if ($row['mcat_year'] == 0) {
                $mcat_year = "Waiting for Result";
            } else {
                $mcat_year = $row['mcat_year'];
            }

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

}

// Filter the excel data 
function filterData(&$str) {
    $str = preg_replace("/\t/", "\\t", $str);
    $str = preg_replace("/\r?\n/", "\\n", $str);
    if (strstr($str, '"')) $str = '"' . str_replace('"', '""', $str) . '"';
}

function courseTitle($course) {
    switch ($course) {
        case "mbbs":
            $applied_for = "MBBS";
            break;
        case "bds":
            $applied_for = "BDS";
            break;
        case "dpt":
            $applied_for = "DPT";
            break;
        case "dpharmacy":
            $applied_for = "D-Pharmacy";
            break;
        case "nursing":
            $applied_for = "Nursing";
            break;
        default:
            $applied_for = "";
    }
    return $applied_for;
}
include_once "links.php";
?>
<div class="container-fluid" style="padding:0;">

    <div style="padding:0; text-align:center;">
        <a href="home.php" style="text-decoration:none;">
            <h1 style="background-color:#1f74ab; color:#FFF; padding:15px;margin:0;">CONTROL PANEL</h1>
        </a>
    </div>

    <div style="padding-left:20px;padding-right:20px;">
        <form action="" method="POST">

            <div style="float: left;margin-top:20px;">
                <select name="course" id="course" class="form-control" style="margin-top:10px;width: 200px;float:left;">
                    <option value="all" <?php echo (isset($_POST['course']) && $_POST['course'] == 'all') ? "selected" : "" ?>>All Courses</option>
                    <option value="mbbs" <?php echo (isset($_POST['course']) && $_POST['course'] == 'mbbs') ? "selected" : "" ?>>MBBS</option>
                    <option value="bds" <?php echo (isset($_POST['course']) && $_POST['course'] == 'bds') ? "selected" : "" ?>>BDS</option>
                    <option value="dpt" <?php echo (isset($_POST['course']) && $_POST['course'] == 'dpt') ? "selected" : "" ?>>DPT</option>
                    <option value="dpharmacy" <?php echo (isset($_POST['course']) && $_POST['course'] == 'dpharmacy') ? "selected" : "" ?>>D-Pharmacy</option>
                    <option value="nursing" <?php echo (isset($_POST['course']) && $_POST['course'] == 'nursing') ? "selected" : "" ?>>Nursing</option>
                </select>
                <!-- <a href="home.php" style="text-decoration:none;"> -->
                <button name="all" type="submit" class="btn btn-danger" style="margin-top:10px; margin-left:10px;"><i class="fa fa-users"></i> All Students</button>
                <!-- </a> -->

                <!-- <a href="saved.php" style="text-decoration:none;"> -->
                <button name="saved" type="submit" class="btn btn-info" style="margin-top:10px; margin-left:10px;"><i class="fa fa-users"></i> Data Saved Students</button>
                <!-- </a> -->

                <!-- <a href="submitted.php" style="text-decoration:none;"> -->
                <button name="submitted" type="submit" class="btn btn-success" style="margin-top:10px; margin-left:10px;"><i class="fa fa-users"></i> Form Submitted Students</button>
                <!-- </a> -->

                <!-- <a href="waiting.php" style="text-decoration:none;"> -->
                <button name="waiting" type="submit" class="btn btn-warning" style="margin-top:10px; margin-left:10px;"><i class="fa fa-users"></i> Result Waiting Students</button>
                <!-- </a> -->
            </div>
            <div style="margin-top:30px; margin-bottom:20px; float:right;">
                <!-- <a href="exportall.php" style="text-decoration:none;"> -->
                <button type="submit" name="exportData" class="btn btn-success exportData" style="margin-right:10px;"><i class="fa fa-file-excel-o"></i> Export</button>
                <input type="hidden" name="exportType" class="exportType" value="<?php echo $exportType; ?>"/>
                <!-- </a> -->
                <a href="logout.php" style="text-decoration:none;">
                    <button class="btn btn-info" style="">LOGOUT</button>
                </a>
            </div>
            <div class="clearfix"></div>
            <!-- <div>
                Select Course
                <input type="radio" name="course" value="all" <?php echo (isset($_POST['course']) && $_POST['course'] == 'all') ? "checked" : "" ?> /> All
                <input type="radio" name="course" value="mbbs" <?php echo (isset($_POST['course']) && $_POST['course'] == 'mbbs') ? "checked" : "" ?> /> MBBS
                <input type="radio" name="course" value="bds" <?php echo (isset($_POST['course']) && $_POST['course'] == 'bds') ? "checked" : "" ?> /> BDS
                <input type="radio" name="course" value="dpt" <?php echo (isset($_POST['course']) && $_POST['course'] == 'dpt') ? "checked" : "" ?> /> DPT
                <input type="radio" name="course" value="dpharmacy" <?php echo (isset($_POST['course']) && $_POST['course'] == 'dpharmacy') ? "checked" : "" ?> /> D-Pharmacy
                <input type="radio" name="course" value="nursing" <?php echo (isset($_POST['course']) && $_POST['course'] == 'nursing') ? "checked" : "" ?> /> Nursing
            </div> -->

        </form>
    </div>

</div>
<div class="clearfix"></div>

<div class="container-fluid">
    <div class="row" style="padding-top:15px; padding-bottom:15px;">
        <div class="col-md-12">
            <h2 style="font-size:28px;text-align:center; font-family:Constantia, 'Lucida Bright', 'DejaVu Serif', Georgia, serif"><?php echo $headingText; ?></h2>
        </div>
    </div>
    <div class="row" style="padding:20px;">
        <table class="table table-bordered" style="text-align:center;">
            <thead>
                <tr style="background-color:#000; color:#FFF;">
                    <th class="text-center">Sr#</th>
                    <th class="text-center">Entry_Date</th>
                    <th class="text-center">Course</th>
                    <th class="text-center">Full_Name</th>
                    <th class="text-center">Father_Name</th>
                    <th class="text-center">Gender</th>
                    <th class="text-center">Marital_Status</th>
                    <th class="text-center">DOB</th>
                    <th class="text-center">Domicile</th>
                    <th class="text-center">Place_of_Birth</th>
                    <th class="text-center">Status_of_Applicant</th>
                    <th class="text-center">CNIC</th>
                    <!-- <th class="text-center">Passport</th> -->
                    <th class="text-center">Applicant's_Mobile</th>
                    <th class="text-center">Email_Address</th>
                    <th class="text-center">Current_Residential_Address</th>
                    <!-- <th class="text-center">Permanent_Address</th> -->
                    <th class="text-center">Father_Contact</th>
                    <!-- <th class="text-center">Mother_Contact</th> -->
                    <th class="text-center">Land_Line</th>
                    <!-- <th class="text-center">Admitted_in_Other_College</th> -->
                    <!-- <th class="text-center">Hostel_Accommodation</th> -->
                    <th class="text-center">Matriculation/O_Level</th>
                    <th class="text-center">Year_of_Passing</th>
                    <th class="text-center">Institution's_Name</th>
                    <th class="text-center">Roll_No.</th>
                    <th class="text-center">Marks_Obtained</th>
                    <th class="text-center">Total_Marks</th>
                    <th class="text-center">Percentage</th>
                    <th class="text-center">F.Sc/A_Level</th>
                    <th class="text-center">Year_of_Passing</th>
                    <th class="text-center">Institution's_Name</th>
                    <th class="text-center">Roll_No.</th>
                    <th class="text-center">Marks_Obtained</th>
                    <th class="text-center">Total_Marks</th>
                    <th class="text-center">Percentage</th>
                    <th class="text-center">MCAT</th>
                    <th class="text-center">Year_of_Passing</th>
                    <th class="text-center">Institution's_Name</th>
                    <th class="text-center">Roll_No.</th>
                    <th class="text-center">Marks_Obtained</th>
                    <th class="text-center">Total_Marks</th>
                    <th class="text-center">Percentage</th>
                </tr>

            </thead>
            <tbody>
                <?php $count = 1;
                $q = mysqli_query($con, $finalQuery);
                if(mysqli_num_rows($q) > 0){
                while ($row = mysqli_fetch_array($q)) { ?>
                    <tr>
                        <td><?php echo $count; ?></td>
                        <td><?php echo $row['date']; ?></td>
                        <td><?php echo courseTitle($row['course_applied']); ?></td>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['fname']; ?></td>
                        <td><?php echo $row['gender']; ?></td>
                        <td><?php echo $row['mstatus']; ?></td>
                        <td><?php echo $row['dob']; ?></td>
                        <td><?php echo $row['domicile']; ?></td>
                        <td><?php echo $row['pbirth']; ?></td>
                        <td><?php echo $row['applicant_status']; ?></td>
                        <td><?php echo $row['cnic']; ?></td>
                        <!-- <td><?php //echo $row['passport']; 
                                    ?></td> -->
                        <td><?php echo $row['app_mob']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['caddress']; ?></td>
                        <!-- <td><?php //echo $row['paddress']; 
                                    ?></td> -->
                        <td><?php echo $row['fathcontact']; ?></td>
                        <!-- <td><?php //echo $row['mothcontact']; 
                                    ?></td> -->
                        <td><?php echo $row['landline']; ?></td>
                        <!-- <td><?php //echo $row['pr_admitted']; 
                                    ?></td> -->
                        <!-- <td><?php //echo $row['hostel']; 
                                    ?></td> -->
                        <td><?php echo $row['matric']; ?></td>
                        <td><?php if ($row['matric_year'] == 0) {
                                echo "Waiting for Result";
                            } else {
                                echo $row['matric_year'];
                            } ?></td>
                        <td><?php echo $row['matric_inst']; ?></td>
                        <td><?php echo $row['matric_roll']; ?></td>
                        <td><?php echo $row['matric_marks']; ?></td>
                        <td><?php echo $row['matric_tmarks']; ?></td>
                        <td><?php echo $row['matric_per']; ?></td>
                        <td><?php echo $row['fsc']; ?></td>
                        <td><?php if ($row['fsc_year'] == 0) {
                                echo "Waiting for Result";
                            } else {
                                echo $row['fsc_year'];
                            } ?></td>
                        <td><?php echo $row['fsc_inst']; ?></td>
                        <td><?php echo $row['fsc_roll']; ?></td>
                        <td><?php echo $row['fsc_marks']; ?></td>
                        <td><?php echo $row['fsc_tmarks']; ?></td>
                        <td><?php echo $row['fsc_per']; ?></td>
                        <td><?php echo $row['mcat']; ?></td>
                        <td><?php if ($row['mcat_year'] == 0) {
                                echo "Waiting for Result";
                            } else {
                                echo $row['mcat_year'];
                            } ?></td>
                        <td><?php echo $row['mcat_inst']; ?></td>
                        <td><?php echo $row['mcat_roll']; ?></td>
                        <td><?php echo $row['mcat_marks']; ?></td>
                        <td><?php echo $row['mcat_tmarks']; ?></td>
                        <td><?php echo $row['mcat_per']; ?></td>
                    </tr>
                <?php $count++;
                } }else{ ?>
                    <td colspan="38" style="text-align: left;">No Records Found!</td>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
</div>
<script src="assets/js/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function(e) {
        // window.open("exportall.php");
        // $('.exportData').click(function() {
        //     window.open("exportall.php");
        // });
        // $('input[type=radio]').on('change', function() {
        //     $(this).closest("form").submit();
        // });
    });
</script>

</body>

</html>