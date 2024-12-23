function deleteJobDetailsBin(button) {
    // Get the JobNo from the button's attribute
    var jobNo = button.getAttribute('delete-data-jobno-bin');

    // Confirm deletion with the user
    if (confirm('Are you sure you want to delete this job?')) {
        // Make an AJAX call to the PHP script to delete the job
        $.ajax({
            type: 'POST',
            url: 'deleteJobBin.php', // PHP file to handle deletion
            data: { jobno: jobNo },
            dataType: 'json',
            success: function(response) {
                // Handle the response from the server
                if (response.status === 'success') {
                    alert(response.message);
                    // Remove the corresponding row from the table
                    document.getElementById(`job-${jobNo}`).remove();
                } else {
                    alert(response.message);
                }
            },
            error: function(xhr, status, error) {
                console.error('Error:', error);
                alert('There was an error processing your request. Please try again.');
            }
        });
    }
}