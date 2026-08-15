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

   















































<div class="card card-dark ">
   <div class="card-body">
<h3><br><center><img src="../uploads/logo1.jpg"  style="width:110px;height:110px;"><br>
<b>
HERITAGE CORDILLERA VETERINARY CLINIC<BR>PHYSICAL EXAMINATION RECORD</BR>
  <?php echo $code ?>
</b></h3>
</center>
<br>


<p style="text-align:right;">Date: <?php  echo date("Y/m/d");?></p><br>

<br>


<table style="width:100%">
   
   <th><b>CLIENT INFORMATION</b></th>

  <tr>
    <td>Name: &nbsp;<b><?= ucwords($owner_name) ?>&nbsp;<?= ucwords($owner_namem) ?>.&nbsp;<?= ucwords($owner_namel) ?></b></td>
    <td></td>

    <td>Contact Number: <b><?= ($contact) ?></b></td>
  </tr>
  <tr>
    <td>Address: <b>Brgy.&nbsp;<?= ($address) ?>,&nbsp;<?= ($address1) ?>,&nbsp;<?= ($address2) ?></b></td>
   
  </tr>
  </table>
  <hr>
  <table style="width:100%">

 
   <th><b>CLIENT INFORMATION</b></th>
   <tr>

    <td>Patient Name: &nbsp;<b><?= ($petname) ?></b></td>  
    <td>Species: <b><?= ($pet_type) ?></b></td> 
    <td>Breed: <b><?= ($breed) ?></b></td>
        <td></td>
  </tr>
   <tr>
     <td>Age: <b><?= ($age) ?></b></td>
      <td>Date of Birth: <b>   <?php 
                                    switch ($month){
                                        case 1:
                                            echo 'January';
                                            break;
                                        case 2:
                                            echo 'February';
                                            break;
                                        case 3:
                                            echo 'March';
                                            break;
                                            case 4:
                                            echo 'April';
                                            break;
                                            case 5:
                                            echo 'May';
                                            break;
                                            case 6:
                                            echo 'June';
                                            break;
                                            case 7:
                                            echo 'July';
                                            break;
                                            case 8:
                                            echo 'August';
                                            break;
                                            case 9:
                                            echo 'September';
                                            break;
                                            case 10:
                                            echo 'October';
                                            break;
                                            case 11:
                                            echo 'November';
                                            break;
                                            case 12:
                                            echo 'December';
                                            break;
                                    }
                                ?>   <?= ($day) ?>, <?= ($year) ?></b></td>
           <td>sex: <b><?= ($sex) ?></b></td>
  </tr>
</table>


<hr>

<div class="row">
    <div class="col-md-12">
        <div class="card card-outline">
            <div class="card-header">
                <h3 class="card-title">Physical Examination</h3>
            </div>
            <div class="card-body">
                <div class="container-fluid">
                    <table class="table table-hover table-striped table-bordered">
                        <colgroup>
                            <col width="3%">
                            <col width="10%">
                            <col width="10%">
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
                           <th class="xs">Diet</th>
                            <th class="xs">Clinical</th> 
                           <th class="xs">Chef</th>
                                <th class="xs">Image</th> 
                                   <th class="xs">View</th><!-- Add the image column -->
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1;
                            $qry = $conn->query("SELECT * FROM `history` WHERE code='$code'");
                            while ($row = $qry->fetch_assoc()):
                            ?>
                                <tr>
                                    <td class="text-center"><?php echo $i++; ?></td>
                                    <td class=""><?php echo date("M d, Y", strtotime($row['date_created'])) ?></td>
                                    <td class=""><?php echo date("h:i a", strtotime($row['date_created'])) ?></td>
                                     <td style="text-align: center;"><?php echo  $row['diet'] ?></td>
         <td style="text-align: center;"><?php echo  $row['clinical'] ?></td>
         <td style="text-align: center;"><?php echo  $row['chef'] ?></td>
                                    <td style="text-align: center;">
                                      <img src="../admin/seasion/<?php echo $row['img']?>" height="120" width="200" />
                                    </td>


<td style="text-align: center;">


   <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#imageModal<?php echo $row['id']; ?>">
                                                    View Image
                                                </button>


</td>
   <div class="modal fade" id="imageModal<?php echo $row['id']; ?>"  role="dialog" aria-labelledby="imageModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="imageModalLabel">Image</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <img src="../admin/seasion/<?php echo $row['img']?>" height="100%" width="100%" />
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


 <div class="form-group">
                        <label for="sex" class="control-label">Note:</label>
                        <input type="text" class="form-control form-control-border" placeholder="......" >
                    </div>
</div><center>
<button class="btn btn-dark btn-xxs "  onclick="window.print()">Print</button>
<a class="btn btn-dark btn-xxs " href="./?page=client/view_details&id=<?= $id ?>" data-id=""><span class="fa fa-window-restore text-gray"></span> Back</a>

</center><br>
</div>


<br><br><br><center>
<b><u>SINCERELY MAE DANGATAN PINAY-AN, DVM</u></b><br>
Veterinarian

</center>
</div>



<script>
    $(function(){
        $('#delete_data').click(function(){
			_conf("Are you sure to delete <b><?= $code ?>\'s</b> from appointment permanently?","delete_appointment",['<?= $id ?>'])
		})
        $('#update_status').click(function(){
            uni_modal("Update Status","client/update_status.php?id=<?= $id ?>&status=<?= $status ?>")
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