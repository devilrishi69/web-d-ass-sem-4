<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio | Rishi Raj Singh</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>
<body>

<div id="portfolio-page">

<nav>
  <div class="left">
    <a href="#">Rishi Raj Singh</a>
  </div>

  <div class="right">
    <a href="qualification.html">
      <i class="fa-solid fa-graduation-cap"></i>
      <span>My Qualifications</span>
    </a>
    <a href="logout.php" style="margin-left: 10px; background: transparent; border: 2px solid var(--primary); padding: 10px 18px; color: var(--primary);">
      <i class="fa-solid fa-right-from-bracket"></i>
      <span>Logout</span>
    </a>
  </div>
</nav>

<main>

<section class="hero-section">
  <div class="text">
    <h2>Hello, I am <?php echo htmlspecialchars($_SESSION['user_name']); ?> 👋🏻</h2>
    <p>AI / ML | QA</p>
  </div>

  <div class="headshot">
    <img src="image.png" alt="Profile Picture">
  </div>
</section>

<section id="contact" class="contact-section">
  <h2>Contact</h2>

  <div class="group">

    <div class="text">
      <p>
        Designed & Developed by<br>
        <a href="mailto:rishiishita1615@gmail.com">Rishi Raj Singh</a>
      </p>

      <p id="form-status"></p>
    </div>

    <form id="contact-form">
      <label>Name</label>
      <input type="text" required>

      <label>Email</label>
      <input type="email" required>

      <label>Message</label>
      <textarea rows="5" required></textarea>

      <button type="submit">Send Message</button>
    </form>

  </div>
</section>

  <div style="text-align: center; padding: 40px 0;">
    <a href="logout.php" class="login-btn" style="text-decoration: none; display: inline-block; width: auto; padding: 15px 40px;">Logout from Session</a>
  </div>
</main>
</div>

<script src="script.js"></script>
</body>
</html>
