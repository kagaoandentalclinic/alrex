<?php 
$user = $conn->query("SELECT * FROM users where id ='{$_GET['id']}'");
foreach($user->fetch_array() as $k =>$v){
	$meta[$k] = $v;
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


<div class="card card-outline ">

<div class="card-body">
<div class="text-right mb-2 no-print">
    <button class="btn btn-primary btn-sm" onclick="window.print()"><i class="fa fa-print"></i> Print / Save as PDF</button>
</div>

<h3><br><center><img src="../uploads/ALREXLOGO.png"  style="width:110px;height:110px;"><br>
<b>
ALREX DRIVING SCHOOL<BR>SAN ILDEFONSO BRANCH <BR>RESULT RECORD</BR>

</b></h3>
</center>
<br>


<p style="text-align:right;">Date: <?php  echo date("Y/m/d");?></p><br>

<br>


<table style="width:100%">
   
   <th><b>USER INFORMATION</b></th>

  <tr>
    <td>Name: &nbsp;<b><?php echo isset($meta['firstname']) ? $meta['firstname']: '' ?>&nbsp;<?php echo isset($meta['lastname']) ? $meta['lastname']: '' ?></b></td>
    <td></td>

    <td>Contact Number: <b><?php echo isset($meta['number']) ? $meta['number']: '' ?></b></td>
  </tr>
  <tr>
    <td>Email: <b><?php echo isset($meta['username']) ? $meta['username']: '' ?></b></td>
    <td></td>
   <td>Date of Birth: <b><?php echo isset($meta['dob']) ? $meta['dob']: '' ?></b></td>
  </tr>

  <tr>
    <td>License Number: <b><?php echo isset($meta['license']) ? $meta['license']: '' ?></b></td>
    <td>Type: <b>
        <?php switch ($meta['type']){

   
    case '	3		 ':echo '	Old	';break;
    case '	4		 ':echo '	New';break;
    case '	2		 ':echo '	Instructor';break;
        }
    ?>
    
</b></td>
   <td>Student Permit: <b><?php echo isset($meta['studentpermit']) ? $meta['studentpermit']: '' ?></b></td>
  </tr>

  <tr>
    <td>Adderess:<b><?php echo isset($meta['address']) ? $meta['address']: '' ?></b> </td>
    <td></td>
  
  </tr>

  </table>
  <hr>
  <table style="width:100%">

 

   <tr>

    <td>Age: &nbsp;<b><?php echo isset($meta['age']) ? $meta['age']: '' ?></b></td>  
    <td>Sex:&nbsp; <b><?php echo isset($meta['sex']) ? $meta['sex']: '' ?></b></td> 
    <td>Civil Status:&nbsp; <b><?php echo isset($meta['civil']) ? $meta['civil']: '' ?></b></td>
        <td></td>
  </tr>
   <tr>
     <td>Date Joined: <b><?php echo isset($meta['date_added']) ? $meta['date_added']: '' ?></b></td>
      <td> <b></b></td>
           <td><b></b></td>
  </tr>
</table>



<br>
<h2>Remarks History</h2>






<table class="table table-hover table-striped table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th>#</th>
                        <th>Session Date</th>
                        <th>Date Added</th>
                        <th>Remarks</th>
                        <th>Written Score</th>
                        <th>Written Result</th>
                        <th>Practical Result</th>
                        <th>Overall Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $i = 1;
                        $qry = $conn->query("SELECT * FROM `student_remarks` WHERE userid='{$_GET['id']}' ORDER BY unix_timestamp(`date_created`) DESC");
                        while($row = $qry->fetch_assoc()):
                            $overall = strtoupper($row['overall_status'] ?? '');
                    ?>
                        <tr>
                            <td class="text-center"><?php echo $i++; ?></td>
                            <td><?php echo $row['session_date'] ? date("M d, Y", strtotime($row['session_date'])) : '—'; ?></td>
                            <td><?php echo date("M d, Y h:i a", strtotime($row['date_created'])); ?></td>
                            <td><?php echo !empty($row['remarks']) ? htmlspecialchars($row['remarks']) : '—'; ?></td>
                            <td class="text-center"><?php echo $row['written_score'] ?? '—'; ?></td>
                            <td class="text-center"><?php echo !empty($row['written_result']) ? $row['written_result'] : '—'; ?></td>
                            <td class="text-center"><?php echo !empty($row['practical_result']) ? $row['practical_result'] : '—'; ?></td>
                            <td class="text-center"><?php echo !empty($overall) ? $overall : '—'; ?></td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>





</div>
<center>
<br><br><br><br><br><br><br><br>_____________________________________<br>
Administration
</center>
		





<style>
    @media print {
        .no-print, .main-sidebar, .main-header, .content-header, .breadcrumb { display: none !important; }
        .content-wrapper { margin-left: 0 !important; padding: 0 !important; }
        .card { border: none !important; box-shadow: none !important; }
    }
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
        <!-- script type="text/javascript" src="../../jquery.ph-locations.js"></script -->
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
