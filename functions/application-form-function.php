<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize user inputs
    $FullName = htmlspecialchars($_POST['fullname']);
    $Contact = htmlspecialchars($_POST['contact']);
    $Email = htmlspecialchars($_POST['email']);
    $BusinessType = htmlspecialchars($_POST['business_type']);
    $Account = htmlspecialchars($_POST['account']);

    $to = "loans@global8.com.ph";
    $subject = "LOAN INQUIRY";

    // HTML email content
    $body = "
    <!DOCTYPE html>
    <html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>New Loan Message</title>
        <style>
            body { font-family: Arial, sans-serif; background-color: #f4f4f4; }
            .container { width: 100%; padding: 20px; }
            .email-content { background-color: #ffffff; border: 1px solid #ddd; border-radius: 5px; padding: 20px; }
            h3 { background-color: #2A2A2A; color: #C68E17; padding: 15px; text-align: center; font-size: 18px; margin: 0; }
            table { width: 100%; border-collapse: collapse; background-color: #f9f9f9; margin-top: 20px; }
            th, td { padding: 10px; text-align: left; font-size: 14px; }
            th { background-color: #C68E17; color: white; text-transform: uppercase; }
            hr { border: 1px solid #C68E17; }
        </style>
    </head>
    <body>
        <div class='container'>
            <div class='email-content'>
                <h3>A NEW LOAN MESSAGE HAS BEEN SUBMITTED THROUGH YOUR WEBSITE'S APPLICATION FORM:</h3>
                <hr>
                <table>
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Contact No.</th>
                            <th>Email Address</th>
                            <th>Business Type</th>
                            <th>Checking Account</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>$FullName</td>
                            <td>$Contact</td>
                            <td>$Email</td>
                            <td>$BusinessType</td>
                            <td>$Account</td>
                        </tr>
                    </tbody>
                </table>
                <hr>
            </div>
        </div>
    </body>
    </html>";


    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8\r\n";
    $headers .= "From: creative@global8.com.ph\r\n"; 
    $headers .= "Reply-To: $Email\r\n";

    // Send the email
    if (mail($to, $subject, $body, $headers)) {
        include 'app-success.html';    
    } else {
        include 'error.html';
    }
}
?>

