<?php
// Start output buffering
ob_start();

// Function to sanitize inputs
function sanitize($data) {
    return htmlspecialchars(trim($data));
}

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve and sanitize form data
    $first_name = sanitize($_POST['first_name']);
    $last_name = sanitize($_POST['last_name']);
    $email = sanitize($_POST['email']);
    $phone = sanitize($_POST['phone']);
    $arrival_date = sanitize($_POST['arrival_date']);
    $stay_duration = sanitize($_POST['stay_duration']);
    $adults = sanitize($_POST['adults']);
    $children = sanitize($_POST['children']);
    $interested = sanitize($_POST['interested']);
    $message = sanitize($_POST['message']);

    // Email details
    $to = "diphonjully@gmail.com,jargatours@gmail.com"; // Replace with your email address
    $subject = "New Booking Request from $first_name $last_name";

    // HTML email content
    $body = "
    <html>
    <head>
        <title>New Booking Request</title>
        <style>
            body { font-family: Arial, sans-serif; background-color: #f4f4f4; padding: 20px; }
            .container { max-width: 600px; margin: auto; background: white; padding: 20px; border-radius: 8px; box-shadow: 0 0 10px rgba(0,0,0,0.1); }
            h2 { color: #333; }
            p { margin: 10px 0; }
        </style>
    </head>
    <body>
        <div class='container'>
            <h2>Booking Details</h2>
            <p><strong>First Name:</strong> $first_name</p>
            <p><strong>Last Name:</strong> $last_name</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Phone:</strong> $phone</p>
            <p><strong>Arrival Date:</strong> $arrival_date</p>
            <p><strong>Stay Duration:</strong> $stay_duration</p>
            <p><strong>No. of Adults:</strong> $adults</p>
            <p><strong>No. of Children:</strong> $children</p>
            <p><strong>Interested In:</strong> $interested</p>
            <p><strong>Message:</strong> $message</p>
        </div>
    </body>
    </html>
    ";

    // Set headers
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "From: info@jargatours.com" . "\r\n"; // Change to a valid sender email

    // Send the email
    if (mail($to, $subject, $body, $headers)) {
        // Display a success message
        echo "
        <!DOCTYPE html>
        <html lang='en'>
        <head>
            <meta charset='UTF-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <title>Booking Confirmation</title>
            <style>
                body { font-family: Arial, sans-serif; text-align: center; background-color: #f3f8fc; padding: 50px; color: #333; }
                .confirmation { background-color: #fff; padding: 20px; border-radius: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15); max-width: 600px; margin: auto; }
                h1 { color: #007BFF; }
                p { font-size: 18px; }
            </style>
        </head>
        <body>
            <div class='confirmation'>
                <h1>Thank You, $name!</h1>
                <p>Your booking request has been successfully submitted. We will contact you shortly at $email to confirm your booking details.</p>
                <p>For urgent inquiries, please call us at our contact number.</p>
                <p>Jarga tours</p>
            </div>
        </body>
        </html>
        ";
    } else {
        // Display an error message
        echo "
        <div class='container'>
            <h2>Oops!</h2>
            <p>Sorry, something went wrong. Please try again later.</p>
        </div>
        ";
    }
}

// End output buffering and flush output
ob_end_flush();
?>
