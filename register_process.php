<?php
require_once 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Basic validation
    if (empty($name) || empty($username) || empty($password)) {
        die("Please fill all fields.");
    }

    // Hash password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO users (name, username, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $username, $hashed_password);

    if ($stmt->execute()) {
        header("Location: login.php?msg=Registration successful! Please login.");
        exit();
    } else {
        if ($conn->errno == 1062) {
            die("Username already exists.");
        } else {
            die("Error: " . $stmt->error);
        }
    }

    $stmt->close();
    $conn->close();
}
?>
