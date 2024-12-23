function retrieveJob(button) {
    // Get the JobNo from the data attribute
    const jobNo = button.getAttribute('retrieve-data-jobno-bin');

    if (confirm("Are you sure you want to retrieve this job?")) {
        $.ajax({
            type: "POST",
            url: "retrieveJob.php", // Backend PHP file to handle the retrieval
            data: { retrieveJobNo: jobNo },
            success: function(response) {
                const res = JSON.parse(response); // Parse the JSON response
                if (res.status === "success") {
                    alert(res.message); // Notify the user of success
                    location.reload(); // Reload the page to reflect changes
                } else {
                    alert(res.message); // Notify the user of an error
                }
            },
            error: function(xhr, status, error) {
                console.error("AJAX Error:", status, error); // Log errors
                alert("An error occurred while retrieving the job.");
            }
        });
    }
}