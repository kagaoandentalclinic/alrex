<?php 
if(isset($_GET['id'])){
    $qry = $conn->query("SELECT a.*,c.name as pet_type from `appointment_list` a inner join category_list c on a.category_id = c.id where a.id = '{$_GET['id']}'");
    if($qry->num_rows > 0){
        $res = $qry->fetch_array();
        foreach($res as $k => $v){
            if(!is_numeric($k)){
                $$k = $v;
            }
        }
    }else{
    echo "<script>alert('Unknown Appointment Request ID'); location.replace('./?page=seasion');</script>";
    }
}
else{
    echo "<script>alert('Appointment Request ID is required'); location.replace('./?page=seasion');</script>";
}
$service = "";
$services = $conn->query("SELECT * FROM `service_list` where id in ({$service_ids}) order by `name` asc");
while($row = $services->fetch_assoc()){
    if(!empty($service)) $service .=", ";
    $service .=$row['name'];
}
$service = (empty($service)) ? "N/A" : $service;
?>
<style>
    @media screen {
        .show-print{
            display:none;
        }
    }
    img#appointment-banner{
		height: 45vh;
		width: 20vw;
		object-fit: scale-down;
		object-position: center center;
	}
    .table.border-info tr, .table.border-info th, .table.border-info td{
        border-color:var(--dark);
    }
</style><div class="content py-3">
    <div class="card card-outline card-dark rounded-3">
        <div class="card-header rounded-3">
            <h5 class="card-title text-primary">Appointment Request Details</h5>
        </div>
        <div class="card-body">
            <div class="container-fluid">
                <div id="outprint">
                    <fieldset>
                        <div class="row">
                            <div class="col-12">
                                <table class="table table-bordered border-info">
                                    <colgroup>
                                        <col width="30%">
                                        <col width="70%">
                                    </colgroup>
                                    <tr>
                                        <th class="text-muted text-white bg-gradient-dark px-2 py-1">Patient Identification Code</th>
                                        <td><?= ($clientid) ?></td>
                                    </tr>
                                      <tr>
                                        <th class="text-muted text-white bg-gradient-dark px-2 py-1">Appoint Code</th>
                                        <td><?= ($code) ?></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                                <div class="col-md-5">
                                    <fieldset>
                                        <legend class="text-muted border-bottom">Client Information</legend>
                                        <table class="table table-stripped table-bordered" data-placeholder='true' id="">
                                            <colgroup>
                                                <col width="30%">
                                                <col width="70%">
                                            </colgroup>
                                            <tbody>
                                                <tr class="border-info">
                                                    <th class="py-1 px-2 text-light bg-gradient-dark">Name</th>
                                                    <td class="py-1 px-2 text-right"><?= ucwords($requestor) ?></td>
                                                </tr>
                                                <tr class="border-info">
                                                    <th class="py-1 px-2 text-light bg-gradient-dark">License No.</th>
                                                    <td class="py-1 px-2 text-right"><?= ($license) ?></td>
                                                </tr>

                                                <tr class="border-info">
                                                    <th class="py-1 px-2 text-light bg-gradient-dark">Student Permit</th>
                                                    <td class="py-1 px-2 text-right"><?= ($stud_permit) ?></td>
                                                </tr>

         <tr class="border-info">
                                                    <th class="py-1 px-2 text-light bg-gradient-dark">Application Type</th>
                                                    <td class="py-1 px-2 text-right"><?= ($application) ?></td>
                                                </tr>
                                                    <tr class="border-info">
                                                    <th class="py-1 px-2 text-light bg-gradient-dark">DL Code</th>
                                                    <td class="py-1 px-2 text-right"><?= ($dl) ?></td>
                                                </tr>


         <tr class="border-info">
                                                    <th class="py-1 px-2 text-light bg-gradient-dark">MT</th>
                                                    <td class="py-1 px-2 text-right"><?= ($mt) ?></td>
                                                </tr>

              
         <tr class="border-info">
                                                    <th class="py-1 px-2 text-light bg-gradient-dark">AT</th>
                                                    <td class="py-1 px-2 text-right"><?= ($at) ?></td>
                                                </tr>






                                            </tbody>
                                        </table>
                                    </fieldset>
                                </div>
                                <div class="col-md-5">
                                    <fieldset>
                                        <legend class="text-muted border-bottom">Services</legend>
                                        <table class="table table-stripped table-bordered" data-placeholder='true'>
                                            <colgroup>
                                                <col width="30%">
                                             
                                            </colgroup>
                                            <tbody>
                                         
                                        
                                                <tr class="border-info">
                                        
                                                    <td class="py-1 px-2 text-left"><?= ($service) ?></td>
                                                </tr>



                                              




                                            </tbody>
                                        </table>
                                    </fieldset>
                                </div>



      <div class="col-sm-2">
           <div class="card-body bg-gradient-dark">
            <div class="container-fluid">
                                    <fieldset><i>
                  </i>
                                   
                                            <colgroup>
                                                <col width="30%">
                                                <col width="70%">
                                            </colgroup>
                                         <center>
                                            <hr>
                                            
                       
                                    <br>
                                </center>

                                    </fieldset>
                                </div>

 </div> </div>








                            </div>

 







                            <div class="row">
                                <div class="form-group col-md-4">
                                    <small class="text-muted px-2">Status</small><br>
                                    <?php 
                                    switch ($status){
                                        case 0:
                                            echo '<span class="ml-4 rounded-pill badge badge-primary">Pending</span>';
                                            break;
                                        case 1:
                                            echo '<span class="ml-4 rounded-pill badge badge-success">Confirmed</span>';
                                            break;
                                        case 2:
                                            echo '<span class="ml-4 rounded-pill badge badge-danger">Cancelled</span>';
                                            break;
                                                case 3:
                                            echo '<span class="ml-4 rounded-pill badge badge-success">Completed</span>';
                                            break;
                                    }
                                ?>
                                </div>
                            </div>





                    </fieldset>
                </div>
                
                <hr>
                <div class="rounded-0 text-center mt-6 bg-gradient-dark">
                    <br>


                        <a class="btn btn-md btn-success " href="javascript:void(0)" id="update_status"><i class="fa fa-edit"></i> Update Status</a>
                         <a class="btn btn-md btn-success " href="?page=user/manage_users&id=<?= ($clientid) ?>"><i class="fa fa-edit"></i>View Client Information</a>


                                          



                        <a class="btn btn-light border  btn-md" href="./?page=appointments_emergency" ><i class="fa fa-angle-left"></i> Back to List</a>
                        <hr>
             
