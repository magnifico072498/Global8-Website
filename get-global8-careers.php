<?php
include_once('database/db-connection.php');

if (isset($_GET['jobNo'])) {
    $jobNo = intval($_GET['jobNo']);

    $sql = "SELECT JobTitle, employmentType, jobDescription, jobQualifications, JobDateOpened, Location, Status 
            FROM Job 
            WHERE JobNo = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $jobNo);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result && $row = $result->fetch_assoc()) {
        echo json_encode([
            'success' => true,
            'jobTitle' => $row['JobTitle'],
            'employmentType' => $row['employmentType'],
            'jobDescription' => $row['jobDescription'],
            'jobQualifications' => $row['jobQualifications'],
            'dateOpened' => date("m/d/Y", strtotime($row['JobDateOpened'])),
            'location' => $row['Location'],
            'status' => $row['Status']
        ]);
    } else {
        echo json_encode(['success' => false]);
    }
    $stmt->close();
} else {
    echo json_encode(['success' => false, 'error' => 'Invalid JobNo']);
}
?>


