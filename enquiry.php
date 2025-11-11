<?php

$name    = $_POST['name'];
$email   = $_POST['email'];
$mobile  = $_POST['phone'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$to = 'shakshambirdnetservice@gmail.com';

// Subject of email
$mail_subject = 'Enquiry from Shaksham Birdnet Company Website';

// Email headers
$headers  = "From: info@antibirdsnet.com\r\n";
$headers .= "Reply-To: " . strip_tags($email) . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

// Email body
$body  = '<html><body>';
$body .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
$body .= "<tr style='background: #eee;'><td><strong>Name:</strong> </td><td>" . strip_tags($name) . "</td></tr>";
$body .= "<tr style='background: #eee;'><td><strong>Email:</strong> </td><td>" . strip_tags($email) . "</td></tr>";
$body .= "<tr style='background: #eee;'><td><strong>Mobile:</strong> </td><td>" . strip_tags($mobile) . "</td></tr>";
$body .= "<tr style='background: #eee;'><td><strong>Subject:</strong> </td><td>" . strip_tags($subject) . "</td></tr>";
$body .= "<tr style='background: #eee;'><td><strong>Message:</strong> </td><td>" . strip_tags($message) . "</td></tr>";
$body .= "</table>";
$body .= "</body></html>";

// Send email
if (mail($to, $mail_subject, $body, $headers)) {
    echo "<script>alert('Thank you for your interest. We will get back to you soon');</script>";
    echo "<script>window.location='index.html'</script>";
} else {
    echo 'There was a problem sending the email.';
}

?>
