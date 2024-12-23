function viewJobDetailsBin(button) {
    const jobNo = button.getAttribute("data-jobno-bin");

    fetch(`getJobDetailsBin.php?jobNo=${jobNo}`)
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                const viewJobSection = document.getElementById('viewJob');
                const element1 = document.getElementById('postJob');
                const element2 = document.getElementById('updateJob');
                viewJobSection.innerHTML = `
            <div class="d-flex justify-content-between align-items-center job-header mb-3">
                 <h2>Job Details</h2>
                 <button onclick="functionHide()" type="button" class="btn btn-secondary"><i class="ri-logout-box-line"></i> Close</button>
            </div>
            <p><i class="ri-briefcase-2-fill"></i> <strong>Job Title:</strong> ${data.jobTitle}</p>
            <p><i class="ri-id-card-line"></i> <strong>Employment Type:</strong> ${data.employmentType}</p>
            <p><i class="ri-cash-line"></i> <strong>Salary Range:</strong> ₱${data.salaryRange}</p>
            <hr />
            <p><i class="ri-list-view"></i> <strong>Job Description:</strong><br /> ${data.jobDescription}</p>
            <p><i class="ri-list-check-3"></i> <strong>Job Qualifications:</strong><br /> ${data.jobQualifications}</p>
            <hr />
            <p><i class="ri-calendar-2-fill"></i> <strong>Date Opened:</strong> ${data.dateOpened}</p>
            <p><i class="ri-map-pin-fill"></i> <strong>Location:</strong> ${data.location}</p>
            <p><i class="ri-bar-chart-box-line"></i> <strong>Status:</strong> ${data.status}</p>
        `;
                viewJobSection.style.display = "block";
                element1.style.display = 'none';
                element2.style.display = 'none';
            } else {
                alert("Failed to load job details. Please try again.");
            }
        })
        .catch(error => console.error("Error fetching job details:", error));
}