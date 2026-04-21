<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Student Portal</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
</head>
<body>

<div id="login-page">
    <div class="login-box">
        <form action="login_process.php" method="POST">
            <?php if(isset($_GET['msg'])) echo '<p style="color: green; text-align: center; margin-bottom: 20px;">'.htmlspecialchars($_GET['msg']).'</p>'; ?>
            
            <div class="user-box">
                <input type="text" name="username" required>
                <label>Username</label>
            </div>

            <div class="user-box">
                <input type="password" name="password" required>
                <label>Password</label>
            </div>

            <button type="submit" class="login-btn">Login</button>
            
            <div style="margin-top: 20px; text-align: center;">
                <p style="font-size: 14px; color: var(--muted);">Don't have an account? <a href="register.php" style="color: var(--primary); font-weight: 600; text-decoration: none;">Register</a></p>
            </div>
        </form>
    </div>
</div>

</body>
</html>
