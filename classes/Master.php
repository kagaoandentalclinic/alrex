<?php
require_once('../config.php');
Class Master extends DBConnection {
	private $settings;
	public function __construct(){
		global $_settings;
		$this->settings = $_settings;
		parent::__construct();
	}
	public function __destruct(){
		parent::__destruct();
	}
	// Sanitize all scalar POST values with real_escape_string, preserving arrays
	private function sanitize_post(array $data): array {
		$out = [];
		foreach($data as $k => $v){
			if(is_array($v)){
				$out[$k] = $this->sanitize_post($v);
			} else {
				$out[$k] = $this->conn->real_escape_string($v);
			}
		}
		return $out;
	}
	function capture_err(){
		if(!$this->conn->error)
			return false;
		else{
			$resp['status'] = 'failed';
			$resp['error'] = $this->conn->error;
			return json_encode($resp);
			exit;
		}
	}
	function save_message(){
		extract($this->sanitize_post($_POST));
		$data = "";
		foreach($_POST as $k =>$v){
			if(!in_array($k,array('id'))){
				if(!is_numeric($v))
					$v = $this->conn->real_escape_string($v);
				if(!empty($data)) $data .=",";
				$data .= " `{$k}`='{$v}' ";
			}
		}
		if(empty($id)){
			$sql = "INSERT INTO `message_list` set {$data} ";
		}else{
			$sql = "UPDATE `message_list` set {$data} where id = '{$id}' ";
		}
		
		$save = $this->conn->query($sql);
		if($save){
			$rid = !empty($id) ? $id : $this->conn->insert_id;
			$resp['status'] = 'success';
			if(empty($id))
				$resp['msg'] = "Your message has successfully sent.";
			else
				$resp['msg'] = "Message details has been updated successfully.";
		}else{
			$resp['status'] = 'failed';
			$resp['msg'] = "An error occured.";
			$resp['err'] = $this->conn->error."[{$sql}]";
		}
		if($resp['status'] =='success' && !empty($id))
		$this->settings->set_flashdata('success',$resp['msg']);
		if($resp['status'] =='success' && empty($id))
		$this->settings->set_flashdata('pop_msg',$resp['msg']);
		return json_encode($resp);
	}
	function delete_message(){
		extract($this->sanitize_post($_POST));
		$del = $this->conn->query("DELETE FROM `message_list` where id = '{$id}'");
		if($del){
			$resp['status'] = 'success';
			$this->settings->set_flashdata('success',"Message has been deleted successfully.");

		}else{
			$resp['status'] = 'failed';
			$resp['error'] = $this->conn->error;
		}
		return json_encode($resp);

	}
	function save_category(){
		extract($this->sanitize_post($_POST));
		$data = "";
		foreach($_POST as $k =>$v){
			if(!in_array($k,array('id'))){
				if(!is_numeric($v))
					$v = $this->conn->real_escape_string($v);
				if(!empty($data)) $data .=",";
				$data .= " `{$k}`='{$v}' ";
			}
		}
		if(empty($id)){
			$sql = "INSERT INTO `category_list` set {$data} ";
		}else{
			$sql = "UPDATE `category_list` set {$data} where id = '{$id}' ";
		}
		$check = $this->conn->query("SELECT * FROM `category_list` where `name` = '{$name}' and delete_flag = 0 ".($id > 0 ? " and id != '{$id}'" : ""));
		if($check->num_rows > 0){
			$resp['status'] = 'failed';
			$resp['msg'] = "Category name already exists.";
		}else{
			$save = $this->conn->query($sql);
			if($save){
				$rid = !empty($id) ? $id : $this->conn->insert_id;
				$resp['status'] = 'success';
				if(empty($id))
					$resp['msg'] = "Category has successfully added.";
				else
					$resp['msg'] = "Category details has been updated successfully.";
			}else{
				$resp['status'] = 'failed';
				$resp['msg'] = "An error occured.";
				$resp['err'] = $this->conn->error."[{$sql}]";
			}
		}
		if($resp['status'] =='success')
			$this->settings->set_flashdata('success',$resp['msg']);
		return json_encode($resp);
	}
	function delete_category(){
		extract($this->sanitize_post($_POST));
		$del = $this->conn->query("UPDATE `category_list` set delete_flag=1 where id = '{$id}'");
		if($del){
			$resp['status'] = 'success';
			$this->settings->set_flashdata('success',"Category has been deleted successfully.");
		}else{
			$resp['status'] = 'failed';
			$resp['error'] = $this->conn->error;
		}
		return json_encode($resp);
	}





function save_sched_settings(){
		// Save max_appointment to system_info table, not schedule_settings
		if (isset($_POST['max_appointment'])) {
			$max = (int)$_POST['max_appointment'];
			if ($max > 0) {
				if (isset($_SESSION['system_info']['max_appointment'])) {
					$this->conn->query("UPDATE system_info SET meta_value = '{$max}' WHERE meta_field = 'max_appointment'");
				} else {
					$this->conn->query("INSERT INTO system_info SET meta_value = '{$max}', meta_field = 'max_appointment'");
				}
				$_SESSION['system_info']['max_appointment'] = $max;
			}
			unset($_POST['max_appointment']);
		}
		$data = "";
		foreach($_POST as $k => $v){
			if(is_array($_POST[$k]))
			$v = implode(',',$_POST[$k]);
			if(!empty($data)) $data .= ",";
			$data .= " ('{$k}','{$v}') ";
		}
		$sql = "INSERT INTO `schedule_settings` (`meta_field`,`meta_value`) VALUES {$data}";
		if(!empty($data)){
			$this->conn->begin_transaction();
			$this->conn->query("DELETE FROM `schedule_settings`");
			$save = $this->conn->query($sql);
			if($save){
				$this->conn->commit();
				$resp['status'] = 'success';
				$this->settings->set_flashdata('success',' Schedule settings successfully updated');
			}else{
				$this->conn->rollback();
				$resp['status'] = 'failed';
				$resp['err'] = $this->conn->error;
				$resp['msg'] = "An error occurred while saving schedule settings.";
			}
		} else {
			$resp['status'] = 'failed';
			$resp['msg'] = 'No settings data to save.';
		}
		return json_encode($resp);
	}


















	function save_product(){
		$_POST['category_ids'] = implode(',',$_POST['category_ids']);
		extract($this->sanitize_post($_POST));
		$data = "";
		foreach($_POST as $k =>$v){
			if(!in_array($k,array('id'))){
				if(!is_numeric($v))
					$v = $this->conn->real_escape_string($v);
				if(!empty($data)) $data .=",";
				$data .= " `{$k}`='{$v}' ";
			}
		}
		if(empty($id)){
			$sql = "INSERT INTO `inventory_list` set {$data} ";
		}else{
			$sql = "UPDATE `inventory_list` set {$data} where id = '{$id}' ";
		}
		$check = $this->conn->query("SELECT * FROM `inventory_list` where `prodname` ='{$prodname}' and category_ids = '{$category_ids}' and delete_flag = 0 ".($id > 0 ? " and id != '{$id}' " : ""))->num_rows;
		if($check > 0){
			$resp['status'] = 'failed';
			$resp['msg'] = "Product already exists.";
		}else{
			$save = $this->conn->query($sql);
			if($save){
				$rid = !empty($id) ? $id : $this->conn->insert_id;
				$resp['status'] = 'success';
				if(empty($id))
					$resp['msg'] = "Product has successfully added.";
				else
					$resp['msg'] = "Product has been updated successfully.";
			}else{
				$resp['status'] = 'failed';
				$resp['msg'] = "An error occured.";
				$resp['err'] = $this->conn->error."[{$sql}]";
			}
			if($resp['status'] =='success')
			$this->settings->set_flashdata('success',$resp['msg']);
		}
		return json_encode($resp);
	}
	function delete_product(){
		extract($this->sanitize_post($_POST));
		$del = $this->conn->query("UPDATE `inventory_list` set delete_flag = 1 where id = '{$id}'");
		if($del){
			$resp['status'] = 'success';
			$this->settings->set_flashdata('success',"Product has been deleted successfully.");

		}else{
			$resp['status'] = 'failed';
			$resp['error'] = $this->conn->error;
		}
		return json_encode($resp);
	}



















	function save_service(){
		$_POST['category_ids'] = implode(',',$_POST['category_ids']);
		extract($this->sanitize_post($_POST));
		$data = "";
		foreach($_POST as $k =>$v){
			if(!in_array($k,array('id'))){
				if(!is_numeric($v))
					$v = $this->conn->real_escape_string($v);
				if(!empty($data)) $data .=",";
				$data .= " `{$k}`='{$v}' ";
			}
		}
		if(empty($id)){
			$sql = "INSERT INTO `service_list` set {$data} ";
		}else{
			$sql = "UPDATE `service_list` set {$data} where id = '{$id}' ";
		}
		$check = $this->conn->query("SELECT * FROM `service_list` where `name` ='{$name}' and category_ids = '{$category_ids}' and delete_flag = 0 ".($id > 0 ? " and id != '{$id}' " : ""))->num_rows;
		if($check > 0){
			$resp['status'] = 'failed';
			$resp['msg'] = "Service already exists.";
		}else{
			$save = $this->conn->query($sql);
			if($save){
				$rid = !empty($id) ? $id : $this->conn->insert_id;
				$resp['status'] = 'success';
				if(empty($id))
					$resp['msg'] = "Service has successfully added.";
				else
					$resp['msg'] = "Service has been updated successfully.";
			}else{
				$resp['status'] = 'failed';
				$resp['msg'] = "An error occured.";
				$resp['err'] = $this->conn->error."[{$sql}]";
			}
			if($resp['status'] =='success')
			$this->settings->set_flashdata('success',$resp['msg']);
		}
		return json_encode($resp);
	}
	function delete_service(){
		extract($this->sanitize_post($_POST));
		$del = $this->conn->query("UPDATE `service_list` set delete_flag = 1 where id = '{$id}'");
		if($del){
			$resp['status'] = 'success';
			$this->settings->set_flashdata('success',"Service has been deleted successfully.");

		}else{
			$resp['status'] = 'failed';
			$resp['error'] = $this->conn->error;
		}
		return json_encode($resp);
	}






function patient_chart(){
		extract($this->sanitize_post($_POST));
		//date_created is the error
		$del = $this->conn->query("INSERT INTO `patient_chart` set `code` = '$code', `owner_name`='$owner_name', `petname`='$petname', `observation`='$observation',`medication`='$medication', `dosage`='$dosage', `remarks`='$remarks'");
		if($del){
			$resp['status'] = 'success';
			$this->settings->set_flashdata('success',"Patient Chart Successfully Save.");

		}else{
			$resp['status'] = 'failed';
			$resp['error'] = $this->conn->error;
		}
		return json_encode($resp);
	}







function admit_patient(){
		extract($this->sanitize_post($_POST));





		//date_created is the error
		$del = $this->conn->query("INSERT INTO `admit_list` set `code` = '$code', `owner_name`='$owner_name', `contact`='$contact', `age`='$age',`petname`='$petname', `breed`='$breed', `weight`='$weight', `temperature`='$temperature', `heartrate`='$heartrate' , `respiratoryrate`='$respiratoryrate', `mm`='$mm', `crt`='$crt'");
		if($del){
			$resp['status'] = 'success';
			$this->settings->set_flashdata('success',"Admitted Successfully.");

$del = $this->conn->query("UPDATE `appointment_list` set `status` = '4' where code = '{$code}'");

		}else{
			$resp['status'] = 'failed';
			$resp['error'] = $this->conn->error;
		}
		return json_encode($resp);
	}

























	function save_appointment(){

extract($this->sanitize_post($_POST));

		// Phase 5: Server-side age check (min age: 17)
		$clientid_esc = $this->conn->real_escape_string($requestor);
		$dob_row = $this->conn->query("SELECT `dob` FROM `users` WHERE `id` = '{$clientid_esc}' LIMIT 1")->fetch_assoc();
		if(!empty($dob_row['dob'])){
			$dob = new DateTime($dob_row['dob']);
			$today = new DateTime();
			$age = $today->diff($dob)->y;
			if($age < 17){
				$resp['status'] = 'failed';
				$resp['msg'] = "You must be at least 17 years old to book an appointment. Your age: {$age}.";
				return json_encode($resp);
			}
		}

$sched_set_qry = $this->conn->query("SELECT * FROM `schedule_settings`");
		$sched_set = array_column($sched_set_qry->fetch_all(MYSQLI_ASSOC),'meta_value','meta_field');
		$morning_start = date("Y-m-d ") . explode(',',$sched_set['morning_schedule'])[0];
		$morning_end = date("Y-m-d ") . explode(',',$sched_set['morning_schedule'])[1];
		$afternoon_start = date("Y-m-d ") . explode(',',$sched_set['afternoon_schedule'])[0];
		$afternoon_end = date("Y-m-d ") . explode(',',$sched_set['afternoon_schedule'])[1];
		$sched_time = date("Y-m-d ") . date("H:i",strtotime($schedule));



		if(!in_array(strtolower(date("l",strtotime($schedule))),explode(',',strtolower($sched_set['day_schedule'])))){
			$resp['status'] = 'failed';
			$resp['msg'] = "This day is not available! Only Weekdays From Monday to Friday 8:00am to 5:00pm.";
			return json_encode($resp);
			exit;
		}



		$check = $this->conn->query("SELECT * FROM `appointment_list` where ('".strtotime($schedule)."' Between unix_timestamp(schedule) and unix_timestamp(DATE_ADD(schedule, interval 30 MINUTE)) OR '".strtotime($schedule.' +30 mins')."' Between unix_timestamp(schedule) and unix_timestamp(DATE_ADD(schedule, interval 30 MINUTE))) ".($id >0 ? " and id != '{$id}' " : ""))->num_rows;
		$this->capture_err();
		if($check > 0){
			$resp['status'] = 'failed';
			$resp['msg'] = "Oops, something went wrong. We couldn't process your request.";
			return json_encode($resp);
			exit;
		}






	$check = $this->conn->query("SELECT * FROM `appointment_list` where `schedule`='$schedule' AND `time`='$time' AND `status` NOT IN (2,3) ")->num_rows;
		$this->capture_err();
		if($check >= 1){
			$resp['status'] = 'failed';
			$resp['msg'] = "This time slot ".$sched_time." is occupied. Please select a new time.";
			return json_encode($resp);
		}












		$check = $this->conn->query("SELECT * FROM `appointment_list` WHERE `requestor`='$requestor' AND `status` IN (0, 1)")->num_rows;

		$this->capture_err();
		if($check >= 1 ){
			$resp['status'] = 'failed';
			$resp['msg'] = "Your Appointment has been Block Because you have an appointment incomplete! Please Cancel the Appointment in your list to proceed";
			return json_encode($resp);
			exit;
		}





	if(empty($_POST['id'])){
			
			$prefix="ALREX-".date("Ym");
			$code = sprintf("%'.04d",1);
			while(true){
				$check = $this->conn->query("SELECT * FROM `appointment_list` where code = '{$prefix}{$code}' ")->num_rows;
				if($check <= 0){
					$_POST['code'] = $prefix.$code;
					break;
				}else{
					$code = sprintf("%'.04d",ceil($code)+1);
				}
			}
		}
		$_POST['service_ids'] = implode(",", $_POST['service_id'] ?? []);
		unset($_POST['service_id']);

		// `dl` is a multi-select (dl[]) but the column holds one string - the
		// dynamic INSERT builder below skips arrays entirely, so without this
		// the NOT NULL `dl` column never gets a value and the insert fails.
		if(isset($_POST['dl']) && is_array($_POST['dl'])){
			$_POST['dl'] = implode(",", $_POST['dl']);
		}elseif(!isset($_POST['dl'])){
			$_POST['dl'] = '';
		}

		// These columns are NOT NULL with no default, but nothing in the
		// booking form sets them - they're filled in later by staff
		// (medical result, payment status, assigned instructor). Without
		// this, a new appointment's INSERT fails under strict SQL mode.
		if(empty($_POST['id'])){
			foreach(['medical' => '', 'payment' => 0, 'instructor_id' => '', 'instructor_name' => '', 'delete_flag' => 0] as $field => $default){
				if(!isset($_POST[$field])) $_POST[$field] = $default;
			}
		}

		extract($this->sanitize_post($_POST));
		$data = "";
		foreach($_POST as $k =>$v){
			if(!in_array($k,array('id')) && !is_array($_POST[$k])){
				if(!is_numeric($v))
					$v = $this->conn->real_escape_string($v);
				if(!empty($data)) $data .=",";
				$data .= " `{$k}`='{$v}' ";



			}
		}
		
		if(empty($id)){
			$sql = "INSERT INTO `appointment_list` set {$data} ";
		}else{
			$sql = "UPDATE `appointment_list` set {$data} where id = '{$id}' ";
		}
		// Phase 5: InnoDB transaction to prevent double-booking race conditions
		$this->conn->begin_transaction();
		try {
			$slot_taken = $this->conn->query("SELECT COUNT(*) as cnt FROM `appointment_list` where date(schedule) = date('{$schedule}') and `status` in (0,1) FOR UPDATE")->fetch_assoc()['cnt'];
			if($slot_taken >= $this->settings->info('max_appointment')){
				$this->conn->rollback();
				$resp['status'] = 'failed';
				$resp['msg'] = "Sorry, the Appointment Schedule is already full.";
			}else{
				$save = $this->conn->query($sql);
				if($save){
					$this->conn->commit();
					$rid = !empty($id) ? $id : $this->conn->insert_id;
					$resp['id'] = $rid;
					$resp['code'] = $code;
					$resp['status'] = 'success';
					if(empty($id))
						$resp['msg'] = "New Appointment Details has successfully added.</b>.";
					else
						$resp['msg'] = "Appointment Details has been updated successfully.";
				}else{
					$this->conn->rollback();
					$resp['status'] = 'failed';
					$resp['msg'] = "An error occured.";
					$resp['err'] = $this->conn->error."[{$sql}]";
				}
			}
		} catch (Exception $e) {
			$this->conn->rollback();
			$resp['status'] = 'failed';
			$resp['msg'] = "A database error occurred. Please try again.";
		}

		if($resp['status'] =='success')
		$this->settings->set_flashdata('success',$resp['msg']);
		return json_encode($resp);
	}






	function restore_datas(){
		extract($this->sanitize_post($_POST));
		$del = $this->conn->query("UPDATE `appointment_list` set delete_flag=0 where id = '{$id}' ");
		if($del){
			$resp['status'] = 'success';
			$this->settings->set_flashdata('success',"Successfully Restored");
		}else{
			$resp['status'] = 'failed';
			$resp['error'] = $this->conn->error;
		}
		return json_encode($resp);
	}





	function delete_appointment(){
		extract($this->sanitize_post($_POST));
		$del = $this->conn->query("UPDATE `appointment_list` set delete_flag=1 where id = '{$id}' ");
		if($del){
			$resp['status'] = 'success';
			$this->settings->set_flashdata('success',"Appointment Details has been deleted successfully.");
		}else{
			$resp['status'] = 'failed';
			$resp['error'] = $this->conn->error;
		}
		return json_encode($resp);
	}






function blood(){
		extract($this->sanitize_post($_POST));
		//date_created is the error
		$del = $this->conn->query("INSERT INTO `blood` set `code` = '$code', `owner_name`='$owner_name', `petname`='$petname', `ehr`='$ehr', `bab`='$bab', `ana`='$ana', `lym`='$lym' , `tenta`='$tenta', `progno`='$progno', `diff`='$diff', `recc`='$recc'");
		if($del){
			$resp['status'] = 'success';
			$this->settings->set_flashdata('success',"blood Successfully Save.");

		}else{
			$resp['status'] = 'failed';
			$resp['error'] = $this->conn->error;
		}
		return json_encode($resp);
	}




function rapid(){
		extract($this->sanitize_post($_POST));
		//date_created is the error
		$del = $this->conn->query("INSERT INTO `rapid` set `code` = '$code', `owner_name`='$owner_name', `petname`='$petname', `cpv`='$cpv', `ccv`='$ccv', `cdv`='$cdv', `leptos`='$leptos'");
		if($del){
			$resp['status'] = 'success';
			$this->settings->set_flashdata('success',"rapid Successfully Save.");

		}else{
			$resp['status'] = 'failed';
			$resp['error'] = $this->conn->error;
		}
		return json_encode($resp);
	}







function microscopy(){
		extract($this->sanitize_post($_POST));
		//date_created is the error
		$del = $this->conn->query("INSERT INTO `microscopy` set `code` = '$code', `owner_name`='$owner_name', `petname`='$petname', `fecalysis`='$fecalysis', `skin`='$skin', `vaginal`='$vaginal', `urine`='$urine'");
		if($del){
			$resp['status'] = 'success';
			$this->settings->set_flashdata('success',"microscopy Successfully Save.");

		}else{
			$resp['status'] = 'failed';
			$resp['error'] = $this->conn->error;
		}
		return json_encode($resp);
	}










function vaccination_history(){
		extract($this->sanitize_post($_POST));
		//date_created 






		$del = $this->conn->query("INSERT INTO `history` set `code` = '$code', `owner_name`='$owner_name', `petname`='$petname', `diet`='$diet', `clinical`='$clinical', `chef`='$chef'");
		if($del){
			$resp['status'] = 'success';
			$this->settings->set_flashdata('success',"Anti-Parasitics Successfully Save.");

		}else{
			$resp['status'] = 'failed';
			$resp['error'] = $this->conn->error;
		}
		return json_encode($resp);
	}








function vaccinations(){
		extract($this->sanitize_post($_POST));
		//date_created is the error
		$doctor="Dr. Sincerely Dangatan";
		$del = $this->conn->query("INSERT INTO `parasitics` set `code` = '$code', `owner_name`='$owner_name', `petname`='$petname', `weight`='$weight', `against`='$against', `manufacturer`='$manufacturer', `lotnumber`='$lotnumber', `vet`='$doctor'");
		if($del){
			$resp['status'] = 'success';
			$this->settings->set_flashdata('success',"Anti-Parasitics Successfully Save.");

		}else{
			$resp['status'] = 'failed';
			$resp['error'] = $this->conn->error;
		}
		return json_encode($resp);
	}




function healthcares(){
		extract($this->sanitize_post($_POST));
		//date_created is the error

		$written_score   = isset($written_score)   ? (int)$written_score : 'NULL';
		$written_result  = $this->conn->real_escape_string(isset($written_result)  ? $written_result  : '');
		$practical_result= $this->conn->real_escape_string(isset($practical_result)? $practical_result: '');
		$overall_status  = $this->conn->real_escape_string(isset($overall_status)  ? $overall_status  : '');
		$session_date    = $this->conn->real_escape_string(isset($session_date)     ? $session_date    : '');
		$ws_sql = is_numeric($written_score) ? "'$written_score'" : 'NULL';
		$sd_sql = !empty($session_date) ? "'$session_date'" : 'NULL';
		$existing = $this->conn->query("SELECT id FROM `student_remarks` WHERE refnum='$refnum' LIMIT 1");
		if ($existing && $existing->num_rows > 0) {
			$del = $this->conn->query("UPDATE `student_remarks` SET `Student_name`='$Student_name', `userid`='$userid', `instructorid`='$instructor', `remarks`='$remarks', `written_score`=$ws_sql, `written_result`='$written_result', `practical_result`='$practical_result', `overall_status`='$overall_status', `session_date`=$sd_sql WHERE refnum='$refnum'");
		} else {
			$del = $this->conn->query("INSERT INTO `student_remarks` SET `Student_name`='$Student_name', `userid`='$userid', `refnum`='$refnum', `instructorid`='$instructor', `remarks`='$remarks', `written_score`=$ws_sql, `written_result`='$written_result', `practical_result`='$practical_result', `overall_status`='$overall_status', `session_date`=$sd_sql");
		}

		if($del){
			$resp['status'] = 'success';
			$this->settings->set_flashdata('success',"Successfully Saved Remarks.");

		}else{
			$resp['status'] = 'failed';
			$resp['error'] = $this->conn->error;
		}
		return json_encode($resp);
	}

function healthcare(){
		extract($this->sanitize_post($_POST));
		//date_created is the error

		$existing = $this->conn->query("SELECT id FROM `student_list` WHERE refnum='$refnum' LIMIT 1");
		if($existing && $existing->num_rows > 0){
			$del = $this->conn->query("UPDATE `student_list` SET `Student_name`='$Student_name', `instructorid`='$instructorid' WHERE refnum='$refnum'");
		}else{
			$del = $this->conn->query("INSERT INTO `student_list` set `Student_name` = '$Student_name', `userid` = '$userid', `refnum`='$refnum', `instructorid`='$instructorid'");
		}
		if($del){
			$this->conn->query("UPDATE `appointment_list` set instructor_id='$instructorid' where code = '$refnum'");
			$this->conn->query("UPDATE `appointment_list` set status='1' where code = '$refnum'");
			$this->conn->query("INSERT INTO `notification` set `status` = '4',`clientid` = '{$userid}',`code` = '{$refnum}' ");
			$resp['status'] = 'success';
			$this->settings->set_flashdata('success',"Successfully Assign Instructor.");

		}else{
			$resp['status'] = 'failed';
			$resp['error'] = $this->conn->error;
		}
		return json_encode($resp);
	}




function vaccination(){
		extract($this->sanitize_post($_POST));
		//date_created is the error
		$doctor="Dr. Sincerely Dangatan";
		$del = $this->conn->query("INSERT INTO `vaccination` set `code` = '$code', `owner_name`='$owner_name', `petname`='$petname', `weight`='$weight', `against`='$against', `manufacturer`='$manufacturer', `lotnumber`='$lotnumber', `vet`='$doctor'");
		if($del){
			$resp['status'] = 'success';
			$this->settings->set_flashdata('success',"Vaccination Successfully Save.");

		}else{
			$resp['status'] = 'failed';
			$resp['error'] = $this->conn->error;
		}
		return json_encode($resp);
	}







function physical_examination(){
		extract($this->sanitize_post($_POST));
		//date_created is the error
		$del = $this->conn->query("INSERT INTO `physical_examination` set `code` = '$code', `owner_name`='$owner_name', `petname`='$petname', `weight`='$weight', `temperature`='$temperature', `heartrate`='$heartrate', `respiratoryrate`='$respiratoryrate', `general`='$general', `findings`='$findings'");
		if($del){
			$resp['status'] = 'success';
			$this->settings->set_flashdata('success',"Physical Examination Successfully Save.");

		}else{
			$resp['status'] = 'failed';
			$resp['error'] = $this->conn->error;
		}
		return json_encode($resp);
	}








function deduct_stock(){
		extract($this->sanitize_post($_POST));
		$resp = [];
		$stock = (int)$stock;
		$one   = (int)$one;
		$id    = (int)$id;
		if($one > $stock){
			$resp['status'] = 'failed';
			$resp['msg'] = 'Not enough stock to deduct.';
			return json_encode($resp);
		}
		$total = $stock - $one;
		$del = $this->conn->query("UPDATE `inventory_list` set `stock` ='$total' where id = '$id'");
		if($del){
			$resp['status'] = 'success';
			$this->settings->set_flashdata('success',"Successfully Deducted Stock.");
		} else {
			$resp['status'] = 'failed';
			$resp['msg'] = $this->conn->error;
		}
		return json_encode($resp);
	}




function add_stock(){
		extract($this->sanitize_post($_POST));
		$resp = [];
		$stock = (int)$stock;
		$one   = (int)$one;
		$id    = (int)$id;
		$total = $one + $stock;
		$del = $this->conn->query("UPDATE `inventory_list` set `stock` ='$total' where id = '$id'");
		if($del){
			$resp['status'] = 'success';
			$this->settings->set_flashdata('success',"Successfully Added Stock.");
		} else {
			$resp['status'] = 'failed';
			$resp['msg'] = $this->conn->error;
		}
		return json_encode($resp);
	}







function update_appointment_status_admit(){
		extract($this->sanitize_post($_POST));
		$dates = date('y-m-d h:i:s');

		$del = $this->conn->query("UPDATE `admit_list` set `status` = '1', delete_flags='$dates' where code = '{$code}'");
		if($del){
			$resp['status'] = 'success';
			$this->settings->set_flashdata('success',"Successfully Released the patient.");

		}else{
			$resp['status'] = 'failed';
			$resp['error'] = $this->conn->error;
		}
		return json_encode($resp);
	}







function update_appointment_statuss(){
		extract($this->sanitize_post($_POST));





$sched_set_qry = $this->conn->query("SELECT * FROM `schedule_settings`");
		$sched_set = array_column($sched_set_qry->fetch_all(MYSQLI_ASSOC),'meta_value','meta_field');
		$morning_start = date("Y-m-d ") . explode(',',$sched_set['morning_schedule'])[0];
		$morning_end = date("Y-m-d ") . explode(',',$sched_set['morning_schedule'])[1];
		$afternoon_start = date("Y-m-d ") . explode(',',$sched_set['afternoon_schedule'])[0];
		$afternoon_end = date("Y-m-d ") . explode(',',$sched_set['afternoon_schedule'])[1];
		$sched_time = date("h:i a",strtotime($time));




		if(!in_array(strtolower(date("l",strtotime($schedule))),explode(',',strtolower($sched_set['day_schedule'])))){
			$resp['status'] = 'failed';
			$resp['msg'] = "This day is not available please select another date to proceed to the appointment.";
			return json_encode($resp);
			exit;
		}

if(!( (strtotime($sched_time) >= strtotime($morning_start) && strtotime($sched_time) <= strtotime($morning_end)) || (strtotime($sched_time) >= strtotime($afternoon_start) && strtotime($sched_time) <= strtotime($afternoon_end)) )){
			$resp['status'] = 'failed';
			$resp['msg'] = "Selected Schedule Time is invalid.";
			return json_encode($resp);
			exit;
		}
$check = $this->conn->query("SELECT * FROM `appointment_list` where ('".strtotime($schedule)."' Between unix_timestamp(schedule) and unix_timestamp(DATE_ADD(schedule, interval 30 MINUTE)) OR '".strtotime($schedule.' +30 mins')."' Between unix_timestamp(schedule) and unix_timestamp(DATE_ADD(schedule, interval 30 MINUTE))) ".($id >0 ? " and id != '{$id}' " : ""))->num_rows;
		$this->capture_err();
		if($check > 0){
			$resp['status'] = 'failed';
			$resp['msg'] = "This day is not available please select another date to proceed to the appointment.";
			return json_encode($resp);
			exit;
		}






		$del = $this->conn->query("UPDATE `appointment_list` set `status` = '0', `schedule`='$schedule', `time`='$time' where id = '{$id}'");	


		
		if($del){
			$dels = $this->conn->query("INSERT INTO `notification` set `status` = '0',`clientid` = '{$clientid}',`code` = '{$code}' ");
			$resp['status'] = 'success';
			$resp['code'] = $code;

			$this->settings->set_flashdata('success',"Successfully set client new appointment date.");

		}else{
			$resp['status'] = 'failed';
			$resp['error'] = $this->conn->error;
		}
		return json_encode($resp);
	}









	function update_appointment_statussss(){
		extract($this->sanitize_post($_POST));
		$del = $this->conn->query("UPDATE `appointment_list` set `status` = '{$status}', `payment` = '{$payment}' where id = '{$id}'");
		$dels = $this->conn->query("INSERT INTO `notification` set `status` = '{$status}',`clientid` = '{$clientid}',`code` = '{$code}' ");
		if($del){
			$resp['status'] = 'success';
			$this->settings->set_flashdata('success',"Appointment Request status has successfully updated.");

		}else{
			$resp['status'] = 'failed';
			$resp['error'] = $this->conn->error;
		}
		return json_encode($resp);
	}



	function update_appointment_status(){
		extract($this->sanitize_post($_POST));
		// Phase 6: Instructors (type 2) may only set Absent(2) or Done(3); admins have full control
		$caller_type = (int)$this->settings->userdata('type');
		if($caller_type == 2 && !in_array((int)$status, [2, 3])){
			$resp['status'] = 'failed';
			$resp['msg'] = "Instructors can only mark appointments as Absent or Done.";
			return json_encode($resp);
		}
		$caller_id = $this->settings->userdata('id');
		if((int)$status === 3){
			$del = $this->conn->query("UPDATE `appointment_list` set `status` = '{$status}', `instructor_id` = IF(`instructor_id` = '' OR `instructor_id` IS NULL, '$caller_id', `instructor_id`) where id = '{$id}'");
		}else{
			$del = $this->conn->query("UPDATE `appointment_list` set `status` = '{$status}' where id = '{$id}'");
		}
		$dels = $this->conn->query("INSERT INTO `notification` set `status` = '{$status}',`clientid` = '{$clientid}',`code` = '{$code}' ");
		if($del){
			$resp['status'] = 'success';
			$this->settings->set_flashdata('success',"Appointment Request status has successfully updated.");

		}else{
			$resp['status'] = 'failed';
			$resp['error'] = $this->conn->error;
		}
		return json_encode($resp);
	}













	function verify_payment(){
		$caller_type = (int)$this->settings->userdata('type');
		if($caller_type != 1){
			$resp['status'] = 'failed';
			$resp['msg'] = 'Access denied. Only admins can verify payments.';
			return json_encode($resp);
		}
		$id = (int)($_POST['id'] ?? 0);
		$resp = [];
		if($id <= 0){
			$resp['status'] = 'failed';
			$resp['msg'] = 'Invalid transaction ID.';
			return json_encode($resp);
		}
		$upd = $this->conn->query("UPDATE `transaction` SET `status` = 1 WHERE id = $id");
		if($upd){
			$resp['status'] = 'success';
			$this->settings->set_flashdata('success', 'Payment has been verified successfully.');
		} else {
			$resp['status'] = 'failed';
			$resp['error'] = $this->conn->error;
		}
		return json_encode($resp);
	}

}

