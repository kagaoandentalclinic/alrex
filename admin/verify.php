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
    $code = trim(mysqli_real_escape_string($conn,
        ($_POST['code']  ?? '') .
        ($_POST['code1'] ?? '') .
        ($_POST['code2'] ?? '') .
        ($_POST['code3'] ?? '') .
        ($_POST['code4'] ?? '') .
        ($_POST['code5'] ?? '')
    ));
    $username = trim(mysqli_real_escape_string($conn, $_POST['username'] ?? ''));

    if (empty($code) || empty($username)) {
        echo "<script>alert('Please fill in all the required fields.')</script>";
    } else {
        $user = $conn->query("SELECT * FROM users WHERE verifycode = '$code' AND username = '$username'");
        $meta = $user->fetch_assoc();

        if ($meta && $meta['verifycode'] == $code) {
            mysqli_query($conn, "UPDATE `users` SET `status` = 1 WHERE verifycode = '$code'") or die(mysqli_error($conn));






   $subject = 'You are now verify';
    $message = '';

   $thetimes=date("M d, Y h:i a");
    //Load composer's autoloader

    $mail = new PHPMailer(true);                            
   
        //Server settings
        $mail->isSMTP();                                     
        $mail->Host = SMTP_HOST;
        $mail->SMTPAuth = true;
        $mail->Username = SMTP_USERNAME;
        $mail->Password = SMTP_PASSWORD;
        $mail->SMTPOptions = array(
            'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
            )
        ); 



        $mail->SMTPSecure = 'ssl';                           
        $mail->Port = 443;                                   

        //Send Email
        $mail->setFrom('alrexschooldriving@gmail.com');
        
        //Recipients
        $mail->addAddress($username );              
        $mail->addReplyTo('alrexschooldriving@gmail.com');
        
        //Content
        $mail->isHTML(true);    




        $mail->Subject = $subject;
        $mail->Body    = '<html>
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
        <p>Date: <strong> '.$thetimes.'</strong></p>
              
        <h1 class="verification-Statu">Successfully Verify Please Proceed to log in</h1>
        </center>
        <p class="contact-info">If you have any questions or concerns, please contact our support team at <a href="mailto:alrexschooldriving@gmail.com">alrexschooldriving@gmail.com</a>.</p>
        <p>Thank you for choosing Alrex School of Driving. We look forward to embarking on this exciting journey with you.</p>
    </div>
</body>
</html>' ;

        $mail->send();











            
            echo "<script>alert('User account successfully verified!')</script>";
            echo "<script>window.location.href = '" . base_url . "admin/login.php';</script>";
        } else {






            echo "<script>alert('Invalid verification code. Please try again. Make sure the email is register check your email')</script>";
                 echo "<script>window.location.href = '" . base_url . "admin/login.php';</script>";
        }
    }
}
?>
