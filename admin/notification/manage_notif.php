<?php 
require_once('../../config.php');
if(isset($_GET['id'])){
    $nid = (int)$_GET['id'];
    $qry = $conn->query("SELECT * FROM `notification` WHERE id = $nid");
    if($qry->num_rows > 0){
        $res = $qry->fetch_array();
        foreach($res as $k => $v){
            if(!is_numeric($k)){
                $$k = $v;
            }
        }
        if(isset($id) && isset($read) && $read != 1)
            $conn->query("UPDATE `notification` SET `read` = 1 WHERE id = $nid");
    }
}
?>
<style>
    #uni_modal .modal-footer{
        display:none !important;
    }
</style>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <dl>
                <dt class="text-primary">Notification</dt>
                <dd class="pl-4"><?= isset($clientid) ? $clientid : "" ?></dd>
                <dt class="text-primary">Code</dt>
                <dd class="pl-4"><?= isset($code) ? $code : "" ?></dd>
                <dt class="text-primary">User</dt>
                <dd class="pl-4"><?= isset($status) ? $status : "" ?></dd>
     
            </dl>
        </div>
    </div>
    <div class="row">
        <div class="col-12 text-right">
         <button type="button" onclick="javascript:window.location.reload()" class="close" data-dismiss="modal" aria-hidden="true">&times; Close</button>
        </div>
    </div>
</div>
