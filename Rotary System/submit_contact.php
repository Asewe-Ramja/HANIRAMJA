<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Email recipient and content
    $to = "info@rotarycollege.com"; // Replace with the actual email address
    $headers = "From: $email";
    $email_body = "You have received a new message from $name.\n\n" .
                  "Subject: $subject\n\n" .
                  "Message:\n$message";

    // Send email
    if (mail($to, $subject, $email_body, $headers)) {
        echo "Thank you for reaching out. Your message has been sent successfully.";
    } else {
        echo "Sorry, there was an error sending your message. Please try again later.";
    }
}
?>