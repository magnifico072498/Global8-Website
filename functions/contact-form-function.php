<style>
    /* Alert Styles */
    .custom-alertD {
        position: relative;
        padding: 15px;
        margin: 10px 0;
        border: 1px solid transparent;
        border-radius: 4px;
        background-color: #dc3545;
        color: #FFF;
        font-family: Arial, sans-serif;
        font-size: 16px;
    }

    /* Alert Styles */
    .custom-alertS {
        position: relative;
        padding: 15px;
        margin: 10px 0;
        border: 1px solid transparent;
        border-radius: 4px;
        background-color: #28a745;
        color: #FFF;
        font-family: Arial, sans-serif;
        font-size: 16px;
    }

    .custom-alert i{
        color: #FFF;
    }


    .custom-alert .close-btn {
        position: absolute;
        top: 10px;
        right: 10px;
        background: none;
        border: none;
        font-size: 20px;
        line-height: 1;
        color: #856404;
        cursor: pointer;
    }

    .custom-alert .close-btn:hover {
        color: #533f03;
        /* Darker shade on hover */
    }

    .hidden {
        display: none;
    }
</style>
<!--=============== REMIXICONS ===============-->
<link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet">
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize user inputs
    $Name = htmlspecialchars($_POST['name']);
    $Email = htmlspecialchars($_POST['email']);
    $Subject = htmlspecialchars($_POST['subject']);
    $Message = htmlspecialchars($_POST['message']);

    $to = "info@global8.com.ph";
    $subject = "New Customer Inquiry";

    // HTML email content
    $body =  "
        <hr style='border: 1px solid #C68E17;'>  
        <div style='font-family:Arial, sans-serif; color:black; padding:15px;'>
            <table style='width:100%; border-collapse:collapse; background-color:#f9f9f9; margin-top:20px;'>
                <thead>
                    <tr>
                        <center>
                            <h3 style='background-color:#2A2A2A;padding:25px 0;font-size:18px; font-family:Arial, sans-serif; text-transform:uppercase; margin:0; color:#C68E17;'>
                            NEW CUSTOMER INQUIRY FROM GLOBAL8 FINANCE CORPORATION'S WEBSITE CONTACT FORM:</h3>
                        </center>
                    </tr>
                    <tr style='background-color:#C68E17; color:white;'>
                        <th style='padding:10px; text-align:left; font-size:14px; text-transform:uppercase;'>Name</th>
                        <th style='padding:10px; text-align:left; font-size:14px; text-transform:uppercase;'>Email Address</th>
                        <th style='padding:10px; text-align:left; font-size:14px; text-transform:uppercase;'>Subject</th>
                        <th style='padding:10px; text-align:left; font-size:14px; text-transform:uppercase;'>Message</th>
                    </tr>
                </thead>
                <tbody>
                    <tr style='border-bottom:1px solid #ddd;'>
                        <td style='padding:10px; color:#333;'>$Name</td>
                        <td style='padding:10px; color:#333;'>$Email</td>
                        <td style='padding:10px; color:#333;'>$Subject</td>
                        <td style='padding:10px; color:#333;'>$Message</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <br>
        <hr style='border: 1px solid #C68E17;'>";

    // Set headers for HTML email
    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8\r\n";
    $headers .= "From: creative@global8.com.ph\r\n"; // Change to your domain
    $headers .= "Reply-To: $Email\r\n";

    // Send the email
    if (mail($to, $subject, $body, $headers)) {
        echo '<div id="customAlertS" class="custom-alertS">
              Something went wrong. Please try again later.
              <button class="close-btn" aria-label="Close" onclick="closeAlert()">
              <i class="ri-close-large-line"></i></button></div>';
    } else {
        echo '<div id="customAlertD" class="custom-alertD">
              Something went wrong. Please try again later.
              <button class="close-btn" aria-label="Close" onclick="closeAlert()">
              <i class="ri-close-large-line"></i></button></div>';
    }
}
?>
<script>
    // Close alert function
    function closeAlert1() {
        const alert1 = document.getElementById('customAlertS');
        alert1.classList.add('hidden');
    }
    function closeAlert2() {
        const alert2 = document.getElementById('customAlertD');
        alert2.classList.add('hidden');
    }
</script>