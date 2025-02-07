<?php
// Database connection
$conn = new mysqli('localhost', 'root', '', 'tourism_website');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$username = $_POST['username'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_BCRYPT);
$role = $_POST['role'];

// Insert into database
$sql = "INSERT INTO users (username, email, password, role) VALUES (?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssss", $username, $email, $password, $role);

$success = false;

if ($stmt->execute()) {
    $success = true;
} 

$stmt->close();
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Status</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f0f2f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            text-align: center;
            background-color: #fff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }

        .checkmark {
            font-size: 50px;
            color: #28a745;
            margin-bottom: 20px;
        }

        .message {
            font-size: 18px;
            color: #333;
            margin-bottom: 10px;
        }

        .link {
            display: inline-block;
            margin-top: 20px;
            font-size: 14px;
            color: #1877f2;
            text-decoration: none;
        }

        .link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php if ($success): ?>
            <div class="checkmark">✔</div>
            <div class="message">Registration successful!</div>
            <a href="login.php" class="link">Go to Login</a>
        <?php else: ?>
            <div class="message" style="color: #e63946;">Error: Could not complete registration.</div>
            <a href="register.php" class="link">Try Again</a>
        <?php endif; ?>
    </div>
</body>
</html>
