<?php
session_start();
$conn = new mysqli("localhost", "root", "", "tourism_website");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['post_id'])) {
    $post_id = intval($_POST['post_id']);

    // Delete post
    $stmt = $conn->prepare("DELETE FROM blog_posts WHERE id = ?");
    $stmt->bind_param("i", $post_id);
    if ($stmt->execute()) {
        header("Location: 1_blog.php"); // Redirect back to blog page
        exit();
    } else {
        echo "Error deleting post.";
    }
    $stmt->close();
}

$conn->close();
?>
