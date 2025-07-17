<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);
    
    // Validate inputs
    $errors = [];
    
    if (empty($name)) {
        $errors[] = "Name is required";
    }
    
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Valid email is required";
    }
    
    if (empty($message)) {
        $errors[] = "Message is required";
    }
    
    // If no errors, proceed with sending email
    if (empty($errors)) {
        $to = "info@optimahealthpath.com"; // Replace with your actual email
        $subject = "New Contact Form Submission - Optima Health Path";
        
        $email_content = "New contact form submission:\n\n";
        $email_content .= "Name: " . $name . "\n";
        $email_content .= "Email: " . $email . "\n";
        $email_content .= "Message:\n" . $message . "\n";
        
        $headers = "From: " . $email . "\r\n";
        $headers .= "Reply-To: " . $email . "\r\n";
        $headers .= "X-Mailer: PHP/" . phpversion();
        
        // Send email
        if (mail($to, $subject, $email_content, $headers)) {
            $response = [
                'status' => 'success',
                'message' => 'Thank you for your message. We will get back to you soon!'
            ];
        } else {
            $response = [
                'status' => 'error',
                'message' => 'Sorry, there was an error sending your message. Please try again later.'
            ];
        }
    } else {
        $response = [
            'status' => 'error',
            'message' => 'Please correct the following errors: ' . implode(', ', $errors)
        ];
    }
    
    // Return JSON response
    header('Content-Type: application/json');
    echo json_encode($response);
    exit;
}
?>
