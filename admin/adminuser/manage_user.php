
<?php
if(isset($_GET['id']) && $_GET['id'] > 0){
    $uid = (int)$_GET['id'];
    $user = $conn->query("SELECT * FROM users where id = $uid");
    foreach($user->fetch_array() as $k => $v){
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
	.flex-container{ display: flex; }
</style>

<div class="card card-outline">
	<div class="card-body">
		<div class="container-fluid">

			<h4 class="text-center mb-3"><b>User Management</b></h4>
			<div id="msg"></div>

			<form action="" id="manage-user">
				<input type="hidden" name="id" value="<?php echo isset($meta['id']) ? $meta['id'] : '' ?>">

				<!-- Row 1: Name -->
				<div class="flex-container">
					<div class="form-group flex-fill mr-2">
						<label>First Name <span class="text-danger">*</span></label>
						<input type="text" name="firstname" class="form-control" value="<?php echo isset($meta['firstname']) ? htmlspecialchars($meta['firstname']) : '' ?>" required>
					</div>
					<div class="form-group flex-fill mr-2">
						<label>Middle Name</label>
						<input type="text" name="middlename" class="form-control" value="<?php echo isset($meta['middlename']) ? htmlspecialchars($meta['middlename']) : '' ?>">
					</div>
					<div class="form-group flex-fill">
						<label>Last Name <span class="text-danger">*</span></label>
						<input type="text" name="lastname" class="form-control" value="<?php echo isset($meta['lastname']) ? htmlspecialchars($meta['lastname']) : '' ?>" required>
					</div>
				</div>

				<!-- Row 2: DOB / Age / Sex / Civil -->
				<div class="flex-container">
					<div class="form-group mr-2">
						<label>Date of Birth</label>
						<input type="date" name="dob" class="form-control" value="<?php echo isset($meta['dob']) ? $meta['dob'] : '' ?>">
					</div>
					<div class="form-group mr-2" style="width:80px">
						<label>Age</label>
						<input type="number" name="age" class="form-control" value="<?php echo isset($meta['age']) ? $meta['age'] : '' ?>" readonly>
					</div>
					<div class="form-group mr-2">
						<label>Sex</label>
						<select name="sex" class="custom-select select2">
							<option value=""></option>
							<option value="Male"   <?php echo isset($meta['sex']) && $meta['sex']=='Male'    ? 'selected' : '' ?>>Male</option>
							<option value="Female" <?php echo isset($meta['sex']) && $meta['sex']=='Female'  ? 'selected' : '' ?>>Female</option>
						</select>
					</div>
					<div class="form-group">
						<label>Civil Status</label>
						<select name="civil" class="custom-select select2">
							<option value=""></option>
							<option value="Single"    <?php echo isset($meta['civil']) && $meta['civil']=='Single'    ? 'selected':'' ?>>Single</option>
							<option value="Married"   <?php echo isset($meta['civil']) && $meta['civil']=='Married'   ? 'selected':'' ?>>Married</option>
							<option value="Separated" <?php echo isset($meta['civil']) && $meta['civil']=='Separated' ? 'selected':'' ?>>Separated</option>
							<option value="Widowed"   <?php echo isset($meta['civil']) && $meta['civil']=='Widowed'   ? 'selected':'' ?>>Widowed</option>
						</select>
					</div>
				</div>

				<!-- Row 3: Contact / Address -->
				<div class="flex-container">
					<div class="form-group mr-2 flex-fill">
						<label>Contact Number</label>
						<input type="text" name="number" class="form-control" maxlength="11" pattern="[0-9]+" value="<?php echo isset($meta['number']) ? htmlspecialchars($meta['number']) : '' ?>">
					</div>
					<div class="form-group flex-fill">
						<label>Address</label>
						<input type="text" name="address" class="form-control" value="<?php echo isset($meta['address']) ? htmlspecialchars($meta['address']) : '' ?>">
					</div>
				</div>

				<!-- Row 3b: Province / City / Barangay / Zip -->
				<div class="flex-container">
					<div class="form-group mr-2 flex-fill">
						<label>Province</label>
						<input type="text" name="province" class="form-control" value="<?php echo isset($meta['province']) ? htmlspecialchars($meta['province']) : '' ?>">
					</div>
					<div class="form-group mr-2 flex-fill">
						<label>Municipality / City</label>
						<input type="text" name="city" class="form-control" value="<?php echo isset($meta['city']) ? htmlspecialchars($meta['city']) : '' ?>">
					</div>
					<div class="form-group mr-2 flex-fill">
						<label>Barangay</label>
						<input type="text" name="barangay" class="form-control" value="<?php echo isset($meta['barangay']) ? htmlspecialchars($meta['barangay']) : '' ?>">
					</div>
					<div class="form-group" style="width:100px">
						<label>Zip Code</label>
						<input type="text" name="zip" class="form-control" value="<?php echo isset($meta['zip']) ? htmlspecialchars($meta['zip']) : '' ?>">
					</div>
				</div>

				<!-- Row 4: Username / Password / Type -->
				<div class="flex-container">
					<div class="form-group mr-2 flex-fill">
						<label>Username / Email <span class="text-danger">*</span></label>
						<input type="text" name="username" class="form-control" autocomplete="off" value="<?php echo isset($meta['username']) ? htmlspecialchars($meta['username']) : '' ?>" required>
					</div>
					<div class="form-group mr-2 flex-fill">
						<label>Password</label>
						<input type="password" name="password" class="form-control" autocomplete="off" value="">
						<small class="text-muted"><i>Leave blank to keep existing password.</i></small>
					</div>
					<div class="form-group">
						<label>User Type <span class="text-danger">*</span></label>
						<select name="type" class="custom-select" required>
							<option value="1" <?php echo isset($meta['type']) && $meta['type']==1 ? 'selected':'' ?>>Admin</option>
							<option value="2" <?php echo isset($meta['type']) && $meta['type']==2 ? 'selected':'' ?>>Instructor</option>
							<option value="3" <?php echo isset($meta['type']) && $meta['type']==3 ? 'selected':'' ?>>Student (Old)</option>
							<option value="4" <?php echo isset($meta['type']) && $meta['type']==4 ? 'selected':'' ?>>Student (New)</option>
						</select>
					</div>
				</div>

			</form>
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

<script>
	$(function(){
		$('.select2').select2({ width:'resolve' });
		// Auto-calculate age from DOB
		$('[name=dob]').on('change', function(){
			var dob = new Date($(this).val());
			var today = new Date();
			var age = today.getFullYear() - dob.getFullYear();
			var m = today.getMonth() - dob.getMonth();
			if(m < 0 || (m === 0 && today.getDate() < dob.getDate())) age--;
			$('[name=age]').val(age);
		});
	});

	$('#manage-user').submit(function(e){
		e.preventDefault();
		start_loader();
		$.ajax({
			url: _base_url_ + 'classes/Users.php?f=save',
			data: new FormData($(this)[0]),
			cache: false,
			contentType: false,
			processData: false,
			method: 'POST',
			type: 'POST',
			success: function(resp){
				if(resp == 1){
					location.href = './?page=user/list';
				} else {
					$('#msg').html('<div class="alert alert-danger">Username already exists.</div>');
					$("html, body").animate({ scrollTop: 0 }, "fast");
				}
				end_loader();
			}
		});
	});
</script>
