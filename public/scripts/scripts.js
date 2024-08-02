document.getElementById('togglePassword').addEventListener('click', function () {
    const passwordField = document.getElementById('password');
    const type = passwordField.getAttribute('type') === 'password' ? 'text' : 'password';
    passwordField.setAttribute('type', type);
    this.querySelector('.toggle-text').textContent = type === 'password' ? 'Show' : 'Hide';
});

document.getElementById('toggleConfirmPassword').addEventListener('click', function () {
    const confirmPasswordField = document.getElementById('confirm_password');
    const type = confirmPasswordField.getAttribute('type') === 'password' ? 'text' : 'password';
    confirmPasswordField.setAttribute('type', type);
    this.querySelector('.toggle-text').textContent = type === 'password' ? 'Show' : 'Hide';
});

let isSubmitting = false;

document.getElementById('registrationForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent the default form submission

    if (isSubmitting) {
        return; // Prevent multiple submissions
    }

    // Validate form
    if (validateForm()) {
        isSubmitting = true; // Set the flag to indicate form submission

        // Disable the submit button to prevent multiple submissions
        document.getElementById('submitButton').disabled = true;

        // Prepare data to send to send.php
        const formData = new FormData(this);

        // Send AJAX request to send.php
        fetch('../config/send.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.text())
        .then(data => {
            console.log(data); // Optionally log response data for debugging

            // Hide the registration container
            document.querySelector('.registration-container').style.display = 'none';

            // Show the confirmation card
            document.getElementById('confirmationCard').style.display = 'block';

            isSubmitting = false; // Reset the flag after submission
        })
        .catch(error => {
            console.error('Error:', error);
            // Re-enable the submit button and reset the flag in case of an error
            document.getElementById('submitButton').disabled = false;
            isSubmitting = false;
        });
    }
});

document.getElementById('resendCode').addEventListener('click', function() {
    // Implement resend code functionality here
    alert('Code resent!');
});

function validatePasswords() {
    const password = document.getElementById('password').value;
    const confirmPassword = document.getElementById('confirm_password').value;
    const passwordHelp = document.getElementById('passwordHelp');
    const submitButton = document.getElementById('submitButton');

    if (password === confirmPassword) {
        passwordHelp.textContent = 'Passwords match';
        passwordHelp.classList.remove('text-danger');
        passwordHelp.classList.add('text-success');
        submitButton.disabled = false;
    } else {
        passwordHelp.textContent = 'Passwords must match';
        passwordHelp.classList.remove('text-success');
        passwordHelp.classList.add('text-danger');
        submitButton.disabled = true;
    }
}

function validateForm() {
    // Validate form fields here
    const username = document.getElementById('username').value.trim();
    const email = document.getElementById('email').value.trim();
    const password = document.getElementById('password').value;
    const confirmPassword = document.getElementById('confirm_password').value;

    // Check if all fields are filled and passwords match
    if (username && email && password && confirmPassword && password === confirmPassword) {
        return true;
    } else {
        return false;
    }
}

document.getElementById('password').addEventListener('input', validatePasswords);
document.getElementById('confirm_password').addEventListener('input', validatePasswords);
document.getElementById('username').addEventListener('input', validateForm);
document.getElementById('email').addEventListener('input', validateForm);
