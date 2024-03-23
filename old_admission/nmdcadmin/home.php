<?php session_start();
include_once "links.php";
include_once "../config.php";
$db=new Db();

date_default_timezone_set("Asia/Karachi");
if(!isset($_SESSION['nmdc_admin'])){header("Location:logout.php");}
$id=$_SESSION['nmdc_admin'];
?>
<div class="container-fluid" style="padding:0;">

<div style="padding:0; text-align:center;">
<a href="home.php" style="text-decoration:none;">
<h1 style="background-color:#1f74ab; color:#FFF; padding:15px;margin:0;">CONTROL PANEL</h1></a>

<a href="logout.php">
<button class="btn btn-info" style="margin-top:10px; margin-bottom:20px; float:right; margin-right:40px;">LOGOUT</button>
</a>

<a href="export.php">
<button class="btn btn-success" style="margin-top:10px; margin-bottom:20px; float:right; margin-right:10px;"><i class="fa fa-file-excel-o"></i> Export</button>
</a>
</div>
<div class="clearfix"></div>
                    
					<div class="container-fluid">
<div class="row" style="padding-top:15px; padding-bottom:15px;">
<div class="col-md-12">
<h2 style="font-size:28px;text-align:center; font-family:Constantia, 'Lucida Bright', 'DejaVu Serif', Georgia, serif">Registered Students</h2> 
</div>
</div>
						<div class="row">
							<table class="table table-bordered" style="text-align:center;">
							<thead>
								<tr style="background-color:#000; color:#FFF;">
									<th class="text-center">Sr#</th>
									<th class="text-center">Date</th>
									<th class="text-center">Full Name</th>
									<th class="text-center">Father Name</th>
									<th class="text-center">Gender</th>
									<th class="text-center">Marital Status</th>
									<th class="text-center">DOB</th>
                                    <th class="text-center">Domicile</th>
                                    <th class="text-center">Place of Birth</th>
                                    <th class="text-center">Status of Applicant</th>
                                    <th class="text-center">CNIC</th>
                                    <th class="text-center">Passport</th>
                                    <th class="text-center">Applicant's Mobile</th>
                                    <th class="text-center">Email Address</th>
                                    <th class="text-center">Current Residential Address</th>
                                    <th class="text-center">Permanent Address</th>
                                    <th class="text-center">Father Contact</th>
                                    <th class="text-center">Mother Contact</th>
                                    <th class="text-center">Land Line</th>
                                    <th class="text-center">Admitted in Other College</th>
                                    <th class="text-center">Hostel Accommodation</th>
                                    <th class="text-center">Matriculation/O Level</th>
                                    <th class="text-center">Year of Passing</th>
                                    <th class="text-center">Institution's Name</th>
                                    <th class="text-center">Roll no.</th>
                                    <th class="text-center">Marks Obtained</th>
                                    <th class="text-center">Total Marks</th>
                                    <th class="text-center">Percentage</th>
                                    <th class="text-center">F.Sc/A Level</th>
                                    <th class="text-center">Year of Passing</th>
                                    <th class="text-center">Institution's Name</th>
                                    <th class="text-center">Roll no.</th>
                                    <th class="text-center">Bio</th>
                                    <th class="text-center">Chemistry</th>
                                    <th class="text-center">Physics</th>
                                    <th class="text-center">Marks Obtained</th>
                                    <th class="text-center">Total Marks</th>
                                    <th class="text-center">Percentage</th>
                                    <th class="text-center">MCAT</th>
                                    <th class="text-center">Year of Passing</th>
                                    <th class="text-center">Institution's Name</th>
                                    <th class="text-center">Roll no.</th>
                                    <th class="text-center">Marks Obtained</th>
                                    <th class="text-center">Total Marks</th>
                                    <th class="text-center">Percentage</th>
								</tr>
								
							</thead>
							<tbody>
<?php $count=1;
$q=mysqli_query($con,"SELECT * FROM `students_data` ORDER BY `id` ASC");
while($row=mysqli_fetch_array($q)){?>
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
<td><?php echo $row['matric_year']; ?></td>
<td><?php echo $row['matric_inst']; ?></td>
<td><?php echo $row['matric_roll']; ?></td>
<td><?php echo $row['matric_marks']; ?></td>
<td><?php echo $row['matric_tmarks']; ?></td>
<td><?php echo $row['matric_per']; ?></td>
<td><?php echo $row['fsc']; ?></td>
<td><?php echo $row['fsc_year']; ?></td>
<td><?php echo $row['fsc_inst']; ?></td>
<td><?php echo $row['fsc_roll']; ?></td>
<td><?php echo $row['fsc_marks_bio']; ?></td>
<td><?php echo $row['fsc_marks_chem']; ?></td>
<td><?php echo $row['fsc_marks_phy']; ?></td>
<td><?php echo $row['fsc_marks']; ?></td>
<td><?php echo $row['fsc_tmarks']; ?></td>
<td><?php echo $row['fsc_per']; ?></td>
<td><?php echo $row['mcat']; ?></td>
<td><?php echo $row['mcat_year']; ?></td>
<td><?php echo $row['mcat_inst']; ?></td>
<td><?php echo $row['mcat_roll']; ?></td>
<td><?php echo $row['mcat_marks']; ?></td>
<td><?php echo $row['mcat_tmarks']; ?></td>
<td><?php echo $row['mcat_per']; ?></td>
</tr>
<?php $count++; } ?>
							</tbody>
						</table>
						</div>                                                        
					</div> 
</div>


</body>
</html>