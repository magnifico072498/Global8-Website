<?php include_once('database/db-connection.php'); ?>
<link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet">
<style>
    .text-gold {
        color: #b38b00;
    }

    /* Career Section Styles */
    .career-section {
        background-color: #222;
        padding: 100px 200px;
    }

    .career-container {
        max-width: 1200px;
        margin: 0 auto;
    }

    /* Career Section Header */
    .open-positions-header {
        margin-bottom: 40px;
        /* Adjust margin for better spacing */
        padding-left: 0;
        /* Remove any default padding */
        padding-right: 0;
        /* Remove any default padding */
    }

    /* Career Section Title */
    .open-positions-header h2 {
        font-size: 2.5rem;
        font-weight: 700;
        color: #FFF;
        margin-bottom: 10px;
        text-align: left;
        /* Align the title to the left */
    }

    /* Career Section Paragraph */
    .open-positions-header p {
        font-size: 1.2rem;
        color: #FFF;
        text-align: left;
        /* Align the paragraph text to the left */
    }

    /* Career Item Grid */
    .careers-list {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
        gap: 30px;
        padding-left: 15px;
        /* Indent career items slightly from the left */
    }


    .highlighted-text {
        color: #ff9e00;
        /* Golden color */
    }

    .career-item {
        background-color: #fff;
        border-radius: 12px;
        padding: 20px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .career-item:hover {
        transform: translateY(-10px);
        box-shadow: 0 6px 30px rgba(0, 0, 0, 0.15);
    }

    .career-item-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 20px;
    }

    .career-item-header h3 {
        font-size: 22px;
        font-weight: 600;
        color: #333;
        margin: 0;
    }

    .status {
        font-size: 14px;
        font-weight: bold;
        padding: 5px 10px;
        border-radius: 20px;
        color: #fff;
    }

    .status.active {
        background-color: #28a745;
        /* Green for active */
    }

    .status.inactive {
        background-color: #dc3545;
        /* Red for inactive */
    }

    .career-item-details {
        margin-bottom: 20px;
    }

    .detail-item {
        display: flex;
        align-items: center;
        font-size: 14px;
        color: #555;
        margin-bottom: 12px;
    }

    .detail-item i {
        margin-right: 8px;
        color: #555;
    }

    .career-item-footer {
        text-align: center;
    }

    .btn-view-details {
        background-color: #b38b00;
        /* Golden button */
        color: #fff;
        padding: 12px 25px;
        font-size: 16px;
        font-weight: 600;
        border: none;
        border-radius: 25px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .btn-view-details:hover {
        background-color: #9a7400;
        /* Darker gold on hover */
    }

    .bg-success {
        background-color: #28a745;
        color: #fff;
        padding: 5px 10px;
        border-radius: 3px;
        font-size: 12px;
    }

    .bg-danger {
        background-color: #dc3545;
        color: #fff;
        padding: 5px 10px;
        border-radius: 3px;
        font-size: 12px;
    }


    /* Media Queries for responsiveness */
    @media (max-width: 1200px) {

        /* Career Section Styles */
        .career-section {
            padding: 70px 50px;
        }

        /* Career Section Title */
        .open-positions-header h2 {
            font-size: 1.8rem;
        }

        /* Career Section Paragraph */
        .open-positions-header p {
            font-size: 1rem;
        }

        .careers-list {
            padding-left: 0;
        }

        .career-item-header h3 {
            font-size: 1.8rem;
        }

        .detail-item {
            font-size: .95rem;
        }

        .btn-view-details {
            font-size: .95rem;
        }
    }

    /* Media Queries for responsiveness */
    @media (max-width: 768px) {

        /* Career Section Styles */
        .career-section {
            padding: 60px 40px;
        }

        /* Career Section Title */
        .open-positions-header h2 {
            font-size: 1.8rem;
        }

        /* Career Section Paragraph */
        .open-positions-header p {
            font-size: .90rem;
        }

        .careers-list {
            padding-left: 0;
        }

        .career-item-header h3 {
            font-size: 1.4rem;
        }

        .detail-item {
            font-size: .90rem;
        }

        .btn-view-details {
            font-size: .90rem;
        }
    }

    /* Media Queries for responsiveness */
    @media (max-width: 480px) {

        /* Career Section Styles */
        .career-section {
            padding: 50px 20px;
        }

        /* Career Section Title */
        .open-positions-header h2 {
            font-size: 1.4rem;
        }

        /* Career Section Paragraph */
        .open-positions-header p {
            font-size: .85rem;
        }

        .careers-list {
            padding-left: 0;
        }

        .career-item-header h3 {
            font-size: 1.2rem;
        }

        .detail-item {
            font-size: .85rem;
        }

        .btn-view-details {
            font-size: .85rem;
        }
    }

    /* Modal Styling */
    .modal-overlay {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.7);
        justify-content: center;
        align-items: center;
        z-index: 1000;
    }

    .modal-content {
        background-color: #F2F2F2;
        padding: 40px 10px;
        border-radius: 10px;
        max-width: 900px;
        width: 80%;
        max-height: 550px;
        overflow-y: auto;
    }

    .modal-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        background-color: #333;
        padding: 20px;
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
    }

    .modal-header h2 {
        font-size: 1.8rem;
        color: #FFF;
    }

    .close-btn {
        font-size: 24px;
        background: none;
        border: none;
        color: #aaa;
        cursor: pointer;
    }

    .close-btn:hover {
        color: #FFF;
    }

    #modal-job-details {
        background-color: #FFF;
        padding: 25px;
        text-align: justify;
    }

    #modal-job-details p {
        font-size: 1rem;
        margin-bottom: 10px;
    }

    #modal-job-details hr {
        margin-bottom: 10px;
    }

    .modal-footer {
        display: flex;
        justify-content: center;
        background-color: #333;
        border-bottom-left-radius: 10px;
        border-bottom-right-radius: 10px;
        padding: 20px;
    }

    .modal-footer .btn {
        padding: 10px 20px;
        background-color: #b38b00;
        color: #fff;
        border: none;
        font-weight: bold;
        cursor: pointer;
        border-radius: 3px;
        transition: background-color 0.3s ease;
    }

    .modal-footer .btn:hover {
        background-color: #222;
    }


    /* Media Queries for responsiveness */
    @media (max-width: 1200px) {}

    /* Media Queries for responsiveness */
    @media (max-width: 768px) {}

    /* Media Queries for responsiveness */
    @media (max-width: 480px) {
        .modal-header h2 {
            font-size: 1.2rem;
        }

        #modal-job-details p {
            font-size: .80rem;
        }
    }
