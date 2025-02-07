<?php
session_start();
$conn = new mysqli("localhost", "root", "", "tourism_website");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['share'])) {
    $image = $_POST['image'] ?? '';
    $description = $_POST['description'] ?? '';
    $author = $_POST['username'] ?? 'Guest'; // Default to 'Guest' if not set

    // Insert into database
    $stmt = $conn->prepare("INSERT INTO blog_posts (author, content, image, likes) VALUES (?, ?, ?, 0)");
    $stmt->bind_param("sss", $author, $description, $image);

    if ($stmt->execute()) {
        header("Location: blog.php"); // Redirect to blog after sharing
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>
