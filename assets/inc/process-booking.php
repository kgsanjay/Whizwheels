<?php
// assets/inc/process-booking.php

// --- CONFIGURATION ---
// IMPORTANT: Replace with your email address where you want to receive booking notifications.
$recipient_email = "kgsanjay.kallabbe@gmail.com"; // <--- EDIT THIS EMAIL

// IMPORTANT: Replace with your WhatsApp number (country code without '+').
$whatsapp_number = "917975365475"; // <--- EDIT THIS NUMBER
// --- END CONFIGURATION ---


// Set the response header to indicate JSON content
header('Content-Type: application/json');

// Check if the form was submitted using the POST method
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Sanitize and retrieve form data to prevent security issues
    $location = filter_input(INPUT_POST, 'pickup_location', FILTER_SANITIZE_STRING);
    $pickup_date = filter_input(INPUT_POST, 'pickup_date', FILTER_SANITIZE_STRING);
    $dropoff_date = filter_input(INPUT_POST, 'dropoff_date', FILTER_SANITIZE_STRING);
    $bike_type = filter_input(INPUT_POST, 'bike_type', FILTER_SANITIZE_STRING);

    // --- 1. SEND EMAIL ---
    $subject = "New Bike Booking Request from Whizwheels";
    
    // Build the email content
    $email_body = "You have received a new bike booking request:\n\n";
    $email_body .= "Pickup Location: " . $location . "\n";
    $email_body .= "Pickup Date: " . $pickup_date . "\n";
    $email_body .= "Dropoff Date: " . $dropoff_date . "\n";
    $email_body .= "Bike Type: " . $bike_type . "\n";
    
    // Set email headers
    $headers = "From: no-reply@whizwheels.bike" . "\r\n" .
               "Reply-To: no-reply@whizwheels.bike" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    // Use PHP's mail() function to send the email
    // Note: This requires your web server to be configured to send mail.
    mail($recipient_email, $subject, $email_body, $headers);


    // --- 2. PREPARE WHATSAPP LINK ---
    // %0A is a URL-encoded newline character
    $whatsapp_message = "New Bike Booking Request!%0A%0A"; 
    $whatsapp_message .= "*Location:* " . urlencode($location) . "%0A";
    $whatsapp_message .= "*Pickup Date:* " . urlencode($pickup_date) . "%0A";
    $whatsapp_message .= "*Dropoff Date:* " . urlencode($dropoff_date) . "%0A";
    $whatsapp_message .= "*Bike Type:* " . urlencode($bike_type);

    $whatsapp_url = "https://wa.me/{$whatsapp_number}?text={$whatsapp_message}";


    // --- 3. SEND RESPONSE BACK TO JAVASCRIPT ---
    // Send a success response with the WhatsApp URL
    echo json_encode(['success' => true, 'whatsapp_url' => $whatsapp_url]);
    exit();

} else {
    // If accessed directly, send an error response
    echo json_encode(['success' => false, 'message' => 'Invalid request method.']);
    exit();
}
?>
