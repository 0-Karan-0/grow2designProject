<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Form data
    $firstName = htmlspecialchars($_POST['firstName']);
    $lastName = htmlspecialchars($_POST['lastName']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $inquiry = htmlspecialchars($_POST['inquiry']);
    $message = htmlspecialchars($_POST['message']);
    $newsletter = isset($_POST['newsletter']) ? 'Yes' : 'No';
    
    // Admin email (Client ka Hostinger email)
    $to = "karan.k1654@gmail.com";
    
    // Email subject
    $subject = "New Contact Form Submission - " . $inquiry;
    
    // Email headers
    $headers = "From: " . $email . "\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
    
    // Email body
    $emailBody = "
    <html>
    <head>
        <style>
            body { font-family: Arial, sans-serif; }
            .container { max-width: 600px; margin: 0 auto; }
            .header { background: #f8f9fa; padding: 20px; text-align: center; }
            .content { padding: 20px; }
            .field { margin-bottom: 10px; }
            .label { font-weight: bold; color: #333; }
        </style>
    </head>
    <body>
        <div class='container'>
            <div class='header'>
                <h2>New Website Contact Form Submission</h2>
            </div>
            <div class='content'>
                <div class='field'><span class='label'>Name:</span> $firstName $lastName</div>
                <div class='field'><span class='label'>Email:</span> $email</div>
                <div class='field'><span class='label'>Phone:</span> " . ($phone ? $phone : 'Not provided') . "</div>
                <div class='field'><span class='label'>Inquiry Type:</span> $inquiry</div>
                <div class='field'><span class='label'>Newsletter Subscription:</span> $newsletter</div>
                <div class='field'><span class='label'>Message:</span><br>" . nl2br($message) . "</div>
                <div class='field'><span class='label'>Submitted:</span> " . date('Y-m-d H:i:s') . "</div>
            </div>
        </div>
    </body>
    </html>
    ";
    
    // Send email
    if (mail($to, $subject, $emailBody, $headers)) {
        echo "success";
    } else {
        echo "error";
    }
} else {
    header("Location: ../index.html");
    exit();
}
?>