$Master = new Master();
$action = !isset($_GET['f']) ? 'none' : strtolower($_GET['f']);

// Inline handler for get_slot_count (no class method needed)
if ($action === 'get_slot_count') {
	$date = isset($_GET['date']) ? $Master->conn->real_escape_string($_GET['date']) : '';
	$max = (int)($_SESSION['system_info']['max_appointment'] ?? 10);
	$used = 0;
	if (!empty($date)) {
		$res = $Master->conn->query("SELECT COUNT(*) as cnt FROM appointment_list WHERE DATE(schedule) = '{$date}' AND status IN (0,1)");
		if ($res) $used = (int)$res->fetch_assoc()['cnt'];
	}
	header('Content-Type: application/json');
	echo json_encode(['used' => $used, 'max' => $max, 'available' => max(0, $max - $used)]);
	exit;
}
$sysset = new SystemSettings();
switch ($action) {
	case 'save_appointment':
		echo $Master->save_appointment();
	break;

	case 'delete_appointment':
		echo $Master->delete_appointment();
	break;




case 'healthcare':
		echo $Master->healthcare();
	break;

case 'delete_product':
		echo $Master->delete_product();
	break;





case 'save_product':
		echo $Master->save_product();
	break;




case 'deduct_stock':
		echo $Master->deduct_stock();
	break;

	
case 'add_stock':
		echo $Master->add_stock();
	break;




case 'patient_chart':
		echo $Master->patient_chart();
	break;


case 'admit_patient':
		echo $Master->admit_patient();
	break;




case 'restore_datas':
		echo $Master->restore_datas();
	break;






case 'rapid':
		echo $Master->rapid();
	break;


case 'microscopy':
		echo $Master->microscopy();
	break;



case 'vaccination_history':
		echo $Master->vaccination_history();
	break;

case 'vaccination':
		echo $Master->vaccination();
	break;




case 'vaccinations':
		echo $Master->vaccinations();
	break;




case 'physical_examination':
		echo $Master->physical_examination();
	break;



case 'healthcares':
		echo $Master->healthcares();
	break;




case 'update_appointment_status':
		echo $Master->update_appointment_status();
	break;




case 'update_appointment_status_admit':
		echo $Master->update_appointment_status_admit();
	break;






case 'update_appointment_statuss':
		echo $Master->update_appointment_statuss();
	break;


	case 'update_appointment_statussss':
		echo $Master->update_appointment_statussss();
	break;

	case 'verify_payment':
		echo $Master->verify_payment();
	break;

	case 'save_message':
		echo $Master->save_message();
	break;

	case 'delete_message':
		echo $Master->delete_message();
	break;

	case 'save_category':
		echo $Master->save_category();
	break;




	case 'save_sched_settings':
		echo $Master->save_sched_settings();
	break;

	
	case 'delete_category':
		echo $Master->delete_category();
	break;
	case 'save_service':
		echo $Master->save_service();
	break;
	case 'delete_service':
		echo $Master->delete_service();
	break;
	default:
		// echo $sysset->index();
		break;
}