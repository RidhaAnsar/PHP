<?php
// Set the recipient email address
$to = "recipient@example.com";

// Set the email subject
$subject = "Test Email";

// Set the email message
$message = "This is a test email sent from PHP.";

// Set additional headers
$headers = "From: sender@example.com\r\n";
$headers .= "Reply-To: sender@example.com\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

// Send the email
if (mail($to, $subject, $message, $headers)) {
    echo "Email sent successfully.";
} else {
    echo "Failed to send email.";
}
?>
