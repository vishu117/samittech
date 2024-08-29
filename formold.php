<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    // Perform basic form validation
    if (empty($name) || empty($email) || empty($message)) {
        // Handle empty fields
        echo "Please fill in all required fields.";
    } else {
        // Further validation and processing
        
        // Send email
        $to = "samit96097@gmail.com"; // Change this to your email address
        $subject = "New message from $name";
        $body = "Name: $name\nEmail: $email\nMessage: $message";
        
        if (mail($to, $subject, $body)) {
            echo "Your message has been sent successfully!";
        } else {
            echo "There was an error sending your message.";
        }
        
        // You can also save the form data to a database
        
        // Redirect the user to a thank you page
        // header("Location: thank_you.php");
    }
}
?>

