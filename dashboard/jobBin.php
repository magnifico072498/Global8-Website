<?php include_once '../database/db-connection.php'; ?>

<section id="joblisting" class="container-fluid">
    <div class="d-flex justify-content-between align-items-center job-header mb-3">
        <h2 class="mb-4">Recycle Bin <i class="ri-delete-bin-5-line"></i></h2>
    </div>
    <div class="table-responsive" id="jobListContainer">
        <table class="table table-hover align-middle">
            <thead class="table-dark">
                <tr>
                    <th scope="col" class="text-center">
                        <input type="checkbox" />
                    </th>
                    <th scope="col">Job Title</th>
                    <th scope="col">Salary Range</th>
                    <th scope="col">Date</th>
                    <th scope="col">Details</th>
                    <th scope="col" style="text-align:center">Actions</th>
                </tr>
            </thead>

            <?php
            $sql = "SELECT JobNo, JobTitle, employmentType, SalaryRange, jobDescription, jobQualifications, JobDateOpened, Location, Status FROM jobbin";
            $result = $conn->query($sql);
            ?>

            <tbody>
                <?php

                if ($result === false) {
                    echo "<tr><td colspan='6' class='text-center'>Error fetching jobs: " . $conn->error . "</td></tr>";
                } else {

                    if ($result->num_rows > 0) {

                        while ($row = $result->fetch_assoc()) {

                            $dateOpened = date("m/d/Y", strtotime($row['JobDateOpened']));
                            $statusClass = ($row['Status'] == 'active') ? 'bg-success' : 'bg-danger';
                            $statusText = ucfirst($row['Status']);
                ?>
                            <tr id="job-<?php echo $row['JobNo']; ?>" class="jobItem">
                                <td class="text-center" data-label="Select">
                                    <input type="checkbox" />
                                </td>
                                <td data-label="Job Title"><?php echo $row['JobTitle']; ?></td>
                                <td data-label="Salary Range"> ₱ <?php echo $row['SalaryRange']; ?></td>
                                <td data-label="Date"><?php echo $dateOpened; ?></td>
                                <td data-label="Details">
                                    <a href="#viewJob"><button
                                            onclick="viewJobDetailsBin(this)"
                                            class="btn btn-sm btn-view"
                                            data-jobno-bin="<?php echo $row['JobNo']; ?>">
                                            View
                                        </button></a>
                                </td>
                                <td class="text-center" data-label="Actions">
                                    <!-- Edit Button with data-jobno attribute for identifying the job -->
                                    <button
                                        class="btn btn-sm btn-primary btn-action retrieve-job"
                                        onclick="retrieveJob(this)"
                                        retrieve-data-jobno-bin="<?php echo $row['JobNo']; ?>">
                                        <i class="ri-add-line"></i>
                                    </button>

                                    <a href="#updateJob"><button href="#updateJob"
                                            onclick="updateJobDetailsBin(this)"
                                            class="btn btn-sm btn-success btn-action"
                                            update-data-jobno-bin="<?php echo $row['JobNo']; ?>">
                                            <i class="ri-edit-2-line"></i>
                                        </button></a>

                                    <button class="btn btn-sm btn-danger btn-action delete-job"
                                        onclick="deleteJobDetailsBin(this)"
                                        delete-data-jobno-bin="<?php echo $row['JobNo']; ?>">
                                        <i class="ri-delete-bin-6-line"></i>
                                    </button>
                                </td>
                            </tr>
                    <?php
                        }
                    } else {
                        echo "<tr><td colspan='6' class='text-center'>No jobs found</td></tr>";
                    }
                    ?>
            </tbody>
            <tfoot class="table-dark">
                <tr>
                    <th scope="col"></th>
                    <th scope="col">Job Title</th>
                    <th scope="col">Salary Range</th>
                    <th scope="col">Date</th>
                    <th scope="col">Details</th>
                    <th scope="col" style="text-align:center">Actions</th>
                </tr>
            </tfoot>
        <?php
                }
        ?>
        </table>
    </div>
</section>
<script src="js/getJobDetailsBin.js"></script>
<script src="js/updateJobDetailsBin.js"></script>
<script src="js/deleteJobBin.js"></script>
<script src="js/retrieveJob.js"></script>