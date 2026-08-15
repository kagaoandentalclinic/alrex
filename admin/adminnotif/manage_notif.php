
<?php
require_once('../../config.php');

?>



<?php
if(isset($_GET['id'])){
	$qry = $conn->query("SELECT * FROM notification where id = ".$_GET['id'])->fetch_array();
foreach($qry as $k => $v){
	$$k = $v;
}

}
 if( $read == 0){
       $qry = $conn->query("UPDATE `notification` set `read` = 1 where id = $id");
 }

?>
<div class="container-fluid">
	<form action="" id="manage-department">
		<input type="hidden" name="id" value="<?php echo isset($id) ? $id : '' ?>">







Good day sir/maam, Your Appointment Code: <?php echo isset($code) ? $code : '' ?> update your status into 



 <?php
									switch ($status){
										case 0:
											echo '<span class="rounded-pill badge badge-primary">Pending</span>';
											break;
										case 1:
											echo '<span class="rounded-pill badge badge-success">Confirm</span>';
											break;
										case 2:
											echo '<span class="rounded-pill badge badge-danger">Cancelled</span>';
											break;
										case 3:
											echo '<span class="rounded-pill badge badge-success">Done Lesson</span>';
											break;
										case 4:
											echo '<span class="rounded-pill badge badge-primary">Instructor Assigned</span>';
											break;
									}
								?>








 in this date <?php echo isset($date_created) ? $date_created : '' ?>. Please see in your appointment list monitoring.



							


	</form>
</div>
