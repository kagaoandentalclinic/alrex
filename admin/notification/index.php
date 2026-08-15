

<div class="card ">



	<div class="card-header">
		<h3 class="card-title">Notification Logs</h3>
	</div>
	<div class="card-body">
		<div class="container-fluid">
        <div class="container-fluid">
			<table class="table table-hover table-striped table-bordered">
				<colgroup>
					<col width="5%">
				<col width="50%">
				<col width="5%">
				<col width="5%">
			</colgroup>
				<thead>
					<tr>
						<th>#</th>
						<th>Action</th>
				<th>Read</th>
					<th>Read Now</th>
					</tr>
				</thead>
				<tbody>
					<?php 
						$i = 1;
						$where = '';
	
						$where .= "  n.clientid = '".$_settings->userdata('id')."' AND n.status IN (1, 2, 3, 4)";
						$qry = $conn->query("SELECT n.*, a.instructor_id, a.schedule as appt_schedule, CONCAT(COALESCE(u.firstname,''),' ',COALESCE(u.lastname,'')) as instructor_fullname FROM `notification` n LEFT JOIN `appointment_list` a ON a.code = n.code LEFT JOIN `users` u ON u.id = a.instructor_id WHERE $where ORDER BY n.date_created DESC");
						while($row = $qry->fetch_assoc()):
					?>
						<tr>
							<td class="text-center"><?php echo $i++; ?></td>
							<td class="text-left">Good day sir/maam, Your Appointment Code: <?php echo ($row['code']) ?> update your status into <?php 
									switch ($row['status']){
										case 0:
											echo '<span class="rounded-pill badge badge-primary">Pending</span>';
											break;
										case 1:
											echo '<span class="rounded-pill badge badge-success">Candidate For Session</span>';
											break;
										case 2:
											echo '<span class="rounded-pill badge badge-danger">Cancelled</span>';
											break;
										case 3:
											echo '<span class="rounded-pill badge badge-success">Done Lesson</span>';
											break;
										case 4:
											echo '<span class="rounded-pill badge badge-primary">Instructor Assigned</span>';
											break;
									}
								?> in this date <?php echo !empty($row['appt_schedule']) ? date("M d, Y",strtotime($row['appt_schedule'])) : date("M d, Y",strtotime($row['date_created'])) ?>. Please see in your appointment list monitoring. Instructor Incharge : <?php
    $full = trim($row['instructor_fullname'] ?? '');
    echo !empty($full) ? htmlspecialchars(ucwords(strtolower($full))) : 'N/A';
?></td>
					
						
	<td class="text-center"><?php 
									switch ($row['read']){
										case 0:
											echo '<span class="rounded-pill badge badge-danger">Not yet Red</span>';
											break;
										case 1:
											echo '<span class="rounded-pill badge badge-success">Read</span>';
											break;
									
									}
								?></td>
							<td class="text-center">
							<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
		                      Action
		                    </button>

		                    <div class="dropdown-menu" style=""> <a class="dropdown-item edit_department" href="javascript:void(0)" data-id="<?php echo $row['id'] ?>">View</a>

		                    </div>
						</td>
						
						</tr>
					<?php endwhile; ?>
				</tbody>
			</table>
		</div>
		</div>
	</div>
</div>

<script>
	$(document).ready(function(){


		
	

	$('.edit_department').click(function(){
		uni_modal("View ","notification/manage_notif.php?id="+$(this).attr('data-id'),'mid-large')
	})
	






		$('.delete_data').click(function(){
			_conf("Are you sure to delete this appointment ?","delete_appointment",[$(this).attr('data-id')])
		})
		$('.table td,.table th').addClass('py-1 px-2 align-middle')
		$('.table').dataTable({
            columnDefs: [
                { orderable: false, targets: 5 }
            ],
        });
	})
	function delete_appointment($id){
		start_loader();
		$.ajax({
			url:_base_url_+"classes/Master.php?f=delete_appointment",
			method:"POST",
			data:{id: $id},
			dataType:"json",
			error:err=>{
				console.log(err)
				alert_toast("An error occured.",'error');
				end_loader();
			},
			success:function(resp){
				if(typeof resp== 'object' && resp.status == 'success'){
					location.reload();
				}else{
					alert_toast("An error occured.",'error');
					end_loader();
				}
			}
		})
	}
</script>