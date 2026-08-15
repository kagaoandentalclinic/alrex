<?php
require_once('../../config.php');
if(isset($_GET['id']) && $_GET['id'] > 0){
    $qry = $conn->query("SELECT * from `appointment_list` where id = '{$_GET['id']}' ");
    if($qry->num_rows > 0){
        foreach($qry->fetch_assoc() as $k => $v){
            $$k=$v;
        }
    }

  }
?>
<style>
#uni_modal .modal-content>.modal-footer{
    display:none;
}
#uni_modal .modal-body{
    padding-bottom:0 !important;
}
</style>
<div class="container-fluid">
    <p><b>Appointment Ref Code:</b> <?php echo $code ?></p>
    <p><b>Appointment Schedule:</b> <?php echo date("F d, Y",strtotime($schedule))  ?> Time:  <?php echo date("h:i",strtotime($time))  ?></p>
    <p><b>Student Name:</b> <?php echo $requestor ?></p>
    
    <p><b>Status:
            <?php 
        switch($status){ 
            case(0): 
                echo '<span class="badge badge-primary">Pending</span>';
            break; 
            case(1): 
            echo '<span class="badge badge-success">Confirmed</span>';
            break; 
            case(2): 
                echo '<span class="badge badge-danger">Cancelled</span>';
            break; 
             case(3): 
                echo '<span class="badge badge-success">Done</span>';
            break; 
               case(4): 
                echo '<span class="badge badge-warning">Instructor Incharge</span>';
            break; 
            default: 
                echo '<span class="badge badge-secondary">NA</span>';
        }
        ?></b>
       
    </p>
</div>
<div class="modal-footer border-0">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
</div>
