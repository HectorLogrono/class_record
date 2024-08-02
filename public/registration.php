<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card shadow-sm p-4 registration-container">
            <div class="text-center mb-4">
                <img src="images/bisu.png" alt="Logo" class="registration-logo">
            </div>
            <h3 class="text-center registration-heading">Register</h3>
            <form id="registrationForm" action="register.php" method="POST">
                <div class="form-group floating-label">
                    <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
                </div>
                <div class="form-group floating-label">
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email address" required>
                </div>
                <div class="form-group floating-label password-field">
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                    <span class="toggle-password" id="togglePassword">
                        <span class="toggle-text">Show</span>
                    </span>
                </div>
                <div class="form-group floating-label password-field">
                    <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Confirm Password" required>
                    <span class="toggle-password" id="toggleConfirmPassword">
                        <span class="toggle-text">Show</span>
                    </span>
                    <small id="passwordHelp" class="form-text text-muted">Passwords must match.</small>
                </div>
                <button type="submit" class="btn btn-primary btn-block" id="submitButton">Register</button>
            </form>
            <p class="text-center mt-3">
                Already have an account? <a href="index.php">Login here</a>
            </p>
        </div>
    </div>

    <!-- Include the confirmation card -->
    <?php include 'confirmation_card.php'; ?>

    <script src="scripts/scripts.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
