<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"> <!-- Include Font Awesome CSS -->
    <title>Password Reset Confirmation</title>
    <!-- Add any additional styles if needed -->
</head>
<body>

<div class="card login-form">
    <div class="card-body">
        <h3 class="card-title">Password Reset Confirmation</h3>
        
        <div class="card-text">
            <p>Password reset link sent successfully to:</p>
            <p>{{ session('email') }}</p>
        </div>
    </div>
</div>

<!-- Add any additional scripts if needed -->
</body>
</html>
