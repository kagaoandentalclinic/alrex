

<div class="card ">





<h3><br><center><img src="../uploads/thelogo.jpg"  style="width:110px;height:110px;"><br>
<b>
<BR>APPOINTMENT INFORMATION LIST</BR>

</h3></b>
</center>
	<div class="card-header">
		<h3 class="card-title">List of appointment Information</h3>
	</div>
	<div class="card-body">
		<div class="container-fluid">
        <div class="container-fluid">
			<table class="table table-hover table-striped table-bordered">
				<colgroup>
					<col width="5%">
					<col width="15%">
					<col width="20%">
					<col width="9%">
					<col width="15%">
					<col width="15%">
				
					<col width="10%">
					<col width="10%">
					<col width="10%">
			</colgroup>
				<thead>
					<tr>
						<th>#</th>
							<th>Schedule</th>
						<th>Appointment Ref Number</th>
						<th>Client ID</th>
						<th>Client Name</th>
					
						<th>User Type</th>
							<th>Medical</th>
									<th>Status</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php 
						$i = 1;
						$qry = $conn->query("SELECT * from `appointment_list` where delete_flag=0 order by (`requestor`) desc ");
						while($row = $qry->fetch_assoc()):
					?>
						<tr>
							<td class="text-center"><?php echo $i++; ?></td>
							<td class=""> <?php echo date("M d, Y",strtotime($row['date_created'])) ?></td>
	<td class=""><?php echo ($row['code']) ?></td>
		<td class=""><?php echo ($row['clientid']) ?></td>
							<td class=""><p class="truncate-1"><?php echo ucwords($row['requestor']) ?></p></td>
						

							



							<td class="text-center">
								<?php 
									switch ($row['category_id']){
										case 1:
											echo 'Faculty';
											break;
										case 2:
											echo 'Staff';
											break;
										case 5:
											echo 'Student';
											break;
											
									}
								?>
							</td>
							<td class=""><?php echo ($row['medical']) ?></td>

								<td class="text-center">
								<?php 
									switch ($row['status']){
										case 0:
											echo 'Pending';
											break;
										case 1:
											echo 'Confirm';
											break;
										case 3:
											echo 'Cancell';
											break;
												case 4:
											echo 'Not Appoint';
											break;
											
									}
								?>
							</td>
							<td align="center">
								 <button type="button" class="btn btn-flat btn-default btn-sm dropdown-toggle dropdown-icon" data-toggle="dropdown">
				                  		Action
				                    <span class="sr-only">Toggle Dropdown</span>
				                  </button>
				                  <div class="dropdown-menu" role="menu">

 <?php if($_settings->userdata('type') == 2): ?>


				                    <a class="dropdown-item" href="./?page=client/view_details&id=<?php echo $row['id'] ?>" data-id=""><span class="fa fa-window-restore text-gray"></span> View</a>


									<div class="dropdown-divider"></div>



				                  


         <?php endif; ?>


          <?php if($_settings->userdata('type') == 6): ?>


				                    <a class="dropdown-item" href="./?page=client/view_details&id=<?php echo $row['id'] ?>" data-id=""><span class="fa fa-window-restore text-gray"></span> View</a>


									<div class="dropdown-divider"></div>



				                    <a class="dropdown-item delete_data" href="javascript:void(0)" data-id="<?php echo $row['id'] ?>"><span class="fa fa-trash text-danger"></span> Delete</a>


         <?php endif; ?>




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