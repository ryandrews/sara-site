<?php
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo 'Method Not Allowed';
    exit;
}

$name = isset($_POST['name']) ? trim((string)$_POST['name']) : '';
$phone = isset($_POST['phone']) ? trim((string)$_POST['phone']) : '';
$email = isset($_POST['email']) ? trim((string)$_POST['email']) : '';
$messageText = isset($_POST['message']) ? trim((string)$_POST['message']) : '';

$to = "saraasgh@gmail.com";
$subject = "Website Email Inquiry";
$message =
    "Name: " . $name . "\n" .
    "Phone: " . $phone . "\n" .
    "Email: " . $email . "\n" .
    "Message: " . $messageText;

$headers = "From: website@andrewssmiles.com\r\n";
if (!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
    // Sanitize email to prevent header injection
    $cleanEmail = str_replace(["\r", "\n"], '', $email);
    $headers .= "Reply-To: " . $cleanEmail . "\r\n";
}
$headers .= "X-Mailer: PHP/" . phpversion() . "\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

mail($to, $subject, $message, $headers);
?>
Email Sent