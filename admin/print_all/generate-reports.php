<style type="text/css">
    .flex-container {
        display: flex;
    }
</style>






<div class="card">
    <h3><br><center><img src="../uploads/thelogo.jpg" style="width:110px;height:110px;"><br>
    <b>Medical Service Office<br>Generate Report For Appointment List</b></h3></center>
    <div class="card-header">
        <h3 class="card-title">List of Appointment Information</h3>
    </div>
    <div class="card-body">
        <div class="container-fluid">
            <div class="container-fluid">



  

 &nbsp; &nbsp;

     <form method="POST" enctype="multipart/form-data" name="datereports" action=" ?page=print_all/generate-reports">
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

    </div>




        <button type="submit" class="btn-primary" name="submit">Filter</button>

                        <hr>
                        </form>











                <table class="table table-hover table-striped table-bordered">
                	   <?php
                        $fdate=$_POST['fromdate'];
                        $tdate=$_POST['todate'];
                     
                   
                        ?>
                    <colgroup>
                        <col width="5%">
                        <col width="15%">
                        <col width="20%">
                        <col width="9%">
                        <col width="15%">
                        <col width="15%">
                        <col width="10%">
                        <col width="10%">
             
                    </colgroup>
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Schedule</th>
                            <th>Appointment Ref Number</th>
                            <th>Patient ID</th>
                            <th>Patient Name</th>
                            <th>User Type</th>
                            <th>Medical</th>
                            <th>Status</th>
                     
                        </tr>
                    </thead>
                    <tbody>




	<?php 
						$i = 1;
						$qry = $conn->query("SELECT * from `appointment_list` where  date(schedule) between '$fdate' and '$tdate' && delete_flag=0   AND status NOT IN (0, 1) order by (`requestor`) desc ");
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
										case 5:
											echo 'STUDENT';
											break;
										case 1:
											echo 'TEACHING';
											break;
										case 2:
											echo 'NON-TEACHING';
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

<center>


 <a href="print_All/print_report.php?fday=<?php echo $fdate;?>&lday=<?php echo $tdate;?>"><button type="button" class="btn btn-lg btn-warning"> <i class="fa fa-print"></i></button></center>

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
