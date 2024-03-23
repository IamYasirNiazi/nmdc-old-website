<?php session_start();
if (!isset($_SESSION['student'])) {
	header("Location:logout.php");
}

if (isset($_GET["d"]) && $_GET["d"] != "") {
	$admissionFor = $_GET["d"];
	switch ($_GET["d"]) {
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
	}
} else {
	header("Location: home.php");
}
include_once 'links.php';
require_once 'config.php';
$db = new Db();

$id = $_SESSION['student'];
$q = mysqli_query($con, "SELECT * FROM `students_data` WHERE `std_id` = '$id'");
$row = mysqli_fetch_array($q);
?>

<body onload="window.print()">
	<style>
		#transcript {
			text-align: center;
			font-size: 22px;
			margin-top: 10px;
			margin-bottom: 10px
		}

		#para {
			padding: 2px;
			padding-top: 10px;
			font-size: 15px;
			line-height: 20px;
		}

		#parab {
			padding: 2px;
			padding-top: 8px;
			font-size: 15px;
			line-height: 20px;
		}

		#spa {
			font-weight: bold;
		}

		#spb {
			padding-right: 20px;
		}

		#spc {
			font-size: 12px;
		}

		#head {
			text-align: left;
			font-size: 17px;
			margin-top: 15px;
			margin-bottom: 5px;
			font-weight: bold;
		}

		th {
			font-size: 12px
		}

		ul {
			list-style-type: none;
			padding: 0;
			margin: 0;
			font-size: 12px;
		}

		@media print {
			#transcript {
				text-align: center;
				font-size: 22px;
				margin-top: 10px;
				margin-bottom: 10px
			}

			#para {
				padding: 2px;
				padding-top: 10px;
				font-size: 15px;
				line-height: 20px;
			}

			#parab {
				padding: 2px;
				padding-top: 8px;
				font-size: 15px;
				line-height: 20px;
			}

			#spa {
				font-weight: bold;
			}

			#spb {
				padding-right: 20px;
			}

			#spc {
				font-size: 12px;
			}

			#head {
				text-align: left;
				font-size: 17px;
				margin-top: 15px;
				margin-bottom: 5px;
				font-weight: bold;
			}

			th {
				font-size: 12px
			}

			.btnz {
				display: none;
			}
		}
	</style>
	<div class="col-md-12 btnz" style="text-align:center;z-index: 999;">
		<a href="view_print.php?d=<?php echo $admissionFor; ?>">
			<button class="btn btn-primary" style="margin-top:10px; margin-bottom:20px; float:right; margin-right:10px;">Print Form</button>
		</a>
		<a href="home.php">
			<button class="btn btn-success" style="margin-top:10px; margin-bottom:20px; float:right; margin-right:10px;">HOME</button>
		</a>
	</div>
	<div class="col-md-12" style="text-align:center;">
		<h1 id="transcript"><img src="../img/logo.webp" id="logoimg" style="height: 100px; " class="">NIAZI MEDICAL & DENTAL COLLEGE SARGODHA</h1>
		<p>PRELIMINARY REGISTRATION FORM FOR <?php echo $applied_for; ?></p>
	</div>

	<div class="col-md-12">

		<div class="col-md-8 col-md-offset-2" style="margin-bottom:10px; border:1px solid #000;">

			<p id="para">
				<!-- <span id="spa">Selected Course: </span> <span id="spb"><?php echo $row['course']; ?></span>  -->
				<span id="spa">Name of Candidate: </span> <span id="spb"><?php echo $row['name']; ?></span>
				<span id="spa">Father's Name: </span> <span id="spb"><?php echo $row['fname']; ?></span>
			</p>

			<p id="parab">
				<span id="spa">Gender: </span> <span id="spb"><?php echo $row['gender']; ?></span>
				<span id="spa">Marital Status: </span> <span id="spb"><?php echo $row['mstatus']; ?></span>
				<span id="spa">Date of birth: </span> <span id="spb"><?php echo $row['dob']; ?></span>
			</p>

			<p id="parab">
				<span id="spa">Domicile: </span> <span id="spb"><?php echo $row['domicile']; ?></span>
				<span id="spa">Nationality <span id="spc">(According to Passport)</span>: </span> <span id="spb"><?php echo $row['pbirth']; ?></span>
			</p>

			<p id="parab">
				<span id="spa">Status of Applicant: </span> <span id="spb"><?php echo $row['applicant_status']; ?></span>
				<?php if ($row['applicant_status'] == "Pakistani Student") { ?>
					<span id="spa">CNIC: </span> <span id="spb"><?php echo $row['cnic']; ?></span>
				<?php } else { ?>
					<span id="spa">Passport No.: </span> <span id="spb"><?php echo $row['passport']; ?></span>
				<?php } ?>
			</p>

			<p id="parab">
				<span id="spa">Applicant's Mobile No.: </span> <span id="spb"><?php echo $row['app_mob']; ?></span>
				<span id="spa">Email Address: </span> <span id="spb"><?php echo $row['email']; ?></span>
			</p>

			<p id="parab">
				<span id="spa">Current Residential Address: </span> <span id="spb"><?php echo $row['caddress']; ?></span>
			</p>

			<!-- <p id="parab">
