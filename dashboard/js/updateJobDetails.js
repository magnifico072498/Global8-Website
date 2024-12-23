function updateJobDetails(button) {
    const jobNo = button.getAttribute("update-data-jobno");

    // Fetch the job details using the job number
    fetch(`getJobDetails.php?jobNo=${jobNo}`)
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                const updateJobSection = document.getElementById('updateJob');
                const element1 = document.getElementById('postJob');
                const element2 = document.getElementById('viewJob');

                // Format the date to YYYY-MM-DD
                const formattedDate = formatDate(data.dateOpened);

                // Update the HTML of the update job section
                updateJobSection.innerHTML = `
    <div class="container add-bg">
        <div class="d-flex justify-content-between align-items-center job-header mb-3">
            <h2>Update Job Details <i class="ri-briefcase-2-fill"></i></h2>
            <button onclick="functionHide()" type="button" class="btn btn-secondary"><i class="ri-logout-box-line"></i> Hide </button>
        </div>
        <form id="updateJobForm">
            <div class="row">
                <!-- Job Description and Qualifications Section -->
                <div class="col-lg-8">
                    <div class="form-floating">
                        <textarea class="form-control" id="jobDescription" name="jobDescription" placeholder="Job Description" style="height: 233px; margin-top: 16px;" required>${data.jobDescription}</textarea>
                        <label for="jobDescription">Job Description</label>
                    </div>
                    <div class="form-floating">
                        <textarea class="form-control" id="jobQualifications" name="jobQualifications" placeholder="Qualifications" style="height: 233px; margin-top: 15px;" required>${data.jobQualifications}</textarea>
                        <label for="jobQualifications">Qualifications</label>
                    </div>
                </div>
    
                <!-- Job Title, Employment Type, Salary, Location, Date Opened Section -->
                <div class="col-lg-4">
                    <div class="form-floating mb-3 mt-3">
                        <input type="text" class="form-control" id="jobTitle" name="jobTitle" value="${data.jobTitle}" placeholder="Job Title" required>
                        <label for="jobTitle">Job Title</label>
                    </div>
                    <div class="form-floating">
                        <select class="form-select" id="employmentType" name="employmentType" required>
                            <option value="" disabled>Select an employment type</option>
                            <option value="Full-Time" ${data.employmentType === 'Full-Time' ? 'selected' : ''}>Full-Time</option>
                            <option value="Part-Time" ${data.employmentType === 'Part-Time' ? 'selected' : ''}>Part-Time</option>
                            <option value="Contract" ${data.employmentType === 'Contract' ? 'selected' : ''}>Contract</option>
                            <option value="Freelance" ${data.employmentType === 'Freelance' ? 'selected' : ''}>Freelance</option>
                            <option value="Internship" ${data.employmentType === 'Internship' ? 'selected' : ''}>Internship</option>
                        </select>
                        <label for="employmentType">Employment Type</label>
                    </div>
                    <div class="form-floating mb-3 mt-3">
                        <input type="text" class="form-control" id="salaryRange" name="salaryRange" value="${data.salaryRange}" placeholder="Salary Range" required>
                        <label for="salaryRange">Salary Range <small>(30,000 - 40,000)</small></label>
                    </div>
                    <div class="form-floating mb-3 mt-3">
                        <select class="form-select" id="location" name="location" required>
                            <option value="" disabled>Select a location</option>
                            <option value="Work From Home" ${data.location === 'Work From Home' ? 'selected' : ''}>Work From Home</option>
                            <option value="Hybrid" ${data.location === 'Hybrid' ? 'selected' : ''}>Hybrid</option>
                            <option value="Makati City" ${data.location === 'Makati City' ? 'selected' : ''}>Makati City</option>
                            <option value="Taguig City" ${data.location === 'Taguig City' ? 'selected' : ''}>Taguig City</option>
                        </select>
                        <label for="location">Location</label>
                    </div>
                    <div class="form-floating mb-3 mt-3">
                        <input type="date" class="form-control" id="jobDateOpened" name="jobDateOpened" value="${formattedDate}" placeholder="Date Opened" required>
                        <label for="jobDateOpened">Date Opened</label>
                    </div>
                    <div class="form-floating mb-3 mt-3">
                        <select class="form-select" id="status" name="status" required>
                            <option value="" disabled>Select a status</option>
                            <option value="active" ${data.status === 'active' ? 'selected' : ''}>Active</option>
                            <option value="closed" ${data.status === 'closed' ? 'selected' : ''}>Closed</option>
                        </select>
                        <label for="status">Status</label>
                    </div>
    
                    <div class="d-flex gap-3 mt-3">
                        <div class="d-grid" style="flex: 1;">
                            <button type="submit" class="btn btn-primary w-100">Update Job <i class="ri-save-line"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    `;

                // Show the update job section and hide other sections
                updateJobSection.style.display = "block";
                if (element1) element1.style.display = 'none';
                if (element2) element2.style.display = 'none';

                // Attach form submit handler
                const form = document.getElementById('updateJobForm');
                form.onsubmit = (e) => {
                    e.preventDefault();
                    saveJobDetails(jobNo, new FormData(form));
                };
            } else {
                alert("Failed to load job details. Please try again.");
            }
        })
        .catch(error => console.error("Error fetching job details:", error));
}

// Function to format date to YYYY-MM-DD
function formatDate(dateString) {
    const date = new Date(dateString);
    const year = date.getFullYear();
    const month = String(date.getMonth() + 1).padStart(2, '0'); // Add leading zero if necessary
    const day = String(date.getDate()).padStart(2, '0'); // Add leading zero if necessary
    return `${year}-${month}-${day}`;
}

// Function to save the updated job details
function saveJobDetails(jobNo, formData) {
    // Log the form data for debugging
    for (const [key, value] of formData.entries()) {
        console.log(key + ": " + value);
    }

    fetch(`updateJobDetails.php?jobNo=${jobNo}`, {
        method: 'POST',
        body: formData,
    })
        .then(response => response.json())
        .then(data => {
            console.log(data); // Log the response from the server
            if (data.success) {
                alert('Job details updated successfully!');
                location.reload(); // Optional: Reload the page after successful update
            } else {
                alert('No job details were updated.');
            }
        })
        .catch(error => {
            console.error('Error saving job details:', error);
            alert('An error occurred while saving the job details.');
        });
}