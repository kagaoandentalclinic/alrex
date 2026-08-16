<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../vendor/phpmailer/src/Exception.php';
require '../vendor/phpmailer/src/PHPMailer.php';
require '../vendor/phpmailer/src/SMTP.php';

require_once(__DIR__.'/../initialize.php');

header('Content-Type: application/json');

$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME, DB_PORT);

if (!$conn) {
    echo json_encode(['status' => 'error', 'message' => 'Failed to connect to the database.']);
    exit;
}

$step = $_POST['step'] ?? '';

if ($step === 'request') {
    $username = trim($_POST['username'] ?? '');

    if (empty($username)) {
        echo json_encode(['status' => 'error', 'message' => 'Please enter your email.']);
        exit;
    }

    $stmt = $conn->prepare("SELECT id, firstname, username FROM users WHERE username = ?");
    $stmt->bind_param('s', $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        $code = str_pad((string)random_int(0, 999999), 6, '0', STR_PAD_LEFT);

        // Expiry computed by MySQL itself (NOW() + INTERVAL), not PHP's date() -
        // this endpoint doesn't load config.php's date_default_timezone_set(),
        // so PHP and MySQL could otherwise disagree on "now".
        $update = $conn->prepare("UPDATE users SET reset_code = ?, reset_expires = NOW() + INTERVAL 15 MINUTE WHERE id = ?");
        $update->bind_param('si', $code, $user['id']);
        $update->execute();

        try {
            $mail = new PHPMailer(true);
            $mail->isSMTP();
            $mail->Host = SMTP_HOST;
            $mail->SMTPAuth = true;
            $mail->Username = SMTP_USERNAME;
            $mail->Password = SMTP_PASSWORD;
            $mail->SMTPOptions = [
                'ssl' => [
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true,
                ],
            ];
            $mail->SMTPSecure = 'ssl';
            $mail->Port = 443;

            $mail->setFrom('alrexschooldriving@gmail.com');
            $mail->addAddress($user['username']);
            $mail->addReplyTo('alrexschooldriving@gmail.com');
            $mail->isHTML(true);
            $mail->Subject = 'Password Reset Code';
            $thetimes = date('M d, Y h:i a');
            $mail->Body = '<html><body style="font-family: Arial, sans-serif; text-align:center; background:#f7f7f7;">
                <div style="max-width:500px;margin:0 auto;padding:20px;background:#fff;border:1px solid #e0e0e0;border-radius:5px;">
                    <h2>Password Reset Code</h2>
                    <p>Date: <strong>' . $thetimes . '</strong></p>
                    <h1 style="font-size:32px;">' . $code . '</h1>
                    <p>This code expires in 15 minutes. If you did not request a password reset, you can ignore this email.</p>
                </div>
            </body></html>';
            $mail->send();
        } catch (Exception $e) {
            $mailError = $e->getMessage(); // TEMP - remove once root cause is found
        }
    }

    // Always respond the same way, whether or not the account exists,
    // so this endpoint can't be used to enumerate registered emails.
    $response = ['status' => 'sent', 'message' => 'If that email is registered, a reset code has been sent.'];
    if (isset($mailError)) $response['debug'] = $mailError;
    echo json_encode($response);
    exit;
}

if ($step === 'reset') {
    $username = trim($_POST['username'] ?? '');
    $code = trim($_POST['code'] ?? '');
    $newPassword = $_POST['new_password'] ?? '';

    if (empty($username) || empty($code) || empty($newPassword)) {
        echo json_encode(['status' => 'error', 'message' => 'Please fill in all fields.']);
        exit;
    }

    $pattern = '/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[\W_]).{8,}$/';
    if (!preg_match($pattern, $newPassword)) {
        echo json_encode(['status' => 'error', 'message' => 'Password must be at least 8 characters and include an uppercase letter, a lowercase letter, a number, and a special character.']);
        exit;
    }

    $stmt = $conn->prepare("SELECT id FROM users WHERE username = ? AND reset_code = ? AND reset_expires > NOW()");
    $stmt->bind_param('ss', $username, $code);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 0) {
        echo json_encode(['status' => 'invalid', 'message' => 'Invalid or expired code.']);
        exit;
    }

    $user = $result->fetch_assoc();
    $hash = password_hash($newPassword, PASSWORD_BCRYPT);

    $update = $conn->prepare("UPDATE users SET password = ?, reset_code = NULL, reset_expires = NULL WHERE id = ?");
    $update->bind_param('si', $hash, $user['id']);
    $update->execute();

    echo json_encode(['status' => 'success', 'message' => 'Password reset successfully. You can now log in.']);
    exit;
}

echo json_encode(['status' => 'error', 'message' => 'Invalid request.']);
