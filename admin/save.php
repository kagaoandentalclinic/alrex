<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../vendor/phpmailer/src/Exception.php';
require '../vendor/phpmailer/src/PHPMailer.php';
require '../vendor/phpmailer/src/SMTP.php';

require_once(__DIR__.'/../initialize.php');

$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME, DB_PORT);

if (!$conn) {
    die("Error: Failed to connect to the database!");
}

if (isset($_POST['save'])) {
    $randomNumber = rand(100000, 999999);
    $id = $_POST['id'];
    $sex = $_POST['sex'];
    $civil = $_POST['civil'];
    $address = $_POST['address'];
    $province = mysqli_real_escape_string($conn, $_POST['province'] ?? '');
    $city = mysqli_real_escape_string($conn, $_POST['city'] ?? '');
    $barangay = mysqli_real_escape_string($conn, $_POST['barangay'] ?? '');
    $zip = $_POST['zip'];
    $number = $_POST['number'];
    $age = $_POST['age'];
    $dob = $_POST['dob'];
    $firstname = $_POST['firstname'];
    $middlename = $_POST['middlename'];
    $lastname = $_POST['lastname'];
    $username = $_POST['username'];
    $type = $_POST['type'];
    $password = $_POST['password'];

    // Age validation
    if ($age < 13) {
        echo "<script>alert('Registration is only allowed for users aged 13 and above. Your entered age is $age. Please verify your age.')</script>";
        echo "<script>window.history.back();</script>";
        exit;
    }

    // Password validation regex
    $pattern = '/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[\W_]).{8,}$/';

    if (!preg_match($pattern, $password)) {
        echo "<script>alert('Password must contain at least 8 characters, including uppercase, lowercase, a number, and a special character.')</script>";
        echo "<script>window.history.back();</script>";
        exit;
    }

    // Hash the password after validation
    $password = password_hash($password, PASSWORD_BCRYPT);

    // Check if the username already exists
    $username_esc = mysqli_real_escape_string($conn, $username);
    $checkUsernameQuery = mysqli_query($conn, "SELECT id FROM `users` WHERE username = '$username_esc'");
    if ($checkUsernameQuery) {
        $existingUserRows = mysqli_num_rows($checkUsernameQuery);
        if ($existingUserRows >= 1) {
            echo "<script>alert('User account already registered.')</script>";
            echo "<script>window.location.href = 'http://localhost/Alrex_System/admin/login.php';</script>";
            exit;
        }
    }

    if (empty($id)) {
        // Prepare email content
        $subject = 'Verification for : ' . $firstname . ' ' . $lastname;
        $thetimes = date("M d, Y h:i a");
        $mail = new PHPMailer(true);

        try {
            // Server settings
            $mail->isSMTP();
            $mail->Host = SMTP_HOST;
            $mail->SMTPAuth = true;
            $mail->Username = SMTP_USERNAME;
            $mail->Password = SMTP_PASSWORD;
            $mail->SMTPSecure = 'ssl';
            $mail->Port = 443;

            // Recipients
            $mail->setFrom('alrexschooldriving@gmail.com');
            $mail->addAddress($username);
            $mail->addReplyTo('alrexschooldriving@gmail.com');

            // Content
            $mail->isHTML(true);
            $mail->Subject = $subject;
            $mail->Body = '<html>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #f7f7f7;
        }

        .container {
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
            border: 1px solid #e0e0e0;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .logo {
            max-width: 200px;
            max-height: 200px;
            margin-bottom: 20px;
        }

        .verification-code {
            font-size: 32px;
            margin-top: 20px;
            margin-bottom: 40px;
        }

        .contact-info {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <center>
            <img src="https://alrex.driving.com.ph/wp-content/uploads/2022/09/logo.png" alt="Alrex School of Driving" class="logo">
            <h2>Verification Code</h2>
            <p>Date: <strong>' . $thetimes . '</strong></p>
            <h1 class="verification-code">' . $randomNumber . '</h1>
        </center>
        <p class="contact-info">If you have any questions or concerns, please contact our support team at <a href="mailto:alrexschooldriving@gmail.com">alrexschooldriving@gmail.com</a>.</p>
        <p>Thank you for choosing Alrex School of Driving. We look forward to embarking on this exciting journey with you.</p>
    </div>
</body>
</html>';

            $mail->send();
        } catch (Exception $e) {
            echo "<script>alert('Message could not be sent. Mailer Error: {$mail->ErrorInfo}')</script>";
        }
    }

    $trimmedAddress = trim($address);
    if ($trimmedAddress !== '') {
        $fullAddress = mysqli_real_escape_string($conn, $trimmedAddress);
    } else {
        $addressParts = array_filter([
            trim($barangay),
            trim($city),
            trim($province)
        ], function ($value) {
            return $value !== '';
        });
        $fullAddress = mysqli_real_escape_string($conn, implode(', ', $addressParts));
    }

    // Check if any required fields are empty
    if (empty($firstname) || empty($lastname) || empty($username) || empty($password)) {
        echo "<script>alert('Please fill in all the required fields.')</script>";
    } else {
        mysqli_query($conn, "INSERT INTO `users` (`firstname`, `middlename`, `lastname`, `sufix`, `username`, `password`, `type`, `status`, `date_added`, `dob`, `sex`, `number`, `idnumber`, `age`, `civil`, `address`, `zip`, `email`, `studentpermit`, `license`, `verifycode`) VALUES('$firstname', '$middlename', '$lastname', '', '$username', '$password', '$type', '0', NOW(), '$dob', '$sex', '$number', '', '$age', '$civil', '$fullAddress', '$zip', '', '', '', '$randomNumber')") or die(mysqli_error($conn));

        echo "<script>alert('Successfully sent OTP. Please click Verify Account to experience Alrex Driving School!')</script>";
        echo "<script>window.location.href = 'http://localhost/Alrex_System/admin/login.php';</script>";
    }
}
?>
