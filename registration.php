<?php
// Database connection
$conn = new mysqli('localhost', 'root', '', 'tourism_website');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$error_message = ""; // To store error messages
$success_message = ""; // To store success messages
$username_taken = false; // Flag for username already taken
$email_taken = false; // Flag for email already taken

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['username'], $_POST['email'], $_POST['password'], $_POST['confirm_password'])) {
        // Retrieve form data
        $username = trim($_POST['username']);
        $email = trim($_POST['email']);
        $password = trim($_POST['password']);
        $confirm_password = trim($_POST['confirm_password']);

        // Check if passwords match
        if ($password !== $confirm_password) {
            $error_message = "Passwords do not match.";
        } else {
            // Check if username or email is already taken
            $sql = "SELECT * FROM users WHERE username = ? OR email = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("ss", $username, $email);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
                // Check if the issue is with the username or email
                while ($row = $result->fetch_assoc()) {
                    if ($row['username'] === $username) {
                        $username_taken = true;
                        $error_message = "Username is already taken.";
                    }
                    if ($row['email'] === $email) {
                        $email_taken = true;
                        $error_message = "Email is already taken.";
                    }
                }
            } else {
                // Hash the password and insert new user into the database
                $hashed_password = password_hash($password, PASSWORD_DEFAULT);
                $sql = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("sss", $username, $email, $hashed_password);

                if ($stmt->execute()) {
                    $success_message = "Registration successful!";
                } else {
                    $error_message = "Error: Could not complete registration.";
                }
            }

            $stmt->close();
        }
    } else {
        $error_message = "Please fill in all fields.";
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
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
            background-color: #fff;
            width: 100%;
            max-width: 400px;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        }

        .heading {
            text-align: center;
            font-size: 24px;
            color: #333;
            margin-bottom: 20px;
            font-weight: bold;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        input,
        button {
            width: 100%;
            margin: 10px 0;
            padding: 12px;
            font-size: 16px;
            border: 1px solid #ddd;
            border-radius: 8px;
            outline: none;
        }

        input:focus {
            border-color: #1877f2;
        }

        button {
            background-color: hsl(180, 98%, 31%);
            color: #fff;
            border: none;
            cursor: pointer;
            font-weight: bold;
            opacity: 3;
            transition: 0.3s;
        }

        button:hover {
            
            background-color: hsl(185, 60%, 50%);
            opacity: 1;
        }

        .success {
            color: green;
            text-align: center;
            margin-top: 10px;
        }

        .error {
            color: red;
            text-align: center;
            margin-top: 10px;
        }

        .input-error {
            border: 1px solid red !important;
        }

        .footer-login {
            text-align: center;
            margin-top: 15px;
            font-size: 14px;
            color: #666;
        }

        .footer-login a {
            color: #1877f2;
            text-decoration: none;
        }

        .footer-login a:hover {
            text-decoration: underline;
        }
        
    </style>
</head>
<body>
    <div class="container">
        <h2 class="heading"></h2>
        <form action="register.php" method="POST">
            <input type="text" name="username" placeholder="Username" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="password" name="confirm_password" placeholder="Confirm Password" required>

            <label for="role">Role:</label>
            <select name="role" required>
                <option value="user">User</option>
                <option value="admin">Admin</option>
            </select>
            <button type="submit">Register</button>
        </form>

        <?php if (!empty($success_message)): ?>
            <div class="success"><?php echo $success_message; ?></div>
        <?php endif; ?>
        <?php if (!empty($error_message)): ?>
            <div class="error"><?php echo $error_message; ?></div>
        <?php endif; ?>
        <div class="footer-login">
        <hr>
        <p><a href="login.php">Login here</a></p>
        </div>
    </div>
</body>
</html>
