<!-- <?php 
$user = $conn->query("SELECT * FROM users where id ='".$_settings->userdata('id')."'");
foreach($user->fetch_array() as $k =>$v){
	$meta[$k] = $v;
}
?>
<?php if($_settings->chk_flashdata('success')): ?>
<script>
	alert_toast("<?php echo $_settings->flashdata('success') ?>",'success')
</script>
<?php endif;?> -->

<style type="text/css">
	.flex-container{
		display: flex;
	}


</style>


<div class="card card-outline ">

	<div class="card-body"><h1>Complete your Information</h1><hr>
		<div class="container-fluid">
			<div id="msg"></div>
			<form action="" id="manage-user">	
				<input type="hidden" name="id" value="<?php echo $_settings->userdata('id') ?>">

<div class="flex-container">
				<div class="form-group">
					<label for="name">First Name</label>
					<input type="text" name="firstname" id="firstname" class="form-control" value="<?php echo isset($meta['firstname']) ? $meta['firstname']: '' ?>" required>
				</div>
				&nbsp;&nbsp;
	
				<div class="form-group">
					<label for="name">Last Name</label>
					<input type="text" name="lastname" id="lastname" class="form-control" value="<?php echo isset($meta['lastname']) ? $meta['lastname']: '' ?>" required>
				</div>
	&nbsp;&nbsp;
	<div class="form-group">
					<label for="age">Age</label>
					<input type="text" name="age" id="age" class="form-control" maxlength="2" pattern="[0-9]+"  value="<?php echo isset($meta['age']) ? $meta['age']: '' ?>" required>
				</div>
	&nbsp;&nbsp;
			<div class="form-group">
					<label for="dob">Date of Birth</label>
					<input type="date" name="dob" id="dob" class="form-control" value="<?php echo isset($meta['dob']) ? $meta['dob']: '' ?>" required>
				</div>

</div>
		<div class="form-group ">
					<label for="type">Address</label>
            <table>
                <tr>
                    <td>Region</td>
                    <td><select id="region"  name="region" class="form-control"></select></td>
                </tr>
                <tr>
                    <td>Province</td>
                    <td><select id="province" name="province" class="form-control"></select></td>
                </tr>
                <tr>
                    <td>City</td>
                    <td><select id="city" name="city" class="form-control"></select></td>
                </tr>
                <tr>
                    <td>Barangay</td>
                    <td><select id="barangay"  name="barangay"class="form-control"></select></td>
                </tr>
            </table>







        </div>

















<div class="flex-container">


<div class="form-group">
							<label for="civil" class="control-label">Civil Status: <i><?php echo isset($meta['civil']) ? $meta['civil']: '' ?></i></label>
							<select name="civil" id="civil" class="custom-select custom-select-md select2" >
								<option value="<?php echo isset($meta['civil']) ? $meta['civil']: '' ?>"></option>
								
								<option value="Single">Single</option>
						<option value="Married">Married</option>
						<option value="Seperated">Seperated</option>
						<option value="Divorced">Divorced</option>
						<option value="Widowed">Widowed</option>
							</select>
						</div>

	&nbsp;&nbsp;

	<div class="form-group">
							<label for="sex" class="control-label">Sex : <i><?php echo isset($meta['sex']) ? $meta['sex']: '' ?></i></label>
							<select name="sex" id="sex" class="custom-select custom-select-md select2">
								<option value="<?php echo isset($meta['sex']) ? $meta['sex']: '' ?>"></option>
								
								<option value="Male">Male</option>
						<option value="Female">Female</option>
							</select>
						</div>
	</div>



<div class="flex-container">


	<div class="form-group">
					<label for="father">Father Name</label>
					<input type="text" name="father" id="father" class="form-control" value="<?php echo isset($meta['father']) ? $meta['father']: '' ?>" required>
				</div>


	&nbsp;&nbsp;



