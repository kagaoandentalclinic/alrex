


<?php 
if(isset($_GET['id'])){
    $qry = $conn->query("SELECT * from `appointment_list` a inner join category_list c on a.category_id = c.id where a.id = '{$_GET['id']}'");
    if($qry->num_rows > 0){
        $res = $qry->fetch_array();
        foreach($res as $k => $v){
            if(!is_numeric($k)){
                $$k = $v;
            }
        }
    }else{
    echo "<script>alert('Unknown Appointment Request ID'); location.replace('./?page=client_appointment');</script>";
    }
}
else{
    echo "<script>alert('Appointment Request ID is required'); location.replace('./?page=client_appointment');</script>";
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
    @media print {
        .no-print, .main-sidebar, .main-header, .content-header, .breadcrumb { display: none !important; }
        .content-wrapper { margin-left: 0 !important; padding: 0 !important; }
        .card { border: none !important; box-shadow: none !important; }
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


    

 

<div class="card card-outline ">

<div class="card-body">
<div class="text-right mb-2 no-print">
    <button class="btn btn-primary btn-sm" onclick="window.print()"><i class="fa fa-print"></i> Print / Save as PDF</button>
</div>

<h3><center>
<b>
ALREX DRIVING SCHOOL APPOINTMENT SLIP</BR>

</b></h3>
</center>
<hr>



<h5 style="text-align:right;"><i>Your Appointment Day is <?= date("F j, Y", strtotime($schedule)) ?> <?= date("h:i", strtotime($time)) ?> as of <?= date("F j, Y", strtotime(date("Y/m/d"))) ?>: <?php  echo date("h:i a");?><br>Your Appointment Code is<br></i></h5><h3 style="text-align:right;"><b><?= ($code) ?></b></h3>

<br>


<table style="width:100%">
   
   <th><b><h3>Appointment Details</h3></b></th>

  <tr>
    <td>Name : &nbsp;<b><?= ucwords($requestor) ?></b></td>
    <td></td>



    
  </tr>
  <tr><td>Services: &nbsp;<b><?= ($service) ?></b></td>
  </tr>

  <tr>
    <td>Student Permit:&nbsp; <b><?= ($stud_permit) ?></b></td>
     <td>License:&nbsp; <b><?= ($license) ?></b></td>
   <td> <b></b></td>
  </tr>



  <tr>
    <td>Type of Application:&nbsp; <b><?= ($application) ?></b></td>
     <td>DL Code:&nbsp; <b><?= ($dl) ?></b></td>
          <td>MT:&nbsp; <b><?= ($mt) ?></b></td>
          <td>AT:&nbsp; <b><?= ($at) ?></b></td>
 
  </tr>








  <tr>
    <td><b></b> </td>
    <td></td>
  
  </tr>

  </table>


  <hr>
  <table style="width:100%">

 

   <tr>

    <td>Date: &nbsp;<b><?= date("F j, Y", strtotime($schedule)) ?></b></td>  
   
  </tr>
   <tr>
  <td>time:&nbsp; <b><?= date("h:i", strtotime($time)) ?></b></td> 
  
  </tr>
   <tr>
  <td></td> 
  
  </tr>

   <tr>
  <td>Payment Status<b>: <?php


if ($payment == 0) {
    echo '<span style="color: red;">NOT PAID</span>';
} elseif ($payment == 1) {
    echo '<span style="color: green;">PAID</span>';
}
?></b></td> 
  
  </tr>

</table>


<hr>

<p style="text-align:center;">-   -   -   -   -   -   -   -   -   -   -   -   -   -   -   -   -   -   -   -   -   -   -   -   -   -   -   -   -   -   -   -   -   -   -   -   -   -   -   -   -   -   -   -   -   -   -   -   -   -   -   -   -   -   -   -   -   -   -   -   -   -   -   -   -   -   -   -   -   -   -   -   -   -   -   -   -   -   -   -   -   -   -   -   -   -   -   -   -   -   -   -   </p>

</div>

        









<script>

</script>