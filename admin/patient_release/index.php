




<div class="card card-dark">





<h3><br><center><img src="../uploads/logo1.jpg"  style="width:110px;height:110px;"><br>
<b>
HERITAGE CORDILLERA VETERINARY CLINIC<BR>PATIENT ADMITTED RECORD</BR>
</b>
</h3>
</center>

	<div class="card-header">
		<h3 class="card-title">List of Patient Admit</h3> 
	</div>
	<div class="card-body">
		<div class="container-fluid">
        <div class="container-fluid">
			<table class="table table-hover table-striped table-bordered">
				<colgroup>
					<col width="5%">
					<col width="25%">
					<col width="25%">
					<col width="20%">
					<col width="25%">
					<col width="20%">
		
				</colgroup>
				<thead>
					<tr>
						<th>#</th>

						<th>Date of Admission</th>
							<th>Date of Release</th>
						<th>Code</th>
						<th>Owner</th>
						<th>Patient Name</th>
		
					</tr>
				</thead>
				<tbody>
					<?php 
						$i = 1;
						$qry = $conn->query("SELECT * from `admit_list` where status=1  order by unix_timestamp(`delete_flags`) desc ");
						while($row = $qry->fetch_assoc()):
					?>
						<tr>
							<td class="text-center">00<?php echo $i++; ?></td>
							<td class=""><B><?php echo date("M d, Y h:i a",strtotime($row['date_created'])) ?></B></td>
							<td class=""><B><?php echo date("M d, Y h:i a",strtotime($row['delete_flags'])) ?></B></td>
							<td><?php echo ($row['code']) ?></td>
							<td class=""><p class="truncate-1"><?php echo ucwords($row['owner_name']) ?></p></td>
							<td class="text-center">
					<?php echo ($row['petname']) ?>
							</td>
					
						</tr>
					<?php endwhile; ?>
				</tbody>
			</table>
		</div>
		</div>
	</div>
</div>
 <button class="btn btn-dark btn-sm "  onclick="window.print()">Print</button>
<script>
	$(document).ready(function(){
		$('.delete_data').click(function(){
			_conf("Are you sure to delete this appointment permanently?","delete_appointment",[$(this).attr('data-id')])
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












