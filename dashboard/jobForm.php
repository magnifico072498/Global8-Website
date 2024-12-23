<?php
include_once '../database/db-connection.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['ajax'])) {
    // Validate required fields
    $requiredFields = ['jobTitle', 'employmentType', 'salaryRange', 'jobDescription', 'jobQualifications', 'jobDateOpened', 'location', 'status'];
    foreach ($requiredFields as $field) {
        if (empty($_POST[$field])) {
            echo json_encode(['status' => 'error', 'message' => 'All fields are required.']);
            exit();
        }
    }

    // Sanitize and collect data
    $jobTitle = htmlspecialchars($_POST['jobTitle']);
    $employmentType = htmlspecialchars($_POST['employmentType']);
    $salaryRange = htmlspecialchars($_POST['salaryRange']);
    $jobDescription = htmlspecialchars($_POST['jobDescription']);
    $jobQualifications = htmlspecialchars($_POST['jobQualifications']);
    // Convert newlines to <br> before saving to the database
    $jobDescription = nl2br($jobDescription);  // Convert newlines to <br>
    $jobQualifications = nl2br($jobQualifications);
    $jobDateOpened = htmlspecialchars($_POST['jobDateOpened']);
    $location = htmlspecialchars($_POST['location']);
    $status = htmlspecialchars($_POST['status']);

    // Check database connection
    if (!$conn) {
        echo json_encode(['status' => 'error', 'message' => 'Database connection failed: ' . mysqli_connect_error()]);
        exit();
    }

    // Prepare and execute SQL query
    $sql = "INSERT INTO Job (JobTitle, EmploymentType, SalaryRange, JobDescription, JobQualifications, JobDateOpened, Location, Status) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssssss", $jobTitle, $employmentType, $salaryRange, $jobDescription, $jobQualifications, $jobDateOpened, $location, $status);

    if ($stmt->execute()) {
        echo json_encode(['status' => 'success', 'message' => 'New job posted successfully!']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Error: ' . $stmt->error]);
    }

    $stmt->close();
    $conn->close();
    exit();
}
?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<style>
    .add-bg {
        background-color: #fff;
        max-width: 100%;
        padding: 100px 250px;
    }

    @media (max-width: 1200px) {
        .add-bg {
            padding: 100px 30px;
        }
    }

    @media (max-width: 768px) {
        .add-bg {
            padding: 75px 20px;
        }
    }

    @media (max-width: 480px) {
        .add-bg {
            padding: 30px 10px;
        }
    }
</style>

<div class="container add-bg">
    <div class="d-flex justify-content-between align-items-center job-header mb-3">
        <h2>Post a New Job Opening <i class="ri-briefcase-2-fill"></i></h2>
        <button onclick="functionAddJob()" type="button" class="btn btn-secondary"><i class="ri-logout-box-line"></i> Hide </button>
    </div>
    <form id="jobForm">
        <div class="row">
            <div class="col-lg-8">
                <div class="form-floating">
                    <textarea class="form-control" id="jobDescription" name="jobDescription" placeholder="Job Description" style="height: 233px; margin-top: 16px;" required></textarea>
                    <label for="jobDescription">Job Description</label>
                </div>

                <div class="form-floating">
                    <textarea class="form-control" id="jobQualifications" name="jobQualifications" placeholder="Qualifications" style="height: 233px; margin-top: 15px;" required></textarea>
                    <label for="jobQualifications">Qualifications</label>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="form-floating mb-3 mt-3">
                    <input type="text" class="form-control" id="jobTitle" placeholder="Job Title" name="jobTitle" required>
                    <label for="jobTitle">Job Title</label>
                </div>

                <div class="form-floating">
                    <select class="form-select" id="employmentType" name="employmentType" required>
                        <option value="" selected disabled>Select an employment type</option>
                        <option value="Full-Time">Full-Time</option>
                        <option value="Part-Time">Part-Time</option>
                        <option value="Contract">Contract</option>
                        <option value="Contract">Freelance</option>
                        <option value="Internship">Internship</option>
                    </select>
                    <label for="employmentType">Employment Type</label>
                </div>

                <div class="form-floating mb-3 mt-3">
                    <input type="text" class="form-control" id="salaryRange" placeholder="Salary Range" name="salaryRange" required>
                    <label for="salaryRange">Salary Range <small>(30,000 - 40,000)</small></label>
                </div>

                <div class="form-floating mb-3 mt-3">
                    <select class="form-select" id="location" name="location" required>
                        <option value="" selected disabled>Select a location</option>
                        <option value="Work From Home">Work From Home</option>
                        <option value="Hybrid">Hybrid</option>
                        <option value="Makati City">Makati City</option>
                        <option value="Taguig City">Taguig City</option>
                    </select>
                    <label for="location">Location</label>
                </div>

                <div class="form-floating mb-3 mt-3">
                    <input type="date" class="form-control" id="jobDateOpened" placeholder="Date Opened" name="jobDateOpened" value="<?php echo date('Y-m-d', strtotime('-1 day')); ?>" required readonly>
                    <label for="jobDateOpened">Date Opened</label>
                </div>

                <div class="form-floating mb-3 mt-3">
                    <input type="text" class="form-control" id="status" placeholder="Status" name="status" value="Active" required readonly>
                    <label for="status">Status</label>
                </div>

                <!-- Flex container with gap -->
                <div class="d-flex gap-3 mt-3">
                    <div class="d-grid" style="flex: 1;">
                        <button type="submit" id="addJob" class="btn btn-primary w-100"> Post Job <i class="ri-add-box-line"></i></button>
                    </div>
                </div>

            </div>
        </div>
    </form>
</div>
<script src="js/jobForm.js"></script>