<br>
<br>
                </div>
            </div>
        </div>
    </div>
</div>




<div class="row">
    <div class="col-md-12">
        <div class="card card-outline">
            <div class="card-header">
                <h3 class="card-title">Proof Of Payment Review</h3>
            </div>
            <div class="card-body">
                <div class="container-fluid">
                    <table class="table table-hover table-striped table-bordered">
                        <colgroup>
                            <col width="3%">
                            <col width="10%">
                           <col width="10%">
                            <col width="15%">
                            <col width="15%">
                           <col width="5%">
                        </colgroup>
                        <thead>
                            <tr>
                                <th class="xs">#</th>
                                <th class="xs">Date</th>
                                <th class="xs">Time</th>
                                <th class="xs">Proof</th>
                                <th class="xs">Status</th>
                                <th class="xs">View</th>
                                <th class="xs">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1;




                            $where = "WHERE code='$code' && userid='$clientid' ";
                            $qry = $conn->query("SELECT * FROM `transaction` $where ");
                            while ($row = $qry->fetch_assoc()):
                            ?>
                                <tr>
                                    <td class="text-center"><?php echo $i++; ?></td>
                                    <td class=""><?php echo date("M d, Y", strtotime($row['date_created'])) ?></td>
                                    <td class=""><?php echo date("h:i a", strtotime($row['date_created'])) ?></td>
                                    <td style="text-align: center;">
                                      <img src="../admin/client_appointment/<?php echo $row['img']?>" height="120" width="200" />
                                    </td>




<td class="">
  <?php 
                                    switch ($row['status']){
                                        case 0:
                                            echo '<span class="ml-4 rounded-pill badge badge-danger">VERIFIYING PAYMENT</span>';
                                            break;
                                        case 1:
                                            echo '<span class="ml-4 rounded-pill badge badge-success">VERFIED</span>';
                                            break;
                                 
                                    }
                                ?>


</td>








<td style="text-align: center;">
   <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#imageModal<?php echo $row['id']; ?>">
       View Image
   </button>
</td>
<td style="text-align: center;">
    <?php if($row['status'] == 0): ?>
        <?php if(isset($_SESSION['userdata']) && $_SESSION['userdata']['type'] == 1): ?>
            <button type="button" class="btn btn-success btn-sm verify-payment-btn" data-id="<?php echo $row['id']; ?>">
                <i class="fas fa-check"></i> Verify
            </button>
        <?php else: ?>
            <span class="badge badge-danger">VERIFYING PAYMENT</span>
        <?php endif; ?>
    <?php else: ?>
        <span class="badge badge-success">Verified</span>
    <?php endif; ?>
</td>
   <div class="modal fade" id="imageModal<?php echo $row['id']; ?>"  role="dialog" aria-labelledby="imageModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="imageModalLabel">Proof of Payment</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <img src="../admin/client_appointment/<?php echo $row['img']?>" height="100%" width="100%" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>





                                </tr>
                            <?php endwhile; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

























<script>
    $(function(){



   
     

   
             $('#healthcare').click(function(){
            uni_modal("healthcare","seasion/vaccination.php?id=<?= $id ?>&status=<?= $status ?>&clientid=<?= $clientid ?>&requestor=<?= $requestor ?>&code=<?= $code ?>")
        })







        $('#update_status').click(function(){
            uni_modal("Update Status","appointments/update_status.php?id=<?= $id ?>&status=<?= $status ?>&clientid=<?= $clientid ?>&code=<?= $code ?>")
        })

        $(document).on('click', '.verify-payment-btn', function(){
            var btn = $(this);
            var tid = btn.data('id');
            if(!confirm('Mark this payment as Verified?')) return;
            start_loader();
            $.ajax({
                url: _base_url_ + 'classes/Master.php?f=verify_payment',
                method: 'POST',
                data: { id: tid },
                dataType: 'json',
                success: function(resp){
                    end_loader();
                    if(resp.status == 'success'){
                        btn.closest('td').html('<span class="badge badge-success">Verified</span>');
                        btn.closest('tr').find('.badge-danger').removeClass('badge-danger').addClass('badge-success').text('VERIFIED');
                        alert_toast('Payment verified successfully.', 'success');
                    } else {
                        alert_toast('Failed to verify payment.', 'error');
                    }
                },
                error: function(){ end_loader(); alert_toast('An error occurred.', 'error'); }
            });
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
					location.replace('./?page=appointments');
				}else{
					alert_toast("An error occured.",'error');
					end_loader();
				}
			}
		})
	}
</script>