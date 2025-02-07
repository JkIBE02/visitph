<?php
// Database connection
$conn = new mysqli('localhost', 'root', '', 'tourism_website');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$error_message = ""; // Variable to store error messages
$invalid_username = false; // Flag for invalid username
$invalid_password = false; // Flag for invalid password

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Check if the required form fields exist in $_POST
    if (isset($_POST['username'], $_POST['password'], $_POST['role'])) {

        // Retrieve form data
        $username = $_POST['username'];
        $password = $_POST['password'];
        $role = $_POST['role'];

        // Query the database
        $sql = "SELECT * FROM users WHERE username = ? AND role = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $username, $role);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows === 1) {
            $user = $result->fetch_assoc();

            // Verify password
            if (password_verify($password, $user['password'])) {
                // Start session and set session variables
                session_start();
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['username'] = $user['username'];
                $_SESSION['role'] = $user['role'];

                // Redirect based on role
                if ($role === 'admin') {
                    header("Location: admin_index.php");
                } else {
                    header("Location: home.php");
                }
                exit;
            } else {
                $error_message = "Invalid password.";
                $invalid_password = true;
            }
        } else {
            $error_message = "Invalid username or role.";
            $invalid_username = true;
        }

        $stmt->close();
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
    <title>Login</title>
    <link rel="stylesheet" href="./assets/css/style.css">
    <style>
        /* Reset default styles */
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
        select,
        button {
            width: 100%;
            margin: 10px 0;
            padding: 12px;
            font-size: 16px;
            border: 1px solid #ddd;
            border-radius: 8px;
            outline: none;
        }

        input:focus,
        select:focus {
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

        label {
            font-size: 14px;
            margin-top: 10px;
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

        .error {
            color: red;
            font-size: 14px;
            margin-top: 10px;
            text-align: center;
        }

        .input-error {
            border: 1px solid red !important;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="heading"></h2>
        <form action="login.php" method="POST">
            <input 
                type="text" 
                name="username" 
                placeholder="Username" 
                required 
                class="<?php echo $invalid_username ? 'input-error' : ''; ?>">
            <input 
                type="password" 
                name="password" 
                placeholder="Password" 
                required 
                class="<?php echo $invalid_password ? 'input-error' : ''; ?>">
            <label for="role">Login as:</label>
            <select name="role" id="role" required>
                <option value="user">User</option>
                <option value="admin">Admin</option>
            </select>
            <button type="submit">Login</button>
        </form>
        <?php if (!empty($error_message)): ?>
            <div class="error"><?php echo $error_message; ?></div>
        <?php endif; ?>
        <div class="footer-login">
            <p>Don't have an account? <a href="registration.php">Register here</a></p>
        </div>
    


    </div>
</body>
</html>
