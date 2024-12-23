<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Load PHPMailer
require 'vendor/autoload.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize inputs
    $fullName = htmlspecialchars($_POST['full-name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $dob = htmlspecialchars($_POST['dob']);
    $permanentAddress = htmlspecialchars($_POST['permanent-address']);
    $currentAddress = htmlspecialchars($_POST['current-address']);
    $position = htmlspecialchars($_POST['position']);
    $startDate = htmlspecialchars($_POST['start-date']);
    $salary = htmlspecialchars($_POST['salary']);
    $whyHireYou = htmlspecialchars($_POST['why-hire-you']);

    // Handle file uploads
    $resumeFile = $_FILES['resume'];
    $portfolioFile = $_FILES['portfolio'];

    // Validate file uploads
    $allowedTypes = ['application/pdf'];
    if ($resumeFile['error'] !== UPLOAD_ERR_OK || !in_array($resumeFile['type'], $allowedTypes)) {
        echo json_encode(['success' => false, 'message' => 'Invalid resume file. Only PDF is allowed.']);
        exit;
    }
    if ($portfolioFile['error'] !== UPLOAD_ERR_OK || !in_array($portfolioFile['type'], $allowedTypes)) {
        echo json_encode(['success' => false, 'message' => 'Invalid portfolio file.']);
        exit;
    }

    // Rename files
    $resumeFileName = 'resume_' . time() . '_' . $fullName . '.pdf'; // Unique name for resume
    $portfolioFileName = 'portfolio_' . time() . '_' . $fullName . '.pdf'; // Unique name for portfolio


    // Prepare email body
    $emailBody = "
<html>
<head>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 50px;
        }
        .body {
            padding: 20px;
        }
        .container {
            max-width: 600px;
            margin: 40px auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
            border: 1px solid #dddddd;
        }
        h2 {
            color: #333333;
            text-align: left;
            font-size: 24px;
            margin-bottom: 30px;
            font-weight: bold;
        }
        .section {
            margin-bottom: 15px;
            padding: 15px;
            background-color: #f9f9f9;
            border-radius: 4px;
            border-left: 5px solid #b38b00;
        }
        .section p {
            margin: 0;
            font-size: 16px;
            color: #444444;
        }
        .section strong {
            font-weight: bold;
            color: #222222;
        }
        .footer {
            margin-top: 30px;
            text-align: center;
            font-size: 14px;
            color: #666666;
            line-height: 1.5;
        }
    </style>
</head>
<body>
    <div class='body'>
    <div class='container'>
        <h2>Job Application Details</h2>
        
        <div class='section'>
            <p><strong>Full Name:</strong> {$fullName}</p>
        </div>
        <div class='section'>
            <p><strong>Email:</strong> {$email}</p>
        </div>
        <div class='section'>
            <p><strong>Phone:</strong> {$phone}</p>
        </div>
        <div class='section'>
            <p><strong>Date of Birth:</strong> {$dob}</p>
        </div>
        <div class='section'>
            <p><strong>Permanent Address:</strong> {$permanentAddress}</p>
        </div>
        <div class='section'>
            <p><strong>Current Address:</strong> {$currentAddress}</p>
        </div>
        <div class='section'>
            <p><strong>Position Applied For:</strong> {$position}</p>
        </div>
        <div class='section'>
            <p><strong>Available Start Date:</strong> {$startDate}</p>
        </div>
        <div class='section'>
            <p><strong>Expected Salary:</strong> {$salary}</p>
        </div>
        <div class='section'>
            <p><strong>Why Hire Me:</strong> {$whyHireYou}</p>
        </div>
        
        <div class='footer'>
            <p>Thank you for reviewing this application. <br>Looking forward to your response.</p>
        </div>
    </div>
    </div>
</body>
</html>
";


    // Send email using PHPMailer
    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'personal.g8fc@gmail.com'; // Replace with your Gmail
        $mail->Password   = 'zsgo qbue vnbc qtxf'; // Use App Password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        // Sender and recipient
        $mail->setFrom('personal.g8fc@gmail.com', 'Job Application from Globa8 Website');
        $mail->addAddress('creative@global8.com.ph', 'Outlook Recipient');
        $mail->addReplyTo($email, $fullName); // Set the applicant's email as the reply-to address

        // Attach renamed files
        $mail->addAttachment($resumeFile['tmp_name'], $resumeFileName);
        $mail->addAttachment($portfolioFile['tmp_name'], $portfolioFileName);

        // Email content
        $mail->isHTML(true);
        $mail->Subject = "Job Application: {$fullName} | {$position}";
        $mail->Body    = $emailBody;

        // Send email
        $mail->send();
        include 'job-app-success.html';    
    } catch (Exception $e) {
        include 'error.html';  
    }
} else {

}
