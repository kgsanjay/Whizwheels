<?php
// assets/inc/process-booking.php

// --- CONFIGURATION ---
// IMPORTANT: Replace with your email address where you want to receive booking notifications.
$recipient_email = "contact@whizwheels.in"; // <--- EDIT THIS EMAIL

// IMPORTANT: Replace with your WhatsApp number (country code without '+').
$whatsapp_number = "918660989586"; // <--- EDIT THIS NUMBER
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
    
    // Build a well-formatted HTML email body
    $email_body = "
    <html>
    <head>
        <title>New Bike Booking Request</title>
        <style>
            body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
            .container { width: 100%; max-width: 600px; margin: 20px auto; padding: 20px; border: 1px solid #ddd; border-radius: 5px; }
            h2 { color: #2c3e50; }
            table { width: 100%; border-collapse: collapse; }
            th, td { padding: 10px; text-align: left; border-bottom: 1px solid #eee; }
            th { background-color: #f7f7f7; }
        </style>
    </head>
    <body>
        <div class='container'>
            <h2>New Bike Booking Request!</h2>
            <p>You have received a new booking inquiry from your website. Please see the details below and contact the customer to confirm.</p>
            <table>
                <tr>
                    <th>Pickup Location:</th>
                    <td>" . htmlspecialchars($location) . "</td>
                </tr>
                <tr>
                    <th>Pickup Date:</th>
                    <td>" . htmlspecialchars($pickup_date) . "</td>
                </tr>
                <tr>
                    <th>Dropoff Date:</th>
                    <td>" . htmlspecialchars($dropoff_date) . "</td>
                </tr>
                <tr>
                    <th>Bike Type:</th>
                    <td>" . htmlspecialchars($bike_type) . "</td>
                </tr>
            </table>
        </div>
    </body>
    </html>
    ";
    
    // Set email headers for HTML content
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "From: no-reply@whizwheels.bike" . "\r\n";

    // Use PHP's mail() function to send the email
    mail($recipient_email, $subject, $email_body, $headers);


    // --- 2. PREPARE WHATSAPP LINK ---
    // Use emojis and formatting for a cleaner WhatsApp message
    $whatsapp_message = "🎉 *New Bike Booking Request* 🎉\n\n";
    $whatsapp_message .= "📍 *Location:* " . $location . "\n";
    $whatsapp_message .= "🗓️ *Pickup Date:* " . $pickup_date . "\n";
    $whatsapp_message .= "🗓️ *Dropoff Date:* " . $dropoff_date . "\n";
    $whatsapp_message .= "🚲 *Bike Type:* " . $bike_type;

    $whatsapp_url = "https://wa.me/{$whatsapp_number}?text=" . urlencode($whatsapp_message);


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