</style>

<section class="career-section">
    <div class="open-positions-header">
        <h2><span class="text-gold">Open</span> Positions</h2>
        <p>Explore the available positions and click "Read More" for more details.</p>
    </div>
    <div class="careers-list">
        <?php
        $sql = "SELECT JobNo, JobTitle, EmploymentType, SalaryRange, JobDescription, JobQualifications, JobDateOpened, Location, Status FROM Job";
        $result = $conn->query($sql);

        if ($result === false) {
            echo $conn->error;
        } else {
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $dateOpened = date("m/d/Y", strtotime($row['JobDateOpened']));
                    $statusClass = ($row['Status'] == 'active') ? 'bg-success' : 'bg-danger';
                    $statusText = ucfirst($row['Status']);
        ?>

                    <div class="career-item">
                        <div class="career-item-header">
                            <h3><?php echo $row['JobTitle']; ?></h3>
                            <span class="status <?php echo $statusClass; ?>"><?php echo $statusText; ?></span>
                        </div>

                        <div class="career-item-details">
                            <div class="detail-item">
                                <i class="ri-briefcase-line"></i> <?php echo htmlspecialchars($row['EmploymentType']); ?>
                            </div>
                            <div class="detail-item">
                                <i class="ri-map-pin-line"></i> <?php echo htmlspecialchars($row['Location']); ?>
                            </div>
                            <div class="detail-item">
                                <i class="ri-calendar-event-line"></i> <?php echo $dateOpened; ?>
                            </div>
                        </div>

                        <div class="career-item-footer">
                            <button class="btn-view-details" onclick="viewJobDetails(this)" data-jobno="<?php echo $row['JobNo']; ?>">Read More</button>
                        </div>
                    </div>

        <?php
                }
            } else {
                echo "<p>No open positions at the moment. Please check back later.</p>";
            }
        }
        ?>
    </div>
</section>

<!-- Modal Structure -->
<div class="modal-overlay" id="job-details-modal">
    <div class="modal-content">
        <div class="modal-header">
            <h2>Job Details</h2>
            <button onclick="closeJobDetails()" class="close-btn">&times;</button>
        </div>
        <div id="modal-job-details">
            <!-- Job details will be dynamically loaded here -->
        </div>
        <!-- Apply Button -->
        <div class="modal-footer">
            <a href="application-form/user-app-form.php" target="_blank" class="btn btn-primary">Apply Now</button></a>
        </div>
    </div>
</div>

<script src="resources/js/get-global8-careers.js"></script>