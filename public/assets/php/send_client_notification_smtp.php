<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require __DIR__ . '/vendor/autoload.php'; // Path to PHPMailer

function sendClientNotification($leadData) {
    $mail = new PHPMailer(true);
    $mail->CharSet = 'UTF-8';
    $mail->Encoding = 'base64';

    try {
        // SMTP config
        $mail->isSMTP();
        $mail->Host = 'smtp.hostinger.com';      // ✅ Use your provider's SMTP server
        $mail->SMTPAuth = true;
        $mail->Username = 'info@homagency.ae';   // ✅ Your full email address
        $mail->Password = 'Hamdi123@!';          // ✅ Your real email password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // From & To
        $mail->setFrom('info@homagency.ae', 'HOM Agency');
        $mail->addAddress(CLIENT_NOTIFICATION_EMAIL);

        // Optional CCs & BCCs
        // $mail->addCC('example@domain.extension');
        $mail->addBCC('salahjb80@gmail.com');

        // Subject and Body
        $rawProject = trim($leadData['project'] ?? '');
        if (empty($rawProject)) {
            $rawProject = '(Unknown Project)';
        }

        $subject = ($rawProject === 'General Inquiry')
            ? 'New General Inquiry'
            : 'New Lead for ' . $rawProject;

        $body = "A new lead has been submitted with the following details:\n\n";
        $body .= "Name: "    . $leadData['name']    . "\n";
        $body .= "Phone: "   . $leadData['phone']   . "\n";
        $body .= "Email: "   . $leadData['email']   . "\n";
        $body .= "Message: " . $leadData['message'] . "\n";
        $body .= "Project: " . $rawProject . "\n";

        $mail->Subject = $subject;
        $mail->Body = $body;

        $mail->send();
        error_log("✅ PHPMailer: Email sent successfully.");
    } catch (Exception $e) {
        error_log("❌ PHPMailer Error: " . $mail->ErrorInfo);
    }
}
