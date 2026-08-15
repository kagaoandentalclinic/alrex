<?php
require_once('config.php');

// Only logged-in admin users may save schedules
if(empty($_SESSION['login_type']) || $_SESSION['login_type'] != 1){
    echo "<script>alert('Unauthorized.'); location.replace('admin/login.php')</script>";
    exit;
}

if($_SERVER['REQUEST_METHOD'] != 'POST'){
    echo "<script>alert('Error: No data to save.'); location.reload()</script>";
    exit;
}

$id             = (int)($_POST['id'] ?? 0);
$title          = $conn->real_escape_string($_POST['title']          ?? '');
$description    = $conn->real_escape_string($_POST['description']    ?? '');
$start_datetime = $conn->real_escape_string($_POST['start_datetime'] ?? '');
$end_datetime   = $conn->real_escape_string($_POST['end_datetime']   ?? '');

if(empty($id)){
    $sql = "INSERT INTO `schedule_list` (`title`,`description`,`start_datetime`,`end_datetime`) VALUES ('$title','$description','$start_datetime','$end_datetime')";
} else {
    $sql = "UPDATE `schedule_list` SET `title`='$title', `description`='$description', `start_datetime`='$start_datetime', `end_datetime`='$end_datetime' WHERE `id`=$id";
}

$save = $conn->query($sql);
if($save){
    echo "<script>alert('Schedule saved successfully.'); location.replace('calendar.php')</script>";
} else {
    echo "<script>alert('An error occurred: " . addslashes($conn->error) . "'); history.back()</script>";
}
?>
