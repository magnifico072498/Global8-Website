<?php
// db-connection.php
$servername = "localhost";        
$username = "root";               
$password = "";                   
$dbname = "g8fc-db";   

try {
    // Establish the PDO connection
    $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);  // Corrected $host to $servername
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    // Handle connection failure
    echo json_encode(['success' => false, 'message' => 'Database connection failed: ' . $e->getMessage()]);
    exit;
}

// Ensure the connection is established
if (!isset($pdo)) {
    echo json_encode(['success' => false, 'message' => 'Database connection is not established.']);
    exit;
}

// Check if jobNo is provided via GET and ensure POST data is available
if (isset($_GET['jobNo']) && !empty($_POST)) {
    // Get jobNo from GET request and ensure it is an integer
    $jobNo = intval($_GET['jobNo']);

    // Sanitize inputs to prevent XSS or other malicious inputs
    $jobTitle = htmlspecialchars($_POST['jobTitle'] ?? '');
    $jobDescription = htmlspecialchars($_POST['jobDescription'] ?? '');
    $jobQualifications = htmlspecialchars($_POST['jobQualifications'] ?? '');
    $employmentType = htmlspecialchars($_POST['employmentType'] ?? '');
    $salaryRange = htmlspecialchars($_POST['salaryRange'] ?? '');
    $location = htmlspecialchars($_POST['location'] ?? '');
    $jobDateOpened = $_POST['jobDateOpened'] ?? '';
    $status = htmlspecialchars($_POST['status'] ?? '');

    // Debugging: Check if all required fields are populated
    if (!$jobTitle || !$jobDescription || !$employmentType || !$status) {
        echo json_encode(['success' => false, 'message' => 'Required fields are missing.']);
        exit;
    }

    // Ensure jobDateOpened is in the correct format (yyyy-MM-dd)
    if ($jobDateOpened && !DateTime::createFromFormat('Y-m-d', $jobDateOpened)) {
        echo json_encode(['success' => false, 'message' => 'Invalid date format for jobDateOpened.']);
        exit;
    }

    // Convert jobDateOpened to yyyy-MM-dd format
    $formattedJobDateOpened = date("Y-m-d", strtotime($jobDateOpened));

    // Ensure status is either 'active' or 'closed' based on the enum definition
    if (!in_array($status, ['active', 'closed'])) {  // Corrected status values to 'Active' and 'Closed'
        echo json_encode(['success' => false, 'message' => 'Invalid status value.']);
        exit;
    }

    // Prepare and execute the update query
    try {
        $stmt = $pdo->prepare("
            UPDATE jobbin
            SET 
                jobTitle = :jobTitle, 
                jobDescription = :jobDescription, 
                jobQualifications = :jobQualifications,
                employmentType = :employmentType, 
                salaryRange = :salaryRange, 
                location = :location, 
                jobDateOpened = :jobDateOpened, 
                status = :status
            WHERE jobNo = :jobNo
        ");

        $stmt->execute([
            ':jobTitle' => $jobTitle,
            ':jobDescription' => $jobDescription,
            ':jobQualifications' => $jobQualifications,
            ':employmentType' => $employmentType,
            ':salaryRange' => $salaryRange,
            ':location' => $location,
            ':jobDateOpened' => $formattedJobDateOpened,
            ':status' => $status,
            ':jobNo' => $jobNo,
        ]);

        // Check if any row was affected
        if ($stmt->rowCount() > 0) {
            echo json_encode(['success' => true, 'message' => 'Job details updated successfully.']);
        } else {
            echo json_encode(['success' => false, 'message' => 'No job details were updated. The jobNo might be incorrect or no changes were made.']);
        }
    } catch (PDOException $e) {
        // Handle database update error
        echo json_encode(['success' => false, 'message' => 'Failed to update job details:' . $e->getMessage()]);
    }
} else {
    // Return error if jobNo is not provided or POST data is missing
    echo json_encode(['success' => false, 'message' => 'Invalid request. Missing jobNo or data.']);
}
?>
