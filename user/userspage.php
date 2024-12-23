<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application Status</title>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <style>
        /* Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background-color: #fafafa;
            color: #333;
            line-height: 1.6;
        }

        .container {
            width: 85%;
            max-width: 900px;
            margin: 60px auto;
            padding: 40px;
            background-color: #fff;
            border-radius: 15px;
            box-shadow: 0 6px 25px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        h1 {
            font-size: 2.4rem;
            font-weight: 600;
            color: #333;
            margin-bottom: 25px;
        }

        .status-info {
            font-size: 1.1rem;
            color: #555;
            margin-bottom: 40px;
        }

        .status-badge {
            padding: 12px 28px;
            font-size: 1.1rem;
            color: #fff;
            border-radius: 25px;
            font-weight: 600;
            display: inline-block;
            margin-top: 20px;
        }

        /* Dynamic Badge Colors */
        .status-pending {
            background-color: #ff9800;
        }

        .status-review {
            background-color: #2196f3;
        }

        .status-scheduled {
            background-color: #4caf50;
        }

        .status-accepted {
            background-color: #009688;
        }

        .status-rejected {
            background-color: #f44336;
        }

        .status-closed {
            background-color: #9e9e9e;
        }

        h2 {
            font-size: 1.8rem;
            color: #444;
            margin-top: 50px;
            margin-bottom: 20px;
        }

        .timeline {
            display: flex;
            justify-content: space-between;
            padding: 0;
            list-style: none;
        }

        .timeline li {
            text-align: center;
            position: relative;
            width: 23%;
        }

        .timeline li .dot {
            width: 30px;
            height: 30px;
            background-color: #4caf50;
            border-radius: 50%;
            margin: 0 auto;
            margin-bottom: 10px;
            transition: background-color 0.3s ease;
        }

        .timeline li.pending .dot {
            background-color: #ff9800;
        }

        .timeline li.review .dot {
            background-color: #2196f3;
        }

        .timeline li.scheduled .dot {
            background-color: #4caf50;
        }

        .timeline li.accepted .dot {
            background-color: #009688;
        }

        .timeline li.rejected .dot {
            background-color: #f44336;
        }

        .timeline li.closed .dot {
            background-color: #9e9e9e;
        }

        .timeline li .text {
            font-size: 1rem;
            color: #555;
            margin-top: 10px;
        }

        .timeline li .text span {
            font-weight: bold;
            color: #333;
        }

        .cancel-button {
            width: 200px;
            padding: 10px 20px;
            font-size: 1rem;
            font-weight: bold;
            color: #fff;
            background-color: #f44336;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            margin-top: 30px;
            margin-bottom: 20px;
        }

        .cancel-button:hover {
            background-color: #e53935;
        }

        /* Footer */
        .footer {
            font-size: 0.9rem;
            color: #777;
        }

        .footer a {
            color: #2196f3;
            text-decoration: none;
        }

        /* Media Queries */
        @media (max-width: 1200px) {
            .container {
                width: 90%;
                padding: 30px;
            }

            .timeline li {
                width: 20%;
            }
        }

        @media (max-width: 768px) {
            .container {
                width: 95%;
                padding: 20px;
            }

            h1 {
                font-size: 2rem;
            }

            .timeline {
                flex-direction: column;
                align-items: center;
            }

            .timeline li {
                width: 80%;
                margin-bottom: 25px;
            }

            .cancel-button {
                width: 180px;
            }

            .status-info {
                font-size: 1rem;
            }
        }


        @media (max-width: 480px) {
            .container {
                width: 100%;
                padding: 15px;
            }

            h1 {
                font-size: 1.8rem;
            }

            .timeline {
                flex-direction: column;
                align-items: flex-start;
                padding: 0;
            }

            .timeline li {
                width: 100%;
                margin-bottom: 15px;
                text-align: left;
            }

            .timeline li .dot {
                width: 20px;
                height: 20px;
                margin-right: 10px;
            }

            .timeline li .text {
                font-size: 0.9rem;
            }

            .cancel-button {
                width: 150px;
                font-size: 0.9rem;
            }

            .status-info {
                font-size: 0.9rem;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Application Status</h1>
        <p class="status-info">Hello, <strong>John Doe</strong>. Your application for the position of <strong>Account Manager</strong> is currently:</p>

        <!-- Status Badge -->
        <div class="status">
            <span class="status-badge status-review">Under Review</span>
        </div>

        <!-- Timeline Section -->
        <h2>Application Timeline</h2>
        <ul class="timeline">
            <li class="pending">
                <div class="dot"></div>
                <div class="text">Application Submitted</div>
            </li>
            <li class="review">
                <div class="dot"></div>
                <div class="text">Under Review</div>
            </li>
            <li class="scheduled">
                <div class="dot"></div>
                <div class="text">Interview Scheduled</div>
            </li>
            <li class="accepted">
                <div class="dot"></div>
                <div class="text">Accepted</div>
            </li>
            <li class="closed">
                <div class="dot"></div>
                <div class="text">Application Closed</div>
            </li>
        </ul>

        <!-- Cancel Button -->
        <button class="cancel-button" onclick="confirmCancel()">Cancel Application</button>

        <!-- Footer -->
        <div class="footer">
            <p>Need help? <a href="mailto:hr@global8.com.ph">Contact HR</a></p>
        </div>
    </div>

    <script>
        function confirmCancel() {
            const confirmation = confirm(
                "Are you sure you want to cancel your job application process? This action cannot be undone."
            );
            if (confirmation) {
                // Implement cancellation logic here (e.g., send request to backend)
                alert("Your job application has been canceled successfully.");
            }
        }
    </script>
</body>

</html>
