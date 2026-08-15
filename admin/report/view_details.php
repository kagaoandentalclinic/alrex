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
    echo "<script>alert('Unknown Appointment Request ID'); location.replace('./?page=appointments');</script>";
    }
}
else{
    echo "<script>alert('Appointment Request ID is required'); location.replace('./?page=appointments');</script>";
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
</style>
<div class="content py-3">
   
<div class="card card-dark">





<h3><br><center><img src="../uploads/thelogo.jpg"  style="width:110px;height:110px;"><br>
<b>
Medical and Dental Service Unit<BR>PATIENT MEDICAL RECORD</BR>

</h3>
</center>
        <div class="card-header rounded-0">
            <h5 class="card-title text-dark">Client and Client Information</h5>
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
                                                    <th class="py-1 px-2 text-light bg-gradient-dark">Medical</th>
                                                    <td class="py-1 px-2 text-right"><?= ($medical) ?></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </fieldset>
                                </div>
                                       <div class="col-md-5">
                                    <fieldset>
                                        <legend class="text-muted border-bottom">s</legend>
                                        <table class="table table-stripped table-bordered" data-placeholder='true'>
                                            <colgroup>
                                                <col width="30%">
                                                <col width="70%">
                                            </colgroup>
                                            <tbody>
                                            
                                                <tr class="border-info">
                                                    <th class="py-1 px-2 text-light bg-gradient-dark">Patient Type</th>
                                                    <td class="py-1 px-2 text-right"><?= ($pet_type) ?></td>
                                                </tr>
                                        
                                                <tr class="border-info">
                                                    <th class="py-1 px-2 text-light bg-gradient-dark">Service(s) Needed</th>
                                                    <td class="py-1 px-2 text-right"><?= ($service) ?></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </fieldset>
                                </div>






      <div class="col-sm-2 ">
           <div class="card-body bg-gradient-dark rounded-3">
            <div class="container-fluid ">
                                    <fieldset>
                                   
                                            <colgroup>
                                                <col width="30%">
                                                <col width="70%">
                                            </colgroup>
                                         <center>
                                         

                                                  
                       
                                    <br>
                                </center>

                                    </fieldset>
                                </div>

 </div> </div>






                            </div>
                            <div class="row">
                                <div class="form-group col-lg-4">
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
									}
								?>
                                </div>
                            </div>
                    </fieldset>
                </div>
                
                <hr>
                <div class="rounded-0 text-center mt-3">


 <?php if($_settings->userdata('type') == 2): ?>


                        <a class="btn btn-md btn-primary btn-flat" href="javascript:void(0)" id="update_status"><i class="fa fa-edit"></i>Set Appointment Date</a>
                 
                        <a class="btn btn-light border btn-flat btn-md" href="./?page=client" ><i class="fa fa-angle-left"></i> Back to List</a>

  <a class="btn btn-md btn-success " href="?page=user/manage_users&id=<?= ($clientid) ?>"><i class="fa fa-edit"></i>View Client Information</a>



              <button class="btn btn-dark btn-md "  onclick="window.print()">Print</button>
              
<?php endif; ?>



 <?php if($_settings->userdata('type') == 1): ?>

                        <a class="btn btn-md btn-primary btn-flat" href="javascript:void(0)" id="update_status"><i class="fa fa-edit"></i>Set Appointment Date</a>
         
                        <a class="btn btn-light border btn-flat btn-md" href="./?page=client" ><i class="fa fa-angle-left"></i> Back to List</a>
                         <a class="btn btn-md btn-warning " href="./?page=client/view_chart&id=<?= ($id) ?>&clientid=<?= ($clientid) ?>" id="microscopy"><b>Monitoring Chart</b></a>
                         <a class="btn btn-md btn-success " href="?page=user/manage_users&id=<?= ($clientid) ?>"><i class="fa fa-edit"></i>View Client Information</a>
                
<?php endif; ?>



                </div>
            </div>
        </div>
    </div>


</div>






 </div>
















<script>
    $(function(){
        $('#delete_data').click(function(){
			_conf("Are you sure to delete <b><?= $code ?>\'s</b> from appointment permanently?","delete_appointment",['<?= $id ?>'])
		})
        $('#update_status').click(function(){
            uni_modal("Update Status","client/update_status.php?id=<?= $id ?>&status=<?= $status ?>&clientid=<?= $clientid ?>&code=<?= $code ?>")
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
					location.replace('./?page=appointments');
				}else{
					alert_toast("An error occured.",'error');
					end_loader();
				}
			}
		})
	}
</script>