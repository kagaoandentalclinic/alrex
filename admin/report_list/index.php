
<style type="text/css">
    .flex-container {
        display: flex;
    }
</style>





<div class="card">


<h3><br><center><img src="../uploads/ALREXLOGO.png"  style="width:110px;height:110px;"><br>
<b>
ALREX DRIVING SCHOOL<BR>Generate Report For Student List</BR>

</h3></b>
</center>





    <div class="card-header">
        <h3 class="card-title">List of User Information</h3>
    </div>
    <div class="card-body">
        <div class="container-fluid">
            <div class="container-fluid">
    

       <form method="POST" enctype="multipart/form-data" name="datereports" action=" ?page=report_list/generate-reports">
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

        <button type="submit" class="btn-primary" name="submit">Generate Report</button>

                        <hr>
                        </form>






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
                        $qry = $conn->query("SELECT *,concat(firstname,' ',lastname) as name from `users` where type = '3' || type = '4' || type = '5' order by concat(firstname,' ',lastname) asc ");
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
