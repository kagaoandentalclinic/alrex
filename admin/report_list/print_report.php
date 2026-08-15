<?php require_once('../../config.php'); ?>

    <?php require_once('../inc/header.php') ?>




  <?php
                        $fAdate=$_GET['fday'];
                        $tAdate=$_GET['lday'];
                        ?>







<div class="card">
  <h3><br><center><img src="../../uploads/ALREXLOGO.png"  style="width:110px;height:110px;"><br>
<b>
ALREX DRIVING SCHOOL<BR>Generate Report For Appointment List</BR>Student Information<br>

</h3></b>
</center>



   

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
                  
                 <!-- <colgroup>
                    <col width="5%">
                    <col width="10%">
                    <col width="20%">
                    <col width="20%">
                    <col width="15%">
                    <col width="15%">
                    <col width="10%">
                </colgroup> -->
                    <thead>
                        <tr>
                      <th>#</th>
                        
                        <th>Name</th>
                        <th>Age</th>
                        <th>Civil Status</th>
                        <th>Sex</th>
                          <th>License</th>
                  
                        <th>Student Permit</th>
                        <th>Type</th>
                    </tr>
                    </thead>
                    <tbody>
<?php 
                        $i = 1;
                       $qry = $conn->query("SELECT *, CONCAT(firstname, ' ', lastname) AS name FROM `users` WHERE type IN ('3', '4', '5') AND DATE(date_added) BETWEEN '$fAdate' AND '$tAdate' ORDER BY CONCAT(firstname, ' ', lastname) ASC");

                        while($row = $qry->fetch_assoc()):
                    ?>
                        <tr>
                            <td class="text-center"><?php echo $i++; ?></td>
                            
                            <td><?php echo ucwords($row['name']) ?></td>
                                <td ><p class="m-0 truncate-1"><?php echo $row['age'] ?></p></td>
                                    <td ><p class="m-0 truncate-1"><?php echo $row['civil'] ?></p></td>
                            <td ><p class="m-0 truncate-1"><?php echo $row['sex'] ?></p></td>
                             <td ><p class="m-0 truncate-1"><?php echo $row['license'] ?></p></td>
                              <td ><p class="m-0 truncate-1"><?php echo $row['studentpermit'] ?></p></td>
                            <td ><p class="m-0">
        

        <?php 
                                    switch ($row['type']){
                                        case 3:
                                            echo 'OLD';
                                            break;
                                        case 4:
                                            echo 'NEW';
                                            break;
                                       
                                    }
                                ?>
</p></td>
                         
                        </tr>
                    <?php endwhile; ?>
















                        <!-- PHP code to fetch and display the appointment data -->
                    </tbody>
                </table>
<?PHP

$qry = $conn->query("SELECT *, CONCAT(firstname, ' ', lastname) AS name FROM `users` WHERE type IN ('3', '4', '5') AND DATE(date_added) BETWEEN '$fAdate' AND '$tAdate' ORDER BY CONCAT(firstname, ' ', lastname) ASC");
$count = $qry->num_rows;
?>



<?PHP

$qry = $conn->query("SELECT *, CONCAT(firstname, ' ', lastname) AS name FROM `users` WHERE type IN ('3', '4', '5') AND type=3  AND DATE(date_added) BETWEEN '$fAdate' AND '$tAdate' ORDER BY CONCAT(firstname, ' ', lastname) ASC");
$nonteaching = $qry->num_rows;
?> 
<?PHP

$qry = $conn->query("SELECT *, CONCAT(firstname, ' ', lastname) AS name FROM `users` WHERE type IN ('3', '4', '5') AND type=4  AND DATE(date_added) BETWEEN '$fAdate' AND '$tAdate' ORDER BY CONCAT(firstname, ' ', lastname) ASC");
$teaching = $qry->num_rows;
?> 
<?PHP

$qry = $conn->query("SELECT *, CONCAT(firstname, ' ', lastname) AS name FROM `users` WHERE type IN ('3', '4', '5') AND type=5  AND DATE(date_added) BETWEEN '$fAdate' AND '$tAdate' ORDER BY CONCAT(firstname, ' ', lastname) ASC");
$student = $qry->num_rows;
?> 

<table>
  <tr>
    <td>OLD:</td>
    <td><b><?php echo $nonteaching; ?></b></td>
  </tr>
  <tr>
    <td>NEW:</td>
    <td><b><?php echo $teaching; ?></b></td>
  </tr>

   <tr>
    <td>---------</td>
    <td>---------</td>
  </tr>
  <tr>
    <td><b>TOTAL:</b></td>
    <td><b><?php echo $count; ?></b></td>
  </tr>
</table>












<center>


 <br> <br> <br> <br> <br> <br> <br>
 <u>___________________________ </u><br>
Administration




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
