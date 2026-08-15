<?php require_once('../../config.php'); ?>

    <?php require_once('../inc/header.php') ?>




  <?php
                        $fAdate=$_GET['fday'];
                        $tAdate=$_GET['lday'];
                            
                        ?>







<div class="card">
    <h3><br><center><img src="../../uploads/thelogo.jpg" style="width:110px;height:110px;"><br>
    <b>Medical Service Office<br>University of Northern Philippines</b><br>Appointment Information</h3></center><br>

    <div class="card-header">
        <h3 class="card-title">  <b> <?php echo $fAdate?> </b> to <b> <?php echo $tAdate?> </b></h3>
    </div>
    <div class="card-body">
        <div class="container-fluid">
            <div class="container-fluid">
              
 <div style="float:RIGHT;">
        <p class="value">Date: <u><?php echo date("M d, Y"); ?></u></p>
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
						$qry = $conn->query("SELECT * from `appointment_list` where  date(schedule) between '$fAdate' and '$tAdate' && delete_flag=0  AND status NOT IN (0, 1) order by (`requestor`) desc ");
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



<?php
$i = 1;
$qry = $conn->query("SELECT * FROM `appointment_list` WHERE date(schedule) BETWEEN '$fAdate' AND '$tAdate' AND delete_flag = 0  AND status NOT IN (0, 1)  ORDER BY `requestor` DESC");
$count = $qry->num_rows;

?>
<?php
$i = 1;
$qry = $conn->query("SELECT * FROM `appointment_list` WHERE date(schedule) BETWEEN '$fAdate' AND '$tAdate' AND delete_flag = 0   AND status NOT IN (0, 1)  AND category_id=1 ORDER BY `requestor` DESC");
$faculty = $qry->num_rows;

?>
<?php
$i = 1;
$qry = $conn->query("SELECT * FROM `appointment_list` WHERE date(schedule) BETWEEN '$fAdate' AND '$tAdate' AND delete_flag = 0  AND status NOT IN (0, 1)  AND category_id=2 ORDER BY `requestor` DESC");
$staff = $qry->num_rows;

?>
<?php
$i = 1;
$qry = $conn->query("SELECT * FROM `appointment_list` WHERE date(schedule) BETWEEN '$fAdate' AND '$tAdate' AND delete_flag = 0    AND status NOT IN (0, 1)   AND category_id=5 ORDER BY `requestor` DESC");
$student = $qry->num_rows;

?>

<table>


  <tr>
    <td>Result</td>
    <td></td>
  </tr>

  <tr>
    <td>Teaching:</td>
    <td><b><?php echo $faculty; ?></b></td>
  </tr>
  <tr>
    <td>Non Teaching:</td>
    <td><b><?php echo $staff; ?></b></td>
  </tr>
  <tr>
    <td>Student:</td>
    <td><b><?php echo $student; ?></b></td>
  </tr>
    <tr>
    <td>---------</td>
    <td>---------</td>
  </tr>
    <tr>
    <td>Total:</td>
    <td><b><?php echo $count; ?></b></td>
  </tr>
</table>






<center>


 <br> <br> <br> <br> <br> <br> <br>
 <u><B>Dr. Daune Alden F. Oandasan</B> </u><br>
 HEAD, MEDICAL SERVICES OFFICE




</center>

 

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

  
</script>