<div class="form-group">
					<label for="course">Course/Year</label>
					<input type="text" name="course" id="course" class="form-control"  value="<?php echo isset($meta['course']) ? $meta['course']: '' ?>" required>
				</div>


	&nbsp;&nbsp;
	
	<div class="form-group">
							<label for="empstatus" class="control-label">Employment Status : <i><?php echo isset($meta['empstatus']) ? $meta['empstatus']: '' ?></i></label>
							<select name="empstatus" id="empstatus" class="custom-select custom-select-md select2">
								<option value="<?php echo isset($meta['empstatus']) ? $meta['empstatus']: '' ?>"></option>
								<option value="">	Not Applicable</option>
								<option value="Active">Active</option>
						<option value="Inactive">Inactive</option>
							</select>
						</div>


	</div>

<div class="flex-container">
	<div class="form-group">
					<label for="mother">Mother Name</label>
					<input type="text" name="mother" id="mother" class="form-control" value="<?php echo isset($meta['mother']) ? $meta['mother']: '' ?>" required>
				</div>
	&nbsp;&nbsp;

	<div class="form-group">
							<label for="college" class="control-label">College: <i><?php echo isset($meta['college']) ? $meta['college']: '' ?></i></label>
							<select name="college" id="college" class="custom-select custom-select-md select2">
								<option value="<?php echo isset($meta['college']) ? $meta['college']: '' ?>"></option>
									<option value="">	Not Applicable</option>
								<option value="	College of Public Administration 	">	College of Public Administration 	</option>
<option value="	College of Health Sciences	">	College of Health Sciences	</option>
<option value="	College of Engineering (OIC)	">	College of Engineering (OIC)	</option>
<option value="	College of Technology 	">	College of Technology 	</option>
<option value="	College of Architecture	">	College of Architecture	</option>
<option value="	College of Fine Arts and Design	">	College of Fine Arts and Design	</option>
<option value="	College of Communication and Information Technology	">	College of Communication and Information Technology	</option>
<option value="	College of Nursing	">	College of Nursing	</option>
<option value="	College of Arts & Sciences	">	College of Arts & Sciences	</option>
<option value="	College of Criminal Justice Education	">	College of Criminal Justice Education	</option>
<option value="	College of Hospitality & Tourism Management	">	College of Hospitality & Tourism Management	</option>
<option value="	College of Social Work	">	College of Social Work	</option>

							</select>
						</div>

	
	</div>
		




	<div class="form-group">
							<label for="department" class="control-label">Dept/Office: <i><?php echo isset($meta['department']) ? $meta['department']: '' ?></i></label>
							<select name="department" id="department" class="custom-select custom-select-md  select2" >
								<option value="<?php echo isset($meta['department']) ? $meta['department']: '' ?>"></option>
<option value="">	Not Applicable</option>
								<option value="	(NSOS) Network System & Operation Services	">	(NSOS) Network System & Operation Services	</option>
