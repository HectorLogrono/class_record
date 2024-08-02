<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

// Function to generate a 6-digit confirmation code
function generateConfirmationCode() {
    return rand(100000, 999999);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'hlogrono4@gmail.com';
        $mail->Password = 'bxqr zqtv teto dbin'; // Consider using an App Password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; // Use 'ssl' for older PHPMailer versions
        $mail->Port = 465;

        $mail->setFrom('hlogrono4@gmail.com', 'Hecky');
        $mail->addAddress($email);

        $mail->isHTML(true);
        $mail->Subject = 'Registration Confirmation';
        
        // Generate and include the confirmation code in the email body
        $confirmationCode = generateConfirmationCode();
        $mail->Body = "Hello $username,<br><br>Thank you for registering. Your confirmation code is: <strong>$confirmationCode</strong>";

        $mail->send();

        echo 'Email sent successfully.';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
} else {
    echo 'Invalid request method.';
}
?>
