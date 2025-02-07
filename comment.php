<?php
session_start();
$conn = new mysqli("localhost", "root", "", "tourism_website");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $post_id = $_POST['post_id'];
    $comment = $_POST['comment'];

    $stmt = $conn->prepare("INSERT INTO comments (post_id, commenter, comment) VALUES (?, 'User', ?)");
    $stmt->bind_param("is", $post_id, $comment);
    $stmt->execute();
    $stmt->close();

    echo json_encode(["success" => true]);
}
?>