<option value="	(UCMS) University Computer Maintenance Services	">	(UCMS) University Computer Maintenance Services	</option>
<option value="	(ISMDS) Information System Management & Development Services	">	(ISMDS) Information System Management & Development Services	</option>
<option value="	(ITQMS) IT Quality Management Services	">	(ITQMS) IT Quality Management Services	</option>
<option value="	Accounting Office	">	Accounting Office	</option>
<option value="	Budget Office 	">	Budget Office 	</option>
<option value="	Cashiers Office	">	Cashiers Office	</option>
<option value="	Human Resource Management Office	">	Human Resource Management Office	</option>
<option value="	Campus Security Services Office	">	Campus Security Services Office	</option>
<option value="	Property & Supply Management Office (OIC)	">	Property & Supply Management Office (OIC)	</option>
<option value="	Transport & Motorpool Services Office	">	Transport & Motorpool Services Office	</option>
<option value="	Transport Motorpool Services Office	">	Transport Motorpool Services Office	</option>
<option value="	Physical Plant Maintenance Office	">	Physical Plant Maintenance Office	</option>
<option value="	College of Public Administration 	">	College of Public Administration 	</option>
<option value="	College of Health Sciences	">	College of Health Sciences	</option>
<option value="	College of Engineering (OIC)	">	College of Engineering (OIC)	</option>
<option value="	College of Technology 	">	College of Technology 	</option>
<option value="	College of Architecture	">	College of Architecture	</option>
<option value="	College of Fine Arts and Design	">	College of Fine Arts and Design	</option>
<option value="	College of Communication and Information Technology	">	College of Communication and Information Technology	</option>
<option value="	College of Nursing	">	College of Nursing	</option>
<option value="	College of Arts & Sciences	">	College of Arts & Sciences	</option>
<option value="	College of Criminal Justice Education	">	College of Criminal Justice Education	</option>
<option value="	College of Hospitality & Tourism Management	">	College of Hospitality & Tourism Management	</option>
<option value="	College of Social Work	">	College of Social Work	</option>
<option value="	Open University (OIC)	">	Open University (OIC)	</option>
<option value="	Laboratory Schools	">	Laboratory Schools	</option>
<option value="	University Planning & Information Management Office (OIC)	">	University Planning & Information Management Office (OIC)	</option>
<option value="	PASUC Zonal Faculty Evaluation & Computerization Center	">	PASUC Zonal Faculty Evaluation & Computerization Center	</option>
<option value="	Center for Gender & Development	">	Center for Gender & Development	</option>
<option value="	Quality Assurance Office	">	Quality Assurance Office	</option>
<option value="	Infrastructure Project Management & Development Office	">	Infrastructure Project Management & Development Office	</option>
<option value="	Public Information Office (OIC)	">	Public Information Office (OIC)	</option>
<option value="	Public and International Affairs Office	">	Public and International Affairs Office	</option>
<option value="	Environmental Management Office	">	Environmental Management Office	</option>
<option value="	University Hospital 	">	University Hospital 	</option>
<option value="	Records Office (OIC)	">	Records Office (OIC)	</option>
<option value="	University Legal Office	">	University Legal Office	</option>
<option value="	Internal Control Office 	">	Internal Control Office 	</option>
<option value="	Instruction and Faculty Development Office	">	Instruction and Faculty Development Office	</option>
<option value="	National Service Training Program (OIC)	">	National Service Training Program (OIC)	</option>
<option value="	Office of Student Affairs and Services	">	Office of Student Affairs and Services	</option>
<option value="	Registrar's Office	">	Registrar's Office	</option>
<option value="	Library Services Office	">	Library Services Office	</option>
<option value="	Laboratory Services Office	">	Laboratory Services Office	</option>
<option value="	Information Technology Infrastructure Management & Development Services Office	">	Information Technology Infrastructure Management & Development Services Office	</option>
<option value="	Financial Services	">	Financial Services	</option>
<option value="	Administrative Services	">	Administrative Services	</option>
<option value="	Production & Auxiliary Services	">	Production & Auxiliary Services	</option>
<option value="	Accounting Office	">	Accounting Office	</option>
<option value="	Budget Office 	">	Budget Office 	</option>
<option value="	Cashier's Office	">	Cashier's Office	</option>
<option value="	Human Resource Management Office	">	Human Resource Management Office	</option>
<option value="	Campus Security Services Office	">	Campus Security Services Office	</option>
<option value="	Property & Supply Management Office (OIC)	">	Property & Supply Management Office (OIC)	</option>
<option value="	Transport & Motorpool Services Office	">	Transport & Motorpool Services Office	</option>
<option value="	Physical Plant Maintenance Office	">	Physical Plant Maintenance Office	</option>
<option value="	Medical Service Office	">	Medical Service Office	</option>
<option value="	Utility Services Office	">	Utility Services Office	</option>
<option value="	Facilities Management Services Office	">	Facilities Management Services Office	</option>
<option value="	Enterprise Management and Development Office	">	Enterprise Management and Development Office	</option>
<option value="	University Research and Development Office	">	University Research and Development Office	</option>
<option value="	University Extension Office	">	University Extension Office	</option>
<option value="	University Ethics Committee	">	University Ethics Committee	</option>
<option value="	Institutional Animal Care & Use Committee	">	Institutional Animal Care & Use Committee	</option>
<option value="	Extension Publication	">	Extension Publication	</option>
<option value="	Community & Social Services	">	Community & Social Services	</option>
<option value="	Food Processing	">	Food Processing	</option>
<option value="	Research Dissemination and Advocacy	">	Research Dissemination and Advocacy	</option>
<option value="	Livelihood & Training Services	">	Livelihood & Training Services	</option>
<option value="	Health & Allied Services	">	Health & Allied Services	</option>
<option value="	Disaster Risk Reduction Management	">	Disaster Risk Reduction Management	</option>
<option value="	Publication and Research Dissemination	">	Publication and Research Dissemination	</option>

						
							</select>
						</div>



