<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require '../PHPMailer/src/Exception.php';
require '../PHPMailer/src/PHPMailer.php';
require '../PHPMailer/src/SMTP.php';

// Create a new PHPMailer instance
$mail = new PHPMailer;

// Enable debugging (remove this line for production)
$mail->SMTPDebug = 3;

// Set mailer to use SMTP
$mail->isSMTP();

// SMTP configuration for Gmail
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'rushtech69@gmail.com';
$mail->Password = 'bkxbdhaurkfqdqqo';
$mail->SMTPSecure = 'tls'; // Use 'tls' if you want to use STARTTLS encryption
$mail->Port = 587;

// Set sender and recipient
$mailsub = "Feedback from ".$_POST['sender'];
$mailtitle = "Feedback - Techno 2023 | FOE-UOR ";
$mail->setFrom($_POST['email'], $mailtitle);
$mail->addAddress('techno23@sudeeraperera.com'); // Replace with your receiving email address

$emailbody = "From: ".$_POST['sender']."\n\nEmail: ".$_POST['email']."\n\nMessage: ".$_POST['message'];

$mail->Subject = $mailsub;
$mail->Body = $emailbody; // Assuming the message field is named 'message'


if ($mail->send()) {
    echo 'ok';
    
} else {
    echo 'not ok';
}



