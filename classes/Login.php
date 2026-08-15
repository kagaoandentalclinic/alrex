<?php
require_once '../config.php';
class Login extends DBConnection {
	private $settings;
	public function __construct(){
		global $_settings;
		$this->settings = $_settings;

		parent::__construct();
		ini_set('display_error', 1);
	}
	public function __destruct(){
		parent::__destruct();
	}
	public function index(){
		echo "<h1>Access Denied</h1> <a href='".base_url."'>Go Back.</a>";
	}
	public function login(){
		extract($_POST);
		// Fetch by username only, then verify password (supports MD5→bcrypt migration)
		$stmt = $this->conn->prepare("SELECT * FROM users WHERE username = ?");
		$stmt->bind_param('s', $username);
		$stmt->execute();
		$qry = $stmt->get_result();
		if($qry->num_rows > 0){
			$res = $qry->fetch_assoc();
			$stored = $res['password'];
			// Transition: accept MD5 hashes and rehash with bcrypt on next login
			$valid = false;
			if(strlen($stored) === 32 && ctype_xdigit($stored)){
				$valid = ($stored === md5($password));
				if($valid){
					$newHash = password_hash($password, PASSWORD_BCRYPT);
					$this->conn->query("UPDATE users SET password='$newHash' WHERE id=".(int)$res['id']);
				}
			} else {
				$valid = password_verify($password, $stored);
			}
			if(!$valid){
				return json_encode(array('status'=>'incorrect'));
			}
			if($res['status'] != 1){
				return json_encode(array('status'=>'notverified'));
			}
			foreach($res as $k => $v){
				if(!is_numeric($k) && $k != 'password'){
					$this->settings->set_userdata($k,$v);
				}
			}
			$this->settings->set_userdata('login_type',1);
			return json_encode(array('status'=>'success'));
		}else{
			return json_encode(array('status'=>'incorrect','error'=>$this->conn->error));
		}
	}
	public function logout(){
		if($this->settings->sess_des()){
			redirect('admin/login.php');
		}
	}
	function client_login(){
		extract($_POST);
		$stmt = $this->conn->prepare("SELECT *,concat(lastname,', ',firstname,' ',middlename) as fullname from client_list where email = ?");
		$stmt->bind_param('s',$email);
		$stmt->execute();
		$qry = $stmt->get_result();
		if($this->conn->error){
			$resp['status'] = 'failed';
			$resp['msg'] = "An error occurred while fetching data. Error:". $this->conn->error;
		}else{
		if($qry->num_rows > 0){
			$res = $qry->fetch_array();
			$stored = $res['password'];
			// MD5 → bcrypt migration
			$valid = false;
			if(strlen($stored) === 32 && ctype_xdigit($stored)){
				$valid = ($stored === md5($password));
				if($valid){
					$newHash = password_hash($password, PASSWORD_BCRYPT);
					$this->conn->query("UPDATE client_list SET password='$newHash' WHERE id=".(int)$res['id']);
				}
			} else {
				$valid = password_verify($password, $stored);
			}
			if(!$valid){
				$resp['status'] = 'failed';
				$resp['msg'] = "Invalid email or password.";
				return json_encode($resp);
			}
			if($res['status'] == 1){
				foreach($res as $k => $v){
					$this->settings->set_userdata($k,$v);
				}
				$this->settings->set_userdata('login_type',2);
				$resp['status'] = 'success';
			}else{
				$resp['status'] = 'failed';
				$resp['msg'] = "Your Account is not verified yet.";
			}

		}else{
		$resp['status'] = 'failed';
		$resp['msg'] = "Invalid email or password.";
		}
		}
		return json_encode($resp);
	}
	public function client_logout(){
		if($this->settings->sess_des()){
			redirect('./login.php');
		}
	}
}
$action = !isset($_GET['f']) ? 'none' : strtolower($_GET['f']);
$auth = new Login();
switch ($action) {
	case 'login':
		echo $auth->login();
		break;
	case 'logout':
		echo $auth->logout();
		break;
	case 'client_login':
		echo $auth->client_login();
		break;
	case 'client_logout':
		echo $auth->client_logout();
		break;
	default:
		echo $auth->index();
		break;
}

