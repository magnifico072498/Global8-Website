$(document).ready(function() {
    $('#jobForm').submit(function(e) {
        e.preventDefault(); // Prevent default form submission

        var formData = $(this).serialize();
        console.log(formData); // Debugging

        $.ajax({
            type: 'POST',
            url: 'jobForm.php', // Replace with your PHP file
            data: formData + '&ajax=true',
            dataType: 'json', // Expect JSON response
            success: function(response) {
                console.log(response); // Log response
                if (response.status === 'success') {
                    alert(response.message);
                    $('#jobForm')[0].reset();
                    location.reload(); // Optional: Reload the page after successful update
                } else if (response.status === 'error') {
                    alert(response.message);
                }
            },
            error: function(xhr, status, error) {
                console.error('AJAX Error:', status, error); // Log errors
                alert('There was an error processing your request. Please try again.');
            }
        });
    });
});