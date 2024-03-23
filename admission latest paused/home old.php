<?php session_start();
include_once "links.php";
include_once "config.php";
$db=new Db();

$successb="<div class='alert alert-success alert-dismissable'>
<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
<strong>Success !</strong> Your Data is Saved Successfully.
</div>";

date_default_timezone_set("Asia/Karachi");
if(isset($_SESSION['student'])){
$id=$_SESSION['student'];

$email=$db->getValue("SELECT `email` FROM `students_accnt` WHERE `id`='$id'");
$cnic=$db->getValue("SELECT `cnic` FROM `students_accnt` WHERE `id`='$id'");

$q=mysqli_query($con,"SELECT * FROM `students_data` WHERE `std_id`='$id'");
if($row=mysqli_fetch_array($q)){
$name=$row['name'];
$submit_st=$row['submit_st'];
}
if(empty($submit_st)){$submit_st=0;}
?>

<style>
.modal .modal-content .close {
    position: absolute;
    top: -7px;
    right: 10px;
    z-index: 100;
    font-size: 46px;
}
</style>

<!-- Modal -->
<div class="modal fade" id="instructionsModal" tabindex="-1" role="dialog">
			<div class="modal-dialog">
				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
						<div class="modal-body modal-body-sub_agile">
						
                        <div class="col-md-12 modal_body_left modal_body_left1">
							<h3 class="agileinfo_sign"><span></span></h3>
							<!--
							<a href="admission/" target="_blank">
							<button class="btn btn-success" style="margin-bottom:20px;">Apply Online Admission 2022-2023</button>
							</a>
							-->
							<img src="img/01bb.webp" alt="Main Banner" style="width:100%;">
						</div>

						<div class="clearfix"></div>
					</div>
				</div>
				<!-- //Modal content-->
			</div>
		</div>
<!-- //Modal -->

<div class="container-fluid" style="padding:0;">

<div style="padding:0; text-align:center;">
<a href="home.php" style="text-decoration:none;">
<h1 style="background-color:#1f74ab; color:#FFF; padding:15px;margin:0; font-size:25px; line-height:35px;">NIAZI MEDICAL & DENTAL COLLEGE SARGODHA</h1></a>

<?php 
$q=mysqli_query($con,"SELECT * FROM `students_data` WHERE `std_id`='$id'");
if($row=mysqli_fetch_array($q)){
if($row['matric_year']!=0 && $row['fsc_year']!=0 && $row['mcat_year']!=0){ 
?>
<a href="logout.php">
<button class="btn btn-info" style="margin-top:10px; margin-bottom:20px; float:right; margin-right:40px;">LOGOUT</button>
</a>
<a href="view_print.php">
<button class="btn btn-primary" style="margin-top:10px; margin-bottom:20px; float:right; margin-right:10px;">Print Form</button>
</a>

	<div class="container boxshadow" style="margin-top:80px; text-align:justify; font-size:18px; font-family:Constantia, 'Lucida Bright', 'DejaVu Serif', Georgia, serif;">
		<div class="alert alert-success">
			<strong>Thank You!</strong> Mr./Ms. <span style="text-transform:uppercase"><?php echo $name; ?></span><br>
<pre style="font-family:Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size:15px;">Assalam-O-Alaikum, We have received your online admission form.
 
Please submit hard copy of this form alongwith processing fees in our College Admission Office for further processing of your admission. 

Principal 
Niazi Medical College Sargodha.
</pre>
		</div>
	</div>
<?php }} else{ ?>   

<a href="logout.php">
<button class="btn btn-info" style="margin-top:10px; margin-bottom:20px; float:right; margin-right:40px;">LOGOUT</button>
</a>

<div class="clearfix"></div>

<button class="btn btn-success" style="margin-top:20px; letter-spacing:1px; word-spacing:2px; margin-bottom:40px;">PRELIMINARY REGISTRATION FORM</button>

<div class="clearfix"></div>
<div class="col-md-6 col-md-offset-3" style="margin-top:0px;">
<?php 
if(isset($_REQUEST['success']))
{
echo $successb;
}
?>
</div>

<div class="clearfix"></div>
<?php 
$q=mysqli_query($con,"SELECT * FROM `students_data` WHERE `std_id`='$id'");
if($row=mysqli_fetch_array($q)){
if($row['matric_year']!=0 && $row['fsc_year']!=0 && $row['mcat_year']!=0){ ?>
<p style="text-align:center; color:#F00; font-size:16px; font-weight:bold; margin-bottom:30px;">Verify Your Details and Submit Application</p>
<?php } } ?>
</div>

<form action="register.php" method="POST" id="my-reg-form" class="form-group">
<input type="hidden" name="date" value="<?php if(empty($row['date'])){echo date("F j, Y, g:i a");}else{echo $row['date'];}?>">
<input type="hidden" name="dates" value="<?php if(empty($row['dates'])){echo date("Y-m-d");}else{echo $row['dates'];}?>">
<input type="hidden" name="id" value="<?php if(empty($row['id'])){echo "";}else{echo $row['id'];}?>">
					<div class="container">

					<div class="row" >
						<div class="col-md-6 form-group">
							<label>Select Course *</label>
							<div class="row form-group" >
								<div class="col-md-3">
									<label for="">MBBS</label>
									<input type="radio" name="course" value="mbbs" class="form-control-radio" <?php if(empty($row['mbbs'])){echo "checked";}else{if($row['course']=="mbbs"){ echo "checked"; }}?>>
								</div>
								<div class="col-md-3">
									<label>BDS</label>
									<input type="radio" name="course" value="bds" class="form-control-radio" <?php if(empty($row['bds'])){echo "";}else{if($row['course']=="bds"){ echo "checked"; }}?>>
								</div>
							</div>
						</div>
					</div>
					
					<div class="row" >
						<div class="col-md-6 form-group" >
							<label>Name of Candidate *</label>
<input type="text" name="name" id="name" class="form-control" autofocus style="text-transform:uppercase;" required value="<?php if(empty($row['name'])){echo "";}else{echo $row['name'];}?>">
						</div>
						<div class="col-md-6 form-group">
							<label>Father's Name *</label>
<input type="text" name="fname" id="fname" class="form-control" style="text-transform:uppercase;" required value="<?php if(empty($row['fname'])){echo "";}else{echo $row['fname'];}?>"/>
						</div>
					</div>
                    <div class="row" >
						<div class="col-md-6 form-group">
							<label>Gender *</label>
							<div class="row form-group" >
								<div class="col-md-3">
									<label for="">Male</label>
									<input type="radio" name="gender" value="Male" class="form-control-radio" <?php if(empty($row['fname'])){echo "checked";}else{if($row['gender']=="Male"){ echo "checked"; }}?>>
								</div>
								<div class="col-md-3">
									<label>Female</label>
									<input type="radio" name="gender" value="Female" class="form-control-radio" <?php if(empty($row['fname'])){echo "";}else{if($row['gender']=="Female"){ echo "checked"; }}?>>
								</div>
							</div>
						</div>
						<div class="col-md-6 form-group">
							<label>Marital Status *</label>
							<div class="row form-group" >
								<div class="col-md-3">
									<label for="">Single</label>
									<input type="radio" name="mstatus" value="Single" class="form-control-radio" <?php if(empty($row['mstatus'])){echo "checked";}else{if($row['mstatus']=="Single"){ echo "checked"; }}?>>
								</div>
								<div class="col-md-3">
									<label>Married</label>
									<input type="radio" name="mstatus" value="Married" class="form-control-radio" <?php if(empty($row['mstatus'])){echo "";}else{if($row['mstatus']=="Married"){ echo "checked"; }}?>>
                				</div>
								</div>
						</div>
					</div>
					<div class="row">
						 <div class='col-md-6 form-group' >					  
					            <div class="form-group">
					                	<label>Date of birth *</label>
					                <div class='input-group date' >
					          <input id="time" type='text' name="dob" class="form-control" required value="<?php if(empty($row['dob'])){echo "";}else{echo $row['dob'];}?>"/>
					                    <span class="input-group-addon">
					                        <span class="glyphicon glyphicon-calendar"></span>
					                    </span>
					                </div>
					            </div>
					    </div>
                        <div class="col-md-6 form-group" >
							<label>Domicile *</label>
							<input type="text" name="domicile" class="form-control" required value="<?php if(empty($row['domicile'])){echo "";}else{echo $row['domicile'];}?>">
						</div>
					</div>
					<div class="row" >
						<div class="col-md-6 form-group" >
<label>Nationality * <span style="font-size:12px; color:#666;">(According to Passport)</span></label>
							<input type="text"  name="pbirth" class="form-control" required value="<?php if(empty($row['pbirth'])){echo "";}else{echo $row['pbirth'];}?>">
						</div>
						<div class="col-md-6 form-group" >
							<label>Status of Applicant *</label>
							<select name="applicant_status" id="applicant_status" class="form-control">
								<option <?php if(empty($row['applicant_status'])){echo "";}else{if($row['applicant_status']=="Pakistani Student"){ echo "selected"; }}?>>Pakistani Student</option>
								<option <?php if(empty($row['applicant_status'])){echo "";}else{if($row['applicant_status']=="Overseas Pakistani Student"){ echo "selected"; }}?>>Overseas Pakistani Student</option>
								<option <?php if(empty($row['applicant_status'])){echo "";}else{if($row['applicant_status']=="Foreign Student"){ echo "selected"; }}?>>Foreign Student</option>
							</select>
						</div>
					</div>
					<div class="row" >
						<div class="col-md-4 form-group" id="cnic">
<label>CNIC * <span style="font-size:12px; color:#666;">(Format:38201-9552057-9)</span></label>
<input type="text" name="cnic" class="validate_cnic form-control" required placeholder="38201-9552057-9" value="<?php if(empty($row['cnic'])){echo $cnic;}else{echo $row['cnic'];}?>">
						</div>
                        <div class="col-md-4 form-group" id="passport" style="display:none;">
							<label>Passport No. *</label>
							<input type="text" name="passport" class="form-control" value="<?php if(empty($row['passport'])){echo "";}else{echo $row['passport'];}?>">
						</div>
						<div class="col-md-4 form-group">
<label>Applicant's Mobile No. * <span style="font-size:12px; color:#666;">(Format:0300-1234567)</span>
</label>
<input type="text" name="app_mob" class="form-control" required placeholder="0300-1234567" value="<?php if(empty($row['app_mob'])){echo "";}else{echo $row['app_mob'];}?>">
						</div>
						<div class="col-md-4 form-group">
							<label>Email Address *</label>
<input type="email" name="email" class="form-control" required value="<?php if(empty($row['email'])){echo $email;}else{echo $row['email'];}?>">
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 form-group">
							<label>Current Residential Address *</label>
							<input type="text" name="caddress" class="form-control" required value="<?php if(empty($row['caddress'])){echo "";}else{echo $row['caddress'];}?>">
						</div>
                    </div>
                    <div class="row">
						<div class="col-md-12 form-group">
							<label>Permanent Address *</label>
							<input type="text" name="paddress" class="form-control" required value="<?php if(empty($row['paddress'])){echo "";}else{echo $row['paddress'];}?>">
						</div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-4 form-group" >
							<label>Father Contact No. * <span style="font-size:12px; color:#666;">(Format:0300-1234567)</span></label>
							<input type="text" name="fathcontact" class="form-control" required placeholder="0300-1234567" value="<?php if(empty($row['fathcontact'])){echo "";}else{echo $row['fathcontact'];}?>">
						</div>
                        <div class="col-md-4 form-group" >
							<label>Mother Contact No. * <span style="font-size:12px; color:#666;">(Format:0300-1234567)</span></label>
							<input type="text" name="mothcontact" class="form-control" required placeholder="0300-1234567" value="<?php if(empty($row['mothcontact'])){echo "";}else{echo $row['mothcontact'];}?>">
						</div>
						<div class="col-md-4 form-group" >
							<label>Land Line if any <span style="font-size:12px; color:#666;">(Format:048-1234567)</span></label>
							<input type="text" name="landline" class="form-control" value="<?php if(empty($row['landline'])){echo "";}else{echo $row['landline'];}?>">
						</div>
					</div>   

<div class="row" style="border-top:1px solid #000; padding-top:15px; padding-bottom:5px;"></div>

					<div class="row">
                    <div class="col-md-12 form-group">
<label>Have you ever been admitted to any Medical College / Undergraduate programe previously? *</label>
							<div class="row form-group" >
								<div class="col-md-2">
									<label for="">Yes</label>
				<input type="radio" name="pr_admitted" value="Yes" class="form-control-radio" <?php if(empty($row['pr_admitted'])){echo "";}else{if($row['pr_admitted']=="Yes"){ echo "checked"; }}?>>
								</div>
								<div class="col-md-2">
									<label>No</label>
				<input type="radio" name="pr_admitted" value="No" class="form-control-radio" <?php if(empty($row['pr_admitted'])){echo "checked";}else{if($row['pr_admitted']=="No"){ echo "checked"; }}?>>
                				</div>
								</div>
				   </div>
                   </div>
                   
                   <div class="row" >
						<div class="col-md-6 form-group">
							<label>Hostel Accommodation:</label>
							<div class="row form-group">
								<div class="col-md-3">
									<label>Yes</label>
				<input type="radio" name="hostel" value="Yes" class="form-control-radio" <?php if(empty($row['hostel'])){echo "";}else{if($row['hostel']=="Yes"){ echo "checked"; }}?>>
								</div>
								<div class="col-md-3">
									<label>No</label>
				<input type="radio" name="hostel" value="No" class="form-control-radio" <?php if(empty($row['hostel'])){echo "checked";}else{if($row['hostel']=="No"){ echo "checked"; }}?>>
								</div>
							</div>
						</div>
					</div>
                        
</div>
                    
					<div class="container">
<div class="row" style="padding-top:15px; padding-bottom:15px;">
<div class="col-md-12">
<p style="font-size:17px;color:#F00;font-weight:bold;">Academic Record:</p> 
</div>
</div>
						<div class="row">
							<table class="table table-bordered" style="text-align:center;">
							<thead>
								<tr>
									<th width="20%" class="text-center">Examination</th>
									<th width="15%" class="text-center">Passing Year</th>
									<th width="20%" class="text-center">Institution's Name</th>
									<th width="10%" class="text-center">Roll no.</th>
									<th width="15%" class="text-center">Marks Obtained</th>
									<th width="10%" class="text-center">Total Marks</th>
									<th width="10%" class="text-center">Percentage %</th>
								</tr>
								
							</thead>
							<tbody>
								<tr>
<td><input type="text" name="matric" class="form-control" value="Matriculation/O Level" readonly style="text-align:center;"></td>
<td>
<select name="matric_year" id="matric_year" class="form-control" style="text-align:center;">
<option value="0" <?php if(empty($row['matric_year'])){echo "selected";}else{if($row['matric_year']==0){ echo "selected"; }}?>>Result Waiting</option>
<?php 
$year=date('Y');
for($a=$year; $a>=1947; $a--){ ?>
<option value="<?php echo $a; ?>" <?php if(empty($row['matric_year'])){echo "";}else{if($row['matric_year']==$a){ echo "selected"; }}?>><?php echo $a; ?></option>
<?php } ?>
</select>
</td>
<td><input type="text" name="matric_inst" id="matric_inst" class="form-control matric" style="text-align:center;" readonly value="<?php if(empty($row['matric_inst'])){echo "";}else{echo $row['matric_inst'];}?>"></td>
<td><input type="text" name="matric_roll" id="matric_roll" class="form-control matric" style="text-align:center;" readonly value="<?php if(empty($row['matric_roll'])){echo "";}else{echo $row['matric_roll'];}?>"></td>
<td><input type="text" name="matric_marks" id="matric_marks" class="form-control matric" style="text-align:center;" readonly value="<?php if(empty($row['matric_marks'])){echo "";}else{echo $row['matric_marks'];}?>"></td>
<td><input type="text" name="matric_tmarks" id="matric_tmarks" class="form-control matric" style="text-align:center;" readonly value="<?php if(empty($row['matric_tmarks'])){echo "";}else{echo $row['matric_tmarks'];}?>"></td>
<td><input type="text" name="matric_per" class="form-control" id="matric_per" readonly style="text-align:center;" value="<?php if(empty($row['matric_per'])){echo "";}else{echo $row['matric_per'];}?>"></td>
								</tr>
								<tr>
<td><input type="text" name="fsc" class="form-control" value="F.Sc/A Level" readonly style="text-align:center;"></td>
<td>
<select name="fsc_year" id="fsc_year" class="form-control" style="text-align:center;">
<option value="0" <?php if(empty($row['fsc_year'])){echo "selected";}else{if($row['fsc_year']==0){ echo "selected"; }}?>>Result Waiting</option>
<?php 
$year=date('Y');
for($a=$year; $a>=1947; $a--){ ?>
<option value="<?php echo $a; ?>" <?php if(empty($row['fsc_year'])){echo "";}else{if($row['fsc_year']==$a){ echo "selected"; }}?>><?php echo $a; ?></option>
<?php } ?>
</select>
</td>
<td><input type="text" name="fsc_inst" id="fsc_inst" class="form-control fsc" style="text-align:center;" readonly value="<?php if(empty($row['fsc_inst'])){echo "";}else{echo $row['fsc_inst'];}?>"></td>
<td><input type="text" name="fsc_roll" id="fsc_roll" class="form-control fsc" style="text-align:center;" readonly value="<?php if(empty($row['fsc_roll'])){echo "";}else{echo $row['fsc_roll'];}?>"></td>
<td><input type="text" name="fsc_marks" id="fsc_marks" class="form-control fsc" style="text-align:center;" readonly value="<?php if(empty($row['fsc_marks'])){echo "";}else{echo $row['fsc_marks'];}?>"></td>
<td><input type="text" name="fsc_tmarks" id="fsc_tmarks" class="form-control fsc" style="text-align:center;" readonly value="<?php if(empty($row['fsc_tmarks'])){echo "";}else{echo $row['fsc_tmarks'];}?>"></td>
<td><input type="text" name="fsc_per" class="form-control" id="fsc_per" readonly style="text-align:center;" value="<?php if(empty($row['fsc_per'])){echo "";}else{echo $row['fsc_per'];}?>"></td>
								</tr>
								<tr>
<td><input type="text" name="mcat" class="form-control" value="MCAT" readonly style="text-align:center;"></td>
<td>
<select name="mcat_year" id="mcat_year" class="form-control" style="text-align:center;">
<option value="0" <?php if(empty($row['mcat_year'])){echo "selected";}else{if($row['mcat_year']==0){ echo "selected"; }}?>>Result Waiting</option>
<?php 
$year=date('Y');
for($a=$year; $a>=1947; $a--){ ?>
<option value="<?php echo $a; ?>" <?php if(empty($row['mcat_year'])){echo "";}else{if($row['mcat_year']==$a){ echo "selected"; }}?>><?php echo $a; ?></option>
<?php } ?>
</select>
</td>
<td><input type="text" name="mcat_inst" id="mcat_inst" class="form-control mcat" style="text-align:center;" readonly value="<?php if(empty($row['mcat_inst'])){echo "";}else{echo $row['mcat_inst'];}?>"></td>
<td><input type="text" name="mcat_roll" id="mcat_roll" class="form-control mcat" style="text-align:center;" readonly value="<?php if(empty($row['mcat_roll'])){echo "";}else{echo $row['mcat_roll'];}?>"></td>
<td><input type="text" name="mcat_marks" id="mcat_marks" class="form-control mcat" style="text-align:center;" readonly value="<?php if(empty($row['mcat_marks'])){echo "";}else{echo $row['mcat_marks'];}?>"></td>
<td><input type="text" name="mcat_tmarks" id="mcat_tmarks" class="form-control mcat" style="text-align:center;" readonly value="<?php if(empty($row['mcat_tmarks'])){echo "";}else{echo $row['mcat_tmarks'];}?>"></td>
<td><input type="text" name="mcat_per" class="form-control" id="mcat_per" readonly style="text-align:center;" value="<?php if(empty($row['mcat_per'])){echo "";}else{echo $row['mcat_per'];}?>"></td>
								</tr>
							</tbody>
						</table>
						</div>                                                        
<button class="btn btn-primary" id="reg_submit" type="submit" name="savedata" style="width:200px;float:right;">SAVE DATA</button>

<?php 
$q=mysqli_query($con,"SELECT * FROM `students_data` WHERE `std_id`='$id'");
if($row=mysqli_fetch_array($q)){
if($row['matric_year']!=0 && $row['fsc_year']!=0 && $row['mcat_year']!=0){ ?>
<div class="col-md-12" style="margin-bottom:30px; margin-top:50px;">
<p style="text-align:right; font-size:11px; color:#F00; font-weight:bold;">(You cannot update your data after form Sumission)</p>
<button class="btn btn-success" id="reg_submit" type="submit" name="submit" style="width:200px; margin-bottom:50px; float:right;">SUBMIT APPLICATION</button>
</div>
<?php } } ?>
					</div> 
				</form>
<?php }?>
</div>

<?php
}else{
header("Location:logout.php");
}
?>
<script>
$(document).ready(function(e) {
    
	$('#applicant_status').change(function(e) {
        
		var apstatus=$('#applicant_status').val();
		if(apstatus=="Pakistani Student")
		{
		  $('#cnic').show();
		  $('#passport').hide();
		  $("#cnic").prop('required',true);
		  $("#passport").prop('required',false);
		}else{
		  $('#cnic').hide();
		  $('#passport').show();
		  $("#cnic").prop('required',false);
		  $("#passport").prop('required',true);
		}
		
    });
	
});
</script>
<script>
$(document).ready(function(e) {
    
	$('#matric_marks, #matric_tmarks').keyup(function(e) {
		var matric_marks=$('#matric_marks').val();
		var matric_tmarks=$('#matric_tmarks').val();
		var matric_per=matric_marks/matric_tmarks*100;
		$('#matric_per').val(matric_per);		
    });
	
	$('#fsc_marks, #fsc_tmarks').keyup(function(e) {
		var fsc_marks=$('#fsc_marks').val();
		var fsc_tmarks=$('#fsc_tmarks').val();
		var fsc_per=fsc_marks/fsc_tmarks*100;
		$('#fsc_per').val(fsc_per);	
		$('#fsc_marks').val(fsc_marks);		
    });
	
	$('#mcat_marks, #mcat_tmarks').keyup(function(e) {
		var mcat_marks=$('#mcat_marks').val();
		var mcat_tmarks=$('#mcat_tmarks').val();
		var mcat_per=mcat_marks/mcat_tmarks*100;
		$('#mcat_per').val(mcat_per);		
    });
	
});
</script>
<script>
$(document).ready(function(e) {
    
	$('#matric_year').change(function(e) {
        
		var myear=$('#matric_year').val();
		if(myear != 0){
		$('.matric').prop('readonly',false);
		$('.matric').prop('required',true);
		}else{
		$('.matric').prop('readonly',true);
		$('.matric').prop('required',false);
		}
    });
	
	$('#fsc_year').change(function(e) {
        
		var fyear=$('#fsc_year').val();
		if(fyear != 0){
		$('.fsc').prop('readonly',false);
		$('.fsc').prop('required',true);
		}else{
		$('.fsc').prop('readonly',true);
		$('.fsc').prop('required',false);
		}
    });
	
	$('#mcat_year').change(function(e) {
        
		var mcatyear=$('#mcat_year').val();
		if(mcatyear != 0){
		$('.mcat').prop('readonly',false);
		$('.mcat').prop('required',true);
		}else{
		$('.mcat').prop('readonly',true);
		$('.mcat').prop('required',false);
		}
    });
	
});
</script>

<script>
$(document).ready(function(e) {
    
        
		var myear=$('#matric_year').val();
		if(myear != 0){
		$('.matric').prop('readonly',false);
		$('.matric').prop('required',true);
		}else{
		$('.matric').prop('readonly',true);
		$('.matric').prop('required',false);
		}
	        
		var fyear=$('#fsc_year').val();
		if(fyear != 0){
		$('.fsc').prop('readonly',false);
		$('.fsc').prop('required',true);
		}else{
		$('.fsc').prop('readonly',true);
		$('.fsc').prop('required',false);
		}
	
		var mcatyear=$('#mcat_year').val();
		if(mcatyear != 0){
		$('.mcat').prop('readonly',false);
		$('.mcat').prop('required',true);
		}else{
		$('.mcat').prop('readonly',true);
		$('.mcat').prop('required',false);
		}
	
});
</script>

<script type="text/javascript">
	$(document).ready(function(){
		$("#instructionsModal").modal('show');
	});
</script>

</body>
</html>