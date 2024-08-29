<?php

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Define recipient email address
    $to = "samit96097@gmail.com.com"; // Change this to your desired recipient email address

    // Extract form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Construct email headers
    $headers = "From: $name <$email>\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    // Email subject
    $subject = "New Message from $name";

    // Construct email body
    $body = "<html><body>";
    $body .= "<h2>New Message</h2>";
    $body .= "<p><strong>Name:</strong> $name</p>";
    $body .= "<p><strong>Email:</strong> $email</p>";
    $body .= "<p><strong>Message:</strong><br>$message</p>";
    $body .= "</body></html>";

    // Send email
    if (mail($to, $subject, $body, $headers)) {
        // Email sent successfully
        echo "<p>Thank you for your message, $name! We will get back to you shortly.</p>";
        echo "<script>window.location.href = 'index.html';</script>"; // Redirect to index.html
    } else {
        // Failed to send email
        echo "<p>Oops! Something went wrong. Please try again later.</p>";
    }
} else {
    // If the form was not submitted, redirect to the form page
    header("Location: index.html");
    exit;
}

?>

