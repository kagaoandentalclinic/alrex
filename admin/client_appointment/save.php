<?php
require_once('../../config.php');

if (isset($_POST['save'])) {
    $image_name = $_FILES['img']['name'] ?? '';
    $image_temp = $_FILES['img']['tmp_name'] ?? '';
    $id         = (int)($_POST['ids'] ?? 0);
    $code       = $conn->real_escape_string($_POST['code']     ?? '');
    $requestor  = $conn->real_escape_string($_POST['requestor'] ?? '');
    $usertype   = $conn->real_escape_string($_POST['usertype']  ?? '');
    $service    = $conn->real_escape_string($_POST['service']   ?? '');

    $exp = explode(".", $image_name);
    $end = strtolower(end($exp));
    $name = time() . "." . $end;
    $path = "upload/" . $name;
    $allowed_ext = ["gif", "jpg", "jpeg", "png"];

    if (in_array($end, $allowed_ext)) {
        if (move_uploaded_file($image_temp, $path)) {
            $conn->query("INSERT INTO `transaction` VALUES('', '$usertype', '$service', '$path', '$requestor', '$code', NOW(), '$id', '0')");
            $_SESSION['success'] = 'Transaction saved! Please wait to confirm your appointment.';
            header("Location: " . base_url . "admin/?page=client_appointment");
            exit();
        }
    } else {
        $_SESSION['error'] = 'Only image files are allowed (jpg, jpeg, png, gif).';
        header("Location: " . base_url . "admin/?page=client_appointment");
        exit();
    }
}
?>
