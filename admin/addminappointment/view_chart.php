

<?php 
if(isset($_GET['id'])){
    $qry = $conn->query("SELECT a.*,c.name as pet_type from `appointment_list` a inner join category_list c on a.category_id = c.id where a.clientid = '{$_GET['clientid']}'");
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









 $number= "";
 $empstatus= "";
 $mother= "";
 $college= "";
 $dob= "";
 $sex= "";
 $father= "";
 $course= "";
 $idnumber= "";
 $age= "";
 $civil= "";





$usercol = "";
$users = $conn->query("SELECT * FROM `users` where id in ({$_GET['clientid']}) ");
while($row = $users->fetch_assoc()){
       $college .=$row['college'];
    $usercol .=$row['department'];
     $number .=$row['number'];
    $civil .=$row['civil'];
 $empstatus .=$row['empstatus'];
 $mother .=$row['mother'];
  $dob .=$row['dob'];
   $sex .=$row['sex'];
    $father .=$row['father'];
     $course .=$row['course'];
      $idnumber .=$row['idnumber'];
       $age .=$row['age'];
}
$usercol = (empty($usercol)) ? "N/A" : $usercol;




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
<h3><br><center><img src="../uploads/thelogo.jpg"  style="width:110px;height:110px;"><br>
<b>
Medical and Dental Service Unit<BR>Medical Consultation Chart Record</BR>

</b></h3>
</center>
<br>


<p style="text-align:right;">Date: <?php  echo date("Y/m/d");?></p><br>

<br>


<table style="width:100%">
   
   <th><b>CLIENT INFORMATION</b></th>

  <tr>
    <td>Name: &nbsp;<b><?= ($requestor) ?></b></td>
    <td></td>

    <td>Contact Number: <b><?= ($number) ?></b></td>
  </tr>
  <tr>
    <td>Department: <b><?= ($usercol) ?></b></td>
    <td></td>
   <td>Date of Birth <b><?= ($dob) ?></b></td>
  </tr>

  <tr>
    <td>Employment Status: <b><?= ($empstatus) ?></b></td>
    <td></td>
   <td>College: <b><?= ($college) ?></b></td>
  </tr>



  </table>
  <hr>
  <table style="width:100%">

 

   <tr>

    <td>Mother Name: &nbsp;<b><?= ($mother) ?></b></td>  
    <td>Father Name: <b><?= ($father) ?></b></td> 
    <td>Id Number: <b><?= ($idnumber) ?></b></td>
        <td></td>
  </tr>
   <tr>
     <td>Age: <b><?= ($age) ?></b></td>
      <td>Sex: <b><?= ($sex) ?></b></td>
           <td>Civil: <b><?= ($civil) ?></b></td>
  </tr>
</table>


<hr>


 <div class="row">

<div class="col-md-12">

<div class="card card-outline ">
    <div class="card-header">
        <h3 class="card-title">Medical Consultation</h3>
    </div>
    <div class="card-body">
        <div class="container-fluid">
    
            <table class="table table-hover table-striped table-bordered">
                <colgroup>
                    <col width="3%">
                    <col width="10%">
           
                     <col width="10%">
                    <col width="20%"> 
                     
                   
                </colgroup>
                <thead>
                    <tr>
                       <th>#</th>
                          <th>Date Time</th>
                            
                        <th>chiefcompliant</th>
                 
                       <th>Remarks</th>
                   
                        
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $i = 1;
                        $qry = $conn->query("SELECT * from `healthcare` where clientid='$clientid'  ");
                        while($row = $qry->fetch_assoc()):
                    ?>
                        <tr>
                            <td class="text-center"><?php echo $i++; ?></td>
                             <td class="">  <?php echo ($row['date_created']) ?></td>
                           
                            <td class=""><?php echo ($row['chiefcompliant']) ?></td>
                            <td class=""><?php echo ($row['remarks']) ?></td>
                           
                            
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
        </div>
    </div>
  </div>

  </div>



</div><center>


</center><br>
</div>
<br><br><br><center>
<b><u>________________________________</u></b><br>
Physician

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