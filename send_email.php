<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Form data processing
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $destination = htmlspecialchars($_POST['destination']);
    $adults = htmlspecialchars($_POST['adults']);
    $children = htmlspecialchars($_POST['children']);
    $start_date = htmlspecialchars($_POST['start-date']);
    $end_date = htmlspecialchars($_POST['end-date']);
    $accommodation = htmlspecialchars($_POST['accommodation']);
    $pickup = htmlspecialchars($_POST['pickup']);
    $dietary = htmlspecialchars($_POST['dietary']);
    $special_requests = htmlspecialchars($_POST['special-requests']);
    $payment = htmlspecialchars($_POST['payment']);
    $contact_method = htmlspecialchars($_POST['contact-method']);
    $subscribe = isset($_POST['subscribe']) ? "Yes" : "No";

    // Email recipient
    $to = "jargatours@gmail.com";  // Change this to your email address
    $subject = "(Jarga Tours) New Booking Request from " . $name; 

    // HTML email content
    $message = "
    <html>
    <head>
        <title>Booking Request</title>
        <style>
            body { font-family: Arial, sans-serif; color: #333; }
            table { width: 100%; border-collapse: collapse; }
            th, td { padding: 8px; text-align: left; border-bottom: 1px solid #ddd; }
            th { background-color: #f3f8fc; color: #007BFF; }
        </style>
    </head>
    <body>
        <h2>New Booking Request</h2>
        <p>Here are the details:</p>
        <table>
            <tr><th>Full Name</th><td>{$name}</td></tr>
            <tr><th>Email</th><td>{$email}</td></tr>
            <tr><th>Phone</th><td>{$phone}</td></tr>
            <tr><th>Destination</th><td>{$destination}</td></tr>
            <tr><th>Adults</th><td>{$adults}</td></tr>
            <tr><th>Children</th><td>{$children}</td></tr>
            <tr><th>Start Date</th><td>{$start_date}</td></tr>
            <tr><th>End Date</th><td>{$end_date}</td></tr>
            <tr><th>Accommodation</th><td>{$accommodation}</td></tr>
            <tr><th>Airport Pickup</th><td>{$pickup}</td></tr>
            <tr><th>Dietary Restrictions</th><td>{$dietary}</td></tr>
            <tr><th>Special Requests</th><td>{$special_requests}</td></tr>
            <tr><th>Payment Method</th><td>{$payment}</td></tr>
            <tr><th>Preferred Contact Method</th><td>{$contact_method}</td></tr>
            <tr><th>Subscribe to Newsletter</th><td>{$subscribe}</td></tr>
        </table>
        <p>Please contact the user promptly to confirm their booking.</p>
    </body>
    </html>
    ";

    // Set content-type headers for HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "From: info@jargatours.com" . "\r\n";  // Replace with a domain email

    // Send email
    if (mail($to, $subject, $message, $headers)) {
        echo "<!DOCTYPE html>
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
            </div>
        </body>
        </html>";
    } else {
        echo "<p>Sorry, there was an issue with your booking request. Please try again later.</p>";
    }
}
?>
