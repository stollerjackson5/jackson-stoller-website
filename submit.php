<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    // Email recipient (your email address)
    $to = 'stollerjackson5@gmail.com';
    
    // Email subject
    $subject = 'New message from your website';
    
    // Email message
    $email_message = "Name: $name\n";
    $email_message .= "Email: $email\n";
    $email_message .= "Message:\n$message";
    
    // Send email
    mail($to, $subject, $email_message);
    
    // Redirect back to contact page
    header('Location: contact.html');
    exit;
} else {
    // If the form is not submitted, redirect to the contact page
    header('Location: contact.html');
    exit;
}
?>
