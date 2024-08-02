<!-- confirmation_card.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmation Card</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles/styles.css">
</head>
<body>
    <div class="card shadow-sm confirmation-card" id="confirmationCard">
        <div class="card-body">
            <h5 class="card-title text-center">Confirm Your Email</h5>
            <form id="confirmationForm" action="confirm_code.php" method="POST">
                <div class="form-group">
                    <label for="confirmationCode">Enter the code sent to your email:</label>
                    <input type="text" class="form-control" id="confirmationCode" name="confirmationCode" placeholder="Confirmation Code" required>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Confirm</button>
                <button type="button" class="btn btn-secondary btn-block mt-2" id="resendCode">Resend Code</button>
            </form>
        </div>
    </div>

    <script src="scripts/scripts.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
