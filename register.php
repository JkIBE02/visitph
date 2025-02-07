<?php
// Database connection
$conn = new mysqli('localhost', 'root', '', 'tourism_website');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$error_message = ""; // To store error messages
$success = false;

// Check if form data is set
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $role = trim($_POST['role']);

    // ✅ Username Validation: Only letters, numbers, and underscores
    if (!preg_match("/^[a-zA-Z0-9_]+$/", $username)) {
        $error_message = "Username can only contain letters, numbers, and underscores.";
    }
    // ✅ Email Validation: Must be a valid format (no multiple dots before @)
    elseif (!preg_match("/^[a-zA-Z0-9]+(\.[a-zA-Z0-9]+)?@gmail\.com$/", $email)) {
        $error_message = "Invalid email format.";
    }
    // ✅ Check if username or email already exists
    else {
        $sql = "SELECT * FROM users WHERE username = ? OR email = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $username, $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                if ($row['username'] === $username) {
                    $error_message = "Username is already taken.";
                }
                if ($row['email'] === $email) {
                    $error_message = "The email '$email' is already registered.";
                }
            }
        } else {
            // ✅ If no errors, hash password and insert into database
            $hashed_password = password_hash($password, PASSWORD_BCRYPT);
            $sql = "INSERT INTO users (username, email, password, role) VALUES (?, ?, ?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("ssss", $username, $email, $hashed_password, $role);

            if ($stmt->execute()) {
                $success = true;
            } else {
                $error_message = "Error: Could not complete registration.";
            }
        }
    }
}

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

        .error {
            color: red;
            font-size: 16px;
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
            <div class="error"><?php echo $error_message; ?></div>
            <a href="registration.php" class="link">Try Again</a>
        <?php endif; ?>
    </div>
</body>
</html>
