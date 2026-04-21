<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | Student Portal</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
</head>
<body>

<div id="login-page">
    <div class="login-box">
        <h2>Register</h2>
        <form action="register_process.php" method="POST">
            
            <div class="user-box">
                <input type="text" name="name" required>
                <label>Full Name</label>
            </div>

            <div class="user-box">
                <input type="text" name="username" required>
                <label>Username</label>
            </div>

            <div class="user-box">
                <input type="password" name="password" required>
                <label>Password</label>
            </div>

            <button type="submit" class="login-btn">Register</button>
            
            <div style="margin-top: 20px; text-align: center;">
                <p style="font-size: 14px; color: var(--muted);">Already have an account? <a href="login.php" style="color: var(--primary); font-weight: 600; text-decoration: none;">Login</a></p>
            </div>
        </form>
    </div>
</div>

</body>
</html>