<span id="spa">Permanent Address: </span> <span id="spb"><?php echo $row['paddress']; ?></span>
</p> -->

			<p id="parab">
				<span id="spa">Father Contact No.: </span> <span id="spb"><?php echo $row['fathcontact']; ?></span>
				<!-- <span id="spa">Mother Contact No.: </span> <span id="spb"><?php echo $row['mothcontact']; ?></span> -->
			</p>

			<p id="parab">
				<span id="spa">Land Line if any: </span> <span id="spb"><?php echo $row['landline']; ?></span>
			</p>

			<!-- <p id="parab">
<span id="spa" style="font-size:14px;">Have you ever been admitted to any Medical College / Undergraduate programe previously?</span> 
<span id="spb"><?php echo $row['pr_admitted']; ?></span>
</p> -->

			<!-- <p id="parab">
<span id="spa">Hostel Accommodation:</span> 
<span id="spb"><?php echo $row['hostel']; ?></span>
</p> -->


			<h3 id="head">Academic Record:</h3>
			<table class="table table-bordered" style="text-align:center;border:1px solid #000;">
				<thead>
					<tr>
						<th width="15%" class="text-center">Examination</th>
						<th width="15%" class="text-center">Passing Year</th>
						<th width="25%" class="text-center">Institution's Name</th>
						<th width="10%" class="text-center">Roll no.</th>
						<th width="15%" class="text-center">Marks Obtained</th>
						<th width="10%" class="text-center">Total Marks</th>
						<th width="10%" class="text-center">Percentage %</th>
					</tr>
				</thead>
				<tbody>
					<tr>
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
					</tr>
					<tr>
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
					</tr>
					<tr>
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
				</tbody>
			</table>


			<!-- <p>Please Attach 1 Photocopy (WITHOUT ATTESTATION) of each of the following documents with your application.</p>

<table>
<tr>
<td>1- Student CNIC/B-Form/Passport</td>
<td>2- Father's CNIC</td>
</tr>
<tr>
<td>3- Matriculation Certificate or equivalent</td>
<td>4- Domicile Certificate</td>
</tr>
<tr>
<td>5- F.Sc. Certificate or equivalent</td>
<td>6- 2 Latest Photos (Passport size)</td>
</tr>
<tr>
<td>7- MCAT Result Card</td>
<td>8- SAT II (If Applicable)</td>
</tr>
<tr>
	<td>9- NOC from Federal Board & Students from out of Punjab.</td>
<td>10- 3 Blank Stamp Paper (Affidavit) of <b>Rs.100/-</b> each.</td>
</tr>
</table> -->

			<br>

			<div class="row">
				<div class="col col-md-10">
					<h4><b>INSTRUCTIONS FOR ADMISSION IN <?php echo $applied_for; ?></b></h4>
					<p>Applications are hereby invited from candidates who wish to apply for admissions in MBBS/BDS as per PM&DC / UHS rules and regulations.<br><br></p>

					<p><b>Following procedure will be adopted:</b></p>

					<ul>
						<li>
							<p>Applicant can apply directly at the College premisis (Administration Block) by submitting all documents pay order / demand draft.</p>
						</li>
						<li>
							<p>Applicant can also apply via online portal of Niazi Medical & Dental College ( www.nmdc.edu.pk/admission/ ). However, their applications will be considered subject to sending through courier the hard copy of application form along-with attached documents and payment of Rs. 2,000/- (Pay Order / Demand Draft(Non-Refundable) in favor of Niazi Medical & Dental College (Private) Limited, Sargodha) in the Administration Block of NM&DC before the closure of application date.</p>
						</li>
						<li>
							<p>The application forms for MBBS and BDS are different / separate. Fee for each application has to be submitted separately for processing their application in MBBS and / or BDS.</p>
						</li>
						<li>
							<p><b>Following documents must accompany the application forms:</b></p>
							<ol>
								<li>
									<p>Matriculation / Equivalent Certificate of O-Level</p>
								</li>
								<li>
									<p>FSc / Equivalent Certificate of A-Level</p>
								</li>
								<li>
									<p>MDCAT Result Card</p>
								</li>
								<li>
									<p>SAT II (If Applicable)</p>
								</li>
								<li>
									<p>Copy of CNIC (Candidate and Father) </p>
								</li>
								<li>
									<p>Domicile Certificate</p>
								</li>
								<li>
									<p>One Photograph</p>
								</li>
							</ol>
						</li>
						<li>
							<p>Incomplete application will not be entertained. The photocopies must be clear / readable. <br><br><br></p>
						</li>
					</ul>
				</div>
			</div>

			<br>
		</div>
	</div>
</body>

</html>