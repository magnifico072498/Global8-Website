<?php include '../database/db-connection.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | Global8</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        html {
            scroll-behavior: smooth;
        }

        /* Base Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background-color: #f8f9fa;
        }

        h1 {
            color: #333;
            text-align: center;
            font-size: 3rem;
            margin-top: 50px;
            font-weight: bold;
        }

        h2,
        h3 {
            font-family: 'Montserrat', sans-serif;
            font-weight: 600;
        }

        .search-btn {
            border-radius: 0;
            transition: background-color 0.3s ease;
        }

        .search-btn:focus,
        .search-btn:active {
            box-shadow: none;
        }

        .search-btn:hover {
            background-color: #0056b3;
        }

        .add-btn {
            border-radius: 0;
            transition: background-color 0.3s ease;
        }

        .add-btn:focus,
        .add-btn:active {
            box-shadow: none;
        }

        .add-btn:hover {
            background-color: green;
            border: none;
        }

        .search {
            border-radius: 0;
            transition: max-height 0.3s ease-out, opacity 0.3s ease;
            overflow: hidden;
            max-height: 0;
            opacity: 0;
            width: 150px;
        }

        .collapse.show .search {
            max-height: 50px;
            opacity: 1;
        }

        #joblisting {
            padding: 40px;
            background-color: #ffffff;
            margin: 50px auto;
            max-width: 1400px;
        }

        .btn-view {
            background-color: #007bff;
            color: #fff;
            border: none;
        }

        .btn-view:hover {
            background-color: #0056b3;
            color: #fff;
        }

        .table-responsive {
            overflow-x: auto;
        }

        .badge {
            padding: 8.5px 10px;
        }

        @media (max-width: 1200px) {
            h1 {
                font-size: 1.8rem;
            }

            .table th,
            .table td,
            .btn-view {
                font-size: .9rem;
            }

            .btn-view {
                padding: 4px 10px;
            }

            .btn-action {
                padding: 0 4px;
            }
        }

        @media (max-width: 768px) {
            h1 {
                font-size: 1.4rem;
            }

            #joblisting {
                padding: 14px;
                box-shadow: 0 2px 8px rgba(0, 0, 0, 0);
            }

            .table th,
            .table td,
            .btn-view {
                font-size: 0.8rem;
            }

            .btn-view {
                padding: 4px 10px;
            }

            .btn-action {
                padding: 0 4px;
            }
        }

        @media (max-width: 480px) {
            h1 {
                font-size: 1.2rem;
            }

            #joblisting {
                padding: 7px;
                box-shadow: 0 2px 8px rgba(0, 0, 0, 0);
            }

            .table th,
            .table td,
            .btn-view {
                font-size: 0.7rem;
            }

            .btn-view {
                padding: 3px 7px;
            }

            .btn-action {
                padding: 1px 5px;
            }
        }




        /* VIEW JOB DETAILS */
        #viewJob {
            background: #fff;
            padding: 50px 400px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        #viewJob h2 {
            font-size: 2rem;
            font-weight: 700;
            color: #333;
            margin-bottom: 15px;
        }

        #viewJob p {
            font-size: 1rem;
            text-align: justify;
            margin-bottom: 10px;
            color: #555;
        }

        #viewJob p i {
            color: #333;
        }

        #viewJob strong {
            color: #333;
        }

        @media (max-width: 1400px) {
            #viewJob {
                padding: 55px 200px;
            }
        }

        @media (max-width: 1200px) {
            #viewJob {
                padding: 45px 100px;
            }

            #viewJob h2 {
                font-size: 1.8rem;
            }

            #viewJob p {
                font-size: .95rem;
            }
        }

        @media (max-width: 768px) {
            #viewJob {
                padding: 35px 75px;
            }

            #viewJob h2 {
                font-size: 1.4rem;
            }

            #viewJob p {
                font-size: .90rem;
            }
        }

        @media (max-width: 480px) {
            #viewJob {
                padding: 25px;
            }

            #viewJob h2 {
                font-size: 1.2rem;
            }

            #viewJob p {
                font-size: .85rem;
            }
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="../media/images/logos/global8-finance-corpoation-icon.webp"
                    alt="Global8 Finance Corporation Logo"
                    style="width:40px;"
                    class="rounded-pill">
            </a>

            <div class="navbar-collapse d-flex">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="hr-db.php">Go Back <i class="ri-arrow-go-back-line"></i></a>
                    </li>
                </ul>

                <div class="d-flex">
                    <button class="btn btn-primary search-btn" type="button" data-bs-toggle="collapse" data-bs-target="#searchForm" aria-expanded="false" aria-controls="searchForm">
                        <i class="ri-search-line"></i>
                    </button>
                </div>


                <div class="collapse" id="searchForm">
                    <form class="d-flex">
                        <input class="form-control me-2 search" type="text" placeholder="Search" autofocus>
                    </form>
                </div>
            </div>
        </div>
    </nav>

    <section style="display:none; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);" id="postJob"> <?php include_once('jobForm.php'); ?> </section>
    <section style="display: none; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);" id="updateJob"></section>
    <section style="display: none;" id="viewJob"></section>

    <h1>Welcome to the Job Posting Portal </h1>
    <section id="joblisting" class="container-fluid">
        <div class="d-flex justify-content-between align-items-center job-header mb-3">
            <h2 class="mb-4">List of Jobs Posted</h2>
            <a href="#postJob"><button onclick="functionAddJob()" class="btn btn-success add-btn" type="button"><i class="ri-add-line"></i> Job Post</button></a>
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
                        <th scope="col">Status</th>
                        <th scope="col" style="text-align:center">Actions</th>
                    </tr>
                </thead>

                <?php
                $sql = "SELECT JobNo, JobTitle, employmentType, SalaryRange, jobDescription, jobQualifications, JobDateOpened, Location, Status FROM Job";
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
                                                onclick="viewJobDetails(this)"
                                                class="btn btn-sm btn-view"
                                                data-jobno="<?php echo $row['JobNo']; ?>">
                                                View
                                            </button></a>
                                    </td>
                                    <td data-label="Status">
                                        <span class="badge  <?php echo $statusClass; ?>"> <?php echo $statusText; ?></span>
                                    </td>
                                    <td class="text-center" data-label="Actions">
                                        <!-- Edit Button with data-jobno attribute for identifying the job -->
                                        <a href="#updateJob"><button
                                                onclick="updateJobDetails(this)"
                                                class="btn btn-sm btn-success btn-action"
                                                update-data-jobno="<?php echo $row['JobNo']; ?>">
                                                <i class="ri-edit-2-line"></i>
                                            </button></a>

                                        <button class="btn btn-sm btn-danger btn-action delete-job"
                                            onclick="deleteJobDetails(this)"
                                            delete-data-jobno="<?php echo $row['JobNo']; ?>">
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
                        <th scope="col">Status</th>
                        <th scope="col" style="text-align:center">Actions</th>
                    </tr>
                </tfoot>
            <?php
                    }
            ?>
            </table>
        </div>

    </section>

    <?php include_once('jobBin.php'); ?>
    <?php include_once('footer.html'); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNrd+eRA3IodwISsuljHMBUuB8qF5AQs+N5b1m4wrzEmN1o8gJyXOnnAC45HxJm" crossorigin="anonymous"></script>
    <script src="js/getJobDetails.js"></script>
    <script src="js/updateJobDetails.js"></script>
    <script src="js/deleteJob.js"></script>
    <script>
        function functionAddJob() {
            // Your existing code for displaying the 'Post Job' section
            const postJob = document.getElementById('postJob');
            const viewJobSection = document.getElementById('viewJob');
            const updateJobSection = document.getElementById('updateJob');

            if (postJob.style.display === 'none') {
                postJob.style.display = 'block';
                viewJobSection.style.display = "none";
                updateJobSection.style.display = "none";
            } else {
                postJob.style.display = 'none';
            }

            // Refresh the job list when the job is posted
            refreshJobList();
        }


        function functionHide() {
            const postJob = document.getElementById('postJob');
            const viewJobSection = document.getElementById('viewJob');
            const updateJobSection = document.getElementById('updateJob');
            postJob.style.display = 'none';
            viewJobSection.style.display = 'none';
            updateJobSection.style.display = 'none';
        }


        // Smooth scroll with animation effect
        document.querySelectorAll('.scroll-link').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();

                const targetID = this.getAttribute('href').substring(1);
                const targetSection = document.getElementById(targetID);

                // Custom scroll animation using window.requestAnimationFrame
                window.scrollTo({
                    top: targetSection.offsetTop,
                    behavior: 'smooth'
                });
            });
        });
    </script>
</body>

</html>