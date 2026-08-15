
<div class="card">
	<div class="card-header">
		<h3 class="card-title">Student Remarks / Grade Records</h3>
	</div>
	<div class="card-body">
		<div class="container-fluid">
			<table class="table table-hover table-striped table-bordered">
				<colgroup>
					<col width="4%">
					<col width="12%">
					<col width="20%">
					<col width="15%">
					<col width="10%">
					<col width="10%">
					<col width="10%">
					<col width="10%">
					<col width="9%">
				</colgroup>
				<thead>
					<tr>
						<th>#</th>
						<th>Date</th>
						<th>Student Name</th>
						<th>Appointment Code</th>
						<th>Written Score</th>
						<th>Written Result</th>
						<th>Practical Result</th>
						<th>Overall Status</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php
						$i = 1;
						$qry = $conn->query("SELECT * FROM `student_remarks` ORDER BY date_created DESC");
						while($row = $qry->fetch_assoc()):
					?>
					<tr>
						<td class="text-center"><?php echo $i++; ?></td>
						<td><?php echo $row['date_created']; ?></td>
						<td><?php echo htmlspecialchars($row['Student_name']); ?></td>
						<td><?php echo htmlspecialchars($row['refnum']); ?></td>
						<td class="text-center"><?php echo $row['written_score']; ?></td>
						<td class="text-center"><?php echo htmlspecialchars($row['written_result']); ?></td>
						<td class="text-center"><?php echo htmlspecialchars($row['practical_result']); ?></td>
						<td class="text-center"><?php echo htmlspecialchars($row['overall_status']); ?></td>
						<td class="text-center">
							<button type="button" class="btn btn-sm btn-info edit_record" data-id="<?php echo $row['id'] ?>">
								<i class="fas fa-eye"></i> View
							</button>
						</td>
					</tr>
					<?php endwhile; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>

<script>
	$(document).ready(function(){
		$('.edit_record').click(function(){
			uni_modal("Student Remark Details", "adminhealthcare/manage_notif.php?id=" + $(this).attr('data-id'));
		});
		$('.table td,.table th').addClass('py-1 px-2 align-middle');
		$('.table').dataTable({
			columnDefs: [{ orderable: false, targets: 8 }]
		});
	});
</script>
