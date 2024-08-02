<?php
// Function to generate a 6-digit confirmation code
function generateConfirmationCode() {
    // Generate a random number between 100000 and 999999
    return rand(100000, 999999);
}

// Generate the code
$confirmationCode = generateConfirmationCode();

// Output the generated code (for testing purposes)
echo "Generated Confirmation Code: " . $confirmationCode;
?>
