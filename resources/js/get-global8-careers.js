function viewJobDetails(button) {
    const jobNo = button.getAttribute("data-jobno");

    // Show modal
    const modal = document.getElementById('job-details-modal');
    const modalContent = document.getElementById('modal-job-details');

    fetch(`get-global8-careers.php?jobNo=${jobNo}`)
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                modalContent.innerHTML = `
                    <p><i class="ri-briefcase-2-fill"></i> <strong>Job Title:</strong> ${data.jobTitle}</p>
                    <p><i class="ri-id-card-line"></i> <strong>Employment Type:</strong> ${data.employmentType}</p>
                    <hr />
                    <p><i class="ri-list-view"></i> <strong>Job Description:</strong><br /> ${data.jobDescription} </p>
                    <p><i class="ri-list-check-3"></i> <strong>Job Qualifications:</strong><br /> ${data.jobQualifications} </p>
                    <hr />
                    <p><i class="ri-calendar-2-fill"></i> <strong>Date Opened:</strong> ${data.dateOpened}</p>
                    <p><i class="ri-map-pin-fill"></i> <strong>Location:</strong> ${data.location}</p>
                    <p><i class="ri-bar-chart-box-line"></i> <strong>Status:</strong> ${data.status}</p>
                `;
            } else {
                alert("Job details could not be loaded.");
            }
                     
        })
        .catch(error => console.error("Error fetching job details:", error));
}

function closeJobDetails() {
    const modal = document.getElementById('job-details-modal');
    modal.style.display = "none";
}

// Close modal if user clicks outside of it
window.onclick = function (event) {
    const modal = document.getElementById('job-details-modal');
    if (event.target === modal) {
        closeJobDetails();
    }
}