<?php session_start();
include_once "links.php";
include_once "config.php";
$db=new Db();

date_default_timezone_set("Asia/Karachi");
if(!isset($_SESSION['student'])){header("Location:logout.php");}
$id=$_SESSION['student'];
$name=$db->getValue("SELECT `name` FROM `students_data` WHERE `std_id`='$id'");
?>
<div class="container-fluid" style="padding:0;">

<div style="padding:0; text-align:center;">
<a href="home.php" style="text-decoration:none;">
<h1 style="background-color:#1f74ab; color:#FFF; padding:15px;margin:0;">NIAZI MEDICAL & DENTAL COLLEGE SARGODHA</h1></a>

<?php if(!empty($name)){?>
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
<?php }else{ ?>   

<a href="logout.php">
<button class="btn btn-info" style="margin-top:10px; margin-bottom:20px; float:right; margin-right:40px;">LOGOUT</button>
</a>

<div class="clearfix"></div>

<button class="btn btn-danger" style="margin-top:20px; letter-spacing:3px; word-spacing:10px; margin-bottom:20px;">PRELIMINARY REGISTRATION FORM</button>
</div>

<form action="register.php" method="POST" id="my-reg-form" class="form-group">
<input type="hidden" name="date" value="<?php echo date("F j, Y, g:i a"); ?>" readonly>
<input type="hidden" name="dates" value="<?php echo date("Y-m-d"); ?>" readonly>
					<div class="container">
					
					<div class="row" >
						<div class="col-md-6 form-group" >
							<label>Name of Candidate *</label>
<input type="text" name="name" id="name" class="form-control" autofocus style="text-transform:uppercase;" required>
<!--<input type="text" class="form-textbox" maxlength="15" size="25" onBlur="addDashes(this)"/>
-->
						</div>
						<div class="col-md-6 form-group">
							<label>Father's Name *</label>
<input type="text" name="fname" id="fname" class="form-control" style="text-transform:uppercase;" required/>
						</div>
					</div>
                    <div class="row" >
						<div class="col-md-6 form-group">
							<label>Gender *</label>
							<div class="row form-group" >
								<div class="col-md-3">
									<label for="">Male</label>
				<input type="radio" name="gender" value="Male" class="form-control-radio" checked>
								</div>
								<div class="col-md-3">
									<label>Female</label>
				<input type="radio" name="gender" value="Female" class="form-control-radio">
								</div>
							</div>
						</div>
						<div class="col-md-6 form-group">
							<label>Marital Status *</label>
							<div class="row form-group" >
								<div class="col-md-3">
									<label for="">Single</label>
				<input type="radio" name="mstatus" value="Single" class="form-control-radio" checked>
								</div>
								<div class="col-md-3">
									<label>Married</label>
				<input type="radio" name="mstatus" value="Married" class="form-control-radio">
                				</div>
								</div>
						</div>
					</div>
					<div class="row">
						 <div class='col-md-6 form-group' >					  
					            <div class="form-group">
					                	<label>Date of birth *</label>
					                <div class='input-group date' >
					          <input id="time" type='text' name="dob" class="form-control" required/>
					                    <span class="input-group-addon">
					                        <span class="glyphicon glyphicon-calendar"></span>
					                    </span>
					                </div>
					            </div>
					    </div>
                        <div class="col-md-6 form-group" >
							<label>Domicile *</label>
							<input type="text" name="domicile" class="form-control" required>
						</div>
					</div>
					<div class="row" >
						<div class="col-md-6 form-group" >
<label>Nationality * <span style="font-size:12px; color:#666;">(According to Passport)</span></label>
							<input type="text"  name="pbirth" class="form-control" required>
						</div>
						<div class="col-md-6 form-group" >
							<label>Status of Applicant *</label>
							<select name="applicant_status" id="applicant_status" class="form-control">
								<option>Pakistani Student</option>
								<option>Overseas Pakistani Student</option>
								<option>Foreign Student</option>
							</select>
						</div>
					</div>
					<div class="row" >
						<div class="col-md-4 form-group" id="cnic">
<label>CNIC * <span style="font-size:12px; color:#666;">(Format:38201-9552057-9)</span></label>
							<input type="text" name="cnic" class="validate_cnic form-control" required placeholder="38201-9552057-9">
						</div>
                        <div class="col-md-4 form-group" id="passport" style="display:none;">
							<label>Passport No. *</label>
							<input type="text" name="passport" class="form-control">
						</div>
						<div class="col-md-4 form-group">
<label>Applicant's Mobile No. * <span style="font-size:12px; color:#666;">(Format:0300-1234567)</span></label>
<input type="text" name="app_mob" class="form-control" required placeholder="0300-1234567">
						</div>
						<div class="col-md-4 form-group">
							<label>Email Address *</label>
							<input type="email" name="email" class="form-control" required>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 form-group">
							<label>Current Residential Address *</label>
							<input type="text" name="caddress" class="form-control" required>
						</div>
                    </div>
                    <div class="row">
						<div class="col-md-12 form-group">
							<label>Permanent Address *</label>
							<input type="text" name="paddress" class="form-control" required>
						</div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-4 form-group" >
							<label>Father Contact No. * <span style="font-size:12px; color:#666;">(Format:0300-1234567)</span></label>
							<input type="text" name="fathcontact" class="form-control" required placeholder="0300-1234567">
						</div>
                        <div class="col-md-4 form-group" >
							<label>Mother Contact No. * <span style="font-size:12px; color:#666;">(Format:0300-1234567)</span></label>
							<input type="text" name="mothcontact" class="form-control" required placeholder="0300-1234567">
						</div>
						<div class="col-md-4 form-group" >
							<label>Land Line if any</label>
							<input type="text" name="landline" class="form-control">
						</div>
					</div>   

<div class="row" style="border-top:1px solid #000; padding-top:15px; padding-bottom:5px;"></div>

					<div class="row">
                    <div class="col-md-12 form-group">
<label>Have you ever been admitted to any Medical College / Undergraduate programe previously? *</label>
							<div class="row form-group" >
								<div class="col-md-2">
									<label for="">Yes</label>
				<input type="radio" name="pr_admitted" value="Yes" class="form-control-radio">
								</div>
								<div class="col-md-2">
									<label>No</label>
				<input type="radio" name="pr_admitted" value="No" class="form-control-radio" checked>
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
				<input type="radio" name="hostel" value="Yes" class="form-control-radio">
								</div>
								<div class="col-md-3">
									<label>No</label>
				<input type="radio" name="hostel" value="No" class="form-control-radio" checked>
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
									<th width="15%" class="text-center">Examination</th>
									<th width="15%" class="text-center">Year of Passing</th>
									<th width="25%" class="text-center">Institution's Name</th>
									<th width="10%" class="text-center">Roll no.</th>
									<th width="15%" class="text-center" colspan="3">Marks Obtained</th>
									<th width="10%" class="text-center">Total Marks</th>
									<th width="10%" class="text-center">Percentage %</th>
								</tr>
								
							</thead>
							<tbody>
								<tr>
<td><input type="text" name="matric" class="form-control" value="Matriculation/O Level" readonly style="text-align:center;"></td>
<td><input type="text" name="matric_year" class="form-control" style="text-align:center;" required></td>
<td><input type="text" name="matric_inst" class="form-control" style="text-align:center;" required></td>
<td><input type="text" name="matric_roll" class="form-control" style="text-align:center;" required></td>
<td colspan="3"><input type="text" name="matric_marks" class="form-control" id="matric_marks" style="text-align:center;" required></td>
<td><input type="text" name="matric_tmarks" class="form-control" id="matric_tmarks" style="text-align:center;" required></td>
<td><input type="text" name="matric_per" class="form-control" id="matric_per" readonly style="text-align:center;"></td>
								</tr>
								<tr>
<td><input type="text" name="fsc" class="form-control" value="F.Sc/A Level" readonly style="text-align:center;"></td>
<td><input type="text" name="fsc_year" class="form-control" style="text-align:center;" required></td>
<td><input type="text" name="fsc_inst" class="form-control" style="text-align:center;" required></td>
<td><input type="text" name="fsc_roll" class="form-control" style="text-align:center;" required></td>
<td><input type="text" name="fsc_marks_bio" class="form-control" id="fsc_marks_bio" style="text-align:center; width:70px;" required placeholder="Bio"></td>
<td><input type="text" name="fsc_marks_chem" class="form-control" id="fsc_marks_chem" style="text-align:center; width:70px;" required placeholder="Chem"></td>
<td><input type="text" name="fsc_marks_phy" class="form-control" id="fsc_marks_phy" style="text-align:center; width:70px;" required placeholder="Phy"></td>
<td>
<input type="hidden" name="fsc_marks" class="form-control" id="fsc_marks">
<input type="text" name="fsc_tmarks" class="form-control" id="fsc_tmarks" style="text-align:center;" value="600" readonly>
</td>
<td><input type="text" name="fsc_per" class="form-control" id="fsc_per" readonly style="text-align:center;"></td>
								</tr>
								<tr>
<td><input type="text" name="mcat" class="form-control" value="MCAT" readonly style="text-align:center;"></td>
<td><input type="text" name="mcat_year" class="form-control" style="text-align:center;" required></td>
<td><input type="text" name="mcat_inst" class="form-control" style="text-align:center;" required></td>
<td><input type="text" name="mcat_roll" class="form-control" style="text-align:center;" required></td>
<td colspan="3"><input type="text" name="mcat_marks" class="form-control" id="mcat_marks" style="text-align:center;" required></td>
<td><input type="text" name="mcat_tmarks" class="form-control" id="mcat_tmarks" style="text-align:center;" required></td>
<td><input type="text" name="mcat_per" class="form-control" id="mcat_per" readonly style="text-align:center;"></td>
								</tr>
							</tbody>
						</table>
						</div>                                                        
<button class="btn btn-success" id="reg_submit" type="submit" name="submit" style="width:200px; margin-bottom:50px; float:right;">SUBMIT APPLICATION</button>
					</div> 
				</form>
<?php }?>
</div>

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
	
	$('#fsc_marks_bio, #fsc_marks_chem, #fsc_marks_phy').keyup(function(e) {
		var fsc_marks_bio=$('#fsc_marks_bio').val();
		var fsc_marks_chem=$('#fsc_marks_chem').val();
		var fsc_marks_phy=$('#fsc_marks_phy').val();
		var fsc_marks=+fsc_marks_bio + +fsc_marks_chem + +fsc_marks_phy;
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
<!--<script>
function addDashes(f)
{
    f_val = f.value.replace(/\D[^\.]/g, "");
    f.value = f_val.slice(0,4)+"-"+f_val.slice(4,15);
}
</script>
-->
</body>
</html>