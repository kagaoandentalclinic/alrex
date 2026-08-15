<?php
require_once('../config.php');
Class Users extends DBConnection {
	private $settings;
	public function __construct(){
		global $_settings;
		$this->settings = $_settings;
		parent::__construct();
	}
	public function __destruct(){
		parent::__destruct();
	}
	public function save_users(){
		if(!isset($_POST['status']) && $this->settings->userdata('login_type') == 1){
			$_POST['status'] = 1;
		}
		$id = isset($_POST['id']) ? (int)$_POST['id'] : 0;
		$username = $this->conn->real_escape_string($_POST['username'] ?? '');
		$password = $_POST['password'] ?? '';
		$oldpassword = $_POST['oldpassword'] ?? '';
		$data = '';
		if(!empty($oldpassword)){
			$stored = $this->settings->userdata('password');
			$valid = (strlen($stored) === 32 && ctype_xdigit($stored))
				? ($stored === md5($oldpassword))
				: password_verify($oldpassword, $stored);
			if(!$valid){
				return 4;
			}
		}
		$chk = $this->conn->query("SELECT id FROM `users` WHERE username='$username'" . ($id > 0 ? " AND id != $id" : ""))->num_rows;
		if($chk > 0){
			return 3;
		}
		$user_columns = array();
		$columns_qry = $this->conn->query("SHOW COLUMNS FROM `users`");
		while($column = $columns_qry->fetch_assoc()){
			$user_columns[] = $column['Field'];
		}
		$location_fields = array('province', 'city', 'barangay');
		$missing_location_fields = array_diff($location_fields, $user_columns);
		if(in_array('address', $user_columns) && !empty($missing_location_fields)){
			$address_parts = array();
			$base_address = trim($_POST['address'] ?? '');
			if($base_address !== ''){
				$address_parts[] = $base_address;
			}
			foreach(array('barangay', 'city', 'province') as $field){
				if(in_array($field, $missing_location_fields)){
					$value = trim($_POST[$field] ?? '');
					if($value !== ''){
						$address_parts[] = $value;
					}
				}
			}
			if(!empty($address_parts)){
				$_POST['address'] = implode(', ', $address_parts);
			}
		}
		$allowed_fields = array_values(array_intersect(
			array('firstname', 'middlename', 'lastname', 'sufix', 'username', 'type', 'address', 'province', 'city', 'barangay', 'age', 'dob', 'civil', 'sex', 'number', 'idnumber', 'zip', 'email', 'studentpermit', 'license', 'status'),
			$user_columns
		));
		foreach($_POST as $k => $v){
			if(in_array($k, $allowed_fields)){
				if($k === 'dob' && empty($v)) continue;
				$safe_v = $this->conn->real_escape_string($v);
				if(!empty($data)) $data .= " , ";
				$data .= " `{$k}` = '$safe_v' ";
			}
		}
		if(!empty($password)){
			$hashed = password_hash($password, PASSWORD_BCRYPT);
			if(!empty($data)) $data .= " , ";
			$data .= " `password` = '$hashed' ";
		}
		if(empty($id)){
			$qry = $this->conn->query("INSERT INTO users set {$data}");
			if($qry){
				$id = $this->conn->insert_id;
				$this->settings->set_flashdata('success','User Details successfully saved.');
				$resp['status'] = 1;
			}else{
				$resp['status'] = 2;
			}
		}else{
			$sql = "UPDATE users set $data where id = {$id}";
			$qry = $this->conn->query($sql);
			if($qry){
				$this->settings->set_flashdata('success','User Details successfully updated.');
				if($id == $this->settings->userdata('id')){
					foreach($_POST as $k => $v){
						if($k != 'id'){
							$this->settings->set_userdata($k,$v);
						}
					}
				}
				$resp['status'] = 1;
			}else{
				$resp['status'] = 2;
			}
		}
		if(isset($_FILES['img']) && $_FILES['img']['tmp_name'] != ''){
			$fname = 'uploads/avatar-'.$id.'.png';
			$dir_path = base_app. $fname;
			$upload = $_FILES['img']['tmp_name'];
			$type = mime_content_type($upload);
			$allowed_img = array('image/png','image/jpeg');
			if(!in_array($type,$allowed_img)){
				$resp['msg'].=" But Image failed to upload due to invalid file type.";
			}else{
				$new_height = 200;
				$new_width = 200;
				list($width, $height) = getimagesize($upload);
				$t_image = imagecreatetruecolor($new_width, $new_height);
				imagealphablending( $t_image, false );
				imagesavealpha( $t_image, true );
				$gdImg = ($type == 'image/png')? imagecreatefrompng($upload) : imagecreatefromjpeg($upload);
				imagecopyresampled($t_image, $gdImg, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
				if($gdImg){
					if(is_file($dir_path)) unlink($dir_path);
					$uploaded_img = imagepng($t_image,$dir_path);
					imagedestroy($gdImg);
					imagedestroy($t_image);
				}else{
					$resp['msg'].=" But Image failed to upload due to unkown reason.";
				}
			}
			if(isset($uploaded_img)){
				$this->conn->query("UPDATE users set `avatar` = CONCAT('{$fname}','?v=',unix_timestamp(CURRENT_TIMESTAMP)) where id = '{$id}' ");
				if($id == $this->settings->userdata('id')){
					$this->settings->set_userdata('avatar',$fname);
				}
			}
		}
		if(isset($resp['msg']))
			$this->settings->set_flashdata('success',$resp['msg']);
		return $resp['status'];
	}
	public function delete_users(){
		$id = (int)($_POST['id'] ?? 0);
		$avatar = $this->conn->query("SELECT avatar FROM users WHERE id = $id")->fetch_array()['avatar'];
		$qry = $this->conn->query("DELETE FROM users WHERE id = $id");
		if($qry){
			$avatar = explode("?",$avatar)[0];
			$this->settings->set_flashdata('success','User Details successfully deleted.');
			if(is_file(base_app.$avatar))
				unlink(base_app.$avatar);
			$resp['status'] = 'success';
		}else{
			$resp['status'] = 'failed';
		}
		return json_encode($resp);
	}
	public function save_client(){
		$id    = (int)($_POST['id'] ?? 0);
		$email = $this->conn->real_escape_string($_POST['email'] ?? '');
		$password = $_POST['password'] ?? '';
		$oldpassword = $_POST['oldpassword'] ?? '';
		$data = '';
		if(!empty($oldpassword)){
			$stored = $this->settings->userdata('password');
			$valid = (strlen($stored) === 32 && ctype_xdigit($stored))
				? ($stored === md5($oldpassword))
				: password_verify($oldpassword, $stored);
			if(!$valid){
				return json_encode(array("status"=>'failed', "msg"=>'Old Password is Incorrect'));
			}
		}
		$chk = $this->conn->query("SELECT id FROM `client_list` WHERE email='$email'" . ($id > 0 ? " AND id != $id" : ""))->num_rows;
		if($chk > 0){
			return 3;
		}
		$skip = array('id','oldpassword','cpassword','password');
		foreach($_POST as $k => $v){
			if(!in_array($k, $skip)){
				$safe_v = $this->conn->real_escape_string($v);
				if(!empty($data)) $data .= " , ";
				$data .= " `$k` = '$safe_v' ";
			}
		}
		if(!empty($password)){
			$hashed = password_hash($password, PASSWORD_BCRYPT);
			if(!empty($data)) $data .= " , ";
			$data .= " `password` = '$hashed' ";
		}

		if(empty($id)){
			$qry = $this->conn->query("INSERT INTO client_list set {$data}");
			if($qry){
				$id = $this->conn->insert_id;
				$this->settings->set_flashdata('success','User Details successfully saved.');
				$resp['status'] = "success";
			}else{
				$resp['status'] = "failed";
				$resp['msg'] = "An error occurred while saving the data. Error: ". $this->conn->error;
			}

		}else{
			$qry = $this->conn->query("UPDATE client_list set $data where id = {$id}");
			if($qry){
				$this->settings->set_flashdata('success','User Details successfully updated.');
				if($id == $this->settings->userdata('id')){
					foreach($_POST as $k => $v){
						if($k != 'id'){
							if(!empty($data)) $data .=" , ";
							$this->settings->set_userdata($k,$v);
						}
					}
					
				}
				$resp['status'] = "success";
			}else{
				$resp['status'] = "failed";
				$resp['msg'] = "An error occurred while saving the data. Error: ". $this->conn->error;
			}
			
		}
		
		if(isset($_FILES['img']) && $_FILES['img']['tmp_name'] != ''){
			$fname = 'uploads/client-'.$id.'.png';
			$dir_path =base_app. $fname;
			$upload = $_FILES['img']['tmp_name'];
			$type = mime_content_type($upload);
			$allowed = array('image/png','image/jpeg');
			if(!in_array($type,$allowed)){
				$resp['msg'].=" But Image failed to upload due to invalid file type.";
			}else{
				$new_height = 200; 
				$new_width = 200; 
		
				list($width, $height) = getimagesize($upload);
				$t_image = imagecreatetruecolor($new_width, $new_height);
				imagealphablending( $t_image, false );
				imagesavealpha( $t_image, true );
				$gdImg = ($type == 'image/png')? imagecreatefrompng($upload) : imagecreatefromjpeg($upload);
				imagecopyresampled($t_image, $gdImg, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
				if($gdImg){
						if(is_file($dir_path))
						unlink($dir_path);
						$uploaded_img = imagepng($t_image,$dir_path);
						imagedestroy($gdImg);
						imagedestroy($t_image);
				}else{
				$resp['msg'].=" But Image failed to upload due to unkown reason.";
				}
			}
			if(isset($uploaded_img)){
				$this->conn->query("UPDATE client_list set `avatar` = CONCAT('{$fname}','?v=',unix_timestamp(CURRENT_TIMESTAMP)) where id = '{$id}' ");
				if($id == $this->settings->userdata('id')){
						$this->settings->set_userdata('avatar',$fname);
				}
			}
		}
		
		return  json_encode($resp);
	}
	public function delete_client(){
		$id = (int)($_POST['id'] ?? 0);
		$avatar = $this->conn->query("SELECT avatar FROM client_list WHERE id = $id")->fetch_array()['avatar'];
		$qry = $this->conn->query("DELETE FROM client_list WHERE id = $id");
		if($qry){
			$avatar = explode("?",$avatar)[0];
			$this->settings->set_flashdata('success','User Details successfully deleted.');
			if(is_file(base_app.$avatar))
				unlink(base_app.$avatar);
			$resp['status'] = 'success';
		}else{
			$resp['status'] = 'failed';
		}
		return json_encode($resp);
	}
	public function verify_client(){
		$id = (int)($_POST['id'] ?? 0);
		$update = $this->conn->query("UPDATE `client_list` SET `status` = 1 WHERE id = $id");
		if($update){
			$this->settings->set_flashdata('success','client Account has verified successfully.');
			$resp['status'] = 'success';
		}else{
			$resp['status'] = 'failed';
		}
		return json_encode($resp);
	}
	
}

$users = new users();
$action = !isset($_GET['f']) ? 'none' : strtolower($_GET['f']);
switch ($action) {
	case 'save':
		ob_start();
		$_result = $users->save_users();
		ob_end_clean();
		echo $_result;
	break;
	case 'delete':
		echo $users->delete_users();
	break;
	case 'save_client':
		echo $users->save_client();
	break;
	case 'delete_client':
		echo $users->delete_client();
	break;
	case 'verify_client':
		echo $users->verify_client();
	break;
	default:
		// echo $sysset->index();
		break;
}
