<?php
include_once '../database/db-connection.php';

// Check if the request is an AJAX call and contains the job number
if (isset($_POST['jobno'])) {
    $jobNo = $_POST['jobno'];

    // SQL query to delete the job based on JobNo
    $sql = "DELETE FROM job WHERE JobNo = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $jobNo);

    if ($stmt->execute()) {
        echo json_encode([
            'status' => 'success',
            'message' => 'Job deleted successfully.'
        ]);
    } else {
        echo json_encode([
            'status' => 'error',
            'message' => 'Failed to delete the job. Please try again.'
        ]);
    }

    $stmt->close();
    $conn->close();
} else {
    echo json_encode([
        'status' => 'error',
        'message' => 'Invalid request.'
    ]);
}
