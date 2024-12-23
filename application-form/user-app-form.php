<?php include '../database/db-connection.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Application Form</title>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 80%;
            max-width: 1200px;
            margin: 50px auto;
            padding: 30px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }

        .step-header {
            display: flex;
            justify-content: space-between;
            font-size: 1rem;
            margin-bottom: 10px;
            font-weight: bold;
        }

        .step-header div {
            cursor: pointer;
            color: #555;
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            flex: 1;
        }

        .step-header div i {
            font-size: 1.5rem;
            font-weight: 500;
            background-color: #222;
            color: white;
            border-radius: 50%;
            padding: 10px;
            margin-bottom: 5px;
        }


        .step-header div.active {
            color: #333;
        }

        .form-step {
            display: none;
        }

        .form-step label {
            font-size: 1rem;
        }

        .form-step.active {
            display: block;
        }

        .form-step input,
        .form-step select {
            width: 100%;
            padding: 20px 12px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        .form-step .two-columns {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }

        .form-navigation {
            display: flex;
            justify-content: space-between;
            margin-top: 30px;
        }

        .form-navigation button {
            padding: 12px 25px;
            border: none;
            background-color: #4CAF50;
            color: white;
            font-size: 1rem;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s, box-shadow 0.3s;
        }

        .form-navigation button:hover {
            background-color: #3D8C40;
        }

        .form-navigation button:focus {
            outline: none;
            background-color: #367a35;
            box-shadow: 0 0 0 3px rgba(76, 175, 80, 0.5);
        }


        .form-navigation button[disabled] {
            background-color: #ccc;
            cursor: not-allowed;
        }

        .file-upload-preview {
            margin-top: 10px;
        }

        .file-upload-preview p {
            margin: 5px 0;
            font-size: 0.9rem;
        }

        /* Progress Bar */
        .progress-bar-container {
            position: relative;
            height: 15px;
            background-color: #e0e0e0;
            border-radius: 5px;
            margin-bottom: 40px;
        }

        .progress-bar {
            height: 100%;
            width: 0%;
            background-color: #222;
            border-radius: 5px;
            transition: width 0.3s;
        }

        .progress-label {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
            font-size: .8rem;
        }

        .step-header div {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .form-step .two-columns {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }


        @media (max-width: 1200px) {
            .step-header {
                font-size: .9rem;
            }

            .step-header div i {
                font-size: 1.3rem;
            }

            .form-step input,
            .form-step select {
                padding: 18px 10px;
            }

            .form-step label {
                font-size: .95rem;
            }
        }

        /* Responsive Layout */
        @media (max-width: 768px) {
            .form-step .two-columns {
                grid-template-columns: 1fr;
            }

            .step-header {
                font-size: .85rem;
            }

            .step-header div i {
                font-size: 1.1rem;
            }

            .form-step input,
            .form-step select {
                padding: 14px 8px;
            }

            .form-step label {
                font-size: .9rem;
            }
        }

        /* Responsive Layout */
        @media (max-width: 480px) {
            .container {
                width: 90%;
                /* Ensure it fits within the viewport */
                margin: 20px auto;
                /* Uniform top/bottom and center alignment */
                padding: 15px;
                /* Reduce padding for smaller screens */
            }

            .form-step input,
            .form-step select {
                padding: 10px;
                /* Consistent padding for inputs */
                margin: 10px 0;
                /* Add spacing between inputs */
                font-size: 0.9rem;
                /* Adjust font size for readability */
            }

            .form-step label {
                font-size: 0.9rem;
                /* Ensure labels are readable */
                margin-bottom: 5px;
                /* Add spacing after labels */
            }


            .progress-label {
                font-size: 0.75rem;
                /* Adjust size for the progress label */
            }

            .step-header {
                font-size: 0.85rem;
            }

            .step-header div i {
                font-size: 1rem;
                margin-bottom: 5px;
                /* Adjust spacing for icons */
            }
        }
    </style>
</head>

<body>

    <div class="container">
        <!-- Step Header (Tabs) -->
        <div class="step-header">
            <div id="personal-info-tab" class="active">
                <i class="ri-user-3-line"></i>
                Personal Information
            </div>
            <div id="job-interest-tab">
                <i class="ri-briefcase-4-line"></i>
                Job Interest
            </div>
            <div id="file-upload-tab">
                <i class="ri-file-upload-line"></i>
                File Upload
            </div>
        </div>

        <!-- Progress Bar -->
        <div class="progress-bar-container">
            <div class="progress-bar" id="progress-bar"></div>
            <div class="progress-label" id="progress-label">Step 1 of 3</div>
        </div>

        <?php include '../functions/job-app-form.php'; ?>
        <!-- Form Steps -->
        <form method="POST" enctype="multipart/form-data">
            <!-- Step 1: Personal Information -->
            <div class="form-step active" id="step-1">
                <h2>Personal Information</h2>
                <div class="two-columns">
                    <div>
                        <label for="full-name">Full Name:</label>
                        <input type="text" id="full-name" name="full-name" placeholder="Enter your full name" required>
                    </div>
                    <div>
                        <label for="email">Email Address:</label>
                        <input type="email" id="email" name="email" placeholder="Enter your email" required>
                    </div>
                </div>

                <div class="two-columns">
                    <div>
                        <label for="phone">Phone Number:</label>
                        <input type="tel" id="phone" name="phone" placeholder="Enter your phone number" required>
                    </div>
                    <div>
                        <label for="dob">Date of Birth:</label>
                        <input type="date" id="dob" name="dob" required>
                    </div>
                </div>

                <div>
                    <label for="address">Permanent Address:</label>
                    <input type="text" id="address" name="permanent-address" placeholder="Enter your address" required>
                </div>

                <div>
                    <label for="address">Current Address:</label>
                    <input type="text" id="address" name="current-address" placeholder="Enter your address" required>
                </div>
            </div>



            <!-- Step 2: Job Interest -->
            <div class="form-step" id="step-2">
                <h2>Job Interest</h2>
                <div class="two-columns">
                    <div>

                        <label for="position">Position Applied For:</label>
                        <select id="position" name="position" required>
                        <option value="">Select a position</option>

                            <?php
                            $sql = "SELECT JobTitle FROM Job";
                            $result = $conn->query($sql);

                            if ($result === false) {
                                echo $conn->error;
                            } else {
                                if ($result->num_rows > 0) {
                                    while ($row = $result->fetch_assoc()) {
                            ?>
                                        <option value="account-manager"><?php echo $row['JobTitle']; ?></option>
                            <?php
                                    }
                                } else {
                                    echo "No jobs found";
                                }
                            }
                            ?>

                        </select>
                    </div>

                    <div>
                        <label for="start-date">Available Start Date:</label>
                        <input type="date" id="start-date" name="start-date" required>
                    </div>
                </div>

                <div class="two-columns">
                    <div>
                        <label for="salary">Expected Salary:</label>
                        <input type="number" id="salary" name="salary" placeholder="Enter expected salary" required>
                    </div>
                    <div>
                        <label for="why-hire-you">Why Should We Hire You? <small>(Explain in 1 sentence only)</small></label>
                        <input type="text" id="why-hire-you" name="why-hire-you" placeholder="Explain why we should hire you" required>
                    </div>
                </div>
            </div>

            <!-- Step 3: File Upload -->
            <div class="form-step" id="step-3">
                <h2>File Upload</h2>
                <div class="two-columns">
                    <div>
                        <label for="resume">Upload Resume (PDF):</label>
                        <input type="file" id="resume" name="resume" accept=".pdf" required>
                        <div id="resume-preview" class="file-upload-preview"></div>
                    </div>
                    <div>
                        <label for="portfolio">Upload Portfolio (PDF):</label>
                        <input type="file" id="portfolio" name="portfolio" accept=".pdf" required>
                        <div id="portfolio-preview" class="file-upload-preview"></div>
                    </div>
                </div>
            </div>

            <!-- Navigation Buttons -->
            <div class="form-navigation">
                <div><button type="button" id="back-btn" disabled><i class="ri-arrow-left-s-line"></i></button></div>
                <div id="next-btn"><button type="button"><i class="ri-arrow-right-s-line"></i></button></div>
            </div>
        </form>
    </div>
    <script>
        const nextBtn = document.getElementById('next-btn');
        const backBtn = document.getElementById('back-btn');
        const form = document.getElementById('jobApplicationForm'); // Corrected ID here
        const progressBar = document.getElementById('progress-bar');
        const progressLabel = document.getElementById('progress-label');
        let currentStep = 1;

        // Handle step navigation
        function showStep(step) {
            const steps = document.querySelectorAll('.form-step');
            steps.forEach((stepElement, index) => {
                stepElement.classList.remove('active');
                if (index === step - 1) {
                    stepElement.classList.add('active');
                }
            });

            // Update progress bar
            let progressPercentage;
            if (step === 1) progressPercentage = 33;
            else if (step === 2) progressPercentage = 66;
            else progressPercentage = 100;

            progressBar.style.width = `${progressPercentage}%`;
            progressLabel.textContent = `Step ${step} of 3`;

            backBtn.disabled = step === 1;
            nextBtn.innerHTML = step === 3 ?
                '<button type="submit" id="submit-btn">Send <i class="ri-send-plane-fill"></i></button>' :
                '<button type="button"><i class="ri-arrow-right-s-line"></i></button>';
        }

        // Check required fields for the current step
        function validateStep(step) {
            const inputs = document.querySelectorAll(`#step-${step} input[required], #step-${step} select[required]`);
            let valid = true;

            inputs.forEach(input => {
                if (!input.value.trim()) {
                    valid = false;
                    input.classList.add('invalid');
                } else {
                    input.classList.remove('invalid');
                }
            });

            return valid;
        }

        // Handle Next button click
        nextBtn.addEventListener('click', () => {
            if (validateStep(currentStep)) {
                if (currentStep < 3) {
                    currentStep++;
                    showStep(currentStep);
                } else {
                    form.submit(); // Submit form on last step if all fields are valid
                }
            } else {
                alert('Please fill out all required fields.');
            }
        });

        // Handle Back button click
        backBtn.addEventListener('click', () => {
            if (currentStep > 1) {
                currentStep--;
                showStep(currentStep);
            }
        });

        // File upload preview
        document.getElementById('resume').addEventListener('change', function() {
            const resumePreview = document.getElementById('resume-preview');
            resumePreview.innerHTML = this.files.length > 0 ? `<p>Uploaded: ${this.files[0].name}</p>` : '';
        });

        document.getElementById('portfolio').addEventListener('change', function() {
            const portfolioPreview = document.getElementById('portfolio-preview');
            portfolioPreview.innerHTML = this.files.length > 0 ? `<p>Uploaded: ${this.files[0].name}</p>` : '';
        });

        // Initial step display
        showStep(currentStep);
    </script>
</body>

</html>