document.getElementById('jobApplicationForm').addEventListener('submit', function (e) {
    e.preventDefault(); // Prevent the default form submission

    const formData = new FormData(this); // Create FormData object from the form
    const submitButton = document.getElementById('submitBtn');
    const loader = document.getElementById('loadingAnimation');

    submitButton.disabled = true; // Disable the submit button to prevent duplicate submissions
    loader.style.display = 'block'; // Show the loading animation

    fetch('submit-app-form.php', {
        method: 'POST',
        body: formData,
    })
    .then(response => response.json()) // Parse JSON response
    .then(data => {
        if (data.success) {
            alert(data.message);
            this.reset(); // Reset the form on success
        } else {
            alert(`Error: ${data.message}`);
        }
    })
    .catch(error => {
        alert('An unexpected error occurred. Please try again.');
        console.error('Error:', error);
    })
    .finally(() => {
        submitButton.disabled = false; // Re-enable the submit button
        loader.style.display = 'none'; // Hide the loading animation
    });
});
