<?php session_start();
if (!isset($_SESSION['nmdc_admin'])) {
    header("Location:logout.php");
}
include_once "links.php";
include_once "../config.php";
$db = new Db();

date_default_timezone_set("Asia/Karachi");
$id = $_SESSION['nmdc_admin'];
?>
<div class="container-fluid" style="padding:0;">

    <div style="padding:0; text-align:center;">
        <a href="home.php" style="text-decoration:none;">
            <h1 style="background-color:#1f74ab; color:#FFF; padding:15px;margin:0;">CONTROL PANEL</h1>
        </a>
    </div>

    <div style="padding:0;">
        <a href="logout.php" style="text-decoration:none;">
            <button class="btn btn-info" style="margin-top:30px; margin-bottom:20px; float:right; margin-right:40px;">LOGOUT</button>
        </a>

        <a href="home.php" style="text-decoration:none;">
            <button class="btn btn-danger" style="margin-top:30px; margin-bottom:20px; margin-left:30px;"><i class="fa fa-users"></i> Home</button>
        </a>

        <a href="all.php" style="text-decoration:none;">
            <button class="btn btn-primary" style="margin-top:30px; margin-bottom:20px; margin-left:10px;"><i class="fa fa-users"></i> All Students</button>
        </a>

        <a href="saved.php" style="text-decoration:none;">
            <button class="btn btn-info" style="margin-top:30px; margin-bottom:20px; margin-left:10px;"><i class="fa fa-users"></i> Data Saved Students</button>
        </a>

        <a href="submitted.php" style="text-decoration:none;">
            <button class="btn btn-success" style="margin-top:30px; margin-bottom:20px; margin-left:10px;"><i class="fa fa-users"></i> Form Submitted Students</button>
        </a>

        <a href="exportwaiting.php" style="text-decoration:none;">
            <button class="btn btn-success" style="margin-top:30px; margin-bottom:20px; float:right; margin-right:10px;"><i class="fa fa-file-excel-o"></i> Export</button>
        </a>
    </div>

</div>
<div class="clearfix"></div>

<div class="container-fluid">
    <div class="row" style="padding-top:15px; padding-bottom:15px;">
        <div class="col-md-12">
            <h2 style="font-size:28px;text-align:center; font-family:Constantia, 'Lucida Bright', 'DejaVu Serif', Georgia, serif">VIEW RESULT WAITING STUDENTS</h2>
        </div>
    </div>
    <div class="row" style="padding:20px;">
        <table class="table table-bordered" style="text-align:center;">
            <thead>
                <tr style="background-color:#000; color:#FFF;">
                    <th class="text-center">Sr#</th>
                    <th class="text-center">Entry_Date</th>
                    <th class="text-center">Full_Name</th>
                    <th class="text-center">Father_Name</th>
                    <th class="text-center">Gender</th>
                    <th class="text-center">Marital_Status</th>
                    <th class="text-center">DOB</th>
                    <th class="text-center">Domicile</th>
                    <th class="text-center">Place_of_Birth</th>
                    <th class="text-center">Status_of_Applicant</th>
                    <th class="text-center">CNIC</th>
                    <th class="text-center">Passport</th>
                    <th class="text-center">Applicant's_Mobile</th>
                    <th class="text-center">Email_Address</th>
                    <th class="text-center">Current_Residential_Address</th>
                    <th class="text-center">Permanent_Address</th>
                    <th class="text-center">Father_Contact</th>
                    <th class="text-center">Mother_Contact</th>
                    <th class="text-center">Land_Line</th>
                    <th class="text-center">Admitted_in_Other_College</th>
                    <th class="text-center">Hostel_Accommodation</th>
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
                $q = mysqli_query($con, "SELECT * FROM `students_data` WHERE `matric_year`=0 || `fsc_year`=0 || `mcat_year`=0 ORDER BY `id` ASC");
                while ($row = mysqli_fetch_array($q)) { ?>
                    <tr>
                        <td><?php echo $count; ?></td>
                        <td><?php echo $row['date']; ?></td>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['fname']; ?></td>
                        <td><?php echo $row['gender']; ?></td>
                        <td><?php echo $row['mstatus']; ?></td>
                        <td><?php echo $row['dob']; ?></td>
                        <td><?php echo $row['domicile']; ?></td>
                        <td><?php echo $row['pbirth']; ?></td>
                        <td><?php echo $row['applicant_status']; ?></td>
                        <td><?php echo $row['cnic']; ?></td>
                        <td><?php echo $row['passport']; ?></td>
                        <td><?php echo $row['app_mob']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['caddress']; ?></td>
                        <td><?php echo $row['paddress']; ?></td>
                        <td><?php echo $row['fathcontact']; ?></td>
                        <td><?php echo $row['mothcontact']; ?></td>
                        <td><?php echo $row['landline']; ?></td>
                        <td><?php echo $row['pr_admitted']; ?></td>
                        <td><?php echo $row['hostel']; ?></td>
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
                } ?>
            </tbody>
        </table>
    </div>
</div>
</div>


</body>

</html>