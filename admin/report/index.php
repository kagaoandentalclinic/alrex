
<style type="text/css">
    .flex-container {
        display: flex;
    }
</style>





<div class="card">

<h3><br><center><img src="../uploads/ALREXLOGO.png"  style="width:110px;height:110px;"><br>
<b>
ALREX DRIVING SCHOOL<BR>Generate Report For Appointment List</BR>

</h3></b>
</center>





    <div class="card-header">
        <h3 class="card-title">List of Appointment Information</h3>
    </div>
    <div class="card-body">
        <div class="container-fluid">
            <div class="container-fluid">
    <div class="flex-container">





 &nbsp; &nbsp;

     <form method="POST" enctype="multipart/form-data" name="datereports" action=" ?page=report/generate-reports">
    <div class="flex-container">
 <div class="form-group">
        <label for="">From</label>
        <input class="form-control" type="date" name="fromdate" id="fromdate" required="true">
    </div>






    &nbsp; &nbsp;





   <div class="form-group">
        <label for="">To</label>
        <input class="form-control" type="date" name="todate" id="todate" required="true">


    </div>

   &nbsp; &nbsp;


   <div class="form-group">
                 <label for="">Status</label>
                <select name="status" id="status" class="form-control " required>
                	  
            
                    <option value="2" <?= isset($status) && $status == 2 ? "selected" : "" ?>>Cancelled</option>
                       <option value="3" <?= isset($status) && $status == 3 ? "selected" : "" ?>>Completed</option>
                </select>
            </div>


 </div>



        <button type="submit" class="btn-primary" name="submit">Filter</button>

           <a href="<?php echo base_url ?>admin/?page=print_all" class="btn btn-primary">All</a>


                        <hr>
                        </form>









































</div>





























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
                            <th>User ID</th>
                            <th>Student Name</th>
                            <th>User Type</th>
                            <th>License #</th>
                            <th>Status</th>
                           
                        </tr>
                    </thead>
                    <tbody>




	<?php 
						$i = 1;
			$qry = $conn->query("SELECT * FROM `appointment_list` WHERE delete_flag = 0 AND status NOT IN (0, 1) ORDER BY `requestor` DESC");

						while($row = $qry->fetch_assoc()):
					?>
						<tr>
							<td class="text-center"><?php echo $i++; ?></td>
							<td class=""> <?php echo date("M d, Y",strtotime($row['schedule'])) ?></td>
	<td class=""><?php echo ($row['code']) ?></td>
		<td class=""><?php echo ($row['clientid']) ?></td>
							<td class=""><p class="truncate-1"><?php echo ucwords($row['requestor']) ?></p></td>
						

							



							<td class="text-center">
						<?php 
									switch ($row['category_id']){
										
										case 1:
											echo 'NEW';
											break;
										case 2:
											echo 'OLD';
											break;
											
									}
								?>
							</td>
							<td class=""><?php echo ($row['license']) ?></td>

								<td class="text-center">
								<?php 
									switch ($row['status']){
										case 0:
											echo 'Pending';
											break;
										case 1:
											echo 'Confirm';
											break;
											case 2:
											echo 'Cancelled';
											break;
										case 3:
											echo 'Completed';
											break;
												case 4:
											echo 'Not Appoint';
											break;
											
									}
								?>
							</td>
							
						</tr>
					<?php endwhile; ?>






















                        <!-- PHP code to fetch and display the appointment data -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function(){
        $('.table td, .table th').addClass('py-1 px-2 align-middle');
        $('.table').dataTable({
            columnDefs: [
                { orderable: false, targets: 5 }
            ]
        });
    });

    function applyFilters() {
        var dateTimeRange = $('#datetime-range').val();
        var appointmentType = $('#appointment-type').val();
        var appointmentStatus = $('#appointment-status').val();

        // Make an AJAX request to fetch filtered data based on the selected filters

        // Update the table with the filtered data
    }

    function deleteAppointment(appointmentId) {
        // Function to delete an appointment using AJAX
    }
</script>
