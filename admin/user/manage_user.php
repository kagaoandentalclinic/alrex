
<?php 
if(isset($_GET['id']) && $_GET['id'] > 0){
    $user = $conn->query("SELECT * FROM users where id ='{$_GET['id']}'");
    foreach($user->fetch_array() as $k =>$v){
        $meta[$k] = $v;
    }
}
?>
<?php if($_settings->chk_flashdata('success')): ?>
<script>
	alert_toast("<?php echo $_settings->flashdata('success') ?>",'success')
</script>
<?php endif;?>





<style type="text/css">
	.flex-container{
		display: flex;
	}


</style>




<script type="text/javascript">

function calculateAge() {
  // Get the date of birth value from the input field
  var dob = document.getElementById("dob").value;

  // Create a new Date object for the date of birth
  var birthDate = new Date(dob);

  // Create a new Date object for the current date
  var currentDate = new Date();

  // Calculate the age in milliseconds
  var ageInMilliseconds = currentDate - birthDate;

  // Convert the age to years
  var ageInYears = ageInMilliseconds / (1000 * 60 * 60 * 24 * 365.25);

  // Round the age to the nearest whole number
  var age = Math.floor(ageInYears);

  // Set the age value to the age input field
  document.getElementById("age").value = age;
}



</script>






<div class="card card-outline ">

	<div class="card-body"><h1>Add Instructor</h1><hr>
		<div class="container-fluid">
			<div id="msg"></div>
			<form action="" id="manage-user">	
				<input type="hidden" name="id" value="<?php echo $_settings->userdata('id') ?>">

<div class="flex-container">
				<div class="form-group">
					<label for="name">First Name</label>
					<input type="text" name="firstname" id="firstname" class="form-control" value="<?php echo isset($meta['firstname']) ? $meta['firstname']: '' ?>" >
				</div>
				&nbsp;&nbsp;

	<div class="form-group">
					<label for="name">Middle Name</label>
					<input type="text" name="middlename" id="middlename" class="form-control" value="<?php echo isset($meta['middlename']) ? $meta['middlename']: '' ?>" >
				</div>

					&nbsp;&nbsp;
	
				<div class="form-group">
					<label for="name">Last Name</label>
					<input type="text" name="lastname" id="lastname" class="form-control" value="<?php echo isset($meta['lastname']) ? $meta['lastname']: '' ?>" >
				</div>
	&nbsp;&nbsp;

		<div class="form-group">
					<label for="name">Name Extension</label>
					<input type="text" name="extension" id="extension" class="form-control" value="<?php echo isset($meta['extension']) ? $meta['extension']: '' ?>" >
				</div>
</div>

<div class="flex-container">

		<div class="form-group">
					<label for="dob">Date of Birth: <?php echo isset($meta['dob']) ? $meta['dob']: '' ?></label>

<input type="date" id="dob" name="dob" class="form-control" onchange="calculateAge()">
	</div>




	&nbsp;&nbsp;

	<div class="form-group">
					<label for="age">Age: <?php echo isset($meta['age']) ? $meta['age']: '' ?></label>
<input type="text" id="age" name="age" class="form-control" readonly>


</div>
	&nbsp;&nbsp;




</div>
<div class="flex-container">


	<div class="form-group" style="width: 70%;">
					<label for="name">Address</label>
					<input type="text" name="address" id="address" class="form-control" value="<?php echo isset($meta['address']) ? $meta['address']: '' ?>" >
				</div>
	&nbsp;&nbsp;
	
<div class="form-group" style="width: 30%;">
					<label for="name">Zip Code</label>
					<input type="Number" name="zip" id="zip" class="form-control" value="<?php echo isset($meta['zip']) ? $meta['zip']: '' ?>" >
				</div>


</div>






<div class="flex-container">



<div class="form-group">
					<label for="number">Contact Number</label>
					<input type="text" name="number" id="number" class="form-control" placeholder="Enter Here.." maxlength="11" pattern="[0-9]+" value="<?php echo isset($meta['number']) ? $meta['number']: '' ?>" required>
				</div>






	&nbsp;&nbsp;


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
					<label for="name"> Student Permit Number</label>
					<input type="text" name="studentpermit" id="studentpermit" class="form-control" value="<?php echo isset($meta['studentpermit']) ? $meta['studentpermit']: '' ?>" >
				</div>
	&nbsp;&nbsp;
			<div class="form-group">
					<label for="name">License Number</label>
					<input type="text" name="license" id="license" class="form-control" value="<?php echo isset($meta['license']) ? $meta['license']: '' ?>" >
				</div>


				</div>










<div class="flex-container">

				<div class="form-group" style="width: 40%;">
					<label for="username">Username/Email</label>
					<input type="text" name="username" id="username" class="form-control" value="<?php echo isset($meta['username']) ? $meta['username']: '' ?>"   autocomplete="off">
				</div>&nbsp;&nbsp;
				<div class="form-group">
					<label for="password">Password</label>
					<input type="password" name="password" id="password" placeholder="add value to change password" class="form-control" value="" autocomplete="off">
					<small><i>Leave this blank if you dont want to change the password.</i></small>
				</div>




<div class="form-group">
							<label for="type" class="control-label">Type : <i><?php echo isset($meta['type']) ? $meta['type']: '' ?></i></label>
							<select name="type" id="type" class="custom-select custom-select-md select2">
								<option value="<?php echo isset($meta['type']) ? $meta['type']: '' ?>"></option>
								
								<option value="2">Instructor</option>
					<option value="3">Old</option>
					<option value="4">New</option>
							</select>
						</div>










		
			</form>
		</div>
	</div>

</div>





















	<div class="card-footer">
			<div class="col-md-12">
				<div class="row">
					<button class="btn btn-sm btn-primary mr-2" form="manage-user">Save</button>
					<a class="btn btn-sm btn-secondary" href="./?page=user/list">Cancel</a>
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
	$(function(){
		$('.select2').select2({
			width:'resolve'
		})
	})
	
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
					location.href = './?page=user/list';
				}else{
					$('#msg').html('<div class="alert alert-danger">"Oops, something went wrong. We couldnt process your request."</div>')
					$("html, body").animate({ scrollTop: 0 }, "fast");
				}
                end_loader()
			}
		})
	})

</script>