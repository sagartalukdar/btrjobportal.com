<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

// Initialize PHPMailer
$mail = new PHPMailer(true); // Passing `true` enables exceptions

try {
    // Connect to your database
    $conn = new PDO("mysql:host=localhost;dbname=btrjob_admin", "root", "");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Retrieve email from form submission
    $email = $_POST['email'];

    // Check if the email already exists in the database
    $stmt = $conn->prepare("SELECT * FROM email_verification WHERE email = :email");
    $stmt->bindParam(':email', $email);
    $stmt->execute();
    $existingUser = $stmt->fetch(PDO::FETCH_ASSOC);

    // Generate OTP
    $otp = mt_rand(100000, 999999);

    if ($existingUser) {
        // If user exists, update OTP
        $stmt = $conn->prepare("UPDATE email_verification SET otp = :otp WHERE email = :email");
        $stmt->bindParam(':otp', $otp);
        $stmt->bindParam(':email', $email);
        $stmt->execute();
    } else {
        // If user does not exist, insert new record
        $stmt = $conn->prepare("INSERT INTO email_verification (email, otp) VALUES (:email, :otp)");
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':otp', $otp);
        $stmt->execute();
    }

    // Send email with OTP
    $mail->isSMTP();
    $mail->SMTPAuth = false;
    $mail->SMTPSecure = 'tls';
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 587;
    $mail->Username = 'your-email@gmail.com';
    $mail->Password = 'your-password';
    $mail->setFrom('pranjal12roy@gmail.com', 'smartbtr');
    $mail->addAddress($email); // Recipient's email address
    $mail->Subject = 'Email Verification OTP';
    $mail->Body = 'Your OTP for email verification is: ' . $otp;
    $mail->send();

    echo 'Verification code sent successfully to ' . $email;
} catch (PDOException $e) {
    echo 'Database Error: ' . $e->getMessage();
} catch (Exception $e) {
    echo 'Error sending email: ' . $e->getMessage();
}

?>