<div class="flex-container">



<div class="form-group">
					<label for="number">Contact Number</label>
					<input type="text" name="number" id="number" class="form-control" placeholder="Enter Here.." maxlength="11" pattern="[0-9]+" value="<?php echo isset($meta['number']) ? $meta['number']: '' ?>" required>
				</div>
	&nbsp;&nbsp;
	<div class="form-group">
					<label for="idnumber">ID No.</label>
					<input type="text" name="idnumber" id="idnumber" class="form-control" maxlength="12" pattern="[0-9]+"  value="<?php echo isset($meta['idnumber']) ? $meta['idnumber']: '' ?>" required>
				</div>

</div>
		








<div class="flex-container">

				<div class="form-group">
					<label for="username">Username</label>
					<input type="text" name="username" id="username" class="form-control" value="<?php echo isset($meta['username']) ? $meta['username']: '' ?>" required  autocomplete="off">
				</div>&nbsp;&nbsp;
				<div class="form-group">
					<label for="password">Password</label>
					<input type="password" name="password" id="password" class="form-control" value="" autocomplete="off">
					<small><i>Leave this blank if you dont want to change the password.</i></small>
				</div>
		
			</form>
		</div>
	</div>

</div>









	<div class="card-footer">
			<div class="col-md-12">
				<div class="row">

			
					<button class="btn btn-sm btn-primary" form="manage-user">Update</button>
				</div>
			</div>
		</div>
</div>
<style>
	img#cimg{
		height: 15vh;
		width: 15vh;
		object-fit: cover;
		border-radius: 100% 100%;
	}
</style>
<script>
	function displayImg(input,_this) {
	    if (input.files && input.files[0]) {
	        var reader = new FileReader();
	        reader.onload = function (e) {
	        	$('#cimg').attr('src', e.target.result);
	        }

	        reader.readAsDataURL(input.files[0]);
	    }
	}
	$('#manage-user').submit(function(e){
		e.preventDefault();
var _this = $(this)
		start_loader()
		$.ajax({
			url:_base_url_+'classes/Users.php?f=save',
			data: new FormData($(this)[0]),
		    cache: false,
		    contentType: false,
		    processData: false,
		    method: 'POST',
		    type: 'POST',
			success:function(resp){
				if(resp ==1){
					location.reload()
				}else{
					$('#msg').html('<div class="alert alert-danger">Username already exist</div>')
					end_loader()
				}
			}
		})
	})

</script>





 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.js"></script>
        <!-- <script type="text/javascript" src="../../jquery.ph-locations.js"></script> -->
        <script type="text/javascript" src="https://f001.backblazeb2.com/file/buonzz-assets/jquery.ph-locations.js"></script>
        <script type="text/javascript">
            
            var my_handlers = {

                fill_provinces:  function(){

                    var region_code = $(this).val();
                    $('#province').ph_locations('fetch_list', [{"region_code": region_code}]);
                    
                },

                fill_cities: function(){

                    var province_code = $(this).val();
                    $('#city').ph_locations( 'fetch_list', [{"province_code": province_code}]);
                },


                fill_barangays: function(){

                    var city_code = $(this).val();
                    $('#barangay').ph_locations('fetch_list', [{"city_code": city_code}]);
                }
            };

            $(function(){
                $('#region').on('change', my_handlers.fill_provinces);
                $('#province').on('change', my_handlers.fill_cities);
                $('#city').on('change', my_handlers.fill_barangays);

                $('#region').ph_locations({'location_type': 'regions'});
                $('#province').ph_locations({'location_type': 'provinces'});
                $('#city').ph_locations({'location_type': 'cities'});
                $('#barangay').ph_locations({'location_type': 'barangays'});

                $('#region').ph_locations('fetch_list');
            });
        </script>
