<?php
require_once('config.php');

// Only logged-in admin users may delete schedules
if(empty($_SESSION['login_type']) || $_SESSION['login_type'] != 1){
    echo "<script>alert('Unauthorized.'); location.replace('admin/login.php')</script>";
    exit;
}

if(!isset($_GET['id'])){
    echo "<script>alert('Undefined Schedule ID.'); location.replace('./')</script>";
    exit;
}

$id = (int)$_GET['id'];
$delete = $conn->query("DELETE FROM `schedule_list` WHERE id = $id");
if($delete){
    echo "<script>alert('Event deleted successfully.'); location.replace('calendar.php')</script>";
} else {
    echo "<script>alert('An error occurred: " . addslashes($conn->error) . "'); history.back()</script>";
}
$conn->close();
?>
