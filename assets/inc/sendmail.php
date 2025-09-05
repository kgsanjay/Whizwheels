<?php
// assets/inc/process-contact.php

// --- CONFIGURATION ---
// IMPORTANT: Replace with your email address where you want to receive messages.
$recipient_email = "contact@whizwheels.in"; // <--- EDIT THIS EMAIL if needed

// IMPORTANT: This is the "From" address that will appear in your inbox.
// Using an email from your own domain is best for deliverability.
$from_email = "no-reply@whizwheels.in";
// --- END CONFIGURATION ---


// Set the response header to indicate JSON content
header('Content-Type: application/json');

// Only process POST requests.
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Sanitize and retrieve all form data
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING);
    $user_subject = filter_input(INPUT_POST, 'subject', FILTER_SANITIZE_STRING);
    $message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);

    // --- VALIDATION ---
    // Check that all required data was sent and the email is valid.
    if ( empty($name) || empty($phone) || empty($user_subject) || empty($message) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Set a 400 (bad request) response code and send a JSON error.
        http_response_code(400);
        echo json_encode([
            'success' => false, 
            'message' => 'Please fill out all fields and use a valid email address.'
        ]);
        exit;
    }

    // --- PREPARE EMAIL ---
    // Use the user's subject, but add a prefix for easy filtering in your inbox.
    $subject = "[Whizwheels Contact] - " . $user_subject;
    
    // Build a well-formatted HTML email body to include the new fields
    $email_body = "
    <html>
    <head>
        <title>New Website Contact Message</title>
        <style>
            body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
            .container { width: 100%; max-width: 600px; margin: 20px auto; padding: 20px; border: 1px solid #ddd; border-radius: 8px; box-shadow: 0 2px 5px rgba(0,0,0,0.05); }
            h2 { color: #2c3e50; border-bottom: 2px solid #3498db; padding-bottom: 10px; }
            .field { margin-bottom: 15px; }
            .field strong { display: block; color: #555; margin-bottom: 5px; }
            .message-box { background-color: #f9f9f9; border: 1px solid #eee; padding: 15px; border-radius: 5px; white-space: pre-wrap; word-wrap: break-word; }
        </style>
    </head>
    <body>
        <div class='container'>
            <h2>New Website Contact Message!</h2>
            
            <div class='field'>
                <strong>Subject:</strong> " . htmlspecialchars($user_subject) . "
            </div>
             <div class='field'>
                <strong>From:</strong> " . htmlspecialchars($name) . "
            </div>
            <div class='field'>
                <strong>Email:</strong> " . htmlspecialchars($email) . "
            </div>
             <div class='field'>
                <strong>Phone:</strong> " . htmlspecialchars($phone) . "
            </div>
            <div class='field'>
                <strong>Message:</strong>
                <div class='message-box'>" . nl2br(htmlspecialchars($message)) . "</div>
            </div>
        </div>
    </body>
    </html>
    ";
    
    // Set email headers for HTML content and good deliverability
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "From: Whizwheels Website <" . $from_email . ">" . "\r\n";
    $headers .= "Reply-To: " . $email . "\r\n"; // <-- This is key! Lets you reply directly to the user.

    // Use PHP's mail() function to send the email.
    if (@mail($recipient_email, $subject, $email_body, $headers)) {
        // Send a success response back to the JavaScript
        echo json_encode([
            'success' => true, 
            'message' => 'Thanks for contacting us! We will get back to you shortly.'
        ]);
    } else {
        // If mail() fails, send a server error response.
        http_response_code(500);
        echo json_encode([
            'success' => false, 
            'message' => 'Oops! Something went wrong and we couldn\'t send your message.'
        ]);
    }
    exit();

} else {
    // If accessed directly or with a method other than POST, send an error.
    http_response_code(403);
    echo json_encode([
        'success' => false, 
        'message' => 'Invalid request method.'
    ]);
    exit();
}
?>

