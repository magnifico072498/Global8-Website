<?php
include_once '../database/db-connection.php';

if (isset($_POST['retrieveJobNo'])) {
    $jobNo = $_POST['retrieveJobNo'];

    $sql = "CALL retrieve_job(?)"; // Call the stored procedure
    $stmt = $conn->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("i", $jobNo);

        if ($stmt->execute()) {
            echo json_encode([
                'status' => 'success',
                'message' => 'Job successfully retrieved.'
            ]);
        } else {
            // Log the error for debugging
            echo json_encode([
                'status' => 'error',
                'message' => 'Failed to retrieve the job. Error: ' . $stmt->error
            ]);
        }

        $stmt->close();
    } else {
        // Log the error for debugging
        echo json_encode([
            'status' => 'error',
            'message' => 'Failed to prepare the statement. Error: ' . $conn->error
        ]);
    }

    $conn->close();
} else {
    echo json_encode([
        'status' => 'error',
        'message' => 'No job number provided.'
    ]);
}
?>
