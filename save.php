<?php
    require_once(__DIR__.'/initialize.php');
    $conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME, DB_PORT);

    if (!$conn) {
        die("Error: Failed to connect to the database!");
    }

    if (isset($_POST['save'])) {
        $firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
        $lastname  = mysqli_real_escape_string($conn, $_POST['lastname']);
        $username  = mysqli_real_escape_string($conn, $_POST['username']);
        $password  = password_hash($_POST['password'], PASSWORD_BCRYPT);
        $type      = (int)$_POST['type'];

        mysqli_query($conn, "INSERT INTO `users` VALUES('', '$firstname', '', '$lastname', '$username', '$password', '', '', '$type', '1', NOW(), '', '', '', '', '', '', '', '', '', '', '', '', '', '')") or die(mysqli_error($conn));

        echo "<script>alert('User account saved!')</script>";
        echo "<script>window.location.href = '../admin/verification.php';</script>";
    }
?>
